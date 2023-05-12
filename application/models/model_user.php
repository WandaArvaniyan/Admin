<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_user extends CI_Model {
    private $_table = "tbl_user";

    public $id;
    public $nama;
    public $username;
    public $password;
    public $kode_akses;

    public function rules()
    {
        return [
            [ 'field' => 'nama',
            'label' => 'Nama',
            'rules'=> 'required'],

            [ 'field' => 'username',
            'label' => 'Username',
            'rules'=> 'required'],

            [ 'field' => 'password',
            'label' => 'Password',
            'rules'=> 'required'],

            [ 'field' => 'kode_akses',
            'label' => 'Kode Akses',
            'rules'=> 'required']
        ];
    }

    // public function getUser(){
    //     $this->db->order_by('id','desc');
    //     return $this->db->get('tbl_user');
    // }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getById($id){
        return $this->db->get_where($this->_table,["id" => $id])->row();
    }
    public function save(){
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->kode_akses = $post["kode_akses"];
        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->kode_akses = $post["kode_akses"];
        return $this->db->update($this->_table, $this, array('id'=>$post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table,$this,array("id"=>id));
    }


}
?>