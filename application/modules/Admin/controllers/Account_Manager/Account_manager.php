<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_manager extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Account_manager/Account_manager_model', 'acct_mngr');
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
				'title' => 'Account Manager',
				'usr' => $this->login->get_user_info(),
				'accts' => $this->acct_mngr->get_accounts_tbl(),
			);

			$this->template->load($data, null, 'Index', 'Admin/Account_Manager');
		}
	}

	public function New_account()
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Account Manager',
				'usr' => $this->login->get_user_info()
			);

			$this->template->load($data, null, 'New_account', 'Admin/Account_Manager');
		}
	}

	public function Validate_new_account()
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			// print_r($_FILES['profile_pic']);
			$config['upload_path'] = './assets/uploads/profile/';
	    $config['file_name'] = md5(rand(0, 100)).'.jpg';
	    $config['allowed_types'] = 'jpg|jpeg';
	    $config['max_size']     = '0';
	    $config['max_width'] = '0';
	    $config['max_height'] = '0';

	    $this->load->library('upload', $config);

      if ($this->upload->do_upload('profile_pic'))
      {
        $file = $this->upload->data();

        $config['image_library'] = 'gd2';
        $config['source_image'] = $file['full_path'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['width']         = 180;
        $config['height']       = 200;

        $this->load->library('image_lib', $config);

        $this->image_lib->resize();

        if ($this->acct_mngr->add_account($file['file_name']))
        {
        	redirect(site_url('admin/acct_mngr'));
        }
        else
        {
        	redirect(site_url('admin/acct_mngr/new_account'));
        }
      }
      else
      {
      	// error!
      }
		}
	}

	public function View_account($id)
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Account Manager',
				'usr' => $this->login->get_user_info(),
				'acct_info' => $this->acct_mngr->get_account_info($id)
			);

			$this->template->load($data, null, 'View_account', 'Admin/Account_Manager');
		}
	}
}

/* End of file Account_manager.php */
/* Location: ./application/modules/Account_Manager/controllers/Account_manager.php */