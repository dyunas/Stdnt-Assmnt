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
		$this->db->set('course_name', $name);
		$this->db->set('course_code', $code);
		$query = $this->db->insert('tbl_course');

		if ($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}