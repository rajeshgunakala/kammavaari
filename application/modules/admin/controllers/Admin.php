<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller
{

    public $index_page        = "admin_login";
    // public $listPage_redirect = 'admin/Admin_home';
    public $listPage_redirect = 'admin/MyDashboard';
    public $login_redirect    = 'admin/index';
    public $login_redirect1    = 'admin/login';
    public $dashboardPage    = 'user_dashboard';
    public $religionPage    = 'user_religion';
    public $professionPage    = 'user_profession';
    public $parentsPage    = 'parents_edit';
    public $siblingsPage = 'user_siblings';
    public $relativesPage = 'user_relatives';
    public $propertyPage = 'property_edit';
    public $contactPage = 'contact_info';
    public $astroPage = 'astro_info';
    public $preferencePage = 'partner_preferences';
    public $expressInterestPage = 'express_interest';
    public $serviceReportPage = 'service_reports';
    public $fullreport = 'user_fullreport';
    public $headerPage    = '../views/admin_header';
    // public $headerPage    = '../views/admin_header';
    public $headerPage1   = 'admin_header';
    public $footerPage    = 'admin_footer';
    
    public $imagesRedirect = 'admin/edit_images';


    public function __construct()
    {   parent::__construct();
// echo "test";
// exit;
        // $this->check_session();
        $this->load->library('session');
        $this->load->model('Encrypt_model', 'encrypt_model');
        $this->load->model('Admin_login_model', 'my_model');
        $this->load->model('Admin_dashboard_model', 'dashboard_model');
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'on');
    }

    public function index()
    {
       $users_ID = $this->session->userdata('admin_id');
        if(isset($users_ID)) {
            redirect($this->login_redirect);
        }
         
        if ($this->input->post('submit') != '') {
            $admin_details = $this->my_model->getadmindata();
            if ($admin_details) {
                $this->session->set_userdata('uname', $admin_details['username']);
                $this->session->set_userdata('user_id', $admin_details['id']);
				$this->session->set_userdata('staffadmin_id', $admin_details['id']);
				$this->session->set_userdata('type', $admin_details['type']);
				if($admin_details['type']=='staff')
				$this->session->set_userdata('staff_id', $admin_details['id']);
				
				if($admin_details['type']=='admin')
				$this->session->set_userdata('admin_id', $admin_details['id']);
				
                $this->session->set_userdata('phone_no', $admin_details['phone_no']);
                redirect($this->listPage_redirect);
            } else {
                $this->session->set_flashdata('msg_fail', 'Bad Credentials, Try again.');
                redirect($this->login_redirect);
        
            }
        }
        if ($this->session->flashdata('msg_fail')) {
            $error['msg'] = $this->session->flashdata('msg_fail');
            $this->load->view($this->index_page, $error);
        } else {

            $this->load->view($this->index_page);
        }
    }


    public function logout()
    {
      // print_r($this->session->userdata());exit;
        $data = array(
		    'logout_date_time' => date('Y-m-d H:i:s')
		);
		$this->db->where('login_notification_id',$this->session->userdata('login_id'));
		$this->db->update("admin_login_notifications", $data);
	  $this->session->sess_destroy();
        redirect($this->login_redirect);
    }

    public function log_out()
    {
        $this->session->sess_destroy();
        redirect($this->login_redirect);
        // exit();
        // redirect($this->login_redirect1);
    }

    // ******************* express interest table ****************//
    public function service_report()
    {
		if (!$this->session->userdata('staffadmin_id')) {
			redirect('admin/login');
		}
        $users_ID = $this->session->userdata('user_id');
        if(!$users_ID) {
            redirect($this->login_redirect);
        }

        $data['rm_image'] =  $this->dashboard_model->rm_image(); 

        $this->load->view($this->headerPage1,$data);
        $this->load->view($this->serviceReportPage, $data);
        // $this->load->view($this->footerPage);
    }
 public function view_report(){
// print_r("deva");die;
        $params = $this->input->get();
        // print_r($params);die;
		$filters = [];
		if(isset($params["profileid"]) && !empty($params["profileid"])) {
			$filters["profileid"] = $params["profileid"];
		}
		
		$FProfileId =$filters["profileid"]; 
        // print_r($FProfileId);die; 


		$data = [];
		$this->load->library('pagination');
	
		$config = [
				'base_url'			=> base_url('admin/view_report'),
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
			if(!empty($FProfileId)){
			
         $data['payment_details'] = $this->dashboard_model->payment_details($FProfileId);
        $data['profile_share_report'] = $this->dashboard_model->profile_share_report($FProfileId);
        $data['posts'] = $this->dashboard_model->image($FProfileId);
        $data['viewed_contacts'] = $this->dashboard_model->getProfilesViewedByUser($FProfileId,'');
        $data['viwe_contacts']   = $this->dashboard_model->viewcontacts($FProfileId);

			}

        $this->load->view('admin_header');
        $this->load->view($this->fullreport, $data);
		
		$this->load->view('admin_footer');





       

    }

    // *******************express_interest ****************//
    public function express_interest()
    {
		if (!$this->session->userdata('staffadmin_id')) {
			redirect('admin/login');
		}
        $users_ID = $this->session->userdata('user_id');
        if(!$users_ID) {
            redirect($this->login_redirect);
        }
		//echo 'hi...';exit;
		$data['expressint']=$this->input->get('exint');
		$data['heading']=($this->input->get('exint')=='1') ? 'Express Interest' : 'Shared Profiles';
        $data['rm_image'] =  $this->dashboard_model->rm_image(); 
        $this->load->view($this->headerPage1,$data);
        $this->load->view($this->expressInterestPage, $data);
        $this->load->view($this->footerPage);
    }

    // ******************* edit astro details ****************//
    public function edit_astro()
    {
        $users_ID = $this->session->userdata('user_id');
        if(!$users_ID) {
            redirect($this->login_redirect);
        }

        $user_id = $this->uri->segment(3);
        $data['primary_info'] = $this->dashboard_model->get_primary_details_ADM($user_id);
        $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
        $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
        $data['zodic_signs'] = $this->dashboard_model->get_all_zodic_signs();
        $data['stars'] = $this->dashboard_model->get_all_stars();
        $data['astro_info']   = $this->dashboard_model->get_astro_details($user_id);
        // print_r($data);exit();
        $this->load->view($this->headerPage);
        $this->load->view($this->astroPage, $data);
        $this->load->view($this->footerPage);
    }

    public function edit_relatives()
    {
        $users_ID = $this->session->userdata('user_id');
        if(!$users_ID) {
            redirect($this->login_redirect);
        }

        $user_id = $this->uri->segment(3);
        $data['primary_info'] = $this->dashboard_model->get_primary_details_ADM($user_id);
        $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
        $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
        $data['siblings_info']  = $this->dashboard_model->get_parents_sibling_details($user_id);
        $data['states'] = $this->dashboard_model->get_all_states_ajax(India);
        $data['sister_info']    = $this->dashboard_model->get_parents_sister_details($user_id);
        $data['brother_info']    = $this->dashboard_model->get_parents_brother_details($user_id);
        // print_r($data);exit();
        $this->load->view($this->headerPage);
        $this->load->view($this->relativesPage, $data);
        $this->load->view($this->footerPage);
    }

    public function edit_partner_preferences()
    {
        $users_ID = $this->session->userdata('user_id');
        if(!$users_ID) {
            redirect($this->login_redirect);
        }

        $user_id = $this->uri->segment(3);
        $data['primary_info'] = $this->dashboard_model->get_primary_details_ADM($user_id);
        $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
        $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
        
        $data['heights']        = $this->dashboard_model->getallheightsADM();
        $data['mothertounges']  = $this->dashboard_model->getallmothertoungesADM();
        $data['countries']      = $this->dashboard_model->getallcountriesADM();
        $data['professions']    = $this->dashboard_model->getallprofessionsADM();
        $data['castes']         = $this->dashboard_model->getallcastesADM();
        $data['educations']     = $this->dashboard_model->getalleducationsADM();
        $data['stars']          = $this->dashboard_model->get_all_stars();
        $data['pageData']       = $this->dashboard_model->get_preference_data_ADM($user_id);
        $data['viewData']       = $this->dashboard_model->get_preference_data_ADM($user_id);
		$data["property_values"] = $this->dashboard_model->getPropertyValueRanges();
        $data['maritalstatus']  = explode(",", $data['pageData']['p_marital_status']);
        $data['mothertounge']   = explode(",", $data['pageData']['p_mother_tongue']);
        $data['casteArr']       = explode(",", $data['pageData']['p_caste']);
        $data['starArr']        = explode(",", $data['pageData']['p_star']);
        $data['employeeIn']     = explode(",", $data['pageData']['employee_in']);
        $data['education']      = explode(",", $data['pageData']['p_education']);
        $data['profession']     = explode(",", $data['pageData']['p_profession']);
        $data['country']        = explode(",", $data['pageData']['p_country']);
        // echo '<pre>';print_r($data);exit();
        $this->load->view($this->headerPage);
        $this->load->view($this->preferencePage, $data);
        $this->load->view($this->footerPage);
    }


    /*********************    edit basic details ***********************/

    public function edit_profile()
    {

        $users_ID = $this->session->userdata('user_id');
        if(!$users_ID) {
            redirect($this->login_redirect);
        }

        $data['user_id'] = $user_id = $this->uri->segment(3);
        $data['primary_info'] = $this->dashboard_model->get_primary_details_ADM($user_id);
        $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
        $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
        $data['countries'] = $this->dashboard_model->get_all_countries();
        $data['heights'] = $this->dashboard_model->get_all_heights();
        $data['religions'] = $this->dashboard_model->get_all_religions();
        $data['mother_tounges'] = $this->dashboard_model->get_all_mothertounges();
        $data['castes'] = $this->dashboard_model->get_all_castes();
        $data['professions'] = $this->dashboard_model->getallprofessions();
        $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();
		$data['education_info'] = $this->dashboard_model->education_info($user_id);
     	// echo '<pre>';  print_r($data);exit();
        $this->load->view($this->headerPage);
        $this->load->view($this->dashboardPage, $data);
        $this->load->view($this->footerPage);
    }

    public function edit_profileOLD()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);
        $this->session->set_userdata('admin_user_id', $user_id);

        if ($this->input->post('Submit') != "") {
            $user_id = $this->input->post('user_id');

            $profile_id = substr($this->input->post('year'), -2);
            $age = date('Y') - $this->input->post('year');
            $data = array(
                'mobile' => $this->input->post('mobile'),
                'first_name'    => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'gender' => $this->input->post('gender'),
                'date' => $this->input->post('date'),
                'month' => $this->input->post('month'),
                'year' => $this->input->post('year'),
               // 'profile_id' => 'KV' . $profile_id . '0000' . $user_id,
               'dob' => $this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('date'),
                'living_in' => $this->input->post('country'),
                'age' => $age,
                'updated_on' => date('Y-m-d H:i:s')
            );
            $this->db->where('id', $user_id);
            $query = $this->db->update('tbl_primary_info', $data);

            if ($query) {
                $data['msg'] = "Profile Updated Successfully";

                $data['primary_info'] = $this->dashboard_model->get_primary_details_ADM($user_id);
                $data['countries'] = $this->dashboard_model->get_all_countries();
                $data['heights'] = $this->dashboard_model->get_all_heights();
                $data['religions'] = $this->dashboard_model->get_all_religions();
                $data['mother_tounges'] = $this->dashboard_model->get_all_mothertounges();
                $data['castes'] = $this->dashboard_model->get_all_castes();
                $data['professions'] = $this->dashboard_model->getallprofessions();
                $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();

                $this->load->view($this->headerPage, $data);
                $this->load->view($this->dashboardPage, $data);
                //$this->load->view($this->footerPage);
            }
        } else {
            $data['primary_info'] = $this->dashboard_model->get_primary_details_ADM($user_id);
            $data['countries'] = $this->dashboard_model->get_all_countries();
            $data['heights'] = $this->dashboard_model->get_all_heights();
            $data['religions'] = $this->dashboard_model->get_all_religions();
            $data['mother_tounges'] = $this->dashboard_model->get_all_mothertounges();
            $data['castes'] = $this->dashboard_model->get_all_castes();
            $data['professions'] = $this->dashboard_model->getallprofessions();
            $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();

            $this->load->view($this->headerPage, $data);
            $this->load->view($this->dashboardPage, $data);
            //$this->load->view($this->footerPage);
        }
    }

    /*********************    edit religion details ***********************/

    public function edit_religion()
    {
        if (($this->session->userdata('user_id') == "0") || $this->session->userdata('user_id') == NULL) {
            redirect('admin/login');
        }
        $user_id = $this->uri->segment(3);

        if ($this->input->post('submit') != "") {
            $user_id =  $this->input->post('user_id');
            var_dump($user_id);
            $set_data = array(
                'user_id' => $user_id,
                'marital_status'    => $this->input->post('marital_status'),
                'height'    => $this->input->post('height'),
                'religion' => $this->input->post('religion'),
                'mother_tounge'    => $this->input->post('mothertounge'),
                'caste'    => $this->input->post('caste'),
                'sub_caste' => $this->input->post('subcaste'),
                'gothram' => $this->input->post('gothram'),
                'place_of_birth' => $this->input->post('place'),
                'time_of_birth' => $this->input->post('time'),
                'star' => $this->input->post('star'),
                'raasi' => $this->input->post('raasi'),
                'dosham' => $this->input->post('dosham'),
                'updated_on' => date('Y-m-d H:i:s')
            );
            $this->db->where('user_id', $user_id);
            $query = $this->db->update('tbl_religion_info', $set_data);
            if ($query) {
                $data['msg'] = "Profile Updated Successfully";

                $data['heights'] = $this->dashboard_model->get_all_heights();
                $data['religions'] = $this->dashboard_model->get_all_religions();
                $data['mother_tounges'] = $this->dashboard_model->get_all_mothertounges();
                $data['castes'] = $this->dashboard_model->get_all_castes();
                $data['subcastes'] = $this->dashboard_model->get_all_subcastes();
                $data['stars'] = $this->dashboard_model->get_all_stars();
                $data['zodic_signs'] = $this->dashboard_model->get_all_zodic_signs();

                $data['religion_info'] = $this->dashboard_model->get_religion_details($user_id);

                $this->load->view($this->headerPage, $data);
                $this->load->view($this->religionPage, $data);
                //$this->load->view($this->footerPage);

            }
        } else {
            $data['heights'] = $this->dashboard_model->get_all_heights();
            $data['religions'] = $this->dashboard_model->get_all_religions();
            $data['mother_tounges'] = $this->dashboard_model->get_all_mothertounges();
            $data['castes'] = $this->dashboard_model->get_all_castes();
            $data['subcastes'] = $this->dashboard_model->get_all_subcastes();
            $data['stars'] = $this->dashboard_model->get_all_stars();
            $data['zodic_signs'] = $this->dashboard_model->get_all_zodic_signs();

            $data['religion_info'] = $this->dashboard_model->get_religion_details($user_id);

            $this->load->view($this->headerPage, $data);
            $this->load->view($this->religionPage, $data);
            //$this->load->view($this->footerPage);
        }
    }  //  religion end



    /*********************    edit profession details ***********************/


    public function edit_profession()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }

        $user_id = $this->uri->segment(3);

        if ($this->input->post('submit') != "") {
            $user_id =  $this->input->post('user_id');
            $set_data = array(
                'user_id' => $user_id,
                'heighst_education'    => $this->input->post('highest_education'),
                'education_degree'    => $this->input->post('education_degree'),
                'specialization' => $this->input->post('specialization'),
                'university'    => $this->input->post('university'),
                'college'    => $this->input->post('college'),
                'education_description'    => $this->input->post('education-details'),
                'employee_in' => $this->input->post('employee_in'),
                'occupation' => $this->input->post('occupation'),
                'currency' => $this->input->post('currency'),
                'annual_income' => $this->input->post('monthly_income'),
                'company' => $this->input->post('company'),
                'about_profession' => $this->input->post('about_profession'),
                'country' => $this->input->post('groom_country'),
                'state' => $this->input->post('state_id'),
                'city' => $this->input->post('city'),
                'about_me' => $this->input->post('about'),
                'visatype' => $this->input->post('visatype'),
                'residing-since' => $this->input->post('residing-since'),
                'arrival-date' => $this->input->post('arrival-date'),
                'departure-date' => $this->input->post('departure-date'),
                'updated_on' => date('Y-m-d H:i:s')
            );

            $this->db->where('user_id', $user_id);
            $query = $this->db->update('tbl_professional_info', $set_data);
            if ($query) {
                $data['msg'] = "Profile Updated Successfully";



                $data['professional_info'] = $this->dashboard_model->get_professional_details($user_id);

                $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();
                $data['educationdegree'] = $this->dashboard_model->get_educationdegrees();
                $data['specialization'] = $this->dashboard_model->get_specializations();
                $data['countries'] = $this->dashboard_model->get_all_countries();
                $data['states'] = $this->dashboard_model->get_all_states();
                $data['professions'] = $this->dashboard_model->getallprofessions();
            }
        } else {

            $data['heighsteducation'] = $this->dashboard_model->get_heighsteducations();
            $data['educationdegree'] = $this->dashboard_model->get_educationdegrees();
            $data['specialization'] = $this->dashboard_model->get_specializations();
            $data['countries'] = $this->dashboard_model->get_all_countries();
            $data['states'] = $this->dashboard_model->get_all_states();
            $data['professions'] = $this->dashboard_model->getallprofessions();

            $data['professional_info'] = $this->dashboard_model->get_professional_details($user_id);
        }

        $this->load->view($this->headerPage, $data);
        $this->load->view($this->professionPage, $data);
        //$this->load->view($this->footerPage);
    }  //  profession end




    /*********************    edit parents details ***********************/


    public function edit_parents()
    {
         $this->encrypt_model->encryptionInitialize();
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);
        
        if ($this->input->post('submit') != "") {
            $user_id =  $this->input->post('user_id');
                $father_mobile = $this->encrypt_model->encryptField($this->input->post('father-mobile'));
                $father_email = $this->encrypt_model->encryptField($this->input->post('father-email')); 
                $mother_mobile = $this->encrypt_model->encryptField($this->input->post('mother-mobile'));
                $mother_email = $this->encrypt_model->encryptField( $this->input->post('mother-email')); 
                
            $set_data = array(

                'user_id' => $user_id,
                'father_name'    => $this->input->post('father-name'),
                'father_education'    => $this->input->post('father-education'),
                'father_profession' => $this->input->post('father-profession'),
                'father_email'    => $father_email,

                'father_mobile'    => $father_mobile,
                'fathers_father_name' => $this->input->post('fathers-father-name'),
                'father_mother_name' => $this->input->post('father_mother_name'),
                'fathers_father_state' => $this->input->post('fathers-father-state'),
                'fathers_father_district' => $this->input->post('fathers-father-district'),
                'fathers_father_native_place' => $this->input->post('fathers-father-native-place'),
                'mother_name' => $this->input->post('mother-name'),
                'mother_education' => $this->input->post('mother-education'),
                'mother_profession' => $this->input->post('mother-profession'),
                'mother_email' => $mother_email,
                'mother_mobile' => $mother_mobile,
                'mothers_father_name' => $this->input->post('mothers-father-name'),
                'mother_mother_name' => $this->input->post('mother-mother-name'),
                'mothers_father_state' => $this->input->post('mothers-father-state'),
                'mothers_father_district' => $this->input->post('mothers-father-district'),
                'mothers_father_native_place' => $this->input->post('mothers-father-native-place'),

                'updated_on' => date('Y-m-d H:i:s')
            );
            $this->db->where('user_id', $user_id);
            $query = $this->db->update('tbl_parents_info', $set_data);
            if ($query) {
                $data['msg'] = "Profile Updated Successfully";

                
                $data['primary_info']   = $this->dashboard_model->get_profile_details_ADM($user_id);
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
                $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
                $data['parents_info'] = $this->dashboard_model->get_parent_details($user_id);
                $data['contact_info'] = $this->dashboard_model->get_parent_city_details($user_id);
                $data['states'] = $this->dashboard_model->get_all_states_ajax(India);
                $data['districts'] = $this->dashboard_model->get_all_districts();
               // $this->encrypt_model->encryptionInitialize();
                $data['parents_info']['father_mobile'] = $this->encrypt_model->decryptField($data['parents_info']['father_mobile']);
                $data['parents_info']['father_email'] = $this->encrypt_model->decryptField($data['parents_info']['father_email']); 
                $data['parents_info']['mother_mobile'] = $this->encrypt_model->decryptField($data['parents_info']['mother_mobile']);
                $data['parents_info']['mother_email'] = $this->encrypt_model->decryptField($data['parents_info']['mother_email']); 
                $this->load->view($this->headerPage, $data);
                $this->load->view($this->parentsPage, $data);
                $this->load->view($this->footerPage);
            }
        } else {
           // echo 'hi';
            $data['primary_info']   = $this->dashboard_model->get_profile_details_ADM($user_id);
            $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
            $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
            $data['parents_info'] = $this->dashboard_model->get_parent_details($user_id);
            $data['contact_info'] = $this->dashboard_model->get_parent_city_details($user_id);
            $data['states'] = $this->dashboard_model->get_all_states_ajax(India);
            $data['districts'] = $this->dashboard_model->get_all_districts();
      //     echo '<pre>';print_r($data['parents_info']);
         // echo $data['parents_info']['father_mobile'];
          
                $data['parents_info']['father_mobile'] = $this->encrypt_model->decryptField($data['parents_info']['father_mobile']);
                $data['parents_info']['father_email'] = $this->encrypt_model->decryptField($data['parents_info']['father_email']); 
                $data['parents_info']['mother_mobile'] = $this->encrypt_model->decryptField($data['parents_info']['mother_mobile']);
                $data['parents_info']['mother_email'] = $this->encrypt_model->decryptField($data['parents_info']['mother_email']); 
       // echo '<pre>';print_r($data['parents_info']);exit;       
            $this->load->view($this->headerPage, $data);
            $this->load->view($this->parentsPage, $data);
            $this->load->view($this->footerPage);
        }
    }  //  parents end

    /*********************    edit siblings details ***********************/
    public function edit_siblings()
    {
        $users_ID = $this->session->userdata('user_id');
        if(!$users_ID) {
            redirect($this->login_redirect);
        }
        
        $user_id = $this->uri->segment(3);
        $data['primary_info']   = $this->dashboard_model->get_profile_details_ADM($user_id);
        $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
        $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
        $data['siblings_info']  = $this->dashboard_model->get_sibling_details($user_id);
        $data['sister_info']    = $this->dashboard_model->get_sister_details($user_id);
        $data['brother_info']    = $this->dashboard_model->get_brother_details($user_id);
        
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->siblingsPage, $data);
        $this->load->view($this->footerPage);
    } 
    //  siblings end

    public function edit_siblingsOLD()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);

        if ($this->input->post('submit') != "") {
            $user_id =  $this->input->post('user_id');


            $set_data = array(
                'user_id' => $user_id,
                'no_of_brothers'    => $this->input->post('no-of-brothers'),
                'no_of_sisters'    => $this->input->post('no-of-sisters'),
                'no_of_elder_brothers' => $this->input->post('no-of-elder-brothers'),
                'no_of_younger_brothers'    => $this->input->post('no-of-younger-brothers'),
                'no_of_elder_sisters'    => $this->input->post('no-of-elder-sisters'),
                'no_of_younger_sisters' => $this->input->post('no-of-younger-sisters'),
                'updated_on' => date('Y-m-d H:i:s')
            );
            $this->db->where('user_id', $user_id);
            $query = $this->db->update('tbl_siblings_info', $set_data);
            if ($query) {
                $data['msg'] = "Profile Updated Successfully";
                $data['siblings_info'] = $this->dashboard_model->get_sibling_details($user_id);


                $this->load->view($this->headerPage, $data);
                $this->load->view($this->siblingsPage, $data);
                //$this->load->view($this->footerPage);
            }
        } else {


            $data['siblings_info'] = $this->dashboard_model->get_sibling_details($user_id);
            $this->load->view($this->headerPage, $data);
            $this->load->view($this->siblingsPage, $data);
            //$this->load->view($this->footerPage);
        }
    }  //  siblings end



    /*********************    edit property details ***********************/
    public function edit_property()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);

        if ($this->input->post('submit') != "") {


            // update record

            $user_id =  $this->input->post('user_id');

            $set_data = array(
                'property_type' => $this->input->post('property_type'),
                'property_value' => $this->input->post('property_value'),
                'property_desc' => $this->input->post('property_description')
            );



            $this->db->where('ms_id', $user_id);
            $query = $this->db->update('ms_property_info', $set_data);
            if ($query) {
                $data['msg'] = "Property Details Updated Successfully";
            }

            $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
            $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
            $data['property_count'] = $this->dashboard_model->get_property_count($user_id);
            $data['property_info'] = $this->dashboard_model->get_property_details($user_id);


            $this->load->view($this->headerPage, $data);
            $this->load->view($this->propertyPage, $data);
            $this->load->view($this->footerPage);
            
        } else if ($this->input->post('insert_submit') != "") {


            /*  --------------- INSERT RECORD -------------   */

            $set_data = array(
                'ms_id' => $user_id,
                'property_type' => $this->input->post('property_type'),
                'property_value' => $this->input->post('property_value'),
                'property_desc' => $this->input->post('property_description'),
                'created_date' => date('Y-m-d H:i:s'),
            );

            $this->db->where('ms_id', $user_id);
            $query = $this->db->insert('ms_property_info', $set_data);
            if ($query) {
                $data['msg'] = "Property Details Inserted Successfully";
            }

            
            $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
            $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
            $data['primary_info']   = $this->dashboard_model->get_profile_details_ADM($user_id);
            $data['property_count'] = $this->dashboard_model->get_property_count($user_id);
            $data['property_info'] = $this->dashboard_model->get_property_details($user_id);

            $this->load->view($this->headerPage, $data);
            $this->load->view($this->propertyPage, $data);
            $this->load->view($this->footerPage);
        } else {

            
            $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
            $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
            $data['primary_info']   = $this->dashboard_model->get_profile_details_ADM($user_id);
            $data['property_count'] = $this->dashboard_model->get_property_count($user_id);
            $data['property_info'] = $this->dashboard_model->get_property_details($user_id);
			$data['property_values'] = $this->dashboard_model->getPropertyValueRanges();

            $this->load->view($this->headerPage, $data);
            $this->load->view($this->propertyPage, $data);
            $this->load->view($this->footerPage);
        }
    }  //  property end



    // **********************edit contact info***********//
    public function edit_contact_info()
    {
        $users_ID = $this->session->userdata('user_id');
        if(!$users_ID) {
            redirect($this->login_redirect);
        }
        
        $user_id = $this->uri->segment(3);
// print_r($user_id);die;
        $data['primary_info']   = $this->dashboard_model->get_profile_details_ADM($user_id);
        // print_r($data['primary_info']);die;
        $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
        $data['images_info'] = $this->dashboard_model->get_imagesADM($user_id);
        $data['contact_info']   = $this->dashboard_model->get_contact_details($user_id);
        $data['primary_info']['mobile'] = $this->encrypt_model->decryptField($data['primary_info']['mobile']);
        $data['primary_info']['email'] = $this->encrypt_model->decryptField($data['primary_info']['email']); 
       
        $encodeID  = base64_encode($user_id);
        $DencodeID = base64_encode($encodeID);
        $data['shareID'] = $DencodeID;
        // print_r($data);exit();
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->contactPage, $data);
        $this->load->view($this->footerPage);
    }
    

    

    /*********************    edit images details ***********************/
    public function edit_images()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);


        if ($this->input->post('submit') != '') {

            $user_id = $this->uri->segment(3);

            $data['images_count'] = $this->dashboard_model->get_images($user_id);

            if (count($data['images_count']) <= 4) {


                if ($_FILES['image']['name'] != '') {

                    $j = count($data['images_count']) + 1;

                    if ($j == 1) {
                        $main_photo = 1;
                    } else {
                        $main_photo = 0;
                    }

                    $user_id = $this->uri->segment(3);

					//rename image name
                    /* $_FILES['image']['name'] = $user_id."_".$_FILES['image']['name'];*/

                   // $image_type = $_FILES['image']['type'];
                    //$image_type = explode("/", $image_type);
                    //$image_type = "." . $image_type[1];

                    //$_FILES['image']['name'] = $user_id."_image_" . $j . $image_type;

                    $target_path = "images/profilepics/" . $user_id;

                    if (!is_dir($target_path)) {
                        mkdir($target_path);
                    }


                    $uploadPath = $target_path;
                    $config['upload_path'] = $uploadPath;

                    $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
                    $config['max_size']  = '0';
                    $config['max_width']  = '0';
                    $config['max_height']  = '0';
                    $this->load->library('upload', $config);

                    $file_name = $_FILES['image']['name']; 
                    // print_r($file_name );die;
                    $Img_Data = $target_path . '/' . $file_name;
                    if ($this->upload->do_upload('image')) { 
                        // print_r("d");die;      
                        $data = $this->upload->data();                      
                        $ImgData = $data['file_name'];
                    } else {
                        // print_r("v");die;
                        // If upload fails, display error message
                        $error = $this->upload->display_errors();
                        echo $error;
                    }
                } else {
                    $data['msg'] = 'Please Upload Image...';
                }
// print_r($ImgData);die;


                $result = $this->dashboard_model->add_record($ImgData, $main_photo, $user_id);



                if ($result) {
                    $this->session->set_flashdata('msg_succ', 'Profile pic is added successfully...');
                    $data['primary_info']   = $this->dashboard_model->get_profile_details_ADM($user_id);
                    $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
                    $data['images_infoADM'] = $this->dashboard_model->get_imagesADM($user_id);
                    $data['images_info'] = $this->dashboard_model->get_images_details($user_id);
                    $data['imagescount'] = $this->dashboard_model->imagescount($user_id);
                    $this->load->view($this->headerPage, $data);
                    $this->load->view('edit_images');
                    $this->load->view($this->footerPage);
                } else {
                    $data['msg'] = "please try again...";
                }
            } else {
                $this->session->set_flashdata('msg', 'You can add max 5 photos.');
                $data['primary_info']   = $this->dashboard_model->get_profile_details_ADM($user_id);
                $data['images_infoADM'] = $this->dashboard_model->get_imagesADM($user_id);
                $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
                $data['images_info'] = $this->dashboard_model->get_images_details($user_id);
                $data['imagescount'] = $this->dashboard_model->imagescount($user_id);
                $this->load->view($this->headerPage, $data);
                $this->load->view('edit_images');
                $this->load->view($this->footerPage);
            }
        } else {

            $data['profile_pic'] = $this->dashboard_model->get_profilepic_detailsADM($user_id);
            $data['images_infoADM'] = $this->dashboard_model->get_imagesADM($user_id);
            $data['primary_info']   = $this->dashboard_model->get_profile_details_ADM($user_id);
            $data['images_info'] = $this->dashboard_model->get_images_details($user_id);
            $data['imagescount'] = $this->dashboard_model->imagescount($user_id);


            $this->load->view($this->headerPage, $data);
            $this->load->view('edit_images');
            $this->load->view($this->footerPage);
        }
    }  // end update images

    public function edit_imagesOLD()
    {
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }
        $user_id = $this->uri->segment(3);


        if ($this->input->post('submit') != '') {

            $user_id = $this->uri->segment(3);

            $data['images_count'] = $this->dashboard_model->get_images($user_id);

            if (count($data['images_count']) <= 4) {


                if ($_FILES['image']['name'] != '') {

                    $j = count($data['images_count']) + 1;

                    if ($j == 1) {
                        $main_photo = 1;
                    } else {
                        $main_photo = 0;
                    }

                    $user_id = $this->uri->segment(3);


                    /* $_FILES['image']['name'] = $user_id."_".$_FILES['image']['name'];*/

                    $image_type = $_FILES['image']['type'];
                    $image_type = explode("/", $image_type);
                    $image_type = "." . $image_type[1];

                    $_FILES['image']['name'] = "image_" . $j . $image_type;

                    $target_path = "images/profilepics/" . $user_id;

                    if (!is_dir($target_path)) {
                        mkdir($target_path);
                    }


                    $uploadPath = $target_path;
                    $config['upload_path'] = $uploadPath;

                    $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
                    $config['max_size']  = '0';
                    $config['max_width']  = '0';
                    $config['max_height']  = '0';
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



                $result = $this->dashboard_model->add_record($ImgData, $main_photo, $user_id);



                if ($result) {
                    $this->session->set_flashdata('msg_succ', 'added Successfully...');
                    $data['images_info'] = $this->dashboard_model->get_images_details($user_id);
                    $data['imagescount'] = $this->dashboard_model->imagescount($user_id);
                    $this->load->view($this->headerPage, $data);
                    $this->load->view('user-images-info-add');
                    //$this->load->view($this->footerPage);
                } else {
                    $data['msg'] = "please try again...";
                }
            } else {
                $this->session->set_flashdata('msg', 'You can add max 5 photos.');
                $data['images_info'] = $this->dashboard_model->get_images_details($user_id);
                $data['imagescount'] = $this->dashboard_model->imagescount($user_id);
                $this->load->view($this->headerPage, $data);
                $this->load->view('user-images-info-add');
                //$this->load->view($this->footerPage);
            }
        } else {

            $data['images_info'] = $this->dashboard_model->get_images_details($user_id);
            $data['imagescount'] = $this->dashboard_model->imagescount($user_id);


            $this->load->view($this->headerPage, $data);
            $this->load->view('user-images-info-add');
            //$this->load->view($this->footerPage);
        }
    }  // end update images


    /*  edit main image */


    public function imagesedit($id)
    { 
        if ($this->session->userdata('user_id') == "") {
            redirect($this->login_redirect, 'refresh');
        }

        $data['record'] = $this->dashboard_model->get_single_record($id);
		$oldImageData = $data['record'];
        $data['msg'] = '';
        $old_image = $data['record']['image'];
        if ($this->input->post('submit') != '') {

			$user_id = $data['record']['MS_id'];
            if ($_FILES['image']['name'] != '') {
                $image_type = $_FILES['image']['type'];
                $image_type = explode("/", $image_type);
                $image_type = "." . $image_type[1];
				//$imagesCount = $this->dashboard_model->get_images($user_id);
				//print_r($imagesCount);exit;
				//$j = count($imagesCount);
               // $_FILES['image']['name'] = $user_id."_image_" . $j . $image_type;

                $target_path = "images/profilepics/" . $user_id;
                $uploadPath = $target_path;
                $config['upload_path'] = $uploadPath;

                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
                $config['max_size']  = '0';
                $config['max_width']  = '0';
                $config['max_height']  = '0';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $data['msg'] = $this->upload->display_errors();
                } else {
                    $data = $this->upload->data();
                    $ImgData = $data['file_name'];
					//delete existing image
					$photo_name = $oldImageData['photoname'];					
					$app_photo = explode("/", $oldImageData['applicationphotopath']);
					$full_photo = explode("/", $oldImageData['fullphotopath']);
					$path_to_file = 'images/profilepics/'.$user_id.'/'.$photo_name;
					$path_to_file1 = 'images/profilepics/'.$user_id.'/'.end($app_photo);
					$path_to_file2 = 'images/profilepics/'.$user_id.'/'.end($full_photo);
					unlink($path_to_file); 
					unlink($path_to_file1);
					unlink($path_to_file2);
					//end of old image
                }
            } else {
                $ImgData = $old_image;
            }
            $result = $this->dashboard_model->update_record($id, $ImgData, $user_id);
            if ($result) {
                $this->session->set_flashdata('msg_succ', 'Profile image updated Successfully...');

                $redirect_url = site_url() . 'admin/edit_images/' . $user_id;

                redirect($redirect_url);
            } else {

                $data['msg'] = "please try again...";
            }
        } else {


            $this->load->view($this->headerPage);
            $this->load->view('user-edit-image-info', $data);
            $this->load->view($this->footerPage);
        }
    }
	public function admin_photosdelete()
	{
		$this->dashboard_model->admin_photosdelete($this->input->post('photoid'));
	}	

    public function otplogin()
    {
            $inputMobileNo = $this->input->post("mobile");
        $otp = $this->input->post("otp");
        $resp = [];
        if(isset($inputMobileNo) && !empty($inputMobileNo) && empty($otp)) {
            $mobileNo =  $inputMobileNo;
            $data = $this->my_model->getAdminMobileAccount($mobileNo);
         
            if(isset($data)) {
                $mobile = $inputMobileNo;
                $customerName = $data["name"];
                
                $otp = $this->my_model->loginOtp($mobile, $customerName);
                $userId = $data["id"];
                $this->my_model->updateOtpToAccount($userId, $otp);
                $resp["status"] = "success";
                $resp["type"] = "otp";
                $resp["message"] = "OTP sent successfully";

            } else {
                
                $resp["status"] = "error";
                $resp["type"] = "otp";
                $resp["message"] = "Mobile number/ Account does not exist";
            }
        } else if(!empty($inputMobileNo) && !empty($otp)) {
            $mobileNo =  $inputMobileNo;
            // $data = $this->my_model->getAdminMobileAccount1($mobileNo, $otp);
            $data = $this->my_model->getAdminMobileAccount($mobileNo, $otp);
            
            if(isset($data)) {
               
				
				$resp["status"] = "success";
                $resp["type"] = "login_otp";
				$data["login_id"] = $this->my_model->insertAdminLoginLogs($data);
                $this->setAdminDetails($data);
				
            }else {
                $resp["status"] = "error";
                $resp["type"] = "login_otp";
                $resp["message"] = "Enter correct OTP number";
            }
        }
        echo json_encode($resp);
           
    }

    
    public function setAdminDetails($admin_details) {
        if ($admin_details) {
            $this->session->set_userdata('uname', $admin_details['username']);
            $this->session->set_userdata('user_id', $admin_details['id']);
            $this->session->set_userdata('login_id', $admin_details['login_id']);
	        $this->session->set_userdata('staffadmin_id', $admin_details['id']);
	        $this->session->set_userdata('type', $admin_details['type']);
			$this->session->set_userdata('rm_type', $admin_details['rm_type']);
	        if($admin_details['type']=='staff')
		        $this->session->set_userdata('staff_id', $admin_details['id']);
				
	        if($admin_details['type']=='admin')
		        $this->session->set_userdata('admin_id', $admin_details['id']);
				
            $this->session->set_userdata('phone_no', $admin_details['phone_no']);
        }
    }
    
     public function employee_details_list(){

        $this->load->library('pagination');
		
		$total_records = $this->dashboard_model->employee_details_list_count();
		$config = [
				'base_url'			=> base_url('admin/employee_details_list'),
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

        $data['count'] = $this->dashboard_model->employee_details_list();
        $this->load->view($this->headerPage);
        $this->load->view('employee_details_percentage', $data);
        $this->load->view($this->footerPage);
       
    }

}
