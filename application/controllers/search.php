<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('searc');
	}

	public function index()
	{
		$data['header'] = 'header/header';
		$data['footer'] = 'header/footer';

		$this->load->view('view/search', $data);
	}
	public function prosesSearch()
	{
		$search = $this->input->post('search');

		$data['cari'] = $this->searc->hasilCari($search);
		$data['hasil'] = $search;
		$data['header'] = 'header/header';
		$data['footer'] = 'header/footer';

		$this->load->view('view/search', $data);	
	}

}

/* End of file search.php */
/* Location: ./application/controllers/search.php */ 