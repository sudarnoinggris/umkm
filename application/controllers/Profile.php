<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        if (!$this->session->userdata('userid')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = "My Profile";
        $data['user'] = $this->db->get_where('master_user', ['username' => $this->session->userdata('userid')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('templates/footer');
    }

    public function index2()
    {
        $data['title'] = 'My Profile';
        $id = $this->session->userdata('id');
        $data['user'] = $this->user_model->getbyid1($id);
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profile/index', $data);
            $this->load->view('templates/footer');
        } else {

            $this->user_model->edit_password();
            $this->session->set_flashdata('message', 'Edit Data berhasil');
            redirect('profile');
        }
    }
}
