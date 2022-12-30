<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['judul'] = 'Login Sistem';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/login');
    }

    public function registration(){

        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[8]|matches[password2]',[
            'matches' => 'Password does not match!',
            'min_length' => 'Password min 8 character!',
        ]);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

        if ($this->form_validation->run() == false){
            $data['judul'] = 'Registration Account';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registration');
        }else{
            $this->Auth_model->addNewAccount();
            $this->session->set_flashdata('flash','Register!');
            redirect('auth/registration');
        }
    }
}