<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function index() {
		$this->load->view('login_v');
	}
	
	public function missing() {
		$this->load->view('missing_v');
	}

}