<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("model_user");
        $this->load->library('form_validation');
    }
    public function index(){
        $data['tbl_user']=$this->model_user->tampil_data();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('user',$data);
        $this->load->view('template/footer');       
        
    }

    function tambah(){
        $this->load->view('u_input');
    }
    
    function tambah_aksi(){
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
        redirect('crud/index');
    }
}
?>