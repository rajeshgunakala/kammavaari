<?php

//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_newdevelopment extends MX_Controller
{

	  public $headerPage 	= 'admin_header';
	  public $listPage 	= 'admin_newdevelopment';
	  public $footerPage 	= 'admin_footer';
	  public $noimage_page = 'noimage_page';


	 public function __construct()
	 {
		 parent::__construct();
		 //$this->load->model('Home_model','my_model');
		 error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		 error_reporting(0);
		 ini_set('display_errors', 'on');
		 if (!$this->session->userdata('staffadmin_id')) 
		 {
			redirect('admin/login');
		 }
		 $this->load->model('Admin_search_model', 'my_model');
		 $this->load->model('Admin_dashboard_model', 'dashboard_model');
	 }


	 public function index()
	 {
	     if (isset($_POST['getnewdsearch'])) 
	     {
	          $user_id = $this->session->userdata('user_id');
			  $gender = $this->input->post('gender');
			  $country = $this->input->post('country');
			  $payment = $this->input->post('payment');
			  $sub_records = $this->my_model->searchtotalrecordsnewdevlopment($gender,$payment,$country,$user_id);
              $data['countries'] = $this->my_model->getallcountries();
              $data['search_sub_rec'] = $sub_records;
		      $this->load->view($this->headerPage);
		      $this->load->view($this->listPage,$data);
		      $this->load->view($this->footerPage);
		 } 
		 else 
		 {
			 $data['countries'] = $this->my_model->getallcountries(); 
		     $this->load->view($this->headerPage);
		     $this->load->view($this->listPage,$data);
		     $this->load->view($this->footerPage);
		 }
		
	    
	 }

	 public function no_image(){
		$data['no_image'] = $this->my_model->no_images(); 
		// $data['rm_image'] =  $this->emp_model->rm_image();  
		// print_r($data['no-image']);die;
		$this->load->view($this->headerPage,$data);
		$this->load->view($this->noimage_page,$data);
		$this->load->view($this->footerPage);


	 }
	 
	 
	 
	 
}
