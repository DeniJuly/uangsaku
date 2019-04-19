<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_login_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$JENIS_USER = $this->session->userdata('JENIS_USER');
		if ($JENIS_USER == 'admin') {
			redirect(site_url('ADMIN'));
		}
	}
	public function index()
	{
		$this->load->view('admin/view/login');
	}
	public function proses_masuk()
	{
		$EMAIL 		= $this->input->post('EMAIL');
		$PASSWORD 	= $this->input->post('PASS');

		$data = array(
			'EMAIL'		=>	$EMAIL,
			'PASSWORD'	=>  md5($PASSWORD)
		);
		$cek = $this->M_admin->some($data)->num_rows();

		if ($cek == 1) {
			$get = $this->M_admin->some($data)->row();

			$session = array(
				'ID_ADMIN'			=> $get->ID_ADMIN,
				'JENIS_USER'		=> 'admin',
				'EMAIL'				=> $get->EMAIL,
				'USERNAME'			=> $get->USERNAME
			);
			
						
			$this->session->set_userdata( $session );
			echo 1;
		}else{
			echo 2;
		}
	}

}

/* End of file UANGSAKU_login_admin.php */
/* Location: ./application/controllers/UANGSAKU_login_admin.php */