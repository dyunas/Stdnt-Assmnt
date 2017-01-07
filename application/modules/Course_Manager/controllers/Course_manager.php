<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course_manager extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login/Login_model');
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
				'title' => 'Course Manager',
				'usr' => $this->Login_model->get_user_info()
			);

			$this->template->load($data, null, 'Index', 'Course_Manager');
		}
	}
}

/* End of file Course_manager.php */
/* Location: ./application/modules/Course_Manager/controllers/Course_manager.php */