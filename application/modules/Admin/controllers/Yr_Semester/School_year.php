<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class School_year extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Yr_Semester/Yr_sem_model', 'yr_sem');
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
				'title' => 'S.Y and Semester Editor',
				'usr' => $this->login->get_user_info(),
				'schl_yr' => $this->yr_sem->get_schoolyr_info(),
				'smstr' => $this->yr_sem->get_semester_info(),
			);

			$this->template->load($data, null, 'Index', 'Admin/Yr_Semester');
		}
	}

	public function Update_sem()
	{
		if($this->input->is_ajax_request())
		{
			$var = $this->input->get('code');

			if ($this->yr_sem->update_sem($var))
			{
				$this->session->set_flashdata('error','Semester Updated');
			}
			else
			{
				$this->session->set_flashdata('error_2', 'Error updating semester, try again later.');
			}
		}
	}

	public function Update_sy()
	{
		if($this->input->is_ajax_request())
		{
			$var = $this->input->get('code');

			if ($this->yr_sem->update_sy($var))
			{
				$this->session->set_flashdata('error','School Year Updated');
			}
			else
			{
				$this->session->set_flashdata('error_2', 'Error updating school year, try again later.');
			}
		}
	}
}

/* End of file School_year.php */
/* Location: ./application/modules/Admin/Yr_Semester/controllers/School_year.php */