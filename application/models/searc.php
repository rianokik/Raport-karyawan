<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Searc extends CI_Model {

	public function hasilCari($search)
	{
		$query = "SELECT nik, nama, deptname, job FROM man_power JOIN department ON man_power.deptno = department.deptno WHERE nama LIKE '%".$search."%'";
		$result = $this->db->query($query);
		return $result->result_array();
	}

}

/* End of file searc.php */
/* Location: ./application/models/searc.php */ 