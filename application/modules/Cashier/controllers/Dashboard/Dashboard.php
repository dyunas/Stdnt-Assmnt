<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Student_Records/Student_model', 'student');
		$this->load->model('Admin/Assessment/Assessment_model', 'assessment');
	}

	public function Index()
	{
		if ($this->session->userdata('user_type') != 'Cashier')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Dashboard',
				'usr' => $this->login->get_user_info(),
				'stud_records' => $this->student->get_student_info(), 
			);

			$this->template->load($data, null, 'Index', 'Cashier/Dashboard');
		}
	}

	public function View_record($stud_id)
	{
		if ($this->session->userdata('user_type') != 'Cashier')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Student Record',
				'usr' => $this->login->get_user_info(),
				'stud_info' => $this->student->get_student_info($stud_id),
				'gdn_info' => $this->student->get_student_gdn_info($stud_id),
				'fees' => $this->student->get_assessment_info($stud_id),
				'discount' => $this->student->get_discount_info($stud_id),
				'schme' => $this->student->get_stud_pymnt_schme($stud_id),
			);

			$this->template->load($data, null, 'View_record', 'Cashier/Dashboard');
		}
	}
}

/* End of file Dashboard.php */
/* Location: ./application/modules/Cashier/controllers/Dashboard/Dashboard.php */