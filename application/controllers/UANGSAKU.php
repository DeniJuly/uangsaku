<?php

class UANGSAKU extends CI_controller
{
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
	public function konfirmasi_email_sekolah()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/sekolah/second_daftar';
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
					'PASSWORD'			=> $pass,
					'STATUS_LOGIN'		=> 'offline',
					'KODE_VERIFIKASI'	=> $kode
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
							'KODE_VERIFIKASI'	=> $get_data_user->KODE_VERIFIKASI
						);
						
						$this->session->set_userdata( $session );
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
	// daftar siswa
	public function daftar_siswa()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/siswa/first_daftar';
		$var['footer']	= 'user/main_view/footer';
		$var['judul']   = 'Daftar';
		$this->load->view('template',$var);	
	}
	public function konfirmasi_email_siswa()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/siswa/second_daftar';
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
	public function konfirmasi_email_mitra()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/mitra/second_daftar';
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
	public function konfirmasi_email_orangtua()
	{
		$var['header']	= 'user/main_view/header';
		$var['konten']	= 'user/view/orangtua/second_daftar';
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
}