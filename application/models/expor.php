<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expor extends CI_Model {

	public function getTandaTanya($nik, $pelat, $table)
	{
		$i = 0;
		$string = "";
		while ($i < count($pelat)) {
			if ($i == (count($pelat)-1)) {
				$string .= $pelat[$i];
			}else{
				$string .= $pelat[$i].",";
			}
			$i++;
		}
		$this->db->select($string);
		$this->db->from($table);
		$this->db->where('nik', $nik);
		$result = $this->db->get();

		return $result->result_array();
	}
	public function getTandaTanyaKar($nik, $pelat, $table)
	{
		$i = 0;
		$string = "";
		while ($i < count($pelat)) {
			if ($i == (count($pelat)-1)) {
				$string .= $pelat[$i];
			}else{
				$string .= $pelat[$i].",";
			}
			$i++;
		}
		$this->db->select($string);
		$this->db->from($table);
		$this->db->join('department', $table.'.deptno = department.deptno');
		$this->db->where('nik', $nik);
		$result = $this->db->get();

		return $result->result_array();
	}

}

/* End of file expor.php */
/* Location: ./application/models/expor.php */ 