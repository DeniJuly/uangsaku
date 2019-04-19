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
		$var['konten'] = 'user/view/sekolah/page/data_pembayaran';
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
				'STATUS_PEMBIAYAAN'=> 'online'
			);
			$ins = $this->M_jenis_pembiayaan->ins($data);
			if ($ins) {
				$get_jenis_pembiayaan = $this->M_jenis_pembiayaan->some($where_nama)->row();
				if ($KELAS == 'ALL') {
					$where_siswa =array('NPSN'=>$get->NPSN);
				}else{
					$where_siswa =array('NPSN'=>$get->NPSN,'KELAS'=>$KELAS);
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
							'TGL_PEMBIAYAAN'      => $tanggal,
							'TOTAL_BIAYA'         => $get_jenis_pembiayaan->BIAYA,
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