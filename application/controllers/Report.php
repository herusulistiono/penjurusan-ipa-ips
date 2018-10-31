<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('siswa_m');
	}
	public function index()
	{
		if (isset($this->session->userdata['riset2018'])===TRUE) {
			$this->data['title']='HASIL PENENTUAN JURUSAN';
			$this->backend->display('content/report', $this->data);
		}else{
			redirect('welcome','refresh');
		}
	}
	public function check_data()
	{
		$nis=array('nis'=>$this->input->post('nis'));
		$data=$this->siswa_m->check_by_nis($nis);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	public function cetak()
	{
		$check=array('rekomendasijurusan'=>$this->input->post('rekomendasijurusan'));
		$data=$this->siswa_m->check_jurusan($check);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

}

/* End of file Report.php */
/* Location: ./application/controllers/Report.php */