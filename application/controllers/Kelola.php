<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		apakah_sudah_masuk();
		$this->load->model('Mahasiswa');
		$this->load->model('Kategori');
		$this->load->model('Buku');
		$this->load->model('Peminjaman');
    }

	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['aktif'] = 'Dashboard';
		$this->load->view('templates/kelola/header',$data);
		$this->load->view('kelola/utama');
		$this->load->view('templates/kelola/footer');
	}

	public function tambahmahasiswa(){
		$data['judul'] = 'Tambah Data Mahasiswa';
		$data['aktif'] = 'Mahasiswa';
		$this->form_validation->set_rules('nim','nim','required|integer');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('tempat','tempat','required');
		$this->form_validation->set_rules('tanggal','tanggal','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('kontak','kontak','required|integer');
		$this->form_validation->set_rules('email','email','required|valid_email');
		if($this->form_validation->run() == false){
			$this->load->view('templates/kelola/header',$data);
			$this->load->view('kelola/mahasiswa/tambah');
			$this->load->view('templates/kelola/footer');
		}else{
			$this->Mahasiswa->tambah();
		}
	}

	public function lihatmahasiswa(){
		$data['judul'] = "Data Mahasiswa";
		$data['aktif'] = 'Mahasiswa';
		$data['mahasiswa'] = $this->db->get('mahasiswa');
		$this->load->view('templates/kelola/header',$data);
		$this->load->view('kelola/mahasiswa/lihat',$data);
		$this->load->view('templates/kelola/footer');
	}

	public function hapusmahasiswa($nim){
		$this->Mahasiswa->hapus($nim);
	}

	public function tambahbuku(){
		$data['judul'] = 'Tambah Data Buku';
		$data['aktif'] = 'Buku';
		$data['kategori'] = $this->db->get('kategori');
		$this->form_validation->set_rules('kode','kode','required');
		$this->form_validation->set_rules('kategori','kategori','required');
		$this->form_validation->set_rules('judul','judul','required');
		$this->form_validation->set_rules('pengarang','pengarang','required');
		$this->form_validation->set_rules('penerbit','penerbit','required');
		$this->form_validation->set_rules('tahun','tahun','required');
		$this->form_validation->set_rules('pembelian','pembelian','required');
		$this->form_validation->set_rules('harga','harga','required|integer');
		if($this->form_validation->run() == false){
			$this->load->view('templates/kelola/header',$data);
			$this->load->view('kelola/buku/tambah',$data);
			$this->load->view('templates/kelola/footer');
		}else{
			$this->Buku->tambah();
		}
	}

	public function lihatbuku(){
		$data['judul'] = 'Data Buku';
		$data['aktif'] = 'Buku';
		$data['buku'] = $this->db->get('buku');
		$this->load->view('templates/kelola/header',$data);
		$this->load->view('kelola/buku/lihat',$data);
		$this->load->view('templates/kelola/footer');
	}

	public function hapusbuku($kode){
		$this->Buku->hapus($kode);
	}
	
	public function tambahkategori(){
		$data['judul'] = 'Tambah Data Kategori';
		$data['aktif'] = 'Kategori';
		$this->form_validation->set_rules('kategori','kategori','required');
		if($this->form_validation->run() == false){
			$this->load->view('templates/kelola/header',$data);
			$this->load->view('kelola/kategori/tambah');
			$this->load->view('templates/kelola/footer');
		}else{
			$this->Kategori->tambah();
		}
	}

	public function lihatkategori(){
		$data['judul'] = 'Data Kategori';
		$data['aktif'] = 'Kategori';
		$data['kategori'] = $this->db->get('kategori');
		$this->load->view('templates/kelola/header',$data);
		$this->load->view('kelola/kategori/lihat',$data);
		$this->load->view('templates/kelola/footer');
	}

	public function hapuskategori($id){
		$this->Kategori->hapus($id);
	}
	
	public function tambahpeminjaman(){
		$data['judul'] = 'Tambah Data Peminjaman';
		$data['aktif'] = 'Pinjam';
		$data['buku'] = $this->db->get('buku');
		$data['nim'] = $this->db->get('mahasiswa');
		$this->form_validation->set_rules('buku','buku','required');
		$this->form_validation->set_rules('nim','nim','required');
		$this->form_validation->set_rules('pinjam','pinjam','required');
		$this->form_validation->set_rules('kembali','kembali','required');
		if($this->form_validation->run() == false){
			$this->load->view('templates/kelola/header',$data);
			$this->load->view('kelola/peminjaman/tambah',$data);
			$this->load->view('templates/kelola/footer');
		}else{
			$this->Peminjaman->tambah();
		}
	}

	public function lihatpeminjaman(){
		$data['judul'] = 'Data Peminjaman';
		$data['aktif'] = 'Pinjam';
		$data['pinjam'] = $this->db->get('pinjaman');
		$this->load->view('templates/kelola/header',$data);
		$this->load->view('kelola/peminjaman/lihat',$data);
		$this->load->view('templates/kelola/footer');
	}

	public function hapuspeminjaman($id){
		$this->Peminjaman->hapus($id);
	}
}
