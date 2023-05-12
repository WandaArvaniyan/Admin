<?php
class Akses extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('model_akses');
    }
    public function index(){
        $data['kode_akses']=$this->model_akses->getAkses();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('akses',$data);
        $this->load->view('template/footer');       
        
    }
}
?>