<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route = array(
	'default_controller' 	=> 'UANGSAKU',
	'404_override'		 	=> '',
	'translate_uri_dashes' 	=> FALSE,

	// CONTROLLER UANGSAKU_offline
	'Status_akun'		=> 'UANGSAKU_offline',

	// CONTROLLER UANGSAKU
	'daftar_sekolah' 			=> 'UANGSAKU/daftar_sekolah',
	'daftar_siswa'				=> 'UANGSAKU/daftar_siswa',
	'daftar_orangtua'			=> 'UANGSAKU/daftar_orangtua',
	'daftar_mitra'				=> 'UANGSAKU/daftar_mitra',
	'Login'						=> 'UANGSAKU/login',
	'konfirmasi_email'			=> 'UANGSAKU_email',

	// CONTROLLER UANGSAKU_SEKOLAH
	'SEKOLAH'							=> 'UANGSAKU_Sekolah',
	'SEKOLAH/Siswa'						=> 'UANGSAKU_Sekolah/siswa',
	'SEKOLAH/Profile'					=> 'UANGSAKU_Sekolah/Profile',
	'SEKOLAH/Pembayaran'				=> 'UANGSAKU_Sekolah/Pembayaran',
	'SEKOLAH/Notifikasi'				=> 'UANGSAKU_Sekolah/Notifikasi',
	'SEKOLAH/tambah_data_pembiayaan'	=> 'UANGSAKU_Sekolah/tambah_data_pembiayaan',
	'SEKOLAH/detail_data_pembiayaan'	=> 'UANGSAKU_Sekolah/detail_data_pembiayaan',
	'SEKOLAH/edit_data_pembiayaan'		=> 'UANGSAKU_Sekolah/edit_data_pembiayaan',
	'SEKOLAH/informasi_pembiayaan_siswa'=> 'UANGSAKU_Sekolah/informasi_pembiayaan_siswa',
	'SEKOLAH/Keluar'					=> 'UANGSAKU_Sekolah/Keluar',
	'SEKOLAH/Verifikasi_siswa'			=> 'UANGSAKU_Sekolah/data_verifikasi_siswa',
	'SEKOLAH/edit_pembiayaan'			=> 'UANGSAKU_sekolah/edit_pembiayaan',
	'SEKOLAH/Tarik'						=> 'UANGSAKU_sekolah/Tarik_dana',
	'SEKOLAH/Tentang'					=> 'UANGSAKU_sekolah/Detail_profile',
	'SEKOLAH/Edit_profile'				=> 'UANGSAKU_sekolah/Edit_profile',
	'SEKOLAH/Kaitkan_rekening'			=> 'UANGSAKU_sekolah/Kaitkan_rekening',
	'SEKOLAH/Edit_rekening'				=> 'UANGSAKU_sekolah/Edit_rekening',

	// CONTROLLER ORANGTUA
	'ORANGTUA'					=> 'UANGSAKU_Orangtua',
	'ORANGTUA/Profile'			=> 'UANGSAKU_Orangtua/Profile',
	'ORANGTUA/Beli'				=> 'UANGSAKU_Orangtua/Beli',
	'ORANGTUA/Riwayat'			=> 'UANGSAKU_Orangtua/Riwayat',
	'ORANGTUA/Bayar'			=> 'UANGSAKU_Orangtua/Bayar',
	'ORANGTUA/Anak'				=> 'UANGSAKU_Orangtua/Anak',
	'ORANGTUA/Detail_history'	=> 'UANGSAKU_Orangtua/Detail_history',
	'ORANGTUA/Topup'			=> 'UANGSAKU_Orangtua/Tips',
	'ORANGTUA/Beli/Beranda'		=> 'UANGSAKU_Orangtua/Beli_beranda',
	'ORANGTUA/Tentang'			=> 'UANGSAKU_Orangtua/Detail_profile',
	'ORANGTUA/Edit_profile'		=> 'UANGSAKU_Orangtua/Edit_profile',

	// CONTROLLER SISWA
	'SISWA'							=> 'UANGSAKU_Siswa',
	'SISWA/Profile'					=> 'UANGSAKU_Siswa/Profile',
	'SISWA/Pembayaran'				=> 'UANGSAKU_Siswa/Pembayaran',
	'SISWA/Bayar'					=> 'UANGSAKU_Siswa/Bayar',
	'SISWA/Beli'					=> 'UANGSAKU_Siswa/Beli',
	'SISWA/cari_beli'				=> 'UANGSAKU_Siswa/cari_beli',
	'SISWA/Riwayat'					=> 'UANGSAKU_Siswa/Riwayat',
	'SISWA/Detail_riwayat'			=> 'UANGSAKU_Siswa/Detail_riwayat',
	'SISWA/Topup'					=> 'UANGSAKU_Siswa/Tips',
	'SISWA/Notifikasi'				=> 'UANGSAKU_Siswa/Notifikasi',
	'SISWA/Notifikasi/Pembayaran'	=> 'UANGSAKU_Siswa/Detail_notifikasi',
	'SISWA/Tentang'					=> 'UANGSAKU_Siswa/Detail_profile',
	'SISWA/Edit_profile'			=> 'UANGSAKU_Siswa/Edit_profile',
	'SISWA/Keluar'					=> 'UANGSAKU_Siswa/Keluar',
	'SISWA/Bayar/Paymant_poin'		=> 'UANGSAKU_Siswa/Bayar_paymant_point',
	'SISWA/Bayar/Saldo'				=> 'UANGSAKU_Siswa/Bayar_Saldo',
	'SISWA/Bayar_sukses'			=> 'UANGSAKU_Siswa/Bayar_sukses',

	// CONTROLLER MITRA
	'MITRA'						=> 'UANGSAKU_mitra',
	'MITRA/Profile'				=> 'UANGSAKU_mitra/Profile',
	'MITRA/Info'				=> 'UANGSAKU_mitra/Info',
	'MITRA/Order'				=> 'UANGSAKU_mitra/Order',
	'MITRA/tambah_data_produk'	=> 'UANGSAKU_mitra/tambah_data_produk',
	'MITRA/produk'				=> 'UANGSAKU_mitra/produk',

	// CONTROLLER ADMIN
	'ADMIN'					=> 'UANGSAKU_admin',
	'ADMIN/sekolah'			=> 'UANGSAKU_admin/sekolah',
	'ADMIN/orangtua'		=> 'UANGSAKU_admin/orangtua',
	'ADMIN/siswa'			=> 'UANGSAKU_admin/siswa',
	'ADMIN/payment_poin'	=> 'UANGSAKU_admin/payment_poin',

	// cCONTROLLER LOGIN ADMIN
	'ADMIN/login'		=> 'UANGSAKU_login_admin',
);

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/