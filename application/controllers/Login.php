<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('useremail')) {
            redirect('dashboard');
        }
        $session = $this->session->userdata('useremail');


        if ($session == '') {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('useremail', 'useremail', 'trim|required');
            $this->form_validation->set_rules('password', 'passrword', 'trim|required');

            $data['title'] = 'Login OK';
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/auth_header', $data);
                $this->load->view('login/login');
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
        $useremail = $this->input->post('useremail');
        $userpassword = $this->input->post('userpassword');
        $user = $this->db->get_where('pendaftar_umkm', ['email' => $useremail])->row_array();
        // jika user ada 
        if ($user) {

            //cek password
            if ($userpassword == $user['password']) {
                $data = ['useremail' => $user['email'], 'usernama' => $user['nama']];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> User Tidak Ada </div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('useremail');
        $this->session->unset_userdata('usernama');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Anda Berhasil Logout</div>');
        redirect('login');
    }
}
