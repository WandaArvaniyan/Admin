<?php
class model_akses extends CI_Model {
    public function getAkses(){
        $this->db->order_by('id','desc');
        return $this->db->get('kode_akses');
    }
}
?>