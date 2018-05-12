<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_security');
		$this->M_security->getsecurity();

	}

	public function index()
	{
		//$this->load->view('home/tampil_home')
		//$this->M_security->getsecurity();
		$isi['title'] = 'Home Page';
		$isi['judul'] = 'Home';
		$isi['subjudul'] = '';
		$isi['content'] = 'home/tampil_content';
		$isi['nama_user'] = $this->db->get('tbl_admin');
		
		$this->load->view('home/tampil_home',$isi);
	}
	public function profile(){
		$isi['title'] = 'Profile Page';
		$isi['judul'] = 'Home';
		$isi['subjudul'] = 'Profile';
		$isi['content'] = 'home/tampil_profile';
		$isi['nama_user'] = $this->db->get('tbl_admin');
		
		$this->load->view('home/tampil_home',$isi);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
	
}