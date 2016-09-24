<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil');
	}
	public function index($nika)
	{
		if (!isset($nika)) {
			redirect('Search/index','refresh');
		}
		$nik = $nika;
		$data['suc'] = $this->input->get('suc');
		$data['header'] = 'header/header';
		$data['footer'] = 'header/footer';
		$data['nik'] = $nik;
		$data['option'] = $this->profil->getDataOption(); //data yang dikirim berbentuk array
		$data['pegawai'] = $this->profil->getDataPegawai($nik); //bermasalah jika department numbernya masih 0
		$data['riwayatJob'] = $this->profil->getRiwJob($nik);
		$data['riwayatRotasi'] = $this->profil->getRiwRot($nik);
		$data['riwayatPelatihan'] = $this->profil->getRiwPel($nik);
		$this->load->view('view/profile-v1', $data);
	}
	public function prosesPenilaian()
	{
		$nik = $this->input->post('nik');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('PE', 'PE', 'trim|required|numeric|greater_than_equal_to[90]|less_than_equal_to[110]');
		$this->form_validation->set_rules('grade', 'Grade', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$pe = $this->input->post('PE');
			$grade = $this->input->post('grade');
			$dept = $this->input->post('kelker');
			$bulta = $this->input->post('tahun');
			$tahun = explode('-', $bulta)[0];

			$this->profil->masukanDataNilai($nik,$pe, $grade, $dept, $tahun);
			redirect('Profile/index/'.$nik.'?suc=yes','refresh');
		} else {
			$niki = $nik;
			$data['suc'] = $this->input->get('suc');
			$data['header'] = 'header/header';
			$data['footer'] = 'header/footer';
			$data['nik'] = $nik;
			$data['option'] = $this->profil->getDataOption(); //data yang dikirim berbentuk array
			$data['pegawai'] = $this->profil->getDataPegawai($nik); //bermasalah jika department numbernya masih 0
			$data['riwayatJob'] = $this->profil->getRiwJob($nik);
			$data['riwayatRotasi'] = $this->profil->getRiwRot($nik);
			$data['suc'] = 'no';
			$data['riwayatPelatihan'] = $this->profil->getRiwPel($nik);
			$this->load->view('view/profile-v1', $data);

		}

	}
	public function prosesRotasi()
	{
		$nik = $this->input->post('nik');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$dept = $this->input->post('kelker');
			$tanggal = $this->input->post('tanggal');
			$tanggal2 = $this->input->post('tanggal2');

			$this->profil->masukanDataRotasi($nik, $dept, $tanggal, $tanggal2);
			redirect('Profile/index/'.$nik.'?suc=yes','refresh');
		} else {
			$niki = $nik;
			$data['suc'] = $this->input->get('suc');
			$data['header'] = 'header/header';
			$data['footer'] = 'header/footer';
			$data['nik'] = $nik;
			$data['option'] = $this->profil->getDataOption(); //data yang dikirim berbentuk array
			$data['pegawai'] = $this->profil->getDataPegawai($nik); //bermasalah jika department numbernya masih 0
			$data['riwayatJob'] = $this->profil->getRiwJob($nik);
			$data['riwayatRotasi'] = $this->profil->getRiwRot($nik);
			$data['suc'] = 'no';
			$data['riwayatPelatihan'] = $this->profil->getRiwPel($nik);
			$this->load->view('view/profile-v1', $data);
		}
	}

	public function prosesPelatihan()
	{
		$nik = $this->input->post('nik');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama pelatihan', 'trim|required');
		$this->form_validation->set_rules('no_sertifikat', 'Nomor Sertifikat', 'trim|required');
		$this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'trim|required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$nama = $this->input->post('nama');
			$no = $this->input->post('no_sertifikat');
			$penyelenggara = $this->input->post('penyelenggara');
			$tempat = $this->input->post('tempat');
			$waktu = $this->input->post('tanggal');

			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '5000';
			$config['file_name'] = $nik.'-'.$no;
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('fileUpload')){
				$error = array('error' => $this->upload->display_errors());
				echo $error['error'];
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				$this->profil->masukanDataPelatihan($nama, $nik, $waktu, $no, $penyelenggara, $tempat, $data['upload_data']['file_name']);
				redirect('Profile/index/'.$nik.'?suc=yes','refresh');
			}
		} else {
			$niki = $nik;
			$data['suc'] = $this->input->get('suc');
			$data['header'] = 'header/header';
			$data['footer'] = 'header/footer';
			$data['nik'] = $nik;
			$data['option'] = $this->profil->getDataOption(); //data yang dikirim berbentuk array
			$data['pegawai'] = $this->profil->getDataPegawai($nik); //bermasalah jika department numbernya masih 0
			$data['riwayatJob'] = $this->profil->getRiwJob($nik);
			$data['riwayatRotasi'] = $this->profil->getRiwRot($nik);
			$data['suc'] = 'no';
			$data['riwayatPelatihan'] = $this->profil->getRiwPel($nik);
			$this->load->view('view/profile-v1', $data);
		}
	}
	public function download($file)
	{
		$this->load->helper('download');
		$path = './upload/'.$file;
		force_download($path, NULL);
		redirect('Profile/index','refresh');
	}
	public function import($value)
	{
		switch ($value) {
			case 'Pelatihan':
				$nik = $this->input->post('nik');
				$config['upload_path'] = './upload/csv/';
				$config['allowed_types'] = 'csv';
				$config['max_size']  = '100';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('filePelatihan')){
					$error = array('error' => $this->upload->display_errors());
					echo $error['error'];
				}
				else{
					$data = array('upload_data' => $this->upload->data());
					$handle = fopen('./upload/csv/'.$data['upload_data']['file_name'], "r");

					$i = 0;
					while (($data = fgetcsv($handle,0, ",")) !== FALSE) {
						if ($i > 0) {
							$this->profil->masukanDataPelatihan($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6]);
						}
					$i++;
					}
					fclose($handle);
					redirect('Profile/index/'.$nik,'refresh');

					//chown('.'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'csv'.DIRECTORY_SEPARATOR.$data['upload_data']['file_name'], 666);
					//unlink('.'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'csv'.DIRECTORY_SEPARATOR.$data['upload_data']['file_name']);// unlink masih belom beres
				}
				break;

			case 'Karir':
				$nik = $this->input->post('nik');
				$config['upload_path'] = './upload/csv/';
				$config['allowed_types'] = 'csv';
				$config['max_size']  = '100';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('fileKarir')){
					$error = array('error' => $this->upload->display_errors());
					echo $error['error'];
				}
				else{
					$data = array('upload_data' => $this->upload->data());
					$handle = fopen('./upload/csv/'.$data['upload_data']['file_name'], "r");

					$i = 0;
					while (($data = fgetcsv($handle,0, ",")) !== FALSE) {
						if ($i > 0) {
							$this->profil->masukanDataNilai($data[0],$data[2],$data[1],$data[3],$data[4]);
						}
					$i++;
					}
					fclose($handle);
					redirect('Profile/index/'.$nik,'refresh');
				}
				break;
			// PR belom selesai
			case 'detilKary':
				$tanggal1 = strtotime("2016-12-31");
				$tanggal2 = strtotime("2016-01-01");
				$selisih = round((abs($tanggal1-$tanggal2))/(60*60*24));
				echo "selisihnya adalah : ".$selisih." hari <br>";

				$tahun = explode(".", number_format($selisih/365, 2))[0];

				$bulan = round(($selisih%365)/30);
				echo "berarti ".$tahun." tahun, ".$bulan." bulan";

				$nik = $data[0];
				// mulai proses tahun masuk
				$potongnik = substr($data[0], -4);
				$potongthn = substr(date("Y"), -2);
				if (substr($potongnik,1,2) < $potongthn) {
					if (substr($potongnik,1,2) < 10) {
						$tahunMasuk = "200".substr($potongnik,1,2);
					}else{
						$tahunMasuk = "20".substr($potongnik,1,2);
					}
				}else{
					$tahunMasuk = "19".substr($potongnik,1,2);
				}
				// selesai proses tahun masuk
				$grade = $data[2]."-".$data[3];
				$tgl_ultah = $data[2]
				break;
			// end PR belom selesai
			default:
				# code...
				break;
		}
	}

}