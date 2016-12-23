<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_records extends MX_Controller {
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
					'title' => 'Student\'s Record',
					'usr' => $this->Login_model->get_user_info()
					);

				$this->template->load($data, null, 'Index', 'Student_Records');
			}
		}
		else
		{
			redirect('/login');
		}
	}
}

/* End of file Course_manager.php */
/* Location: ./application/modules/Course_Manager/controllers/Course_manager.php */