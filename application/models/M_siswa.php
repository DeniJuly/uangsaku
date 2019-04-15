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
	public function del($where)
	{
		$this->db->where($where);
		return $this->db->delete($this->table);
	}
	public function join_verifikasi()
	{
		$this->db->select(
			'siswa.*,user.ID_USER AS ID_USER, user.STATUS_USER'
		);
		$this->db->join('user','siswa.ID_USER = user.ID_USER');
		$this->db->from('siswa');
		return $this->db->get();
	}
}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */