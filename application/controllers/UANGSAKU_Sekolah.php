<?php 

class UANGSAKU_Sekolah extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$JENIS_USER		= $this->session->userdata('JENIS_USER');
		$STATUS_USER	= $this->session->userdata('STATUS_USER');
		if ($JENIS_USER != 'sekolah') {
			redirect(base_url());
		}
		if ($STATUS_USER == 'offline') {
			redirect('Status_akun');
		}
	}
	
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
		$ID_USER	   = $this->session->userdata('ID_USER');
		$where_sekolah = array('ID_USER'=>$ID_USER);
		$get           = $this->M_sekolah->some($where_sekolah)->row();
		$where         = array('ID_SEKOLAH'=>$get->ID_SEKOLAH);
	    $var['jml']	   = $this->M_jenis_pembiayaan->some($where)->num_rows();
		$var['data']   = $this->M_jenis_pembiayaan->some($where)->result();

		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/data_pembiayaan';
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
		$ID_USER = $this->session->userdata('ID_USER');
		$where_rekening 	= array('ID_USER'=>$ID_USER);
		$var['rekening']    = $this->M_rekening->some($where_rekening)->result();

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
		$ID_JENIS_PEMBIAYAAN= $this->input->get('id');
		$where_pembiayaan 	= array('ID_JENIS_PEMBIAYAAN'=>$ID_JENIS_PEMBIAYAAN);
		$var['jml']   		= $this->M_pembiayaan->some($where_pembiayaan)->num_rows();
		$var['data_jenis_pembiayaan'] = $this->M_jenis_pembiayaan->some($where_pembiayaan)->result();
		$var['data']   		= $this->M_pembiayaan->some($where_pembiayaan)->result();
		$var['pendapatan']  = $this->M_pembiayaan->sum($where_pembiayaan)->result();

		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/informasi_pembiayaan_siswa';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'DETAIL JENIS PEMBIAYAAN';
		$this->load->view('template',$var);		
	}
	public function data_verifikasi_siswa()
	{
		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/verifikasi_akun_siswa';
		$var['footer'] = 'user/main_view/sekolah/footer_sekolah';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function Tarik_dana()
	{
		$ID_USER 	   = $this->session->userdata('ID_USER');
		$where_sekolah = array('ID_USER'=>$ID_USER);
		$get_sekolah   = $this->M_sekolah->some($where_sekolah)->row();
		$where_penarikan = array('ID_SEKOLAH'=>$get_sekolah->ID_SEKOLAH);
		$var['data']   = $this->M_penarikan_dana_sekolah->some($where_penarikan)->result();
		$var['jml']    = $this->M_penarikan_dana_sekolah->some($where_penarikan)->num_rows();

		$var['header'] = 'user/main_view/sekolah/header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/Tarik_dana';
		$var['footer'] = 'user/main_view/sekolah/footer_sekolah';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);	
	}
	public function Edit_siswa($id)
	{
		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/edit_data_siswa';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'EDIT DATA SISWA';
		$where = array('ID_SISWA'=>$id);
		$var['data']   = $this->M_siswa->some($where)->result();
		$this->load->view('template',$var);	
	}

	public function Tambah_data_siswa()
	{
		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/tambah_data_siswa';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'TAMBAH DATA SISWA';
		$this->load->view('template',$var);	
	}
	public function Detail_profile()
	{
		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/Detail_profile';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'Tentang';
		$this->load->view('template',$var);	
	}
	public function Kaitkan_rekening()
	{
		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/kaitkan_rekening';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'Kaitkan Rekening';
		$this->load->view('template',$var);	
	}
	public function Edit_rekening()
	{
		$ID_USER = $this->session->userdata('ID_USER');
		$where_rekening = array('ID_USER'=>$ID_USER);
		$var['rekening'] = $this->M_rekening->some($where_rekening)->result();
		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/edit_rekening';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'EDIT REKENING';
		$this->load->view('template',$var);	
	}
	public function proses_tambah_data_rekening()
	{
		$NAMA_BANK 		= $this->input->post('nama_bank');
		$NAMA_REKENING 	= $this->input->post('nama_rekening');
		$NO_REKENING 	= $this->input->post('no_rekening');
		$CABANG      	= $this->input->post('cabang');

		$ID_USER		= $this->session->userdata('ID_USER');
		$data = array(
			'ID_USER'		=> $ID_USER,
			'NAMA_BANK'		=> $NAMA_BANK,
			'NAMA_REKENING'	=> $NAMA_REKENING,
			'NO_REKENING'	=> $NO_REKENING,
			'CABANG'		=> $CABANG
		);
		$ins = $this->M_rekening->ins($data);
		if ($ins) {
			echo 1;
		}else{
			echo 2;
		}
	}
	public function proses_edit_data_rekening()
	{
		$NAMA_BANK 		= $this->input->post('nama_bank');
		$NAMA_REKENING 	= $this->input->post('nama_rekening');
		$NO_REKENING 	= $this->input->post('no_rekening');
		$CABANG      	= $this->input->post('cabang');

		$ID_USER		= $this->session->userdata('ID_USER');
		$data = array(
			'ID_USER'		=> $ID_USER,
			'NAMA_BANK'		=> $NAMA_BANK,
			'NAMA_REKENING'	=> $NAMA_REKENING,
			'NO_REKENING'	=> $NO_REKENING,
			'CABANG'		=> $CABANG
		);
		$where_rekening = array('ID_USER'=>$ID_USER);
		$upd = $this->M_rekening->upd($where_rekening,$data);
		if ($upd) {
			echo 1;
		}else{
			echo 2;
		}
	}
	public function edit_pembiayaan()
	{
		$ID_JENIS_PEMBIAYAAN	   	= $this->input->get('id');
		$where_jenis_pembiayaan 	= array('ID_JENIS_PEMBIAYAAN'=>$ID_JENIS_PEMBIAYAAN);
		$var['data']   = $this->M_jenis_pembiayaan->some($where_jenis_pembiayaan)->result();

		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/edit_data_pembiayaan';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$var['judul']  = 'EDIT JENIS PEMBIAYAAN';
		$this->load->view('template',$var);			
	}
	public function saldo()
	{
		$ID_USER 	= $this->session->userdata('ID_USER');
		$where 		= array('ID_USER'=>$ID_USER);
		$get_id_sekolah = $this->M_sekolah->some($where)->row();
		if ($get_id_sekolah) {
			$where_id = array('ID_SEKOLAH' => $get_id_sekolah->ID_SEKOLAH);
			$get_saldo = $this->M_saldo_dana_sekolah->saldo($where_id)->result();
			echo json_encode($get_saldo);
		}
	}
	public function ubah_logo()
	{
		$USERNAME = $this->session->userdata('USERNAME');
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("d-M-Y,H-i-s");
		$config['upload_path']   = './assets/img/user/sekolah/logo-profile/';
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
			$get_sekolah = $this->M_sekolah->some($where)->row();
			if ($get_sekolah->LOGO != 'default.png') {
				unlink('./assets/img/user/sekolah/logo-profile/'.$get_sekolah->LOGO);
			}
			$data_update = array('LOGO'=>$data['file_name']);
			$upd = $this->M_sekolah->upd($where,$data_update);
			if($upd){
				echo 1;
			}else{
				echo 2;
			}	
		}
	}
	public function get_data_rekening()
	{
		$ID_USER	= $this->session->userdata('ID_USER');
		$where 		= array('ID_USER'=>$ID_USER);
		$get_rekening = $this->M_rekening->some($where)->result();
		echo json_encode($get_rekening);
	}
	public function get_data_all()
	{
		$ID_USER	= $this->session->userdata('ID_USER');
		$where = array('ID_USER'=>$ID_USER);
		$get = $this->M_sekolah->some($where)->result();
		echo json_encode($get);
	}
	public function get_data_siswa()
	{
		$ID_USER	= $this->session->userdata('ID_USER');
		$where = array('ID_USER'=>$ID_USER);
		$get = $this->M_sekolah->some($where)->row();
		if ($get) {
			$where = array('NPSN'=>$get->NPSN);
			$get_data_siswa = $this->M_siswa->some($where)->result();
			echo json_encode($get_data_siswa);
		}
	}
	public function get_data_verifikasi_siswa($value='')
	{
		$ID_USER	= $this->session->userdata('ID_USER');
		$where = array('ID_USER'=>$ID_USER);
		$get = $this->M_sekolah->some($where)->row();
		if ($get) {
			$where = array('NPSN'=>$get->NPSN);
			$get_data_siswa = $this->M_siswa->join_verifikasi()->result();
			echo json_encode($get_data_siswa);
		}
	}
	public function get_data_jenis_pembiayaan()
	{
		$ID_USER	   = $this->session->userdata('ID_USER');
		$where_sekolah = array('ID_USER'=>$ID_USER);
		$get           = $this->M_sekolah->some($where_sekolah)->row();
		$where         = array('ID_SEKOLAH'=>$get->ID_SEKOLAH);
		$data          = $this->M_jenis_pembiayaan->some($where)->result();
		echo json_encode($data);
	}
	public function proses_tambah_siswa()
	{
		$ID_USER = $this->session->userdata('ID_USER');
		$where = array('ID_USER'=>$ID_USER);
		$get = $this->M_sekolah->some($where)->row();

		$kelas = $this->input->post('kelas');
		$nisn = $this->input->post('nisn');
		$nama = $this->input->post('nama');

		$where_nisn = array('NPSN'=>$get->NPSN,'NISN'=>$nisn);
		$cek_nisn = $this->M_siswa->some($where_nisn)->num_rows();
		if ($cek_nisn == 1) {
			echo 1;
		}else{
			$data = array(
				'KELAS'	=> $kelas,
				'NISN'	=> $nisn,
				'NAMA'	=> $nama,
				'NPSN'	=> $get->NPSN,
				'ID_SEKOLAH'=> $get->ID_SEKOLAH
			);
			$ins = $this->M_siswa->ins($data);
			if ($ins == 1) {
				echo 3;
			}else{
				echo 2;
			}
		}
	}
	public function proses_edit_siswa()
	{
		$NISN  = $this->input->post('nisn');
		$NAMA  = $this->input->post('nama');
		$KELAS = $this->input->post('kelas');
		$ID_SISWA = $this->input->post('id');

		$where = array('ID_SISWA'=>$ID_SISWA);
		$data = array(
			'NISN'	=> $NISN,
			'NAMA'	=> $NAMA,
			'KELAS'	=> $KELAS
		);
		$upd = $this->M_siswa->upd($where,$data);
		if ($upd) {
			echo 1;
		}else{
			echo 2;
		}
	}
	public function Edit_profile()
	{
		$var['header'] = 'user/main_view/sekolah/sub_header_sekolah';
		$var['konten'] = 'user/view/sekolah/page/edit_profile';
		$var['footer'] = 'user/main_view/sekolah/sub_footer_sekolah';
		$where = array('ID_USER'=> $this->session->userdata('ID_USER'));
		$var['data']   = $this->M_sekolah->some($where)->result();
		$var['judul']  = 'EDIT PROFILE';
		$this->load->view('template',$var);	
	}
	public function proses_edit_profile()
	{
		$ALAMAT	   = $this->input->post('alamat');
		$data = array('ALAMAT'=>$ALAMAT);
		$ID_USER = $this->session->userdata('ID_USER');
		$where = array('ID_USER'=>$ID_USER);
		$upd = $this->M_sekolah->upd($where,$data);
		if ($upd) {
			echo 1;
		}else{
			echo 2;
		}
	}
	public function proses_tarik_dana()
	{
		$NOMINAL = $this->input->post('nominal');
		$ID_USER = $this->session->userdata('ID_USER');
		$where_rekening 	= array('ID_USER'=>$ID_USER);
		$cek_rekening = $this->M_rekening->some($where_rekening)->num_rows();
		if ($cek_rekening == 1) {
			$get_rekening = $this->M_rekening->some($where_rekening)->row();
			$get_sekolah  = $this->M_sekolah->some($where_rekening)->row();
			$where_sekolah = array('ID_SEKOLAH'=>$get_sekolah->ID_SEKOLAH);
			$cek_saldo    = $this->M_saldo_dana_sekolah->saldo($where_sekolah)->num_rows();
			if ($cek_saldo == 0) {
				$ID_SALDO_DANA_SEKOLAH = 0;
			}else{
				$get_saldo    = $this->M_saldo_dana_sekolah->saldo($where_rekening)->row();
				$ID_SALDO_DANA_SEKOLAH = $get_saldo->ID_SALDO_DANA_SEKOLAH;
			}
			$data_penarikan = array(
				'ID_SEKOLAH'			=> $get_sekolah->ID_SEKOLAH,
				'ID_SALDO_DANA_SEKOLAH'	=>$ID_SALDO_DANA_SEKOLAH,
				'ID_REKENING'			=> $get_rekening->ID_REKENING,
				'TOTAL_PENARIKAN_DANA_SEKOLAH'	=> $NOMINAL,
				'STATUS_PENARIKAN_DANA_SEKOLAH'	=>'110'
			);
			$ins = $this->M_penarikan_dana_sekolah->ins($data_penarikan);
			if ($ins) {
				echo 3;
			}else{
				echo 4;
			}
		}else{
			echo 1;
		}
	}
	public function aktifkan_pembiayaan()
	{
		$id 		= $this->input->post('id');
		$data_jenis_pembiayaan = array('STATUS_PEMBIAYAAN'=> 'online');
		$where_id 	= array('ID_JENIS_PEMBIAYAAN'=>$id);
		$upd = $this->M_jenis_pembiayaan->upd($where_id,$data_jenis_pembiayaan);
		if ($upd) {
			$data_pembiayaan = array('STATUS_TAGIHAN'=>'online');
			$upd_pembiayaan = $this->M_pembiayaan->upd($where_id,$data_pembiayaan);
			if ($upd_pembiayaan) {
				echo 1;
			}else{
				echo 2;
			}
		}
	}
	public function nonaktifkan_pembiayaan()
	{
		$id 		= $this->input->post('id');
		$data_jenis_pembiayaan = array('STATUS_PEMBIAYAAN'=> 'offline');
		$where_id 	= array('ID_JENIS_PEMBIAYAAN'=>$id);
		$upd = $this->M_jenis_pembiayaan->upd($where_id,$data_jenis_pembiayaan);
		if ($upd) {
			$data_pembiayaan = array('STATUS_TAGIHAN'=>'offline');
			$upd_pembiayaan = $this->M_pembiayaan->upd($where_id,$data_pembiayaan);
			if ($upd_pembiayaan) {
				echo 1;
			}else{
				echo 2;
			}
		}
	}
	public function hapus_pembiayaan()
	{
		$id = $this->input->post('id');
		$where_hapus = array('ID_JENIS_PEMBIAYAAN'=>$id);
		$del = $this->M_jenis_pembiayaan->del($where_hapus);
		if ($del) {
			$this->M_pembiayaan->del($where_hapus);
			echo 1;
		}else{
			echo 2;
		}
	}
	public function hapus_data_siswa()
	{
		$ID_SISWA = $this->input->post('id');
		$where = array('ID_SISWA'=>$ID_SISWA);
		$del = $this->M_siswa->del($where);
		if ($del) {
			echo 1;
		}else{
			echo 2;
		}
	}
	// public function cari_pembiayaan()
	// {
	// 	$Key 	= $this->input->post('key');
	// 	$id 	= $this->input->post('id');
	// 	$cari 	= $this->M_pembiayaan->cari($Key,$id)->result();
	// 	echo json_encode($cari);
	// }
	public function proses_tambah_data_pembiayaan()
	{
		$NAMA_PEMBIAYAAN = $this->input->post('nama');
		$BIAYA 			 = $this->input->post('biaya');
		$KELAS 			 = $this->input->post('kelas') ;
		$DESKRIPSI       = $this->input->post('deskripsi');

		$ID_USER = $this->session->userdata('ID_USER');
		$where_id = array('ID_USER'=>$ID_USER);
		$get = $this->M_sekolah->some($where_id)->row();

		$where_nama = array('NAMA_PEMBIAYAAN'=>$NAMA_PEMBIAYAAN, 'ID_SEKOLAH'=>$get->ID_SEKOLAH);
		$cek_nama = $this->M_jenis_pembiayaan->some($where_nama)->num_rows();

		if ($cek_nama == 1) {
			echo 1;	
		}else{
			$data = array(
				'ID_SEKOLAH'=>$get->ID_SEKOLAH,
				'NAMA_PEMBIAYAAN'=> $NAMA_PEMBIAYAAN,
				'BIAYA'=> $BIAYA,
				'DESKRIPSI'=> $DESKRIPSI,
				'JENIS_PEMBIAYAAN'=> $NAMA_PEMBIAYAAN,
				'STATUS_PEMBIAYAAN'=> 'offline'
			);
			$ins = $this->M_jenis_pembiayaan->ins($data);
			if ($ins) {
				$get_jenis_pembiayaan = $this->M_jenis_pembiayaan->some($where_nama)->row();
				if ($KELAS == 'ALL') {
					$where_siswa =array('NPSN'=>$get->NPSN);
				}else{
					$where_siswa =array(
						'NPSN'=>$get->NPSN,
						'KELAS'=>$KELAS
					);
				}
				$get_siswa = $this->M_siswa->some($where_siswa)->result();
				$jml = count($get_siswa);
				for ($i=0; $i < $jml; $i++) {
					date_default_timezone_set('Asia/jakarta');
					$tanggal = date('Y-m-d');
					$KODE_TAGIHAN = $this->kode_tagihan(8);
					$data_tagihan = array(
						'PRODUK'		=> $NAMA_PEMBIAYAAN,
						'KODE_TAGIHAN' 	=> $KODE_TAGIHAN,
						'ID_SISWA'	   	=> $get_siswa[$i]->ID_SISWA,
						'TGL_TAGIHAN'	=> $tanggal,
						'STATUS_BAYAR' 	=> 'belum_lunas',
						'TOTAL_TAGIHAN'	=> $get_jenis_pembiayaan->BIAYA
					);
					$ins_tagihan = $this->M_tagihan->ins($data_tagihan);
					if ($ins_tagihan) {

						$where_tagihan = array('KODE_TAGIHAN'=>$KODE_TAGIHAN);
						$get_tagihan = $this->M_tagihan->some($where_tagihan)->row();
						$data_pembiayaan = array(
							'ID_JENIS_PEMBIAYAAN' => $get_jenis_pembiayaan->ID_JENIS_PEMBIAYAAN,
							'ID_SISWA'            => $get_siswa[$i]->ID_SISWA,
							'NISN'				  => $get_siswa[$i]->NISN,
							'NAMA_SISWA'		  => $get_siswa[$i]->NAMA,
							'KELAS_SISWA'		  => $get_siswa[$i]->KELAS,
							'TGL_PEMBIAYAAN'      => $tanggal,
							'TOTAL_BIAYA'         => $get_jenis_pembiayaan->BIAYA,
							'STATUS_TAGIHAN'	  => 'offline',
							'ID_TAGIHAN'          => $get_tagihan->ID_TAGIHAN
						);
						$ins = $this->M_pembiayaan->ins($data_pembiayaan);	
					}
				}
				echo 3;
			}else{
				$del = $this->M_jenis_pembiayaan->del($where_nama);
				echo 2;
			}
		}
	}
	public function proses_edit_data_pembiayaan()
	{
		$NAMA_PEMBIAYAAN = $this->input->post('nama');
		$BIAYA 			 = $this->input->post('biaya');
		$ID_JENIS_PEMBIAYAAN = $this->input->post('id') ;
		$DESKRIPSI       = $this->input->post('deskripsi');	

		$data_jenis_pembiayaan = array(
			'NAMA_PEMBIAYAAN'	=> $NAMA_PEMBIAYAAN,
			'BIAYA'				=> $BIAYA,
			'DESKRIPSI'			=> $DESKRIPSI
		);
		$where_id = array('ID_JENIS_PEMBIAYAAN'=>$ID_JENIS_PEMBIAYAAN);
		$upd = $this->M_jenis_pembiayaan->upd($where_id,$data_jenis_pembiayaan);
		if ($upd) {
			$data_pembiayaan = array(
				'TOTAL_BIAYA'	=> $BIAYA
			);	
			$upd_pembiayaan = $this->M_pembiayaan->upd($where_id,$data_pembiayaan);
			if ($upd_pembiayaan) {
				echo 1;
			}else{
				echo 2;
			}
		}
	}
	public function kode_tagihan($jml)
	{
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
	    $randomString = ''; 
	  
	    for ($i = 0; $i < $jml; $i++) { 
	        $index = rand(0, strlen($characters) - 1); 
	        $randomString .= $characters[$index]; 
	    } 
	  
	    return $randomString; 
	}
	public function proses_verifikasi()
	{
		$ID_USER = $this->input->post('id');
		$where = array('ID_USER'=>$ID_USER);
		$data = array('STATUS_USER'=>'online');
		$upd = $this->M_user->upd($where,$data);
		if ($upd == 1) {
			echo 1;
		}else{
			echo 2;
		}
	}
	public function proses_not_verifikasi()
	{
		$ID_USER = $this->input->post('id');
		$where = array('ID_USER'=>$ID_USER);
		$data = array('STATUS_USER'=>'offline');
		$upd = $this->M_user->upd($where,$data);
		if ($upd == 1) {
			echo 1;
		}else{
			echo 2;
		}
	}
	public function cari_siswa()
	{
		$key = $this->input->post('key');
		$get = $this->M_siswa->search($key)->result();
		echo json_encode($get);
	}
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}