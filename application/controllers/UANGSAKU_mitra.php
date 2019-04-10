<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_mitra extends CI_Controller {

	public function index()
	{
		$var['header'] = 'user/main_view/mitra/header_mitra';
		$var['konten'] = 'user/view/mitra/page/beranda';
		$var['footer'] = 'user/main_view/mitra/footer_mitra';
		$var['judul']  = 'Beranda | Mitra';
		$this->load->view('template',$var);			
	}

	public function Profile()
	{
		$var['header'] = 'user/main_view/mitra/header_mitra';
		$var['konten'] = 'user/view/mitra/page/profile';
		$var['footer'] = 'user/main_view/mitra/footer_mitra';
		$var['judul']  = 'Profile | Mitra';
		$this->load->view('template',$var);			
	}

	public function produk()
	{
		$var['header'] = 'user/main_view/mitra/header_mitra';
		$var['konten'] = 'user/view/mitra/page/produk';
		$var['footer'] = 'user/main_view/mitra/footer_mitra';
		$var['judul']  = 'Produk | Mitra';
		$this->load->view('template',$var);			
	}

	public function Order()
	{
		$var['header'] = 'user/main_view/mitra/header_mitra';
		$var['konten'] = 'user/view/mitra/page/transaksi';
		$var['footer'] = 'user/main_view/mitra/footer_mitra';
		$var['judul']  = 'Transaksi | Mitra';
		$this->load->view('template',$var);			
	}

	public function Info()
	{
		$var['header'] = 'user/main_view/mitra/header_mitra';
		$var['konten'] = 'user/view/mitra/page/info';
		$var['footer'] = 'user/main_view/mitra/footer_mitra';
		$var['judul']  = 'Info | Mitra';
		$this->load->view('template',$var);			
	}

}