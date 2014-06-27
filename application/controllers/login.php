<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->view('login_v');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
	}
	
	
	public function forgot() {
		$this->load->view('forgot_v');
		$email = $this->input->post('email');
	}
	
	public function sendPass() {
		
	}

}
