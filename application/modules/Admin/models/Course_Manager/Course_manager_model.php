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
				$this->db->set('status', 'Available');

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

	public function get_course_info($code)
	{
		$this->db->select('*');
		$this->db->from('tbl_course');
		$this->db->where('course_code', $code);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}
		else
		{
			return FALSE;
		}
	}

	public function update_course($courseName, $courseCode, $nameUpdate, $codeUpdate)
	{
		if ($this->check_code($courseCode,$nameUpdate))
		{
			if ($this->check_name($courseName,$codeUpdate))
			{
				$this->db->set('course_name', $courseName);
				$this->db->set('course_code', $courseCode);
				$this->db->set('status', 'Available');
				$this->db->where('course_code', $codeUpdate);

				$query = $this->db->update('tbl_course');

				if ($query)
				{
					$this->session->set_flashdata('error', 'Course Updated');
					return TRUE;
				}
				else
				{
					$this->session->set_flashdata('error_2', 'Error updating course, please try again.');
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

	public function check_code($code,$name)
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

	public function check_name($name,$code)
	{
		$this->db->where('course_name', $name);
		$this->db->from('tbl_course');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			$row = $query->row();

			if ($code == $row->course_code)
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

	public function toggle_availability($code,$status)
	{
		if ($status == 'Available')
		{
			$this->db->set('status', 'Unavailable');
		}
		else
		{
			$this->db->set('status', 'Available');
		}

		$this->db->where('course_code', $code);
		if($this->db->update('tbl_course'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}

/* End of file Course_manager_model.php */
/* Location: ./application/modules/Course_Manager/models/Course_manager_model.php */