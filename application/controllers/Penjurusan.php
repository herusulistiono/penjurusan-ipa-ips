<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjurusan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('siswa_m'));
		$this->load->library(array('form_validation'));
	}
	public function index()
	{
		if (isset($this->session->userdata['riset2018'])===TRUE) {
			$this->data['title']='PENENTUAN JURUSAN';
			$this->data['user']=$this->session->userdata['riset2018']['user'];
			$this->data['siswa']=$this->siswa_m->get_siswa();
			$this->backend->display('content/penjurusan_form', $this->data);
		}else{
			redirect('welcome','refresh');
		}
	}
	public function check_nis()
	{
		$nis=$this->input->post('nis');
		$data=$this->siswa_m->get_nis($nis);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	public function save_penjurusan()
	{
		$this->form_validation->set_rules('nis',"NIS",'required|is_unique[jurusanakhir.nis]',
			array(
                'required'      => 'Mohon isikan %s.',
                'is_unique'     => 'Data %s Sudah Ada.'
        	)
		);
		$this->form_validation->set_rules('nama_siswa', 'NAMA', 'trim|required');
		$this->form_validation->set_rules('hasil_jurusan', 'JURUSAN', 'trim|required');
		if ($this->form_validation->run()===TRUE) {
			$data=array(
				'nis'                => $this->input->post('nis'),
				'nama'               => $this->input->post('nama_siswa'),
				'rekomendasijurusan' => $this->input->post('hasil_jurusan')
			);
			$this->siswa_m->insert_jurusan($data);
			$info['success']=TRUE;
			$info['message']='Berhasil disimpan';
		} else {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($info));
		
	}

}

/* End of file Penjurusan.php */
/* Location: ./application/controllers/Penjurusan.php */