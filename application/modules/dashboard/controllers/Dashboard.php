<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public $headerPage = '../../views/header';
    public $footerPage = '../../views/footer';
    public $listPage = 'dashboard';
	public $basicDetailsPage = 'basic_details';
    public $religionPage = 'religion-info';
    public $professionalPage = 'professional-info';
    public $propertyPage = 'property-info';
    public $parentsPage = 'parents-info';
    public $siblingsPage = 'siblings-info';
    public $viewPage = 'view-profile';
    public $listPage_redirect = 'home';
    public $login_redirect = 'home';
    public $imagesPage = 'images-info';
    public $imagesRedirect = 'dashboard/imagesadd';
    public $imagesRedirectEdit = 'dashboard/imagesedit';
    public $paymentPage = 'payment';
	public $newProfilesPage = 'newprofiles';
	public $assistedProfilesPage = 'assistedprofiles';
	public $suggestedProfilesPage = 'suggestedprofiles';
	public $planpage = 'plandetails';
    public $recomendedProfiles = 'recomeProfilles';
    public $user_chat_his = 'chat_with_admin';
    public function __construct() {
        parent::__construct();
        $this->load->model('Dashboard_model', 'dashboard_model');
        $this->load->model('Search_model', 'search_model');
        $this->load->model('My_account_model', 'my_account_model');
		$this->load->model('Search_partner_model','sp_model');
        $this->load->library('email');
		// Load pagination library 
        $this->load->library('pagination'); 
		
		$this->perPage = 10; 
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'on');
    }
	 public function index() {
        // print_r("deva");die;
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            $this->session->set_userdata('previous_url', current_url());
                $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data["ignore"] = $this->my_account_model->getIgnoreProfiles($this->session->userdata('user_id'));
				$data["shortlist"] = $this->my_account_model->getShortListProfiles($this->session->userdata('user_id'));
					foreach ($data['ignore'] as $value) {
						$res[] = $value['to_msid'];
					}
					foreach ($data['shortlist'] as $value) {
						$res1[] = $value['to_msid'];
					}
				$data['recently_viewed'] = $this->my_account_model->recently_viewed($this->session->userdata('user_id'));
				$data['shortlisted_count'] = $this->my_account_model->shortlisted_count($this->session->userdata('user_id'));
				
				$data['ignored_count'] = $this->my_account_model->ignored_count($this->session->userdata('user_id'));
				$data['contact_list'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
				$data['profile_intrest_by'] = $this->my_account_model->profile_intrest_by_count($this->session->userdata('user_id'));
				$data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data['religion_details'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
				$data['view_short_ignore'] = $this->my_account_model->view_short_ignore($this->session->userdata('user_id'));
				$data['contact'] = $this->my_account_model->contact($this->session->userdata('user_id'));
				$data['preference_details'] = $this->sp_model->get_preference_details();

                $data['partner_preferences'] = $this->my_account_model->get_partner_preferences();
                $dob = null;
                $living_inn= null;
                $status = null;
                $gender = null;
                $h_from = null;
                $h_to = null;
                $country = null;
                if (!empty($data['partner_preferences'])) {
                    $firstResult = $data['partner_preferences'][0]; 
                    $dob = $firstResult->dob;
                    $living_inn = $firstResult->living_in;
                    $status = $firstResult->marital_status;
                    $gender = $firstResult->gender;
                    $h_from =  $firstResult->h_from;
                    $h_to =  $firstResult->h_to;
                    $country =  $firstResult->country;
                   
                }

                $data['recomended_profiles'] = $this->my_account_model->get_AllPartner_preferences($dob,$living_inn,$status,$gender,$h_from,$h_to,$country);

                // echo "<pre>"; print_r($data['recomended_profiles']);die;
				$data['viewed_contacts'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
				$data['view_short_ignore_list'] = $res;
				
				$data['countprofileviwesbyuser'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
			    $data['showinterestcount'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
			   
			   
			//	print_r($data['contact_list']);exit;
				foreach($data['viewed_contacts'] as $value) {
					$res2[] = $value["kv_profileview_on"];
				}
				foreach($data['contact_list'] as $value) {
					$res3[] = $value['kv_msi_interested_on'];
				}
               //echo $data["primary_info"]['id'];exit;
                $data['shortlisted_profiles'] = $this->my_account_model->shortlistedProfilesByUser($this->session->userdata('user_id'),$res,$res3);
				$data['contact_array_list'] = $res1;
				$data['get_all_records'] = $this->my_account_model->getallrecords($res, $res1, $res2,$res3);
                $data['assisted_profiles'] = $this->my_account_model->getSuggestedProfilesByRm($data["primary_info"]['rm_id'],$res, $res1, $res2);
				$data['conf_profiles_for_regular'] = $this->my_account_model->getConfidentialProfilesForRegular($res, $res1, $res2);
			    $data['suggestedProfiles'] = $this->my_account_model->getSuggestedProfilesByEmail($data["primary_info"]['rm_id'],$res, $res1, $res2,$res3, $conditions);
			    
              //  echo "<pre>";print_r($data);exit;
                $this->load->view($this->headerPage, $data);
				$this->load->view($this->listPage, $data);
                $this->load->view($this->footerPage);
            }
         else {
				redirect($this->listPage_redirect, 'refresh');
        }
    }

    public function get_short(){
         $res = $this->my_account_model->getShortListForUser($this->session->userdata('user_id'));
         echo $res;
    }

    public function view_profile(){
        
    }

    public function get_rmname() {
        $id = $this->input->post('id');
        $substring = substr($id, 4);
       
        $select = "select tbl_admin_data.username,tbl_admin_data.phone_no from ms_profilesetting
         inner join tbl_admin_data on ms_profilesetting.profileowner=tbl_admin_data.id
         WHERE ms_profilesetting.ms_id= '$substring' ";
                //  print_r($select);die;   
        $query_result = $this->db->query($select)->row();   
    
        if ($query_result) {     
            $result_to_return = array(
                'USERNAME' => $query_result->username,
                'phone_no' => $query_result->phone_no
            );
            echo json_encode($result_to_return);
        } else {          
            echo json_encode(array('error' => 'No data found'));
        }
    }
    
    public function basic_details() {
		
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            if ($this->input->post('submit') != "") {
                $user_id = $this->session->userdata('user_id');
                $profile_id = substr($this->input->post('year'), -2);
                //$age = date('Y') - $this->input->post('year');
				
                $data = array('mobile' => $this->input->post('mobile'), 'first_name' => $this->input->post('first_name'), 'last_name' => $this->input->post('last_name'), 'gender' => $this->input->post('gender'),
                //'profile_id'=> 'KV'.$profile_id . $user_id,
                'living_in' => $this->input->post('country'), 'updated_on' => date('Y-m-d H:i:s'));
                $this->db->where('id', $user_id);
                $query = $this->db->update('tbl_primary_info', $data);
                if ($query) {
                    $data['msg'] = "Profile details updated successfully";
                    $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                    $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                    $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                    $this->load->view($this->headerPage, $data);
                    $data['countries'] = $this->dashboard_model->get_all_countries();
                    $this->load->view($this->basicDetailsPage, $data);
                    $this->load->view($this->footerPage);
                }
            } else {
				$data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['countries'] = $this->dashboard_model->get_all_countries();
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage, $data);
                $this->load->view($this->basicDetailsPage, $data);
                $this->load->view($this->footerPage);
            }
        } else {
            redirect($this->listPage_redirect, 'refresh');
        }
    }
    
    public function status($id,$status){
          $res = $this->dashboard_model->status($id,$status);
          if($res){
             $this->session->set_flashdata('success','Updated succesfully');
             redirect('dashboard/dashboard');
              echo 'came';die;
          }else{
            $this->session->set_flashdata('failed','Failed to update');
            redirect('dashboard/dashboard');
          }
    }
    public function religion() {
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            if ($this->input->post('submit') != "") {
                $user_id = $this->session->userdata('user_id');
				
				$result = $this->dashboard_model->getHeightInCms($this->input->post('height'));
                $set_data = array('user_id' => $user_id, 'marital_status' => $this->input->post('marital_status'), 'height' => $this->input->post('height'), 'height_cm' => $result["height_in_cm"],'religion' => $this->input->post('religion'), 'mother_tounge' => $this->input->post('mothertounge'), 'caste' => $this->input->post('caste'), 'sub_caste' => $this->input->post('subcaste'), 'gothram' => $this->input->post('gothram'), 'place_of_birth' => $this->input->post('place'), 'time_of_birth' => $this->input->post('time'), 'star' => $this->input->post('star'), 'raasi' => $this->input->post('raasi'), 'dosham' => $this->input->post('dosham'), 'updated_on' => date('Y-m-d H:i:s'));
				 $religionDetails = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
                $this->db->where('user_id', $user_id);
                if (count($religionDetails) > 0) {
                    $query = $this->db->update('tbl_religion_info', $set_data);
                } else {
                    $query = $this->db->insert('tbl_religion_info', $set_data);
                }
                if ($query) {
                    $data['msg'] = "Religion details are updated successfully.";
                    $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                    $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                    $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                    $this->load->view($this->headerPage, $data);
                    $data['religion_info'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
                    $data['heights'] = $this->dashboard_model->get_all_heights();
                    $data['religions'] = $this->dashboard_model->get_all_religions();
                    $data['mother_tounges'] = $this->dashboard_model->get_all_mothertounges();
                    $data['castes'] = $this->dashboard_model->get_all_castes();
                    $data['subcastes'] = $this->dashboard_model->get_all_subcastes();
                    $data['stars'] = $this->dashboard_model->get_all_stars();
                    $data['zodic_signs'] = $this->dashboard_model->get_all_zodic_signs();
                    $this->load->view($this->religionPage, $data);
                    $this->load->view($this->footerPage);
                }
            } else {
                $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage, $data);
                $data['religion_info'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
                $data['heights'] = $this->dashboard_model->get_all_heights();
                $data['religions'] = $this->dashboard_model->get_all_religions();
                $data['mother_tounges'] = $this->dashboard_model->get_all_mothertounges();
                $data['castes'] = $this->dashboard_model->get_all_castes();
                $data['subcastes'] = $this->dashboard_model->get_all_subcastes();
                $data['stars'] = $this->dashboard_model->get_all_stars();
                $data['zodic_signs'] = $this->dashboard_model->get_all_zodic_signs();
                $this->load->view($this->religionPage, $data);
                $this->load->view($this->footerPage);
            }
        } else {
            redirect($this->listPage_redirect, 'refresh');
        }
    }
    public function professionalinfo() {
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            if ($this->input->post('submit') != "") {
                $user_id = $this->session->userdata('user_id');
                $set_data = array('user_id' => $user_id, 'heighst_education' => $this->input->post('highest_education'), 'education_degree' => $this->input->post('education_degree'), 'specialization' => $this->input->post('specialization'), 'university' => $this->input->post('university'), 'college' => $this->input->post('college'), 'education_description' => $this->input->post('education-details'), 'employee_in' => $this->input->post('employee_in'), 'occupation' => $this->input->post('occupation'), 'currency' => $this->input->post('currency'), 'annual_income' => $this->input->post('monthly_income'), 'company' => $this->input->post('company'), 'about_profession' => $this->input->post('about_profession'), 'country' => $this->input->post('groom_country'), 'state' => $this->input->post('state_id'), 'city' => $this->input->post('city'), 'about_me' => $this->input->post('about'), 'visatype' => $this->input->post('visatype'), 'residing-since' => $this->input->post('residing-since'), 'arrival-date' => $this->input->post('arrival-date'), 'departure-date' => $this->input->post('departure-date'), 'updated_on' => date('Y-m-d H:i:s'));
                $professionDetails = $this->dashboard_model->get_professional_details($this->session->userdata('user_id'));
                $this->db->where('user_id', $user_id);
                if (count($professionDetails) > 0) {
                    $query = $this->db->update('tbl_professional_info', $set_data);
                } else {
                    $query = $this->db->insert('tbl_professional_info', $set_data);
                }
                if ($query) {
                    $data['msg'] = "Education and Professional details are updated successfully.";
                    $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                    $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                    $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                    $this->load->view($this->headerPage, $data);
                    $data['professional_info'] = $this->dashboard_model->get_professional_details($this->session->userdata('user_id'));
                    $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();
                    $data['educationdegree'] = $this->dashboard_model->get_educationdegrees();
                    $data['specialization'] = $this->dashboard_model->get_specializations();
                    $data['countries'] = $this->dashboard_model->get_all_countries();
                    $data['states'] = $this->dashboard_model->get_all_states();
                    $data['professions'] = $this->dashboard_model->getallprofessions();
                    $this->load->view($this->professionalPage, $data);
                    $this->load->view($this->footerPage);
                }
            } else {
                $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage, $data);
                $data['professional_info'] = $this->dashboard_model->get_professional_details($this->session->userdata('user_id'));
                $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();
                $data['educationdegree'] = $this->dashboard_model->get_educationdegrees();
                $data['specialization'] = $this->dashboard_model->get_specializations();
                $data['countries'] = $this->dashboard_model->get_all_countries();
                $data['states'] = $this->dashboard_model->get_all_states();
                $data['professions'] = $this->dashboard_model->getallprofessions();
                $this->load->view($this->professionalPage, $data);
                $this->load->view($this->footerPage);
            }
        } else {
            redirect($this->listPage_redirect, 'refresh');
        }
    }
    public function property() {
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            $data['property_count'] = $this->dashboard_model->get_property_count($this->session->userdata('user_id'));
            $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
            $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
            $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
            $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
            $data['professional_info'] = $this->dashboard_model->get_professional_details($this->session->userdata('user_id'));
            $data['property_info'] = $this->dashboard_model->get_property_details($this->session->userdata('user_id'));
            $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();
            $data['educationdegree'] = $this->dashboard_model->get_educationdegrees();
            $data['specialization'] = $this->dashboard_model->get_specializations();
            $data['countries'] = $this->dashboard_model->get_all_countries();
            $data['states'] = $this->dashboard_model->get_all_states();
            $data['professions'] = $this->dashboard_model->getallprofessions();
			$data['property_values'] = $this->dashboard_model->getPropertyValueRanges();
            if ($this->input->post('submit') != "") {
                // update record
                $user_id = $this->session->userdata('user_id');
                $set_data = array('Property_type' => $this->input->post('property_type'), 'property_value' => $this->input->post('property_value'), 'property_Desc' => $this->input->post('property_description'));
                $this->db->where('ms_id', $user_id);
                $query = $this->db->update('ms_property_info', $set_data);
                if ($query) {
                    $data['msg'] = "Property details updated successfully";
                }
                $data['property_count'] = $this->dashboard_model->get_property_count($this->session->userdata('user_id'));
                $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
                $data['professional_info'] = $this->dashboard_model->get_professional_details($this->session->userdata('user_id'));
                $data['property_info'] = $this->dashboard_model->get_property_details($this->session->userdata('user_id'));
                $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();
                $data['educationdegree'] = $this->dashboard_model->get_educationdegrees();
                $data['specialization'] = $this->dashboard_model->get_specializations();
                $data['countries'] = $this->dashboard_model->get_all_countries();
                $data['states'] = $this->dashboard_model->get_all_states();
                $data['professions'] = $this->dashboard_model->getallprofessions();
                $this->load->view($this->headerPage, $data);
                $this->load->view($this->propertyPage, $data);
                $this->load->view($this->footerPage);
            } else if ($this->input->post('insert_submit') != "") {
                $user_id = $this->session->userdata('user_id');
                /*  --------------- INSERT RECORD -------------   */
                $set_data = array('ms_id' => $user_id, 'Property_type' => $this->input->post('property_type'), 'property_value' => $this->input->post('property_value'), 'property_Desc' => $this->input->post('property_description'), 'created_date' => date('Y-m-d H:i:s'),);
                $this->db->where('ms_id', $user_id);
                $query = $this->db->insert('ms_property_info', $set_data);
                if ($query) {
                    $data['msg'] = "Property details are added successfully";
                }
                $data['property_count'] = $this->dashboard_model->get_property_count($this->session->userdata('user_id'));
                $data['property_info'] = $this->dashboard_model->get_property_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage, $data);
                $this->load->view($this->propertyPage, $data);
                $this->load->view($this->footerPage);
            } else {
                $this->load->view($this->headerPage, $data);
                $this->load->view($this->propertyPage, $data);
                $this->load->view($this->footerPage);
            }
        } else {
            redirect($this->listPage_redirect, 'refresh');
        }
    }
    public function parentsinfo() {
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            if ($this->input->post('submit') != "") {
                $user_id = $this->session->userdata('user_id');
                $set_data = array('user_id' => $user_id, 'father_name' => $this->input->post('father-name'), 'father_education' => $this->input->post('father-education'), 'father_profession' => $this->input->post('father-profession'), 'father_email' => $this->input->post('father-email'), 'father_mobile' => $this->input->post('father-mobile'), 'fathers_father_name' => $this->input->post('fathers-father-name'), 'fathers_father_state' => $this->input->post('fathers-father-state'), 'fathers_father_district' => $this->input->post('fathers-father-district'), 'fathers_father_native_place' => $this->input->post('fathers-father-native-place'), 'mother_name' => $this->input->post('mother-name'), 'mother_education' => $this->input->post('mother-education'), 'mother_profession' => $this->input->post('mother-profession'), 'mother_email' => $this->input->post('mother-email'), 'mother_mobile' => $this->input->post('mother-mobile'), 'mothers_father_name' => $this->input->post('mothers-father-name'), 'mothers_father_state' => $this->input->post('mothers-father-state'), 'mothers_father_district' => $this->input->post('mothers-father-district'), 'mothers_father_native_place' => $this->input->post('mothers-father-native-place'), 'updated_on' => date('Y-m-d H:i:s'));
                $parentsDetails = $this->dashboard_model->get_parent_details($this->session->userdata('user_id'));
                $this->db->where('user_id', $user_id);
                if (count($parentsDetails) > 0) {
                    $query = $this->db->update('tbl_parents_info', $set_data);
                } else {
                    $query = $this->db->insert('tbl_parents_info', $set_data);
                }
                if ($query) {
                    $data['msg'] = "Parents details are updated successfully.";
                    $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                    $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                    $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                    $this->load->view($this->headerPage, $data);
                    $data['parents_info'] = $this->dashboard_model->get_parent_details($this->session->userdata('user_id'));
                    $data['states'] = $this->dashboard_model->get_all_states();
                    $data['districts'] = $this->dashboard_model->get_all_districts();
                    $this->load->view($this->parentsPage, $data);
                    $this->load->view($this->footerPage);
                }
            } else {
                $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
                $data['parents_info'] = $this->dashboard_model->get_parent_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage, $data);
                $data['states'] = $this->dashboard_model->get_all_states();
                $data['districts'] = $this->dashboard_model->get_all_districts();
                $this->load->view($this->parentsPage, $data);
                $this->load->view($this->footerPage);
            }
        } else {
            redirect($this->listPage_redirect, 'refresh');
        }
    }
    public function siblingsinfo() {
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            if ($this->input->post('submit') != "") {
                $user_id = $this->session->userdata('user_id');
                $set_data = array('user_id' => $user_id, 'no_of_brothers' => $this->input->post('no-of-brothers'), 'no_of_sisters' => $this->input->post('no-of-sisters'), 'no_of_elder_brothers' => $this->input->post('no-of-elder-brothers'), 'no_of_younger_brothers' => $this->input->post('no-of-younger-brothers'), 'no_of_elder_sisters' => $this->input->post('no-of-elder-sisters'), 'no_of_younger_sisters' => $this->input->post('no-of-younger-sisters'), 'updated_on' => date('Y-m-d H:i:s'));
                $siblingDetails = $this->dashboard_model->get_sibling_details($this->session->userdata('user_id'));
                $this->db->where('user_id', $user_id);
                if (count($siblingDetails) > 0) {
                    $query = $this->db->update('tbl_siblings_info', $set_data);
                } else {
                    $query = $this->db->insert('tbl_siblings_info', $set_data);
                }
                if ($query) {
                    $data['msg'] = "Siblings details are updated successfully.";
                    $data['siblings_info'] = $this->dashboard_model->get_sibling_details($this->session->userdata('user_id'));
                    $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                    $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                    $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                    $this->load->view($this->headerPage, $data);
                    $this->load->view($this->siblingsPage, $data);
                    $this->load->view($this->footerPage);
                }
            } else {
                $data['siblings_info'] = $this->dashboard_model->get_sibling_details($this->session->userdata('user_id'));
                $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage, $data);
                $this->load->view($this->siblingsPage, $data);
                $this->load->view($this->footerPage);
            }
        } else {
            redirect($this->listPage_redirect, 'refresh');
        }
    }
    public function imagesinfo() {
        $data['images_info'] = $this->dashboard_model->get_images_details($this->session->userdata('user_id'));
        $data['imagescount'] = $this->dashboard_model->imagescount($this->session->userdata('user_id'));
        $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
        $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
        $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
        $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->imagesPage, $data);
        $this->load->view($this->footerPage);
    }
    public function viewprofile() {
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
            $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
            $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
            $data['profile_info'] = $this->dashboard_model->get_profile_info($this->session->userdata('user_id'));
            $data['images_info'] = $this->dashboard_model->get_images($this->session->userdata('user_id'));
            $data['religion_info'] = $this->search_model->get_religion_details($this->session->userdata('user_id'));
            $data['profession_info'] = $this->search_model->get_profession_details($this->session->userdata('user_id'));
            $data['parents_info'] = $this->search_model->get_parents_details($this->session->userdata('user_id'));
            $data['siblings_info'] = $this->search_model->get_siblings_details($this->session->userdata('user_id'));
            $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
            $data['recently_viewed'] = $this->my_account_model->recently_viewed($this->session->userdata('user_id'));
            $data['shortlisted_count'] = $this->my_account_model->shortlisted_count($this->session->userdata('user_id'));
            $data['ignored_count'] = $this->my_account_model->ignored_count($this->session->userdata('user_id'));
            $data['profile_intrest_by'] = $this->my_account_model->profile_intrest_by_count($this->session->userdata('user_id'));
            $data['contact_list'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
            $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
            $data['Propertyinfo'] = $this->dashboard_model->get_property_details($this->session->userdata('user_id'));
            $this->load->view($this->headerPage, $data);
            $this->load->view($this->viewPage, $data);
            $this->load->view($this->footerPage);
        } else {
            redirect($this->listPage_redirect, 'refresh');
        }
    }
    public function payment() {
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            if ($this->input->post('submit') != '') {
                $userid = $this->session->userdata('user_id');
                $paid_amount = $this->input->post('cost');
                $allowed_contacts = $this->input->post('contacts');
                if ($allowed_contacts == 35) {
                    $date = new DateTime("+3 months");
                    $exp_date = $date->format("Y-m-d H:i:s");
                } else if ($allowed_contacts == 55) {
                    $date = new DateTime("+6 months");
                    $exp_date = $date->format("Y-m-d H:i:s");
                } else if ($allowed_contacts == 100) {
                    $date = new DateTime("+9 months");
                    $exp_date = $date->format("Y-m-d H:i:s");
                }
                $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                /*$data['payment_details']=$this->dashboard_model->get_payment_details($this->session->userdata('user_id'));*/
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                /*if(count($data['payment_details'])==0) {*/
                $data1 = array('user_id' => $userid, 'allowed_contacts' => $allowed_contacts, 'expiry_date' => $exp_date);
                $data['payment_success'] = array(success_msg => 'success');
                $dbRet = $this->db->insert('tbl_payments_log', $data1);
                $this->load->view($this->headerPage, $data);
                $this->load->view($this->paymentPage, $data);
                $this->load->view($this->footerPage);
                //header('Location: /test2/dashboard/payment');
                
            } else {
                $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $this->load->view($this->headerPage, $data);
                $this->load->view($this->paymentPage, $data);
                $this->load->view($this->footerPage);
            }
        } else {
            redirect($this->listPage_redirect, 'refresh');
        }
    }
    public function logout() {
		$notification_id=$this->dashboard_model->getLastLoginId($this->session->userdata('user_id'));
		$this->dashboard_model->updateLogoutTime($notification_id);
        $this->dashboard_model->updateLogoutStatus($notification_id);
        $this->session->unset_userdata('user_login');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_email');
        $this->session->sess_destroy();
        redirect($this->listPage_redirect, 'refresh');
    }
    public function emailssend($msg) {
        $this->load->library('email');
        $this->email->from("info@kammavaari.com", "Kammavaari Team");
        $this->email->to('info@kammavaari.com');
        $this->email->subject("Password was Reset Successfully...");
        $this->email->message($msg);
        return $result = $this->email->send();
    }
    public function getsubcastes() {
        $caste = $this->input->post('valu');
        $castes = $this->dashboard_model->get_all_subcastes_ajax($caste);
        $selBox = '
                <option value="">---Select Subcaste---</option>
                ';
        foreach ($castes as $key => $value) {
            $selBox.= '
                <option value="' . $value['subcaste'] . '">' . $value['subcaste'] . '</option>
                ';
        }
        echo $selBox;
    }
    public function getstates() {
        $country_id = $this->input->post('valu');
        $states = $this->dashboard_model->get_all_states_ajax($country_id);
        $selBox = '
                <option value="">---Select States---</option>
                ';
        foreach ($states as $key => $value) {
            $selBox.= '
                <option value="' . $value['state'] . '">' . $value['state'] . '</option>
                ';
        }
        echo $selBox;
    }
    public function getdistricts() {
        $state_id = $this->input->post('value');
        $districts = $this->dashboard_model->get_all_districts_ajax($state_id);
        $selBox = '<option value="">---Select District---</option>';
        foreach ($districts as $key => $value) {
            $selBox.= '<option value="' . $value['district'] . '">' . $value['district'] . '</option>';
        }
        echo $selBox;
    }
    public function imagesadd() {
        if ($this->input->post('submit') != '') {
            $user_id = $this->session->userdata('user_id');
            $data['images_count'] = $this->dashboard_model->get_images($user_id);
            if (count($data['images_count']) < 3) {
                if ($_FILES['image']['name'] != '') {
                    $j = count($data['images_count']) + 1;
                    if ($j == 1) {
                        $main_photo = 1;
                    } else {
                        $main_photo = 0;
                    }
                    $user_id = $this->session->userdata('user_id');
                    /* $_FILES['image']['name'] = $user_id."_".$_FILES['image']['name'];*/
                    $image_type = $_FILES['image']['type'];
                    $image_type = explode("/", $image_type);
                    $image_type = "." . $image_type[1];
                    $t = time();
                    //$_FILES['image']['name'] = $this->session->userdata('user_id')."_img_".$t.$image_type;
                    $_FILES['image']['name'] = $user_id . "_" . $_FILES['image']['name'];
                    $target_path = "images/profilepics/" . $user_id;
                    if (!is_dir($target_path)) {
                        mkdir($target_path);
                    }
                    $uploadPath = $target_path;
                    $imagepathnew = site_url() . $uploadPath . '/' . $_FILES['image']['name']; //exit;
                    //echo $imagepathnew;exit;
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
                    $config['max_size'] = '0';
                    $config['max_width'] = '0';
                    $config['max_height'] = '0';
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('image')) {
                        $data['msg'] = $this->upload->display_errors();
                    } else {
                        $data = $this->upload->data();
                        //echo '<pre>';print_r($data);
                        $ImgData = $data['file_name'];
                    }
                } else {
                    $data['msg'] = 'Please Upload Image...';
                }
                $result = $this->dashboard_model->add_record($ImgData, $main_photo, $imagepathnew);
                if ($result) {
                    $this->session->set_flashdata('msg_succ', 'added Successfully...');
                    redirect($this->imagesRedirect);
                } else {
                    $data['msg'] = "please try again...";
                }
            } else {
                $this->session->set_flashdata('msg', 'You can add max 3 photos.');
            }
        }
        $data['images_info'] = $this->dashboard_model->get_images_details($this->session->userdata('user_id'));
        $data['imagescount'] = $this->dashboard_model->imagescount($this->session->userdata('user_id'));
        $data['primary_info'] = $this->dashboard_model->get_primary_details($this->session->userdata('user_id'));
        $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
        $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
        $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
        $this->load->view($this->headerPage, $data);
        $this->load->view('images-info-add');
        $this->load->view($this->footerPage);
    }
    public function imagesedit($id) {
        $user_id = $this->session->userdata('user_id');
        $data['record'] = $this->dashboard_model->get_single_record($id);
        $data['msg'] = '';
        $old_image = $data['record']['image'];
        if ($this->input->post('submit') != '') {
            //echo $user_id;exit;
            if ($_FILES['image']['name'] != '') {
                $_FILES['image']['name'] = $user_id . "_" . $_FILES['image']['name'];
                $image_type = $_FILES['image']['type'];
                $image_type = explode("/", $image_type);
                $image_type = "." . $image_type[1];
                $time = time();
                //$data['record']['photoname']=($data['record']['photoname']) ? $data['record']['photoname'] : $time.$image_type;
                $path_to_file2 = 'images/profilepics/' . $user_id . '/' . $data['record']['photoname'];
                unlink($path_to_file2);
                // $_FILES['image']['name']= $data['record']['photoname'];
                $target_path = "images/profilepics/" . $user_id;
                $uploadPath = $target_path;
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
                $config['max_size'] = '0';
                $config['max_width'] = '0';
                $config['max_height'] = '0';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
                    $data['msg'] = $this->upload->display_errors();
                } else {
                    $data = $this->upload->data();
                    $ImgData = $data["file_name"];
                }
            } else {
                $ImgData = $old_image;
            }
            $result = $this->dashboard_model->update_photo_details($id, $ImgData);
            if ($result) {
                $this->session->set_flashdata('msg_succ', 'updated Successfully...');
                redirect($this->imagesRedirect);
            } else {
                $data['msg'] = "please try again...";
            }
        }
        $this->load->view($this->headerPage);
        $this->load->view('edit-image-info', $data);
        $this->load->view($this->footerPage);
    }
    public function delete_image() {
        $id = $this->input->post('rec_id');
        $data = $this->dashboard_model->delete_image_row($id);
        return true;
    }
    public function set_profile_pic() {
        $id = $this->input->post('rec_id');
        $this->dashboard_model->set_profile_pic_data($id);
    }
    public function set_profile_pic_admin() {
        $id = $this->input->post('rec_id');
        $user_id = $this->input->post('user_id');
        $this->dashboard_model->set_profile_pic_data_admin($id, $user_id);
    }
    public function imagestatus($id, $status) {
        $data['msg'] = '';
        $statu = ($status == 1 ? 'Deactive' : 'Active');
        if ($id) {
            $result = $this->dashboard_model->status_record($id, $status);
            if ($result) {
                $this->session->set_flashdata('msg_succ', $statu . ' Successfully...');
                redirect($this->imagesRedirect);
            } else {
                $data['msg'] = " Status Not Updated...";
            }
        }
    }
    public function delete($id) {
        $data['msg'] = '';
        if ($id) {
            $result = $this->dashboard_model->delete_record($id);
            if ($result) {
                $this->session->set_flashdata('msg_succ', 'Deleted Successfully...');
                redirect($this->imagesRedirect);
            } else {
                $data['msg'] = "Not Deleted...";
            }
        }
    }
    public function getdegree() {
        $h_id = $this->input->post('valu');
        $degrees = $this->dashboard_model->get_all_degrees_ajax($h_id);
        $selBox = '<option value="">---Select Education First---</option>';
        foreach ($degrees as $key => $value) {
            $selBox.= '<option value="' . $value['educationdegree'] . '">' . $value['educationdegree'] . '</option>';
        }
        echo $selBox;
    }
    public function getspecialization() {
        $h_id = $this->input->post('valu');
        $specialization = $this->dashboard_model->get_all_specialization_ajax($h_id);
        $selBox = '<option value="">---Select Degree First---</option>';
        foreach ($specialization as $key => $value) {
            $selBox.= '<option value="' . $value['specialization'] . '">' . $value['specialization'] . '</option>';
        }
        echo $selBox;
    }
	
	public function newprofiles() {
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            $this->session->set_userdata('previous_url', current_url());
			$this->session->set_userdata('page_name','newprofiles');
                $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data["ignore"] = $this->my_account_model->getIgnoreProfiles($this->session->userdata('user_id'));
				$data["shortlist"] = $this->my_account_model->getShortListProfiles($this->session->userdata('user_id'));
					foreach ($data['ignore'] as $value) {
						$res[] = $value['to_msid'];
					}
					foreach ($data['shortlist'] as $value) {
						$res1[] = $value['to_msid'];
					}
				$data['recently_viewed'] = $this->my_account_model->recently_viewed($this->session->userdata('user_id'));
				$data['shortlisted_count'] = $this->my_account_model->shortlisted_count($this->session->userdata('user_id'));
				$data['ignored_count'] = $this->my_account_model->ignored_count($this->session->userdata('user_id'));
				$data['contact_list'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
				$data['profile_intrest_by'] = $this->my_account_model->profile_intrest_by_count($this->session->userdata('user_id'));
				$data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data['religion_details'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
				$data['view_short_ignore'] = $this->my_account_model->view_short_ignore($this->session->userdata('user_id'));
				$data['contact'] = $this->my_account_model->contact($this->session->userdata('user_id'));
				$data['preference_details'] = $this->sp_model->get_preference_details();
				$data['viewed_contacts'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
				$data['view_short_ignore_list'] = $res;
				
				foreach($data['viewed_contacts'] as $value) {
					$res2[] = $value["kv_profileview_on"];
				}
				foreach($data['contact_list'] as $value) {
					$res3[] = $value['kv_msi_interested_on'];
				}
				$data['contact_array_list'] = $res1;
				
				$data['assisted_profiles'] = $this->my_account_model->getSuggestedProfilesByRm($data["primary_info"]['id'],$res, $res1, $res2);
				$data['conf_profiles_for_regular'] = $this->my_account_model->getConfidentialProfilesForRegular($res, $res1, $res2);
				$data = $conditions = array(); 
				$uriSegment = 3; 
				 
				// Get record count 
				$conditions['returnType'] = 'count'; 
				$totalRec = $this->my_account_model->getNewProfiles($res, $res1, $res2,$res3,$conditions);
				 
				 
				// Pagination configuration 
				$config['base_url']    = base_url().'dashboard/newprofiles/'; 
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
				$data['total_new_profiles'] = $totalRec;
				$data['newProfiles'] = $this->my_account_model->getNewProfiles($res, $res1, $res2,$res3, $conditions);
				$data['countprofileviwesbyuser'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
				$data['showinterestcount'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
				$data['pprimary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
				$data['payment_details1'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				// echo "<pre>";print_r($data);exit;
                $this->load->view($this->headerPage, $data);
				$this->load->view($this->newProfilesPage, $data);
                $this->load->view($this->footerPage);
            }
         else {
				redirect($this->listPage_redirect, 'refresh');
        }
    }


    public function recomended_profiles()
    {
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            $this->session->set_userdata('previous_url', current_url());
			$this->session->set_userdata('page_name','newprofiles');
                $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data["ignore"] = $this->my_account_model->getIgnoreProfiles($this->session->userdata('user_id'));
				$data["shortlist"] = $this->my_account_model->getShortListProfiles($this->session->userdata('user_id'));
					foreach ($data['ignore'] as $value) {
						$res[] = $value['to_msid'];
					}
					foreach ($data['shortlist'] as $value) {
						$res1[] = $value['to_msid'];
					}
				$data['recently_viewed'] = $this->my_account_model->recently_viewed($this->session->userdata('user_id'));
				$data['shortlisted_count'] = $this->my_account_model->shortlisted_count($this->session->userdata('user_id'));
				$data['ignored_count'] = $this->my_account_model->ignored_count($this->session->userdata('user_id'));
				$data['contact_list'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
				$data['profile_intrest_by'] = $this->my_account_model->profile_intrest_by_count($this->session->userdata('user_id'));
				$data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data['religion_details'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
				$data['view_short_ignore'] = $this->my_account_model->view_short_ignore($this->session->userdata('user_id'));
				$data['contact'] = $this->my_account_model->contact($this->session->userdata('user_id'));
				$data['preference_details'] = $this->sp_model->get_preference_details();
				$data['viewed_contacts'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
				$data['view_short_ignore_list'] = $res;
				
				foreach($data['viewed_contacts'] as $value) {
					$res2[] = $value["kv_profileview_on"];
				}
				foreach($data['contact_list'] as $value) {
					$res3[] = $value['kv_msi_interested_on'];
				}
				$data['contact_array_list'] = $res1;
				
				$data['assisted_profiles'] = $this->my_account_model->getSuggestedProfilesByRm($data["primary_info"]['id'],$res, $res1, $res2);
				$data['conf_profiles_for_regular'] = $this->my_account_model->getConfidentialProfilesForRegular($res, $res1, $res2);

                $data['partner_preferences'] = $this->my_account_model->get_partner_preferences();
                $dob = null;
                $living_inn= null;
                $status = null;
                $gender = null;
                $h_from = null;
                $h_to = null;
                $country = null;
                if (!empty($data['partner_preferences'])) {
                    $firstResult = $data['partner_preferences'][0]; 
                    $dob = $firstResult->dob;
                    $living_inn = $firstResult->living_in;
                    $status = $firstResult->marital_status;
                    $gender = $firstResult->gender;
                    $h_from =  $firstResult->h_from;
                    $h_to =  $firstResult->h_to;
                    $country =  $firstResult->country;
                   
                }

                // $data['recomended_profiles2'] = $this->my_account_model->get_AllPartner_preferences($dob,$living_inn,$status,$gender,$h_from,$h_to,$country);
                //echo "<pre>"; print_r($data['recomended_profiles2'] );die;
				$data = $conditions = array(); 
				$uriSegment = 3; 
				 
				// Get record count 
				$conditions['returnType'] = 'count'; 
				$totalRec = $this->my_account_model->getNewProfiles($res, $res1, $res2,$res3,$conditions);
				// Pagination configuration 
				$config['base_url']    = base_url().'dashboard/newprofiles/'; 
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
				$data['total_new_profiles'] = $totalRec;
				$data['newProfiles'] =  $this->my_account_model->get_AllPartner_preferences($dob,$living_inn,$status,$gender,$h_from,$h_to,$country);
				$data['countprofileviwesbyuser'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
				$data['showinterestcount'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
				$data['pprimary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
				$data['payment_details1'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				// echo "<pre>";print_r($data);exit;
                $this->load->view($this->headerPage, $data);
				$this->load->view($this->recomendedProfiles, $data);
                $this->load->view($this->footerPage);
            }
         else {
				redirect($this->listPage_redirect, 'refresh');
        }
    }
	
	public function assistedprofiles() {
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
                $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data["ignore"] = $this->my_account_model->getIgnoreProfiles($this->session->userdata('user_id'));
				$data["shortlist"] = $this->my_account_model->getShortListProfiles($this->session->userdata('user_id'));
					foreach ($data['ignore'] as $value) {
						$res[] = $value['to_msid'];
					}
					foreach ($data['shortlist'] as $value) {
						$res1[] = $value['to_msid'];
					}
				$data['recently_viewed'] = $this->my_account_model->recently_viewed($this->session->userdata('user_id'));
				$data['shortlisted_count'] = $this->my_account_model->shortlisted_count($this->session->userdata('user_id'));
				$data['ignored_count'] = $this->my_account_model->ignored_count($this->session->userdata('user_id'));
				$data['contact_list'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
				$data['profile_intrest_by'] = $this->my_account_model->profile_intrest_by_count($this->session->userdata('user_id'));
				$data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data['religion_details'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
				$data['view_short_ignore'] = $this->my_account_model->view_short_ignore($this->session->userdata('user_id'));
				$data['contact'] = $this->my_account_model->contact($this->session->userdata('user_id'));
				$data['preference_details'] = $this->sp_model->get_preference_details();
				$data['viewed_contacts'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
				$data['view_short_ignore_list'] = $res;
				//print_r($data['primary_info']);
				foreach($data['viewed_contacts'] as $value) {
					$res2[] = $value["kv_profileview_on"];
				}
				foreach($data['contact'] as $value) {
					$res1[] = $value['to_MSid'];
				}
				$data['contact_array_list'] = $res1;
				//echo "<pre>";print_r($data["primary_info"]);exit;
				$rm_id = $data["primary_info"]["rm_id"];
				$data['conf_profiles_for_regular'] = $this->my_account_model->getConfidentialProfilesForRegular($res, $res1, $res2);
				$data = $conditions = array(); 
				$uriSegment = 3; 
				 
				// Get record count 
				$conditions['returnType'] = 'count'; 
				$totalRec = $this->my_account_model->getSuggestedProfilesByRm($rm_id,$res, $res1, $res2, $conditions);
				 
				 
				// Pagination configuration 
				$config['base_url']    = base_url().'dashboard/assistedprofiles/'; 
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
				$data['total_assisted_profiles'] = $totalRec;
				$data['assistedProfiles'] = $this->my_account_model->getSuggestedProfilesByRm($rm_id,$res, $res1, $res2, $conditions);
				$data['payment_details1'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				//echo "<pre>";print_r($data);exit;
                $this->load->view($this->headerPage, $data);
				$this->load->view($this->assistedProfilesPage, $data);
                $this->load->view($this->footerPage);
            }
         else {
				redirect($this->listPage_redirect, 'refresh');
        }
    }

    public function dailyEmailSuggestedProfiles() {
        if ($this->session->userdata('user_id') != '') {
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data["ignore"] = $this->my_account_model->getIgnoreProfiles($this->session->userdata('user_id'));
				$data["shortlist"] = $this->my_account_model->getShortListProfiles($this->session->userdata('user_id'));
					foreach ($data['ignore'] as $value) {
						$res[] = $value['to_msid'];
					}
					foreach ($data['shortlist'] as $value) {
						$res1[] = $value['to_msid'];
					}
				$data['recently_viewed'] = $this->my_account_model->recently_viewed($this->session->userdata('user_id'));
				$data['contact_list'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
				$data['contact'] = $this->my_account_model->contact($this->session->userdata('user_id'));
				$data['preference_details'] = $this->sp_model->get_preference_details();
				$data['viewed_contacts'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
				$data['view_short_ignore_list'] = $res;
				//print_r($data['primary_info']);
				foreach($data['viewed_contacts'] as $value) {
					$res2[] = $value["kv_profileview_on"];
				}
				foreach($data['contact'] as $value) {
					$res3[] = $value['to_MSid'];
				}
				$data['contact_array_list'] = $res1;
				//echo "<pre>";print_r($data["primary_info"]);exit;
				$rm_id = $data["primary_info"]["rm_id"];
			
				$data = $this->my_account_model->getDailySystemSuggestedProfiles($res, $res1,$res2, $res3);
                //print_r($data);exit;
                $res = $this->my_account_model->getDailySystemSuggestedProfilesEmail($data);
            }
         else {
				redirect($this->listPage_redirect, 'refresh');
        }
    }

    	public function suggestedprofiles() {
           // echo 'hi';exit;
        if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
                $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data["ignore"] = $this->my_account_model->getIgnoreProfiles($this->session->userdata('user_id'));
				$data["shortlist"] = $this->my_account_model->getShortListProfiles($this->session->userdata('user_id'));
					foreach ($data['ignore'] as $value) {
						$res[] = $value['to_msid'];
					}
					foreach ($data['shortlist'] as $value) {
						$res1[] = $value['to_msid'];
					}
				$data['recently_viewed'] = $this->my_account_model->recently_viewed($this->session->userdata('user_id'));
				$data['shortlisted_count'] = $this->my_account_model->shortlisted_count($this->session->userdata('user_id'));
				$data['ignored_count'] = $this->my_account_model->ignored_count($this->session->userdata('user_id'));
				$data['contact_list'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
				$data['profile_intrest_by'] = $this->my_account_model->profile_intrest_by_count($this->session->userdata('user_id'));
				$data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data['religion_details'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
				$data['view_short_ignore'] = $this->my_account_model->view_short_ignore($this->session->userdata('user_id'));
				$data['contact'] = $this->my_account_model->contact($this->session->userdata('user_id'));
				$data['preference_details'] = $this->sp_model->get_preference_details();
				$data['viewed_contacts'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
				$data['view_short_ignore_list'] = $res;
				//print_r($data['primary_info']);
				foreach($data['viewed_contacts'] as $value) {
					$res2[] = $value["kv_profileview_on"];
				}
				foreach($data['contact'] as $value) {
					$res3[] = $value['to_MSid'];
				}
				$data['contact_array_list'] = $res1;
				//echo "<pre>";print_r($data["primary_info"]);exit;
				$rm_id = $data["primary_info"]["rm_id"];
				$data['conf_profiles_for_regular'] = $this->my_account_model->getConfidentialProfilesForRegular($res, $res1, $res2);
				$data = $conditions = array(); 
				$uriSegment = 3; 
				 
				// Get record count 
				$conditions['returnType'] = 'count'; 
				$totalRec = $this->my_account_model->getSuggestedProfilesByEmail($rm_id,$res, $res1, $res2,$res3, $conditions);
				 
				 
				// Pagination configuration 
				$config['base_url']    = base_url().'dashboard/suggestedprofiles/'; 
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
				$data['total_suggested_profiles'] = $totalRec;
				$data['suggestedProfiles'] = $this->my_account_model->getSuggestedProfilesByEmail($rm_id,$res, $res1, $res2,$res3, $conditions);
				//echo "<pre>";print_r($data);exit;
                $this->load->view($this->headerPage, $data);
				$this->load->view($this->suggestedProfilesPage, $data);
                $this->load->view($this->footerPage);
            }
         else {
				redirect($this->listPage_redirect, 'refresh');
        }
    }
	
	public function update_login_time(){
     $active_time=trim($this->input->post('active_time'));
     if (isset($active_time)) {
          $this->dashboard_model->update_last_login();
     }
    }
    
    public function plan()
    {
         if ($this->session->userdata('user_email') != '' && $this->session->userdata('user_id') != '') {
            $this->session->set_userdata('previous_url', current_url());
                $data['primary_info'] = $this->dashboard_model->getPrimaryDetails($this->session->userdata('user_id'));
                $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata('user_id'));
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_details($this->session->userdata('user_id'));
                $data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data["ignore"] = $this->my_account_model->getIgnoreProfiles($this->session->userdata('user_id'));
				$data["shortlist"] = $this->my_account_model->getShortListProfiles($this->session->userdata('user_id'));
					foreach ($data['ignore'] as $value) {
						$res[] = $value['to_msid'];
					}
					foreach ($data['shortlist'] as $value) {
						$res1[] = $value['to_msid'];
					}
				$data['recently_viewed'] = $this->my_account_model->recently_viewed($this->session->userdata('user_id'));
				$data['shortlisted_count'] = $this->my_account_model->shortlisted_count($this->session->userdata('user_id'));
				
				$data['ignored_count'] = $this->my_account_model->ignored_count($this->session->userdata('user_id'));
				$data['contact_list'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
				$data['profile_intrest_by'] = $this->my_account_model->profile_intrest_by_count($this->session->userdata('user_id'));
				$data['payment_details'] = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
				$data['religion_details'] = $this->dashboard_model->get_religion_details($this->session->userdata('user_id'));
				$data['view_short_ignore'] = $this->my_account_model->view_short_ignore($this->session->userdata('user_id'));
				$data['contact'] = $this->my_account_model->contact($this->session->userdata('user_id'));
				$data['preference_details'] = $this->sp_model->get_preference_details();
				$data['viewed_contacts'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
				$data['view_short_ignore_list'] = $res;
				
				$data['countprofileviwesbyuser'] = $this->my_account_model->getProfilesViewedByUser($this->session->userdata('user_id'),'');
			    $data['showinterestcount'] = $this->my_account_model->contact_count($this->session->userdata('user_id'));
			   
			   
			//	print_r($data['contact_list']);exit;
				foreach($data['viewed_contacts'] as $value) {
					$res2[] = $value["kv_profileview_on"];
				}
				foreach($data['contact_list'] as $value) {
					$res3[] = $value['kv_msi_interested_on'];
				}

                $data['plans'] = $this->my_account_model->plans();
               //echo $data["primary_info"]['id'];exit;
                $data['shortlisted_profiles'] = $this->my_account_model->shortlistedProfilesByUser($this->session->userdata('user_id'),$res,$res3);
				$data['contact_array_list'] = $res1;
				$data['get_all_records'] = $this->my_account_model->getallrecords($res, $res1, $res2,$res3);
				$data['assisted_profiles'] = $this->my_account_model->getSuggestedProfilesByRm($data["primary_info"]['rm_id'],$res, $res1, $res2);
				$data['conf_profiles_for_regular'] = $this->my_account_model->getConfidentialProfilesForRegular($res, $res1, $res2);
			    $data['suggestedProfiles'] = $this->my_account_model->getSuggestedProfilesByEmail($data["primary_info"]['rm_id'],$res, $res1, $res2,$res3, $conditions);

              //  echo "<pre>";print_r($data);exit;
                $this->load->view($this->headerPage, $data);
				$this->load->view($this->planpage, $data);
                $this->load->view($this->footerPage);
            }
         else {
				redirect($this->listPage_redirect, 'refresh');
        }
    }
    
    
    // checkexpdatevscurdate 10-06-2023
    public function checkexpdatevscurdate()
    {
         $expdate = date('Y-m-d');
         $curdate = date('Y-m-d');
         $payment_details1 = $this->dashboard_model->get_payment_details($this->session->userdata('user_id'));
         foreach($payment_details1 as $v1)
         {
            $expdate =  date("Y-m-d", strtotime($v1['expiry_date']));
         }
         if($expdate > $curdate)
         {
            echo "notexp";
         }
         else
         {
             echo "exp";
         }
    }
    // end of checkexpdatevscurdate 10-06-2023


    public function chat_with_admin()
    {
        $user_id = ($this->session->userdata('user_id'));
        
        // $data=$this->dashboard_model->chat_with_admin($user_id);
        $get_rm = $this->db->query("SELECT profileowner FROM ms_profilesetting WHERE ms_id = '".$user_id."'");
        $data['rrm_id'] = $get_rm->row()->profileowner;
        $this->load->view($this->headerPage);
        $this->load->view($this->user_chat_his, $data);
        $this->load->view($this->footerPage);
    }
    
    
    
}