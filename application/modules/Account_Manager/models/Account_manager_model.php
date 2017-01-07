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
}

/* End of file Account_manager_model.php */
/* Location: ./application/modules/Account_Manager/models/Account_manager_model.php */