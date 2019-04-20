<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_feedback');
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

	// public function siswa()
	// {
	// 	$var['header'] = 'admin/main_view/header_admin';
	// 	$var['konten'] = 'admin/view/siswa';
	// 	$var['footer'] = 'admin/main_view/footer_admin';
	// 	$var['judul']  = 'Siswa | Admin';
	// 	$this->load->view('template',$var);			
	// }
	public function payment_poin()
	{
		$var['header'] = 'admin/main_view/header_admin';
		$var['konten'] = 'admin/view/payment_poin';
		$var['footer'] = 'admin/main_view/footer_admin';
		$var['judul']  = 'PAYMENT POIN | Admin';
		$this->load->view('template',$var);			
	}

	public function siswa()
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
	public function get_data_payment_poin()
	{
		$get = $this->M_payment_poin->all_join_user()->result();
		echo json_encode($get);
	}
	public function get_data_orang_tua()
	{
		$get = $this->M_orangtua->all_join_user()->result();
		echo json_encode($get);
	}
	public function get_data_siswa()
	{
		$get = $this->M_siswa->all_join_user()->result();
		echo json_encode($get);
	}
	public function get_data_feedback()
	{
		$get = $this->M_feedback->all_join_user()->result();
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
	public function aktifkan_orang_tua()
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
	public function aktifkan_siswa()
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
	public function nonaktifkan_orang_tua()
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
	public function nonaktifkan_siswa()
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
	public function get_data()
	{
		$ID_ADMIN	= $this->session->userdata('ID_ADMIN');
		$where 		= array('ID_ADMIN'=>$ID_ADMIN);
		$get = $this->M_admin->some($where)->result();
		echo json_encode($get);
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
	public function hapus_orang_tua()
	{
		$id = $this->input->post('id_user');
		$where = array('ID_USER' => $id);
		$del = $this->M_user->del($where);
		if ($del == 1) {
			$del2 = $this->M_orangtua->del($where);
			if ($del2 == 1) {
				echo 1;
			}else{
				echo 2;
			}
		}
	}
	public function hapus_siswa()
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
	public function proses_tambah_payment_poin()
	{
		$NAMA     = $this->input->post('NAMA');
		$EMAIL    = $this->input->post('EMAIL');
		$ALAMAT   = $this->input->post('ALAMAT');
		$PASSWORD = $this->input->post('PASSWORD');

		$cek = $this->M_user->cek_some($EMAIL,$NAMA)->num_rows();
		if ($cek == 1) {
			echo 1;
		}else{
			$KODE = $this->Kode_verifikasi(6);
			$data_user = array(
				'JENIS_USER'=>'payment_poin',
				'EMAIL'		=> $EMAIL,
				'USERNAME'	=> $NAMA,
				'PASSWORD'	=> md5($PASSWORD),
				'STATUS_USER'=> 'online',
				'KODE_VERIFIKASI'=> $KODE,
				'STATUS_EMAIL'	=>'offline'
			);
			$ins_user = $this->M_user->ins($data_user);
			if ($ins_user) {
				$get_user = $this->M_user->some($data_user)->row();
				$data_payment_poin = array(
					'ID_USER'	=> $get_user->ID_USER,
					'NAMA'		=> $NAMA,
					'FOTO'		=> 'default.png',
					'ALAMAT'	=> $ALAMAT,
					'PASSWORD'	=> $PASSWORD
				);
				$ins_payment = $this->M_payment_poin->ins($data_payment_poin);
				if ($ins_payment) {
					$this->kirim_email($EMAIL,$KODE,$NAMA);
					echo 3;
				}
			}{
				$this->M_user->del($data_user);
				echo 2;
			}
		}
	}
	public function kirim_email($to,$kode,$nama) {
        $config = Array(
	         'protocol'  	=> 'smtp',
	         'smtp_host' 	=> 'ssl://smtp.gmail.com',
	         'smtp_port' 	=> 465,
	         'smtp_user' 	=> 'go.uangsaku.id@gmail.com', 
	         'smtp_pass' 	=> 'SMKBisa_Hebat01', 
	         'mailtype'  	=> 'html',
	         'charset'  	=> 'iso-8859-1',
	         'wordwrap'  	=> TRUE
      	);
		      $this->load->library('email', $config);
		      $this->email->set_newline("\r\n");
		      $this->email->from('go.uangsaku.id@gmail.com','UANGSAKU');
		      $this->email->to($to);

		      $message  = "<div style='width: 100%'>";
			  $message .= "<p>Hai ".$nama." </p>";
			  $message .= "<p>Selamat! Dengan satu langkah lagi akunmu akan aktif</p>";
			  $message .= "<p>masukan kode di bawah ini di halaman konfirmasi email</p>";
			  $message .= "<h1 style='margin-top: -71px;'>".$kode."</h1>";
			  $message .= "</div>";
		      $this->email->subject('UANGSAKU | VERIFIKASI EMAIL');
		      $this->email->message($message);
		      $this->email->send();
    }
	public function Kode_verifikasi($jml)
	{ 
	    $characters = '0123456789'; 
	    $randomString = ''; 
	  
	    for ($i = 0; $i < $jml; $i++) { 
	        $index = rand(0, strlen($characters) - 1); 
	        $randomString .= $characters[$index]; 
	    } 
	  
	    return $randomString; 
	}
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect(site_url('ADMIN/login'));
	}
}