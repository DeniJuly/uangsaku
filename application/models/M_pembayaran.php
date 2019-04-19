<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran extends CI_Model {
	public $table ='pembayaran';
	public $pk    ='ID_PEMBAYARAN';

	public function ins($data)
	{
		return $this->db->insert($this->table,$data);
	}
	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
	}
	public function join_pembayaran($where)
	{
		$this->db->select('
			pembayaran.*,tagihan.PRODUK
		');
		$this->db->from($this->table);
		$this->db->join('tagihan','pembayaran.ID_TAGIHAN = tagihan.ID_TAGIHAN');
		$this->db->where($where);
		return $this->db->get();
	}
	

}

/* End of file M_pembayaran.php */
/* Location: ./application/models/M_pembayaran.php */