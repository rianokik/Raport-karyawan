<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('logi');
	}

	public function index()
	{
		$this->load->view('view/login');
	}
	public function prosesLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

		if ($this->form_validation->run() == true) {
			redirect('Search/index','refresh');
		} else {
			$this->load->view('view/login');
		}
	}
	public function check_database($value)
	{
		$uname = $this->input->post('username');
		$run = $this->logi->checkDb($uname, $value);
		if (count($run) > 0) {
			foreach ($run as $key) {
				if ($key['job'] == 'MANAGER YUNIOR' || $key['job'] == 'MANAGER MIDDLE' || $key['job'] == 'G. MANAGER SENIOR' || $key['job'] == 'MANAGER SENIOR' || $key['job'] == 'G. MANAGER YUNIOR') {
					$sess = array('nik' => $key['nik'],
							'nama' => $key['nama'],
							'');
					$this->session->set_userdata('login', $sess );
					return true;
				}else{
					$this->form_validation->set_message('check_database','You do not have access trough this application');
					return false;
				}
			}
		}else{
			$this->form_validation->set_message('check_database','Invalid username or password');
			return false;
		}
	}
	public function logout()
	{
		$session = $this->session->userdata('login');
		$this->session->unset_userdata('login');
		echo "<script>alert('See you again ".$session['uname']." !')</script>";
		redirect('welcome/login/view','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */