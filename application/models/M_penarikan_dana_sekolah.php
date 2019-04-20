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
	public function join_rekening_seklolah()
	{
		$this->db->select('
			penarikan_dana_sekolah.*,rekening.NO_REKENING,sekolah.NAMA,sekolah.EMAIL
		');
		$this->db->join('rekening','penarikan_dana_sekolah.ID_REKENING = rekening.ID_REKENING');
		$this->db->join('sekolah','penarikan_dana_sekolah.ID_SEKOLAH = sekolah.ID_SEKOLAH');
		$this->db->from($this->table);
		return $this->db->get();
	}

}

/* End of file M_penarikan_dana_sekolah.php */
/* Location: ./application/models/M_penarikan_dana_sekolah.php */