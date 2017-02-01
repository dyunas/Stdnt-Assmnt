<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fee_manager extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Fee_manager/Fee_manager_model', 'fee_mngr');
	}

	public function Index()
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
			'title' => 'Our templated module',
			'usr' => $this->login->get_user_info(),
			'fees' => $this->fee_mngr->get_fees_tbl(),
			);

			$this->template->load($data, null, 'Index');
		}
	}

	public function Add_fee()
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			if ($this->input->is_ajax_request())
			{
				$name = $this->input->get('name');
				$amount = $this->input->get('amount');
				
				if ($this->fee_mngr->insert_fee($name, $amount))
				{
					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}
		}
	}

	public function Delete_fee($fee_name)
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			if ($this->fee_mngr->delete_fee($fee_name))
			{
				redirect(site_url('admin/settings/fee_mngr'));
			}
			else
			{
				redirect(site_url('admin/settings/fee_mngr'));
			}
		}
	}
}

/* End of file Fee_manager.php */
/* Location: ./application/modules/Fee_manager/controllers/Fee_manager.php */


