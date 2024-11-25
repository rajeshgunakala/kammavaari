<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_ap extends MX_Controller
{
    // public $headerPage 	= 'admin_header_pro';
    // public $headerPage 	= 'admin_header';
   
    public $viewPage 	= 'profile_assign';
    public $footerPage 	= 'admin_footer_pro';
    public $userdashboard = 'user_dashboard';
    public $headerPage_1    = 'admin_header';
    public $footerPage_1    = 'admin_footer';
	public $headerPage    = 'admin_header';
    public $footerPageLatest    = 'admin_footer_latest';
	public $rm_page='rm_profile_list';
    public $emp_individualreport = 'emp_individualreport';

	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_model', 'emp_model');
        $this->load->model('Admin_payment_model');
        $this->load->model('Admin_dashboard_model', 'dashboard_model');
        $this->load->model('Search_model', 'my_model');
        $this->load->library('session');
      // $this->load->library('Excel');
        $this->load->model('Encrypt_model', 'encrypt_model');
        if ($this->session->userdata('user_id') == "") {
            redirect("admin/login", 'refresh');
        }
        // Load pagination library 
        $this->load->library('AjaxPaginationSingle');
        staffadminsessionset();
    }

    // pages
    
    public function rmsendinterest()
    {
        $this->load->model('dashboard/My_account_model', 'myac_model');
         
        $getfrom_id=getuserdetbyprofid($this->input->post('FromProfileId'))->id;
        $getto_id=getuserdetbyprofid($this->input->post('toProfileArr'))->id;
         
        if ($getfrom_id=='' || $getto_id=='') {
            echo json_encode('profileidwrong');
            exit;
        }
		if ($getfrom_id == $getto_id) {
            echo json_encode('profileidwrong');
            exit;
        }
		$fticket = $getfrom_id."-".$getto_id;
		$tTicket = $getto_id."-".$getfrom_id;
		$getexistingprof = 0;
		//check profile sent and viewed
		$profileViewed = $this->myac_model->checkProfileViewed($getfrom_id, $getto_id);
		if(!empty($profileViewed)) {
			$serviceListPkId = $profileViewed["id"];
			$createdBy = ($this->session->userdata('user_id')) ? $this->session->userdata('user_id') : $this->session->userdata('admin_id');
			$this->myac_model->mysideinterests($getfrom_id, $getto_id, $serviceListPkId, '', $createdBy);	
			$this->myac_model->update_interested_status($fticket);
		} else {
			$profileInterested = $this->myac_model->checkProfileInterested($getfrom_id, $getto_id);
			if($profileInterested > 0) {
				echo json_encode('profilesinmatcheddata');
				exit;
			} else {
				echo json_encode('profilesnotshared');
				exit;
			}
		}
		
        /*$this->myac_model->mysideinterests($getfrom_id, $getto_id);
        $this->myac_model->update_contact_list($getfrom_id, $getto_id);
         
        $this->myac_model->expressinterestinsert_new($getfrom_id, $getto_id, $this->session->userdata('user_id'));
		*/
		
		     
        echo json_encode('success');
        exit;
    }
    public function marketingticketshistory()
    {
        $data['calllog']=$this->emp_model->get_call_log($this->input->post('uid'));
        
        //echo '<pre>';print_r($data['calllog']);exit;
        echo $this->load->view('marketingticketshistory', $data, true);
        exit;
    }
    
    public function viewcontactsinfo()
    {
        $data['calllog']=$this->emp_model->get_parent_info($this->input->post('uid'));
        //echo '<pre>';print_r($data['calllog']);exit;
        echo $this->load->view('viewcontactsinfo', $data, true);
        exit;
    }
    
    public function viewsaform()
    {
        //error_reporting(E_ALL);
        //echo 'ex';exit;
        $this->load->model('Admin_payment_model', 'amy_model');
        // echo $this->input->post('uid');exit;
        $data['calllog']=$this->amy_model->get_payment_rec($this->input->post('uid'));
        //echo 'ex';exit;
        //echo '<pre>';print_r($data['calllog']);exit;
        echo $this->load->view('viewsaform', $data, true);
        exit;
    }
    
    public function getrmticketnotes()
    {
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($this->input->post('uid'), $this->input->post('rmid'), $this->input->post('intid'), '1000');
        
        echo $this->load->view('getrmticketnotes', $data, true);
        exit;
        //echo json_encode($result);
    }
    public function savermticketnotes()
    {
        $this->emp_model->savermticketnotes();
        echo date("d-m-Y H:i:s");
    }
    public function mmstwoprofiles()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        
        $data["title"] = getlangkeywords('Reminder');
        //MS_photos
        $data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($this->input->get('pid1'));
        $data['primary_info1'] = $this->my_model->get_user_profile_id($this->input->get('pid1'));
        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($this->input->get('pid2'));
        $data['primary_info2'] = $this->my_model->get_user_profile_id($this->input->get('pid2'));
        $data['profile_1']=$this->input->get('pid1');
        $data['profile_2']=$this->input->get('pid2');
        $data['profile_inid']=$this->input->get('inid');
        
        $data['rm_profile1']=getstaffdetbyclientid($this->input->get('pid1'));
        $data['rm_profile2']=getstaffdetbyclientid($this->input->get('pid2'));
        $data['prof_intdet']=$this->emp_model->profinttrackdetbyprofids($this->input->get('pid1'), $this->input->get('pid2'));
        //echo '<pre>';print_r($data['rm_profile1']->id);exit;
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '5');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '5');
        //echo '<pre>';print_r($data['rmnotes_2']);exit;


        //$data['profieids']=array('1'=>$this->input->get('pid1'),'2'=>$this->input->get('pid2'));
        
        $this->load->view($this->headerPage);
        $this->load->view('mmstwoprofiles', $data);
        $this->load->view($this->footerPage);
    }
    public function bothsideinterest_action()
    {
        $this->emp_model->bothsideinterest_action();
    }
	public function close_ticket_action()
    {
        $this->emp_model->close_ticket_action();
		$result = array("success" => "1");
        echo json_encode($result);
    }
    
    public function reminderalert()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['user_data'] = $this->emp_model->reminderalert();
        $data["title"] = getlangkeywords('Reminder');
        //echo '<pre>';print_r($data);exit;
        $this->load->view($this->headerPage);
        $this->load->view('reminderalert', $data);
        $this->load->view($this->footerPage);
    }
    

    public function addeditstaff()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['user_data'] = $this->emp_model->addeditstaff();
        $data['rm_types'] = $this->emp_model->getRmTypes();
        $data["title"] = getlangkeywords('Reminder');
        //echo '<pre>';print_r($data);exit;
        $this->load->view($this->headerPage_1);
        $this->load->view('addeditstaff', $data);
        $this->load->view($this->footerPage_1);
    }
    public function addstaffadmin()
    {
        $resp=$this->emp_model->addstaffadmin();
        echo $resp;
        exit;
    }
    
    public function staffupdate()
    {
        $resp=$this->emp_model->staffupdate();
        echo $resp;
        exit;
    }
    
    public function staffdelete()
    {
        $resp=$this->emp_model->staffdelete();
    }
	
	public function bothsideinterest()
    {
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['user_data'] = $this->emp_model->bothsideinterest();
        $data["title"] = getlangkeywords('bothsideinterest');
		
          $totalRec = $this->emp_model->bothsideinterestTotalRecords();
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxBothSideInterest'); 
    
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1; 
         
        // Initialize pagination library 
        $this->ajaxpaginationsingle->initialize($config); 

		$sub_record = $this->emp_model->bothsideinterestRecord(1, 0);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
		$rmDetails = getstaffdetbyid($sentById);
		$serviceDoneBy = $rmDetails->username;
		if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);
        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;
		$data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        // print_r($data);die;
        $this->load->view($this->headerPage); 
		$this->load->view('bothsideinterest', $data);
		$this->load->view('servicelist_common', $data);
		$this->load->view($this->footerPage);
    }
	public function ajaxBothSideInterest() {
		$page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $totalRec = $this->emp_model->bothsideinterestTotalRecords();
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxBothSideInterest'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;
        $this->ajaxpaginationsingle->initialize($config);
		$sub_record = $this->emp_model->bothsideinterestRecord(1, $offset);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
		$rmDetails = getstaffdetbyid($sentById);
		$serviceDoneBy = $rmDetails->username;
		if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;
		 $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        $this->load->view('ajax_both_side_interest', $data);
	}
	
	public function matchmetingserious()
    {
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['user_data'] = $this->emp_model->matchmetingserious();
        $data["title"] = getlangkeywords('matchmetingserious');		
        $totalRec = $this->emp_model->matchmetingseriousTotalRecords();
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxMatchMeetingSerious'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;          
        // Initialize pagination library 
        $this->ajaxpaginationsingle->initialize($config); 

		$sub_record = $this->emp_model->matchmetingseriousRecord(1, 0);
        
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["kv_msi_interested_rmid"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);
        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;

        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;	 
          $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        $data['rm_image'] =  $this->emp_model->rm_image();
        // print_r($data['rm_image']);die;
        $this->load->view($this->headerPage,$data);
		 $this->load->view('matchmetingserious', $data);
		 $this->load->view('servicelist_common', $data);
		$this->load->view($this->footerPage);
    }
	public function ajaxMatchMeetingSerious() {
		$page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $totalRec = $this->emp_model->matchmetingseriousTotalRecords();
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxMatchMeetingSerious'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;
        $this->ajaxpaginationsingle->initialize($config);
		$sub_record = $this->emp_model->matchmetingseriousRecord(1, $offset);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;
		 $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        $this->load->view('ajax_match_meeting_serious', $data);
	}
	
	public function opposidesidesinterest()
    {
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['user_data'] = $this->emp_model->opposidesidesinterest();
        $data["title"] = getlangkeywords('mysidesinterest');		
        $totalRec = $this->emp_model->oppositeSideInterestTotalRecords();
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxOppositeSideInterest'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;          
        // Initialize pagination library 
        $this->ajaxpaginationsingle->initialize($config); 

		$sub_record = $this->emp_model->oppositeSideInterestRecord('', 1, 0);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);
        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;	 
          $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        $data['rm_image'] =  $this->emp_model->rm_image();
        $this->load->view($this->headerPage,$data);
		$this->load->view('opposidesidesinterest', $data);
		$this->load->view('servicelist_common', $data);		
		$this->load->view($this->footerPage);
    }	
	
	public function ajaxOppositeSideInterest() {
		$page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $totalRec = $this->emp_model->oppositeSideInterestTotalRecords();
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxOppositeSideInterest'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;
        $this->ajaxpaginationsingle->initialize($config);
		$sub_record = $this->emp_model->oppositeSideInterestRecord('', 1, $offset);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;
		 $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        $this->load->view('ajax_opposite_side_interest', $data);
	}
	
	public function opposidependingfourtyeighth()
    {
        $data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['user_data'] = $this->emp_model->opposidesidesinterest();
        $data["title"] = getlangkeywords('mysidesinterest');		
        $totalRec = $this->emp_model->oppositeSideInterestTotalRecords('48hours');
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxOppositeSideInterestFurtyEight'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;          
        // Initialize pagination library 
        $this->ajaxpaginationsingle->initialize($config); 

		$sub_record = $this->emp_model->oppositeSideInterestRecord('48hours',1, 0);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);
        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;	 
         $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']); 
        $data['rm_image'] =  $this->emp_model->rm_image();

        $this->load->view($this->headerPage,$data);
		$this->load->view('opposidesidesinterestfourtyeight', $data);
		$this->load->view('servicelist_common', $data);
		$this->load->view($this->footerPage);
    }
	
	public function ajaxOppositeSideInterestFurtyEight() {
		$page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $totalRec = $this->emp_model->oppositeSideinterestTotalRecords('48hours');
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxOppositeSideInterestFurtyEight'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;
        $this->ajaxpaginationsingle->initialize($config);
		$sub_record = $this->emp_model->oppositeSideinterestRecord('48hours', 1, $offset);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;
		 $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        $this->load->view('ajax_opposite_side_interest', $data);
	}
	
	public function opposideclosetickets()
    {
        $data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['user_data'] = $this->emp_model->opposidesidesinterest();
        $data["title"] = getlangkeywords('opposideclosetickets');		
        $totalRec = $this->emp_model->oppositeSideClosedTicketsTotalRecords();
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxOppositeSideCloseTickets'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;          
        // Initialize pagination library 
        $this->ajaxpaginationsingle->initialize($config); 

		$sub_record = $this->emp_model->oppositeSideClosedTicketsRecord(1, 0);
		//echo "<pre>";print_r($sub_record);exit;
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);
        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;	 
        $data['rm_image'] =  $this->emp_model->rm_image();

        $this->load->view($this->headerPage,$data);
		$this->load->view('opposideclosetickets', $data);
		$this->load->view('servicelist_common', $data);
		$this->load->view($this->footerPage);
    }
	
	public function ajaxOppositeSideCloseTickets()
    {
        $page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $totalRec = $this->emp_model->oppositeSideClosedTicketsTotalRecords();
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxOppositeSideCloseTickets'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;
        $this->ajaxpaginationsingle->initialize($config);
		$sub_record = $this->emp_model->oppositeSideClosedTicketsRecord(1, $offset);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;
        $this->load->view('ajax_opposite_side_closed_tickets', $data);
    }
	
	public function mysidefollowupsint()
    {
        $data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $data["title"] = getlangkeywords('mysidefollowupsint');		
        $totalRec = $this->emp_model->mySideFollowupsInterestTotalRecords();
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxMySideFollowupsInterest'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;          
        // Initialize pagination library 
        $this->ajaxpaginationsingle->initialize($config); 

		$sub_record = $this->emp_model->mySideFollowupsInterestRecord('', 1, 0);
	//	print_r($sub_record);exit;
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
	       if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }  
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);
        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;	 
		 $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        // print_r($data);exit;
        $data['rm_image'] =  $this->emp_model->rm_image();

        $this->load->view($this->headerPage,$data);
		$this->load->view('mysidefollowupsint', $data);
		$this->load->view('servicelist_common', $data);
		$this->load->view($this->footerPage);
    }

    public function prime_profiles(){
        $params = $this->input->get(); 
        $rm_names= $params["rm_names"]; 
        // print_r($params);die;
        $data['rm_names'] = $this->emp_model->rm_names();
      
        $data['rm_image'] =  $this->emp_model->rm_image();
        $data['prime']=$this->emp_model->prime_profiles($rm_names);
        // print_r($data['prime']);die;
        // print_r($data['rm_names'] );die;
        $this->load->view($this->headerPage,$data);
		$this->load->view('prime_list', $data);
		$this->load->view($this->footerPage);

       
    }
    
	
	public function ajaxMySideFollowupsInterest() {
		$page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $totalRec = $this->emp_model->mySideFollowupsInterestTotalRecords();
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxMySideFollowupsInterest'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;
        $this->ajaxpaginationsingle->initialize($config);
		$sub_record = $this->emp_model->mySideFollowupsInterestRecord('', 1, $offset);
	//	print_r($sub_records);exit;
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
		if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }  
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;
		 $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        //print_r($data);exit;
        $this->load->view('ajax_my_side_followups_interest', $data);
	}
    
    public function mysidefollowupsintfortyeighth()
    {
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $data["title"] = getlangkeywords('mysidefollowupsint');		
        $totalRec = $this->emp_model->mySideFollowupsInterestTotalRecords('48hours');
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxMySideFollowupsInterestFourtyEight'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;          
        // Initialize pagination library 
        $this->ajaxpaginationsingle->initialize($config); 

		$sub_record = $this->emp_model->mySideFollowupsInterestRecord('48hours', 1, 0);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);
        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;	 
          $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        $data['rm_image'] =  $this->emp_model->rm_image();

        $this->load->view($this->headerPage,$data);
		$this->load->view('mysidefollowupsintfourtyeight', $data);
		$this->load->view('servicelist_common', $data);
		$this->load->view($this->footerPage);
    }
	
	public function ajaxMySideFollowupsInterestFourtyEight() {
		$page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $totalRec = $this->emp_model->mySideFollowupsInterestTotalRecords('48hours');
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxMySideFollowupsInterestFourtyEight'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;
        $this->ajaxpaginationsingle->initialize($config);
		$sub_record = $this->emp_model->mySideFollowupsInterestRecord('48hours', 1, $offset);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;
		 $data['primary_info1']['mobile'] = $this->encrypt_model->decryptField($data['primary_info1']['mobile']);
        $data['primary_info1']['email'] = $this->encrypt_model->decryptField($data['primary_info1']['email']);
        $data['primary_info2']['mobile'] = $this->encrypt_model->decryptField($data['primary_info2']['mobile']);
        $data['primary_info2']['email'] = $this->encrypt_model->decryptField($data['primary_info2']['email']);
        $this->load->view('ajax_my_side_followups_interest', $data);
	}
	
	
	
	public function mysideclosetickets()
    {
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $data["title"] = getlangkeywords('mysideclosetickets');		
        $totalRec = $this->emp_model->mySideClosedTicketsTotalRecords();
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxMySideClosedTickets'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;          
        // Initialize pagination library 
        $this->ajaxpaginationsingle->initialize($config); 

		$sub_record = $this->emp_model->mySideClosedTicketsRecord(1, 0);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
		if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);
        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;	 
        $data['rm_image'] =  $this->emp_model->rm_image();

        $this->load->view($this->headerPage,$data);
		$this->load->view('mysideclosetickets', $data);
		$this->load->view('servicelist_common', $data);
		$this->load->view($this->footerPage);
    }
	
	public function ajaxMySideClosedTickets() {
		$page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
		$data = array(); 
        $data['user_id'] = $this->session->userdata('user_id');
        $totalRec = $this->emp_model->mySideClosedTicketsTotalRecords();
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/admin_ap/ajaxMySideClosedTickets'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = 1;
        $this->ajaxpaginationsingle->initialize($config);
		$sub_record = $this->emp_model->mySideClosedTicketsRecord(1, $offset);
		$pid1 = $sub_record["kv_msi_profilefkid"];
		$pid2 = $sub_record["kv_msi_interested_on"];
		$rmId1 = $sub_record["kv_msi_client_rmid"];
		$rmId2 = $sub_record["kv_msi_interested_rmid"];
		$inid = $sub_record["kv_msi_id"];
		$sentById = $sub_record["sentby_ID"];
		$serviceDoneBy = "";
		if(!empty($sentById)) {
			$rmDetails = getstaffdetbyid($sentById);
			$serviceDoneBy = $rmDetails->username;
			if(empty($serviceDoneBy)){
			 $profile_details = $this->dashboard_model->get_primary_details($sentById);
            $serviceDoneBy = $profile_details['first_name'];
            }
		}
		$data['service_done_by'] = $serviceDoneBy;
		$data['profile_pic1']=$this->dashboard_model->get_profilepic_detailsADM($pid1);
        $data['primary_info1'] = $this->my_model->get_user_profile_id($pid1);        
        $data['profile_pic2']=$this->dashboard_model->get_profilepic_detailsADM($pid2);
        $data['primary_info2'] = $this->my_model->get_user_profile_id($pid2);
        $data['profile_1'] = $pid1;
        $data['profile_2'] = $pid2;
        $data['profile_inid'] = $inid;
        
        $data['rm_profile1'] = getstaffdetbyid($rmId1);
        $data['rm_profile2'] = getstaffdetbyid($rmId2);
        $data['prof_intdet'] = $this->emp_model->profinttrackdetbyprofids($pid1, $pid2);
        $data['rmnotes_1']=$this->emp_model->getrmnotesbyintid($data['profile_1'], $data['rm_profile1']->id, $data['profile_inid'], '1');
        $data['rmnotes_2']=$this->emp_model->getrmnotesbyintid($data['profile_2'], $data['rm_profile2']->id, $data['profile_inid'], '1');
		$data['user_data'] = $sub_record;
        $this->load->view('ajax_my_side_closed_tickets', $data);
	}
	
	public function mysidesinterest()
    {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        //echo '<pre>';print_r($_SESSION);exit;
        //echo $data['user_id'];exit;
        $data['user_data'] = $this->emp_model->mysidesinterest();
        //$emp_data = $this->emp_model->get_employees();
        //$data["users"] = $user_data["users"];
        //$data["employees"] = $emp_data["employees"];
        $data["title"] = getlangkeywords('mysidesinterest');
        //echo '<pre>';print_r($data);exit;
        $data['rm_image'] =  $this->emp_model->rm_image();

        $this->load->view($this->headerPage,$data);
        $this->load->view('mysidesinterest', $data);
        $this->load->view($this->footerPage);
    }
	
	public function freeprofticketexpiry()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['user_data'] = $this->emp_model->freeprofticketexpiry();
        $data["title"] = getlangkeywords('freeprofticketexpiry');
        $data['rm_image'] =  $this->emp_model->rm_image();

        $this->load->view($this->headerPage,$data);
        $this->load->view('freeprofticketexpiry', $data);
        $this->load->view($this->footerPage);
    }
    
    public function unpaidmembers()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['user_data'] = $this->emp_model->unpaidmembers();
        $data["title"] = getlangkeywords('unpaidmembers');
        $data['rm_image'] =  $this->emp_model->rm_image();


        $this->load->view($this->headerPage,$data);
        $this->load->view('unpaidmembers', $data);
        $this->load->view($this->footerPage);
    }
    
    
    public function noservicesincemonth()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['user_data'] = $this->emp_model->noservicesincemonth();
        $i=0;
       foreach($data['user_data'] as $row)
        {
            $data['user_data'][$i]['mobile'] = $this->encrypt_model->decryptField($row['mobile']);
            $i++;
        }
        $data["title"] = getlangkeywords('noservicesincemonth');
        $data['rm_image'] =  $this->emp_model->rm_image();


        $this->load->view($this->headerPage,$data);
        $this->load->view('noservicesincemonth', $data);
        $this->load->view($this->footerPage);
    }
    
    public function nearbyexpiryprofiles()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['user_data'] = $this->emp_model->nearbyexpiryprofiles();
        $data["title"] = getlangkeywords('nearbyexpiryprofiles');
        $data['rm_image'] =  $this->emp_model->rm_image();


        $this->load->view($this->headerPage,$data);
        $this->load->view('nearbyexpiryprofiles', $data);
        $this->load->view($this->footerPage);
    }
    public function freenewprofiles()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        //echo $this->session->userdata('user_id');exit;
        $data['user_data'] = $this->emp_model->freenewprofiles();
        $data["title"] = getlangkeywords('freenewprofiles');
        //echo '<pre>';print_r($data);exit;
        $data['rm_image'] =  $this->emp_model->rm_image();

        $this->load->view($this->headerPage,$data);
        $this->load->view('freenewprofiles', $data);
        $this->load->view($this->footerPage);
    }    
    
    /*public function settledprofiles()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['user_data'] = $this->emp_model->opposideclosetickets();
        $data["title"] = getlangkeywords('settled');
        //echo '<pre>';print_r($data);exit;
        $this->load->view($this->headerPage);
        $this->load->view('opposideclosetickets', $data);
        $this->load->view($this->footerPage);
        }*/
    
    public function mysidefollowupscloseticket()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['user_data'] = $this->emp_model->mysidefollowupscloseticket();
        $data["title"] = getlangkeywords('mysidefollowupscloseticket');
        //echo '<pre>';print_r($data);exit;
        $data['rm_image'] =  $this->emp_model->rm_image();


        $this->load->view($this->headerPage,$data);
        $this->load->view('mysidefollowupscloseticket', $data);
        $this->load->view($this->footerPage);
    }
   
    public function profile_assign()
    {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $user_data = $this->emp_model->get_un_paid_user_list();
        $emp_data = $this->emp_model->get_employees();
        $data["users"] = $user_data["users"];
        $data["employees"] = $emp_data["employees"];
        $data["title"] = "Profile List";
        $data['rm_image'] =  $this->emp_model->rm_image();
        $this->load->view($this->headerPage,$data);
        $this->load->view($this->viewPage, $data);
        $this->load->view($this->footerPage);
    }

    public function call_history()
    {
        $data['rm_image'] =  $this->emp_model->rm_image();
        $emp_id  = array();
        $emp_id["user_id"] = $this->session->userdata('user_id');
        //echo $emp_id["user_id"];exit;
        if ($emp_id["user_id"] != '') {
            $data['seluserid']=$this->input->get('userid');
            $user_data = $this->emp_model->get_allocated_profiles($emp_id["user_id"], $data['seluserid']);
            $data["users"] = $user_data["users"];
            $data["user_id"] = $emp_id["user_id"];
            $emp_data = $this->emp_model->get_employees();
            $data["employees"] = $emp_data["employees"];
            $data["title"] = "Call History";
            $data["type"] = "multiple";
            
            //echo '<pre>';print_r($data);exit;
            $this->load->view($this->headerPage,$data);
            $this->load->view('call_history', $data);
            $this->load->view($this->footerPage);
        } else {
            redirect('admin/login');
        }
    }

    public function marketing_reminders()
    {
        $data['rm_image'] =  $this->emp_model->rm_image();
        $emp_id  = array();
        $emp_id["user_id"] = $this->session->userdata('user_id');
        if ($emp_id["user_id"] != '') {
            $user_data = $this->emp_model->get_allocated_profiles($emp_id["user_id"]);
            $data["users"] = $user_data["users"];
            $data["user_id"] = $emp_id["user_id"];
            $emp_data = $this->emp_model->get_employees();
            $data["employees"] = $emp_data["employees"];
            $data["title"] = "Call History";
            $data["type"] = "multiple";
            $this->load->view($this->headerPage,$data);
            $this->load->view('marketing_reminders', $data);
            $this->load->view($this->footerPage);
        } else {
            redirect('admin/login');
        }
    }

    public function call_history_pf($id)
    {
        $emp_id  = array();
        $emp_id["user_id"] = $this->session->userdata('user_id');
        if ($emp_id["user_id"] != '') {
            $user_data = $this->emp_model->get_allocated_profiles($emp_id["user_id"]);
            $data["users"] = $user_data["users"];
            $data["user_id"] = $emp_id["user_id"];
            $emp_data = $this->emp_model->get_employees();
            $data["employees"] = $emp_data["employees"];
            $data["title"] = "Call History";
            $data["type"] = "single";
            $data["user_profile_id"] = $id;
            $data['rm_image'] =  $this->emp_model->rm_image();

            $this->load->view($this->headerPage,$data);
            $this->load->view('call_history', $data);
            $this->load->view($this->footerPage);
        } else {
            redirect('admin/login');
        }
    }

    // ws

    public function get_employees()
    {
        $data = array();
        $emp_data = $this->emp_model->get_employees();
        $data["employees"] = $emp_data["employees"];
        $result = array(
            "success" => "1",
            "data" => $data
        );
        echo json_encode($result);
    }

    public function deletesiblings()
    {
        $this->emp_model->deletesiblings($this->input->post('delid'), $this->input->post('deltype'));
    }

    public function get_registerby()
    {
        $rminfo = $this->emp_model->get_registerby($this->input->post('userid'));
        if ($rminfo->username) {
            echo json_encode(ucfirst($rminfo->username));
        } else {
            echo json_encode('Online');
        }
    }
    public function get_customers()
    {
        $data = array();
        $emp_data = $this->emp_model->get_employees();
        $data["employees"] = $emp_data["employees"];



        if (!isset($_POST["customer_id"])) {  
            $user_data = $this->emp_model->get_un_paid_user_list();
            $data["users"] = $user_data["users"];
        } else {  
            $customer_id = $_POST["customer_id"];
            $user_data = $this->emp_model->get_costomer_info_by_membership_id($customer_id);
            $data["users"] = $user_data["users"];
        }
        $result = array(
            "success" => "1",
            "data" => $data
        );
        echo json_encode($result);
    }

    public function get_user_info()
    {
        if (isset($_POST["user_id"])) {
            $user_id = $_POST["user_id"];
            $user_data = $this->emp_model->get_user_info($user_id);
            $i=0;
            foreach($user_data as $row)
            {
                $user_data[$i]["user_mobile"] = $this->encrypt_model->decryptField($row['user_mobile']);
                $user_data[$i]["father_mobile"] = $this->encrypt_model->decryptField($row['father_mobile']);
                $i++;
            }
            $result = array(
                "success" => "1",
                "data" => $user_data
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the user_ms_id"
            );
            echo json_encode($result);
        }
    }

    public function get_emp_associated_profiles()
    {
        if (isset($_POST["emp_id"])) {
            $emp_id = $_POST["emp_id"];
            $user_id = $_POST["user_id"];
            $user_data = $this->emp_model->get_allocated_profiles($emp_id, $user_id);
            $result = array(
                "success" => "1",
                "data" => $user_data
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the employee id"
            );
            echo json_encode($result);
        }
    }

    public function get_association_search()
    {
        if (isset($_POST["emp_id"]) && isset($_POST["app_status"]) && isset($_POST["dor_from"]) && isset($_POST["dor_to"])) {
            $emp_id = $_POST["emp_id"];
            $dor_from = $_POST["dor_from"];
            $dor_to = $_POST["dor_to"];
            $app_status = $_POST["app_status"];
			$profile_id = $_POST["profile_id"];
			$surname = $_POST["surname"];
			$firstname = $_POST["firstname"];
            $payment = $_POST["payment"];
            // print_r($payment);die;
            $user_data = $this->emp_model->get_association_search($emp_id, $dor_from, $dor_to, $app_status, $profile_id, $surname, $firstname,$payment);
            $result = array(
                "success" => "1",
                "data" => $user_data
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the employee id"
            );
            echo json_encode($result);
        }
    }

    public function get_market_reminder_search()
    {
        if (isset($_POST["emp_id"]) && isset($_POST["reminderType"]) && isset($_POST["dor_from"]) && isset($_POST["dor_to"])) {
            $emp_id = $_POST["emp_id"];
            $dor_from = $_POST["dor_from"];
            $dor_to = $_POST["dor_to"];
			$profile_id = $_POST["profile_id"];
			$surname = $_POST["surname"];
			$firstname = $_POST["firstname"];
            $reminderType = $_POST["reminderType"];
            $app_status = $_POST["app_status"];
            $user_data = $this->emp_model->get_market_reminder_search($emp_id, $dor_from, $dor_to, $reminderType, $app_status, $profile_id, $surname, $firstname);
            $result = array(
                "success" => "1",
                "data" => $user_data
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the employee id"
            );
            echo json_encode($result);
        }
    }




    public function save_customer_reg_fee()
    {
        if (isset($_POST["cust_profile_id"]) && isset($_POST['cust_reg_fee'])) {
            $cust_profile_id = $_POST["cust_profile_id"];
            $cust_reg_fee = $_POST["cust_reg_fee"];

            $user_data = $this->emp_model->save_cust_reg_fee($cust_profile_id, $cust_reg_fee);
            $result = array(
                "success" => "1"
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the cust_profile_id"
            );
            echo json_encode($result);
        }
    }

    public function save_customer_sa_fee()
    {
        if (isset($_POST["cust_profile_id"]) && isset($_POST['cust_sa_fee'])) {
            $cust_profile_id = $_POST["cust_profile_id"];
            $cust_sa_fee = $_POST["cust_sa_fee"];

            $user_data = $this->emp_model->save_cust_sa_fee($cust_profile_id, $cust_sa_fee);
            $result = array(
                "success" => "1"
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the cust_profile_id"
            );
            echo json_encode($result);
        }
    }

    public function save_call_log()
    {
        // print_r("deva");die;
        if (isset($_POST["cl_type"]) && isset($_POST['cl_success']) && isset($_POST['cl_description']) && isset($_POST['cl_by']) && isset($_POST['cust_id'])) {
            $cl_type = $_POST["cl_type"];
            $cl_success = $_POST["cl_success"];
            $cl_description = $_POST["cl_description"];
            $cl_by = $_POST["cl_by"];
            $cust_id = $_POST["cust_id"];
            $cl_service = $_POST["cl_service"];
            $user_data = $this->emp_model->save_cust_call_log($cust_id, $cl_type, $cl_success, $cl_description, $cl_by,$cl_service);
            $result = array(
                "success" => "1"
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the required parameters"
            );
            echo json_encode($result);
        }
    }

    public function get_call_log()
    {
        if (isset($_POST['cust_id'])) {
            $cust_id = $_POST["cust_id"];
            $user_data = $this->emp_model->get_call_log($cust_id);
            $result = array(
                "success" => "1",
                "data" => $user_data
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the cust_id"
            );
            echo json_encode($result);
        }
    }

    public function save_reminder()
    {
        if (isset($_POST['cust_id']) && isset($_POST['rem_date'])) {
            $cust_id = $_POST["cust_id"];
            $rem_date = $_POST["rem_date"];
            $reason = $_POST["reason"];
            // echo $cust_id, $rem_date;exit();
            $this->emp_model->save_reminder($cust_id, $rem_date,$reason);
            $result = array(
                "success" => "1"
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the cust_id"
            );
            echo json_encode($result);
        }
    }

    public function update_profile_owner()
    {
        if (isset($_POST['cust_id']) && isset($_POST['emp_id'])) {
            $cust_id = $_POST["cust_id"];
            $emp_id = $_POST["emp_id"];
            // print_r($cust_id);die;
            $this->emp_model->update_profile_owner($cust_id, $emp_id);
			$this->emp_model->update_customer_status($cust_id);
            $result = array(
                "success" => "1"
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the emp_id"
            );
            echo json_encode($result);
        }
    }

    // For Basic Detail Modal Popup data
    public function getBasicDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $data = $this->dashboard_model->getBasicDataForUpdate($userId);
        echo json_encode($data);
    }
    
    // For update basic detail
    public function basicDetailUpdate()
    {
        $id = $this->input->post('userId');
        $d = $this->input->post('date');
        $m = $this->input->post('month');
        $month_name = date("M", mktime(0, 0, 0, $m, 10));
        $y = $this->input->post('year');
        $dataPrimaryArr = array(
            'first_name'        => $this->input->post('fname'),
            'last_name'         => $this->input->post('lname'),
            'gender'            => $this->input->post('gender'),
            'date'              => $this->input->post('date'),
            'month'             => $month_name,
            'year'              => $this->input->post('year'),
            'dob'               => $y.'-'.$m.'-'.$d,
			'living_in'         => $this->input->post('living_in')
        );
		$heightcm = $this->dashboard_model->getHeightInCms($this->input->post('select_height'));
        $dataReligionArr = array(
            'marital_status'    => $this->input->post('marital_status'),
            'complexion'        => $this->input->post('complexion'),
            'height'            => $this->input->post('select_height'),
            'religion'          => $this->input->post('select_religion'),
            'mother_tounge'     => $this->input->post('select_tounge'),
            'caste'             => $this->input->post('select_caste'),
            'sub_caste'         => $this->input->post('sub_caste'),
            'dosham'            => $this->input->post('dosham'),
			'height_cm'			=>	$heightcm["height_in_cm"],
        );
       $res =  $this->dashboard_model->basicDetailUpdate($dataPrimaryArr, $dataReligionArr, $id);
        echo $res;
    }

    public function editeducdet()
    {
        $data['userid'] = $userId = $this->input->post('userid');
        $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();
        $data['edudet'] = $this->dashboard_model->education_info($userId);
        $data['eduotherdet'] = $this->dashboard_model->checkeducationDetailUpdate($userId);
        $data['special'] = $this->dashboard_model->special();
        // echo '<pre>';print_r($data['edudet']);exit;
        $this->load->view('editeducdet', $data);
        exit;
    }
    // For Education Detail Modal Popup data
    public function getEducationDataForUpdate()
    {
        $userId = $this->input->post('userid');
        $data = $this->dashboard_model->education_info($userId);
        
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }


    public function getProfessionDataForUpdate()
    {
        //echo 'hi';exit;
        $userId = $this->input->post('user_id');
        $data = $this->dashboard_model->checkeducationDetailUpdate($userId);
        //echo '<pre>';print_r($data);exit;
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }
    // For update education detail
    public function educationDetailUpdate()
    {
        $id = $this->input->post('userIdEdu');
        //echo $id;exit;
        $checkData =  $this->dashboard_model->checkeducationDetailUpdate($id);
        $heighst_education = $education_degree = $specialization = $university = $college = "";
		 if($this->input->post('select_education_1') != "") {
			 $heighst_education = $this->input->post("select_education_1");
			 $education_degree = $this->input->post("education_degree_1");
			 $specialization = $this->input->post("specialization_1");
			 $university = $this->input->post("university_1");
			 $college = $this->input->post("college_1");
		 } else if($this->input->post('highest_education_2') != "") {
			 $heighst_education = $this->input->post("highest_education_2");
			 $education_degree = $this->input->post("education_degree_2");
			 $specialization = $this->input->post("specialization_2");
			 $university = $this->input->post("university_2");
			 $college = $this->input->post("college_2");
		 } else if($this->input->post('highest_education_3') != "") {
			 $heighst_education = $this->input->post("highest_education_3");
			 $education_degree = $this->input->post("education_degree_3");
			 $specialization = $this->input->post("specialization_3");
			 $university = $this->input->post("university_3");
			 $college = $this->input->post("college_3");
		 } else if($this->input->post('highest_education_4') != "") {
			 $heighst_education = $this->input->post("highest_education_4");
			 $education_degree = $this->input->post("education_degree_4");
			 $specialization = $this->input->post("specialization_4");
			 $university = $this->input->post("university_4");
			 $college = $this->input->post("college_4");
		 } else {
			 $heighst_education = $this->input->post("txt_tenth");
			 $education_degree = $this->input->post("txt_tenth");
			 $specialization = $this->input->post("txt_tenthspec");
			 $university = $this->input->post("txt_tenthboard");
			 $college = $this->input->post("school");
		 }
       
        if (!empty($checkData)) {			
            $dataArr = array(
                'heighst_education' => $heighst_education,
				'education_degree' => $education_degree, 
				'specialization' => $specialization,
				'university' => $university,
				'college' => $college,
                'education_description'   => $this->input->post('education-details')
            );
            $res =  $this->dashboard_model->educationDetailUpdate($dataArr, $id);
            $this->dashboard_model->usereducdetinsert($id);
            echo $res;
        } else {
            $dataArr = array(
                'user_id'	=> $id,
                'heighst_education' => $heighst_education,
				'education_degree' => $education_degree, 
				'specialization' => $specialization,
				'university' => $university,
				'college' => $college,
                'education_description'   => $this->input->post('education-details'),
                'status'				  => 1,
                'created_time'		      => date('Y-m-d H:i:s')
            );
            $res1 =  $this->dashboard_model->educationDetailInsrt($dataArr);
            $this->dashboard_model->usereducdetinsert($id);
            echo $res1;
        }
    }

    // For update education detail
    public function proffesionDetailUpdate()
    {
        $id = $this->input->post('userIdPro');
        $checkData =  $this->dashboard_model->checkeducationDetailUpdate($id);
        // echo '<pre>'; print_r($checkData);exit();
        if (!empty($checkData)) {
            $dataArr = array(
                'employee_in'       	=> $this->input->post('employee_in'),
                'occupation'        	=> $this->input->post('profession'),
                'currency'        		=> $this->input->post('currency'),
                'annual_income'     	=> $this->input->post('monthlySalary'),
                'company'        		=> $this->input->post('companys'),
                'about_profession'  	=> $this->input->post('about_profession'),
                'country'				=> $this->input->post('workCountry'),
                'state'  				=> ($this->input->post('workState')=='Select State') ? '' : $this->input->post('workState'),
                // 'district_working_in' 	=> $this->input->post('workDistrict'),
                'city' 					=> $this->input->post('workCity'),
                'visatype'         		=> $this->input->post('visatype'),
                'residing-since'    	=> $this->input->post('residing-since'),
                'arrival-date'      	=> $this->input->post('arrival-date'),
                'departure-date'    	=> $this->input->post('departure-date'),
                'about_me'              => $this->input->post('about_me')
            );
            $res =  $this->dashboard_model->proffesionDetailUpdate($dataArr, $id);
            echo $res;
        } else {
            $dataArr = array(
                'user_id'				=> $id,
                'employee_in'       	=> $this->input->post('employee_in'),
                'occupation'        	=> $this->input->post('profession'),
                'currency'        		=> $this->input->post('currency'),
                'annual_income'     	=> $this->input->post('monthlySalary'),
                'company'        		=> $this->input->post('companys'),
                'about_profession'  	=> $this->input->post('about_profession'),
                'country'				=> $this->input->post('workCountry'),
                'state'  				=>($this->input->post('workState')=='Select State') ? '' : $this->input->post('workState'),
                // 'district_working_in' 	=> $this->input->post('workDistrict'),
                'city' 					=> $this->input->post('workCity'),
                'visatype'         		=> $this->input->post('visatype'),
                'residing-since'    	=> $this->input->post('residing-since'),
                'arrival-date'      	=> $this->input->post('arrival-date'),
                'departure-date'    	=> $this->input->post('departure-date'),
                'status'				=> 1,
                'created_time'		    => date('Y-m-d H:i:s'),
                'about_me'              => $this->input->post('about_me')
            );
            $res1 =  $this->dashboard_model->proffesionDetailInsert($dataArr, $id);
            echo $res1;
        }
    }

    // For Property Detail Modal Popup data
    public function getPropertyDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $data = $this->dashboard_model->getPropertyDataForUpdate($userId);		
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    // For update property detail
    public function propertyDetailUpdate()
    {
        $id = $this->input->post('userId');
        $checkData =  $this->dashboard_model->checkpropertyDetailUpdate($id);
        // print_r($checkData);exit();
        if (!empty($checkData)) {
            $dataArr = array(
                'Property_type'     => $this->input->post('Property_type'),
                'property_value'    => $this->input->post('property_value'),
                'property_Desc'     => $this->input->post('property_Desc')
            );
            $res =  $this->dashboard_model->propertyDetailUpdate($dataArr, $id);
            echo $res;
        } else {
            $dataArr = array(
                'ms_id'				=> $id,
                'Property_type'     => $this->input->post('Property_type'),
                'property_value'    => $this->input->post('property_value'),
                'property_Desc'     => $this->input->post('property_Desc'),
                'created_date'		=> date('Y-m-d H:i:s')
            );
            $res1 =  $this->dashboard_model->propertyDetailInsert($dataArr, $id);
            echo $res1;
        }
    }

    public function preferenceUpdate()
    {
        $data =$this->input->post();
        if (isset($data['marital_status'])) {
            $marital 	= implode(", ", $data['marital_status']);
        } else {
            $marital 	= ""	;
        }
        if (isset($data['education_level'])) {
            $eduction 	= implode(", ", $data['education_level']);
        } else {
            $eduction 	= ""	;
        }
        if (isset($data['caste'])) {
            $caste 		= implode(", ", $data['caste']);
        } else {
            $caste 	= ""	;
        }
        if (isset($data['star'])) {
            $star 		= implode(", ", $data['star']);
        } else {
            $star 	= ""	;
        }
        if (isset($data['mother_tongue'])) {
            $motherT    = implode(", ", $data['mother_tongue']);
        } else {
            $motherT 	= ""	;
        }
        if (isset($data['profession'])) {
            $profession = implode(", ", $data['profession']);
        } else {
            $profession 	= ""	;
        }
        if (isset($data['country'])) {
            $country    = implode(", ", $data['country']);
        } else {
            $country 	= ""	;
        }
        if (isset($data['employee_in'])) {
            $employeeIn = implode(", ", $data['employee_in']);
        } else {
            $employeeIn 	= ""	;
        }

        $id = $this->input->post('userId');
        $checkData =  $this->dashboard_model->checkpreferenceData($id);
		$heightfrom_cms=$this->dashboard_model->getHeightInCms($data['height_from']);
		$heightto_cms=$this->dashboard_model->getHeightInCms($data['height_to']);
        if (!empty($checkData)) {
            $dataArr = array(
                'p_height_from'     => $data['height_from'],
                'p_height_to'    	=> $data['height_to'],
				'p_heightfrom_cms'  => $heightfrom_cms["height_in_cm"],
                'p_heightto_cms'    => $heightto_cms["height_in_cm"],
                'p_age_from'     	=> $data['age_from'],
                'p_age_to'     		=> $data['age_to'],
                'p_marital_status'  => $marital,
                'p_mother_tongue'   => $motherT,
                'p_caste'     		=> $caste,
                'p_star'     		=> $star,
                'p_education'    	=> $eduction,
                'p_profession'     	=> $profession,
                'p_country'     	=> $country,
                'employee_in'     	=> $employeeIn,
                'p_district'     	=> ($data['txt_district']) ? $data['txt_district'] : '',
                'p_city'     	=> ($data['txt_city']) ? $data['txt_city'] : '',
				'property_from'     	=> $data['property_from'],
				'property_to'     	=> $data['property_to'],
                'p_about'=> ($data['txt_about']) ? base64_encode($data['txt_about']) : ''
            );
            $res =  $this->dashboard_model->preferenceDetailUpdate($dataArr, $id);
            echo $res;
        } else {
            $dataArr = array(
                'ms_id'				=> $id,
                'p_height_from'     => $data['height_from'],
                'p_height_to'    	=> $data['height_to'],
                'p_age_from'     	=> $data['age_from'],
                'p_age_to'     		=> $data['age_to'],
                'p_marital_status'  => $marital,
                'p_mother_tongue'   => $motherT,
                'p_caste'     		=> $caste,
                'p_star'     		=> $star,
                'p_education'    	=> $eduction,
                'p_profession'     	=> $profession,
                'p_country'     	=> $country,
                'employee_in'     	=> $employeeIn,
                'p_district'     	=> ($data['txt_district']) ? $data['txt_district'] : '',
                'p_city'     	=> ($data['txt_city']) ? $data['txt_city'] : '',
				'property_from'     	=> $data['property_from'],
				'property_to'     	=> $data['property_to'],
                'p_about'=> ($data['txt_about']) ? base64_encode($data['txt_about']) : ''
            );
            $res1 =  $this->dashboard_model->preferenceDetailInsert($dataArr, $id);
            echo $res1;
        }
    }

    
    // For Parents Detail Modal Popup data
    public function getParentsDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $data = $this->dashboard_model->getParentsDataForUpdate($userId);
         $this->encrypt_model->encryptionInitialize();
        $data['father_mobile'] = $this->encrypt_model->decryptField($data['father_mobile']);
        $data['father_email'] = $this->encrypt_model->decryptField($data['father_email']); 
        $data['mother_mobile'] = $this->encrypt_model->decryptField($data['mother_mobile']);
        $data['mother_email'] = $this->encrypt_model->decryptField($data['mother_email']); 
        
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    // For update education detail
    public function parentsDetailUpdate()
    {
        $id = $this->input->post('userId');//exit;
        $this->encrypt_model->encryptionInitialize();
        $father_mobile = $this->encrypt_model->encryptField($this->input->post('father_mobile'));
        $father_email = $this->encrypt_model->encryptField($this->input->post('father_email')); 
        $mother_mobile = $this->encrypt_model->encryptField($this->input->post('mother_mobile'));
        $mother_email = $this->encrypt_model->encryptField($this->input->post('mother_email')); 
        $checkData =  $this->dashboard_model->checkparentsDetailUpdate($id);
        // echo '<pre>';  print_r($_POST);exit();
        if (!empty($checkData)) {
            $dataArr = array(
                'father_name'                   => $this->input->post('father_name'),
                'father_education'              => $this->input->post('father_education'),
                'father_profession'             => $this->input->post('father_profession'),
                'father_mobile'                 => $father_mobile,
                'father_email'                  => $father_email,
                'fathers_father_name'           => $this->input->post('fathers_father_name'),
                'father_mother_name'           => $this->input->post('father_mother_name'),
                'fathers_father_state'   		=> $this->input->post('fathers_father_state'),
                'fathers_father_district'   	=> $this->input->post('fathers_father_district'),
                'fathers_father_native_place'   => $this->input->post('fathers_father_native_place'),
                'mother_name'                   => $this->input->post('mother_name'),
                'mother_education'              => $this->input->post('mother_education'),
                'mother_profession'             => $this->input->post('mother_profession'),
                'mother_mobile'                 => $mother_mobile,
                'mother_email'                  => $mother_email,
                'mothers_father_name'           => $this->input->post('mothers_father_name'),
                'mother_mother_name'            => $this->input->post('mother_mother_name'),
                'mothers_father_state'   		=> $this->input->post('mothers_father_state'),
                'mothers_father_district'   	=> $this->input->post('mothers_father_district'),
                'mothers_father_native_place'   => $this->input->post('mothers_father_native_place')
                
                ,'father_semiprof'=> $this->input->post('sel_semiprof')
                ,'father_semiprof_det'=> $this->input->post('father_semiprofession')
                ,'father_natplace_d'=> ($this->input->post('fathers_father_native_place_disp')) ? $this->input->post('fathers_father_native_place_disp') : '0'
                ,'mother_natplace_d'=> ($this->input->post('mothers_father_native_place_disp')) ? $this->input->post('mothers_father_native_place_disp') : '0'
                ,'mother_semiprof'=> $this->input->post('sel_mothersemiprof')
                ,'mother_semiprof_det'=> $this->input->post('father_mothersemiprofession')
                
            );
            
            $checkContactData = $this->dashboard_model->checkContactDetails($id);
            if (!empty($checkContactData)) {
            $dataContactArr = array(
                'city'     	 		=> $this->input->post('parents_current_city'),
                'updated_at'		=> date('Y-m-d H:i:s'),
                'updated_by'		=> $this->session->userdata('uname'),
            );
            $this->db->where('user_id', $id);
            $res1 = $this->db->update('tbl_contact_info', $dataContactArr);
               
            //$res =  $this->dashboard_model->contactCityDetailUpdate($dataContactArr,$id);
            } else {
            $dataContactArr = array(
                'user_id'         	=> $this->input->post('userId'),
                'city'     	 		=> $this->input->post('parents_current_city'),
                'created_at'		=> date('Y-m-d H:i:s'),
                'created_by'		=> $this->session->userdata('uname'),
            );
            $res1 = $this->db->insert('tbl_contact_info', $dataContactArr);
            //$res =  $this->dashboard_model->contactCityDetailsInsert($dataContactArr,$id);
            }
            
            $res =  $this->dashboard_model->parentsDetailUpdate($dataArr, $id);
            echo $res;
        } else {
            $dataArr = array(
                'user_id'						=> $id,
                'father_name'                   => $this->input->post('father_name'),
                'father_education'              => $this->input->post('father_education'),
                'father_profession'             => $this->input->post('father_profession'),
                'father_mobile'                 => $father_mobile,
                'father_email'                  => $father_email,
                'fathers_father_name'           => $this->input->post('fathers_father_name'),
                'father_mother_name'           =>$this->input->post('father_mother_name'),
                'fathers_father_state'   		=> $this->input->post('fathers_father_state'),
                'fathers_father_district'   	=> $this->input->post('fathers_father_district'),
                'fathers_father_native_place'   => $this->input->post('fathers_father_native_place'),
                'mother_name'                   => $this->input->post('mother_name'),
                'mother_education'              => $this->input->post('mother_education'),
                'mother_profession'             => $this->input->post('mother_profession'),
                'mother_mobile'                 => $mother_mobile,
                'mother_email'                  => $mother_email,
                'mothers_father_name'           => $this->input->post('mothers_father_name'),
                'mother_mother_name'            => $this->input->post('mother_mother_name'),
                'mothers_father_state'   		=> $this->input->post('mothers_father_state'),
                'mothers_father_district'   	=> $this->input->post('mothers_father_district'),
                'mothers_father_native_place'   => $this->input->post('mothers_father_native_place'),
                'status'						=> 1,
                'father_semiprof'=> $this->input->post('sel_semiprof'),
                'father_semiprof_det'=> $this->input->post('father_semiprofession'),
                'father_natplace_d'=> ($this->input->post('fathers_father_native_place_disp')) ? $this->input->post('fathers_father_native_place_disp') : '0',
                'mother_natplace_d'=> ($this->input->post('mothers_father_native_place_disp')) ? $this->input->post('mothers_father_native_place_disp') : '0',
                'mother_semiprof'=> $this->input->post('sel_mothersemiprof'),
                'mother_semiprof_det'=> $this->input->post('father_mothersemiprofession')
            );
            $res1 =  $this->dashboard_model->parentsDetailInsert($dataArr, $id);
            echo $res1;
        }
    }

    // For sibling Detail Modal Popup data
    public function getSiblingDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $data = $this->dashboard_model->getSiblingDataForUpdate($userId);
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    // For update sibling detail
    public function siblingsDetailUpdate()
    {
        $id = $this->input->post('userId');
        $checkData =  $this->dashboard_model->checksiblingsDetailUpdate($id);
        // print_r($checkData);exit();
        if (!empty($checkData)) {
            $dataArr = array(
                'no_of_brothers'             => $this->input->post('no_of_brothers'),
                'no_of_elder_brothers'     	 => $this->input->post('no_of_elder_brothers'),
                'no_of_younger_brothers'     => $this->input->post('no_of_younger_brothers'),
                'no_of_sisters'              => $this->input->post('no_of_sisters'),
                'no_of_elder_sisters'        => $this->input->post('no_of_elder_sisters'),
                'no_of_younger_sisters'      => $this->input->post('no_of_younger_sisters')
            );
            $res =  $this->dashboard_model->siblingsDetailUpdate($dataArr, $id);
            echo $res;
        } else {
            $dataArr = array(
                'user_id'					 => $id,
                'no_of_brothers'             => $this->input->post('no_of_brothers'),
                'no_of_elder_brothers'     	 => $this->input->post('no_of_elder_brothers'),
                'no_of_younger_brothers'     => $this->input->post('no_of_younger_brothers'),
                'no_of_sisters'              => $this->input->post('no_of_sisters'),
                'no_of_elder_sisters'        => $this->input->post('no_of_elder_sisters'),
                'no_of_younger_sisters'      => $this->input->post('no_of_younger_sisters')
            );
            $res1 =  $this->dashboard_model->siblingsDetailInsert($dataArr, $id);
            echo $res1;
        }
    }

    // For update parents sibling detail
    public function ParentsiblingsDetailUpdate()
    {
        $id = $this->input->post('userId');
        $checkData =  $this->dashboard_model->checkParentsiblingsDetailUpdate($id);
        // print_r($checkData);exit();
        if (!empty($checkData)) {
            $dataArr = array(
                'no_father_siblings'         => $this->input->post('no_father_siblings'),
                'no_of_father_brother'     	 => $this->input->post('no_of_father_brother'),
                'no_of_father_sister'     	 => $this->input->post('no_of_father_sister'),
                'no_mother_siblings'         => $this->input->post('no_mother_siblings'),
                'no_of_mother_brother'       => $this->input->post('no_of_mother_brother'),
                'no_of_mother_sister'      	 => $this->input->post('no_of_mother_sister'),
                'updated_on'				 => date('Y-m-d H:i:s')
            );
            $res =  $this->dashboard_model->ParentsiblingsDetailUpdate($dataArr, $id);
            echo $res;
        } else {
            $dataArr = array(
                'user_id'					 => $id,
                'no_father_siblings'         => $this->input->post('no_father_siblings'),
                'no_of_father_brother'     	 => $this->input->post('no_of_father_brother'),
                'no_of_father_sister'     	 => $this->input->post('no_of_father_sister'),
                'no_mother_siblings'         => $this->input->post('no_mother_siblings'),
                'no_of_mother_brother'       => $this->input->post('no_of_mother_brother'),
                'no_of_mother_sister'      	 => $this->input->post('no_of_mother_sister'),
                'registered_on'				 => date('Y-m-d H:i:s')
            );
            $res1 =  $this->dashboard_model->ParentsiblingsDetailInsert($dataArr, $id);
            echo $res1;
        }
    }

    // For relatives Detail Modal Popup data
    public function getRelativesDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $data = $this->dashboard_model->getRelativesDataForUpdate($userId);
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    // For relatives sister delete Modal Popup data
    public function deletesisterRelativesData()
    {
        $userId = $this->input->post('id');
        $data = $this->dashboard_model->deletesisterRelativesData($userId);
        echo $data;
    }

    // For relatives brother delete Modal Popup data
    public function deletebrotherRelativesData()
    {
        $userId = $this->input->post('id');
        $data = $this->dashboard_model->deletebrotherRelativesData($userId);
        echo $data;
    }

    public function getPartnerpreferenceDataForUpdate()
    {
        $user_id = $this->input->post('user_id');
        $data = $this->dashboard_model->get_preference_data_ADM($user_id);
        echo json_encode($data, 1);
    }

    public function getdegreeUser()
    {
        $h_id =	$this->input->post('valu');
        $degrees = $this->dashboard_model->get_all_degrees_ajax_user($h_id);
        
        $selBox ='<option value="">Select Education First</option>';
        foreach ($degrees as $key => $value) {
            $sel=($this->input->post('seldeg')==$value['educationdegree']) ? 'selected="selected"' : '';
            $selBox .= '<option value="'.$value['educationdegree'].'"  '.$sel.'>'.$value['educationdegree'].'</option>';
        }
        echo $selBox;
    }

    public function getsubcastes()
    {
        $caste =	$this->input->post('valu');
        $castes = $this->dashboard_model->get_all_subcastes_ajax($caste);
        $selBox ='<option value="">---Select Subcaste---</option>';
        foreach ($castes as $key => $value) {
            $selBox .= '<option value="'.$value['subcaste'].'">'.$value['subcaste'].'</option>';
        }
        echo $selBox;
    }

    public function getspecializationUser()
    {
        $h_id =	$this->input->post('valu');
        $hihgedu =	$this->input->post('hedid');
        $specialization = $this->dashboard_model->get_all_specialization_ajax_user($h_id, $hihgedu);
        $selBox ='<option value="">Select Degree First</option>';
        foreach ($specialization as $key => $value) {
            $sel=($this->input->post('seldeg')==$value['specialization']) ? 'selected="selected"' : '';
            $selBox .= '<option value="'.$value['specialization'].'" '.$sel.'>'.$value['specialization'].'</option>';
        }
        echo $selBox;
    }

    public function getstatesADM()
    {
        $country_id =	$this->input->post('valu');
        $states = $this->dashboard_model->get_all_states_ajax($country_id);
        $selBox ='<option value="">Select States</option>';
        foreach ($states as $key => $value) {
            $selBox .= '<option value="'.$value['state'].'">'.$value['state'].'</option>';
        }
        echo $selBox;
    }

    public function getdistrictsADM()
    {
        $state_id =    $this->input->post('valu');
        // echo $state_id;exit();
        $districts = $this->dashboard_model->get_all_districts_ajaxADM($state_id);
        $selBox = '<option value="">Select District</option>';
        foreach ($districts as $key => $value) {
            $selBox .= '<option value="' . $value['district'] . '">' . $value['district'] . '</option>';
        }
        echo $selBox;
    }

    // For sibling Detail Modal Popup data
    public function getSistersDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $Id = $this->input->post('id');
        $data = $this->dashboard_model->getSistersDataForUpdate($userId, $Id);
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    // For parents sister sibling Detail Modal Popup data
    public function getParentsSistersDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $Id = $this->input->post('id');
        $data = $this->dashboard_model->getParentsSistersDataForUpdate($userId, $Id);
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    public function sisterDetailsUpdate()
    {
        $id = $this->input->post('userIds');
        $sisid = $this->input->post('sisid');
        $dataArr = array(
            'sister_type'         		 => $this->input->post('sister_type'),
            'sister_name'         		 => $this->input->post('sister_name'),
            'sister_education'           => $this->input->post('sister_education'),
            'sister_profession'  		 => $this->input->post('sister_profession'),
            'sister_joblocation'     	 => $this->input->post('sister_joblocation'),
            'sister_mobile'          	 => $this->input->post('sister_mobile'),
            'sister_email'           	 => $this->input->post('sister_email'),
            'married_type'     			 => $this->input->post('married_type'),
            'husband_name'  			 => $this->input->post('sister_husband_name'),
            'husband_education'          => $this->input->post('sister_husband_education'),
            'husband_profession_category'=> $this->input->post('ister_husband_profession_category'),
            'sister_husband_designation' => $this->input->post('sister_husband_designation'),
            'husband_joblocation'  		 => $this->input->post('sister_husband_joblocation'),
            'husband_father_contact'     => $this->input->post('sister_husband_father_contact'),
            'husband_father_nativeplace'  => $this->input->post('sister_husband_father_nativeplace'),
            'updated_at'				 => date('Y-m-d H:i:s'),
            'updated_by'				 => $this->session->userdata('uname'),
        );
        $res =  $this->dashboard_model->sisterDetailsUpdate($dataArr, $id, $sisid);
        echo $res;
    }

    // To update sister details
    public function parentsisterDetailsUpdate()
    {
        $id = $this->input->post('userIds');
        $sisid = $this->input->post('sisid');
        $dataArr = array(
            'sister_of'          => $this->input->post('sister_ofup'),
            'sister_type'        => $this->input->post('sister_typeup'),
            'sister_name'        => $this->input->post('sister_nameup'),
            'husband_name'       => $this->input->post('sister_husband_nameup'),
            'education'  		 => $this->input->post('sister_husband_educationup'),
            'profession'     	 => $this->input->post('sister_husband_professionup'),
            'state'          	 => $this->input->post('sister_state_up'),
            'district'           => $this->input->post('sister_district_up'),
            'native_place'     	 => $this->input->post('sister_nativeplaceup'),
            'contact_number'  	 => $this->input->post('sister_contactup'),
            'current_location'   => $this->input->post('sister_locationup'),
            'updated_at'	     => date('Y-m-d H:i:s'),
            'updated_by'		 => $this->session->userdata('uname'),
        );
        $res =  $this->dashboard_model->parentsisterDetailsUpdate($dataArr, $id, $sisid);
        echo $res;
    }

    public function sisterDetailsAdd()
    {
        $dataArr = array(
            'user_id'         		 	 => $this->input->post('userIdsadd'),
            'sister_type'         		 => $this->input->post('sister_typeadd'),
            'sister_name'         		 => $this->input->post('sister_nameadd'),
            'sister_education'           => $this->input->post('sister_educationadd'),
            'sister_profession'  		 => $this->input->post('sister_professionadd'),
            'sister_joblocation'     	 => $this->input->post('sister_joblocationadd'),
            'sister_mobile'          	 => $this->input->post('sister_mobileadd'),
            'sister_email'           	 => $this->input->post('sister_emailadd'),
            'married_type'     			 => $this->input->post('married_typeadd'),
            'husband_name'  			 => $this->input->post('sister_husband_nameadd'),
            'husband_education'          => $this->input->post('sister_husband_educationadd'),
            'husband_profession_category'=> $this->input->post('sister_husband_profession_categoryadd'),
            'sister_husband_designation' => $this->input->post('sister_husband_designationadd'),
            'husband_joblocation'  		 => $this->input->post('sister_husband_joblocationadd'),
            'husband_father_contact'     => $this->input->post('sister_husband_father_contactadd'),
            'husband_father_nativeplace'  => $this->input->post('sister_husband_father_nativeplaceadd'),
            'created_at'				 => date('Y-m-d H:i:s'),
            'created_at'				 => $this->session->userdata('uname'),
            'status'					 => 1
        );
        $res =  $this->dashboard_model->sisterDetailsInsert($dataArr);
        echo $res;
    }

    // Parent sister detail add
    public function ParentssisterDetailsAdd()
    {
        $dataArr = array(
            'user_id'         	 => $this->input->post('userIdsadd'),
            'sister_of'          => $this->input->post('sister_ofadd'),
            'sister_type'        => $this->input->post('sister_typeadd'),
            'sister_name'        => $this->input->post('sister_nameadd'),
            'husband_name'       => $this->input->post('sister_husband_nameadd'),
            'education'  		 => $this->input->post('sister_husband_educationadd'),
            'profession'     	 => $this->input->post('sister_husband_professionadd'),
            'state'          	 => $this->input->post('sister_state_add'),
            'district'           => $this->input->post('sister_district_add'),
            'native_place'     	 => $this->input->post('sister_nativeplaceadd'),
            'contact_number'  	 => $this->input->post('sister_contactadd'),
            'current_location'   => $this->input->post('sister_locationadd'),
            'created_at'		 => date('Y-m-d H:i:s'),
            'created_at'		 => $this->session->userdata('uname'),
            'status'			 => 1
        );
        $res =  $this->dashboard_model->ParentsisterDetailsInsert($dataArr);
        echo $res;
    }

    public function brotherDetailsAdd()
    {
        $dataArr = array(
            'user_id'         		 	 => $this->input->post('brotherIdsadd'),
            'brother_type'         		 => $this->input->post('brother_typeadd'),
            'brother_name'         		 => $this->input->post('brother_nameadd'),
            'brother_education'          => $this->input->post('brother_educationadd'),
            'brother_profession'  		 => $this->input->post('brother_professionadd'),
            'brother_joblocation'     	 => $this->input->post('brother_joblocationadd'),
            'brother_mobile'          	 => $this->input->post('brother_mobileadd'),
            'brother_email'           	 => $this->input->post('brother_emailadd'),
            'married_type'     			 => $this->input->post('bro_married_typeadd'),
            'wife_name'  			 	 => $this->input->post('brother_wife_nameadd'),
            'wife_education'             => $this->input->post('brother_wife_educationadd'),
            'wife_profession_category'	 => $this->input->post('brother_wife_profession_categoryadd'),
            'brother_wife_designation' 	 => $this->input->post('brother_wife_designationadd'),
            'wife_joblocation'  		 => $this->input->post('brother_wife_joblocationadd'),
            'wife_father_contact'      	 => $this->input->post('brother_wife_father_contactadd'),
            'wife_father_nativeplace'  	 => $this->input->post('brother_wife_father_nativeplaceadd'),
            'created_at'				 => date('Y-m-d H:i:s'),
            'created_by'				 => $this->session->userdata('uname'),
            'status'					 => 1
        );
        $res =  $this->dashboard_model->brotherDetailsInsert($dataArr);
        echo $res;
    }

    // to add parents brother detail
    public function ParentsbrotherDetailsAdd()
    {
        $dataArr = array(
            'user_id'         		 	 => $this->input->post('brotherIdsadd'),
            'brother_of'         		 => $this->input->post('brother_ofadd'),
            'brother_type'         		 => $this->input->post('brother_typeadd'),
            'brother_name'         		 => $this->input->post('brother_nameadd'),
            'brother_education'          => $this->input->post('brother_educationadd'),
            'brother_profession'  		 => $this->input->post('brother_professionadd'),
            'brother_mobile'     	 	 => $this->input->post('brother_mobileadd'),
            'current_location'         	 => $this->input->post('current_location'),
            'created_at'				 => date('Y-m-d H:i:s'),
            'created_by'				 => $this->session->userdata('uname'),
            'status'					 => 1
        );
        $res =  $this->dashboard_model->ParentsbrotherDetailsAdd($dataArr);
        echo $res;
    }

    // For brother Detail Modal Popup data
    public function getBrotherDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $Id = $this->input->post('id');
        $data = $this->dashboard_model->getBrotherDataForUpdate($userId, $Id);
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    // For parents brother Detail Modal Popup data
    public function getparentsBrotherDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $Id = $this->input->post('id');
        $data = $this->dashboard_model->getparentsBrotherDataForUpdate($userId, $Id);
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    public function brotherDetailsUpdate()
    {
        $userid = $this->input->post('brotheruserIds');
        $id = $this->input->post('broid');
        $dataArr = array(
            'brother_type'         		 => $this->input->post('brother_type'),
            'brother_name'         		 => $this->input->post('brother_name'),
            'brother_education'          => $this->input->post('brother_education'),
            'brother_profession'  		 => $this->input->post('brother_profession'),
            'brother_joblocation'     	 => $this->input->post('brother_joblocation'),
            'brother_mobile'          	 => $this->input->post('brother_mobile'),
            'brother_email'           	 => $this->input->post('brother_email'),
            'married_type'     			 => $this->input->post('brother_married_type'),
            'wife_name'  			 	 => $this->input->post('brother_wife_name'),
            'wife_education'          	 => $this->input->post('brother_wife_education'),
            'wife_profession_category'	 => $this->input->post('brohter_wife_profession_category'),
            'brother_wife_designation' 	 => $this->input->post('brother_wife_designation'),
            'wife_joblocation'  		 => $this->input->post('brother_wife_joblocation'),
            'wife_father_contact'     	 => $this->input->post('brother_wife_father_contact'),
            'wife_father_nativeplace'  	 => $this->input->post('brother_wife_father_nativeplace'),
            'updated_at'				 => date('Y-m-d H:i:s'),
            'updated_by'				 => $this->session->userdata('uname'),
        );
        $res =  $this->dashboard_model->brotherDetailsUpdate($dataArr, $userid, $id);
        echo $res;
    }

    // For parents brother update
    public function parentsbrotherDetailsUpdate()
    {
        $userid = $this->input->post('brotheruserIds');
        $id = $this->input->post('broid');
        $dataArr = array(
            'brother_of'         		=> $this->input->post('brother_ofup'),
            'brother_type'         		=> $this->input->post('brother_typeup'),
            'brother_name'         		=> $this->input->post('brother_nameup'),
            'brother_education'         => $this->input->post('brother_educationup'),
            'brother_profession'  		=> $this->input->post('brother_professionup'),
            'brother_mobile'     	 	=> $this->input->post('brother_mobileup'),
            'current_location'         	=> $this->input->post('current_locationup'),
            'updated_at'				=> date('Y-m-d H:i:s'),
            'updated_by'				=> $this->session->userdata('uname'),
        );
        $res =  $this->dashboard_model->parentsbrotherDetailsUpdate($dataArr, $userid, $id);
        echo $res;
    }

    // For Contact Detail Modal Popup data
    public function getContactDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $data = $this->dashboard_model->getContactDataForUpdate($userId);
       // print_r($data);exit;
         $this->encrypt_model->encryptionInitialize();
        $data['mobile'] = $this->encrypt_model->decryptField($data['mobile']);
        $data['email'] = $this->encrypt_model->decryptField($data['email']); 
        
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    public function contactDetailUpdate()
    {
        $userid = $this->input->post('userId');
       // $this->encrypt_model->encryptionInitialize();
        $mobile = $this->encrypt_model->encryptField($this->input->post('contact_no'));
        $email = $this->encrypt_model->encryptField($this->input->post('email')); 
        $hash_mobile = $this->encrypt_model->hashInput($this->input->post('contact_no'));
        $hash_email = $this->encrypt_model->hashInput($this->input->post('email')); 
         $count = 0; 
         $rm_name = $this->input->post('rm_name');

         $a = $this->input->post('contact_exchaged'); 
         $b = $this->input->post('no_of_match_makings'); 
         if(!empty($a) || !empty($b)){
            $count = 1;
         }
  
        $Arr = $this->dashboard_model->checkContactDetails($userid);
        if (!empty($Arr)) {
            $dataArr = array(
                'house_no'         	=> $this->input->post('house_no'),
                'street_name'       => $this->input->post('street_name'),
                'area_name'         => $this->input->post('area_name'),
                'land_mark'  		=> $this->input->post('land_mark'),
                'city'     	 		=> $this->input->post('city'),
                'district'          => $this->input->post('district'),
                'updated_at'		=> date('Y-m-d H:i:s'),
                'updated_by'		=> $this->session->userdata('uname'),
            );
               
            $priInfoArr = array(
              
                'mobile'         	=> $mobile,
                'email'       		=> $email,
                'hash_mobile'       => $hash_mobile,
                'hash_email'        => $hash_email,
                'contact_exchaged'          => $this->input->post('contact_exchaged'),
                'no_of_match_makings'          => $this->input->post('no_of_match_makings'),
                'comments'          => $this->input->post('comments')
            );
            $empreport = array(
              
             
                'contact_exchaged'          => $this->input->post('contact_exchaged'),
                'no_of_match_makings'          => $this->input->post('no_of_match_makings'),
                'contact_exchaged_date'      => $this->input->post('contact_exchaged_date'),
                'no_of_match_makings_date'   =>  $this->input->post('no_of_match_makings_date'),
                'rm_name'                     => $rm_name,
                'user_id'               => $userid
            );

            $res =  $this->dashboard_model->contactDetailUpdate($dataArr, $priInfoArr, $userid,$empreport,$count);
        } else {
            $dataArr = array(
                'user_id'         	=> $this->input->post('userId'),
                'house_no'         	=> $this->input->post('house_no'),
                'street_name'       => $this->input->post('street_name'),
                'area_name'         => $this->input->post('area_name'),
                'land_mark'  		=> $this->input->post('land_mark'),
                'city'     	 		=> $this->input->post('city'),
                'district'          => $this->input->post('district'),
                'contact_exchanged'          => $this->input->post('contact_exchaged'),
                'no_of_match_makings'          => $this->input->post('no_of_match_makings'),
                'comments'          => $this->input->post('comments'),
                'created_at'		=> date('Y-m-d H:i:s'),
                'created_by'		=> $this->session->userdata('uname'),
            );

            $priInfoArr = array(
                 'mobile'         	=> $mobile,
                 'email'       		=> $email,
                 'hash_mobile'       => $hash_mobile,
                 'hash_email'        => $hash_email,
                 'contact_exchanged'          => $this->input->post('contact_exchaged'),
                'no_of_match_makings'          => $this->input->post('no_of_match_makings'),
                'comments'          => $this->input->post('comments')
            );
            $empreport = array(
              
             
                'contact_exchanged'          => $this->input->post('contact_exchaged'),
                'no_of_match_makings'          => $this->input->post('no_of_match_makings'),
                'contact_exchaged_date'      => $this->input->post('contact_exchaged_date'),
                'no_of_match_makings_date'   =>  $this->input->post('no_of_match_makings_date'),
                'rm_name'                     => $rm_name,
                'user_id'               => $userid
            );

            $res =  $this->dashboard_model->contactDetailsInsert($dataArr, $priInfoArr, $userid,$empreport,$count);
        }
        echo $res;
    }

    // For Contact Detail Modal Popup data
    public function getAstroDataForUpdate()
    {
        $userId = $this->input->post('user_id');
        $data = $this->dashboard_model->get_astro_details($userId);
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    public function astroDetailUpdate()
    {
        $userid = $this->input->post('userId');

        $Arr = $this->dashboard_model->get_astro_details($userid);
        if (!empty($Arr)) {
            $dataArr = array(
                'gothram'         	=> $this->input->post('gothram'),
                'place_of_birth'    => $this->input->post('place_of_birth'),
                'time_of_birth'     => $this->input->post('time'),
                'star'  			=> $this->input->post('star'),
                'paadam'  			=> $this->input->post('paadam'),
                'raasi'     	 	=> $this->input->post('raasi'),
                'dosham'          	=> $this->input->post('dosham'),
                'updated_on'		=> date('Y-m-d H:i:s')
            );
            $res =  $this->dashboard_model->astroDetailUpdate($dataArr, $userid);
        } else {
            $dataArr = array(
                'user_id'         	=> $this->input->post('userId'),
                'gothram'         	=> $this->input->post('gothram'),
                'place_of_birth'    => $this->input->post('place_of_birth'),
                'time_of_birth'     => $this->input->post('time'),
                'star'  			=> $this->input->post('star'),
                'raasi'     	 	=> $this->input->post('raasi'),
                'dosham'          	=> $this->input->post('dosham'),
                'status'          	=> 1,
                'created_time'		=> date('Y-m-d H:i:s')
            );
            $res =  $this->dashboard_model->astroDetailInsert($dataArr);
        }
        echo $res;
    }

    // for fetch data of to profile id
    public function addProfile()
    {
        $profileID = $this->input->post("ToprofileID");
        $data['data'] = $this->dashboard_model->get_ToProfile_details($profileID);
        $data['image'] = $this->dashboard_model->get_ToPImage_details($data['data']['id']);
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    public function sendProfileOnMail()
    {
        //$this->load->model('email_model');
        
        $arr = $this->input->post('toProfileArr');
        $FProfileId = $this->input->post('FromProfileId');
        $IsrevSend = $this->input->post('IsrevSend');
        $sendprofile = $this->input->post('sendprofile');
        //$lastinsertid='';
       // print_r($arr);exit();
        
        $emailstr = '';
        $toIdstr = '';

        $date = date('Y-m-d');
        $Curdate = date("F d, Y", strtotime($date));
        //$this->dashboard_model->sendProfileOnMail($arr,$FProfileId,$IsrevSend,$sendprofile);
       // echo $FProfileId;exit;
        $FData = $this->dashboard_model->getEmailTosendProfile($FProfileId);
        // print_r($FData);exit();
        if (!empty($FData)) {
            $data = $this->dashboard_model->get_ToProfile_detailsForMail($arr);
            //print_r($data);exit();
            if ($this->input->post('resend') !='resend') {
                if ($data) {
                    $existingtoids=array();
                    foreach ($data as $row) {
                        $existingtoids[]=$row['id'];
                    }
                    $data_alreadysent = $this->dashboard_model->getallreadyemailsentinfo($existingtoids, $FData['id']);
                    if ($data_alreadysent) {
                        echo '2';
                        exit;
                    }
                }
            }
            // $educatdet=$this->dashboard_model->education_info($existingtoids[0]);
             
             
            $edutable="";
            /*if($educatdet)
            {
            $edutable="<p>Education:</p><p><table>";
            if($educatdet->kv_ue_highedu)
            {
                $edutable.="<tr><td>".getlangkeywords('highestqua')."</td><td>:&nbsp; ".$educatdet->kv_ue_highedu;
                $edutable.=($educatdet->kv_ue_highedu_deg) ? ', '.$educatdet->kv_ue_highedu_deg : '';
                $edutable.=($educatdet->kv_ue_highedu_spec) ? ', '.$educatdet->kv_ue_highedu_spec : '';
                $edutable.=($educatdet->kv_ue_highedu_univ) ? ', '.$educatdet->kv_ue_highedu_univ : '';
                $edutable.=($educatdet->kv_ue_highedu_college) ? ', '.$educatdet->kv_ue_highedu_college : '';
                $edutable.=($educatdet->kv_ue_highedu_year) ? ', '.$educatdet->kv_ue_highedu_year : '';
                $edutable.="</td></tr><tr><td>&nbsp;</td></tr>";

            }
            if($educatdet->kv_ue_pg)
            {

                $edutable.="<tr><td>".getlangkeywords('postgraduate')."</td><td>:&nbsp; ".$educatdet->kv_ue_pg;
                $edutable.=($educatdet->kv_ue_pg_deg) ? ', '.$educatdet->kv_ue_pg_deg : '';
                $edutable.=($educatdet->kv_ue_pg_spec) ? ', '.$educatdet->kv_ue_pg_spec : '';
                $edutable.=($educatdet->kv_ue_pg_univ) ? ', '.$educatdet->kv_ue_pg_univ : '';
                $edutable.=($educatdet->kv_ue_pg_college) ? ', '.$educatdet->kv_ue_pg_college : '';
                $edutable.=($educatdet->kv_ue_pg_year) ? ', '.$educatdet->kv_ue_pg_year : '';
                $edutable.="</td></tr><tr><td>&nbsp;</td></tr>";

            }
            if($educatdet->kv_ue_g)
            {
                $edutable.="<tr><td>".getlangkeywords('graduate')."</td><td>:&nbsp; ".$educatdet->kv_ue_g;
                $edutable.=($educatdet->kv_ue_g_deg) ? ', '.$educatdet->kv_ue_g_deg : '';
                $edutable.=($educatdet->kv_ue_g_spec) ? ', '.$educatdet->kv_ue_g_spec : '';
                $edutable.=($educatdet->kv_ue_g_univ) ? ', '.$educatdet->kv_ue_g_univ : '';
                $edutable.=($educatdet->kv_ue_g_college) ? ', '.$educatdet->kv_ue_g_college : '';
                $edutable.=($educatdet->kv_ue_g_year) ? ', '.$educatdet->kv_ue_g_year : '';
                $edutable.="</td></tr><tr><td>&nbsp;</td></tr>";


            }
            if($educatdet->kv_ue_ug)
            {
                $edutable.="<tr><td>".getlangkeywords('undergraduate')."</td><td>:&nbsp; ".$educatdet->kv_ue_ug;
                $edutable.=($educatdet->kv_ue_ug_deg) ? ', '.$educatdet->kv_ue_ug_deg : '';
                $edutable.=($educatdet->kv_ue_ug_spec) ? ', '.$educatdet->kv_ue_ug_spec : '';
                $edutable.=($educatdet->kv_ue_ug_univ) ? ', '.$educatdet->kv_ue_ug_univ : '';
                $edutable.=($educatdet->kv_ue_ug_college) ? ', '.$educatdet->kv_ue_ug_college : '';
                $edutable.=($educatdet->kv_ue_ug_year) ? ', '.$educatdet->kv_ue_ug_year : '';
                $edutable.="</td></tr><tr><td>&nbsp;</td></tr>";

            }
            if($educatdet->kv_ue_x)
            {
                $edutable.="<tr><td>".getlangkeywords('school')."</td><td>:&nbsp; ".$educatdet->kv_ue_x;
                $edutable.=($educatdet->kv_ue_x_deg) ? ', '.$educatdet->kv_ue_x_deg : '';
                $edutable.=($educatdet->kv_ue_x_spec) ? ', '.$educatdet->kv_ue_x_spec : '';
                $edutable.=($educatdet->kv_ue_x_univ) ? ', '.$educatdet->kv_ue_x_univ : '';
                $edutable.=($educatdet->kv_ue_x_college) ? ', '.$educatdet->kv_ue_x_college : '';
                $edutable.=($educatdet->kv_ue_x_year) ? ', '.$educatdet->kv_ue_x_year : '';
                $edutable.="</td></tr><tr><td>&nbsp;</td></tr>";
             }

            $edutable.="</table></p>";
            }
            else
            {
                $edutable='<p>Education: '.$row['education_degree'].' ('.$row['heighst_education'].')</p>';
            }*/
            //print_r($edutable);exit();

            $mailBody = '
	        		<div class="container" style="border: 1px solid;border-color: silver;line-height: 25%;width: 830px;margin-left: 50px;">
							<div>
								<p style="float: right;	margin-right: 15px;">'.$Curdate.'</p>
							  	<p style="font-size: 24px; margin-left: 80px;">Kammavaari.com</p>
							</div>
						    <div class="title" style="width: 100%;border: 0px solid;border-color: gray;height: 40px;background-color: #ff8243;display: inline-table;">	
						    	<p style="font-size: 24px; text-align: center; color: white; background-color: #ff8243; margin-top: 32px;">Suggested Matches From kammavaari.com</p>
						    </div><br>';
            $userid='';
            foreach ($data as $row) {
                $fulldata='';
                if ($sendprofile=='mms') {
                    $fulldata='<p>Phone: '.$row['mobile'].'</p><p>Email: '.$row['email'].'</p>';
                }
                $image = $this->dashboard_model->get_ToPImage_details($row['id']);
                if ($image == null) {
                    $IMG = base_url()."/assets/img/img_avatar.png";
                } else {
                    $IMG = $image['applicationphotopath'];
                }

                $url = base64_encode($row['id']."/".$FData['id']."-".$row['id']);
                // echo $url;
                $mailBody .= '<div class="containertwo" style="border: 1px solid;height: 357px;border-color: silver;">
							<div class="row" style="float: left; width: 100%;height: 220px;">
						  	<div class="columnone" style="float: left;width: 19.8%;padding: 10px;height: 200px;">
						    	<img src="'.$IMG.'" style="width:100%; height: 175px; margin: 15px 15px; border: 1px solid; border-color:silver;">
						  	</div>
						  	<div class="columntwo" style="border: none !important;  float: left;width: 65%;padding: 15px 15px 15px 50px;">
						    	<div class="info" style="line-height: 40%;margin-top: 18px;">
						  			<b>'.$row['first_name'].' '.$row['last_name'].' ('.$row['profile_id'].')</b><br><br>
						  			<p>DOB : '.$row['date'].' '.$row['month'].' '.$row['year'].' | Height : '.$row['height'].'</p>
						  			<p>'.$row['city'].', '.$row['state'].'</p>
									
						  			'.$edutable.'
									
						  			<p>Occupation: '.$row['occupation'].'</p><br>'.$fulldata.'<br>
									
						  			<a style="color: #008ec7;font-size: 15px;" href="https://www.kammavaari.com/dashboard/search/user_profile/'.$url.'">View Full Profile ></a>
						  		</div>	
						  		<div class="columnthree"  style="float: right;padding: 10px;">
							    		<a class="button"  style="background-color: #ff8243;border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 15px;margin: 4px 4px;border-radius: 4px;float: right;" href="https://www.kammavaari.com/dashboard/search/interested_user_profile/'.$url.'" >I Am Interested ></a>
							  	</div>
						  	</div>
						  	</div></div>';
                if ($emailstr=='') {
                    $emailstr .= $row['email'];
                } else {
                    $emailstr .= ','.$row['email'];
                }

                if ($toIdstr=='') {
                    $toIdstr .= $row['id'];
                } else {
                    $toIdstr .= ','.$row['id'];
                }
            }
            $mailBody .= '</div><br><br><div style="font-size: 15px;">Thank You<br>Kammavaari<br>'.$this->session->userdata('uname').'<br>'.$this->session->userdata('phone_no').'</div>';
            
           //echo $FData['email'];
          // echo '<pre>';print_r($mailBody);exit;
            $to = $FData['email'];
            // $subject = "Suitable matches of the day 11";
            // $headers = "MIME-Version: 1.0"."\r\n";
            //$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
            //$headers .= 'From: Kammavaari.com - <info@kammavaari.com>'."\r\n";
            //echo '<pre>';print_r($mailBody);exit;
            $response=$this->email_model->emailgmailconf($to, "Suggested Matches From kammavaari.com", $mailBody);
            // if(mail($to, "Suggested Matches From kammavaari.com", $mailBody, $headers)){
            if ($response=='Success') {
                $ToIDArr = explode(",", $toIdstr);
                for ($y=0; $y < sizeof($ToIDArr); $y++) {
                    $dataArr = array(
                        'from_msID'  => $FData['id'],
                        'to_msID'    => $ToIDArr[$y],
                        'sentby_ID'  => ($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id'),
                        'send_Date'  => date('Y-m-d'),
                        'sentprofile_full'=>$sendprofile,
                        'rev_sent'   => $IsrevSend,
                        'f_ticketid'=>$url
                    );
                    
                    $res =  $this->dashboard_model->expressInterestInsert($dataArr);
                    if ($IsrevSend == '0') {
                        echo $res;
                    }
                }
            } else {
                echo 'fail';
            }
        
        
         
            if ($IsrevSend == 1) {
                $data1 = $this->dashboard_model->get_FromRevSendProfile_details($FProfileId);
                
                //$educatdet=$this->dashboard_model->education_info($data1['id']);
             
             
                $edutable="";
                /*if($educatdet)
                {
                $edutable="<p>Education:</p><p><table>";
                if($educatdet->kv_ue_highedu)
                {
                    $edutable.="<tr><td>".getlangkeywords('highestqua')."</td><td>:&nbsp; ".$educatdet->kv_ue_highedu;
                    $edutable.=($educatdet->kv_ue_highedu_deg) ? ', '.$educatdet->kv_ue_highedu_deg : '';
                    $edutable.=($educatdet->kv_ue_highedu_spec) ? ', '.$educatdet->kv_ue_highedu_spec : '';
                    $edutable.=($educatdet->kv_ue_highedu_univ) ? ', '.$educatdet->kv_ue_highedu_univ : '';
                    $edutable.=($educatdet->kv_ue_highedu_college) ? ', '.$educatdet->kv_ue_highedu_college : '';
                    $edutable.=($educatdet->kv_ue_highedu_year) ? ', '.$educatdet->kv_ue_highedu_year : '';
                    $edutable.="</td></tr><tr><td>&nbsp;</td></tr>";

                }
                if($educatdet->kv_ue_pg)
                {

                    $edutable.="<tr><td>".getlangkeywords('postgraduate')."</td><td>:&nbsp; ".$educatdet->kv_ue_pg;
                    $edutable.=($educatdet->kv_ue_pg_deg) ? ', '.$educatdet->kv_ue_pg_deg : '';
                    $edutable.=($educatdet->kv_ue_pg_spec) ? ', '.$educatdet->kv_ue_pg_spec : '';
                    $edutable.=($educatdet->kv_ue_pg_univ) ? ', '.$educatdet->kv_ue_pg_univ : '';
                    $edutable.=($educatdet->kv_ue_pg_college) ? ', '.$educatdet->kv_ue_pg_college : '';
                    $edutable.=($educatdet->kv_ue_pg_year) ? ', '.$educatdet->kv_ue_pg_year : '';
                    $edutable.="</td></tr><tr><td>&nbsp;</td></tr>";

                }
                if($educatdet->kv_ue_g)
                {
                    $edutable.="<tr><td>".getlangkeywords('graduate')."</td><td>:&nbsp; ".$educatdet->kv_ue_g;
                    $edutable.=($educatdet->kv_ue_g_deg) ? ', '.$educatdet->kv_ue_g_deg : '';
                    $edutable.=($educatdet->kv_ue_g_spec) ? ', '.$educatdet->kv_ue_g_spec : '';
                    $edutable.=($educatdet->kv_ue_g_univ) ? ', '.$educatdet->kv_ue_g_univ : '';
                    $edutable.=($educatdet->kv_ue_g_college) ? ', '.$educatdet->kv_ue_g_college : '';
                    $edutable.=($educatdet->kv_ue_g_year) ? ', '.$educatdet->kv_ue_g_year : '';
                    $edutable.="</td></tr><tr><td>&nbsp;</td></tr>";


                }
                if($educatdet->kv_ue_ug)
                {
                    $edutable.="<tr><td>".getlangkeywords('undergraduate')."</td><td>:&nbsp; ".$educatdet->kv_ue_ug;
                    $edutable.=($educatdet->kv_ue_ug_deg) ? ', '.$educatdet->kv_ue_ug_deg : '';
                    $edutable.=($educatdet->kv_ue_ug_spec) ? ', '.$educatdet->kv_ue_ug_spec : '';
                    $edutable.=($educatdet->kv_ue_ug_univ) ? ', '.$educatdet->kv_ue_ug_univ : '';
                    $edutable.=($educatdet->kv_ue_ug_college) ? ', '.$educatdet->kv_ue_ug_college : '';
                    $edutable.=($educatdet->kv_ue_ug_year) ? ', '.$educatdet->kv_ue_ug_year : '';
                    $edutable.="</td></tr><tr><td>&nbsp;</td></tr>";

                }
                if($educatdet->kv_ue_x)
                {
                    $edutable.="<tr><td>".getlangkeywords('school')."</td><td>:&nbsp; ".$educatdet->kv_ue_x;
                    $edutable.=($educatdet->kv_ue_x_deg) ? ', '.$educatdet->kv_ue_x_deg : '';
                    $edutable.=($educatdet->kv_ue_x_spec) ? ', '.$educatdet->kv_ue_x_spec : '';
                    $edutable.=($educatdet->kv_ue_x_univ) ? ', '.$educatdet->kv_ue_x_univ : '';
                    $edutable.=($educatdet->kv_ue_x_college) ? ', '.$educatdet->kv_ue_x_college : '';
                    $edutable.=($educatdet->kv_ue_x_year) ? ', '.$educatdet->kv_ue_x_year : '';
                    $edutable.="</td></tr><tr><td>&nbsp;</td></tr>";
                 }

                $edutable.="</table></p>";
                }
                else
                {
                    $edutable='<p>Education : '.$data1['education_degree'].' ('.$data1['heighst_education'].')</p>';
                }
                */

                //echo $data1['id'];exit;
                $photo = $this->dashboard_model->get_ToPImage_details($data1['id']);
                $fulldata='';
                if ($sendprofile=='mms') {
                    $fulldata='<p>Phone: '.$data1['mobile'].'</p><p>Email: '.$data1['email'].'</p>';
                }
                $ToEmail = explode(",", $emailstr);
                // print_r($ToEmail);exit();
                if ($photo == null) {
                    $IMAG = base_url()."/assets/img/img_avatar.png";
                } else {
                    $IMAG = $photo['applicationphotopath'];
                }
                //echo '<pre>';print_r($data);exit;
                $dupemail=array();
                foreach ($data as $rowR) {
                    if (!in_array($rowR['email'], $dupemail)) {
                        $url1 = base64_encode($FData['id']."/".$rowR['id']."-".$FData['id']);

                        $mailBody1 = '
	        		<div class="container" style="border: 1px solid;border-color: silver;line-height: 25%;width: 830px;height: 357px;margin-left: 50px;">
							<div>
								<p style="float: right;	margin-right: 15px;">'.$Curdate.'</p>
							  	<p style="font-size: 24px; margin-left: 80px;">Kammavaari.com</p>
							</div>
						    <div class="title" style="width: 100%;border: 0px solid;border-color: gray;height: 40px;background-color: #ff8243;display: inline-table;">	
						    	<p style="font-size: 24px; text-align: center; color: white; background-color: #ff8243; margin-top: 32px;">Suggested Matches From kammavaari.com</p>
						    </div><br>
						    <div class="containertwo" style="border: 1px solid;height: 240px;border-color: silver;">
							<div class="row" style="float: left; width: 100%;">
							  	<div class="columnone" style="float: left;width: 19.8%;padding: 10px;height: 240px;">
							    	<img src="'.$IMAG.'" style="width:100%; height: 175px; margin: 15px 15px; border: 1px solid; border-color:silver;">
							  	</div>
							  	<div class="columntwo" style="border: none !important;  float: left;width: 65%;padding: 15px 15px 15px 50px;">
							    	<div class="info" style="line-height: 40%;margin-top: 18px;">
							  			<b>'.$data1['first_name'].' '.$data1['last_name'].' ('.$data1['profile_id'].')</b><br><br>
							  			<p>DOB : '.$data1['date'].' '.$data1['month'].' '.$data1['year'].' | Height : '.$data1['height'].'</p>
							  			<p>'.$data1['city'].', '.$data1['state'].'</p>
							  			
										'.$edutable.'
							  			<p>Occupation : '.$data1['occupation'].'</p><br>'.$fulldata.'<br>
										
							  			<a style="color: #008ec7;font-size: 15px;" href="https://www.kammavaari.com/dashboard/search/user_profile/'.$url1.'">View Full Profile ></a>
							  		</div>	
							  		<div class="columnthree"  style="float: right;padding: 10px;">
							    		<a class="button"  style="background-color: #ff8243;border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 15px;margin: 4px 4px;border-radius: 4px;float: right;" href="https://www.kammavaari.com/dashboard/search/interested_user_profile/'.$url1.'" >I Am Interested ></a>
							  		</div>
						  		</div>
						  	</div></div></div><br><br><div style="font-size: 15px;">Thank You<br>Kammavaari<br>'.$this->session->userdata('uname').'<br>'.$this->session->userdata('phone_no').'</div>';

                        //	echo '<pre>';print_r($mailBody1);exit;
                        $to = $rowR['email'];
                        $subject = "Suitable matches of the day 11";
                        $headers = "MIME-Version: 1.0"."\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
                        $headers .= 'From: Kammavaari.com - <info@kammavaari.com>'."\r\n";
    
                        $response=$this->email_model->emailgmailconf($to, "Suggested Matches From kammavaari.com", $mailBody1);
                        // if(mail($to, "Suggested Matches From kammavaari.com", $mailBody1, $headers)){
                        if ($response=='Success') {
                        } else {
                            echo 'fail';
                        }
                
                        $dupemail[]=$rowR['email'];
                    }
                }

                for ($z=0; $z < sizeof($ToIDArr); $z++) {
                    $dataArr = array(
                            't_ticketid'=>$url1
                            ,'revsend_Date'=>date('Y-m-d H:i:s')
                        );
                    $this->db->where(array('from_msID'  => $FData['id'],'to_msID'    => $ToIDArr[$z],'sentby_ID'  => $this->session->userdata('user_id')));
                    $this->db->update('ms_servicelist', $dataArr);
                    //echo '<pre>';print_r($dataArr);exit;
                        //$res =  $this->dashboard_model->expressInterestInsert($dataArr);
                }
                echo $res;
            }
        } else {
            echo "Please enter valid From profile id.";
        }
    }

    public function getServiceData()
    {
        $data['data'] = $this->dashboard_model->getServiceData();
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }

    public function user_full_report(){

        $FProfileId = $this->input->post('profileID');
    //    print_r($FProfileId);die;
        $data['payment_details'] = $this->dashboard_model->payment_details($FProfileId);
        $data['profile_share_report'] = $this->dashboard_model->profile_share_report($FProfileId);
        $data['posts'] = $this->dashboard_model->image($FProfileId);
        $data['viewed_contacts'] = $this->dashboard_model->getProfilesViewedByUser($FProfileId,'');
        $data['viwe_contacts']   = $this->dashboard_model->viewcontacts($FProfileId);
        // print_r($data['viwe_contacts'] );die;
        $this->load->view($this->headerPage);
        $this->load->view('user_full_reports', $data);
        $this->load->view($this->footerPage);
       
    }

    public function getIDServiceData()
    {
        $FProfileId = $this->input->post('profileID');
        $FData = $this->dashboard_model->getEmailTosendProfile($FProfileId);
        // print_r($FData);exit();
        if (!empty($FData)) {
            $data['data'] = $this->dashboard_model->getNameServiceData($FData['id']);
            $data['fdata'] = $this->dashboard_model->getIDFromServiceData($FData['id']);
            $data['tdata'] = $this->dashboard_model->getIDToServiceData($FData['id']);
			$fTotalCount = $fNotViewed = $fViewed = $fInterested = $fNotInterested = $fOthers = 0;
			foreach($data['fdata'] as $fData) {
				$fTotalCount++;
				switch($fData->f_status) {
					case 0:
					$fNotViewed++;
					break;
				  case 1:
					$fViewed++;
					break;
				  case 2:
					$fInterested++;
					break;
				case 3:
					$fNotInterested++;
					break;
				  default:
					$fOthers++;
				}				
			}
			$data['fCounts'] = ["fTotalCount" => $fTotalCount, "fNotViewed" => $fNotViewed, "fViewed" => $fViewed, "fInterested" => $fInterested, "fNotInterested" => $fNotInterested, "fOthers" => $fOthers];
			$tTotalCount = $tNotViewed = $tViewed = $tInterested = $tNotInterested = $tOthers = 0;
			foreach($data['tdata'] as $tData) {
				$tTotalCount++;
				switch($tData->t_status) {
					case 0:
					$tNotViewed++;
					break;
				  case 1:
					$tViewed++;
					break;
				  case 2:
					$tInterested++;
					break;
				case 3:
					$tNotInterested++;
					break;
				  default:
					$tOthers++;
				}				
			}
			$data['tCounts'] = ["tTotalCount" => $tTotalCount, "tNotViewed" => $tNotViewed, "tViewed" => $tViewed, "tInterested" => $tInterested, "tNotInterested" => $tNotInterested, "tOthers" => $tOthers];
            echo json_encode($data, JSON_NUMERIC_CHECK);
        } else {
            echo 0;
        }
    }

    public function verifyMobile()
    {
        $userID = $this->input->post('user_id');
        $res = $this->dashboard_model->verifyMobile($userID);
        echo $res;
    }

    public function verifyEmail()
    {
        $userID = $this->input->post('user_id');
        $res = $this->dashboard_model->verifyEmail($userID);
        echo $res;
    }

    public function updateEliteInfo()
    {
        $userID = $this->input->post('user_id');
        $elite  = $this->input->post('eliteValue');
        
        $usertype  = ($this->input->post('usertype')) ? $this->input->post('usertype') : 'regular';
        //echo '<pre>';print_r($_POST);exit;
        $res = $this->dashboard_model->updateEliteInfo($userID, $elite, $usertype);
        echo $res;
    }
     public function updateShownInfo()
    {
        $userID = $this->input->post('user_id');
        $shown_value  = $this->input->post('showValue');
       // echo $userID;exit;
      //  $showntype  = ($this->input->post('shownValue')) ? $this->input->post('shownValue') : 'yes';
        //echo '<pre>';print_r($_POST);exit;
        $res = $this->dashboard_model->updateShownInfo($userID, $shown_value);
        echo $res;
    }
    public function updatePrimeInfo()
    {
        $userID = $this->input->post('user_id');
        $prime_value  = $this->input->post('primeValue');
       // echo $userID;exit;
      //  $showntype  = ($this->input->post('shownValue')) ? $this->input->post('shownValue') : 'yes';
        //echo '<pre>';print_r($_POST);exit;
        $res = $this->dashboard_model->updatePrimeInfo($userID, $prime_value);
        echo $res;
    }
    
    public function profileviewed()
    {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        //echo '<pre>';print_r($_SESSION);exit;
        //echo $data['user_id'];exit;
        $data['user_data'] = $this->emp_model->profileviewed();
        //$emp_data = $this->emp_model->get_employees();
        //$data["users"] = $user_data["users"];
        //$data["employees"] = $emp_data["employees"];
        $data["title"] = getlangkeywords('profileviewed');
        //echo '<pre>';print_r($data);exit;
        $this->load->view($this->headerPage);
        $this->load->view('profileviewed', $data);
        $this->load->view($this->footerPage);
    }
    
    public function emailtemplates()
    {
        if (!$this->session->userdata('type')) {
            return base_url();
        }
 
        $data["seltemplatetype"]=($this->input->get('template')) ? $this->input->get('template') : 'register';
        $data['templates_data'] = $this->emp_model->emailtemplates();
     
        $data['templatetype'] = $this->emp_model->templatetype($data["seltemplatetype"]);
         
        $this->load->view($this->headerPage_1);
        $this->load->view('emailtemplates', $data);
        $this->load->view($this->footerPage_1);
    }
    
    public function submitemailtemplate()
    {
        if (!$this->session->userdata('type')) {
            return base_url();
        }
        $this->emp_model->submitemailtemplate();
    }
    
    public function deletepayment()
    {
        if (!$this->session->userdata('type')) {
            return base_url();
        }
        $this->emp_model->deletepayment($this->input->post('pid'));
        $this->session->set_flashdata('no_rec', 'Payment record deleted successfully!');
    }
   
	public function inactivateProfile() {
		$data = [];
		 $this->load->view('admin_header');
		$this->load->view('inactivate_profile', $data);
		$this->load->view('admin_footer');
		
	}
	public function profileInactive() {
		$postData = [];
		$postData["profile_id"] = $this->input->post('pf_id');
		$postData["activate_date"] = $this->input->post('activate_after');
		$postData["remind_before"] = $this->input->post('remind_before');
		$postData["reason"] = $this->input->post('reason');
		$data = [];
		$resp = $this->emp_model->inactivateProfile($postData);
		if($resp) {
			$this->session->set_flashdata('profile_message', 'Profile inactivated successfully!');
		} else {
			$this->session->set_flashdata('profile_message', 'Profile not found. Pease check');
		}
		redirect('admin/inactivate_profile');
		
	}

    public function employee_report(){
        // echo "<pre>"; print_r($data['emp_report']);die;

        $params = $this->input->get();
		$filters = [];
		if(isset($params["f_date"]) && !empty($params["f_date"])) {
			$filters["f_date"] = $params["f_date"];
		}
		
		if(isset($params["t_date"]) && !empty($params["t_date"])) {
			$filters["t_date"] = $params["t_date"];
		}

        // print_r($filters["f_date"]);die;
		// if(isset($params["app_status"]) && !empty($params["app_status"])) {
		// 	$filters["app_status"] = $params["app_status"];
		// }

		$data = [];
		$this->load->library('pagination');
		
		// $total_records = $this->emp_model->payment_report_count($filters);
    //    print_r($total_records);die;
		$config = [
				'base_url'			=> base_url('admin/employee_report'),
				// 'per_page'			=> 15,
				// 'total_rows'		=> $total_records,
                'reuse_query_string'  => true, 
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
            $data['emp_report'] = $this->emp_model->emp_dayreport($filters);

			// $data['sub_rec'] = $this->emp_model->payment_report_data($config['per_page'], $this->uri->segment(3), $filters);
			// echo '<pre>';print_r($data['emp_report'] );exit;
			// $data['tot_rec'] = $total_records;

        $this->load->view('admin_header');
		$this->load->view('emp_individualreport', $data);
		$this->load->view('admin_footer');
        
    }

    public function payment_reports(){

        $params = $this->input->get();
		$filters = [];
		if(isset($params["f_date"]) && !empty($params["f_date"])) {
			$filters["f_date"] = $params["f_date"];
		}
		
		if(isset($params["t_date"]) && !empty($params["t_date"])) {
			$filters["t_date"] = $params["t_date"];
		}
		if(isset($params["app_status"]) && !empty($params["app_status"])) {
			$filters["app_status"] = $params["app_status"];
		}

		// print_r($filters["app_status"]);die;
		//print_r($parameters);
		$data = [];
		$this->load->library('pagination');
		
		$total_records = $this->emp_model->payment_report_count($filters);
    //    print_r($total_records);die;
		$config = [
				'base_url'			=> base_url('admin/payment_report'),
				'per_page'			=> $total_records,
				'total_rows'		=> $total_records,
                'reuse_query_string'  => true, 
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
            $data['collected_by'] = $this->emp_model->collected_by();

			$data['sub_rec'] = $this->emp_model->payment_report_data($config['per_page'], $this->uri->segment(3), $filters);
			// echo '<pre>';print_r($data['collected_by'] );exit;
			$data['tot_rec'] = $total_records;
		 $this->load->view('admin_header');
		$this->load->view('payment_reports', $data);
		$this->load->view('admin_footer');
		

        

    }


	public function listInactivateProfiles() {		
		$params = $this->input->get();    
		$filters = [];
		if(isset($params["profile_id"]) && !empty($params["profile_id"])) {
			$filters["profile_id"] = $params["profile_id"];
		}
		if(isset($params["surname"]) && !empty($params["surname"])) {
			$filters["surname"] = $params["surname"];
		}
		if(isset($params["firstname"]) && !empty($params["firstname"])) {
			$filters["firstname"] = $params["firstname"];
		}
		if(isset($params["app_status"]) && !empty($params["app_status"])) {
			$filters["app_status"] = $params["app_status"];
		}

        $list = $params["app_status"]; 
        if($list == '3'){
            $this->session->set_userdata('Settled', '3');
        }else{
            $this->session->set_userdata('Settled', '1');
        }

		
		//print_r($parameters);
		$data = [];
		$this->load->library('pagination');
		
		$total_records = $this->emp_model->getTotalInactiveProfiles($filters);
		$config = [
				'base_url'			=> base_url('admin/list_inactivate_profiles'),
				'per_page'			=> 50,
				'total_rows'		=> $total_records,
                'reuse_query_string'  => true, 
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
			$data['sub_rec'] = $this->emp_model->getInactiveProfiles($config['per_page'], $this->uri->segment(3), $filters);
			// echo '<pre>';print_r($data['sub_rec'] );exit;
			$data['tot_rec'] = $total_records;
		 $this->load->view('admin_header');
		$this->load->view('list_inactivate_profiles', $data);
		$this->load->view('admin_footer');
		
	}
	
	public function activateProfile() {
		$id = $this->input->post("id");
		$resp = $this->emp_model->activateProfile($id);
	}
	
	public function getProfilesCountByRm()
	{
		$data = array();
		$profile_data=$this->emp_model->getProfilesCount();
        $rm_data = $this->emp_model->getProfilesCountByRm();
		$rm_data1 = $this->emp_model->getRmProfiles();
		$data["profile_data"]=$profile_data;
		$data["rm_data"] = $rm_data;
		$data["rm_profiles"]=$rm_data1;
        $data["title"] = "Rm Profiles Count";
        $this->load->view('admin_header');
		$this->load->view('rm_profile_list', $data);
		$this->load->view('admin_footer');
	
	}


	
	public function getAdminDashboard()
	{
		$data = array();
		$profile_data=$this->emp_model->getProfilesCount();
        $rm_data = $this->emp_model->getProfilesCountByRm();
		$rm_data1 = $this->emp_model->getRmProfiles();
		$params["rmid"]=$this->session->userdata('user_id');
		if(isset($params["rmid"]) && !empty($params["rmid"])) {
			$filters["profileowner"] = $params["rmid"];
		}
		$login_type=$this->emp_model->getAdminLoginType($this->session->userdata('user_id'));
	//print_r($login_type); exit;
	    $filters["login_type"]=$login_type["type"];
		$data = [];
		$total_records = $this->emp_model->getProfilesByRmCount($filters);
		$data['regular_profiles'] = $this->emp_model->getRegularProfiles($filters["profileowner"],$filters["login_type"]);
		$data['confidential_profiles'] = $this->emp_model->getConfidentialProfiles($filters["profileowner"],$filters["login_type"]);
		$data['sc_profiles'] = $this->emp_model->getSuperConfidentialProfiles($filters["profileowner"],$filters["login_type"]);
		$data['eliteprofiles'] = $this->emp_model->getEliteProfiles($filters["profileowner"],$filters["login_type"]);
		$data['supereliteprofiles'] = $this->emp_model->getSuperEliteProfiles($filters["profileowner"],$filters["login_type"]);
		$data['rc_rm_profiles'] = $this->emp_model->getRCRMProfiles();
		$data['sc_rm_profiles'] = $this->emp_model->getSCRMProfiles();
		$data['elite_rm_profiles'] = $this->emp_model->getEliteRMProfiles();
		$data['superelite_rm_profiles'] = $this->emp_model->getSuperEliteRMProfiles();
		$data['matchmetingserious'] = $this->emp_model->matchmetingserious();
		//print_r($data['matchmetingserious']);exit;
		$data["profile_data"]=$profile_data;
		$data["rm_data"] = $rm_data;
		$data["rm_profiles"]=$rm_data1;
        $data["title"] = "Rm Profiles Count";
		//print_r($data['confidential_profiles']);exit;
        $this->load->view('admin_header');
		$this->load->view('dashboard', $data);
		$this->load->view('admin_footer');
	
	}
	
	public function listProfilesByRmId() {
		//echo "111";exit;
		$params = $this->input->get();
		//print_r($params);exit;
		$filters = [];
		if(isset($params["rmid"]) && !empty($params["rmid"])) {
			$filters["profileowner"] = $params["rmid"];
		}
		$rm_data1 = $this->emp_model->getRmProfiles();
		$data['rm_profiles']=$rm_data1;
		$login_type=$this->emp_model->getAdminLoginType($this->session->userdata('user_id'));
		$filters["login_type"]=$login_type["type"];
		$total_records = $this->emp_model->getProfilesByRmCount($filters);
		$paid_count=$this->emp_model->getPaidProfilesOfRm($filters["profileowner"]);
		$unpaid_count=$this->emp_model->getUnPaidProfilesOfRm($filters["profileowner"]);
		$data['profile_details'] = $this->emp_model->getProfilesByRm($filters["profileowner"],'');
			//echo '<pre>';print_r($data);exit;
			
		$data['tot_rec'] = $total_records;
		$data['paid_count'] = $paid_count;
		$data['unpaid_count'] = $unpaid_count;
		 $this->load->view('admin_header');
		$this->load->view('list_profiles_by_rm', $data);
		$this->load->view('admin_footer_latest');
		
	}
	
	public function regularprofiles() {
		//echo "111";exit;
		$params["rmid"]=$this->session->userdata('user_id');
		if(isset($params["rmid"]) && !empty($params["rmid"])) {
			$filters["profileowner"] = $params["rmid"];
		}
		$login_type=$this->emp_model->getAdminLoginType($this->session->userdata('user_id'));
	//print_r($login_type); exit;
	    $filters["login_type"]=$login_type["type"];
		$data = [];
		$total_records = $this->emp_model->getProfilesByRmCount($filters);
		$data['profile_details'] = $this->emp_model->getRegularProfiles($filters["profileowner"],$filters["login_type"]);
		$data['tot_rec'] = $total_records;
		$data['rm_image'] =  $this->emp_model->rm_image();

        $this->load->view('admin_header',$data);
		$this->load->view('regularprofiles', $data);
		$this->load->view('admin_footer_latest');
		
	}

	public function loginNotifications() {
		//echo "111";exit;
		$params["rmid"]=$this->session->userdata('user_id');
		
		$data = [];

        $data['rm_image'] =  $this->emp_model->rm_image();
		$data['notifications'] = $this->emp_model->getLoginNotifications($params["rmid"]);
		$data['recent_notifications'] = $this->emp_model->getRecentLoginNotifications($params["rmid"]);
		$this->load->view('admin_header',$data); 
		$this->load->view('notifications', $data);
		$this->load->view('admin_footer_latest');
		
	}
	
	public function onlineNotifications() {
		$params["rmid"]=$this->session->userdata('user_id');	
      
		$data = [];
        // print_r($data);die;
		$login_type=$this->emp_model->getAdminLoginType($this->session->userdata('user_id'));
		
		$this->load->library('pagination');
		
        $total_records_count = $this->emp_model->getTotalOnlineNotifications($params["rmid"],$login_type["type"]);
		
		$config = [
			'base_url'			=> base_url ('admin/online_users'),
			'per_page'			=> 10,
			'total_rows'		=> $total_records_count,			
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
        $data['rm_image'] =  $this->emp_model->rm_image(); 	
        // print_r($data['rm_image']);die;
		$data['notifications'] = $this->emp_model->getOnlineNotificationsList($config['per_page'], $this->uri->segment(3),$params["rmid"],$login_type["type"]);
		$this->load->view('admin_header',$data); 
        // $this->load->view('admin_header',$data); 
		$this->load->view('online_notifications', $data);
		$this->load->view('admin_footer_latest');
		
	}
	
	public static function getTimeago( $ptime )
	{

        // print_r($ptime);die;
		$estimate_time = time() - $ptime;

		if( $estimate_time < 1 )
		{
			return 'less than 1 second ago';
		}

		$condition = array(
					12 * 30 * 24 * 60 * 60  =>  'year',
					30 * 24 * 60 * 60       =>  'month',
					24 * 60 * 60            =>  'day',
					60 * 60                 =>  'hour',
					60                      =>  'minute',
					1                       =>  'second'
		);

        $text_string = '';
		foreach( $condition as $secs => $str )
		{
			$d = $estimate_time / $secs;

			if( $d >= 1 )
			{
				$r = round( $d );
				
				if($str == 'minute' || $str == 'second'){
					if($text_string <= 20){
						$text_string = '<span style="color: #fff;font-weight: 500;background: #00bd00;border-radius: 30px;padding: 3px 15px;">Online</span>';
					}else{
						$text_string = 'Last seen ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
					}
				}else{
					    $text_string = 'Last seen ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
				}
				return $text_string;
			}
		}
	}
	
	 public function update_login_notification()
    {
        if (isset($_POST['notification_id'])) {
            $notification_id = $_POST["notification_id"];
           
           $result= $this->emp_model->updateLoginNotificationStatus($notification_id);
			$result = array(
                "success" => "1"
            );
            echo json_encode($result);
        } else {
            $result = array(
                "success" => "0",
                "data" => "Please provide the emp_id"
            );
            echo json_encode($result);
        }
    }
      public function confidentialprofiles() {
		$this->session->set_userdata('previous_url', current_url());
		$params["rmid"]=$this->session->userdata('user_id');
		if(isset($params["rmid"]) && !empty($params["rmid"])) {
			$filters["profileowner"] = $params["rmid"];
		}
		$login_type=$this->emp_model->getAdminLoginType($this->session->userdata('user_id'));
	//print_r($login_type); exit;
	    $filters["login_type"]=$login_type["type"];
		$data = [];
		//$total_records = $this->emp_model->getProfilesByRmCount($filters);
		$data = $this->emp_model->getConfidentialProfiles($filters["profileowner"],$filters["login_type"]);
		//$data['tot_rec'] = $total_records;
        $data['rm_image'] =  $this->emp_model->rm_image();
       // echo "<pre>";print_r($data);exit;
		$this->load->view('admin_header',$data);
		$this->load->view('confidentialprofiles', $data);
		$this->load->view('admin_footer_latest');
		
	}
	
	public function superconfidentialprofiles() {
		$this->session->set_userdata('previous_url', current_url());
		$params["rmid"]=$this->session->userdata('user_id');
		if(isset($params["rmid"]) && !empty($params["rmid"])) {
			$filters["profileowner"] = $params["rmid"];
		}
		$login_type=$this->emp_model->getAdminLoginType($this->session->userdata('user_id'));
	//print_r($login_type); exit;
	    $filters["login_type"]=$login_type["type"];
		$data = [];
		//$total_records = $this->emp_model->getProfilesByRmCount($filters);
		$data = $this->emp_model->getSuperConfidentialProfiles($filters["profileowner"],$filters["login_type"]);
		//$data['tot_rec'] = $total_records;
       // echo "<pre>";print_r($data);exit;
       $data['rm_image'] =  $this->emp_model->rm_image();
		$this->load->view('admin_header',$data);
		$this->load->view('superconfidentialprofiles', $data);
		$this->load->view('admin_footer_latest');
		
	}
	
	public function eliteprofiles() {
		$this->session->set_userdata('previous_url', current_url());
		$params["rmid"]=$this->session->userdata('user_id');
		if(isset($params["rmid"]) && !empty($params["rmid"])) {
			$filters["profileowner"] = $params["rmid"];
		}
		$login_type=$this->emp_model->getAdminLoginType($this->session->userdata('user_id'));
	//print_r($login_type); exit;
	    $filters["login_type"]=$login_type["type"];
		$data = [];
		//$total_records = $this->emp_model->getProfilesByRmCount($filters);
		$data = $this->emp_model->getEliteProfiles($filters["profileowner"],$filters["login_type"]);
		//$data['tot_rec'] = $total_records;
        $data['rm_image'] =  $this->emp_model->rm_image();
       // echo "<pre>";print_r($data);exit;
		$this->load->view('admin_header',$data);
		$this->load->view('eliteprofiles', $data);
		$this->load->view('admin_footer_latest');
		
	}
	
	public function supereliteprofiles() {
		$this->session->set_userdata('previous_url', current_url());
		$params["rmid"]=$this->session->userdata('user_id');
		if(isset($params["rmid"]) && !empty($params["rmid"])) {
			$filters["profileowner"] = $params["rmid"];
		}
		$login_type=$this->emp_model->getAdminLoginType($this->session->userdata('user_id'));
	//print_r($login_type); exit;
	    $filters["login_type"]=$login_type["type"];
		$data = [];
		//$total_records = $this->emp_model->getProfilesByRmCount($filters);
		$data = $this->emp_model->getSuperEliteProfiles($filters["profileowner"],$filters["login_type"]);
		//$data['tot_rec'] = $total_records;
       // echo "<pre>";print_r($data);exit;
       $data['rm_image'] =  $this->emp_model->rm_image();
		$this->load->view('admin_header',$data);
		$this->load->view('supereliteprofiles', $data);
		$this->load->view('admin_footer_latest');
		
	}
	
	public function notshownprofiles() {
		$this->session->set_userdata('previous_url', current_url());
		$params["rmid"]=$this->session->userdata('user_id');
		if(isset($params["rmid"]) && !empty($params["rmid"])) {
			$filters["profileowner"] = $params["rmid"];
		}
		$login_type=$this->emp_model->getAdminLoginType($this->session->userdata('user_id'));
	//print_r($login_type); exit;
	    $filters["login_type"]=$login_type["type"];
		$data = [];
		//$total_records = $this->emp_model->getProfilesByRmCount($filters);
		$data = $this->emp_model->getNotShownProfiles($filters["profileowner"],$filters["login_type"]);
		//$data['tot_rec'] = $total_records;
       // echo "<pre>";print_r($data);exit;
       $data['rm_image'] =  $this->emp_model->rm_image();
		$this->load->view('admin_header',$data);
		$this->load->view('notshownprofiles', $data);
		$this->load->view('admin_footer_latest');
		
	}
    
    public function Register_list() {
		
		$data['profile_details'] = $this->emp_model->getTodayRegisterProfiles();
	//	print_r($data);exit;
	$i=0;
	foreach($data["profile_details"] as $row) {
	      $data["profile_details"][$i]['mobile'] = $this->encrypt_model->decryptField($row['mobile']);
	      $i++;
	}
       $data['rm_image'] =  $this->emp_model->rm_image();
		 $this->load->view('admin_header',$data);
		$this->load->view('register_list', $data);
		$this->load->view('admin_footer');
		
	}
	public function export_csv(){ 
		if(empty($this->session->userdata('user_id'))){
		redirect("admin/login", 'refresh');
		}
			$from_date = $_POST['from_date'];
			$to_date = $_POST['to_date'];
		$usersData = $this->emp_model->getRegisterProfilesBetweenDates($from_date,$to_date);
        // print_r($usersData);die;
		/* file name */
		$filename = 'users_'.date('d-m-Y').'.csv'; 
	/* get data */
		$f = fopen("php://memory",'w');
		/* file creation */
		$d=',';
	//	$file = fopen($filename,'w'); 
		$header = array("S.no","Profile ID","Last Name","First Name","Mobile Number","Living In","Rm Name","Created By","RegisterDate","Admin Comments","Complaint Info"); 
		fputcsv($f, $header,$d);
		$i=1;
		foreach($usersData as $row){
		    $row['mobile'] = $this->encrypt_model->decryptField($row['mobile']);
		        $linedata=array($i,$row["profile_id"],$row["last_name"],$row["first_name"],$row["mobile"],$row["living_in"],$row["username"],$row["created_by"],$row["registered_on"],"","");
		    fputcsv($f,$linedata,$d);
		    $i++;
		 }
		fseek($f,0);
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   fpassthru($f);
		fclose($f); 
		exit; 
	}

    public function export_report(){

        $result = $this->Admin_payment_model->export_report();
        $filename = 'users_'.date('d-m-Y').'.csv'; 

		$f = fopen("php://memory",'w');
		
		$d=',';
        $header = array("S.no","Profile ID","Last Name","First Name","Mobile Number","Living In","Rm Name","Created By","RegisterDate","Admin Comments","Complaint Info"); 
        fputcsv($f, $header,$d);
		$i=1;
        $i=1;
		foreach($result as $row){
		    $row['mobile'] = $this->encrypt_model->decryptField($row['mobile']);
		        $linedata=array($i,$row["profile_id"],$row["last_name"],$row["first_name"],$row["mobile"],$row["living_in"],$row["username"],$row["created_by"],$row["registered_on"],"","");
		    fputcsv($f,$linedata,$d);
		    $i++;
		 }
         fseek($f,0);
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   fpassthru($f);
		fclose($f); 
		exit; 
		
    }
    
    public function AdminLoginLogs() {
		//echo "111";exit;
		//$params["rmid"]=$this->session->userdata('user_id');
		
		$data = [];
		$data['admin_notifications'] = $this->emp_model->getAdminLoginLogs();
		$data['admin_recent_notifications'] = $this->emp_model->getAdminRecentLoginNotifications();
		$this->load->view('admin_header',$data); 
		$this->load->view('admin_login_logs', $data);
		$this->load->view('admin_footer');
		
	}	

    	
	public function admin_login_logs_csv(){ 
		if(empty($this->session->userdata('user_id'))){
		redirect("admin/login", 'refresh');
		}
			$from_date = $_POST['from_date'];
			$to_date = $_POST['to_date'];
		$usersData = $this->emp_model->getAdminLoginLogsBetweenDates($from_date,$to_date);
		/* file name */
		$filename = 'employees_'.date('d-m-Y').'.csv'; 
	/* get data */
		$f = fopen("php://memory",'w');
		/* file creation */
		$d=',';
	//	$file = fopen($filename,'w'); 
		$header = array("S.no","Admin Name","Location","Login Time","Logout Time","Comments","complaint"); 
		fputcsv($f, $header,$d);
		$i=1;
		foreach($usersData as $row){
		    $row['mobile'] = $this->encrypt_model->decryptField($row['mobile']);
		        $linedata=array($i,$row["admin_name"],$row["city"],$row["login_date_time"],$row["login_date_time"],"","");
		    fputcsv($f,$linedata,$d);
		    $i++;
		 }
		fseek($f,0);
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   fpassthru($f);
		fclose($f); 
		exit; 
	}

    
	public function remainder_notifications(){
         $data['notifications'] =  $this->emp_model->notification_remainder();
         $data['rm_image'] =  $this->emp_model->rm_image(); 
        //  print_r($data['rm_image']);die;
       $this->load->view('admin_header'); 
		$this->load->view('notification_remainder', $data);
		$this->load->view('admin_footer');
    
    }

    public function expiry_notifications(){
        $params = $this->input->get();
        $data['rm_image'] =  $this->emp_model->rm_image(); 
       
		$filters = [];
		if(isset($params["f_date"]) && !empty($params["f_date"])) {
			$filters["f_date"] = $params["f_date"];
		}
		
		if(isset($params["t_date"]) && !empty($params["t_date"])) {
			$filters["t_date"] = $params["t_date"];
		}

        if(isset($params["app_status"]) && !empty($params["app_status"])) {
			$filters["app_status"] = $params["app_status"];
		}
     
        $data['expiry_notifications'] =  $this->emp_model->expiry_notifications($filters);
        $data['collected_by'] = $this->emp_model->collected_by();

        $i=0;
     
  

        $this->load->view('admin_header',$data); 
         $this->load->view('expiry_notifications', $data);
         $this->load->view('admin_footer');

	
    }
    public function update_remainder(){
        $profileId = $this->input->post('profileId');  
        $reason = $this->input->post('reason');  
        // print_r($profileID);die;

        $this->db->where('ms_id', $profileId);
        $this->db->where('reason', $reason);
        $this->db->update('remainders', ['status' => 1]);
        echo " {$profileId} Action completed successfully.";
        
    }
	
	
	
	
}


