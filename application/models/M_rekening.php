<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekening extends CI_Model {
	public $table = 'rekening';
	public $pk    = 'ID_REKENNG';

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

/* End of file M_rekening.php */
/* Location: ./application/models/M_rekening.php */