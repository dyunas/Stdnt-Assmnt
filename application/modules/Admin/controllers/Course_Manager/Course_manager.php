<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course_manager extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Course_manager/Course_manager_modeL', 'course');
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
				'usr' => $this->login->get_user_info(),
				'courses' => $this->course->get_course_tbl()
			);

			$this->template->load($data, null, 'Index', 'Admin/Course_Manager');
		}
	}

	public function New_course()
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Course Manager',
				'usr' => $this->login->get_user_info()
			);

			$this->template->load($data, null, 'New_course', 'Admin/Course_Manager');
		}
	}

	public function Add_course()
	{
		if($this->input->is_ajax_request())
		{
			$var = $this->input->get('code');

			$data =explode('/', $var);

			if ($this->course->add_course($data[0], $data[1]))
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}

	public function Toggler_availability()
	{
		if ($this->input->is_ajax_request())
		{
			$code = $this->input->get('code');
			$status = $this->input->get('status');

			if ($this->course->toggle_availability($code, $status))
			{
				echo 'true';
			}
			else
			{
				echo 'false';
			}
		}
		else
		{
			exit('No direct script access allowed');
		}
	}
}

/* End of file Course_manager.php */
/* Location: ./application/modules/Course_Manager/controllers/Course_manager.php */