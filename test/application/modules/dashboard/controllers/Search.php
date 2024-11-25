<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Search extends CI_Controller {
    public $headerPage = '../../views/header';
    public $footerPage = '../../views/footer';
    public $listPage = 'search';
    public $viewPage = 'search-result';
    public $profilePage = 'profile-view';
    public $profileNew = 'profile-new';
    public $profileMob = 'profilePage';
    public $profileMob1 = 'profileDetails';
    public function __construct() {
        parent::__construct();
        $this->load->model('Search_model', 'my_model');
        $this->load->model('Dashboard_model', 'dashboard_model');
        $this->load->model('My_account_model', 'my_model1');
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
    public function index() {
        $previous_url = $this->session->userdata('previous_url');
        $data["previous_url"] = $previous_url;
		$data["page_name"] = $this->session->userdata('page_name');
        $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
        $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
        $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
        $data['recently_viewed'] = $this->my_model->recently_viewed($this->session->userdata('user_id'));
        $data['shortlisted_count'] = $this->my_model->shortlisted_count($this->session->userdata('user_id'));
        $data['ignored_count'] = $this->my_model->ignored_count($this->session->userdata('user_id'));
        $data['contact_list'] = $this->my_model->contact_count($this->session->userdata('user_id'));
		$data['profile_intrest_by']=$this->my_account_model->profile_intrest_by_count($this->session->userdata('user_id'));
        $this->load->view($this->headerPage, $data);
        $data['heights'] = $this->my_model->getallheights();
        $data['religions'] = $this->my_model->getallreligions();
        $data['mothertounges'] = $this->my_model->getallmothertounges();
        $data['countries'] = $this->my_model->getallcountries();
        $data['professions'] = $this->my_model->getallprofessions();
        $data['castes'] = $this->my_model->getallcastes();
        $data['get_all_records'] = $this->my_model->getallrecords();
        $this->load->view($this->listPage, $data);
        $this->load->view($this->footerPage);
    }
    public function searchprofiles() {
        if ($this->input->post('submit') != '') {
            $gender = $this->input->post('gender');
            $heightfrom = $this->input->post('heightfrom');
            $heightto = $this->input->post('heightto');
            $agefrom = $this->input->post('age-from');
            $ageto = $this->input->post('age-to');
            $maritalstatus = $this->input->post('maritalstatus');
            $caste = $this->input->post('caste');
            $religion = $this->input->post('religion');
            $mothertounge = $this->input->post('mothertounge');
            $education = $this->input->post('education');
            $profession = $this->input->post('profession');
            $country = $this->input->post('country');
            $data['heights'] = $this->my_model->getallheights();
            $data['religions'] = $this->my_model->getallreligions();
            $data['mothertounges'] = $this->my_model->getallmothertounges();
            $data['countries'] = $this->my_model->getallcountries();
            $data['professions'] = $this->my_model->getallprofessions();
            $data['castes'] = $this->my_model->getallcastes();
            $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
            $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
            $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
            $data['recently_viewed'] = $this->my_model->recently_viewed($this->session->userdata('user_id'));
            $data['shortlisted_count'] = $this->my_model->shortlisted_count($this->session->userdata('user_id'));
            $data['ignored_count'] = $this->my_model->ignored_count($this->session->userdata('user_id'));
			$data['profile_intrest_by']=$this->my_account_model->profile_intrest_by_count($this->session->userdata('user_id'));
            $data['contact_list'] = $this->my_model->contact_count($this->session->userdata('user_id'));
            $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
            $data['search_records'] = $this->my_model->getsearchrecords($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country);
		
		   $this->load->view($this->headerPage, $data);
            $this->load->view($this->listPage, $data);
            $this->load->view($this->footerPage);
        }
    }
    public function profile($id) {
     
		$previous_url = $this->session->userdata('previous_url');
        $data["previous_url"] = $previous_url;
		$data["page_name"] = $this->session->userdata('page_name');
		$data['pprimary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
		$data['showinterestcount'] = $this->my_model1->contact_count($this->session->userdata('user_id'));
         //echo "sdsd";exit;
        //echo $this->session->userdata('user_id'); echo $this->session->userdata('user_email');exit; && $this->session->userdata('user_email')!=""
        if ($this->session->userdata('user_id') != "") {
            //$data['profile_info'] = $this->my_model->get_profile_info($id);
            $data['images_info'] = $this->my_model->get_images($id);
            $user_id = $this->my_model->get_user_id($id);
            $user_id = ($user_id[0]['id']) ? $user_id[0]['id'] : $this->session->userdata('user_id');
            //echo  $user_id;exit;
            $data['profileviewpage'] = '1';
			$data['my_details'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
            $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($user_id);
            $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($user_id);
            $data['religion_info'] = $this->my_model->get_religion_details($user_id);
            $data['profession_info'] = $this->my_model->get_profession_details($user_id);
            //$data['education_info'] = $this->my_model->education_info($user_id);
            $data['parents_info'] = $this->my_model->get_parents_details($user_id);
            $data['siblings_info'] = $this->my_model->get_siblings_details($user_id);
            $data['profile_complete'] = $this->dashboard_model->get_profile_complete($user_id);
            $data['recently_viewed'] = $this->my_model1->recently_viewed($user_id);
            $data['shortlisted_count'] = $this->my_model1->shortlisted_count($user_id);
            $data['ignored_count'] = $this->my_model1->ignored_count($user_id);
            $data['contact_list'] = $this->my_model1->contact_count($user_id);
            $data['education_info'] = $this->my_model->education_info($user_id);
            $data['payment_details'] = $this->dashboard_model->get_payment_details($user_id);
            $data['property_info'] = $this->my_model->get_property_details($user_id);
            $data['compareprof'] = $this->input->post('bothprofiles');
            
        // echo '<pre>';print_r($data);exit;
            if ($this->input->post('bothprofiles') != '1') $this->load->view($this->headerPage, $data);
            //$this->load->view($this->profilePage,$data);
            $this->load->view($this->profileNew, $data);
            if ($this->input->post('bothprofiles') != '1') $this->load->view($this->footerPage);
        } else {
            return redirect('register');
        }
    }

    public function profile2($id,$main_id) {
     
		$previous_url = $this->session->userdata('previous_url');
        $data["previous_url"] = $previous_url;
		$data["page_name"] = $this->session->userdata('page_name');
		$data['pprimary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
		$data['showinterestcount'] = $this->my_model1->contact_count($this->session->userdata('user_id'));
         //echo "sdsd";exit;
        //echo $this->session->userdata('user_id'); echo $this->session->userdata('user_email');exit; && $this->session->userdata('user_email')!=""
        if ($this->session->userdata('user_id') != "") {
            //$data['profile_info'] = $this->my_model->get_profile_info($id);
            $data['images_info'] = $this->my_model->get_images($id);
            $user_id = $this->my_model->get_user_id($id);
            $user_id = ($user_id[0]['id']) ? $user_id[0]['id'] : $this->session->userdata('user_id');
            //echo  $user_id;exit;
            $data['profileviewpage'] = '1';
			$data['my_details'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
            $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($user_id);
            $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($user_id);
            $data['religion_info'] = $this->my_model->get_religion_details($user_id);
            $data['profession_info'] = $this->my_model->get_profession_details($user_id);
            //$data['education_info'] = $this->my_model->education_info($user_id);
            $data['parents_info'] = $this->my_model->get_parents_details($user_id);
            $data['siblings_info'] = $this->my_model->get_siblings_details($user_id);
            $data['profile_complete'] = $this->dashboard_model->get_profile_complete($user_id);
            $data['recently_viewed'] = $this->my_model1->recently_viewed($user_id);
            $data['shortlisted_count'] = $this->my_model1->shortlisted_count($user_id);
            $data['ignored_count'] = $this->my_model1->ignored_count($user_id);
            $data['contact_list'] = $this->my_model1->contact_count($user_id);
            $data['education_info'] = $this->my_model->education_info($user_id);
            $data['payment_details'] = $this->dashboard_model->get_payment_details($user_id);
            $data['property_info'] = $this->my_model->get_property_details($user_id);
            $data['compareprof'] = $this->input->post('bothprofiles');
            $this->db->set('read_not', 0);
            $this->db->where('MS_svi_id', $main_id);
            $this->db->update('ms_shortlist_viewedd_ignored');
            
        // echo '<pre>';print_r($data);exit;
            if ($this->input->post('bothprofiles') != '1') $this->load->view($this->headerPage, $data);
            
            $this->load->view($this->profileNew, $data);
            if ($this->input->post('bothprofiles') != '1') $this->load->view($this->footerPage);
        } else {
            return redirect('register');
        }
    }
    public function user_profile() {
        $string = $this->uri->segment(4); 
    //    echo base64_decode($string);die;
        if (!empty($string)) {
            //echo $string;exit();
            $decodedString = base64_decode($string);
            // echo $decodedString;exit();
            $dataArr = explode("/", $decodedString);
            // print_r($dataArr);exit();
            $user_id = $dataArr[0];
            $fticket = $dataArr[1];
            // $arr = explode("-", $fticket);
            $arr = explode("-", $fticket);
            $length = count($arr); 
            // print_r($length);die;
            if($length == 3){
                $res = $this->update_user_profile_view_status($fticket);         
            }else{
                $res = $this->update_user_profile_view_status($fticket);
            }

           
            
            $userPid = $this->my_model->get_user_profile_id($user_id);
            $id = $userPid['profile_id'];
            $idComb = explode("-", $fticket);
            $fromId = $idComb[0];
            $data['my_details'] = $this->dashboard_model->getPrimaryDetails($fromId);
            $data['images_info'] = $this->my_model->get_images($id);
            $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($user_id);
            $data['religion_info'] = $this->my_model->get_religion_details($user_id);
            $data['profession_info'] = $this->my_model->get_profession_details($user_id);
            $data['parents_info'] = $this->my_model->get_parents_details($user_id);
            $data['siblings_info'] = $this->my_model->get_siblings_details($user_id);
            //echo $user_id;
            $data['education_info'] = $this->my_model->education_info($user_id);
            $data['property_info'] = $this->my_model->get_property_details($user_id);
            $this->load->view($this->headerPage, $data);
            $this->load->view($this->profilePage, $data);
            $this->load->view($this->footerPage);
        }
    }


    public function update_user_profile_view_status($ticket)
    {
        $arr = explode("-", $ticket);
        $tag = $arr[2];
    
        if ($tag == 'from') {
           
            $condition = '(from_msID=' . $arr[0] . ' AND to_msID=' . $arr[1] . ')';
            $dataArr2 = array(
               't_ticketid' => $ticket,
               't_status'   => 1,
               'ts_Date'    => date('Y-m-d')
           );
   
           $this->db->where($condition);
           $res = $this->db->update('ms_servicelist', $dataArr2);
         

        } else {
        
            $condition1 = '(from_msID=' . $arr[0] . ' AND to_msID=' . $arr[1] . ')';
            $condition2 = '(from_msID=' . $arr[1] . ' AND to_msID=' . $arr[0] . ')';
            $dataArr1 = array(
               'f_ticketid' => $ticket,
               'f_status'   => 1,
               'fs_Date'    => date('Y-m-d')
           );
           $this->db->where($condition1);
           $this->db->or_where($condition2);
           $res = $this->db->update('ms_servicelist', $dataArr1);
        //    echo $this->db->last_query();exit();
        }
    
        return $res;
    }
    
    public function interested_user_profile() {
        $string = $this->uri->segment(4);
        $decodedString = base64_decode($string);
        $dataArr = explode("/", $decodedString);
        $user_id = $dataArr[0];
        $fticket = $dataArr[1];
        $res = $this->my_model->update_user_profile_view_status($fticket);
        //get primary key id
        $serviceListPkId = $this->my_model1->getMsServiceListPkId($fticket);
        $arrn = explode("-", $fticket);
        $arrn[0] = ($arrn[0]) ? $arrn[0] : $this->session->userdata('user_id');
        $arrn[1] = ($arrn[1]) ? $arrn[1] : getuserdetbyprofid($string)->id;
        //echo $arrn[0]."--".$arrn[1];exit;
        $this->my_model1->mysideinterests($arrn[0], $arrn[1], $serviceListPkId);
        $res = $this->my_model->update_interested_status($fticket);
        //$res = $this->my_model->update_user_profile_interested_status_n($dataArr);
        $userPid = $this->my_model->get_user_profile_id($user_id);
        // print_r($userPid);exit();
        $id = $userPid['profile_id'];
        $data['images_info'] = $this->my_model->get_images($id);
        $data['primary_info'] = $this->my_model->get_primary_detailsNew($id);
        $data['religion_info'] = $this->my_model->get_religion_details($user_id);
        $data['profession_info'] = $this->my_model->get_profession_details($user_id);
        $data['parents_info'] = $this->my_model->get_parents_details($user_id);
        $data['siblings_info'] = $this->my_model->get_siblings_details($user_id);
        //echo $user_id;
        $data['education_info'] = $this->my_model->education_info($user_id);
        $data['property_info'] = $this->my_model->get_property_details($user_id);
        
        $data['showinterestcount'] = $this->my_model1->contact_count($this->session->userdata('user_id'));
        
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->profileNew, $data);
        $this->load->view($this->footerPage);
    }
    public function bookmark() {
        $string = $this->input->post("ticket");
        //echo $String;exit;
        $decodedString = base64_decode($string);
        // echo $decodedString;
        $dataArr = explode("/", $decodedString);
        // print_r($dataArr);exit();
        $user_id = $dataArr[0];
        $fticket = $dataArr[1];
        $arrn = explode("-", $fticket);
        $arrn[0] = ($arrn[0]) ? $arrn[0] : $this->session->userdata('user_id');
        $arrn[1] = ($arrn[1]) ? $arrn[1] : getuserdetbyprofid($this->input->post("ticket"))->id;
        $this->my_model1->update_shortlist_status($arrn[0], $arrn[1]);
        $this->my_model1->bookmark($arrn[0], $arrn[1]);
        //echo '<pre>';print_r($arrn);exit;
        
    }
    public function profileviewed() {
        if (in_array($this->session->userdata('type'), array('staff', 'admin'))) exit;
        //$user_id=$this->session->userdata('user_id');
        //echo $user_id;exit;
        //echo '<pre>';print_r($this->session->userdata('type'));exit;
        $string = $this->input->post("ticket");
        //echo $String;exit;
        $decodedString = base64_decode($string);
        // echo $decodedString;
        $dataArr = explode("/", $decodedString);
        // print_r($dataArr);exit();
        $user_id = $dataArr[0];
        $fticket = $dataArr[1];
        $arrn = explode("-", $fticket);
        //print_r($arrn[0]);
        //print_r($arrn[1]);exit();
        $arrn[0] = ($arrn[0]) ? $arrn[0] : $this->session->userdata('user_id');
        $arrn[1] = ($arrn[1]) ? $arrn[1] : getuserdetbyprofid($this->input->post("ticket"))->id;
        /*print_r($arrn[0]);
         print_r($arrn[1]);exit();*/
        $this->my_model1->profileviewed($arrn[0], $arrn[1]);
        //echo '<pre>';print_r($arrn);exit;
        
    }
    public function setInterestedStatus() {
        $string = $this->input->post("ticket");
        $decodedString = base64_decode($string);
        //	echo $decodedString;
        $dataArr = explode("/", $decodedString);
        // print_r($dataArr);exit();
        $user_id = $dataArr[0];
        $fticket = $dataArr[1];
        //get primary key id
        $serviceListPkId = $this->my_model1->getMsServiceListPkId($fticket);
        $arrn = explode("-", $fticket);
        $arrn[0] = ($arrn[0]) ? $arrn[0] : $this->session->userdata('user_id');
        $arrn[1] = ($arrn[1]) ? $arrn[1] : getuserdetbyprofid($this->input->post("ticket"))->id;
        $this->my_model1->mysideinterests($arrn[0], $arrn[1], $serviceListPkId);
        //$this->my_model1->update_contact_list($arrn[0],$arrn[1]);
        $res = $this->my_model->update_interested_status($fticket);
        if ($res) {
            $data = $this->my_model->get_data_for_email($fticket);
            // print_r($data);exit();
            $msg = ' ' . $data['first_name'] . ' ' . $data['last_name'] . ' showing interest on your  profile, contact your RM ' . $data['username'] . ' - ' . $data['phone_no'] . ' from kammavaari.com';
            //$this->SMSApi($data['mobile'], $msg);
            
        }
        echo $res;
    }
    public function setNotInterestedStatus() {
        $string = $this->input->post("ticket");
        // echo $String;
        $decodedString = base64_decode($string);
        // echo $decodedString;
        $dataArr = explode("/", $decodedString);
        // print_r($dataArr);exit();
        $user_id = $dataArr[0];
        $fticket = $dataArr[1];
        //get primary key id
        $serviceListPkId = $this->my_model1->getMsServiceListPkId($fticket);
        $arrn = explode("-", $fticket);
        $arrn[0] = ($arrn[0]) ? $arrn[0] : $this->session->userdata('user_id');
        $arrn[1] = ($arrn[1]) ? $arrn[1] : getuserdetbyprofid($this->input->post("ticket"))->id;
        $this->my_model1->mysideinterests($arrn[0], $arrn[1], $serviceListPkId, 'reject');
        //  $this->my_model1->update_contact_list($arrn[0],$arrn[1]);
        $res = $this->my_model->update_Notinterested_status($fticket);
        echo $res;
    }
    public function view_profile() {
        // print_r("deva");die;
        $string = $this->uri->segment(4);
        // echo $string;exit();
        if (!empty($string)) {
            $decodedString = base64_decode($string);
            $dataArr = explode("/", $decodedString);
            $user_id = $dataArr[0];
            $fticket = $dataArr[1];
			$sentBy = isset($dataArr[2]) ? $dataArr[2] : 8;
            // print_r($user_id);die;	
			if(is_numeric($user_id)) {	
              		
            $res = $this->my_model->addWhatsAppShareInsertAndView($fticket, $sentBy);  
			} else {
				$user_id = base64_decode(base64_decode($string));
				log_message('error', 'To Id is not available for User - '.$user_id);
			}
            $userPid = $this->my_model->get_user_profile_id($user_id);
            //print_r($sentBy);exit();
            $id = $userPid['profile_id'];
            $data['images_info'] = $this->my_model->get_images($id);
            $data['primary_info'] = $this->my_model->get_primary_detailsNew($id);
            $data['religion_info'] = $this->my_model->get_religion_details($user_id);
            $data['profession_info'] = $this->my_model->get_profession_details($user_id);
            $data['education_info'] = $this->my_model->education_info($user_id);
            $data['parents_info'] = $this->my_model->get_parents_details($user_id);
            $data['siblings_info'] = $this->my_model->get_siblings_details($user_id);
            $data['property_info'] = $this->my_model->get_property_details($user_id);
            $data['profile_rm_details'] = $this->my_model->get_profile_rm_details($user_id);
            $shareImageurl = site_url() . "images/profilepics/noimage.jpg";
            if (count($data['images_info']) > 0) {
                foreach ($data['images_info'] as $value) {
                    if ($value['photoname'] != "" && $value['ismain'] == 1 && $value['isactive'] == 1) {
                        $shareImageurl = $value['applicationphotopath'];
                    }
                }
            }
            $primaryData = $data['primary_info'];
            $data['whatsapp_share_profile_title'] = trim($primaryData["first_name"] . " " . $primaryData["last_name"]);
            $data['whatsapp_share_profile_desc'] = trim($primaryData["first_name"] . " " . $primaryData["last_name"]) . " is matched for your profile";
            $data['whatsapp_share_profile_image_url'] = $shareImageurl;
           
            $this->load->view($this->headerPage, $data);
            $this->load->view($this->profileMob, $data);
            $this->load->view($this->footerPage);
        }
    }
	    public function view_profile_contact_info() {
        $string = $this->uri->segment(4);
        //echo $string;exit();
        if (!empty($string)) {
            $decodedString = base64_decode($string);
            $dataArr = explode("/", $decodedString);
            $user_id = $dataArr[0];
            $fticket = $dataArr[1];
			$sentBy = isset($dataArr[2]) ? $dataArr[2] : 8;
			$expdate = $dataArr['expiry'];
			//echo $expdate;exit;
			$today = date("Y-m-d");
			$full_profile='1';
			if($expdate < $today) {
			if(is_numeric($user_id)) {					
            $res = $this->my_model->addWhatsAppShareInsertAndView($fticket, $sentBy, $full_profile);  
			} else {
				$user_id = base64_decode(base64_decode($string));
				log_message('error', 'To Id is not available for User - '.$user_id);
			}
            $userPid = $this->my_model->get_user_profile_id($user_id);
            //print_r($sentBy);exit();
            $id = $userPid['profile_id'];
            $data['images_info'] = $this->my_model->get_images($id);
            $data['primary_info'] = $this->my_model->get_primary_detailsNew($id);
            $data['religion_info'] = $this->my_model->get_religion_details($user_id);
            $data['contact_info'] = $this->my_model->get_contact_details($user_id);
            $data['profession_info'] = $this->my_model->get_profession_details($user_id);
            $data['education_info'] = $this->my_model->education_info($user_id);
            $data['parents_info'] = $this->my_model->get_parents_details($user_id);
            $data['siblings_info'] = $this->my_model->get_siblings_details($user_id);
            $data['property_info'] = $this->my_model->get_property_details($user_id);
            $data['profile_rm_details'] = $this->my_model->get_profile_rm_details($user_id);
            $shareImageurl = site_url() . "images/profilepics/noimage.jpg";
            if (count($data['images_info']) > 0) {
                foreach ($data['images_info'] as $value) {
                    if ($value['photoname'] != "" && $value['ismain'] == 1 && $value['isactive'] == 1) {
                        $shareImageurl = $value['applicationphotopath'];
                    }
                }
            }
            $primaryData = $data['primary_info'];
            $data['whatsapp_share_profile_title'] = $primaryData["first_name"] . " " . $primaryData["last_name"];
            $data['whatsapp_share_profile_desc'] = $primaryData["first_name"] . " " . $primaryData["last_name"] . " is matched for your profile";
            $data['whatsapp_share_profile_image_url'] = $shareImageurl;
            //print_r($data);exit;
			
            $this->load->view($this->headerPage, $data);
            $this->load->view($this->profileMob1, $data);
            $this->load->view($this->footerPage);
			}
			else{
			redirect('kammavaari.com');
			}
		}
	}
    public function SMSApi($mobno, $msg) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://sms.packsms.com/app/smsapi/index.php?");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "key=35E3A81AB593A4&campaign=0&routeid=7&type=text&contacts=" . $mobno . "&senderid=TELUMB&msg=" . urlencode($msg));
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    public function view_update() {
        $user_id = $this->session->userdata('user_id');
        $to_profile_id = $this->input->post('to_user_id');
        $to_user = $this->my_model->get_user_id($to_profile_id);
        $to_user_id = $to_user[0]['id'];
        $this->my_model->update_view_status($user_id, $to_user_id);
    }
    public function shortlist_update() {
        $user_id = $this->session->userdata('user_id');
        $to_profile_id = $this->input->post('to_user_id');
        $to_user = $this->my_model->get_user_id($to_profile_id);
        $to_user_id = $to_user[0]['id'];
        $this->my_model->update_shortlist_status($user_id, $to_user_id);
    }
    public function ignore_update() {
        $user_id = $this->session->userdata('user_id');
        $to_profile_id = $this->input->post('to_user_id');
        $to_user = $this->my_model->get_user_id($to_profile_id);
        $to_user_id = $to_user[0]['id'];
        $this->my_model->update_ignored_status($user_id, $to_user_id);
    }
    public function contact_update() {
        $user_id = $this->session->userdata('user_id');
        $to_profile_id = $this->input->post('to_user_id');
        $to_user = $this->my_model->get_user_id($to_profile_id);
        $to_user_id = $to_user[0]['id'];
        $this->my_model->update_contact_list($user_id, $to_user_id);
    }
}