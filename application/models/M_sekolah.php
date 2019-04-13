<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sekolah extends CI_Model {

	public $table = 'sekolah';
	public $pk    = 'ID_SEKOLAH';

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
	public function all()
	{
		return $this->db->get($this->table);
	}

}

/* End of file M_sekolah.php */
/* Location: ./application/models/M_sekolah.php */