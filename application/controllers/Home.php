<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if (isset($this->session->userdata['riset2018'])===TRUE) {
			$this->data['title']='SISTEM DIGITAL PENJURUSAN SISWA';
			$this->data['user']=$this->session->userdata['riset2018']['user'];
			$this->backend->display('content/home', $this->data);
		}else{
			redirect('welcome','refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */