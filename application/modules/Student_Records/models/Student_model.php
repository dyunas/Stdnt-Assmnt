<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Assessment/Assessment_model', 'assessment');
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

	public function get_assessment_info($stud_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_stud_asmnt_info');
		$this->db->where('stud_id', $stud_id);

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

	public function get_discount_info($stud_id)
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
		$this->db->select('stud_pymnt_schm');
		$this->db->from('tbl_stud_pymnt_schm');
		$this->db->where('stud_id', $stud_id);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}

		return FALSE;
	}

	public function enroll_student()
	{
		$stud_id = $this->get_stud_id($this->input->post('stud_year'));

		if ($this->check_validity($this->input->post('stud_name')))
		{
			$stud_data = array(
				'stud_id' => $stud_id,
				'stud_name' => $this->input->post('stud_name'),
				'stud_status' => 'floating',
				'stud_course' => $this->input->post('stud_course'),
				'stud_year' => $this->input->post('stud_year'),
				'stud_sem' => $this->input->post('stud_semester'),
				'stud_email' => $this->input->post('stud_email'),
				'stud_bdate' => $this->input->post('stud_bdate'),
				'stud_cnum' => $this->input->post('stud_cnum'),
				'stud_tnum' => $this->input->post('stud_tnum'),
				'stud_gender' => $this->input->post('stud_gender'),
				'stud_addr_ln1' => $this->input->post('stud_addr_ln1'),
				'stud_addr_ln2' => $this->input->post('stud_addr_ln2'),
				'stud_addr_ln3' => $this->input->post('stud_addr_ln3'),
				'stud_addr_ln4' => $this->input->post('stud_addr_ln4'),
				);

			$query = $this->db->insert('tbl_stud_info', $stud_data);

			if ($query)
			{
				$gdn_data = array(
					'stud_id' => $stud_id,
					'stud_gdn_name' => $this->input->post('stud_gdn_name'),
					'stud_gdn_cnum' => $this->input->post('stud_gdn_cnum'),
					'stud_gdn_tnum' => $this->input->post('stud_gdn_tnum'),
					'stud_gdn_addr_ln1' => $this->input->post('stud_gdn_addr_ln1'),
					'stud_gdn_addr_ln2' => $this->input->post('stud_gdn_addr_ln2'),
					'stud_gdn_addr_ln3' => $this->input->post('stud_gdn_addr_ln3'),
					'stud_gdn_addr_ln4' => $this->input->post('stud_gdn_addr_ln4'),
					);

				$query = $this->db->insert('tbl_stud_gdn_info', $gdn_data);

				if ($query)
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
							for($i = 0; $i < count($this->input->post('pymnt_for')); $i++)
							{
								$pybles_data = array(
									'stud_id' => $stud_id,
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
						'stud_year' => $this->input->post('stud_year'),
						'stud_sem' => $this->input->post('stud_semester'),
						'stud_pymnt_schm' => $this->input->post('stud_pymnt_schm'),
					);

					$query = $this->db->insert('tbl_stud_pymnt_schm', $schm_data);

					if ($query)
					{
						$units_data = array(
							'stud_id' => $stud_id,
							'stud_year' => $this->input->post('stud_year'),
							'semester' => $this->input->post('stud_semester'),
							'units' => $this->input->post('units'),
						);

						$query = $this->db->insert('tbl_stud_units', $units_data);

						if ($query)
						{
							$this->session->set_flashdata('error', 'New Student added to the database');
							return TRUE;
						}
						else
						{
							$this->session->set_flashdata('error_2', 'Error enrolling student. Please try again.');
							return FALSE;
						}
					}
					else
					{
						$this->session->set_flashdata('error_2', 'Error enrolling student. Please try again.');
						return FALSE;
					}
				}
				else
				{
					$this->session->set_flashdata('error_2', 'Error enrolling student. Please try again.');
					return FALSE;
				}
			}
			else
			{
				$this->session->set_flashdata('error_2', 'Error enrolling student. Please try again.');
				return FALSE;
			}
		}
		else
		{
			$this->session->set_flashdata('error_2', 'Student already exist in the database.');
			return FALSE;
		}
	}

	public function check_validity($stud_name)
	{
		$this->db->where('stud_name', $stud_name);
		$this->db->from('tbl_stud_info');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function get_stud_id($stud_yr)
	{
		$sem = $this->assessment->get_semester();

		if ($sem->semester == '1st')
		{
			$semtr = '1';
		}
		else
		{
			$semtr = '2';
		}

		$yr = date('y');

		$this->db->select('stud_id');
		$this->db->from('tbl_stud_info');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			$row = $query->last_row();
			$id = explode('-', $row->stud_id);
			$ctr = $id[1] + 1;

			if (strlen($ctr) == 2)
			{
				$id = '00'.$ctr;
			}
			else if (strlen($ctr) == 3)
			{
				$id = '0'.$ctr;
			}
			else if (strlen($ctr) == 4)
			{
				$id = '0'.$ctr;
			}
			else
			{
				$id = '000'.$ctr;
			}

			$stud_id = $yr.'-'.$id.'-'.$stud_yr.$semtr;
		}
		else
		{
			$ctr = 1;

			if (strlen($ctr) == 2)
			{
				$id = '00'.$ctr;
			}
			else if (strlen($ctr) == 3)
			{
				$id = '0'.$ctr;
			}
			else if (strlen($ctr) == 4)
			{
				$id = '0'.$ctr;
			}
			else
			{
				$id = '000'.$ctr;
			}

			$stud_id = $yr.'-'.$id.'-'.$stud_yr.$semtr;
		}

		return $stud_id;
	}
}

/* End of file Student_model.php */
/* Location: ./application/modules/Student_Records/controllers/Student_model.php */