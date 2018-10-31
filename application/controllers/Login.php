<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		
	}

	public function login()
	{
		$this->load->model('admin_m');
		$errors = array();
		$value = array();
		if (isset($_POST) && empty($_POST)===FALSE) {
			$user = $this->input->post('user');
			$password = $this->input->post('password');
			if (empty($user)===TRUE){$errors['user']='Mohon isikan Nama Akun Anda';}
			if (empty($password)===TRUE){$errors['password']='Mohon isikan Sandi Anda';}
		}
		if(!empty($errors)){
			$value['success']=FALSE;
			$value['errors']= $errors;
		}else{
			$data = array(
				'user' => $user,
				'password' => $password
			);
			$cek_input = $this->admin_m->login($data);
			if ($cek_input===TRUE) {
				$value['success'] = TRUE;
				$r = $this->admin_m->profil($data);
				if ($cek_input != FALSE) {
					$sess = array(
						'user' => $r[0]->user,
						'password'=> $r[0]->password,
					);
					$this->session->set_userdata('riset2018',$sess);
				}
				$value['message'] = 'Data Anda Valid';
			}else{
				$value['success']=FALSE;
				$value['errors']='Mohon mengisikan data yang valid';
			}
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($value));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */