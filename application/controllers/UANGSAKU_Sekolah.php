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
				'NPSN'	=> $get->NPSN
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
		$BIAYA 		= $this->input->post('biaya');
		$TGL_MULAI 	= $this->input->post('muali') ;
		$TGL_AKHIR  = $this->input->post('akhir');
		$DESKRIPSI_PEMBIAYAAN = $this->input->post('deskripsi');
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
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}