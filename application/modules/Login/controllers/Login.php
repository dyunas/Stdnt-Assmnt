<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
	}
 
	public function Index()
	{
		if ($this->session->userdata('is_in'))
		{
			if ($this->session->userdata('user_type') == 'Admin')
			{
				redirect(site_url('admin/dashboard'));
			}
			else if ($this->session->userdata('user_type') == 'Cashier')
			{
				redirect(site_url('cashier/dashboard'));
			}
			else
			{
				redirect(site_url('registrar/dashboard'));
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
		if ($this->login->check_user_credentials())
		{
			if ($this->session->userdata('user_type') == 'Admin')
			{
				redirect(site_url('admin/dashboard'));
			}
			else if ($this->session->userdata('user_type') == 'Cashier')
			{
				redirect(site_url('cashier/dashboard'));
			}
			else
			{
				redirect(site_url('registrar/dashboard'));
			}
		}
		else
		{
			redirect(site_url('login'));
		}
	}
}
 
/* End of file Login.php */
/* Location: ./application/modules/Login/controllers/Login.php */