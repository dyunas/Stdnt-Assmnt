<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_scheme extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Payment_scheme/Payment_scheme_model', 'scheme');
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
				'title' => 'Payment Scheme',
				'usr' => $this->login->get_user_info(),
				'schemes' => $this->scheme->get_payment_scheme(),
			);

			$this->template->load($data, null, 'Index', 'Admin/Payment_scheme');
		}
	}

	public function Add_scheme()
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
				$code = $this->input->get('code');
				
				if ($this->scheme->insert_payment_scheme($name, $code))
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

	public function Update_scheme()
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
				$code = $this->input->get('code');
				
				if ($this->scheme->update_payment_scheme($name, $code))
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

	public function Toggler_availability()
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			if ($this->input->is_ajax_request())
			{
				$code = $this->input->get('code');
				$status = $this->input->get('status');

				if ($this->scheme->toggle_availability($code, $status))
				{
					echo 'true';
				}
				else
				{
					echo 'false';
				}
			}
			else
			{
				exit('No direct script access allowed');
			}
		}
	}

	// public function Delete_scheme($scheme_code)
	// {
	// 	if ($this->session->userdata('user_type') != 'Admin')
	// 	{
	// 		redirect(site_url());
	// 	}
	// 	else
	// 	{
	// 		if ($this->db->delete_payment_scheme($scheme_code))
	// 		{
	// 			redirect(site_url('admin/settings/pymnt_schm'));
	// 		}
	// 		else
	// 		{
	// 			redirect(site_url('admin/settings/pymnt_schm'));
	// 		}
	// 	}
	// }
}

/* End of file Payment_scheme.php */
/* Location: ./application/modules/Payment_scheme/controllers/Payment_scheme.php */