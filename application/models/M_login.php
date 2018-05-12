<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function getlogin($user,$pass)
	{
		$password = md5($pass);
		$this->db->where('username',$user);
		$this->db->where('password',$password);
		$query = $this->db->get('tbl_admin');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$sess = array('username' => $row->username, 'password' => $row->password);
				$this->session->set_userdata($sess);
				redirect('home');
			}
		}
		else
		{
			$this->session->set_flashdata('info','maaf username atau password anda salah');
			redirect('login');
			
		}
	}
}