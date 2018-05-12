<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('login/tampil_login');
	}
	public function getlogin(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->M_login->getlogin($user,$pass);
	}
}
