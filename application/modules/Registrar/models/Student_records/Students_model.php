<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
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
					$this->session->set_flashdata('error', 'New Student enrolled to the database');
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