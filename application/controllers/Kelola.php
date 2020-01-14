<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		apakah_sudah_masuk();
    }

	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this->load->view('templates/kelola/header',$data);
		$this->load->view('kelola/utama');
		$this->load->view('templates/kelola/footer');
	}
}
