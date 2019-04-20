<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_feedback extends CI_Model {
	public $table 	= 'feedback';
	public $pk		= 'ID_FEEDBACK';
	
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
			'feedback.*,user.ID_USER AS ID_USER, user.STATUS_USER'
		);
		$this->db->join('user','feedback.ID_USER = user.ID_USER');
		$this->db->from('feedback');
		return $this->db->get();
	}
	public function all_join_user()
	{
		$this->db->select('
          feedback.*, user.ID_USER AS ID_USER, user.STATUS_USER
	      ,user.USERNAME');
	    $this->db->join('user', 'feedback.ID_USER = user.ID_USER');
	    $this->db->from('feedback');
	    return $this->db->get();
	}
}

/* End of file M_feedback.php */
/* Location: ./application/models/M_feedback.php */