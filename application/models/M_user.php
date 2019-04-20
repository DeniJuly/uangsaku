<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public $table = 'user';
	public $pk    = 'ID_USER';

	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
	}
	public function cek_some($email,$nama)
	{
		$this->db->where('EMAIL',$email);
		$this->db->or_where('USERNAME',$nama);
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