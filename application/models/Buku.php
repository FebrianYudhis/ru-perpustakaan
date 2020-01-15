<?php

class Buku extends CI_Model{
    public function tambah(){
        $data = [
            'kode_buku' => htmlspecialchars($this->input->post('kode')),
            'id_kategori' => $this->input->post('kategori'),
            'judul' => htmlspecialchars($this->input->post('judul')),
            'pengarang' => htmlspecialchars($this->input->post('pengarang')),
            'penerbit' => htmlspecialchars($this->input->post('penerbit')),
            'tahun_cetakan' => $this->input->post('tahun'),
            'tgl_pembelian' => $this->input->post('pembelian'),
            'harga_beli' => $this->input->post('harga')
        ];
        $this->db->insert('buku',$data);
        $this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil Ditambahkan</div>');
        redirect('kelola');
    }
}