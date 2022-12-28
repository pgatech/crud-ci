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

    public function getMahasiswaById($id)
    {
       return $this->db->get_where('tb_mahasiswa', ['id' => $id])->row_array();
    }

    public function updateDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('tb_mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
        $keywords = $this->input->post('keywords');
        $this->db->like('nama', $keywords);
        $this->db->or_like('jurusan', $keywords);
        $this->db->or_like('email', $keywords);
        $this->db->or_like('nim', $keywords);

        return $this->db->get('tb_mahasiswa')->result_array();
    }
}

?>