<?php
defined('BASEPATH') or exit('No direct access script access allowed');
class Home extends CI_controller
{
    function index()
    {
        $data['title'] = 'Home';
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_nav', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/home_footer');
    }
}
