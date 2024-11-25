<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_pv extends MX_Controller
{

	public $headerPage 	= 'admin_header';
	public $listPage 	= 'admin_pv';
	public $viewPage 	= 'admin_pv_result';
	public $viewPagenew = 'admin_pv_myprofile';
	public $footerPage 	= 'admin_footer';


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_pv_model', 'my_model');
		$this->load->model('Employee_model', 'emp_model');

		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors', 'on');

		if (!$this->session->userdata('staffadmin_id')) {
			redirect('admin/login');
		}
	}

	public function index()
	{

		$this->load->view($this->headerPage);
		$data['castes'] = $this->my_model->getallcastes();
		$data['employees'] = $this->emp_model->get_employees();
		$this->load->view($this->listPage, $data);
		$this->load->view($this->footerPage);
	}

	public function pv_result()
	{


// echo '<pre>';print_r($_SESSION);exit;
		if (isset($_POST['submit'])) {

			$gender = $this->input->post('gender');
			$_SESSION['gender'] = $gender;

			$payment = $this->input->post('payment');
			$_SESSION['payment'] = $payment;

			$profileid = $this->input->post('profileid');
			$profileid=preg_replace('/\s+/', '', $profileid);
			$_SESSION['profileid'] = $profileid;

			$allemails = $this->input->post('allemails');
			$_SESSION['allemails'] = $allemails;

			$allphones = $this->input->post('allphones');
			$_SESSION['allphones'] = $allphones;

			$surname = $this->input->post('surname');
			$surname=preg_replace('/\s+/', '', $surname);
			$_SESSION['surname'] = $surname;

			$name = $this->input->post('name');
			$name=preg_replace('/\s+/', '', $name);
			$_SESSION['name'] = $name;

			$disp_type  = $this->input->post('disp_type');
			$_SESSION['disp_type'] = $disp_type;

			$app_status = $this->input->post('app_status');
			$_SESSION['app_status'] = $app_status;

			$caste = $this->input->post('caste');
			$_SESSION['caste'] = $caste;

			$emp_drop_down = $this->input->post('emp_drop_down');
			$_SESSION['emp_drop_down'] = $emp_drop_down;

			$dor_form = $this->input->post('dor_form');
			$_SESSION['dor_form'] = $dor_form;

			$dor_to = $this->input->post('dor_to');
			$_SESSION['dor_to'] = $dor_to;

			$area_name = $this->input->post('area_name');
			$_SESSION['area_name'] = $area_name;
		} else {
			$gender = $_SESSION['gender'];
			$payment = $_SESSION['payment'];
			$profileid = $_SESSION['profileid'];
			$allemails = $_SESSION['allemails'];
			$allphones = $_SESSION['allphones'];
			$surname = $_SESSION['surname'];
			$name = $_SESSION['name'];
			$app_status = $_SESSION['app_status'];
			$caste = $_SESSION['caste'];
			$emp_drop_down = $_SESSION['emp_drop_down'];
			$dor_to = $_SESSION['dor_to'];
			$dor_form = $_SESSION['dor_form'];
			$area_name = $_SESSION['area_name'];
			$disp_type = $_SESSION['disp_type'];
		}
        // print_r($allemails);die;
		$this->load->view($this->headerPage);
		$total_records = $this->my_model->tot_records($payment, $gender, $profileid, $allphones, $allemails, $surname, $name, $app_status, $caste, $emp_drop_down, $dor_form, $dor_to, $area_name);
		// echo '<pre>';print_r($total_records);exit;
		// print_r($disp_type );die;
		$this->load->library('pagination');
		if ($disp_type == "grid") {
			$config = [
				'base_url'			=> base_url('admin/Admin_pv/pv_result'),
				'per_page'			=> 50,
				'total_rows'		=> $total_records,
				'full_tag_open' 	=> '<ul class="pagination">',
				'full_tag_close'	=> '</ul>',
				'first_tag_open'	=> '<li class="page-link">',
				'first_tag_close'	=> '</li>',
				'last_tag_open'		=> '<li class="page-link">',
				'last_tag_close'	=> '</li>',
				'next_tag_open'		=> '<li class="page-link">',
				'next_tag_close'	=> '</li>',
				'prev_tag_open'		=> '<li class="page-link">',
				'prev_tag_close'	=> '</li>',
				'num_tag_open'		=> '<li class="page-link">',
				'num_tag_close'		=> '</li>',
				'cur_tag_open'		=> '<li class="page-link pg-blue">',
				'cur_tag_close'		=> '</li>',
			];

			$this->pagination->initialize($config);
			$data['sub_rec'] = $this->my_model->sub_records($config['per_page'], $this->uri->segment(4), $payment, $gender, $profileid, $allphones, $allemails, $surname, $name, $app_status, $caste, $emp_drop_down, $dor_form, $dor_to, $area_name);
			// echo '<pre>';print_r($data['sub_rec'] );exit;
			$data['tot_rec'] = $total_records;
			$data['disp'] = "grid";
			//$data['castes'] = $this->my_model->getallcastes();
			//echo '<pre>';print_r($data);exit;
			$this->load->view($this->viewPage, $data);
			$this->load->view($this->footerPage);
		} else {
			$config = [
				'base_url'			=> base_url('admin/Admin_pv/pv_result'),
				'per_page'			=> 50,
				'total_rows'		=> $total_records,
				'display_pages'		=> FALSE,
				'first_link' 		=> FALSE,
				'last_link'  		=> FALSE,
				'full_tag_open' 	=> '<ul class="pagination">',
				'full_tag_close'	=> '</ul>',
				'first_tag_open'	=> '<li class="page-link">',
				'first_tag_close'	=> '</li>',
				'last_tag_open'		=> '<li class="page-link">',
				'last_tag_close'	=> '</li>',
				'next_tag_open'		=> '<li class="page-link" >',
				'next_tag_close'	=> '</li>',
				'prev_tag_open'		=> '<li class="page-link">',
				'prev_tag_close'	=> '</li>',
				'num_tag_open'		=> '<li class="page-link">',
				'num_tag_close'		=> '</li>',
				'cur_tag_open'		=> '<li class="page-link pg-blue">',
				'cur_tag_close'		=> '</li>',
			];
			$this->pagination->initialize($config);

			$data['search_sub_rec'] = $this->my_model->sub_records($config['per_page'], $this->uri->segment(4), $payment, $gender, $profileid, $allphones, $allemails, $surname, $name, $app_status, $caste, $emp_drop_down, $dor_form, $dor_to, $area_name);
			$data['search_tot_rec'] = $total_records;
			$data['disp'] = "slide";
			$data["payment"] =  $payment;
			$data['links'] = $this->pagination->create_links();
			//$data['castes'] = $this->my_model->getallcastes();
			
			$this->load->view($this->viewPage, $data);
			$this->load->view($this->footerPage);
		}
	}


	public function pv_result_myprofile()
	{
// print_r("deva");die;
		$offset = !empty($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$params = $this->input->get(); 
	    $search = trim($params["search"]);	
		$payment= $params["app_status"]; 
		$gender= $params["app_status_bride"]; 
// 		print_r($payment);die;
		$rm_names= $params["rm_names"]; 
		$data['rm_image'] =  $this->emp_model->rm_image(); 
		$this->load->view($this->headerPage,$data);
		$total_records = $this->my_model->tot_records_myprofile($payment,$search,$rm_names,$gender);
	
		$this->load->library('pagination');
		// if ($disp_type == "grid") {
			$config = [
				'base_url'			=> base_url('admin/Admin_pv/pv_result_myprofile'),
				'per_page'			=> 50,
				'total_rows'		=> $total_records,
				'reuse_query_string' => true,
				'full_tag_open' 	=> '<ul class="pagination">',
				'full_tag_close'	=> '</ul>',
				'first_tag_open'	=> '<li class="page-link">',
				'first_tag_close'	=> '</li>',
				'last_tag_open'		=> '<li class="page-link">',
				'last_tag_close'	=> '</li>',
				'next_tag_open'		=> '<li class="page-link">',
				'next_tag_close'	=> '</li>',
				'prev_tag_open'		=> '<li class="page-link">',
				'prev_tag_close'	=> '</li>',
				'num_tag_open'		=> '<li class="page-link">',
				'num_tag_close'		=> '</li>',
				'cur_tag_open'		=> '<li class="page-link pg-blue">',
				'cur_tag_close'		=> '</li>',
			];

			$a = $this->pagination->initialize($config);
			//print_r($a);die;
			$data['sub_rec'] = $this->my_model->sub_records_myprofile($config['per_page'], $offset, $payment, $search,$rm_names,$gender);
			$data['rm_names'] = $this->my_model->rm_names();
			// print_r($data['sub_rec']);die;
			$data['tot_rec'] = $total_records;
			$data['disp'] = "grid";
			//$data['castes'] = $this->my_model->getallcastes();
			//echo '<pre>';print_r($data);exit;
			$this->load->view($this->viewPagenew, $data);
			$this->load->view($this->footerPage);
		// } 
		
		// 	$config = [
		// 		'base_url'			=> base_url('admin/Admin_pv/pv_result'),
		// 		'per_page'			=> 1,
		// 		'total_rows'		=> $total_records,
		// 		'display_pages'		=> FALSE,
		// 		'first_link' 		=> FALSE,
		// 		'last_link'  		=> FALSE,
		// 		'full_tag_open' 	=> '<ul class="pagination">',
		// 		'full_tag_close'	=> '</ul>',
		// 		'first_tag_open'	=> '<li class="page-link">',
		// 		'first_tag_close'	=> '</li>',
		// 		'last_tag_open'		=> '<li class="page-link">',
		// 		'last_tag_close'	=> '</li>',
		// 		'next_tag_open'		=> '<li class="page-link" >',
		// 		'next_tag_close'	=> '</li>',
		// 		'prev_tag_open'		=> '<li class="page-link">',
		// 		'prev_tag_close'	=> '</li>',
		// 		'num_tag_open'		=> '<li class="page-link">',
		// 		'num_tag_close'		=> '</li>',
		// 		'cur_tag_open'		=> '<li class="page-link pg-blue">',
		// 		'cur_tag_close'		=> '</li>',
		// 	];
		// 	$this->pagination->initialize($config);

		// 	$data['search_sub_rec'] = $this->my_model->sub_records($config['per_page'], $this->uri->segment(4), $payment, $gender, $profileid, $allphones, $allemails, $surname, $name, $app_status, $caste, $emp_drop_down, $dor_form, $dor_to, $area_name);
		// 	$data['search_tot_rec'] = $total_records;
		// 	$data['disp'] = "slide";
		// 	$data["payment"] =  $payment;
		// 	$data['links'] = $this->pagination->create_links();
		// 	//$data['castes'] = $this->my_model->getallcastes();
			
		// 	$this->load->view($this->viewPage, $data);
		// 	$this->load->view($this->footerPage);
		// }
	}
}
