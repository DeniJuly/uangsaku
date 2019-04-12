<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_admin extends CI_Controller {

	public function index()
	{
		$var['header'] = 'admin/main_view/header_admin';
		$var['konten'] = 'admin/view/beranda';
		$var['footer'] = 'admin/main_view/footer_admin';
		$var['judul']  = 'Beranda | Admin';
		$this->load->view('template',$var);			
	}

	public function sekolah()
	{
		$var['header'] = 'admin/main_view/header_admin';
		$var['konten'] = 'admin/view/sekolah';
		$var['footer'] = 'admin/main_view/footer_admin';
		$var['judul']  = 'Siswa | Admin';
		$this->load->view('template',$var);			
	}

	public function orang_tua()
	{
		$var['header'] = 'admin/main_view/header_admin';
		$var['konten'] = 'admin/view/orang_tua';
		$var['footer'] = 'admin/main_view/footer_admin';
		$var['judul']  = 'Orang Tua | Admin';
		$this->load->view('template',$var);			
	}

	public function siswa()
	{
		$var['header'] = 'admin/main_view/header_admin';
		$var['konten'] = 'admin/view/siswa';
		$var['footer'] = 'admin/main_view/footer_admin';
		$var['judul']  = 'Siswa | Admin';
		$this->load->view('template',$var);			
	}

	public function list_siswa()
	{
		$var['header'] = 'admin/main_view/header_admin';
		$var['konten'] = 'admin/view/list_siswa';
		$var['footer'] = 'admin/main_view/footer_admin';
		$var['judul']  = 'Siswa | Admin';
		$this->load->view('template',$var);			
	}

	public function keuangan()
	{
		$var['header'] = 'admin/main_view/header_admin';
		$var['konten'] = 'admin/view/keuangan';
		$var['footer'] = 'admin/main_view/footer_admin';
		$var['judul']  = 'Keuangan | Uangsaku';
		$this->load->view('template',$var);			
	}

	public function feedback()
	{
		$var['header'] = 'admin/main_view/header_admin';
		$var['konten'] = 'admin/view/feedback';
		$var['footer'] = 'admin/main_view/footer_admin';
		$var['judul']  = 'Feedback | Uangsaku';
		$this->load->view('template',$var);			
	}
}