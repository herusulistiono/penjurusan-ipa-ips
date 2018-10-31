<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_m extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	//check nis
	public function get_nis($nis)
	{
		$this->db->select('nis,nama');
		$this->db->from('tbdatasiswa');
		$this->db->where('nis', $nis);
		$query=$this->db->get();
		return $query->row_array();
	}
	public function get_siswa()
	{
		$query=$this->db->get('tbdatasiswa');
		return $query->result_array();
	}
	public function data_siswa()
	{
		$query=$this->db->get('tbdatasiswa');
		return $query->result_array();
	}
	public function insert($data)
	{
		$this->db->insert('tbdatasiswa', $data);
		return TRUE;
	}
	public function update($data)
	{
		$this->db->where(array('nis'=>$data['nis']));
		$this->db->update('tbdatasiswa', $data);
		return TRUE;
	}
	//edit
	public function get_by_nis($nis)
	{
		$this->db->select('*');
	    $this->db->from('tbdatasiswa');
	    $this->db->where(array('nis'=>$nis));
	    return $this->db->get();
	}
	public function check_by_nis($nis)
	{
		$this->db->select('jur.*');
		$this->db->from('jurusanakhir jur');
		$this->db->like(array('jur.nis'=>$nis['nis']));
		$query=$this->db->get();
		return $query->result_array();
	}
	public function check_jurusan($check)
	{
		$this->db->select('jur.*');
		$this->db->from('jurusanakhir jur');
		$this->db->like(
			array(
				'jur.rekomendasijurusan'=>$check['rekomendasijurusan'],
			)
		);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function insert_jurusan($data)
	{
		$this->db->insert('jurusanakhir', $data);
		return TRUE;
	}
}

/* End of file Siswa_m.php */
/* Location: ./application/models/Siswa_m.php */