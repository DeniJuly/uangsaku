<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_email extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$STATUS_EMAIL	 = $this->session->userdata('STATUS_EMAIL');
		if($STATUS_EMAIL == null){
			redirect(base_url());
		}else{
			if ($STATUS_EMAIL == 'online') {
				redirect(base_url());
			}
		}
	}
	public function index()
	{
		$this->load->view('user/view/konfirmasi_email');	
	}
	public function proses_verifikasi_email()
	{
		$kode = $this->input->post('kode');
		$where = array(
			'KODE_VERIFIKASI' 	=> $kode,
			'ID_USER'			=> $this->session->userdata('ID_USER')
		);
		$cek = $this->M_user->some($where)->num_rows();
		if ($cek == 1) {
			$data_upd = array('STATUS_EMAIL' => 'online');
			$upd = $this->M_user->upd($where,$data_upd);
			if ($upd == 1) {
				$get = $this->M_user->some($where)->row();
				$session = array(
					'ID_USER' 			=> $get->ID_USER,
					'KODE_VERIFIKASI'	=> $get->KODE_VERIFIKASI,
					'JENIS_USER'		=> $get->JENIS_USER,
					'STATUS_EMAIL'		=> $get->STATUS_EMAIL,
					'STATUS_USER'		=> $get->STATUS_USER
				);
							
				$this->session->set_userdata( $session );
				echo 1;
			}else{
				echo 3;
			}
		}else{
			echo 2;
		}
	}
	public function kirim_email() {
		$to 	= $this->session->userdata('EMAIL');
		$kode   = $this->session->userdata('KODE_VERIFIKASI');
		$nama	= $this->session->userdata('USERNAME');
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
		      if ($this->email->send()) {
		      	echo 1;
		      }else{
		      	echo 2;
		      }

    }
    public function ubah_email()
    {
    	$EMAIL   		= $this->input->post('EMAIL');
    	$ID_USER 		= $this->session->userdata('ID_USER');
    	$KODE_VERIFIKASI= $this->kode_verifikasi(6);
    	$where 		= array('ID_USER'	=> $ID_USER);
    	$data 		= array(
    		'EMAIL'		=> $EMAIL,
    		'KODE_VERIFIKASI'	=>	$KODE_VERIFIKASI
    	);
    	$upd 		= $this->M_user->upd($where,$data);
    	if ($upd == 1) {
    		$data2	= array('EMAIL'	=> $EMAIL);
    		if ($this->session->userdata('JENIS_USER') == 'sekolah') {
    			$model	= 'M_sekolah';	
    		}elseif ($this->session->userdata('JENIS_USER') == 'siswa') {
    			$model	= 'M_siswa';	
    		}elseif ($this->session->userdata('JENIS_USER') == 'orangtua') {
    			$model	= 'M_orangtua';	
    		}elseif ($this->session->userdata('JENIS_USER') == 'mitra') {
    			$model	= 'M_mitra';	
    		}
    		$upd2	= $this->$model->upd($where,$data2);
    		if ($upd2 == 1) {
    			$get_data_user = $this->M_user->some($where)->row();
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
				$this->kirim_email();
    		}else{
    			$EMAIL_OLD 	= $this->session->userdata('EMAIL');
    			$KODE_VERIFIKASI = $this->session->userdata('KODE_VERIFIKASI');
    			$data_old	= array('EMAIL'	=> $EMAIL_OLD,'KODE_VERIFIKASI'	=> $KODE_VERIFIKASI);
    			$upd3		= $this->M_user->upd($where,$data_old);
    			echo 3;
    		}
    	}else{
    		echo 2;
    	}
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

/* End of file UANGSAKU_email.php */
/* Location: ./application/controllers/UANGSAKU_email.php */