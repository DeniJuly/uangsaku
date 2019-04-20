<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembiayaan extends CI_Model {
	public $table = 'pembiayaan';
	public $pk    = 'ID_PEMBIAYAAN';

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
	public function sum($where)
	{
		$this->db->select('sum(TOTAL_TERBAYAR) AS TOTAL_TERBAYAR');
		$this->db->from($this->table);
		$this->db->where($where);
		return $this->db->get();
	}
	// public function cari($key,$id)
	// {
	// 	$this->db->where('ID_JENIS_PEMBIAYAAN',$id);
	// 	$this->db->like('NISN',$key);
	// 	$this->db->or_like('NAMA_SISWA',$key);
	// 	$this->db->or_like('KELAS_SISWA',$key);
	// 	return $this->db->get($this->table);
	// }
	public function join_pembiayaan_pembayaran($where)
	{
		$this->db->select('
			pembiayaan.*, jenis_pembiayaan.NAMA_PEMBIAYAAN
		');
		$this->db->from($this->table);
		$this->db->join('jenis_pembiayaan','pembiayaan.ID_JENIS_PEMBIAYAAN = jenis_pembiayaan.ID_JENIS_PEMBIAYAAN');
		$this->db->where($where);
		$this->db->where('STATUS_TAGIHAN','online');
	    return $this->db->get();
	}
	public function join_pembiayaan_bayar($where)
	{
		$this->db->select('
			pembiayaan.*, jenis_pembiayaan.NAMA_PEMBIAYAAN, jenis_pembiayaan.DESKRIPSI
		');
		$this->db->from($this->table);
		$this->db->join('jenis_pembiayaan','pembiayaan.ID_JENIS_PEMBIAYAAN = jenis_pembiayaan.ID_JENIS_PEMBIAYAAN');
		// $this->db->join('saldo_dana_siswa','pembiayaan.ID_SISWA = saldo_dana_siswa.ID_SISWA');
		// $this->db->order_by('saldo_dana_siswa.TGL_SALDO_SISWA','DESC');
		$this->db->where($where);
		$this->db->limit(1);
		return $this->db->get();
	}
	

}

/* End of file M_pembiayaan.php */
/* Location: ./application/models/M_pembiayaan.php */