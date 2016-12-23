<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login/Login_model');
	}

	public function Index()
	{
		if ($this->Login_model->log_out())
		{
			redirect('/login');
		}
	}
}

/* End of file Logout.php */
/* Location: ./application/modules/Logout/controllers/Logout.php */