<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		apakah_sudah_masuk();
		$this->load->model('Mahasiswa');
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
		$this->form_validation->set_rules('nim','nim','required|is_integer');
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
}
