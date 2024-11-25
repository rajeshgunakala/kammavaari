<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';
	
/*	public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';*/
	
	public $oldheaderPage   = '../../views/header';
	public $oldfooterPage   = '../../views/footer';
	
/*	public $listPage     = 'home1';*/
	public $listPage     = 'home';
	public $searchPage   = 'search';
	public $viewPage = 'search/search-result';
	
	
	public function __construct() 
	{
        parent::__construct();
        
		$this->load->model('Home_model','my_model');
		//$this->load->model('Dashboard_model','dashboard_model');
		$this->load->library('email');
		$this->load->library('pagination'); 
		$this->perPage = 10; 
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(1);
		ini_set('display_errors','on');
    }
	
	public function index(){
	    
        $data['success_stories'] = $this->my_model->get_successstories();
        $data['religions'] = $this->my_model->get_all_religions();
        $data['mother_tounges'] = $this->my_model->get_all_mothertounges();
		$data['videos'] = $this->my_model->get_advertisement();
		
        //$data['profile_pic']=$this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
		//echo "<pre>";print_r($data);exit;
	   //$data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
		//echo $this->listPage;exit;
		$this->load->view($this->headerPage,$data);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage,$footer);
	}
   public function search()
   {


      $gender =  $this->input->post('gender');
      
      $agefrom =  $this->input->post('agefrom');
      $ageto =  $this->input->post('ageto');
      $religion =  $this->input->post('religion');
      $mother_tounge =  $this->input->post('mother_tounge');
	  
	/*  $data = $conditions = array(); 
				$uriSegment = 4; 
				 
				// Get record count 
				$conditions['returnType'] = 'count'; 
				$totalRec  = $this->my_model->getsearchrecords($gender,$agefrom,$ageto,$religion,$mother_tounge,$conditions);
				$config['base_url']    = base_url(); 
				$config['uri_segment'] = $uriSegment; 
				$config['total_rows']  = $totalRec; 
				$config['per_page']    = $this->perPage; 
				// Pagination link format 
				$config['num_tag_open'] = '<li>'; 
				$config['num_tag_close'] = '</li>'; 
				$config['cur_tag_open'] = '<li class="current"><a href="javascript:void(0);">'; 
				$config['cur_tag_close'] = '</a></li>'; 
				$config['next_link'] = 'Next'; 
				$config['prev_link'] = 'Prev'; 
				$config['next_tag_open'] = '<li class="button">'; 
				$config['next_tag_close'] = '</li>'; 
				$config['prev_tag_open'] = '<li class="button">'; 
				$config['prev_tag_close'] = '</li>'; 
				$config['first_tag_open'] = '<li>'; 
				$config['first_tag_close'] = '</li>'; 
				$config['last_tag_open'] = '<li>'; 
				$config['last_tag_close'] = '</li>';
				 
				// Initialize pagination library 
				$this->pagination->initialize($config); 
				 
				// Define offset 
				$page = $this->uri->segment($uriSegment); 
				$offset = !$page?0:$page; 
				 
				// Get records 
				$conditions = array( 
					'start' => $offset, 
					'limit' => $this->perPage 
				); 
				$data['total_search_records'] = $totalRec; */
				redirect('registration');
		$data['search_records'] = $this->my_model->getsearchrecords($gender,$agefrom,$ageto,$religion,$mother_tounge);
      //echo "<pre>";print_r($data['search_records']);exit;
  	  $this->load->view($this->headerPage,$data);
	  $this->load->view($this->searchPage,$data);
	  $this->load->view($this->footerPage,$footer);
   }
   
   public function subscribe(){
       
               $message = 'Email: '.$this->input->post('Email');
                $this->email->from($this->input->post('Email'));
				$this->email->to('aaresrikanth@gmail.com'); 
				$this->email->subject('New Subscription');
				$this->email->message($message);	
				$this->email->send();
				$this->session->set_flashdata('msg_succ', 'Subscribed Successfully');
				redirect(site_url());
			
   }
}
