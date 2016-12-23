<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_manager extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login/Login_model');
	}

	public function Index()
	{
		if ($this->session->userdata('is_in'))
		{
			if (!$this->session->userdata('user_type') == 'Admin')
			{
				redirect('/student');
			}
			else
			{
				$data = array(
					'title' => 'Account Manager',
					'usr' => $this->Login_model->get_user_info()
					);

				$this->template->load($data, null, 'Index', 'Account_Manager');
			}
		}
		else
		{
			redirect('/login');
		}
	}
}

/* End of file Account_manager.php */
/* Location: ./application/modules/Account_Manager/controllers/Account_manager.php */