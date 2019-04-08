<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_mitra extends CI_Controller {

	public function index()
	{
		$var['header'] = 'user/main_view/header_mitra';
		$var['konten'] = 'user/view/mitra/beranda';
		$var['footer'] = 'user/main_view/footer_mitra';
		$var['judul']  = 'Beranda | Mitra';
		$this->load->view('template',$var);			
	}

	public function profile()
	{
		$var['header'] = 'user/main_view/header_mitra';
		$var['konten'] = 'user/view/mitra/profile';
		$var['footer'] = 'user/main_view/footer_mitra';
		$var['judul']  = 'Profile | Mitra';
		$this->load->view('template',$var);			
	}

	public function produk()
	{
		$var['header'] = 'user/main_view/header_mitra';
		$var['konten'] = 'user/view/mitra/produk';
		$var['footer'] = 'user/main_view/footer_mitra';
		$var['judul']  = 'Produk | Mitra';
		$this->load->view('template',$var);			
	}

	public function transaksi()
	{
		$var['header'] = 'user/main_view/header_mitra';
		$var['konten'] = 'user/view/mitra/transaksi';
		$var['footer'] = 'user/main_view/footer_mitra';
		$var['judul']  = 'Transaksi | Mitra';
		$this->load->view('template',$var);			
	}

	public function info()
	{
		$var['header'] = 'user/main_view/header_mitra';
		$var['konten'] = 'user/view/mitra/info';
		$var['footer'] = 'user/main_view/footer_mitra';
		$var['judul']  = 'Info | Mitra';
		$this->load->view('template',$var);			
	}

}