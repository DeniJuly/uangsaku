<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_orangtua extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('JENIS_USER') != 'orang_tua') {
			redirect('UANGSAKU');
		}
	}
	// Page Orang Tua
	public function index()
	{
		$var['header']	= 'user/main_view/orangtua/header_orang_tua';
		$var['konten']	= 'user/view/orangtua/page/beranda';
		$var['footer']	= 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']   = 'UANGSAKU';
		$this->load->view('template',$var);	
	}
	public function profile()
	{
		$var['header'] = 'user/main_view/orangtua/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/profile';
		$var['footer'] = 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function History()
	{
		$var['header'] = 'user/main_view/orangtua/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/history';
		$var['footer'] = 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Bayar()
	{
		$var['header'] = 'user/main_view/orangtua/sub_header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/bayar';
		$var['footer'] = 'user/main_view/orangtua/sub_footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Beli()
	{
		$var['header'] = 'user/main_view/orangtua/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/beli';
		$var['footer'] = 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Anak()
	{
		$var['header'] = 'user/main_view/orangtua/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/Anak';
		$var['footer'] = 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function detail_history()
	{
		$var['header'] = 'user/main_view/orangtua/sub_header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/Detail_history';
		$var['footer'] = 'user/main_view/orangtua/sub_footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Tips()
	{
		$tips = $this->uri->segment(2);
		$var['header'] = 'user/main_view/orangtua/sub_header_orang_tua';
		$var['konten'] = 'user/view/tips/tips_'.$tips;
		$var['footer'] = 'user/main_view/orangtua/sub_footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Beli_beranda()
	{
		$tips = $this->uri->segment(2);
		$var['header'] = 'user/main_view/orangtua/sub_header_orang_tua';
		$var['konten'] = 'user/view/beli/beranda';
		$var['footer'] = 'user/main_view/orangtua/sub_footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Riwayat()
	{
		$tips = $this->uri->segment(2);
		$var['header'] = 'user/main_view/orangtua/header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/Riwayat';
		$var['footer'] = 'user/main_view/orangtua/footer_orang_tua';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);		
	}
	public function Detail_profile()
	{
		$var['header'] = 'user/main_view/orangtua/sub_header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/Detail_profile';
		$var['footer'] = 'user/main_view/orangtua/sub_footer_orang_tua';
		$var['judul']  = 'TENTANG';
		$this->load->view('template',$var);		
	}
	public function Edit_profile()
	{
		$var['header'] = 'user/main_view/orangtua/sub_header_orang_tua';
		$var['konten'] = 'user/view/orangtua/page/edit_profile';
		$var['footer'] = 'user/main_view/orangtua/sub_footer_orang_tua';
		$where = array('ID_USER'=> $this->session->userdata('ID_USER'));
		$var['data']   = $this->M_orangtua->some($where)->result();
		$var['judul']  = 'EDIT PROFILE';
		$this->load->view('template',$var);	
	}
	public function proses_kaitkan_akun_anak()
	{
		$PARENT_CODE = $this->input->post('parent');
		$where_parent = array('PARENT_CODE'=>$PARENT_CODE);
		$cek_siswa = $this->M_siswa->some($where_parent)->num_rows();
		if ($cek_siswa == 1) {
			$get_siswa = $this->M_siswa->some($where_parent)->row();
			$data_orang = array(
				'ID_SISWA'=>$get_siswa->ID_SISWA
			);
			$ID_USER = $this->session->userdata('ID_USER');
			$where_orang = array('ID_USER'=>$ID_USER);
			$upd = $this->M_orangtua->upd($where_orang,$data_orang);
			if ($upd) {
				echo 2;
			}else{
				echo 3;
			}
		}else{
			echo 1;
		}
	}
	public function get_data()
	{
		$ID_USER	= $this->session->userdata('ID_USER');
		$where = array('ID_USER'=>$ID_USER);
		$get = $this->M_orangtua->some($where)->result();
		echo json_encode($get);
	}
	public function show_pemmbayaran()
	{
		$this->db->get('pembayaran')->result();
		
	}
	public function saldo()
	{
		$ID_USER 	= $this->session->userdata('ID_USER');
		$where 		= array('ID_USER'=> $ID_USER);
		$get_data_orangtua = $this->M_orangtua->some($where)->row();
		if ($get_data_orangtua) {
			$where_id  = array('ID_SISWA'=>$get_data_orangtua->ID_SISWA);
			$get_saldo = $this->M_saldo_dana_siswa->saldo($where_id)->result();
			echo json_encode($get_saldo);
		}
	}
	public function ubah_foto_profile()
	{
		$USERNAME = $this->session->userdata('USERNAME');
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("d-M-Y,H-i-s");
		$config['upload_path']   = './assets/img/user/orangtua/foto-profile/';
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
			$get_data_siswa = $this->M_orangtua->some($where)->row();
			if ($get_data_siswa->FOTO != 'default.png') {
				unlink('./assets/img/user/orangtua/foto-profile/'.$get_data_siswa->FOTO);
			}
			$data_update = array('FOTO'=>$data['file_name']);
			$upd = $this->M_orangtua->upd($where,$data_update);
			if($upd){
				echo 1;
			}else{
				echo 2;
			}	
		}
	}
	public function proses_edit_profile()
	{
		$TGL_LAHIR = $this->input->post('tgl_lahir');
		$ALAMAT	   = $this->input->post('alamat');
		$NO_TELP   = $this->input->post('no_telp');
		$NIK       = $this->input->post('nik');
		$JENIS_KELAMIN = $this->input->post('jenis_kelamin');
		if ($ALAMAT != 'null') {
			$data = array(
				'JENIS_KELAMIN' =>$JENIS_KELAMIN,
				'TANGGAL_LAHIR' =>$TGL_LAHIR,
				'ALAMAT'		=>$ALAMAT,
				'NO_TELP'		=>$NO_TELP,
				'NIK_ORANG_TUA'	=>$NIK
			);
		}elseif ($ALAMAT == 'null') {
			$data = array(
				'JENIS_KELAMIN' =>$JENIS_KELAMIN,
				'TANGGAL_LAHIR' =>$TGL_LAHIR,
				'NO_TELP'		=>$NO_TELP,
				'NIK_ORANG_TUA' =>$NIK
			);
		}
		$ID_USER = $this->session->userdata('ID_USER');
		$where = array('ID_USER'=>$ID_USER);
		$upd = $this->M_orangtua->upd($where,$data);
		if ($upd) {
			echo 1;
		}else{
			echo 2;
		}
	}
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('UANGSAKU');
	}

}

/* End of file UANGSAKU_orangtua.php */
/* Location: ./application/controllers/UANGSAKU_orangtua.php */