<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_manager extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Login/Login_model', 'login');
		$this->load->model('Account_manager/Account_manager_model', 'acct_mngr');
	}

	public function Index()
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Account Manager',
				'usr' => $this->login->get_user_info(),
				'accts' => $this->acct_mngr->get_accounts_tbl(),
			);

			$this->template->load($data, null, 'Index', 'Account_Manager');
		}
	}
}

/* End of file Account_manager.php */
/* Location: ./application/modules/Account_Manager/controllers/Account_manager.php */