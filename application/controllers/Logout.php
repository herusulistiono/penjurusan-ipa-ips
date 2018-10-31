<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->session->unset_userdata('riset2018');
		redirect('welcome','refresh');	
	}
}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */