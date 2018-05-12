<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_security');
		$this->M_security->getsecurity();
		$this->load->model('M_karyawan');


	}

	public function index()
	{
		//$this->load->view('home/tampil_home')
		//$this->M_security->getsecurity();
		$isi['title'] = 'Karyawan Page';
		$isi['judul'] = 'Karyawan';
		$isi['subjudul'] = 'Data Karyawan';
		$isi['content'] = 'home/tampil_data_karyawan';
		$isi['subkaryawan'] = '';
		$isi['nama_user'] = $this->db->get('tbl_admin');
		$isi['data'] = $this->db->get('tbl_karyawan');
		$this->load->view('home/tampil_home',$isi);
	}
	public function tambah(){
		//$this->M_security->getsecurity();
		$isi['title'] = 'Tambah Data Karyawan';
		$isi['judul'] = 'Karyawan';
		$isi['subjudul'] = 'Tambah Data';
		$isi['content'] = 'karyawan/tambah_data_karyawan';
		$isi['subkaryawan'] = 'Tambah Data Karyawan';
		$isi['kode']			 = '';
		$isi['nama_karyawan'] 	 = '';
		$isi['divisi']		 	 = '';
		$isi['alamat_karyawan']  = '';
		$isi['jk_karyawan'] 	 = '';
		$isi['agama'] 			 = '';
		$isi['email_karyawan'] 	 = '';
		$isi['telp_karyawan'] 	 = '';
		$isi['foto'] 			 = '';
		$isi['nama_user'] = $this->db->get('tbl_admin');
		$this->load->view('home/tampil_home',$isi);
	}
	public function edit(){
		//$this->M_security->getsecurity();
		$isi['title'] = 'Edit Data Karyawan';
		$isi['judul'] = 'Karyawan';
		$isi['subjudul'] = 'Edit Data';
		$isi['content'] = 'karyawan/tambah_data_karyawan';
		$isi['subkaryawan'] = 'Edit Data Karyawan';
		$isi['nama_user'] = $this->db->get('tbl_admin');
		$isi['data'] = $this->db->get('tbl_karyawan');

		$key = $this->uri->segment(3);
		$this->db->where('kd_karyawan',$key);
		$query = $this->db->get('tbl_karyawan');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$isi['kode']			 = $row->kd_karyawan;
				$isi['nama_karyawan'] 	 = $row->nama_karyawan;
				$isi['divisi'] 			 = $row->divisi_karyawan;
				$isi['alamat_karyawan']  = $row->alamat_karyawan;
				$isi['jk_karyawan'] 	 = $row->jk_karyawan;
				$isi['foto'] 			 = $row->agama;
				$isi['email_karyawan'] 	 = $row->email_karyawan;
				$isi['telp_karyawan'] 	 = $row->telp_karyawan;
				$isi['foto'] 			 = $row->foto;
			}
		}
		else
		{
			$isi['kode']			 = '';
			$isi['nama_karyawan'] 	 = '';
			$isi['divisi']		 	 = '';
			$isi['alamat_karyawan']  = '';
			$isi['jk_karyawan'] 	 = '';
			$isi['agama'] 			 = '';
			$isi['email_karyawan'] 	 = '';
			$isi['telp_karyawan'] 	 = '';
			$isi['foto'] 			 = '';
		}

		$this->load->view('home/tampil_home',$isi);
	}
	public function simpan(){
		//$this->M_security->getsecurity();
		$key = $this->input->post('kode');
		$data['kd_karyawan']	 	 = $this->input->post('kode');
		$data['nama_karyawan'] 		 = $this->input->post('nama_karyawan');
		$data['divisi_karyawan']	 = $this->input->post('divisi');
		$data['alamat_karyawan']	 = $this->input->post('alamat_karyawan');
		$data['jk_karyawan'] 		 = $this->input->post('jk_karyawan');
		$data['agama'] 			 	 = $this->input->post('agama');
		$data['email_karyawan'] 	 = $this->input->post('email_karyawan');
		$data['telp_karyawan'] 	 	 = $this->input->post('telp_karyawan');
		$data['foto'] 				 = $this->input->post('foto');

		$query = $this->M_karyawan->getdata($key);
		//$query = $this->db->get('tbl_karyawan');
		if($query->num_rows()>0){
			$this->M_karyawan->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Berhasil Di Update');
		}
		else
		{
			$this->M_karyawan->getinsert($data);
			$this->session->set_flashdata('info','Data Berhasil Di Simpan');
		}
		redirect('karyawan');
	}
	public function delete(){
		//$this->M_security->getsecurity();
		
		$key = $this->uri->segment(3);
		$this->db->where('kd_karyawan',$key);
		$query = $this->db->get('tbl_karyawan');
		if($query->num_rows()>0){
			$this->M_karyawan->gethapus($key);
		}
		redirect('karyawan');

	}

}
