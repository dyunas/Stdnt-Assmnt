<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_manager_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get_accounts_tbl()
	{
		$this->db->select('acct.row_id, acct.user_id, acct.user_type, info.row_id as infoID, info.fname, info.mname, info.lname');
		$this->db->from('tbl_accounts as acct');
		$this->db->join('tbl_admin_info as info', 'acct.user_id = info.user_id');

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

	public function get_account_info($id)
	{
		$this->db->select('acct.row_id, acct.user_id, acct.user_type, info.row_id as infoID, info.emp_photo, info.fname, info.mname, info.lname, info.email, info.adrs, info.city, info.province');
		$this->db->from('tbl_accounts as acct');
		$this->db->join('tbl_admin_info as info', 'acct.user_id = info.user_id');
		$this->db->where('acct.user_id', $id);

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

	public function Add_account($avatar)
	{
		$emp_id = $this->get_emp_id();

		$emp_data = array(
			'user_id' => $emp_id,
			'pword' => md5('password'),
			'user_type' => $this->input->post('emp_type'),
			);

		$query = $this->db->insert('tbl_accounts', $emp_data);

		if ($query)
		{
			$emp_info = array(
				'user_id' => $emp_id,
				'emp_photo' => $avatar,
				'fname' => $this->input->post('emp_fname'),
				'mname' => $this->input->post('emp_mname'),
				'lname' => $this->input->post('emp_lname'),
				'email' => $this->input->post('emp_email'),
				'adrs' => $this->input->post('emp_addr_ln1'),
				'city' => $this->input->post('emp_addr_ln2'),
				'province' => $this->input->post('emp_addr_ln3')
				);

			$query = $this->db->insert('tbl_admin_info', $emp_info);

			if ($query)
			{
				$this->session->set_flashdata('error', 'New account added to the database');
				return TRUE;
			}
			else
			{
				$this->session->set_flashdata('error_2', 'Error adding account. Please try again.');
				return FALSE;
			}
		}
		else
		{
			$this->session->set_flashdata('error_2', 'Error adding account. Please try again.');
			return FALSE;
		}
	}

	public function get_emp_id()
	{
		$yr = date('Y');

		$this->db->select('user_id');
		$this->db->from('tbl_accounts');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			$row = $query->last_row();
			$id = explode('-', $row->user_id);
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

			$stud_id = $yr.'-'.$id;
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

			$stud_id = $yr.'-'.$id;
		}

		return $stud_id;
	}
}

/* End of file Account_manager_model.php */
/* Location: ./application/modules/Account_Manager/models/Account_manager_model.php */