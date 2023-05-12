<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_user extends CI_Model {
    
    // public function getUser(){
    //     $this->db->order_by('id','desc');
    //     return $this->db->get('tbl_user');
    // }
    function tampil_data(){
        return $this->db->get('tbl_user');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

}
?>