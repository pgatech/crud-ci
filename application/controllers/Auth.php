<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index(){
        $data['judul'] = 'Login Sistem';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/login');
    }

    public function registration(){
        $data['judul'] = 'Registration Account';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/registration');
    }
}