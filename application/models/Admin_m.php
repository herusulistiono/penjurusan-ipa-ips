<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function login($data)
	{
		$this->db->select('*');
		$this->db->from('tblogin');
		$this->db->where(array('user'=>$data['user'],'password'=>$data['password']));
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows()===1) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function profil($data)
	{
		$this->db->select('*');
		$this->db->from('tblogin');
		$this->db->where(array('user' => $data['user']));
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows()===1) {
			return $query->result();
		}else{
			return FALSE;
		}
	}
}

/* End of file Admin_m.php */
/* Location: ./application/models/Admin_m.php */