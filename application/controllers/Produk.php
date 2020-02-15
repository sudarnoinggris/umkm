<?php
defined('BASEPATH') or exit('No direct access script access allowed');
class Produk extends CI_controller
{
    function index()
    {
        $data['title'] = 'Produk UMKM';
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_nav', $data);
        $this->load->view('produk', $data);
        $this->load->view('templates/home_footer');
    }
}
