<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course_manager_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get_course_tbl()
	{
		$query = $this->db->get('tbl_course');

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

	public function add_course($name,$code)
	{
		if ($this->check_code_validity($code,$name))
		{
			if ($this->check_name_validity($name))
			{
				$this->db->set('course_name', $name);
				$this->db->set('course_code', $code);

				$query = $this->db->insert('tbl_course');

				if ($query)
				{
					$this->session->set_flashdata('error', 'New Course Added');
					return TRUE;
				}
				else
				{
					$this->session->set_flashdata('error_2', 'Error adding new course, please try again.');
					return FALSE;
				}
			}
			else
			{
				$this->session->set_flashdata('error_2', 'Course already exists');
				return FALSE;
			}
		}
		else
		{
			$this->session->set_flashdata('error_2', 'Code already in use');
			return FALSE;
		}
	}

	public function check_code_validity($code,$name)
	{
		$this->db->where('course_code', $code);
		$this->db->from('tbl_course');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			$row = $query->row();

			if ($name == $row->course_name)
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
			return TRUE;
		}
	}

	public function check_name_validity($name)
	{
		$this->db->where('course_name', $name);
		$this->db->from('tbl_course');

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
}

/* End of file Course_manager_model.php */
/* Location: ./application/modules/Course_Manager/models/Course_manager_model.php */