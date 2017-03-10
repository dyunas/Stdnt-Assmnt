<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	public function is_logged_in()
	{
		//$this->load->model('Login/Login_model', 'login');

		if ($this->session->userdata('is_in'))
		{
			$is_valid_sess = $this->login->check_user_credentials($this->session->userdata('user_id'));
			if ($is_valid_sess)
			{
				return isset($is_valid_sess);
			}
			else
			{
				$this->session->sess_destroy();
				redirect(site_url());
			}
		}
		else
		{
			$this->session->set_flashdata('error_2', 'Please log-in to access the system');
			redirect(site_url('login'));
		}
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */