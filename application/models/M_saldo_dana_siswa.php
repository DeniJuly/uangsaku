<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_saldo_dana_siswa extends CI_Model {

	public $table = 'saldo_dana_siswa';
	public $pk 	  = 'ID_SALDO_DANA_SISWA';

	public function saldo($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
	}
	

}

/* End of file M_saldo_dana_siswa.php */
/* Location: ./application/models/M_saldo_dana_siswa.php */