<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pendaftar_model');
        $this->load->model('table_model');
        if (!$this->session->userdata('userid')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = "Pendaftar";
        $data['pendaftar'] = $this->pendaftar_model->get_data_pendaftar();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pendaftar/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = 'Pendaftar';
        $data['subtitle'] = 'Add Pendaftar';

        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[pendaftar_umkm.email]');



        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pendaftar/addView', $data);
            $this->load->view('templates/footer');
        } else {

            $this->pendaftar_model->add_data();
            $this->session->set_flashdata('message', 'Penambahan Pendaftar berhasil');
            redirect('pendaftar');
        }
    }
    function edit($id)
    {
        $data['title'] = 'Master Pendaftar';
        $data['subtitle'] = 'Edit Pendaftar';
        $data['pendaftar'] = $this->pendaftar_model->getbyid($id);



        $this->form_validation->set_rules('id', 'id', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pendaftar/editView', $data);
            $this->load->view('templates/footer');
        } else {

            $this->pendaftar_model->edit_data();
            $this->session->set_flashdata('message', 'Edit Data berhasil');
            redirect('pendaftar');
        }
    }

    function delete($id)
    {
        $where = array('id_anggota_umkm' => rawurldecode($id));
        $this->pendaftar_model->hapus_data('pendaftar_umkm', $where);
        $this->session->set_flashdata('message', 'Penghapusan Pendaftar ' . $id . ' Berhasil');
        redirect('pendaftar');
    }

    function validasi($id)
    {
        $data['title'] = 'Pendaftar';
        $data['subtitle'] = 'Validasi Pendaftar';
        $data['pendaftar'] = $this->pendaftar_model->getvalidasi($id);
        $this->form_validation->set_rules('id_anggota_umkm', 'id_anggota_umkm', 'required');
        $this->form_validation->set_rules('id_profil_usaha', 'id_profil_usaha', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pendaftar/validasi', $data);
            $this->load->view('templates/footer');
        } else {

            $this->pendaftar_model->validasi();
            $this->session->set_flashdata('message', 'Edit Data berhasil');
            redirect('pendaftar');
        }
    }
}
