<?php
defined('BASEPATH') or exit('No direct script access allowed');
class model_user extends CI_Model
{

    public $table = 'tbl_user';
    public $id = 'id';

    // public function getUser(){
    //     $this->db->order_by('id','desc');
    //     return $this->db->get('tbl_user');
    // }
    function tampil_data()
    {
        return $this->db->get('tbl_user');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // New Custom Edit/Update

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
}
