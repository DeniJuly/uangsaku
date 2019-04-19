<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_saldo_dana_siswa extends CI_Model {

	public $table = 'saldo_dana_siswa';
	public $pk 	  = 'ID_SALDO_DANA_SISWA';

	public function saldo($where)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($where);
		$this->db->order_by('TGL_SALDO_SISWA','DESC');
		$this->db->limit(1);
		return $this->db->get();
	}
	public function ins($data)
	{
		return $this->db->insert($this->table,$data);
	}
}

/* End of file M_saldo_dana_siswa.php */
/* Location: ./application/models/M_saldo_dana_siswa.php */