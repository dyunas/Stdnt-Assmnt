<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Yr_sem_model extends CI_Model {
	public function get_schoolyr_info()
	{
		$query = $this->db->get('tbl_schlyear');

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}
		else
		{
			return FALSE;
		}
	}

	public function get_semester_info()
	{
		$query = $this->db->get('tbl_semester');

		if ($query->num_rows() > 0)
		{
			return $query->row();
		}
		else
		{
			return FALSE;
		}
	}

	public function update_sem($var)
	{
		$this->db->set('semester', $var);

		if ($this->db->update('tbl_semester'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function update_sy($var)
	{
		$this->db->set('school_yr', $var);

		if ($this->db->update('tbl_schlyear'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}

/* End of file Yr_sem_model.php */
/* Location: ./application/modules/Admin/Yr_Semester/models/Yr_sem_model.php */