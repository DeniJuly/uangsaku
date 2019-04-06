<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_Siswa extends CI_Controller {

	public function index()
	{
		$var['header'] = 'user/main_view/siswa/header_siswa';
		$var['konten'] = 'user/view/siswa/page/beranda';
		$var['footer'] = 'user/main_view/siswa/footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Profile()
	{
		$var['header'] = 'user/main_view/siswa/header_siswa';
		$var['konten'] = 'user/view/siswa/page/Profile';
		$var['footer'] = 'user/main_view/siswa/footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Beli()
	{
		$var['header'] = 'user/main_view/siswa/header_siswa';
		$var['konten'] = 'user/view/siswa/page/Beli';
		$var['footer'] = 'user/main_view/siswa/footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Pembayaran()
	{
		$var['header'] = 'user/main_view/siswa/header_siswa';
		$var['konten'] = 'user/view/siswa/page/Pembayaran';
		$var['footer'] = 'user/main_view/siswa/footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Bayar()
	{
		$var['header'] = 'user/main_view/siswa/sub_header_siswa';
		$var['konten'] = 'user/view/siswa/page/Bayar';
		$var['footer'] = 'user/main_view/siswa/sub_footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Riwayat()
	{
		$var['header'] = 'user/main_view/siswa/header_siswa';
		$var['konten'] = 'user/view/siswa/page/Riwayat';
		$var['footer'] = 'user/main_view/siswa/footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Detail_riwayat()
	{
		$var['header'] = 'user/main_view/siswa/sub_header_siswa';
		$var['konten'] = 'user/view/siswa/page/Detail_riwayat';
		$var['footer'] = 'user/main_view/siswa/sub_footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Tips()
	{
		$tips = $this->uri->segment(2);
		$var['header'] = 'user/main_view/siswa/sub_header_siswa';
		$var['konten'] = 'user/view/tips/tips_'.$tips;
		$var['footer'] = 'user/main_view/siswa/sub_footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}

}

/* End of file UANGSAKU_Siswa.php */
/* Location: ./application/controllers/UANGSAKU_Siswa.php */