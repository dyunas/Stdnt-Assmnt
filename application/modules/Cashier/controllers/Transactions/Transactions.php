<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transactions extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cashier/Transactions/Transactions_model', 'transactions');
	}

	public function Index()
	{
		if ($this->session->userdata('user_type') != 'Cashier')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Daily Transactions',
				'usr' => $this->login->get_user_info(),
				'dly_trans' => $this->transactions->get_daily_transactions(),
			);

			$this->template->load($data, null, 'Index', 'Cashier/Transactions');
		}
	}
}

/* End of file Transactions.php */
/* Location: ./application/modules/Cashier/controllers/Transactions/Transactions.php */