<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_Siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$JENIS_USER		= $this->session->userdata('JENIS_USER');
		$STATUS_USER	= $this->session->userdata('STATUS_USER');
		if ($JENIS_USER != 'siswa') {
			redirect(base_url());
		}
		if ($STATUS_USER == 'offline') {
			redirect('Status_akun');
		}
	}
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
	public function Notifikasi()
	{
		$var['header'] = 'user/main_view/siswa/header_siswa';
		$var['konten'] = 'user/view/siswa/page/Notifikasi';
		$var['footer'] = 'user/main_view/siswa/footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Detail_notifikasi()
	{
		$notif = $this->uri->segment(3);
		$var['header'] = 'user/main_view/siswa/sub_header_siswa';
		$var['konten'] = 'user/view/notifikasi/'.$notif;
		$var['footer'] = 'user/main_view/siswa/sub_footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);	
	}
	public function Detail_profile()
	{
		$var['header'] = 'user/main_view/siswa/sub_header_siswa';
		$var['konten'] = 'user/view/siswa/page/Detail_profile';
		$var['footer'] = 'user/main_view/siswa/sub_footer_siswa';
		$var['judul']  = 'TENTANG';
		$this->load->view('template',$var);	
	}
	public function saldo()
	{
		$ID_USER 	= $this->session->userdata('ID_USER');
		$where 		= array('ID_USER'=> $ID_USER);
		$get_data_siswa = $this->M_siswa->some($where)->row();
		if ($get_data_siswa) {
			$where_id  = array('ID_SISWA'=>$get_data_siswa->ID_SISWA);
			$get_saldo = $this->M_saldo_dana_siswa->saldo($where_id)->result();
			echo json_encode($get_saldo);
		}
	}
	public function get_data_all()
	{
		$ID_USER = $this->session->userdata('ID_USER');
		$where   = array('ID_USER'=>$ID_USER);
		$get 	 = $this->M_siswa->some($where)->result();
		echo json_encode($get);
	}
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

}

/* End of file UANGSAKU_Siswa.php */
/* Location: ./application/controllers/UANGSAKU_Siswa.php */