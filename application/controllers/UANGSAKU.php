<?php

class UANGSAKU extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$STATUS_USER 	= $this->session->userdata('STATUS_USER');
		$STATUS_EMAIL	= $this->session->userdata('STATUS_EMAIL');
		$JENIS_USER		= $this->session->userdata('JENIS_USER');
		if ($STATUS_EMAIL != null) {
			if ($STATUS_EMAIL == 'offline') {
				redirect('konfirmasi_email');
			}else{
				if ($JENIS_USER == 'sekolah') {
					redirect('SEKOLAH');
				}elseif ($JENIS_USER == 'siswa') {
					redirect('SISWA');
				}elseif ($JENIS_USER == 'orangtua') {
					redirect('ORANGTUA');
				}elseif ($JENIS_USER == 'mitra') {
					redirect('MITRA');
				}	
			}
		}
	}
	public function index()
	{
		$var['header']	= 'user/main_view/header_landing_page';
		$var['konten']	= 'user/view/landing_page';
		$var['footer']	= 'user/main_view/footer_landing_page';
		$var['judul']   = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function login()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/login';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Masuk';
		$this->load->view('template',$var);		
	}
	public function pra_daftar()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/two';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}

	// daftar sekolah
	public function daftar_sekolah()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/sekolah/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function proses_daftar_sekolah()
	{
		$nama  = $this->input->post('nama');
		$npsn  = $this->input->post('npsn');
		$email = $this->input->post('email');
		$pass  = $this->input->post('pass');

		$data_cek_email = array('EMAIL' => $email );
		$cek_email = $this->M_user->some($data_cek_email)->num_rows();
		if ($cek_email == 1) {
			echo 1;
		}else{
			$data_cek_npsn = array('NPSN' => $npsn);
			$cek_npsn      = $this->M_sekolah->some($data_cek_npsn)->num_rows();
			if ($cek_npsn == 1) {
				echo 2;
			}else{
				$kode = $this->kode_verifikasi(6);
				
				$data_ins_user = array(
					'JENIS_USER' 		=> 'sekolah',
					'EMAIL'				=> $email,
					'USERNAME'			=> $nama,
					'PASSWORD'			=> md5($pass),
					'STATUS_USER'		=> 'offline',
					'KODE_VERIFIKASI'	=> $kode,
					'STATUS_EMAIL'		=> 'offline'
				);
				$ins_user = $this->M_user->ins($data_ins_user);
				if ($ins_user == 1) {
					$data_get_user = array('EMAIL'	=> $email);
					$get_data_user = $this->M_user->some($data_get_user)->row();
					$data_ins_sekolah = array(
						'ID_USER'		=> $get_data_user->ID_USER,
						'NPSN'			=> $npsn,
						'EMAIL'			=> $get_data_user->EMAIL,
						'NAMA'			=> $get_data_user->USERNAME,
						'PASSWORD'		=> $get_data_user->PASSWORD
					);
					$ins_sekolah = $this->M_sekolah->ins($data_ins_sekolah);
					if ($ins_sekolah == 1) {
						$session = array(
							'ID_USER' 			=> $get_data_user->ID_USER,
							'KODE_VERIFIKASI'	=> $get_data_user->KODE_VERIFIKASI,
							'JENIS_USER'		=> $get_data_user->JENIS_USER,
							'STATUS_EMAIL'		=> $get_data_user->STATUS_EMAIL,
							'STATUS_USER'		=> $get_data_user->STATUS_USER,
							'EMAIL'				=> $get_data_user->EMAIL,
							'USERNAME'			=> $get_data_user->USERNAME
						);
						
						$this->session->set_userdata( $session );
						$this->kirim_email($get_data_user->EMAIL,$get_data_user->KODE_VERIFIKASI,$get_data_user->USERNAME);
						echo 4;
					}else{
						$del = $this->M_user->del($data_get_user);
						echo 5;
					}
				}else{
					echo 3;
				}
			}
		}
	}
	public function offline_sekolah()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/sekolah/offline';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'UANGSAKU';
		$this->load->view('template',$var);	
	}
	// daftar siswa
	public function daftar_siswa()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/siswa/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	// daftar mitra
	public function daftar_mitra()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/mitra/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	// daftar ortu
	public function daftar_orangtua()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/orangtua/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function kode_verifikasi($jml) { 
	    $characters = '0123456789'; 
	    $randomString = ''; 
	  
	    for ($i = 0; $i < $jml; $i++) { 
	        $index = rand(0, strlen($characters) - 1); 
	        $randomString .= $characters[$index]; 
	    } 
	  
	    return $randomString; 
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
		      $this->email->from('denijuli112@gmail.com','UANGSAKU');
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
	public function proses_masuk()
	{
		$EMAIL 		= $this->input->post('EMAIL');
		$PASSWORD 	= $this->input->post('PASS');

		$data = array(
			'EMAIL'		=>	$EMAIL,
			'PASSWORD'	=>  md5($PASSWORD)
		);
		$cek = $this->M_user->some($data)->num_rows();

		if ($cek == 1) {
			$get = $this->M_user->some($data)->row();
			$session = array(
				'ID_USER' 			=> $get->ID_USER,
				'KODE_VERIFIKASI'	=> $get->KODE_VERIFIKASI,
				'JENIS_USER'		=> $get->JENIS_USER,
				'STATUS_EMAIL'		=> $get->STATUS_EMAIL,
				'STATUS_USER'		=> $get->STATUS_USER,
				'EMAIL'				=> $get->EMAIL,
				'USERNAME'			=> $get->USERNAME
			);
						
			$this->session->set_userdata( $session );
			echo 1;
		}else{
			echo 2;
		}
	}
	public function konfirmasi_email()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/konfirmasi_email';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'KONFIRMASI EMAIL';
		$this->load->view('template',$var);	
	}
	public function del_session()
	{
		$this->session->sess_destroy();
	}
}