<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('siswa_m'));
		$this->load->library('form_validation');
	}
	public function index()
	{
		if (isset($this->session->userdata['riset2018'])===TRUE) {
			$this->data['title']='DATA SISWA';
			$this->data['user']=$this->session->userdata['riset2018']['user'];
			$this->backend->display('content/siswa_data', $this->data);
		}else{
			redirect('welcome','refresh');
		}
	}
	public function data_siswa()
	{
		$siswa=$this->siswa_m->data_siswa();
		$data = array();
		$no=1;
		foreach ($siswa as $rows) {
			array_push($data, array(
				$no++,
				$rows['nis'],
				$rows['nama'],
				$rows['agama'],
				$rows['notel'],
				anchor('siswa/edit/'.$rows['nis'], '<i class="fa fa-edit"></i>',array("class"=>""))
				//'<a href="javascript:void(0)" class="btn btn-warning btn-sm" onclick="edit('."'".$rows['nis']."'".')"><i class="fa fa-edit"></i></a>'
			));
		}
		$this->output->set_content_type('application/json')->set_output(json_encode(array('data'=>$data)));
	}
	public function add()
	{
		if (isset($this->session->userdata['riset2018'])===TRUE) {
			$this->data['title']='TAMBAH DATA SISWA';
			$this->backend->display('content/siswa_add', $this->data);
		}else{
			redirect('welcome','refresh');
		}
	}
	public function edit($nis)
	{
		if (isset($this->session->userdata['riset2018'])===TRUE) {
			$siswa=$this->siswa_m->get_by_nis($nis)->row();
        	$this->data['nis']= $siswa->nis;
        	$this->data['nama']= $siswa->nama;
        	$this->data['alamat']= $siswa->alamat;
        	$this->data['agama']= $siswa->agama;
        	$this->data['notel']= $siswa->notel;
        	$this->data['namaibu']= $siswa->namaibu;
        	$this->data['namabapak']= $siswa->namabapak;
			$this->data['title']='UBAH DATA SISWA';
			$this->backend->display('content/siswa_edit', $this->data);
		}else{
			redirect('welcome','refresh');
		}
	}
	public function save()
	{
		$this->form_validation->set_rules('nis',"NIS",'required|is_numeric|is_unique[tbdatasiswa.nis]',
			array(
                'required'      => 'Mohon isikan %s.',
                'is_unique'     => '%s Sudah Tersimpan.'
        	)
		);
		$this->form_validation->set_rules('nama_siswa',"NAMA SISWA",'required');
		if ($this->form_validation->run()===TRUE) {
			$data=array(
				'nis'=>$this->input->post('nis'),
				'nama'=>$this->input->post('nama_siswa'),
				'agama'=>$this->input->post('agama'),
				'notel'=>$this->input->post('notel'),
				'alamat'=>$this->input->post('alamat'),
				'namabapak'=>$this->input->post('namabapak'),
				'namaibu'=>$this->input->post('namaibu'),
			);
			$this->siswa_m->insert($data);
			$info['success']=TRUE;
			$info['message']='Berhasil disimpan';
		} else {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($info));
	}
	public function update()
	{
		$this->form_validation->set_rules('nama_siswa',"NAMA SISWA",'required');
		if ($this->form_validation->run()===TRUE) {
			$data=array(
				//'nis'=>$this->input->post('txtNIS'),
				'nis'=>$this->input->post('nis'),
				'nama'=>$this->input->post('nama_siswa'),
				'agama'=>$this->input->post('agama'),
				'notel'=>$this->input->post('notel'),
				'alamat'=>$this->input->post('alamat'),
				'namabapak'=>$this->input->post('namabapak'),
				'namaibu'=>$this->input->post('namaibu'),
			);
			$this->siswa_m->update($data);
			$info['success']=TRUE;
			$info['message']='Berhasil diubah';
		} else {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($info));
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */