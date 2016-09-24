<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logi extends CI_Model {

	public function checkDb($uname, $pass)
	{
		$this->db->select('nik, nama, job');
		$this->db->from('man_power');
		$this->db->where('nik', $pass);
		$this->db->where('nama', $uname);
		$result = $this->db->get();
		return $result->result_array();
	}

}

/* End of file logi.php */
/* Location: ./application/models/logi.php */ 