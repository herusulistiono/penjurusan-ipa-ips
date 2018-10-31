<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if (isset($this->session->userdata['riset2018'])===TRUE) {
			$this->data['title']='DATA SISWA';
			$this->data['user']=$this->session->userdata['riset2018']['user'];
			$this->backend->display('content/admin_data', $this->data);
		}else{
			redirect('welcome','refresh');
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */