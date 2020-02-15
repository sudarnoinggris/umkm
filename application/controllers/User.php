<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('table_model');
        if (!$this->session->userdata('userid')) {
            redirect('auth');
        }
    }
    public function index()
    {
        
        $data['title'] = "Master User";
        $data['user'] = $this->user_model->get_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = 'Master User';
        $data['subtitle'] = 'Add User';
        $data['level'] = $this->table_model->get_data('level');
        $this->form_validation->set_rules('username', 'username', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/addView', $data);
            $this->load->view('templates/footer');
        } else {

            $this->user_model->add_data();
            $this->session->set_flashdata('message', 'Penambahan user berhasil');
            redirect('user');
        }
    }
    function edit($id)
    {
        $data['title'] = 'Master User';
        $data['subtitle'] = 'Edit User';
        $data['user'] = $this->user_model->getbyid($id);
        $data['level'] = $this->table_model->get_data('level');


        $this->form_validation->set_rules('username', 'username', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editView', $data);
            $this->load->view('templates/footer');
        } else {

            $this->user_model->edit_data();
            $this->session->set_flashdata('message', 'Edit Data berhasil');
            redirect('user');
        }
    }
    function password($id)
    {
        $data['title'] = 'Password';
        $data['subtitle'] = 'Edit Password';
        $data['user'] = $this->user_model->getbyid($id);
        $this->form_validation->set_rules('userid', 'userid', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/password', $data);
            $this->load->view('templates/footer');
        } elseif ($id != $this->session->userdata('userid')) {
            $this->session->set_flashdata('message', 'Anda tidak punya hak');
            //echo "Ok";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/password', $data);
            $this->load->view('templates/footer');
        } else {

            $this->user_model->edit_password();
            $this->session->set_flashdata('message', 'Edit Password berhasil');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/password', $data);
            $this->load->view('templates/footer');
        }
    }
    function delete($id)
    {
        $where = array('username' => rawurldecode($id));
        $this->user_model->hapus_data('master_user', $where);
        $this->session->set_flashdata('message', 'Penghapusan username ' . $id . ' Berhasil');
        redirect('user');
    }
}
