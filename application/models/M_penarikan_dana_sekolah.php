<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penarikan_dana_sekolah extends CI_Model {
	public $table = 'penarikan_dana_sekolah';
	public $pk    = 'ID_PENARIKAN_DANA_SEKOLAH';
	
	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
	}
	public function ins($data)
	{
		return $this->db->insert($this->table,$data);
	}
	public function del($where)
	{
		$this->db->where($where);
		return $this->db->delete($this->table);
	}
	public function upd($where,$data)
	{
		$this->db->where($where);
		return $this->db->update($this->table,$data);
	}

}

/* End of file M_penarikan_dana_sekolah.php */
/* Location: ./application/models/M_penarikan_dana_sekolah.php */