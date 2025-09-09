<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Welcome Guest';

        $this->load->view('templates/header', $data);
        $this->load->view('guest/index', $data);
        $this->load->view('templates/footer');
    }
}
