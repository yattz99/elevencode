<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
