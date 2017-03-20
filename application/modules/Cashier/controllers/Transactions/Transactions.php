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
				// 'dly_trans' => $this->transactions->get_daily_transactions(),
			);

			$this->template->load($data, null, 'Index', 'Cashier/Transactions');
		}
	}

	public function Get_transaction_tbl()
	{
		if ($this->session->userdata('user_type') != 'Cashier') 
		{
			redirect(site_url());
		}
		else
		{
			if ($this->input->is_ajax_request())
			{
				$trans_date = $this->input->get('transDte');

				$data['transactions'] = $this->transactions->get_daily_transactions($trans_date);
				$data['trans_date'] = $trans_date;

				return $result = $this->load->view('Cashier/Transactions/Transaction_table_view', $data);
			}
			else
			{
				exit('No direct script access allowed');
			}
		}
	}
}

/* End of file Transactions.php */
/* Location: ./application/modules/Cashier/controllers/Transactions/Transactions.php */