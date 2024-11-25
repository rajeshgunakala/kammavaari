<?php

//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_home extends MX_Controller
{

	public $headerPage 	= 'admin_header';
	public $listPage 	= 'admin_dashboard';
	public $footerPage 	= 'admin_footer';


	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Home_model','my_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors', 'off');
		if (!$this->session->userdata('staffadmin_id')) {
			redirect('admin/login');
		}
		$this->load->model('Employee_model', 'emp_model');
	}


	public function index()
	{
//echo 'afd';exit;
		$login_type=$this->emp_model->getAdminLoginType($this->session->userdata('user_id'));
		$data['regular_profiles'] = array_slice($this->emp_model->getRegularProfilesCount($login_type["type"]),0,3);
		$data['matchmetingserious'] = array_slice($this->emp_model->matchmetingserious(),0,3);
		$data['confidential_profiles'] = array_slice($this->emp_model->getConfidentialProfiles($this->session->userdata('user_id'),$login_type["type"]),0,3);
		$data['sc_profiles'] = array_slice($this->emp_model->getSuperConfidentialProfiles($this->session->userdata('user_id'),$login_type["type"]),0,3);
		$data['elite_profiles'] = array_slice($this->emp_model->getEliteProfiles($this->session->userdata('user_id'),$login_type["type"]),0,3);
		$data['supereliteprofiles'] = array_slice($this->emp_model->getSuperEliteProfiles($this->session->userdata('user_id'),$login_type["type"]),0,3);
		$data['notshownprofiles'] = array_slice($this->emp_model->getNotShownProfiles($this->session->userdata('user_id'),$login_type["type"]),0,3);
		$data['freenewusers'] = array_slice($this->emp_model->freenewprofiles(),0,3);
		$data['nearbyexpiryprofiles_total'] = $this->emp_model->nearbyexpiryprofiles();
		$data['nearbyexpiryprofiles'] = array_slice($this->emp_model->nearbyexpiryprofiles(),0,3);
		$data['noservicesincemonth_total'] = $this->emp_model->noservicesincemonth();
		$data['noservicesincemonth'] = array_slice($this->emp_model->noservicesincemonth(),0,3);
		$data['freeprofticketexpiry'] = array_slice($this->emp_model->freeprofticketexpiry(),0,3);
		$data['bothsideinterest'] = array_slice($this->emp_model->bothsideinterest(),0,3);
		$data['latestProfiles'] = array_slice($this->emp_model->getLatestProfiles(),0,3);
		$data['rm_image'] =  $this->emp_model->rm_image();
	//	print_r($data);exit;
		
	    $this->load->view($this->headerPage,$data);

		$this->load->view($this->listPage,$data);

		$this->load->view($this->footerPage);
	}


	public function readUser() {
		$id = $this->input->post('user_id');
		
		$res = $this->db->query("UPDATE tbl_primary_info SET isNotify = '0' WHERE id = ?", array($id));
	
		if ($res) {
			$response = array('success' => true, 'message' => 'User updated successfully');
		} else {
			$response = array('success' => false, 'message' => 'Failed to update user');
		}
	
		// Convert the response array to JSON and send it as the output
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
}
