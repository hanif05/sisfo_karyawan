<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

	public function getdata($key){
		$this->db->where('kd_karyawan',$key);
		$hasil = $this->db->get('tbl_karyawan');
		return $hasil;
	}
	public function getupdate($key,$data){
		$this->db->where('kd_karyawan',$key);
		$this->db->update('tbl_karyawan',$data);
	}
	public function getinsert($data){
		$this->db->insert('tbl_karyawan',$data);
	}
	public function gethapus($key){
		$this->db->where('kd_karyawan',$key);
		$this->db->delete('tbl_karyawan');
	}
}