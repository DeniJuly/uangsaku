<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_orangtua extends CI_Model {
	public function some($data)
	{
		$result = $this->db->insert('user', $data);
		$user = return $result;

	}

}