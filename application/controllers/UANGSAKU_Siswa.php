<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_Siswa extends CI_Controller {

	public function index()
	{
		$var['header']  = 'main-view/header_siswa';
		$var['konten']  = 'view/siswa/';
		$var['footer']  = 'main-view/footer_siswa';
	}

}

/* End of file UANGSAKU_Siswa.php */
/* Location: ./application/controllers/UANGSAKU_Siswa.php */