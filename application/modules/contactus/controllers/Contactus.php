<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contactus extends CI_Controller {

	public $headerPage = '../../views/header';
	public $footerPage = '../../views/footer';
	public $listPage   = 'contactus';
	
	public function __construct() {
        
        parent::__construct();
		
		$this->load->model('Contactus_model','contact_model');
		$this->load->library('email');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off'); 
    }
	
	public function index(){
		
		if(isset($_POST) && $this->input->post('submit')!='')
		{
			$result = $this->contact_model->add_contact();
			if($result)
			{
               $message = 'Dear Admin,<br/> Name: ' . $this->input->post('name') . "\n\n<br/>" . 'Email: ' . $this->input->post('email') . "\n\n<br/>" . 'Mobile: ' . $this->input->post('mobile') . "\n\n<br/>" . 'Message: ' . $this->input->post('message');
				
				 $to = 'info@kammavaari.com';
    $subject = "Suitable matches of the day 11";
    $headers = "MIME-Version: 1.0"."\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
    $headers .= 'From: Kammavaari.com - <info@kammavaari.com>'."\r\n"; 
	mail($to, "Kammavaari Contact Us", $message, $headers);
	
	
				/*$this->email->from($this->input->post('email'), $this->input->post('name'));
				$this->email->to('kammavaari@gmail.com'); 
				$this->email->subject('Kammavaari Contact Us form');
				$this->email->message($message);	
				$this->email->send();*/
				
				$this->session->set_flashdata('msg_succ', 'Contacted Successfully, We will get back to you...');
				redirect(site_url()."contactus");
			}
			else
			{
				$this->session->set_flashdata('msg_succ', 'Failed Try Again');
				redirect(site_url()."contactus");
			}
		}	
		
		$data['address_info']  = $this->contact_model->get_address();
		$this->load->view($this->headerPage,$header);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage,$footer);
	}
}