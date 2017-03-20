<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_records_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get_stud_assessment($stud_id, $course, $stud_year, $semester, $scheme)
	{
		$array = array('stud_id' => $stud_id, 'stud_course' => $course, 'stud_year' => $stud_year, 'stud_sem' => $semester, 'stud_schm' => $scheme);
		if ($scheme == 'CSHPYMNT')
		{
			$this->db->select('rsrvtn_fee, upon_fee');
			$this->db->from('tbl_stud_pybles_csh');
			$this->db->where($array);
			
			$query = $this->db->get();

			if ($query->num_rows() > 0)
			{
				return $query->row();
			}

			return FALSE;
		}
		else if ($scheme == 'INSTLMNT')
		{
			// $array = array('stud_id' => $stud_id, 'stud_course' => $course, 'stud_year' => $stud_year, 'stud_sem' => $semester, 'stud_schm' => $scheme);
			$this->db->select('rsrvtn_fee, upon_fee, prelim_fee, midterm_fee, finals_fee');
			$this->db->from('tbl_stud_pybles_inst');
			$this->db->where($array);

			$query = $this->db->get();

			if ($query->num_rows() > 0)
			{
				return $query->row();
			}

			return FALSE;
		}
		else if ($scheme == 'MNTHLY')
		{
			// $array = array('stud_id' => $stud_id, 'stud_course' => $course, 'stud_year' => $stud_year, 'stud_sem' => $semester, 'stud_schm' => $scheme);
			$this->db->select('pymnt_for, amount');
			$this->db->from('tbl_stud_pybles_mnth');
			$this->db->where($array);

			$query = $this->db->get();

			if ($query->num_rows() > 0)
			{
				return $query->result();
			}

			return FALSE;
		}
	}

	public function update_student_payment($stud_status,$stud_id,$course,$stud_year,$semester,$scheme,$trans_date,$pymnt_for,$amount,$receipt_no,$cashier_id)
	{
		$this->db->set('stud_status', $stud_status);
		$this->db->where('stud_id', $stud_id);

		if ($this->db->update('tbl_stud_info'))
		{
			$data = array (
				'stud_id' => $stud_id,
				'stud_course' => $course,
				'stud_year' => $stud_year,
				'stud_semester' => $semester,
				'pymnt_scheme' => $scheme,
				'trans_date' => $trans_date,
				'trans_name' => $pymnt_for,
				'trans_amount' => $amount,
				'trans_receipt_no' => $receipt_no,
				'cashier_id' => $cashier_id,
				);

			if ($this->db->insert('tbl_transactions', $data))
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
	}

	public function student_other_payment($stud_id,$course,$stud_year,$semester,$trans_date,$pymnt_for,$amount,$receipt_no,$cashier_id)
	{
		$data = array(
			'trans_date' => $trans_date,
			'stud_id' => $stud_id,
			'stud_course' => $course,
			'stud_year' => $stud_year,
			'stud_sem' => $semester,
			'fee_name' => $pymnt_for,
			'amount_pd' => $amount,
			'receipt_no' => $receipt_no,
			'cashier_id' => $cashier_id,
			);

		if ($this->db->insert('tbl_other_payments', $data))
		{
			$data2 = array(
				'stud_id' => $stud_id,
				'stud_course' => $course,
				'stud_year' => $stud_year,
				'stud_semester' => $semester,
				'pymnt_scheme' => 'Other Payment',
				'trans_date' => $trans_date,
				'trans_name' => $pymnt_for,
				'trans_amount' => $amount,
				'trans_receipt_no' => $receipt_no,
				'cashier_id' => $cashier_id,
				);

			if ($this->db->insert('tbl_transactions', $data2))
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
	}

	public function get_other_payments($stud_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_other_payments');
		$this->db->where('stud_id', $stud_id);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}

		return FALSE;
	}

	public function get_payment_history($stud_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_transactions');
		$this->db->where('stud_id', $stud_id);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}

		return FALSE;
	}

	public function get_total_payment($stud_id, $course, $stud_year, $semester, $scheme, $pymnt_for)
	{
		// $array = array('stud_id' => $stud_id, 'stud_course' => $course, 'stud_year' => $stud_year, 'stud_sem' => $semester, 'stud_schm' => $scheme, 'trans_name' => $pymnt_for);

		$sql = "SELECT trans_name, SUM(trans_amount) as total_amount FROM tbl_transactions WHERE stud_id = '$stud_id' AND stud_course = '$course' AND stud_year = '$stud_year' AND stud_semester = '$semester' AND pymnt_scheme = '$scheme' AND trans_name = '$pymnt_for'";

		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}

		return FALSE;
	}
}

/* End of file Student_records_model.php */
/* Location: ./application/modules/Cashier/models/Student_Records/Student_records_model.php */