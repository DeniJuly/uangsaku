<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {
	public $table ='produk';
	public $pk    ='ID_PRODUK';

	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
	}
	public function ins($data)
	{
		return $this->db->insert($this->table,$data);
	}
	

}

/* End of file M_produk.php */
/* Location: ./application/models/M_produk.php */