<?php 

class Mahasiswa_model extends CI_Model{
    public function getAllMahasiswa()
    {
       return $query = $this->db->get('tb_mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->insert('tb_mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tb_mahasiswa');
    }
}

?>