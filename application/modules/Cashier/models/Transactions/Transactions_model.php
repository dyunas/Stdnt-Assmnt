<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transactions_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function get_daily_transactions($trans_date)
	{
		$this->db->select('trans.*, stud.stud_name, acct.fname, acct.lname');
		$this->db->from('tbl_transactions trans');
		$this->db->where('trans.trans_date', date('Y-m-d', strtotime($trans_date)));
		$this->db->join('tbl_stud_info stud', 'on stud.stud_id = trans.stud_id');
		$this->db->join('tbl_admin_info acct', 'on acct.user_id = trans.cashier_id');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->result();
		}

		return FALSE;
	}
}

/* End of file Transactions_model.php */
/* Location: ./application/modules/Cashier/models/Transactions/Transactions_model.php */