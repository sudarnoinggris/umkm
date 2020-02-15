<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('userid')) {
            redirect('auth');
        }
    }
    public function index()
    {

        $data['jumlah_pendaftar'] = $this->db->query("SELECT COUNT(*) as jumlah FROM pendaftar_umkm")->row_array();
        $data['jumlah_validasi'] = $this->db->query("SELECT COUNT(*) jumlah FROM anggota_umkm")->row_array();
        $data['jumlah_profil'] = $this->db->query("SELECT COUNT(*) jumlah FROM profil_usaha")->row_array();
        $data['jumlah_user'] = $this->db->query("SELECT COUNT(*) jumlah FROM master_user")->row_array();
        $data['title'] = "Dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
