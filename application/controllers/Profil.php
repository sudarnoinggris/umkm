<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('profil_model');
        $this->load->model('table_model');
        if (!$this->session->userdata('userid')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = "Profil Usaha";
        $id = $this->session->userdata('id');
        $data['profil'] = $this->profil_model->get_data_id($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('profil/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = 'Profil Usaha';
        $data['subtitle'] = 'Add Profil';

        $this->form_validation->set_rules('nama_usaha', 'nama_usaha', 'required');
        $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');

        $config['upload_path']          = './assets/img/profil';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = TRUE;
        $config['max_size']             = 50240;

        $this->load->library('upload', $config);
        $foto_produk = "";
        $foto_legalitas = "";

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profil/addView', $data);
            $this->load->view('templates/footer');
        } else {
            if (!$this->upload->do_upload('berkas')) {
                //$error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('msgerror', $this->upload->display_errors());
            } else {
                $upload_data = $this->upload->data();
                $foto_produk = $upload_data['file_name'];
                //$Gambar1 = $file_name;
            }
            if (!$this->upload->do_upload('berkas2')) {
                //$error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('msgerror', $this->upload->display_errors());
            } else {
                $upload_data2 = $this->upload->data();
                $file_name2 = $upload_data2['file_name'];
                $foto_legalitas = $file_name2;
            }

            $data = array(
                'nama_usaha' => $this->input->post('nama_usaha'),
                'jenis_kegiatan_utama' => $this->input->post('jenis_kegiatan_utama'),
                'nama_produk' => $this->input->post('nama_produk'),
                'merk_produk' => $this->input->post('merk_produk'),
                'alamat_usaha' => $this->input->post('alamat_usaha'),
                'status_tempat_usaha' => $this->input->post('status_tempat_usaha'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'no_telp' => $this->input->post('no_telp'),
                'email_usaha' => $this->input->post('email_usaha'),
                'badan_usaha' => $this->input->post('badan_usaha'),
                'legalitas' => $foto_legalitas,
                'npwp_usaha' => $this->input->post('npwp_usaha'),
                'foto_produk' => $foto_produk,
                'id_anggota_umkm' => $this->session->userdata('id'),

            );

            $this->profil_model->add_data_image($data);
            $this->session->set_flashdata('message', 'Penambahan Profil Usaha Berhasil');
            redirect('profil');
        }
    }
    function edit($id)
    {
        $data['title'] = 'Profil Usaha';
        $data['subtitle'] = 'Edit Profil';
        $data['profil'] = $this->profil_model->getbyid($id);

        $this->form_validation->set_rules('nama_usaha', 'nama_usaha', 'required');
        $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');

        $config['upload_path']          = './assets/img/profil';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = TRUE;
        $config['max_size']             = 50240;

        $this->load->library('upload', $config);
        $foto_produk = $this->input->post('foto_produk');
        $foto_legalitas = $this->input->post('legalitas');;

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profil/editView', $data);
            $this->load->view('templates/footer');
        } else {
            if (!$this->upload->do_upload('berkas')) {
                //$error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('msgerror', $this->upload->display_errors());
            } else {
                $upload_data = $this->upload->data();
                $foto_produk = $upload_data['file_name'];
                //$Gambar1 = $file_name;
            }
            if (!$this->upload->do_upload('berkas2')) {
                //$error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('msgerror', $this->upload->display_errors());
            } else {
                $upload_data2 = $this->upload->data();
                $file_name2 = $upload_data2['file_name'];
                $foto_legalitas = $file_name2;
            }

            $data = array(
                'nama_usaha' => $this->input->post('nama_usaha'),
                'jenis_kegiatan_utama' => $this->input->post('jenis_kegiatan_utama'),
                'nama_produk' => $this->input->post('nama_produk'),
                'merk_produk' => $this->input->post('merk_produk'),
                'alamat_usaha' => $this->input->post('alamat_usaha'),
                'status_tempat_usaha' => $this->input->post('status_tempat_usaha'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'no_telp' => $this->input->post('no_telp'),
                'email_usaha' => $this->input->post('email_usaha'),
                'badan_usaha' => $this->input->post('badan_usaha'),
                'legalitas' => $foto_legalitas,
                'npwp_usaha' => $this->input->post('npwp_usaha'),
                'foto_produk' => $foto_produk,
                'id_anggota_umkm' => $this->session->userdata('id'),

            );

            $this->profil_model->edit_data_image($data);
            $this->session->set_flashdata('message', 'Penambahan Profil Usaha Berhasil');
            redirect('profil');
        }
    }


    function delete($id)
    {
        $where = array('id_profil_usaha' => rawurldecode($id));
        $this->profil_model->hapus_data('profil_usaha', $where);
        $this->session->set_flashdata('message', 'Penghapusan Profil Usaha ' . $id . ' Berhasil');
        redirect('profil');
    }
}
