<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function check_user_credentials()
	{
		$this->db->where('user_id', $this->input->post('user_id'));
		$this->db->where('pword', md5($this->input->post('pword')));
		$this->db->from('tbl_accounts');

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$user_data = array('row_id' => $row->row_id, 'user_id' => $row->user_id, 'user_type' => $row->user_type, 'is_in' => 1);
		  $this->session->set_userdata($user_data);

			return TRUE;
		}
		else
		{
			$this->session->set_flashdata('error_2', 'Invalid Account!');
			return FALSE;
		}
	}

	public function get_user_info()
	{
		$this->db->where('user_id', $this->session->userdata('user_id'));

		if ($this->session->userdata('user_type') == 'Admin')
		{
			$this->db->from('tbl_admin_info');

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
		else
		{
			$this->db->from('tbl_user_info');

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
	}

	public function log_out()
	{
		$this->session->sess_destroy();
		return TRUE;
	}
}

/* End of file Login_model.php */
/* Location: ./application/modules/Login/models/Login_model.php */