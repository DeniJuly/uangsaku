<?php

class UANGSAKU extends CI_controller
{
	public function index()
	{
		$var['header']	= 'user/main_view/header_landing_page';
		$var['konten']	= 'user/view/landing_page';
		$var['footer']	= 'user/main_view/footer_landing_page';
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
	public function konfirmasi_email_sekolah()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/sekolah/second_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function proses_daftar_sekolah()
	{
		$nama  = $this->input->post('nama');
		$npsn  = $this->input->post('npsn');
		$email = $this->input->post('email');
		$pass  = $this->input->post('pass');

		$data_cek_email = array(
			'EMAIL' 		=> $email 
		);
		$cek_email = $this->M_user->some($data_cek_email)->num_rows();
		if ($cek_email == 1) {
			echo 1;
		}else{
			echo 2;
		}
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
	public function konfirmasi_email_siswa()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/siswa/second_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	// daftar mitra
	public function daftar_mitra()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/mitra/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function konfirmasi_email_mitra()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/mitra/second_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}

	// daftar ortu
	public function daftar_orangtua()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/orangtua/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function konfirmasi_email_orangtua()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/orangtua/second_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
}