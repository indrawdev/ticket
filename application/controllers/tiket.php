<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tiket extends CI_Controller {

	private $secret_key = 'd51d6034ba9c6706b9cd32f99bbca2ca';
	private $confirm_key = 'bff9f6';
	private $callback_url = 'http://www.tiket.com/payment/dummyConfirmPage';
	
	public function getToken() {
			$url = 'https://api.master18.tiket.com/apiv1/payexpress?method=getToken&secretkey=56c8624d6a62e1ab22f0d9915ff2d43c';
		
	}

}