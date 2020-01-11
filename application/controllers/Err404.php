<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Err404 extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data['judul'] = "Error 404";
        $this->output->set_status_header(404);
		$this->load->view('templates/header',$data);
		$this->load->view('Err404');
		$this->load->view('templates/footer');
	}
}
