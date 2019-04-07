<?php 

class UANGSAKU_Sekolah extends CI_controller
{
	
	public function index()
	{
		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/pembayaran';
		$var['footer'] = 'user/main_view/sekolah/footer_sekolah';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function siswa()
	{
		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/siswa';
		$var['footer'] = 'user/main_view/sekolah/footer_sekolah';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);	
	}
	public function profile()
	{
		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/profile';
		$var['footer'] = 'user/main_view/sekolah/footer_sekolah';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
}