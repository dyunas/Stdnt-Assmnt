<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fee_manager extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login/Login_model', 'login');
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
			'title' => 'Our templated module',
			'usr' => $this->login->get_user_info(),
			);

			$this->template->load($data, null, 'Index');
		}
	}
}

/* End of file Fee_manager.php */
/* Location: ./application/modules/Fee_manager/controllers/Fee_manager.php */


