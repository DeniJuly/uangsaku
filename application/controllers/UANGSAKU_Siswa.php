<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_Siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
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
		$ID_USER	   = $this->session->userdata('ID_USER');
		$where_siswa   = array('ID_USER'=>$ID_USER);
		$get           = $this->M_siswa->some($where_siswa)->row();
		$where         = array('ID_SISWA'=>$get->ID_SISWA);
		$var['data']   = $this->M_pembiayaan->join_pembiayaan_pembayaran($where)->result();

		$var['header'] = 'user/main_view/siswa/header_siswa';
		$var['konten'] = 'user/view/siswa/page/Pembayaran';
		$var['footer'] = 'user/main_view/siswa/footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Bayar()
	{	
		$ID_USER	   = $this->session->userdata('ID_USER');
		$where_siswa   = array('ID_USER'=>$ID_USER);
		$get           = $this->M_siswa->some($where_siswa)->row();
		$where         = array('pembiayaan.ID_SISWA'=>$get->ID_SISWA);
		$var['data']   = $this->M_pembiayaan->join_pembiayaan_bayar($where)->result();

		$var['header'] = 'user/main_view/siswa/sub_header_siswa';
		$var['konten'] = 'user/view/siswa/page/Bayar';
		$var['footer'] = 'user/main_view/siswa/sub_footer_siswa';
		$var['judul']  = 'PEMBAYARAN';
		$this->load->view('template',$var);
	}
	public function Riwayat()
	{
		$ID_USER	   = $this->session->userdata('ID_USER');
		$where_siswa   = array('ID_USER'=>$ID_USER);
		$get           = $this->M_siswa->some($where_siswa)->row();
		$where         = array('pembayaran.ID_SISWA'=>$get->ID_SISWA);
		$var['data']   = $this->M_pembayaran->join_pembayaran($where)->result();

		$var['header'] = 'user/main_view/siswa/header_siswa';
		$var['konten'] = 'user/view/siswa/page/Riwayat';
		$var['footer'] = 'user/main_view/siswa/footer_siswa';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Detail_riwayat()
	{
		$ID_PEMBAYARAN = $this->input->get('id');
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
	public function Edit_profile()
	{
		$var['header'] = 'user/main_view/siswa/sub_header_siswa';
		$var['konten'] = 'user/view/siswa/page/edit_profile';
		$var['footer'] = 'user/main_view/siswa/sub_footer_siswa';
		$where = array('ID_USER'=> $this->session->userdata('ID_USER'));
		$var['data']   = $this->M_siswa->some($where)->result();
		$var['judul']  = 'EDIT PROFILE';
		$this->load->view('template',$var);	
	}
	public function Bayar_paymant_point()
	{
		$ID_USER     = $this->session->userdata('ID_USER');
		$where_siswa = array('ID_USER' => $ID_USER );
		$get_siswa   = $this->M_siswa->some($where_siswa)->row();
		$ID_TAGIHAN = $this->input->get('id');
		$where = array(
			'ID_TAGIHAN' => $ID_TAGIHAN,
			'ID_SISWA'   => $get_siswa->ID_SISWA
		);
		$var['data']   = $this->M_tagihan->some($where)->result();
		$var['header'] = 'user/main_view/siswa/sub_header_siswa';
		$var['konten'] = 'user/view/siswa/page/Bayar_paymant_point';
		$var['footer'] = 'user/main_view/siswa/sub_footer_siswa';
		$var['judul']  = 'INFO PEMBAYARAN';
		$this->load->view('template',$var);	
	}
	public function Bayar_saldo()
	{
		$ID_USER	   = $this->session->userdata('ID_USER');
		$where_siswa   = array('ID_USER'=>$ID_USER);
		$get           = $this->M_siswa->some($where_siswa)->row();
		$where         = array('pembiayaan.ID_SISWA'=>$get->ID_SISWA);
		$var['data']   = $this->M_pembiayaan->join_pembiayaan_bayar($where)->result();

		$var['header'] = 'user/main_view/siswa/sub_header_siswa';
		$var['konten'] = 'user/view/siswa/page/Bayar_saldo';
		$var['footer'] = 'user/main_view/siswa/sub_footer_siswa';
		$var['judul']  = 'PEMBAYARAN';
		$this->load->view('template',$var);
	}
	public function Bayar_sukses()
	{
		$ID_PEMBAYARAN = $this->input->get('id_tagihan');
		$ID_JENIS_PEMBIAYAAN = $this->input->get('id_jenis_pembiayaan');

		$where_pembayaran = array('ID_PEMBAYARAN'=>$ID_PEMBAYARAN);
		$var['data']   = $this->M_pembayaran->some($where_pembayaran)->result();

		$where_pembiayaan = array('ID_JENIS_PEMBIAYAAN'=>$ID_JENIS_PEMBIAYAAN);
		$var['data_jenis_pembiayaan'] = $this->M_jenis_pembiayaan->some($where_pembiayaan)->result();
		$this->load->view('user/view/siswa/page/Bayar_sukses',$var);
	}
	public function proses_bayar_saldo()
	{	
		// get data siswa
		$ID_USER 	= $this->session->userdata('ID_USER');
		$where_siswa= array('ID_USER'=>$ID_USER);
		$get_siswa 	= $this->M_siswa->some($where_siswa)->row();
		// get data saldo siswa
		$where_saldo= array('ID_SISWA'=>$get_siswa->ID_SISWA);
		$get_saldo_siswa = $this->M_saldo_dana_siswa->saldo($where_saldo)->row();
		// get data kirim
		date_default_timezone_set('Asia/Jakarta');
		$TOTAL_PEMBAYARAN= $this->input->post('nomina');
		$ID_TAGIHAN		 = $this->input->post('id_tagihan');
		$NAMA_PEMBIAYAAN = $this->input->post('nama_pembiayaan');
		// get pembiayaan
		$where_pembiayaan= array('ID_TAGIHAN'=>$ID_TAGIHAN);
		$get_pembiayaan  = $this->M_pembiayaan->some($where_pembiayaan)->row();
		
		date_default_timezone_set('Asia/Jakarta');
		$TANGGAL_PEMBAYARAN 	= date('d-m-Y H:i');
		$METODE_PEMBAYARAN 		= 'saldo';
		$TANGGAL 				= date('d-m-Y');
		$NAMA 					= $get_siswa->NAMA.'-'.$TANGGAL;
		$NAMA_PEMBIAYAAN_BUKTI 	= $NAMA_PEMBIAYAAN;
		$bukti_bayar = $this->bukti_bayar_saldo($TANGGAL_PEMBAYARAN,$TOTAL_PEMBAYARAN,$METODE_PEMBAYARAN,$NAMA,$NAMA_PEMBIAYAAN_BUKTI);
		
		$data_pembayaran = array(
			'ID_TAGIHAN'		=>$ID_TAGIHAN,
			'ID_SISWA'			=>$get_siswa->ID_SISWA,
			'TOTAL_PEMBAYARAN'	=>$TOTAL_PEMBAYARAN,
			'METODE_PEMBAYARAN'	=>'saldo',
			'ID_PAYMENT_POINT'	=>0,
			'ID_SALDO_DANA_SISWA'=>$get_saldo_siswa->ID_SALDO_DANA_SISWA,
			'BUKTI_PEMBAYARAN'	=>$bukti_bayar
		);

		$ins_pembayaran = $this->M_pembayaran->ins($data_pembayaran);
		if ($ins_pembayaran) {
			// update saldo siswa
			$saldo = $get_saldo_siswa->TOTAL_SALDO_SISWA - $TOTAL_PEMBAYARAN;
			$data_saldo = array(
				'TOTAL_SALDO_SISWA' =>$saldo,
				'ID_SISWA'			=>$get_siswa->ID_SISWA
			);
			$upd_saldo = $this->M_saldo_dana_siswa->ins($data_saldo);
			// update total terbayar
			if ($get_pembiayaan->TOTAL_TERBAYAR==0) {
				$data_pembiayaan = array('TOTAL_TERBAYAR'=>$TOTAL_PEMBAYARAN);
			}else{
				$TOTAL_TERBAYAR = $get_pembiayaan->TOTAL_TERBAYAR+$TOTAL_PEMBAYARAN;
				$data_pembiayaan = array('TOTAL_TERBAYAR'=>$TOTAL_TERBAYAR);
			}
			$where_pembiayaan = array(
				'ID_SISWA'=>$get_siswa->ID_SISWA,
				'ID_TAGIHAN'=>$ID_TAGIHAN
			);
			$upd_pembiayaan = $this->M_pembiayaan->upd($where_pembiayaan,$data_pembiayaan);
			// insert saldo sekolah
			$where_sekolah = array('ID_SEKOLAH'=>$get_siswa->ID_SEKOLAH);
			$cek_saldo_sekolah = $this->M_saldo_dana_sekolah->saldo($where_sekolah)->num_rows();
			if ($cek_saldo_sekolah == 1) {
				$get_saldo_sekolah = $this->M_saldo_dana_sekolah->saldo($where_sekolah)->row();
				$SALDO_SEKOLAH = $get_saldo_sekolah->TOTAL_SALDO_SEKOLAH+$TOTAL_PEMBAYARAN;
				$data_saldo_sekolah = array(
					'ID_SEKOLAH'=>$get_siswa->ID_SEKOLAH,
					'TOTAL_SALDO_SEKOLAH'=>$SALDO_SEKOLAH
				);
			}else{
				$data_saldo_sekolah = array(
					'ID_SEKOLAH'=>$get_siswa->ID_SEKOLAH,
					'TOTAL_SALDO_SEKOLAH'=>$TOTAL_PEMBAYARAN
				);
			}
			$ins_saldo_sekolah = $this->M_saldo_dana_sekolah->ins($data_saldo_sekolah);
			
			// insert pendapatan sekolah
			$get_pembayaran = $this->M_pembayaran->some($data_pembayaran)->row();
			$data_pedapatan_sekolah = array(
				'ID_SEKOLAH'=> $get_siswa->ID_SEKOLAH,
				'ID_TAGIHAN'=> $ID_TAGIHAN,
				'ID_PEMBAYARAN'=>$get_pembayaran->ID_PEMBAYARAN,
				'TOTAL_PENDAPATAN_SEKOLAH'=> $TOTAL_PEMBAYARAN,
				'ID_SALDO_DANA_SEKOLAH'=>$get_saldo_sekolah->ID_SALDO_DANA_SEKOLAH
			);
			$ins_pendapatan_sekolah = $this->M_pendapatan_sekolah->ins($data_pedapatan_sekolah);
			$to = $this->session->userdata('EMAIL');
			$this->kirim_email_bukti($to,$TANGGAL_PEMBAYARAN,$TOTAL_PEMBAYARAN,$METODE_PEMBAYARAN,$NAMA,$NAMA_PEMBIAYAAN_BUKTI);
			$response = array(
				'STATUS'	=> 'sukses',
				'ID_PEMBAYARAN'=>$get_pembayaran->ID_PEMBAYARAN
			);	

			echo json_encode($response);
		}else{
			$response = array('STATUS'=>'gagal');
			echo json_encode($response);
		}
	}
	public function proses_edit_profile()
	{
		$TGL_LAHIR = $this->input->post('tgl_lahir');
		$ALAMAT	   = $this->input->post('alamat');
		$NO_TELP   = $this->input->post('no_telp');
		$NIK       = $this->input->post('nik');
		if ($ALAMAT != 'null') {
			$data = array(
				'TANGGAL_LAHIR' =>$TGL_LAHIR,
				'ALAMAT'		=>$ALAMAT,
				'NO_TELP'		=>$NO_TELP,
				'NIK'			=>$NIK
			);
		}elseif ($ALAMAT == 'null') {
			$data = array(
				'TANGGAL_LAHIR' =>$TGL_LAHIR,
				'NO_TELP'		=>$NO_TELP,
				'NIK'			=>$NIK
			);
		}
		$ID_USER = $this->session->userdata('ID_USER');
		$where = array('ID_USER'=>$ID_USER);
		$upd = $this->M_siswa->upd($where,$data);
		if ($upd) {
			echo 1;
		}else{
			echo 2;
		}
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
	public function get_data_pembiayaan()
	{
		$ID_USER	   = $this->session->userdata('ID_USER');
		$where_siswa   = array('ID_USER'=>$ID_USER);
		$get           = $this->M_siswa->some($where_siswa)->row();
		$where         = array('ID_SISWA'=>$get->ID_SISWA);
		$data          = $this->M_pembiayaan->some($where)->result();
		echo json_encode($data);
	}
	public function ubah_foto_profile()
	{
		$USERNAME = $this->session->userdata('USERNAME');
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("d-M-Y,H-i-s");
		$config['upload_path']   = './assets/img/user/siswa/foto-profile/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '10000';
		$config['file_name'] = $USERNAME.','.$tanggal;
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('FOTO')){
			echo 2;
		}
		else{
			$data =  $this->upload->data();
			$where = array('ID_USER'=>$this->session->userdata('ID_USER'));
			$get_data_siswa = $this->M_siswa->some($where)->row();
			if ($get_data_siswa->FOTO != 'default.png') {
				unlink('./assets/img/user/siswa/foto-profile/'.$get_data_siswa->FOTO);
			}
			$data_update = array('FOTO'=>$data['file_name']);
			$upd = $this->M_siswa->upd($where,$data_update);
			if($upd){
				echo 1;
			}else{
				echo 2;
			}	
		}
	}
	public function kirim_email_bukti($to,$TANGGAL_PEMBAYARAN,$TOTAL_PEMBAYARAN,$METODE_PEMBAYARAN,$NAMA,$NAMA_PEMBIAYAAN_BUKTI)
	{
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
		$message  = '<center>';
		$message .= '<div>';
		$message .= '<h1 style="font-family: arial;">Bukti Pembayaran UANGSAKU</h1>';
		$message .= '<img src="'.FCPATH.("assets/img/app/logo/logo_200.png").'" style="float:left; width:100px;  margin-left: 520px;">';
		$message .= 'TANGGAL : '.$TANGGAL_PEMBAYARAN.'<br>';
		$message .= 'TOTAL HARGA : Rp '.number_format($TOTAL_PEMBAYARAN).'<br>';
		$message .= 'PEMBAYARAN : '.$NAMA_PEMBIAYAAN_BUKTI.'<br>';
		$message .= 'Metode Pembayaran : '.$METODE_PEMBAYARAN.'</p>';
		$message .= '</div>';
		$message .= '<div>';
		$message .= '<p>Terima kasih telah melakukan pembayaran menggunakan aplikasi UANGSAKU. Terus gunakan aplikasi UANGSAKU untuk bayar kebutuhan sekolahmu, temukan dan nikmati kemudahan serta fitur menarik lainnya di aplikasi UANGSAKU.</p>';
		$message .= '</div>';
		$message .= '</center>';
		$this->email->subject('UANGSAKU | PEMBAYARAN');
		$this->email->message($message);
		$this->email->send();
	}
	public function bukti_bayar_saldo($TANGGAL_PEMBAYARAN,$TOTAL_PEMBAYARAN,$METODE_PEMBAYARAN,$NAMA,$NAMA_PEMBIAYAAN_BUKTI)
	{
		$pdf = new FPDF('p','mm','A4');
        $pdf->AddPage();

        $pdf->image(FCPATH.'assets/img/app/logo/logo.png',87,0,35,35);
        $pdf->SetLineWidth(1);
        $pdf->Line(10,36,200,36);
        $pdf->SetLineWidth(0);
        $pdf->Line(10,37,200,37);

        $pdf->SetFont('Arial','B','20', 'C');
        $pdf->Cell(0,68,'BUKTI TRANSAKSI PEMBAYARAN UANGSAKU',0,0,'C');
        $pdf->Ln();
        $pdf->SetFont('Arial','','12', 'FJ');
        $pdf->Cell(10);
        $pdf->Cell(0,5,'TANGGAL: '.$TANGGAL_PEMBAYARAN,0,1,'FJ');
        $pdf->Ln();
        $pdf->Cell(10);
        $pdf->Cell(20,5,'TOTAL HARGA : Rp '.number_format($TOTAL_PEMBAYARAN),0,1,'FJ');
        $pdf->Ln();
        $pdf->Cell(10);
        $pdf->Cell(200,5,'PEMBAYARAN : Rp '.$NAMA_PEMBIAYAAN_BUKTI,0,1,'FJ');
        $pdf->Ln();
        $pdf->Cell(10);
        $pdf->Cell(200,5,'METODE PEMBAYARAN : '.$METODE_PEMBAYARAN,0,1,'FJ');

        $pdf->SetFont('Arial','B','20', 'C');
        $pdf->Cell(0,90,'SIMPAN TANDA TERIMA INI SEBAGAI BUKTI TRANSAKSI',0,0,'C');
        $pdf->Ln();
        $pdf->Cell(0,-70,'TERIMA KASIH',0,0,'C');

        $pdf->output(FCPATH.'assets/img/user/siswa/bukti-bayar/'.$NAMA.'.pdf','F');
        return $NAMA.'.pdf';
	}
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

}

/* End of file UANGSAKU_Siswa.php */
/* Location: ./application/controllers/UANGSAKU_Siswa.php */