<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Sms extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function sign_in() {
		$this->load->view('sign_in');	
	}

	

	public function verify() {
		$mobile		= $this->input->post('mobile');
		$otp		= $this->input->post('otp');

		// check for otp 
		$user = $this->login_model->verify($mobile, $otp);
		if($user) {
			$this->session->set_userdata($user);
			redirect('user/dashboard');
		} else {
			echo "Invalid OTP or Mobile number.";
		}
	}

}