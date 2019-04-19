<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tagihan extends CI_Model {
	public $table = 'tagihan';
	public $pk    = 'ID_TAGIHAN';

	public function ins($data)
	{
		return $this->db->insert($this->table,$data);
	}
	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
	}
	public function join_tagihan($where)
	{
		$this->db->select('
			tagihan.*, jenis_pembiayaan
		');
	}
	

}

/* End of file M_tagihan.php */
/* Location: ./application/models/M_tagihan.php */