<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_admin extends CI_Controller {

	public function index()
	{
		$var['header'] = 'user/main_view/admin/header_admin';
		$var['konten'] = 'user/view/admin/beranda';
		$var['footer'] = 'user/main_view/admin/footer_admin';
		$var['judul']  = 'Beranda | Admin';
		$this->load->view('template',$var);			
	}

	public function sekolah()
	{
		$var['header'] = 'user/main_view/admin/header_admin';
		$var['konten'] = 'user/view/admin/sekolah';
		$var['footer'] = 'user/main_view/admin/footer_admin';
		$var['judul']  = 'Siswa | Admin';
		$this->load->view('template',$var);			
	}

	public function orang_tua()
	{
		$var['header'] = 'user/main_view/admin/header_admin';
		$var['konten'] = 'user/view/admin/orang_tua';
		$var['footer'] = 'user/main_view/admin/footer_admin';
		$var['judul']  = 'Orang Tua | Admin';
		$this->load->view('template',$var);			
	}

	public function siswa()
	{
		$var['header'] = 'user/main_view/admin/header_admin';
		$var['konten'] = 'user/view/admin/siswa';
		$var['footer'] = 'user/main_view/admin/footer_admin';
		$var['judul']  = 'Siswa | Admin';
		$this->load->view('template',$var);			
	}

	public function list_siswa()
	{
		$var['header'] = 'user/main_view/admin/header_admin';
		$var['konten'] = 'user/view/admin/list_siswa';
		$var['footer'] = 'user/main_view/admin/footer_admin';
		$var['judul']  = 'Siswa | Admin';
		$this->load->view('template',$var);			
	}

	public function keuangan()
	{
		$var['header'] = 'user/main_view/admin/header_admin';
		$var['konten'] = 'user/view/admin/keuangan';
		$var['footer'] = 'user/main_view/admin/footer_admin';
		$var['judul']  = 'Keuangan | Uangsaku';
		$this->load->view('template',$var);			
	}

	public function feedback()
	{
		$var['header'] = 'user/main_view/admin/header_admin';
		$var['konten'] = 'user/view/admin/feedback';
		$var['footer'] = 'user/main_view/admin/footer_admin';
		$var['judul']  = 'Feedback | Uangsaku';
		$this->load->view('template',$var);			
	}
}