<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('status_model');
        $this->load->model('table_model');
        $this->load->library('session');
        if (!$this->session->userdata('userid')) {
            redirect('auth');
        }
    }
    public function index()
    {
        //$id = 2;
        $id = $this->session->userdata('id');
        $data['title'] = "Status Anggota";
        $data['status'] = $this->status_model->get_data($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('status/index', $data);
        $this->load->view('templates/footer');
    }
}
