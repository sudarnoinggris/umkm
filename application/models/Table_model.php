<?php

class Table_model extends CI_Model
{

    public function __construct()
    {

        $this->load->database();
    }

    function get_data($table)
    {

        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function add($table, $data)
    {
        $this->db->insert($table, $data);
    }
    public function edit_data($table, $data, $idtable, $id)
    {

        $this->db->where($idtable, $id);
        $this->db->update($table, $data);
    }
    public function del($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function hapus_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getbyid($table, $idtable, $id)
    {
        return $this->db->get_where($table, array($idtable => $id))->result_array();
    }
}
