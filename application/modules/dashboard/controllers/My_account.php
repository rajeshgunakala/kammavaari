<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class My_account extends CI_Controller {
    public $headerPage = '../../views/header';
    public $footerPage = '../../views/footer';
    public $listPage = 'my_account';
    public $viewPage = 'search-result';
    public $profilePage = 'profile-view';
    public $shortListPage = 'my_shortlist';
	public $paymentStatistics = 'payment_statistics';
    public function __construct() {
        parent::__construct();
        $this->load->model('My_account_model', 'my_model');
        $this->load->model('Dashboard_model', 'dashboard_model');
        $this->load->model('Search_partner_model', 'search_model');
		$this->load->model('Search_model', 'search_profile_model');
        $this->load->library('email');
        $this->load->model('Encrypt_model', 'encrypt_model');
        $this->load->model("Encrypt_model");
		$this->load->library('pagination'); 
		$this->perPage = 10; 
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
    public function basic_info_update()
    {
        //    echo "<pre>"; print_r($_POST);
            $id =  $this->input->post("user_id");
                $data = array(
                    // 'name' => $this->input->post("name"),
                    'user_id ' => $this->input->post("user_id"),
                    'marital_status' =>$this->input->post("status"),
                    'height' =>$this->input->post("height"),
                    'caste' => $this->input->post("caste"),
                    'religion' => $this->input->post("religion"),
                    'mother_tounge' => $this->input->post("mtongue"),
                    // 'age' => $this->input->post("age"),
                    'time_of_birth' => $this->input->post("btime"),
                    'place_of_birth' => $this->input->post("pbirth"),
                    'star' => $this->input->post("star"),
                    'paadam' => $this->input->post("padam"),
                    'raasi' => $this->input->post("raasi"),
                    'gothram' =>$this->input->post("gothram")
                );
            //  echo "<pre>"; print_r($data);die;
              
            $query =$this->db->query("SELECT user_id FROM tbl_religion_info WHERE user_id='".$id."'");
             
            $result_count = $query->num_rows();
        //   echo $result_count;die;
            if ($result_count > 0) {
                    $this->db->where('user_id', $id); 
                    $this->db->update('tbl_religion_info', $data);
                    return redirect('dashboard/My_account/');
            } else {
                // echo "dsj";die;
                if ($this->db->insert('tbl_religion_info', $data)) {
                    // Insertion was successful
                    $this->session->set_flashdata('pending', 'Data recorded successfully wait for admin confirmation');
                    return redirect('dashboard/My_account/');
                } else {
                    // Insertion failed
                    $this->session->set_flashdata('error', 'Error inserting data. Please try again.');
                    return redirect('dashboard/My_account/');
                }
            }
        
    }

    public function profession_info_update()
    {
                  //echo "<pre>"; print_r($_POST);die;
                $id =  $this->input->post("user_id");
                
                $profession = array(
                    'occupation' => $this->input->post("occupation"),
                    'user_id' => $this->input->post("user_id"),
                    'annual_income' => $this->input->post("annual_income"),
                    'company' =>  trim($this->input->post("company_name")),
                    'about_profession' =>trim($this->input->post("about_profession")),
                    'country'   => $this->input->post("living_in"),
                    'state' => $this->input->post("state"),
                    'city' => $this->input->post("city"),
                );

                $queryProfession=$this->db->query("SELECT user_id FROM tbl_professional_info WHERE user_id='".$id."'");
                $pro_count = $queryProfession->num_rows();
                if ($pro_count > 0) {
                    $this->db->where('user_id', $id); 
                    $this->db->update('tbl_professional_info', $profession);
                } else {
                    if ($this->db->insert('tbl_professional_info', $profession)) {
                        // Insertion was successful
                        $this->session->set_flashdata('pending', 'Data recorded successfully wait for admin confirmation');
                    } else {
                        // Insertion failed
                        $this->session->set_flashdata('error', 'Error inserting data. Please try again.');
                        return redirect('dashboard/My_account/');
                    }
                }
   
            $partner = array(
                    'ms_id' => $this->input->post("user_id"),
                     "p_height_from" => $this->input->post('p_height_from'),
                     "p_height_to" => $this->input->post('p_height_to'),
                     "p_age_from" => $this->input->post('p_age_from'),
                     "p_age_to" => $this->input->post('p_age_to'),
                     "p_marital_status" => $this->input->post('p_marital_status'),
                     "p_mother_tongue"  => $this->input->post("p_mother_tongue"),
                     "p_caste" => $this->input->post("p_caste"),
                     "p_star" => $this->input->post("p_star"),

                     "p_education" => $this->input->post("p_education"),
                     "employee_in" => $this->input->post("employee_in"),
                     "p_profession" => $this->input->post("p_profession"),
                     "p_country" => $this->input->post("p_country"),
                     "p_city" => $this->input->post("p_city"),
            );

            $queryFetchParter = $this->db->query("SELECT ms_id FROM tbl_partner_preferences WHERE ms_id = '".$id."'");
            $fetchPartnerCount = $queryFetchParter->num_rows();
            if($fetchPartnerCount >1)
            {
                  $this->db->where('ms_id', $id);
                  $this->db->update('tbl_partner_preferences', $partner);
                  return redirect('dashboard/My_account/');  
            }else{
                  if($this->db->insert('tbl_partner_preferences', $partner)){
                        $this->session->set_flashdata('succes', 'Updated  successfully ');
                        return redirect('dashboard/My_account/');
                  }else{
                      $this->session->set_userdata('error', 'Failed to update please try agin later');
                      return redirect('dashboard/My_account/');
                  }
            }

    }


    public function family_info_update()
    {
          //echo "<pre>"; print_r($_POST);die;
        $id =  $this->input->post("user_id");
        // echo $id;die;
        $data = array(
            'father_name' => $this->input->post("father_name"),
            'user_id' => $this->input->post("user_id"),
            'father_mobile' => $this->Encrypt_model->hashInput($this->input->post("father_mobile")),
            'father_email' => $this->Encrypt_model->hashInput($this->input->post("father_email")),
            'father_education' =>  $this->input->post("father_education"),
            'father_profession' =>  $this->input->post("father_profession"),
            // 'father_father_name' =>   $this->input->post("fathers_father_name"),
            // 'father_father_state' => $this->input->post("fathers_father_state"),
            // 'father_father_dist' => $this->input->post("fathers_father_district"),
            // 'father_father_native_place' => $this->input->post("fathers_father_native_place"),
            'mother_name' => $this->input->post("mother_name"),
            'mother_mobile' =>$this->Encrypt_model->hashInput($this->input->post("mother_mobile")),
            'mother_email' =>$this->Encrypt_model->hashInput($this->input->post("mother_email")),
            'mother_education' => $this->input->post("mother_education"),
            'mother_profession' => $this->input->post("mother_profession"),
            // 'mother_father_name' => $this->input->post("mothers_father_name"),
            // 'mother_father_state' => $this->input->post("mothers_father_state"),
            // 'mother_father_dist' => $this->input->post("mothers_father_district"),
            // 'mother_father_native' => $this->input->post("mothers_father_native_place");
        );
        
        //   echo "<pre>"; print_r($data);die;

    $query =$this->db->query("SELECT user_id FROM tbl_parents_info WHERE user_id ='".$id."'");
    
    $result_count = $query->num_rows();
    // echo $result_count;die;
    if ($result_count > 0) {
        $this->db->where('user_id', $id); 
        $this->db->update('tbl_parents_info', $data);
        // return redirect('dashboard/My_account/');
    } else {
        if ($this->db->insert('tbl_parents_info', $data)) {
            // Insertion was successful
            $this->session->set_flashdata('Updated ', 'Data recorded successfully ');
            // return redirect('dashboard/My_account/');
        } else {
            // Insertion failed
            $this->session->set_flashdata('error', 'Error inserting data. Please try again.');
            return redirect('dashboard/My_account/');
        }
    }
     // siblings data updating
    $siblings = array(
        'user_id' => $this->input->post("user_id"),
        'no_of_brothers' => $this->input->post("no_of_brothers"),
        'no_of_sisters' => $this->input->post("no_of_sisters"),
    ); 
     $querysibli =$this->db->query("SELECT user_id  FROM tbl_siblings_info WHERE user_id ='".$id."'");
     $result_count_sibli = $querysibli->num_rows();

     if ($result_count_sibli > 0) {
        $this->db->where('user_id', $id); 
        $this->db->update('tbl_siblings_info', $siblings);
        // return redirect('dashboard/My_account/');
    } else {
        if ($this->db->insert('tbl_siblings_info', $siblings)) {
            // Insertion was successful 
            $this->session->set_flashdata('Updated ', 'Data recorded successfully ');
            // return redirect('dashboard/My_account/');
        } else {
            // Insertion failed
            $this->session->set_flashdata('error', 'Error inserting data. Please try again.');
             return redirect('dashboard/My_account/');
        }
    }

    // updating property deatails
                 $property = array(
                         'ms_id ' => $this->input->post("user_id"),
                         'Property_type' => $this->input->post("property_type"),
                         'property_value' => $this->input->post("property_value"),
                         'property_Desc' => $this->input->post("property_desc"),
                 );
                 $propertyInfo =$this->db->query("SELECT ms_id  FROM ms_property_info WHERE ms_id ='".$id."'");
                 $result_count_property = $propertyInfo->num_rows();
                 if ($result_count_property > 0) {
                    $this->db->where('ms_id', $id); 
                    $this->db->update('ms_property_info', $property);
                    return redirect('dashboard/My_account/');
                } else {
                    if ($this->db->insert('ms_property_info', $property)) {
                        // Insertion was successful 
                        $this->session->set_flashdata('Updated ', 'Data recorded successfully ');
                        return redirect('dashboard/My_account/');
                    } else {
                        // Insertion failed
                        $this->session->set_flashdata('error', 'Error inserting data. Please try again.');
                        return redirect('dashboard/My_account/');
                    }
                }
                  
         
    }

    // public function 
    public function index() {
        if (!$this->session->userdata('user_id')) redirect('login');

        $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
        $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
        $data['profile_info'] = $this->dashboard_model->get_profile_info($this->session->userdata('user_id'));
        // echo "<pre>";print_r($data['primary_info']);die;
		$data["payment_statistics"] = $this->my_model->getCustomerPaymentStatistics($this->session->userdata('user_id'));
		$data["payment_statistics"]["intrest"] = $this->my_model->contact_count($this->session->userdata('user_id'));
		$data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
		$data['preference_details'] = $this->search_model->get_preference_details();  
		$data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
        $data['religion_details'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
        $data["ignore"] = $this->my_model->getIgnoreProfiles($this->session->userdata('user_id'));
        $data["shortlist"] = $this->my_model->getShortListProfiles($this->session->userdata('user_id'));
        foreach ($data['ignore'] as $value) {
            $res[] = $value['to_msid'];
        }
        foreach ($data['shortlist'] as $value) {
            $res1[] = $value['to_msid'];
        }
        $data['recently_viewed'] = $this->my_model->recently_viewed($this->session->userdata('user_id'));
        $data['shortlisted_count'] = $this->my_model->shortlisted_count($this->session->userdata('user_id'));
        $data['ignored_count'] = $this->my_model->ignored_count($this->session->userdata('user_id'));
        //	$data['recentview_count']=$this->my_model->recently_viewed($this->session->userdata('user_id'));
        $data['contact_list'] = $this->my_model->contact_count($this->session->userdata('user_id'));
        $data['profile_intrest_by'] = $this->my_model->profile_intrest_by_count($this->session->userdata('user_id'));
        $data['view_short_ignore'] = $this->my_model->view_short_ignore($this->session->userdata('user_id'));
        $data['contact'] = $this->my_model->contact($this->session->userdata('user_id'));
         $data['viewed_contacts'] = $this->my_model->getProfilesViewedByUser($this->session->userdata('user_id'));
        //print_r($data['viewed_contacts']);
        $data['view_short_ignore_list'] = $res;
        foreach ($data['viewed_contacts'] as $value) {
            $res2[] = $value["kv_profileview_on"];
        }
        foreach ($data['contact'] as $value) {
            $res1[] = $value['to_MSid'];
        }
        $data['contact_array_list'] = $res1;
        $data['profile_info']['mobile'] = $this->encrypt_model->decryptField($data['profile_info']['mobile']);
        $data['profile_info']['email'] = $this->encrypt_model->decryptField($data['profile_info']['email']); 
        $data['profile_info']['father_mobile'] = $this->encrypt_model->decryptField($data['profile_info']['father_mobile']);
        // echo "<pre>"; print_r( $data['profile_info']['father_mobile']);die;
        $data['profile_info']['father_email'] = $this->encrypt_model->decryptField($data['profile_info']['father_email']);
        $data['profile_info']['mother_mobile'] = $this->encrypt_model->decryptField($data['profile_info']['mother_mobile']);
        $data['profile_info']['mother_email'] = $this->encrypt_model->decryptField($data['profile_info']['mother_email']);
		$data['education_info'] = $this->search_profile_model->education_info($this->session->userdata('user_id'));
		
		// getimage
		$data['getImages'] = $this->dashboard_model->get_images_details($this->session->userdata('user_id'));
      
      // echo '<pre>';print_r($data);exit;
        $this->load->view($this->headerPage, $data);
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
            $data['search_records'] = $this->my_model->getsearchrecords($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country);
            $this->load->view($this->headerPage);
            $this->load->view($this->listPage, $data);
            $this->load->view($this->footerPage);
        }
    }
    public function profile($id) {
        if ($this->session->userdata('user_id') != "" && $this->session->userdata('user_email') != "") {
            $data['profile_info'] = $this->my_model->get_profile_info($id);
            $data['images_info'] = $this->my_model->get_images($id);
            $this->load->view($this->headerPage);
            $this->load->view($this->profilePage, $data);
            $this->load->view($this->footerPage);
        } else {
            return redirect('register');
        }
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
    
    public function updatepaymentinfo() {
        $user_id = $this->session->userdata('user_id');
        $price = $this->input->post("price");
        $stat = $this->input->post("stat");
        $click = $this->input->post("click");
        $expDate = date('Y-m-d', strtotime("+" . $this->input->post('months') . "months"));
        $paymentInfo = array('user_id' => $user_id, 'agreed_amount' => $price, 'paid_amount' => $price, 'bal_amount' => 0, 'payment_type' => "Registration", 'paid_date' => date('Y-m-d H:i:s'), 'comments' => "Online Payment");
        $InsertID = $this->my_model->insert_payment_info($paymentInfo);
        $paymentLog = array('payment_id' => $InsertID, 'user_id' => $user_id, 'allowed_contacts' => $click, 'used_contacts' => 0, 'expiry_date' => $expDate);
        $res = $this->my_model->insert_payment_log($paymentLog);
        echo $res;
    }
    public function view_update() {
        $user_id = $this->session->userdata('user_id');
        $to_profile_id = $this->input->post('to_user_id');
        $to_user = $this->my_model->get_user_id($to_profile_id);
        $to_user_id = $to_user[0]['id'];
        $this->my_model->update_view_status($user_id, $to_user_id);
        $data['check_contact'] = $this->my_model->get_contact_list($user_id, $to_user_id);
        echo count($data['check_contact']);
    }
    public function view_profile_update() {
        $user_id = $this->session->userdata('user_id');
        $to_profile_id = $this->input->post('to_user_id');
        $to_user = $this->my_model->get_user_id($to_profile_id);
        $to_user_id = $to_user[0]['id'];
        $this->my_model->update_viewprofile_status($user_id, $to_user_id);
        $data['check_contact'] = $this->my_model->get_contact_list($user_id, $to_user_id);
        echo count($data['check_contact']);
    }
    public function shortlist_update() {
        $user_id = $this->session->userdata('user_id');
        $to_user_id = $this->input->post('to_user_id');  
        $user_id_rm = $this->my_model->getRmId($user_id);
        $to_user_id_rm = $this->my_model->getRmId($to_user_id);
        $res = $this->my_model->update_shortlist_status($user_id, $to_user_id,$user_id_rm,$to_user_id_rm);
        $data['check_contact'] = $this->my_model->get_contact_list($user_id, $to_user_id);
        echo count($data['check_contact']);
    }
    public function sendOnshortlist() {
        return true;
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
    public function ignore_update() {
        $user_id = $this->session->userdata('user_id');
        $to_user_id = $this->input->post('to_user_id');
        //$to_user = $this->my_model->get_user_id($to_profile_id);
        //$to_user_id = $to_user[0]['id'];
        $this->my_model->update_ignored_status($user_id, $to_user_id);
        $data['check_contact'] = $this->my_model->get_contact_list($user_id, $to_user_id);
        echo count($data['check_contact']);
    }
    public function notinerest_update() {
        $user_id = $this->session->userdata('user_id');
        $to_user_id = $this->input->post('to_user_id');
        //$to_user = $this->my_model->get_user_id($to_profile_id);
        //$to_user_id = $to_user[0]['id'];
        $this->my_model->notinerest_update($user_id, $to_user_id);
        //$count=$this->my_model->update_contact_list($user_id,$to_user_id);
        
    }
    public function contact_update() {
		//echo 'hi';exit;
        $user_id = $this->session->userdata('user_id');
        $to_profile_id = $this->input->post('to_user_id');
        //$to_user = $this->my_model->get_user_id($to_profile_id);
        //$to_user_id = $to_user[0]['id'];
        $this->my_model->customersideinterests($user_id, $to_profile_id, '', '');
        //$count=$this->my_model->update_contact_list($user_id,$to_user_id);
        
    }
    public function mysideinterests($user_id, $to_user_id) {
        //echo '<pre>1. ';print_r(count($getcount));exit;
        //echo $user_id.' - '.$to_user_id;exit;
        
    }
    public function sendProfileOnMail() {
        //skipping email for testing
        return true;
       
    }
    public function sendProfileOnMailunPaidAc() {
        //skipping email for testing
        return true;
        
    }
    public function getCustomerShortListProfiles() {
        $user_id = $this->session->userdata('user_id');
        $data = $this->my_model->getCustomerIntrestedProfileList($user_id);
        $this->load->view($this->headerPage);
        $this->load->view($this->my_shortlist, $data);
        $this->load->view($this->footerPage);
    }
	
	public function getCustomerPaymentStatistics() {
		$user_id = $this->session->userdata('user_id');
        $data["payment_details"] = $this->my_model->getCustomerPaymentStatistics($user_id);
		$data["payment_details"]["intrest"] = $this->my_model->contact_count($user_id);
		//print_r($data);exit;
        $this->load->view($this->headerPage);
        $this->load->view($this->paymentStatistics, $data);
        $this->load->view($this->footerPage);
    }
	
	public function updateImages()  { 
		$user_id = $this->session->userdata('user_id');
         if ($this->input->post('submit') != '') {
		 }
	}
}