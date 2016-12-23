<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login/Login_model');
		$this->load->model('Yr_Semester/Yr_sem_model');
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
					'title' => 'Dashboard',
					'usr' => $this->Login_model->get_user_info(),
					'schl_yr' => $this->Yr_sem_model->get_schoolyr_info(),
					'smstr' => $this->Yr_sem_model->get_semester_info(),
					);

				$this->template->load($data, null, 'Index', 'Admin_Dboard');
			}
		}
		else
		{
			redirect('/login');
		}
	}
}

/* End of file Dashboard.php */
/* Location: ./application/modules/Admin/Dashboard/controllers/Dashboard.php */