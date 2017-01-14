<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course_manager extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login/Login_model');
		$this->load->model('Course_manager/Course_manager_modeL', 'course');
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
				'usr' => $this->Login_model->get_user_info(),
				'courses' => $this->course->get_course_tbl()
			);

			$this->template->load($data, null, 'Index', 'Course_Manager');
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
				'usr' => $this->Login_model->get_user_info()
			);

			$this->template->load($data, null, 'New_course', 'Course_Manager');
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
				$this->session->set_flashdata('error','Course Added');
			}
			else
			{
				$this->session->set_flashdata('error_2', 'Error updating semester, try again later.');
			}
		}
	}
}

/* End of file Course_manager.php */
/* Location: ./application/modules/Course_Manager/controllers/Course_manager.php */