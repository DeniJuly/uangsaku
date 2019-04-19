<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_saldo_dana_sekolah extends CI_Model {

	public $table = 'saldo_dana_sekolah';
	public $pk 	  = 'ID_SALDO';

	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
	}
	public function saldo($where)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($where);
		$this->db->order_by('TGL_SALDO_SEKOLAH','DESC');
		$this->db->limit(1);
		return $this->db->get();
	}
	public function ins($data)
	{
		return $this->db->insert($this->table,$data);
	}

}

/* End of file M_saldo.php */
/* Location: ./application/models/M_saldo.php */