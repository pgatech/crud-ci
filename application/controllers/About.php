<?php 

class About extends CI_Controller{
    public function index(){

        $data['judul'] = 'About';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('about/index');
        $this->load->view('templates/footer');
    }
}

?>