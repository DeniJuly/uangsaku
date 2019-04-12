<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public $table = 'user';
	public $pk    = 'id_user';

	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
	}

}