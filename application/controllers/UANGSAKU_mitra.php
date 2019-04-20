<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UANGSAKU_mitra extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('JENIS_USER') != 'mitra') {
			redirect('UANGSAKU');
		}
	}
	public function index()
	{
		$var['header'] = 'user/main_view/mitra/header_mitra';
		$var['konten'] = 'user/view/mitra/page/beranda';
		$var['footer'] = 'user/main_view/mitra/footer_mitra';
		$var['judul']  = 'Beranda | Mitra';
		$this->load->view('template',$var);			
	}

	public function Profile()
	{
		$var['header'] = 'user/main_view/mitra/header_mitra';
		$var['konten'] = 'user/view/mitra/page/profile';
		$var['footer'] = 'user/main_view/mitra/footer_mitra';
		$var['judul']  = 'Profile | Mitra';
		$this->load->view('template',$var);			
	}

	public function produk()
	{
		$ID_USER	   = $this->session->userdata('ID_USER');
		$where_mitra   = array('ID_USER'=>$ID_USER);
		$get           = $this->M_mitra->some($where_mitra)->row();
		$where         = array('ID_MITRA'=>$get->ID_MITRA);
	    $var['jml']	   = $this->M_produk->some($where)->num_rows();
		$var['data']   = $this->M_produk->some($where)->result();

		$var['header'] = 'user/main_view/mitra/header_mitra';
		$var['konten'] = 'user/view/mitra/page/data_produk';
		$var['footer'] = 'user/main_view/mitra/footer_mitra';
		$var['judul']  = 'Produk | Mitra';
		$this->load->view('template',$var);			
	}

	public function Order()
	{
		$var['header'] = 'user/main_view/mitra/header_mitra';
		$var['konten'] = 'user/view/mitra/page/transaksi';
		$var['footer'] = 'user/main_view/mitra/footer_mitra';
		$var['judul']  = 'Transaksi | Mitra';
		$this->load->view('template',$var);			
	}

	public function Info()
	{
		$var['header'] = 'user/main_view/mitra/header_mitra';
		$var['konten'] = 'user/view/mitra/page/info';
		$var['footer'] = 'user/main_view/mitra/footer_mitra';
		$var['judul']  = 'Info | Mitra';
		$this->load->view('template',$var);			
	}
	public function tambah_data_produk()
	{
		$var['header'] = 'user/main_view/mitra/sub_header_mitra';
		$var['konten'] = 'user/view/mitra/page/tambah_data_produk';
		$var['footer'] = 'user/main_view/mitra/sub_footer_mitra';
		$var['judul']  = 'UANGSAKU';
		$this->load->view('template',$var);
	}
	public function proses_tambah_data_produk()
	{
		$NAMA_PRODUK 			= $this->input->post('NAMA');
		$STOK        			= $this->input->post('STOK');
		$HARGA       			= $this->input->post('HARGA');
		$DESKRIPSI_PRODUK       = $this->input->post('DESKRIPSI');

		$where_produk = array('NAMA_PRODUK'=>$NAMA_PRODUK);
		$get_produk = $this->M_produk->some($where_produk)->num_rows();
		if ($get_produk == 1) {
			echo 5;
		}else{
			if ($NAMA_PRODUK == '' || $STOK == '' || $HARGA == '' || $DESKRIPSI_PRODUK == '') {
				echo 1;
			}else{
				$kode = $this->kode_produk(5);
				date_default_timezone_set('Asia/Jakarta');
				$tanggal = date('d-m-y');
				$config['upload_path']   = './assets/img/user/mitra/produk/';
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['file_name']	 = $NAMA_PRODUK.'_'.$tanggal;
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('FOTO')){
					echo 4;
				}else{
					$ID_USER	   = $this->session->userdata('ID_USER');
					$where_mitra   = array('ID_USER'=>$ID_USER);
					$get_mitra     = $this->M_mitra->some($where_mitra)->row();
					$d =  $this->upload->data();
					$data_produk = array(
						'ID_MITRA' 		=> $get_mitra->ID_MITRA,
						'NAMA_PRODUK'	=> $NAMA_PRODUK,
						'HARGA_PRODUK'	=> $HARGA,
						'STOK'			=> $STOK,
						'FOTO'			=> $d['file_name'],
						'KODE'			=> $kode
					);
					$ins_produk = $this->M_produk->ins($data_produk);
					if ($ins_produk) {
						echo 3;
					}else{
						echo 2;
					}
				}
			}
		}
	}
	public function kode_produk($jml)
	{
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
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
		redirect(base_url());
	}

}