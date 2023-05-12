<?php
class Dashboard extends CI_Controller {
    public function index(){

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }
}
?>