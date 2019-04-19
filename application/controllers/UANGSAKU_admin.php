<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$JENIS_USER = $this->session->userdata('JENIS_USER');
		if ($JENIS_USER != 'admin') {
			redirect(site_url('ADMIN/login'));
		}
	}

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
		$var['judul']  = 'sekolah | Admin';
		$this->load->view('template',$var);			
	}

	public function orangtua()
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
	public function get_data_sekolah()
	{
		$get = $this->M_sekolah->all_join_user()->result();
		echo json_encode($get);
	}
	public function aktifkan_sekolah()
	{
		$id = $this->input->post('id_user');
		$where = array('ID_USER' => $id);
		$data  = array('STATUS_USER' => 'online');
		$upd = $this->M_user->upd($where,$data);
		if ($upd == 1) {
			echo 1;
		}else{
			echo 2;
		}
	}
	public function nonaktifkan_sekolah()
	{
		$id = $this->input->post('id_user');
		$where = array('ID_USER' => $id);
		$data  = array('STATUS_USER' => 'offline');
		$upd = $this->M_user->upd($where,$data);
		if ($upd == 1) {
			echo 1;
		}else{
			echo 2;
		}
	}
	public function hapus_sekolah()
	{
		$id = $this->input->post('id_user');
		$where = array('ID_USER' => $id);
		$del = $this->M_user->del($where);
		if ($del == 1) {
			$del2 = $this->M_sekolah->del($where);
			if ($del2 == 1) {
				echo 1;
			}else{
				echo 2;
			}
		}
	}
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect(site_url('ADMIN/login'));
	}
}