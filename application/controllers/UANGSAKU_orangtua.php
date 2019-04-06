<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_orangtua extends CI_Controller {

	// Page Orang Tua
	public function index()
	{
		$var['header']	= 'user/main_view/orangtua/header_orang_tua';
		$var['konten']	= 'user/view/orangtua/page/beranda';
		$var['footer']	= 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']   = 'UANGSAKU';
		$this->load->view('template',$var);	
	}
	public function profile()
	{
		$var['header'] = 'user/main_view/orangtua/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/profile';
		$var['footer'] = 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function History()
	{
		$var['header'] = 'user/main_view/orangtua/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/history';
		$var['footer'] = 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Bayar()
	{
		$var['header'] = 'user/main_view/orangtua/sub_header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/bayar';
		$var['footer'] = 'user/main_view/orangtua/sub_footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Beli()
	{
		$var['header'] = 'user/main_view/orangtua/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/beli';
		$var['footer'] = 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Anak()
	{
		$var['header'] = 'user/main_view/orangtua/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/Anak';
		$var['footer'] = 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function detail_history()
	{
		$var['header'] = 'user/main_view/orangtua/sub_header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/Detail_history';
		$var['footer'] = 'user/main_view/orangtua/sub_footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Tips()
	{
		$tips = $this->uri->segment(2);
		$var['header'] = 'user/main_view/orangtua/sub_header_orang_tua';
		$var['konten'] = 'user/view/tips/tips_'.$tips;
		$var['footer'] = 'user/main_view/orangtua/sub_footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Beli_beranda()
	{
		$tips = $this->uri->segment(2);
		$var['header'] = 'user/main_view/orangtua/sub_header_orang_tua';
		$var['konten'] = 'user/view/beli/beranda';
		$var['footer'] = 'user/main_view/orangtua/sub_footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Riwayat()
	{
		$tips = $this->uri->segment(2);
		$var['header'] = 'user/main_view/orangtua/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/Riwayat';
		$var['footer'] = 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}

}

/* End of file UANGSAKU_orangtua.php */
/* Location: ./application/controllers/UANGSAKU_orangtua.php */