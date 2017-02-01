<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fee_manager_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get_fees_tbl()
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

	public function check_name_validity($name)
	{
		$this->db->where('fee_name', $name);
		$this->db->from('tbl_fees');

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

	public function insert_fee($name, $amount)
	{
		if ($this->check_name_validity($name))
		{
			$this->db->set('fee_name', $name);
			$this->db->set('amount', $amount);

			if ($this->db->insert('tbl_fees'))
			{
				$this->session->set_flashdata('error', 'New Fee Added');
				return TRUE;
			}
			else
			{
				$this->session->set_flashdata('error_2', 'Error adding fee, please try again.');
				return FALSE;
			}
		}
	}

	public function delete_fee($fee_name)
	{
		$this->db->where('fee_name', $fee_name);

		if ($this->db->delete('tbl_fees'))
		{
			$this->session->set_flashdata('error', 'Fee deleted');
			return TRUE;
		}
		else
		{
			$this->session->set_flashdata('error_2', 'Error deleting fee, please try again.');
			return FALSE;
		}
	}
}

/* End of file Fee_manager_model.php */
/* Location: ./application/modules/Fee_manager/models/Fee_manager_model.php */