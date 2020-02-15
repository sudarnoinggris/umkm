<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_model');
        $this->load->model('table_model');
        if (!$this->session->userdata('userid')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = "Anggota";
        $data['anggota'] = $this->anggota_model->get_data_anggota();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = 'anggota';
        $data['subtitle'] = 'Add anggota';

        $this->form_validation->set_rules('username', 'username', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('anggota/addView', $data);
            $this->load->view('templates/footer');
        } else {

            $this->anggota_model->add_data();
            $this->session->set_flashdata('message', 'Penambahan anggota berhasil');
            redirect('anggota');
        }
    }
    function edit($id)
    {
        $data['title'] = 'Master anggota';
        $data['subtitle'] = 'Edit anggota';
        $data['anggota'] = $this->anggota_model->getbyid($id);



        $this->form_validation->set_rules('id', 'id', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('anggota/editView', $data);
            $this->load->view('templates/footer');
        } else {

            $this->anggota_model->edit_data();
            $this->session->set_flashdata('message', 'Edit Data berhasil');
            redirect('anggota');
        }
    }

    function delete($id)
    {
        $where = array('id_anggota_umkm' => rawurldecode($id));
        $this->anggota_model->hapus_data('master_user', $where);
        $this->session->set_flashdata('message', 'Penghapusan anggota ' . $id . ' Berhasil');
        redirect('anggota');
    }

    function unvalidasi($id)
    {
        $data['title'] = 'Anngota';
        $data['subtitle'] = 'Unvalidasi Anggota';
        $data['anggota'] = $this->anggota_model->getunvalidasi($id);
        $this->form_validation->set_rules('id_anggota_umkm', 'id_anggota_umkm', 'required');
        $this->form_validation->set_rules('id_profil_usaha', 'id_profil_usaha', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('anggota/unvalidasi', $data);
            $this->load->view('templates/footer');
        } else {

            $this->anggota_model->unvalidasi();
            $this->session->set_flashdata('message', 'Unvalidasi Anggota berhasil');
            redirect('anggota');
        }
    }
}
