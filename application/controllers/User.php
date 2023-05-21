<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_user");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['tbl_user'] = $this->model_user->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('user', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('user/u_input');
        $this->load->view('template/footer');
    }

    function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $kode_akses = $this->input->post('kode_akses');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'kode_akses' => $kode_akses
        );
        $this->model_user->input_data($data, 'tbl_user');
        redirect('User/index');
    }


    public function edit($id)
    {
        // $where = array('id'=>$id);
        // $data['user']= $this->model_user->edit_data($where,'tbl_user')->result();

        $get_user = $this->model_user->get_by_id($id);
        $data = array(
            'user' => $get_user
        );

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('user/u_edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $kode_akses = $this->input->post('kode_akses');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'kode_akses' => $kode_akses
        );
        // $where = array('nama' => $nama);
        // $this->model_user->update_data($where, $data, 'tbl_user');
        $this->model_user->update($id, $data);
        redirect('User/index');
    }

    public function delete($id)
    {
        // $where = array('nama'=>$nama);
        // $data['user']= $this->model_user->hapus_data($where,'tbl_user');
        $row = $this->model_user->get_by_id($id);

        if ($row) {
            $this->model_user->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('User/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('User/index');
        }
        
    }

}
