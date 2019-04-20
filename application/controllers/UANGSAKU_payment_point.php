<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_payment_point extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('JENIS_USER') != 'payment_poin') {
			redirect('UANGSAKU');
		}
	}
	public function index()
	{
		$var['header']	= 'user/main_view/payment_poin/header_payment';
		$var['konten']	= 'user/view/payment_poin/page/beranda';
		$var['footer']	= 'user/main_view/payment_poin/footer_payment';
		$var['judul']   = 'UANGSAKU';
		$this->load->view('template',$var);	
	}

}

/* End of file UANGSAKU_payment_point.php */
/* Location: ./application/controllers/UANGSAKU_payment_point.php */