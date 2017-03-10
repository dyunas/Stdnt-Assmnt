<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_records extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Student_Records/Student_model', 'student');
		$this->load->model('Admin/Assessment/Assessment_model', 'assessment');
		$this->load->model('Cashier/Student_Records/Student_records_model', 'stud_assessment');
		$this->load->model('Registrar/Student_Records/Students_model', 'enroll_student');
	}

	public function Index()
	{
		if ($this->session->userdata('user_type') != 'Registrar')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Student\' Record',
				'usr' => $this->login->get_user_info(),
				'stud_info' => $this->student->get_student_info(),
			);

			$this->template->load($data, null, 'Index', 'Registrar/Student_records');
		}
	}

	public function View_record($stud_id)
	{
		if ($this->session->userdata('user_type') != 'Registrar')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Student\'s Record',
				'usr' => $this->login->get_user_info(),
				'stud_info' => $this->student->get_student_info($stud_id),
				'gdn_info' => $this->student->get_student_gdn_info($stud_id),
			);

			$this->template->load($data, null, 'Student_record', 'Registrar/Student_Records');
		}
	}

	public function Enroll_student()
	{
		if ($this->session->userdata('user_type') != 'Registrar')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Student\'s Record',
				'usr' => $this->login->get_user_info(),
				'course' => $this->assessment->get_courses(),
				'semester' => $this->assessment->get_semester()
			);

			$this->template->load($data, null, 'Enroll_student', 'Registrar/Student_Records');
		}
	}

	public function Auth_student_enrollment()
	{
		if ($this->session->userdata('user_type') != 'Registrar')
		{
			redirect(site_url());
		}
		else
		{			
			if ($this->enroll_student->enroll_student())
			{
				redirect(site_url('registrar/student_rcrd'));
			}
			else
			{
				redirect(site_url('registrar/student_rcrd/enroll'));
			}
		}
	}
}

/* End of file Student_records.php */
/* Location: ./application/modules/Registrar/controllers/Student_records/Student_records.php */