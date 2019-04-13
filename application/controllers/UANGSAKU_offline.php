<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_offline extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('STATUS_USER') == null) {
			redirect('UANGSAKU');
		}
	}
	public function index()
	{
		$this->load->view('user/view/offline');	
	}
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

}

/* End of file UANGSAKU_offline.php */
/* Location: ./application/controllers/UANGSAKU_offline.php */