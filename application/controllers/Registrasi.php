<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('registrasi_model');
        $this->load->model('table_model');
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $data['title'] = 'Registrasi';
        $data['subtitle'] = 'Add Pendaftar';
        $data['kategori'] = $this->table_model->get_data('kategori');
        $data['jenis'] = $this->table_model->get_data('jenis');

        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        //$this->form_validation->set_rules('npwp_pribadi', 'npwp_pribadi', 'required');

        $config['upload_path']          = './assets/img/pendaftar';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = TRUE;
        $config['max_size']             = 50240;
        $file_name = "";
        $this->load->library('upload', $config);

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('message', 'Ada form yang tidak lengkap');
            $this->load->view('templates/auth_header', $data);
            $this->load->view('registrasi/index');
            $this->load->view('templates/auth_footer');
        } else {


            if (!$this->upload->do_upload('berkas')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('msgerror', $this->upload->display_errors());
            } else {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                //$Gambar1 = $file_name;
            }
            //$image   = $this->upload->data('file_name');   
            //$data yg diinsert
            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis'),
                'kategori' => $this->input->post('kategori'),
                'no_ktp' => $this->input->post('no_ktp'),
                'pend_terakhir' => $this->input->post('pend_terakhir'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat_rumah' => $this->input->post('alamat_rumah'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'npwp_pribadi' => $this->input->post('npwp_pribadi'),
                'foto' =>  $file_name,

            );

            $this->registrasi_model->add_data_image($data);
            $this->session->set_flashdata('message', 'Proses Registrasi berhasil');
            redirect('auth');
        }
    }

    public function sukses()
    {
        $data['title'] = "Registrasi Sukses";
        $this->load->view('templates/header', $data);
        $this->load->view('registrasi/sukses');
        $this->load->view('templates/footer');
    }
}
