<?php

class UANGSAKU extends CI_controller
{
	public function index()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/first';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function login()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/login';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Masuk';
		$this->load->view('template',$var);		
	}
	public function pra_daftar()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/two';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}

	// daftar sekolah
	public function daftar_sekolah()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/sekolah/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function get_parent_code()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/sekolah/second_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);		
	}
	public function konfirmasi_email()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/sekolah/third_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}

	// daftar siswa
	public function daftar_siswa()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/siswa/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function daftar_mitra()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/mitra/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}

	// daftar ortu
	public function daftar_orang_tua()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/orangtua/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function daftar_orang_tua2()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/orangtua/second_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function daftar_orang_tua3()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/orangtua/third_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function daftar_orang_tua4()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/orangtua/fourth_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	// Page Orang Tua
	public function beranda_orang_tua()
	{
		$var['header']	= 'user/main_view/header_orang_tua';
		$var['konten']	= 'user/view/orangtua/page/beranda';
		$var['footer']	= 'user/main_view/footer_orang_tua';
		$var['judul']   = 'Beranda';
		$this->load->view('template',$var);	
	}
	public function profile_orang_tua()
	{
		$var['header'] = 'user/main_view/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/profile_orang_tua';
		$var['footer'] = 'user/main_view/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function history_orang_tua()
	{
		$var['header'] = 'user/main_view/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/history';
		$var['footer'] = 'user/main_view/footer_orang_tua';
		$var['judul']  = 'Riwayat Anak';
		$this->load->view('template',$var);		
	}

	public function bayar()
	{
		$var['header'] = 'user/main_view/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/bayar';
		$var['footer'] = 'user/main_view/footer_orang_tua';
		$var['judul']  = 'Riwayat Anak';
		$this->load->view('template',$var);		
	}

	public function beli()
	{
		$var['header'] = 'user/main_view/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/beli';
		$var['footer'] = 'user/main_view/footer_orang_tua';
		$var['judul']  = 'Riwayat Anak';
		$this->load->view('template',$var);		
	}
}