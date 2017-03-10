<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Assessment/Assessment_model', 'assessment');
	}

	public function get_student_info($stud_id = FALSE)
	{
		if ($stud_id === FALSE)
		{
			$this->db->select('stud_row, stud_id, stud_name, stud_course, stud_year, stud_status, stud_bdate, stud_gender, stud_addr_ln1, stud_addr_ln2, stud_addr_ln3, stud_addr_ln4');
			$this->db->from('tbl_stud_info');

			$query = $this->db->get();

			if ($query->num_rows() > 0)
			{
				return $query->result();
			}
		}

		$this->db->select('*');
		$this->db->from('tbl_stud_info');
		$this->db->where('stud_id', $stud_id);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}
	}

	public function get_student_gdn_info($stud_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_stud_gdn_info');
		$this->db->where('stud_id', $stud_id);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}

		return FALSE;
	}

	public function get_assessment_info($stud_id,$course,$year,$semester)
	{
		$where = array('stud_id' => $stud_id, 'stud_course' => $course, 'stud_year' => $year, 'stud_sem' => $semester);
		$this->db->select('*');
		$this->db->from('tbl_stud_asmnt_info');
		$this->db->where($where);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}

		return FALSE;
	}

	public function get_units_info($stud_id)
	{
		$this->db->select('units');
		$this->db->from('tbl_stud_units');
		$this->db->where('stud_id', $stud_id);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}

		return FALSE;
	}

	public function get_discount_info($stud_id,$course,$year,$semester)
	{
		$this->db->select('discount_fee, discount_prcnt');
		$this->db->from('tbl_stud_discount_info');
		$this->db->where('stud_id', $stud_id);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}

		return FALSE;
	}

	public function get_stud_pymnt_schme($stud_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_stud_pymnt_schm');
		$this->db->where('stud_id', $stud_id);
		$this->db->order_by('row_id', 'DESC');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}

		return FALSE;
	}

	public function update_student_assessment($stud_id)
	{
		$valid = $this->get_stud_pymnt_schme($stud_id);

		if ($valid > 0)
		{
			$this->db->set('stud_course', $this->input->post('stud_course'));
			$this->db->set('stud_year', $this->input->post('stud_year'));
			$this->db->set('stud_sem', $this->input->post('stud_semester'));
			$this->db->set('stud_status', 'floating');
			$this->db->where('stud_id', $stud_id);

			if ($this->db->update('tbl_stud_info'))
			{
				for ($i = 0; $i < count($this->input->post('f_name')); $i++)
				{
					$this->db->select('fee_name'); 
					$this->db->from('tbl_fees');
					$this->db->where('row_id', $this->input->post('f_name['.$i.']'));

					$query = $this->db->get();

					if ($query->num_rows() > 0)
					{
						$row = $query->row();

						$assmnt_data = array(
							'stud_id' => $stud_id,
							'stud_course' => $this->input->post('stud_course'),
							'stud_year' => $this->input->post('stud_year'),
							'stud_sem' => $this->input->post('stud_semester'),
							'fee_name' => $row->fee_name,
							'fee_amount' => $this->input->post('fees['.$i.']')
							);

						$query_2 = $this->db->insert('tbl_stud_asmnt_info', $assmnt_data);
					}
				}
				switch($this->input->post('stud_pymnt_schm'))
				{
					case 'CSHPYMNT':
						$pybles_data = array(
							'stud_id' => $stud_id,
							'stud_course' => $this->input->post('stud_course'),
							'stud_year' => $this->input->post('stud_year'),
							'stud_sem' => $this->input->post('stud_semester'),
							'stud_schm' => $this->input->post('stud_pymnt_schm'),
							'rsrvtn_fee' => 0,
							'upon_fee' => $this->input->post('upon'),
						);

						$query_3 = $this->db->insert('tbl_stud_pybles_csh', $pybles_data);
					break;
					case 'INSTLMNT':
						$pybles_data = array(
							'stud_id' => $stud_id,
							'stud_course' => $this->input->post('stud_course'),
							'stud_year' => $this->input->post('stud_year'),
							'stud_sem' => $this->input->post('stud_semester'),
							'stud_schm' => $this->input->post('stud_pymnt_schm'),
							'rsrvtn_fee' => 0,
							'upon_fee' => $this->input->post('upon'),
							'prelim_fee' => $this->input->post('prelim'),
							'midterm_fee' => $this->input->post('midterm'),
							'finals_fee' => $this->input->post('finals'),
						);

						$query_3 = $this->db->insert('tbl_stud_pybles_inst', $pybles_data);
					break;
					case 'MNTHLY':
						for($i = 0; $i < count($this->input->post('pymnt_for[]')); $i++)
						{
							$pybles_data = array(
								'stud_id' => $stud_id,
								'stud_course' => $this->input->post('stud_course'),
								'stud_year' => $this->input->post('stud_year'),
								'stud_sem' => $this->input->post('stud_semester'),
								'stud_schm' => $this->input->post('stud_pymnt_schm'),
								'pymnt_for' => $this->input->post('pymnt_for['.$i.']'),
								'amount' => $this->input->post('pymnt_amnt['.$i.']'),
							);

							$query_3 = $this->db->insert('tbl_stud_pybles_mnth', $pybles_data);
						}
					break;
				}
					
				$schm_data = array(
					'stud_id' => $stud_id,
					'stud_course' => $this->input->post('stud_course'),
					'stud_year' => $this->input->post('stud_year'),
					'stud_sem' => $this->input->post('stud_semester'),
					'stud_pymnt_schm' => $this->input->post('stud_pymnt_schm'),
				);

				$query = $this->db->insert('tbl_stud_pymnt_schm', $schm_data);

				if ($query)
				{
					$units_data = array(
						'stud_id' => $stud_id,
						'stud_course' => $this->input->post('stud_course'),
						'stud_year' => $this->input->post('stud_year'),
						'semester' => $this->input->post('stud_semester'),
						'units' => $this->input->post('units'),
					);

					$query = $this->db->insert('tbl_stud_units', $units_data);

					if ($query)
					{
						$disc_data = array(
							'stud_id' => $stud_id,
							'stud_course' => $this->input->post('stud_course'),
							'stud_year' => $this->input->post('stud_year'),
							'stud_sem' => $this->input->post('stud_semester'),
							'discount_fee' => $this->input->post('f_discount'),
							'discount_prcnt' => $this->input->post('dscnt')
							);

						$query = $this->db->insert('tbl_stud_discount_info', $disc_data);

						if ($query)
						{
							$this->session->set_flashdata('error', 'Student assessment updated');
							return TRUE;
						}
						else
						{
							$this->session->set_flashdata('error_2', 'Error updating student assessment. Please try again.');
							return FALSE;
						}
					}
					else
					{
						$this->session->set_flashdata('error_2', 'Error updating student assessment. Please try again.');
						return FALSE;
					}
				}
				else
				{
					$this->session->set_flashdata('error_2', 'Error updating student assessment. Please try again.');
					return FALSE;
				}
			}
		}
		else
		{
			for ($i = 0; $i < count($this->input->post('f_name')); $i++)
			{
				$this->db->select('fee_name'); 
				$this->db->from('tbl_fees');
				$this->db->where('row_id', $this->input->post('f_name['.$i.']'));

				$query = $this->db->get();

				if ($query->num_rows() > 0)
				{
					$row = $query->row();

					$assmnt_data = array(
						'stud_id' => $stud_id,
						'stud_course' => $this->input->post('stud_course'),
						'stud_year' => $this->input->post('stud_year'),
						'stud_sem' => $this->input->post('stud_semester'),
						'fee_name' => $row->fee_name,
						'fee_amount' => $this->input->post('fees['.$i.']')
						);

					$query_2 = $this->db->insert('tbl_stud_asmnt_info', $assmnt_data);
				}
			}
			switch($this->input->post('stud_pymnt_schm'))
			{
				case 'CSHPYMNT':
					$pybles_data = array(
						'stud_id' => $stud_id,
						'stud_course' => $this->input->post('stud_course'),
						'stud_year' => $this->input->post('stud_year'),
						'stud_sem' => $this->input->post('stud_semester'),
						'stud_schm' => $this->input->post('stud_pymnt_schm'),
						'rsrvtn_fee' => 0,
						'upon_fee' => $this->input->post('upon'),
					);

					$query_3 = $this->db->insert('tbl_stud_pybles_csh', $pybles_data);
				break;
				case 'INSTLMNT':
					$pybles_data = array(
						'stud_id' => $stud_id,
						'stud_course' => $this->input->post('stud_course'),
						'stud_year' => $this->input->post('stud_year'),
						'stud_sem' => $this->input->post('stud_semester'),
						'stud_schm' => $this->input->post('stud_pymnt_schm'),
						'rsrvtn_fee' => 0,
						'upon_fee' => $this->input->post('upon'),
						'prelim_fee' => $this->input->post('prelim'),
						'midterm_fee' => $this->input->post('midterm'),
						'finals_fee' => $this->input->post('finals'),
					);

					$query_3 = $this->db->insert('tbl_stud_pybles_inst', $pybles_data);
				break;
				case 'MNTHLY':
					for($i = 0; $i < count($this->input->post('pymnt_for[]')); $i++)
					{
						$pybles_data = array(
							'stud_id' => $stud_id,
							'stud_course' => $this->input->post('stud_course'),
							'stud_year' => $this->input->post('stud_year'),
							'stud_sem' => $this->input->post('stud_semester'),
							'stud_schm' => $this->input->post('stud_pymnt_schm'),
							'pymnt_for' => $this->input->post('pymnt_for['.$i.']'),
							'amount' => $this->input->post('pymnt_amnt['.$i.']'),
						);

						$query_3 = $this->db->insert('tbl_stud_pybles_mnth', $pybles_data);
					}
				break;
			}
				
			$schm_data = array(
				'stud_id' => $stud_id,
				'stud_course' => $this->input->post('stud_course'),
				'stud_year' => $this->input->post('stud_year'),
				'stud_sem' => $this->input->post('stud_semester'),
				'stud_pymnt_schm' => $this->input->post('stud_pymnt_schm'),
			);

			$query = $this->db->insert('tbl_stud_pymnt_schm', $schm_data);

			if ($query)
			{
				$units_data = array(
					'stud_id' => $stud_id,
					'stud_course' => $this->input->post('stud_course'),
					'stud_year' => $this->input->post('stud_year'),
					'semester' => $this->input->post('stud_semester'),
					'units' => $this->input->post('units'),
				);

				$query = $this->db->insert('tbl_stud_units', $units_data);

				if ($query)
				{
					$disc_data = array(
						'stud_id' => $stud_id,
						'stud_course' => $this->input->post('stud_course'),
						'stud_year' => $this->input->post('stud_year'),
						'stud_sem' => $this->input->post('stud_semester'),
						'discount_fee' => $this->input->post('f_discount'),
						'discount_prcnt' => $this->input->post('dscnt')
						);

					$query = $this->db->insert('tbl_stud_discount_info', $disc_data);

					if ($query)
					{
						$this->session->set_flashdata('error', 'Student assessment updated');
						return TRUE;
					}
					else
					{
						$this->session->set_flashdata('error_2', 'Error updating student assessment. Please try again.');
						return FALSE;
					}
				}
				else
				{
					$this->session->set_flashdata('error_2', 'Error updating student assessment. Please try again.');
					return FALSE;
				}
			}
			else
			{
				$this->session->set_flashdata('error_2', 'Error updating student assessment. Please try again.');
				return FALSE;
			}
		}
	}
}

/* End of file Student_model.php */
/* Location: ./application/modules/Student_Records/controllers/Student_model.php */