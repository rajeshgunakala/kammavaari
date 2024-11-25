<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Encryptscript extends CI_Controller {

	public $headerPage = '../../../views/header';
	public $footerPage = '../../../views/footer';
	public $listPage = 'aboutus';

	public function __construct()
	{
        parent::__construct();
	    
	   $this->load->model('Encrypt_model', 'encrypt_model');
    }
	public function index()
	{
		
	
		
		
	}
}

