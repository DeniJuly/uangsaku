<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_payment_poin extends CI_Model {
	public $table = 'payment_poin';
	public $pk	  = 'ID_PAYMENT_POIN';

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
	public function all_join_user()
	{
		$this->db->select('
          payment_poin.*, user.ID_USER AS ID_USER, user.STATUS_USER
	      ');
	    $this->db->join('user', 'payment_poin.ID_USER = user.ID_USER');
	    $this->db->from('payment_poin');
	    return $this->db->get();
	}	

}

/* End of file M_payment_poin.php */
/* Location: ./application/models/M_payment_poin.php */