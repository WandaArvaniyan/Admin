<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("model_user");
        $this->load->library('form_validation');
    }
    public function index(){
        $data['tbl_user']=$this->model_user->getAll();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('user',$data);
        $this->load->view('template/footer');       
        
    }

    public function add(){
        $user = $this->model_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()){
            $user->update();
            $this->session->set_flashdata('Success!', 'Berhasil Disimpan!');
        }

        $data["user"] = $user->getById($id);
        if(!$data["product"]) show_404();

        $this->load->view("user/edit_form", $data);
    }

    public function delete($id=null){
        if (!isset($id)) show_404();
        if ($this->model_user->delete($id)){
            redirect(site_url('user'));
        }

    }
}
?>