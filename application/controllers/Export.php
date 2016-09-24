<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('expor');
	}

	public function index($val)
	{
		switch ($val) {
			case 'pelatihan':
				$pelat = $this->input->post('pelat');
				$nik = $this->input->post('nik');
				$table = 'riwayat_pelatihan';

				$data['data'] = $this->expor->getTandaTanya($nik, $pelat, $table);
				$data['kolom'] = $pelat;
				break;
			case 'karir':
				$pelat = $this->input->post('karir');
				$nik = $this->input->post('nik');
				$table = 'riwayat_karir';

				$data['data'] = $this->expor->getTandaTanyaKar($nik, $pelat, $table);
				$data['kolom'] = $pelat;
				break;
			default:
				# code...
				break;
		}
		$data['header'] = 'header/header';
		$data['footer'] = 'header/footer';

		$this->load->view('view/export', $data);
	}

}

/* End of file export.php */
/* Location: ./application/controllers/export.php */ 