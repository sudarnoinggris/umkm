<?php
defined('BASEPATH') or exit('No direct access script access allowed');
class Daftar extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_model');
        $this->load->model('table_model');
    }
    function index()
    {
        $data['title'] = "Anggota UMKM";
        $data['anggota'] = $this->anggota_model->get_data_anggota();
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_nav', $data);
        $this->load->view('daftar', $data);
        $this->load->view('templates/home_footer');
    }
}
