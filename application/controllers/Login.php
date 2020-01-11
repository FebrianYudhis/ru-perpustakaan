<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Akun');
	}

	public function index()
	{
		if($this->session->userdata('login')){
			redirect('kelola');
		}
		$this->form_validation->set_rules('id_petugas', 'id_petugas' ,'trim|required');
		$this->form_validation->set_rules('password', 'password' ,'trim|required');
		if($this->form_validation->run() == false){
			$data['judul'] = "Login !";
			$this->load->view('templates/header',$data);
			$this->load->view('login/masuk');
			$this->load->view('templates/footer');
		}
		else{
			$this->Akun->cekLogin();
		}
	}
}
