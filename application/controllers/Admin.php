<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('userid')) {
            redirect('dashboard');
        }
        $session = $this->session->userdata('userid');


        if ($session == '') {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('userid', 'UserId', 'trim|required');
            $this->form_validation->set_rules('password', 'Passrword', 'trim|required');

            $data['title'] = 'Login COY';
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/auth_header', $data);
                $this->load->view('admin/login');
                $this->load->view('templates/auth_footer');
            } else {
                //validasi sukses
                $this->_login();
            }
        } else {
            redirect('dashboard');
        }
    }

    private function _login()
    {
        $userid = $this->input->post('userid');
        $password = $this->input->post('password');
        $user = $this->db->get_where('master_user', ['username' => $userid])->row_array();
        // jika user ada 
        if ($user) {

            //cek password
            if ($password == $user['password']) {
                $data = ['userid' => $user['username'], 'name' => $user['nama'],   'level' => $user['level']];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> User Tidak Ada </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Anda Berhasil Logout</div>');
        redirect('auth');
    }
}
