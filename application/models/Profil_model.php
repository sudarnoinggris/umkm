<?php

class Profil_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    function get_data()
    {
        $query = $this->db->get('profil_usaha');
        return $query->result_array();
    }

    function get_data_id($id)
    {
        $query = $this->db->where('id_anggota_umkm', $id);
        $query = $this->db->get('profil_usaha');
        return $query->result_array();
    }

    public function add_data()
    {
        $data = array(
            'nama_usaha' => $this->input->post('nama_usaha'),
            'jenis_kegiatan_utama' => $this->input->post('jenis_kegiatan_utama'),
            'nama_produk' => $this->input->post('nama_produk'),
            'merk_produk' => $this->input->post('merk_produk'),
            'alamat_usaha' => $this->input->post('alamat_usaha'),
            'status_tempat_usaha' => $this->input->post('status_tempat_usaha'),
            'tahun_berdiri' => $this->input->post('tahun_berdiri'),
            'no_telp' => $this->input->post('no_telp'),
            'email_usaha' => $this->input->post('email_usaha'),
            'badan_usaha' => $this->input->post('badan_usaha'),
            'legalitas' => $this->input->post('legalitas'),
            'npwp_usaha' => $this->input->post('npwp_usaha'),
            'foto_produk' => $this->input->post('foto_produk'),
            'id_anggota_umkm' => $this->session->userdata('id'),
            //'id_anggota_umkm' => $this->input->post('id_anggota_umkm'),

        );
        $this->db->insert('profil_usaha', $data);
    }
    public function add_data_image($data)
    {
        $this->db->insert('profil_usaha', $data);
    }

    public function edit_data()
    {
        $data = array(

            'nama_usaha' => $this->input->post('nama_usaha'),
            'jenis_kegiatan_utama' => $this->input->post('jenis_kegiatan_utama'),
            'nama_produk' => $this->input->post('nama_produk'),
            'merk_produk' => $this->input->post('merk_produk'),
            'alamat_usaha' => $this->input->post('alamat_usaha'),
            'status_tempat_usaha' => $this->input->post('status_tempat_usaha'),
            'tahun_berdiri' => $this->input->post('tahun_berdiri'),
            'no_telp' => $this->input->post('no_telp'),
            'email_usaha' => $this->input->post('email_usaha'),
            'badan_usaha' => $this->input->post('badan_usaha'),
            'legalitas' => $this->input->post('legalitas'),
            'npwp_usaha' => $this->input->post('npwp_usaha'),
            'foto_produk' => $this->input->post('foto_produk'),
            'id_anggota_umkm' => $this->input->post('id_anggota_umkm'),

        );
        $this->db->where('id_profil_usaha', $this->input->post('id_profil_usaha'));
        $this->db->update('profil_usaha', $data);
    }
    public function edit_data_image($data)
    {
        $this->db->where('id_profil_usaha', $this->input->post('id_profil_usaha'));
        $this->db->update('profil_usaha', $data);
    }
    public function hapus_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getbyid($id)
    {
        return $this->db->get_where('profil_usaha', array('id_profil_usaha' => $id))->result_array();
    }
}
