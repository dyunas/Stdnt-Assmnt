<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login/Login_model');
	}
 
	public function Index()
	{
		if ($this->session->userdata('is_in'))
		{
			if ($this->session->userdata('user_type') == 'Admin')
			{
				redirect('/admin');
			}
			else
			{
				redirect('/student');
			}
		}
		else
		{
			$data['title'] = 'Login';
			$this->load->view('templates/header.php', $data);
			$this->load->view('Index.php');
		}
	}

	public function Auth_login()
	{
		if ($this->Login_model->check_user_credentials())
		{
			if ($this->session->userdata('user_type') == 'Admin')
			{
				redirect('/admin/dashboard');
			}
			else
			{
				redirect('/student/dashboard');
			}
		}
		else
		{
			$this->load->view('templates/header.php');
			$this->load->view('Index.php');
		}
	}
}
 
/* End of file Login.php */
/* Location: ./application/modules/Login/controllers/Login.php */