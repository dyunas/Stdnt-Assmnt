<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fee_manager_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get_fees_tbl()
	{
		$this->db->select('row_id, fee_name, amount, status');
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

	public function insert_fee()
	{
		if ($this->check_name_validity($this->input->post('fee_name')))
		{
			$this->db->set('fee_name', $this->input->post('fee_name'));
			$this->db->set('amount', $this->input->post('fee_amount'));

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
		else
		{
			$this->session->set_flashdata('error_2', 'Error adding fee. Fee already exists.');
			return FALSE;
		}
	}

	public function toggle_availability($code, $status)
	{
		if ($status == 'Enabled')
		{
			$this->db->set('status', 'Disabled');
		}
		else
		{
			$this->db->set('status', 'Enabled');
		}

		$this->db->where('row_id', $code);
		if($this->db->update('tbl_fees'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	// public function delete_fee($fee_name)
	// {
	// 	$this->db->where('fee_name', $fee_name);

	// 	if ($this->db->delete('tbl_fees'))
	// 	{
	// 		$this->session->set_flashdata('error', 'Fee deleted');
	// 		return TRUE;
	// 	}
	// 	else
	// 	{
	// 		$this->session->set_flashdata('error_2', 'Error deleting fee, please try again.');
	// 		return FALSE;
	// 	}
	// }
}

/* End of file Fee_manager_model.php */
/* Location: ./application/modules/Fee_manager/models/Fee_manager_model.php */