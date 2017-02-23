<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assessment_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get_semester()
	{
		$this->db->select('*');
		$this->db->from('tbl_semester');

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

	public function get_courses()
	{
		$this->db->select('*');
		$this->db->from('tbl_course');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_payment_scheme()
	{
		$this->db->select('row_id, scheme_name, scheme_code');
		$this->db->from('tbl_pymnt_schm');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}

		return FALSE;
	}

	public function get_fees($id = FALSE)
	{
		if ($id === FALSE)
		{
			$this->db->select('row_id, fee_name, amount');
			$this->db->from('tbl_fees');

			$query = $this->db->get();

			if ($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return FALSE;
			}
		}
		
		$this->db->select('amount');
		$this->db->where('row_id', $id);
		$this->db->from('tbl_fees');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			$row = $query->row();

			return $row->amount;
		}
		else
		{
			return FALSE;
		}
	}

	public function get_fee_amt($id, $units)
	{
		$this->db->select('amount');
		$this->db->where('row_id', $id);
		$this->db->from('tbl_fees');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			$row = $query->row();

			return $row->amount;
		}
		else
		{
			return FALSE;
		}
	}
}

/* End of file Assessment_model.php */
/* Location: ./application/modules/Assessment/controllers/Assessment_model.php */