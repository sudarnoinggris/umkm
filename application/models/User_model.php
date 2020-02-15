<?php

class User_model extends CI_Model
{

    public function __construct()
    {

        $this->load->database();
    }

    function get_data()
    {

        $query = $this->db->get('master_user');
        return $query->result_array();
    }

    public function add_data()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'jabatan' => $this->input->post('jabatan'),
            'level' => $this->input->post('level'),

        );
        $this->db->insert('master_user', $data);
    }

    public function edit_data()
    {
        $data = array(

            'username' => $this->input->post('username'),

            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'jabatan' => $this->input->post('jabatan'),
            'level' => $this->input->post('level'),

        );
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('master_user', $data);
    }
    public function edit_password()
    {
        $data = array(
            'password' => md5($this->input->post('password')),
        );
        $this->db->where('userid', $this->input->post('userid'));
        $this->db->update('user', $data);
    }


    public function hapus_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getbyid($id)
    {
        return $this->db->get_where('master_user', array('username' => $id))->result_array();
    }

    public function getbyid1($id)
    {
        return $this->db->get_where('master_user', array('id_user' => $id))->result_array();
    }
}
