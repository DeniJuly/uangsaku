<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_pembiayaan extends CI_Model {
	public $table = 'jenis_pembiayaan';
	public $pk 	  = 'id_jenis_pembiayaan';

	public function ins($data)
	{
		return $this->db->insert($this->table,$data);
	}
	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
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

/* End of file M_jenis_pembiayaan.php */
/* Location: ./application/models/M_jenis_pembiayaan.php */