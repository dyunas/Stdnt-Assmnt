<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_scheme_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get_payment_scheme()
	{
		$this->db->select('row_id, scheme_name, scheme_code');
		$this->db->from('tbl_pymnt_schm');
		$this->db->order_by('row_id','desc');

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

	public function check_code_validity($code,$name)
	{
		$this->db->where('scheme_code', $code);
		$this->db->from('tbl_pymnt_schm');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			$row = $query->row();

			if ($name == $row->scheme_name)
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
		$this->db->where('scheme_name', $name);
		$this->db->from('tbl_pymnt_schm');

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

	public function insert_payment_scheme($name, $code)
	{
		if ($this->check_code_validity($code,$name))
		{
			if ($this->check_name_validity($name))
			{
				$this->db->set('scheme_name', $name);
				$this->db->set('scheme_code', $code);

				$query = $this->db->insert('tbl_pymnt_schm');

				if ($query)
				{
					$this->session->set_flashdata('error', 'New Payment Scheme Added');
					return TRUE;
				}
				else
				{
					$this->session->set_flashdata('error_2', 'Error adding payment scheme, please try again.');
					return FALSE;
				}
			}
			else
			{
				$this->session->set_flashdata('error_2', 'Scheme already exists');
				return FALSE;
			}
		}
		else
		{
			$this->session->set_flashdata('error_2', 'Code already in use');
			return FALSE;
		}
	}

	public function delete_payment_scheme($scheme_code)
	{
		$this->db->where('scheme_code', $scheme_code);

		if ($this->db->delete('tbl_pymnt_schm'))
		{
			$this->session->set_flashdata('error', 'Payment Scheme Deleted');
			return TRUE;
		}
		else
		{
			$this->session->set_flashdata('error_2', 'Error deleting record, please try again.');
			return FALSE;
		}
	}
}

/* End of file Payment_scheme_model.php */
/* Location: ./application/modules/Payment_scheme/models/Payment_scheme_model.php */