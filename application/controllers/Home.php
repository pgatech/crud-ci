<?php 

class Home extends CI_Controller{
    public function index($nama = ''){

        $data['judul'] = 'Homepage System';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}

?>