<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendapatan_sekolah extends CI_Model {
	public $table = 'pendapatan_sekolah';
	public $pk    = 'ID_PENDAPATAN_SEKOLAH';

	public function ins($data)
	{
		return $this->db->insert($this->table,$data);
	}
	

}

/* End of file M_pendapatan_sekolah.php */
/* Location: ./application/models/M_pendapatan_sekolah.php */