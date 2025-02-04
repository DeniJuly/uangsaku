<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_orangtua extends CI_Model {

	public $table = 'orangtua';
	public $pk    = 'ID_ORANG_TUA';

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
	public function get_pembayaran($where)
	{
		$this->db->where($where);
		return $this->db->get('pembayaran');
	}
	public function all_join_user()
	{
		$this->db->select('
          orangtua.*, user.ID_USER AS ID_USER, user.STATUS_USER
	      ');
	    $this->db->join('user', 'orangtua.ID_USER = user.ID_USER');
	    $this->db->from('orangtua');
	    return $this->db->get();
	}
	public function del($where)
	{
		$this->db->where($where);
		return $this->db->delete($this->table);
	}

}

/* End of file M_sekolah.php */
/* Location: ./application/models/M_sekolah.php */