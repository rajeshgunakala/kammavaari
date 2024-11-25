<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Feedback extends CI_Controller {
	public $headerPage   = '../../views/header';
	public $footerPage   = '../../views/footer';
	public $listPage     = 'feedback';

	
	public function __construct() 
	{
        parent::__construct();
        
		$this->load->model('Feedback_model','my_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors','off');
    }
	public function index(){
	    $data['successstories'] = $this->my_model->get_allrecords();
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage,$data);
		$this->load->view($this->footerPage);
	}

	public function add_fd(){
		  $user_id=$this->session->userdata("user_id");
		  $feedBack = $this->input->post("feedback");
		  $improve = $this->input->post("message");

		  $data = array(
			     "user_id  " => $user_id,
				 "feedback_text " => $feedBack,
				 "improve_text"   => $improve
		  );

		  if($this->db->insert('tbl_feedback',$data)){
               $this->session->set_flashdata('success',"FeedBack Submited Successfully");
			   redirect("dashboard/dashboard/");
		  }else{
			  $this->session->set_flashdata('failed',"Failed to submit your feedback");
			  redirect("dashboard/dashboard/");
		  }
		  
	}
}
