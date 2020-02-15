<?php

class Registrasi_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    public function add_data_image($data)
    {

        $this->db->insert('pendaftar_umkm', $data);
    }
}
