<?php

//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_payment_b extends MX_Controller
{

	public $headerPage 	= 'admin_header';
	public $listPage 	= 'admin_payment_b';
	public $footerPage 	= 'admin_footer';


	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Home_model','my_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors', 'on');
		if (($this->session->userdata('user_id') == "0") || $this->session->userdata('user_id') == NULL) {
			redirect('admin/login');
		}
	}

	public function index()
	{

		$this->load->view($this->headerPage);

		$this->load->view($this->listPage);

		$this->load->view($this->footerPage);
	}
}
