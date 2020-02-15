<?php

class Anggota_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    function get_data()
    {
        // $query = $this->db->get('anggota_umkm');
        // return $query->result_array();
        $this->db->select('*');
        $this->db->from('anggota_umkm');
        $this->db->join('pendaftar_umkm', 'anggota_umkm.id_anggota_umkm = pendaftar_umkm.id_anggota_umkm');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_anggota()
    {
        $this->db->select('profil_usaha.*,pendaftar_umkm.*,anggota_umkm.id_status');
        $this->db->from('profil_usaha');
        $this->db->join('pendaftar_umkm', 'profil_usaha.id_anggota_umkm=pendaftar_umkm.id_anggota_umkm');
        $this->db->join('anggota_umkm', 'anggota_umkm.id_anggota_umkm=pendaftar_umkm.id_anggota_umkm 
        AND  anggota_umkm.id_profil_usaha=profil_usaha.id_profil_usaha');


        //$this->db->having('id_anggota_umkm',  $id); 
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_data()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
        );
        $this->db->insert('anggota_umkm', $data);
    }

    public function edit_data()
    {
        $data = array(

            'nama' => $this->input->post('nama'),

        );
        $this->db->where('id_anggota_umkm', $this->input->post('id'));
        $this->db->update('anggota_umkm', $data);
    }

    public function hapus_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getbyid($id)
    {
        return $this->db->get_where('anggota_umkm', array('id_anggota_umkm' => $id))->result_array();
    }
    public function getunvalidasi($id)
    {
        $this->db->select('profil_usaha.*,pendaftar_umkm.*,anggota_umkm.id_status');
        $this->db->from('profil_usaha');
        $this->db->join('pendaftar_umkm', 'profil_usaha.id_anggota_umkm=pendaftar_umkm.id_anggota_umkm');
        $this->db->join('anggota_umkm', 'anggota_umkm.id_anggota_umkm=pendaftar_umkm.id_anggota_umkm 
        AND  anggota_umkm.id_profil_usaha=profil_usaha.id_profil_usaha');

        $this->db->where('id_status', $id);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function unvalidasi()
    {
        $data = array(
            'id_anggota_umkm' => $this->input->post('id_anggota_umkm'),
            'id_profil_usaha' => $this->input->post('id_profil_usaha'),

            'id_status' => $this->input->post('id_status'),


        );
        //$this->db->where($where);
        $this->db->delete('anggota_umkm', $data);
    }
}
