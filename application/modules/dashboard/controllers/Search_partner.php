<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Search_partner extends CI_Controller {
    public $headerPage = '../../views/header';
    public $footerPage = '../../views/footer';
    public $listPage = 'search_partner';
    public $viewPage = 'search-result';
    public $profilePage = 'profile-view';
    public function __construct() {
        parent::__construct();
        $this->load->model('Search_partner_model', 'search_partner_model');
        $this->load->model('My_account_model', 'myaccount_model');
        $this->load->model('Dashboard_model', 'dashboard_model');
		 $this->load->library('pagination'); 
		$this->perPage = 10;
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
    public function index() {
	    $this->session->set_userdata('previous_url', '#');
		$this->session->set_userdata('page_name','search_result');
        $data['heights'] = $this->search_partner_model->getallheights();
        $data['ages'] = $this->myaccount_model->getallAges();
        $data['religions'] = $this->search_partner_model->getallreligions();
        $data['mothertounges'] = $this->search_partner_model->getallmothertounges();
        $data['countries'] = $this->search_partner_model->getallcountries();
        $data['professions'] = $this->search_partner_model->getallprofessions();
        $data['castes'] = $this->search_partner_model->getallcastes();
        $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
        $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
        $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
        $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
        $data['religion_details'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
        $data['preference_details'] = $this->search_partner_model->get_preference_details();
		$data['viewed_contacts'] = $this->myaccount_model->getProfilesViewedByUser($this->session->userdata('user_id'));
        if ($data['primary_info']['gender'] == 'female') {
            $data['fromAge'] = intval($data['primary_info']['currentAge']) + intval($data['preference_details']['p_age_from']);
            $data['toAge'] = intval($data['primary_info']['currentAge']) + intval($data['preference_details']['p_age_to']);
        } elseif ($data['primary_info']['gender'] == 'male') {
            $data['fromAge'] = intval($data['primary_info']['currentAge']) - intval($data['preference_details']['p_age_to']);
            $data['toAge'] = intval($data['primary_info']['currentAge']) - intval($data['preference_details']['p_age_from']);
        }
        // echo $data['fromAge'] . "" .$data['toAge']; exit();
		
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->listPage, $data);
        $this->load->view($this->footerPage);
    }
    public function searchprofiles() {	

		$data = $conditions = array(); 
		$data["ignore"] = $this->myaccount_model->getIgnoreProfiles($this->session->userdata('user_id'));
		$data["shortlist"] = $this->myaccount_model->getShortListProfiles($this->session->userdata('user_id'));
			foreach ($data['ignore'] as $value) {
				$res[] = $value['to_msid'];
			}
			foreach ($data['shortlist'] as $value) {
				$res1[] = $value['to_msid'];
			}
		$data['contact'] = $this->myaccount_model->contact($this->session->userdata('user_id'));
		$data['viewed_contacts'] = $this->myaccount_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
		foreach($data['viewed_contacts'] as $value) {
			$res2[] = $value["kv_profileview_on"];
		}
		foreach($data['contact'] as $value) {
			$res1[] = $value['to_MSid'];
		}
		$data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
		$data['conf_profiles_for_regular'] = $this->myaccount_model->getConfidentialProfilesForRegular($res, $res1, $res2);
		
		$data['pprimary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
		$data['countprofileviwesbyuser'] = $this->myaccount_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
		$data['showinterestcount'] = $this->myaccount_model->contact_count($this->session->userdata('user_id'));
		
	if(isset($_REQUEST["type"]) && $_REQUEST["type"] == "profileid") {
		$profileId = $this->input->post('profile_id');
		$this->session->set_userdata('profile_id', $profileId);
		$data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
		$data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
		$data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
		$data['recently_viewed'] = $this->myaccount_model->recently_viewed($this->session->userdata('user_id'));
		$data['viewed_contacts'] = $this->myaccount_model->getProfilesViewedByUser($this->session->userdata('user_id'));			
		$data['search_records'] = $this->search_partner_model->getsearchPartnerProfileById($profileId);
		
		
		$this->load->view($this->headerPage, $data);
		$this->load->view($this->viewPage, $data);
		$this->load->view($this->footerPage);
		return;
	}
	
	if(isset($_REQUEST["type"]) && $_REQUEST["type"] == "profileid-search") {
		$profileIdSearch = $this->input->post('profile_id_search');
		$this->session->set_userdata('profile_id_search', $profileIdSearch);
		$data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
		$data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
		$data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
		$data['recently_viewed'] = $this->myaccount_model->recently_viewed($this->session->userdata('user_id'));
		$data['viewed_contacts'] = $this->myaccount_model->getProfilesViewedByUser($this->session->userdata('user_id'));			
		$data['search_records'] = $this->search_partner_model->getsearchPartnerByProfileId($profileIdSearch);
		
		
		$this->load->view($this->headerPage, $data);
		$this->load->view($this->viewPage, $data);
		$this->load->view($this->footerPage);
		return;
	}
	
		$pageNo = $this->uri->segment(4); 
		if(isset($pageNo) && $pageNo >= 0) {
			$heightfrom = $this->session->userdata('heightfrom');
			$heightto = $this->session->userdata('heightto');
			$agefrom = $this->session->userdata('agefrom');
			$ageto = $this->session->userdata('ageto');
			 $maritalstatus = $this->session->userdata('maritalstatus');
			 $religion = $this->session->userdata('religion');
			 $caste = $this->session->userdata('caste');
			 $mothertounge = $this->session->userdata('mothertounge');
			 $education = $this->session->userdata('education');
			  $profession = $this->session->userdata('profession');
			  $country = $this->session->userdata('country');
			  $property_for = $this->session->userdata('property_for');
			  $property_to = $this->session->userdata('property_to');
			 //var_dump($heightfrom);exit;
		} else {
			//print_r($this->session);exit;
			if(!empty($this->input->post('heightfrom')))
			{					
				$heightfrom = $this->input->post('heightfrom');
				$this->session->set_userdata('heightfrom', $heightfrom);	
				//	echo $this->session->userdata('heightfrom');exit;
			} else {
				$this->session->set_userdata('heightfrom', "");
			}
			if(!empty($this->input->post('heightto')))
			{
				$heightto = $this->input->post('heightto');
				$this->session->set_userdata('heightto', $heightto);					
			} else {
				$this->session->set_userdata('heightto', "");
			}
			if(!empty($this->input->post('agefrom')))
			{
				$agefrom = $this->input->post('agefrom');
				$this->session->set_userdata('agefrom', $agefrom);
			} else {
				$this->session->set_userdata('agefrom', "");
			}
			if(!empty($this->input->post('ageto')))
			{
				$ageto = $this->input->post('ageto');
				$this->session->set_userdata('ageto', $ageto);
			} else {
				$this->session->set_userdata('ageto', "");
			} 
			if(!empty($this->input->post('propertyfor')))
			{
				$property_for = $this->input->post('propertyfor');
				$this->session->set_userdata('property_for', $property_for);
			} else {
				$this->session->set_userdata('property_for', "");
			}
			if(!empty($this->input->post('propertyto')))
			{
				$property_to = $this->input->post('propertyto');
				$this->session->set_userdata('property_to', $property_to);
			} else {
				$this->session->set_userdata('property_to', "");
			} 
			if(!empty($this->input->post('maritalstatus')))
			{
				$maritalstatus = $this->input->post('maritalstatus');
				$this->session->set_userdata('maritalstatus', $maritalstatus);
			} else {
				$this->session->set_userdata('maritalstatus', "");
			}
			if(!empty($this->input->post('caste')))
			{
				$caste = $this->input->post('caste');
				$this->session->set_userdata('caste', $caste);
			} else {
				$this->session->set_userdata('caste', "");
			}
			if(!empty($this->input->post('religion')))
			{
				$religion = $this->input->post('religion');
				$this->session->set_userdata('religion', $religion);
			} else {
				$this->session->set_userdata('religion', "");
			}
			if(!empty($this->input->post('mothertounge')))
			{
				$mothertounge = $this->input->post('mothertounge');
				$this->session->set_userdata('mothertounge', $mothertounge);
			} else {
				$this->session->set_userdata('mothertounge', "");
			}
			if(!empty($this->input->post('education')))
			{
				$education = $this->input->post('education');
				$this->session->set_userdata('education', $education);
			} else {
				$this->session->set_userdata('education', "");
			}
			if(!empty($this->input->post('profession')))
			{
				$profession = $this->input->post('profession');
				$this->session->set_userdata('profession', $profession);
			} else {
				$this->session->set_userdata('profession', "");
			}
			if(!empty($this->input->post('country')))
			{
				$country = $this->input->post('country');
			//	print_r($country);exit;
				$this->session->set_userdata('country', $country);
			} else {
				$this->session->set_userdata('country', "");
			}
		}		
			//echo "<pre>";print_r($country);exit;
            $data['religion_details'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
           // $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
			
            if ($data['primary_info']['gender'] == "male") {
                $gender = "female";
            } else if ($data['primary_info']['gender'] == "female") {
                $gender = "male";
            }
			
            $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
            $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
            $data['recently_viewed'] = $this->myaccount_model->recently_viewed($this->session->userdata('user_id'));
            $data['shortlisted_count'] = $this->myaccount_model->shortlisted_count($this->session->userdata('user_id'));
            $data['ignored_count'] = $this->myaccount_model->ignored_count($this->session->userdata('user_id'));
            $data['contact_list'] = $this->myaccount_model->contact_count($this->session->userdata('user_id'));
            $data['profile_intrest_by'] = $this->myaccount_model->profile_intrest_by_count($this->session->userdata('user_id'));
            $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
           // $data['search_records'] = $this->search_partner_model->getsearchrecords($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country, $res, $res1, $res2);
            //echo "<pre>";print_r($data);
			
				$uriSegment = 4; 
				 
				// Get record count 
				$conditions['returnType'] = 'count'; 
				$totalRec = $this->search_partner_model->getsearchrecords($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country, $res, $res1, $res2, $conditions, $property_for, $property_to);
				 
				 
				// Pagination configuration 
				$config['base_url']    = base_url().'dashboard/search_partner/searchprofiles/'; 
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
				 $config['first_link'] = false;
              			  $config['last_link'] = false;
				 
				// Initialize pagination library 
				$this->pagination->initialize($config); 
				 // print_r($this->pagination->create_links());exit;
				// Define offset 
				$page = $this->uri->segment($uriSegment); 
				$offset = !$page?0:$page; 
				 
				// Get records 
				$conditions = array( 
					'start' => $offset, 
					'limit' => $this->perPage 
				); 
				$data['total_search_profiles'] = $totalRec;
				$data['search_records'] = $this->search_partner_model->getsearchrecords($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country, $res, $res1, $res2, $conditions, $property_for, $property_to);
	
		$previous_url = $this->session->userdata('previous_url');
		 $data["previous_url"] = $previous_url;
		 $data["page_name"] = $this->session->userdata('page_name');
		 $this->session->set_userdata('previous_url', current_url());
			$this->load->view($this->headerPage, $data);
            $this->load->view($this->viewPage, $data);
            $this->load->view($this->footerPage);
       
    }
    // for pagination
    public function searchprofilesPage() {
		$this->session->set_userdata('previous_url', current_url());
        $data['religion_details'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
        $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
        $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
        $data["ignore"] = $this->myaccount_model->getIgnoreProfiles($this->session->userdata('user_id'));
        $data["shortlist"] = $this->myaccount_model->getShortListProfiles($this->session->userdata('user_id'));
        $data['viewed_contacts'] = $this->myaccount_model->getProfilesViewedByUser($this->session->userdata('user_id'));
        foreach ($data['ignore'] as $value) {
            $res[] = $value['to_msid'];
        }
        foreach ($data['shortlist'] as $value) {
            $res1[] = $value['to_msid'];
        }
        foreach ($data['viewed_contacts'] as $value) {
            $res2[] = $value["kv_profileview_on"];
        }
        if ($data['primary_info']['gender'] == "male") {
            $gender = "female";
        } else if ($data['primary_info']['gender'] == "female") {
            $gender = "male";
        }
        $heightfrom = $this->session->userdata('heightfrom');
        $heightto = $this->session->userdata('heightto');
        $agefrom = $this->session->userdata('agefrom');
        $ageto = $this->session->userdata('ageto');
        $maritalstatus = $this->session->userdata('maritalstatus');
        $caste = $data['religion_details']['caste'];
        $religion = $this->session->userdata('religion');
        $mothertounge = $this->session->userdata('mothertounge');
        $education = $this->session->userdata('education');
        $profession = $this->session->userdata('profession');
        $country = $this->session->userdata('country');
        $data['search_records'] = $this->search_partner_model->getsearchrecords($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country, $res, $res1, $res2);
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->viewPage, $data);
        $this->load->view($this->footerPage);
    }
    public function profile($id) {
        if ($this->session->userdata('user_id') != "" && $this->session->userdata('user_email') != "") {
            $data['profile_info'] = $this->search_partner_model->get_profile_info($id);
            $data['images_info'] = $this->search_partner_model->get_images($id);
            $this->load->view($this->headerPage);
            $this->load->view($this->profilePage, $data);
            $this->load->view($this->footerPage);
        } else {
            return redirect('register');
        }
    }
}