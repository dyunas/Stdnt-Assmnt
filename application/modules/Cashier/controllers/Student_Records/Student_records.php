<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_records extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Student_Records/Student_model', 'student');
		$this->load->model('Admin/Assessment/Assessment_model', 'assessment');
		$this->load->model('Cashier/Student_Records/Student_records_model', 'stud_assessment');
	}

	public function Get_student_record()
	{
		if ($this->input->is_ajax_request())
		{
			$stud_id = $this->input->get('stud_id');

			$data = array(
					'usr' => $this->login->get_user_info(),
					'stud_info' => $this->student->get_student_info($stud_id),
					'other_payments' => $this->stud_assessment->get_other_payments($stud_id),
					'pymnt_history' => $this->stud_assessment->get_payment_history($stud_id),
				);

			return $result = $this->load->view('Cashier/Student_records/Append_record_view', $data);
		}
		else
		{
			exit('No direct script access allowed');
		}
	}

	public function Get_student_payment()
	{
		if ($this->input->is_ajax_request())
		{
			$tag = $this->input->get('tag');
			$stud_id = $this->input->get('stud_id');
			$stud_course = $this->input->get('stud_course');
			$stud_year = $this->input->get('year');
			$stud_sem = $this->input->get('sem');
			$scheme = $this->input->get('scheme');

			$assessment = (object)array('course' => $stud_course, 'year' => $stud_year, 'semester' => $stud_sem);

			$data = array(
				'usr' => $this->login->get_user_info(),
				'stud_info' => $this->student->get_student_info($stud_id),
				'fees' => $this->stud_assessment->get_stud_assessment($stud_id, $stud_course, $stud_year, $stud_sem, $scheme),
				'total_payment' => $this->stud_assessment->get_total_payment($stud_id, $stud_course, $stud_year, $stud_sem, $scheme, $tag),
				'assessment' => $assessment,
				'scheme' => $scheme,
				'tag' => $tag
				);

			return $result = $this->load->view('Cashier/Student_records/Modal_body_view', $data);
		}
		else
		{
			exit('No direct script access allowed');
		}
	}

	public function Update_student_payment()
	{
		if ($this->input->is_ajax_request())
		{
			$stud_id = $this->input->get('stud_id');
	 		$course = $this->input->get('course');
	 		$stud_year = $this->input->get('stud_year');
	 		$semester = $this->input->get('semester');
	 		$scheme = $this->input->get('scheme');
	 		$trans_date = $this->input->get('trans_date');
	 		$pymnt_for = $this->input->get('pymnt_for');
	 		$amount = $this->input->get('amount');
	 		$receipt_no = $this->input->get('receipt_no');
	 		$cashier_id = $this->input->get('cashier_id');

	 		if ($pymnt_for == 'upon')
	 		{
	 			$stud_status = $this->input->get('stud_status');
	 		}
	 		else
	 		{
	 			$stud_status = 'Enrolled';
	 		}

	 		if ($this->stud_assessment->update_student_payment($stud_status,$stud_id,$course,$stud_year,$semester,$scheme,$trans_date,$pymnt_for,$amount,$receipt_no,$cashier_id))
	 		{
	 			return $result = 'TRUE';
	 		}
	 		else
	 		{
	 			return $result = 'FALSE';
	 		}
		}
		else
		{
			exit('No direct script access allowed');
		}
	}

	public function Process_other_payment()
	{
		if ($this->input->is_ajax_request())
		{
			$stud_id = $this->input->get('stud_id');
	 		$course = $this->input->get('course');
	 		$stud_year = $this->input->get('stud_year');
	 		$semester = $this->input->get('semester');
	 		$trans_date = date('Y-m-d');
	 		$pymnt_for = $this->input->get('pymntFor');
	 		$amount = $this->input->get('amount');
	 		$receipt_no = $this->input->get('or_num');
	 		$cashier_id = $this->input->get('cashier');

	 		if ($this->stud_assessment->student_other_payment($stud_id,$course,$stud_year,$semester,$trans_date,$pymnt_for,$amount,$receipt_no,$cashier_id))
	 		{
	 			return $result = 'TRUE';
	 		}
	 		else
	 		{
	 			return $result = 'FALSE';
	 		}
		}
		else
		{
			exit('No direct script access allowed');
		}
	}
}

/* End of file Student_records.php */
/* Location: ./application/modules/Cashier/controllers/Student_Records/Student_records.php */