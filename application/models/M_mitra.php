<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mitra extends CI_Model {

	public $table = 'mitra';
	public $pk    = 'ID_MITRA';

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