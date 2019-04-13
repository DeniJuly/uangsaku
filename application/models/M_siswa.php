<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {
	public $table 	= 'siswa';
	public $pk		= 'ID_SISWA';
	
	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
	}
	public function ins($data)
	{
		return $this->db->insert($this->table,$data);
	}
	public function upd($where,$data)
	{
		$this->db->where($where);
		return $this->db->update($this->table,$data);
	}
}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */