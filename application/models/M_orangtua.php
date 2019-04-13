<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_orangtua extends CI_Model {
	public function some($where)
	{
		$this->db->where($where);
		return $this->db->get('orangtua');
	}
	public function ins($data)
	{
		return $this->db->insert('orangtua',$data);
	}
	public function cek_kode($kode, $id)
	{
		$this->db->select('KODE_VERIFIKASI');
		$this->db->from('user');
		$this->db->where('ID_USER', $id);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows()==1) {
			return $query->result();
		}else{
			return false;
		}
	}

}