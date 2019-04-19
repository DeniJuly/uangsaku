<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	public $table 	= 'admin';
	public $pk 		= 'ID_ADMNI';

	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get($this->table);
	}
	

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */