<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Model {

	public function getDataOption()
	{
		$query = $this->db->query("SELECT deptname, deptno FROM department");
		$result['dept'] = $query->result_array($query);
		$query = $this->db->query("SELECT no_kelker, kelker, deptno FROM kelker");
		$result['kelk'] = $query->result_array($query);
		return $result;
	}
	public function getDataPegawai($value)
	{
		$this->db->select('man_power.nik, man_power.nama, man_power.tgl_masuk, department.deptname, man_power.job');
		$this->db->from('man_power');
		$this->db->join('department', 'department.deptno = man_power.deptno');
		$this->db->where('man_power.nik', $value);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function masukanDataNilai($nik,$pe,$grade,$dept,$tahun)
	{
		$object = array('nik' => $nik,
						'pe' => $pe,
						'grade' => $grade,
						'deptno' => $dept,
						'tahun' => $tahun );
		$this->db->insert('riwayat_karir', $object);
	}

	public function getRiwJob($value)
	{
		$this->db->select('department.deptname, riwayat_karir.pe, riwayat_karir.grade, riwayat_karir.tahun');
		$this->db->from('riwayat_karir');
		$this->db->join('department', 'department.deptno = riwayat_karir.deptno');
		$this->db->where('nik', $value);
		$this->db->order_by('tahun', 'asc');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function masukanDataRotasi($nik, $dept, $tanggal, $tanggal2)
	{
		$this->db->select('deptno');
		$this->db->from('man_power');
		$this->db->where('nik', $nik);
		$result = $this->db->get();

		$dept_before = $result->row();

		$object = array('nik' => $nik,
						'start_date' => $tanggal,
						'end_date' => $tanggal2,
						'dept_before' => $dept_before->deptno,
						'dept_after' => $dept);
		$this->db->insert('riwayat_rotasi', $object);

		$this->db->set('deptno', $dept);
		$this->db->where('nik', $nik);
		$this->db->update('man_power');
	}
	public function getRiwRot($nik)
	{
		$query = "SELECT d.deptname as dept_before,f.deptname as dept_after, a.start_date, a.end_date FROM `riwayat_rotasi` a LEFT JOIN department d
			ON d.deptno = `dept_before`
			LEFT JOIN department f
			ON f.deptno = dept_after
			WHERE a.nik = $nik";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	public function masukanDataPelatihan($nama, $nik, $waktu, $no, $penyelenggara, $tempat, $file)
	{
		$object = array('nama_pelatihan' => $nama,
						'penyelenggara' => $penyelenggara,
						'waktu_pelaksanaan' => $waktu,
						'tempat' => $tempat,
						'no_sertifikat' => $no,
						'nik' => $nik,
						'upload_sertifikat' => $file );
		$this->db->insert('riwayat_pelatihan', $object);
	}
	public function getRiwPel($nik)
	{
		$this->db->select('nama_pelatihan, penyelenggara, waktu_pelaksanaan, tempat, no_sertifikat, upload_sertifikat');
		$this->db->from('riwayat_pelatihan');
		$this->db->where('nik', $nik);
		$result = $this->db->get();
		return $result->result_array();
	}

}

/* End of file profil.php */
/* Location: ./application/models/profil.php */ 