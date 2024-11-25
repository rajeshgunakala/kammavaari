<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ignore_list extends CI_Controller {
    
    public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';

public function __construct() {
                parent::__construct();
                $this->load->model('Dashboard_model','dashboard_model');
                $this->load->model('Search_model','search_model');
                $this->load->model('My_account_model','my_account_model');
                $this->load->model('My_ignore_model','my_model');
                $this->load->library('email');
				$this->load->library('pagination'); 
				$this->perPage = 10; 
                error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                error_reporting(0);
                ini_set('display_errors','off'); 
            }
            
            public function index(){
                $this->session->set_userdata('previous_url', current_url());
              $this->session->set_userdata('page_name','ignore');
         $data['profile_pic']=$this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));        
        $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));        
        $data['recently_viewed']=$this->my_account_model->recently_viewed($this->session->userdata('user_id'));
       $data['shortlisted_count']=$this->my_account_model->shortlisted_count($this->session->userdata('user_id'));
       $data['ignored_count']=$this->my_account_model->ignored_count($this->session->userdata('user_id'));
       $data['contact_list']=$this->my_account_model->contact_count($this->session->userdata('user_id'));
$data['profile_intrest_by']=$this->my_account_model->profile_intrest_by_count($this->session->userdata('user_id'));
       $data['payment_details']=$this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
      
        $data['profile_complete']=$this->dashboard_model->get_profile_complete($this->session->userdata('user_id')); 
        
        
        $data['religion_details']=$this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
       $data['view_short_ignore']=$this->my_account_model->view_short_ignore($this->session->userdata('user_id'));
       $data['contact']=$this->my_account_model->contact($this->session->userdata('user_id'));
       
       	$data['heights'] = $this->my_account_model->getallheights();
		$data['religions'] = $this->my_account_model->getallreligions();
		$data['mothertounges'] = $this->my_account_model->getallmothertounges();
		$data['countries'] = $this->my_account_model->getallcountries();
		$data['professions'] = $this->my_account_model->getallprofessions();
		$data['castes'] = $this->my_account_model->getallcastes();
		
		$data = $conditions = array(); 
				$uriSegment = 3; 
				 
				// Get record count 
				$conditions['returnType'] = 'count'; 
				  $data['get_my_ignorelist'] = $this->my_model->getignorelist();
				 $totalRec = $this->my_model->getignorelist($conditions); 
				 
				 
				// Pagination configuration 
				$config['base_url']    = base_url().'dashboard/recently_viewed/'; 
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
				$data['ignored_profiles'] = $this->my_model->getignorelist($conditions);
				$data['total_ignored_profiles'] = $totalRec;
        
                $this->load->view($this->headerPage,$data);
                $this->load->view('ignore_list',$data);
                $this->load->view($this->footerPage);
                
            }
            
            
            
}
            
 ?>