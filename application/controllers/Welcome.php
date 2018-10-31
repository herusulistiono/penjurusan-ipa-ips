<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		if (isset($this->session->userdata['riset2018'])===TRUE) {
			redirect('home','refresh');
		}else{
			$this->data['title']='ADMINISTRASI';
			$this->load->view('welcome_message',$this->data);
		}
	}
}
