<?php 

class UANGSAKU_Sekolah extends CI_controller
{
	
	public function index()
	{
		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/beranda';
		$var['footer'] = 'user/main_view/sekolah/footer_sekolah';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Pembayaran()
	{
		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/data_pembayaran';
		$var['footer'] = 'user/main_view/sekolah/footer_sekolah';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function siswa()
	{
		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/data_siswa';
		$var['footer'] = 'user/main_view/sekolah/footer_sekolah';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);	
	}
	public function profile()
	{
		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/profile';
		$var['footer'] = 'user/main_view/sekolah/footer_sekolah';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function notifikasi()
	{
		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/notifikasi';
		$var['footer'] = 'user/main_view/sekolah/footer_sekolah';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function tambah_data_pembiayaan()
	{
		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/tambah_data_pembiayaan';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'TAMBAH JENIS PEMBIAYAAN';
		$this->load->view('template',$var);		
	}
	public function detail_data_pembiayaan()
	{
		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/detail_data_pembiayaan';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'DETAIL JENIS PEMBIAYAAN';
		$this->load->view('template',$var);		
	}
	public function edit_data_pembiayaan()
	{
		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/edit_data_pembiayaan';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'DETAIL JENIS PEMBIAYAAN';
		$this->load->view('template',$var);		
	}
	public function informasi_pembiayaan_siswa()
	{
		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/informasi_pembiayaan_siswa';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'DETAIL JENIS PEMBIAYAAN';
		$this->load->view('template',$var);		
	}
}