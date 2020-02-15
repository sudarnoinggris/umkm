<?php

class Pendaftar_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    function get_data()
    {
        $query = $this->db->get('pendaftar_umkm');
        return $query->result_array();
    }
    function get_data_pendaftar()
    {
        $this->db->select('profil_usaha.*,pendaftar_umkm.*,anggota_umkm.id_status');
        $this->db->from('profil_usaha');
        $this->db->join('pendaftar_umkm', 'profil_usaha.id_anggota_umkm=pendaftar_umkm.id_anggota_umkm', 'left');
        $this->db->join('anggota_umkm', 'anggota_umkm.id_anggota_umkm=pendaftar_umkm.id_anggota_umkm 
        AND  anggota_umkm.id_profil_usaha=profil_usaha.id_profil_usaha', 'left');
        $this->db->where('id_status IS NULL');
        //$this->db->having('id_anggota_umkm',  $id); 
        $query = $this->db->get();
        return $query->result_array();
    }




    public function add_data()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'no_ktp' => $this->input->post('no_ktp'),
            'pend_terakhir' => $this->input->post('pend_terakhir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat_rumah' => $this->input->post('alamat_rumah'),
            'no_telp' => $this->input->post('no_telp'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'npwp_pribadi' => $this->input->post('npwp_pribadi'),
            //'foto' => $this->input->post('foto'),
            //'foto' => $upload['file']['file_name'],

        );
        $this->db->insert('pendaftar_umkm', $data);
    }

    public function add_data_image($data)
    {

        $this->db->insert('pendaftar_umkm', $data);
    }

    public function edit_data()
    {
        $data = array(

            'nama' => $this->input->post('nama'),
            'jenis' => $this->input->post('jenis'),
            'kategori' => $this->input->post('kategori'),
            'no_ktp' => $this->input->post('no_ktp'),
            'pend_terakhir' => $this->input->post('pend_terakhir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat_rumah' => $this->input->post('alamat_rumah'),
            'no_telp' => $this->input->post('no_telp'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'npwp_pribadi' => $this->input->post('npwp_pribadi'),
            'foto' => $this->input->post('foto'),

        );
        $this->db->where('id_anggota_umkm', $this->input->post('id'));
        $this->db->update('pendaftar_umkm', $data);
    }

    public function validasi()
    {
        $data = array(
            'id_anggota_umkm' => $this->input->post('id_anggota_umkm'),
            'id_profil_usaha' => $this->input->post('id_profil_usaha'),
            'id_user' => $this->session->userdata('id'),


        );
        $this->db->insert('anggota_umkm', $data);
    }

    public function hapus_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getbyid($id)
    {
        return $this->db->get_where('pendaftar_umkm', array('id_anggota_umkm' => $id))->result_array();
    }

    public function getvalidasi($id)
    {
        $this->db->select('profil_usaha.*,pendaftar_umkm.*,anggota_umkm.id_status');
        $this->db->from('profil_usaha');
        $this->db->join('pendaftar_umkm', 'profil_usaha.id_anggota_umkm=pendaftar_umkm.id_anggota_umkm', 'left');
        $this->db->join('anggota_umkm', 'anggota_umkm.id_anggota_umkm=pendaftar_umkm.id_anggota_umkm 
        AND  anggota_umkm.id_profil_usaha=profil_usaha.id_profil_usaha', 'left');
        $this->db->where('profil_usaha.id_profil_usaha', $id);

        $query = $this->db->get();
        return $query->result_array();
    }
}
