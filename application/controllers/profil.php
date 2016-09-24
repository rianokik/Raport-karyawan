<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Model {

	public function getDataOption()
	{
		$query = $this->db->query("SELECT deptname, deptno FROM department");
		$result['dept'] = $query->result_array($query);
		$query = $this->db->query("SELECT kelker, deptno FROM kelker");
		$result['kelk'] = $query->result_array($query);
		return $result;
	}
	public function getDataPegawai($value)
	{
		$this->db->where('nik', $value);
		$query = $this->db->get('man_power');
		return $query->result_array();
	}

}

/* End of file profil.php */
/* Location: ./application/models/profil.php */ 