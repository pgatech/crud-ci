<?php 

class Login extends CI_Controller{

    public function index(){

        $data['judul'] = 'Login Sistem';
        $this->load->view('templates/header', $data);
        $this->load->view('login/index');
    }
}

?>