<?php

class Status_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    function get_data($id)
    {
        $this->db->select('*,IFNULL(id_status,0) status');
        $this->db->from('pendaftar_umkm');
        $this->db->join('anggota_umkm', 'anggota_umkm.id_anggota_umkm = pendaftar_umkm.id_anggota_umkm', 'left');
        $this->db->where('pendaftar_umkm.id_anggota_umkm=', $id);
        //$this->db->having('id_anggota_umkm',  $id); 
        $query = $this->db->get();
        return $query->result_array();
    }
}
