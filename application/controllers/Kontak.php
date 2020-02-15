<?php
defined('BASEPATH') or exit('No direct access script access allowed');
class Kontak extends CI_controller
{
    function index()
    {
        $data['title'] = 'Kontak kami';
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_nav', $data);
        $this->load->view('kontak', $data);
        $this->load->view('templates/home_footer');
    }
}
