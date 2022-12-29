<?php 

class Dosen extends CI_Controller{

    public function index()
    {
        $data['judul'] = 'Halaman Dosen';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('dosen/index');
        $this->load->view('templates/footer');
    }
}

?>