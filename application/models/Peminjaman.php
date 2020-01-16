<?php

class Peminjaman extends CI_Model{
    public function tambah(){
        $data = [
            'kode_buku' => $this->input->post('buku'),
            'nim' => $this->input->post('nim'),
            'tgl_pinjam' => $this->input->post('pinjam'),
            'tgl_kembali' => $this->input->post('kembali')
        ];
        $this->db->insert('pinjaman',$data);
        $this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil Ditambahkan</div>');
        redirect('kelola');
    }

    public function hapus($id){
        $this->db->where('id_pinjam',$id);
        $this->db->delete('pinjaman');
        $this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil Dihapus</div>');
        redirect('kelola');
    }
}