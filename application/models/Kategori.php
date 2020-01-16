<?php

class Kategori extends CI_Model{
    public function tambah(){
        $data = [
            'jenis_kategori' => htmlspecialchars($this->input->post('kategori'))
        ];
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil Ditambahkan</div>');
        redirect('kelola');
    }

    public function hapus($id){
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori');
        $this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil Dihapus</div>');
        redirect('kelola');
    }
}