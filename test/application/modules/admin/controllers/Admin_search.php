<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_search extends MX_Controller
{
	public $headerPage   = 'admin_header';
	public $listPage     = 'admin_search';
	public $viewPage     = 'admin_search_result';
	public $profilePage  = 'admin_view_profile';
	public $fullProfilePage  = 'admin_view_full_profile';	
	public $profilePV	 = 'admin_profile_view';
	public $footerPage   = 'admin_footer';
	public $newSearchp   = 'admin_search_new';
	public $ajaxProfileSearchResults = 'ajax_profile_search_result';


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_search_model', 'my_model');
		$this->load->model('Admin_dashboard_model', 'dashboard_model');
		$this->load->model('Encrypt_model', 'encrypt_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors', 'on');

		if (!$this->session->userdata('staffadmin_id')) {
			redirect('admin/login');
		}
		$URI = $this->uri->segment(2);
		// echo $URI;exit();
		if($this->uri->segment(2) != "admin_search")
		{
			unset($_SESSION['gender'], $_SESSION['heightfrom'], $_SESSION['heightto'], $_SESSION['agefrom'], $_SESSION['ageto'], $_SESSION['maritalstatus'], $_SESSION['religion'], $_SESSION['mothertounge'], $_SESSION['caste'], $_SESSION['education'], $_SESSION['profession'], $_SESSION['country'], $_SESSION['elight'], $_SESSION['payment'], $_SESSION['dorfrom'], $_SESSION['dorto'], $_SESSION['propertyfor'], $_SESSION['propertyto'], $_SESSION['district'], $_SESSION['application_status'], $_SESSION['employee'], $_SESSION['currency'], $_SESSION['photos'], $_SESSION['salaryfrom'], $_SESSION['salaryto'], $_SESSION['profile_id'], $_SESSION['surname'], $_SESSION['name']);
		}
		
		// Load pagination library 
        $this->load->library('ajax_pagination'); 
         
        // Per page limit 
        $this->perPage = 10; 
	}

	public function index()
	{	
		
		$data['heights'] 		= $this->my_model->getallheights();
		$data['religions'] 		= $this->my_model->getallreligions();
		$data['mothertounges'] 	= $this->my_model->getallmothertounges();
		$data['countries']		= $this->my_model->getallcountries();
		$data['professions'] 	= $this->my_model->getallprofessions();
		$data['castes'] 		= $this->my_model->getallcastes();
		$data['educations'] 	= $this->my_model->getalleducations();
		$data['employee'] 		= $this->my_model->getallemployee();
		$data['district'] 		= $this->my_model->getalldistrict();
		$data['currency'] 		= $this->my_model->getallcurrency();
        $data['stars']          = $this->my_model->get_all_starsADM();
        $data['city']          = $this->my_model->get_all_citys();
        $data['special'] = $this->dashboard_model->special();
		$data['rm_image'] =  $this->my_model->rm_image(); 

		$this->load->view($this->headerPage,$data);
		$this->load->view($this->newSearchp, $data);
		// $this->load->view($this->footerPage);
	}

	public function searchPage()
	{
		$data['rm_image'] =  $this->my_model->rm_image(); 
		
		$this->load->view($this->headerPage,$data);
		$data['heights'] 		= $this->my_model->getallheights();
		$data['religions'] 		= $this->my_model->getallreligions();
		$data['mothertounges'] 	= $this->my_model->getallmothertounges();
		$data['countries']		= $this->my_model->getallcountries();
		$data['professions'] 	= $this->my_model->getallprofessions();
		$data['castes'] 		= $this->my_model->getallcastes();
		$data['educations'] 	= $this->my_model->getalleducations();
		$data['employee'] 		= $this->my_model->getallemployee();
		$data['district'] 		= $this->my_model->getalldistrict();
		$data['currency'] 		= $this->my_model->getallcurrency();
		
        // print_r($data['stars']);exit()
		$this->load->view($this->newSearchp, $data);
		$this->load->view($this->footerPage);
	}


	public function searchprofiles()
	{
		if (isset($_POST['submit'])) {
			$gender = $this->input->post('gender');
			$_SESSION['gender'] = $gender;
		} else {
			$gender = $_SESSION['gender'];
		}

		if (isset($_POST['submit'])) {
			$heightfrom = $this->input->post('heightfrom');
		//	echo $heightfrom;exit;
			$_SESSION['heightfrom'] = $heightfrom;
		} else {
			$heightfrom = $_SESSION['heightfrom'];
		}

		if (isset($_POST['submit'])) {
			$heightto = $this->input->post('heightto');
			$_SESSION['heightto'] = $heightto;
		} else {
			$heightto = $_SESSION['heightto'];
		}

		if (isset($_POST['submit'])) {
			$agefrom = $this->input->post('agefrom');
			$_SESSION['agefrom'] = $agefrom;
		} else {
			$agefrom = $_SESSION['agefrom'];
		}

		if (isset($_POST['submit'])) {
			$ageto = $this->input->post('ageto');
			$_SESSION['ageto'] = $ageto;
		} else {
			$ageto = $_SESSION['ageto'];
		}

		if (isset($_POST['submit'])) {
			$maritalstatus = $this->input->post('maritalstatus');
			$_SESSION['maritalstatus'] = $maritalstatus;
		} else {
			$maritalstatus = $_SESSION['maritalstatus'];
		}

		if (isset($_POST['submit'])) {
			$caste = $this->input->post('caste');
			$_SESSION['caste'] = $caste;
		} else {
			$caste = $_SESSION['caste'];
		}

		if (isset($_POST['submit'])) {
			$religion = $this->input->post('religion');
			$_SESSION['religion'] = $religion;
		} else {
			$religion = $_SESSION['religion'];
		}

		if (isset($_POST['submit'])) {
			$mothertounge = $this->input->post('mothertounge');
			$_SESSION['mothertounge'] = $mothertounge;
		} else {
			$mothertounge = $_SESSION['mothertounge'];
		}

		if (isset($_POST['submit'])) {
			$education = $this->input->post('education');
			$_SESSION['education'] = $education;
		} else {
			$education = $_SESSION['education'];
		}

		if (isset($_POST['submit'])) {
			$profession = $this->input->post('profession');
			$_SESSION['profession'] = $profession;
		} else {
			$profession = $_SESSION['profession'];
		}

		if (isset($_POST['submit'])) {
			$country = $this->input->post('country');
			$_SESSION['country'] = $country;
		} else {
			$country = $_SESSION['country'];
		}

		$data['rm_image'] =  $this->my_model->rm_image(); 
		$this->load->view($this->headerPage,$data);


		$total_records_count = $this->my_model->search_tot_records($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country);

		$this->load->library('pagination');

		$config = [
			'base_url'			=> base_url ('admin/Admin_search/searchprofiles'),
			'per_page'			=> 1,
			'total_rows'		=> $total_records_count,
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
		$sub_records = $this->my_model->search_sub_records($config['per_page'], $this->uri->segment(4), $gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country);
		$data['search_sub_rec'] = $sub_records;
		$data['search_tot_rec'] = $total_records_count;
		$data['images_info']  =  $this->my_model->get_images($sub_records[0]['user_id']);
		$data['links'] = $this->pagination->create_links();
		$this->load->view($this->viewPage, $data);
		$this->load->view($this->footerPage);
	}
	
	public function ajaxProfileSearchResult() {

        $rm_id=$this->session->userdata('user_id');
	
        $_SESSION['rm_id']=$rm_id;
        $rm_type = $this->my_model->getRmtype($rm_id);
        $_SESSION["rm_type"] = $rm_type['rm_type_name'];
       // echo $rm_type['rm_type_name'];exit;
       // echo $rm_id;exit;
		// print_r($data);exit();
		if (isset($_POST['submit'])) {
			$gender = $this->input->post('gender');
			$_SESSION['gender'] = $gender;
		} else {
			$gender = $_SESSION['gender'];
		}
		
		if (isset($_POST['submit'])) {
			$profile_id = $this->input->post('profile_id');
			$profile_id=preg_replace('/\s+/', '', $profile_id);
			$_SESSION['profile_id'] = $profile_id;
		} else {
			$profile_id = $_SESSION['profile_id'];
		}
		
		if (isset($_POST['submit'])) {
			$surname = $this->input->post('surname');
			$surname=preg_replace('/\s+/', '', $surname);
			$_SESSION['surname'] = $surname;
		} else {
			$surname = $_SESSION['surname'];
		}
		
		if (isset($_POST['submit'])) {
			$name = $this->input->post('name');
			$name=preg_replace('/\s+/', '', $name);
			$_SESSION['name'] = $name;
		} else {
			$name = $_SESSION['name'];
		}
		
		if (isset($_POST['submit'])) {
			$heightfrom = $this->input->post('height_from');
			$_SESSION['heightfrom'] = $heightfrom;
		} else {
			$heightfrom = $_SESSION['heightfrom'];
		}

		if (isset($_POST['submit'])) {
			$heightto = $this->input->post('height_to');
			$_SESSION['heightto'] = $heightto;
		} else {
			$heightto = $_SESSION['heightto'];
		}

		if (isset($_POST['submit'])) {
			$agefrom = $this->input->post('age_from');
			$_SESSION['agefrom'] = $agefrom;
		} else {
			$agefrom = $_SESSION['agefrom'];
		}

		if (isset($_POST['submit'])) {
			$ageto = $this->input->post('age_to');
			$_SESSION['ageto'] = $ageto;
		} else {
			$ageto = $_SESSION['ageto'];
		}

		if (isset($_POST['submit'])) {
			$maritalstatus = $this->input->post('material_status');
			$_SESSION['maritalstatus'] = $maritalstatus;
		} else {
			$maritalstatus = $_SESSION['maritalstatus'];
		}

		if (isset($_POST['submit'])) {
			$religion = $this->input->post('religion');
			$_SESSION['religion'] = $religion;
		} else {
			$religion = $_SESSION['religion'];
		}

		if (isset($_POST['submit'])) {
			$mothertounge = $this->input->post('mother_tongue');
			$_SESSION['mothertounge'] = $mothertounge;
		} else {
			$mothertounge = $_SESSION['mothertounge'];
		}

		if (isset($_POST['submit'])) {
			$caste = $this->input->post('caste');
			$_SESSION['caste'] = $caste;
		} else {
			$caste = $_SESSION['caste'];
		}

		if (isset($_POST['submit'])) {
			$education = $this->input->post('education_level');
			$_SESSION['education'] = $education;
		} else {
			$education = $_SESSION['education'];
		}

		if (isset($_POST['submit'])) {
			$profession = $this->input->post('profession');
			$_SESSION['profession'] = $profession;
		} else {
			$profession = $_SESSION['profession'];
		} 

		if (isset($_POST['submit'])) {
			$country = $this->input->post('country');
			$_SESSION['country'] = $country;
		} else {
			$country = $_SESSION['country'];
		}
		
		if (isset($_POST['submit'])) {
			$state = $this->input->post('workState');
			$_SESSION['workState'] = $state;
		} else {
			$state = $_SESSION['workState'];
		}
		
			if (isset($_POST['submit'])) {
			$visatype = $this->input->post('visatype');
			$_SESSION['visatype'] = $visatype;
		} else {
			$visatype = $_SESSION['visatype'];
		}
		
			if (isset($_POST['submit'])) {
			$city = $this->input->post('city_new');
			$_SESSION['city_new'] = $city;
		} else {
			$city = $_SESSION['city_new'];
		}
		// print_r($city);die;

		if (isset($_POST['submit'])) {
			$elight = $this->input->post('elight');
			$_SESSION['elight'] = $elight;
		} else {
			$elight = $_SESSION['elight'];
		}
		
		if (isset($_POST['submit'])) {
			$specialization = $this->input->post('specialization');
			$_SESSION['specialization'] = $specialization;
		} else {
			$specialization = $_SESSION['specialization'];
		}

		if (isset($_POST['submit'])) {
			$payment = $this->input->post('payment');
			$_SESSION['payment_type'] = $payment;
		} else {
			$payment = $_SESSION['payment_type'];
		}

		if (isset($_POST['submit'])) {
			$dorfrom = $this->input->post('dorfrom');
			$_SESSION['dorfrom'] = $dorfrom;
		} else {
			$dorfrom = $_SESSION['dorfrom'];
		}

		if (isset($_POST['submit'])) {
			$dorto = $this->input->post('dorto');
			$_SESSION['dorto'] = $dorto;
		} else {
			$dorto = $_SESSION['dorto'];
		}

		if (isset($_POST['submit'])) {
			$propertyfor = $this->input->post('propertyfor');
			$_SESSION['propertyfor'] = $propertyfor;
		} else {
			$propertyfor = $_SESSION['propertyfor'];
		}

		if (isset($_POST['submit'])) {
			$propertyto = $this->input->post('propertyto');
			$_SESSION['propertyto'] = $propertyto;
		} else {
			$propertyto = $_SESSION['propertyto'];
		}

		if (isset($_POST['submit'])) {
			$district = $this->input->post('district');
			$_SESSION['district'] = $district;
		} else {
			$district = $_SESSION['district'];
		}


		if (isset($_POST['submit'])) {
			$application_status = $this->input->post('application_status');
			$_SESSION['application_status'] = $application_status;
		} else {
			$application_status = $_SESSION['application_status'];
		}

		if (isset($_POST['submit'])) {
			$employee = $this->input->post('employee');
			$_SESSION['employee'] = $employee;
		} else {
			$employee = $_SESSION['employee'];
		}

		if (isset($_POST['submit'])) {
			$currency = $this->input->post('currency');
			$_SESSION['currency'] = $currency;
		} else {
			$currency = $_SESSION['currency'];
		}

		if (isset($_POST['submit'])) {
			$photos = $this->input->post('photos');
			$_SESSION['photos'] = $photos;
		} else {
			$photos = $_SESSION['photos'];
		}

		if (isset($_POST['submit'])) {
			$salaryfrom = $this->input->post('salaryfrom');
			$_SESSION['salaryfrom'] = $salaryfrom;
		} else {
			$salaryfrom = $_SESSION['salaryfrom'];
		}

		if (isset($_POST['submit'])) {
			$salaryto = $this->input->post('salaryto');
			$_SESSION['salaryto'] = $salaryto;
		} else {
			$salaryto = $_SESSION['salaryto'];
		}

		if (isset($_POST['submit'])) {
			$star = $this->input->post('star');
			$_SESSION['star'] = $star;
		} else {
			$star = $_SESSION['star'];
		}
		if (isset($_POST['submit'])) {
			$phone_no = $this->input->post('phone_no');
			$_SESSION['phone_no'] = $phone_no;
		} else {
			$phone_no = $_SESSION['phone_no'];
		}
		$selectedProfiles = $_SESSION["selected_profiles"];
		
		$data = array(); 
        $data["selected_profiles"] = $this->my_model->getSelectedShareProfilesData($selectedProfiles);
     
        $conditions['returnType'] = 'count'; 
        //$totalRec = $this->post->getRows($conditions); 
		if($_GET["searchtype"] == "recomend") {
			$_SESSION['profile_id'] = $profile_id;
			$totalRec = $this->my_model->searchRecomendationsCount($profile_id);
        } else {
			$totalRec = $this->my_model->search_tot_recordsNEW($gender, $profile_id, $surname, $name, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $religion, $mothertounge, $caste, $education, $profession, $country, $elight, $payment, $dorfrom, $dorto, $propertyfor, $propertyto, $district, $application_status, $employee, $currency,$photos, $salaryfrom, $salaryto, $star, $phone_no,$state,$visatype,$city,$specialization);
		}
		// Pagination configuration 
        $config['target']      = '#dataList'; 
		if($_GET["searchtype"] == "recomend") {
			$config['base_url']    = base_url('admin/admin_search/ajaxPaginationRecomendData');
        } else {
			$config['base_url']    = base_url('admin/admin_search/ajaxPaginationData');
		}         
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config);
		if($_GET["searchtype"] == "recomend") {
			
			$sub_records = $this->my_model->searchRecomendationsByProfile($this->perPage, 0, $profile_id);
        } else {
			
			$sub_records = $this->my_model->search_sub_recordsNew($this->perPage, 0, $gender, $profile_id, $surname, $name, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $religion, $mothertounge, $caste, $education, $profession, $country, $elight, $payment, $dorfrom, $dorto, $propertyfor, $propertyto, $district, $application_status, $employee, $currency,$photos, $salaryfrom, $salaryto, $star, $phone_no,$state,$visatype,$city,$specialization);
		}
    //    echo "<pre>";print_r($sub_records);exit;
		$data['posts'] = $sub_records;	 
		$data['rm_image'] =  $this->my_model->rm_image(); 
         
        $this->load->view($this->headerPage,$data);        
        //load the view		
		$this->load->view($this->ajaxProfileSearchResults, $data);
		$this->load->view($this->footerPage);
	}
	
	public function ajaxPaginationData(){		
		$gender = $_SESSION['gender'];
		$profile_id = $_SESSION['profile_id'];
		$surname = $_SESSION['surname'];
		$name = $_SESSION['name'];
		$heightfrom = $_SESSION['heightfrom'];
		$heightto = $_SESSION['heightto'];
		$agefrom = $_SESSION['agefrom'];
		$ageto = $_SESSION['ageto'];
		$maritalstatus = $_SESSION['maritalstatus'];
		$religion = $_SESSION['religion'];
		$mothertounge = $_SESSION['mothertounge'];
		$caste = $_SESSION['caste'];
		$education = $_SESSION['education'];
		$profession = $_SESSION['profession'];
		$country = $_SESSION['country'];
		$elight = $_SESSION['elight'];
		$payment = $_SESSION['payment_type'];
		$dorfrom = $_SESSION['dorfrom'];
		$dorto = $_SESSION['dorto'];
		$propertyfor = $_SESSION['propertyfor'];
		$propertyto = $_SESSION['propertyto'];
		$district = $_SESSION['district'];
		$application_status = $_SESSION['application_status'];
		$employee = $_SESSION['employee'];
		$currency = $_SESSION['currency'];
		$photos = $_SESSION['photos'];
		$salaryfrom = $_SESSION['salaryfrom'];
		$salaryto = $_SESSION['salaryto'];
		$star = $_SESSION['star'];
		$state = $_SESSION['workState'];
		$visatype = $_SESSION['visatype'];
		$city = $_SESSION['city_new'];
		// Define offset 
		$page = $this->input->post('page'); 
		if(!$page){ 
			$offset = 0; 
		}else{ 
			$offset = $page; 
		} 
		 
		// Get record count 
		$conditions['returnType'] = 'count'; 
		$totalRec = $this->my_model->search_tot_recordsNEW($gender, $profile_id, $surname, $name, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $religion, $mothertounge, $caste, $education, $profession, $country, $elight, $payment, $dorfrom, $dorto, $propertyfor, $propertyto, $district, $application_status, $employee, $currency,$photos, $salaryfrom, $salaryto, $star, $phone_no,$state,$visatype,$city,$specialization);
		// Pagination configuration 
		$config['target']      = '#dataList'; 
		$config['base_url']    = base_url('admin/admin_search/ajaxPaginationData'); 
		$config['total_rows']  = $totalRec; 
		$config['per_page']    = $this->perPage; 
		 
		// Initialize pagination library 
		$this->ajax_pagination->initialize($config); 
		 
		// Get records 
		$conditions = array( 
			'start' => $offset, 
			'limit' => $this->perPage 
		);
		$sub_records = $this->my_model->search_sub_recordsNew($this->perPage, $offset, $gender, $profile_id, $surname, $name, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $religion, $mothertounge, $caste, $education, $profession, $country, $elight, $payment, $dorfrom, $dorto, $propertyfor, $propertyto, $district, $application_status, $employee, $currency,$photos, $salaryfrom, $salaryto, $star, $phone_no,$state,$visatype,$city,$specialization);
		$data['posts'] = $sub_records;
		$this->load->view('ajax_profile_search_result_data', $data, false); 
    } 
	
	public function ajaxPaginationRecomendData() {
		$profile_id = $_SESSION['profile_id'];		
		$page = $this->input->post('page'); 
		if(!$page){ 
			$offset = 0; 
		}else{ 
			$offset = $page; 
		}
		// Get record count 
		$conditions['returnType'] = 'count'; 		
		$totalRec = $this->my_model->searchRecomendationsCount($profile_id);
		// Pagination configuration 
		$config['target']      = '#dataList'; 
		$config['base_url']    = base_url('admin/admin_search/ajaxPaginationRecomendData'); 
		$config['total_rows']  = $totalRec; 
		$config['per_page']    = $this->perPage; 
		 
		// Initialize pagination library 
		$this->ajax_pagination->initialize($config); 
		 
		// Get records 
		$conditions = array( 
			'start' => $offset, 
			'limit' => $this->perPage 
		); 
		$sub_records = $this->my_model->searchRecomendationsByProfile($this->perPage, $offset, $profile_id);
		$data['posts'] = $sub_records;
		$this->load->view('ajax_profile_search_result_data', $data, false);
	}
	
	public function ajaxLatestProfiles() {
		$selectedProfiles = $_SESSION["selected_profiles"];
		
		// print_r($data);die;
		$data = array(); 
        $data["selected_profiles"] = $this->my_model->getSelectedShareProfilesData($selectedProfiles);
// print_r($data["selected_profiles"]);die;
    $conditions['returnType'] = 'count';
		$totalRec = $this->my_model->searchLatestProfilesCount();
		// Pagination configuration 
        $config['target']      = '#dataList'; 
		$config['base_url']    = base_url('admin/admin_search/ajaxPaginationLaestProfilesData');        
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config);
		$sub_records = $this->my_model->searchLatestProfiles($this->perPage, 0);
		$data['posts'] = $sub_records;	 
		$data['rm_image'] =  $this->my_model->rm_image();
		// print_r($data['rm_image']);die;
         
        $this->load->view($this->headerPage,$data);        
        //load the view		
		$this->load->view($this->ajaxProfileSearchResults, $data);
		$this->load->view($this->footerPage);
	}
	
	public function ajaxPaginationLaestProfilesData() {	
		$page = $this->input->post('page'); 
		if(!$page){ 
			$offset = 0; 
		}else{ 
			$offset = $page; 
		}
		// Get record count 
		$conditions['returnType'] = 'count'; 		
		$totalRec = $this->my_model->searchLatestProfilesCount();
		// Pagination configuration 
		$config['target']      = '#dataList'; 
		$config['base_url']    = base_url('admin/admin_search/ajaxPaginationLaestProfilesData'); 
		$config['total_rows']  = $totalRec; 
		$config['per_page']    = $this->perPage; 
		 
		// Initialize pagination library 
		$this->ajax_pagination->initialize($config); 
		 
		// Get records 
		$conditions = array( 
			'start' => $offset, 
			'limit' => $this->perPage 
		); 
		$sub_records = $this->my_model->searchLatestProfiles($this->perPage, $offset);
		$data['posts'] = $sub_records;
		$this->load->view('ajax_profile_search_result_data', $data, false);
	}
	
	public function addProfileToShare() {
		$profileId = $this->input->post('profile_id');		
		if(!in_array($profileId, array_keys($_SESSION["selected_profiles"]))) {
			$_SESSION["selected_profiles"][$profileId] = $profileId;
			$profileData = $this->my_model->getProfileDetailsById($profileId);
			$html = '';
			$html.='<div class="col-md-12 no-padding profile" id="profile_'.$profileId.'">
						<div class="col-md-3 no-padding">
							<div>';
							if (!empty($profileData['applicationphotopath'])) {
								$html.='<img src="'.$profileData['applicationphotopath'].'" class="profil-img" style="width:100%;">';
							} else {
							$html.='<img src="'.site_url().'images/profilepics/noimage.jpg" class="profil-img" style="width:100%;">';
							}
						$html.='</div></div>
						<div class="col-md-9 no-padding">
							<div class="selected_profile_details">
								<p class="profile_details">'.$profileData["first_name"]. " ".$profileData["last_name"].'</p>
								<p class="profile_details">'.$profileData["profile_id"].'</p>
								<p><label class="send_both_side_label"><input type="checkbox" name="bothside_selected_profile['.$profileId.']" id="bothside_selected_profile_'.$profileId.'" value="0"  onclick="sendThisBothSide('.$profileId.')"/><span>Send both side</span></label></p>
							</div>
							<div class="remove" id="'.$profileId.'" onclick="removeSeelctedProfile('.$profileId.')">x</div>
						</div>
						<input type="hidden" name="selected_profiles" value="'.$profileId.'"/>
					</div>';
			echo $html;
		}
		echo "";
	}
	
	public function removeProfileToShare() {
		$profileId = $this->input->post('profile_id');		
		//if(!in_array($profileId, array_keys($_SESSION["selected_profiles"]))) {
			unset($_SESSION["selected_profiles"][$profileId]);
		$resp = [];
		$resp["status"] = "success";
		$resp["message"] = "Profile removed from selected list successfully.";
		echo json_encode($resp);
		//}
	}
	public function sendProfilesToShare() {
		
		$postdata = $this->input->post('postdata');
		
		$shareProfiles = $bothsideSelectedProfile = [];
		$intrest=[];
		$shareTo = "";
		$bothSides = $resend = 0;
		$response = [];
		foreach($postdata as $post) {			
			if($post["name"] == "share_type") {
				$shareType = $post["value"];
			}
			continue;			
		}
		foreach($postdata as $post) {
			if($post["name"] == "selected_profiles") {
				$shareProfiles[] = $post["value"];
			}
			if($post["name"] == "sendto_profile") {
				$shareTo = $post["value"];
			}
			if($post["name"] == "send_profile_option") {
				$bothSides = $post["value"];
			}
			if($post["name"] == "resend") {
				$resend = $post["value"];
			}
			if(strpos($post["name"], "bothside_selected_profile")!== false) {
				$prfile = explode("[", $post["name"]);
				$bothsideSelectedProfile[] = rtrim($prfile[1], "]");
				$intrest[] = rtrim($prfile[0], "]");
			}
		}
		
		if(!empty($shareTo)) {
			if($shareType == "from") {
				
				$shareFrom = $shareTo;
				$response = $this->my_model->sendShareProfilesFromInEmail($shareType,$shareProfiles, $shareFrom, $bothSides, $resend, $bothsideSelectedProfile,$intrest);
			} else {
				
				$response = $this->my_model->sendShareProfilesInEmail($shareProfiles, $shareTo, $bothSides, $resend, $bothsideSelectedProfile,$intrest);
			}
			if($response["status"] == "success") {
				unset($_SESSION["selected_profiles"]);
			} else {
				$response["status"] = "error";
				$response["message"] = $response["message"];
			}
		} else {
			$response["status"] = "error";
			$response["message"] = "Please enter Profile Id";
		}
		echo json_encode($response);
	}

	public function searchprofilesNew()
	{
		// $data = $this->input->post();

		// print_r($data);exit();
		if (isset($_POST['submit'])) {
			$gender = $this->input->post('gender');
			$_SESSION['gender'] = $gender;
		} else {
			$gender = $_SESSION['gender'];
		}

		if (isset($_POST['submit'])) {
			$heightfrom = $this->input->post('height_from');
			$_SESSION['heightfrom'] = $heightfrom;
		} else {
			$heightfrom = $_SESSION['heightfrom'];
		}

		if (isset($_POST['submit'])) {
			$heightto = $this->input->post('height_to');
			$_SESSION['heightto'] = $heightto;
		} else {
			$heightto = $_SESSION['heightto'];
		}

		if (isset($_POST['submit'])) {
			$agefrom = $this->input->post('age_from');
			$_SESSION['agefrom'] = $agefrom;
		} else {
			$agefrom = $_SESSION['agefrom'];
		}

		if (isset($_POST['submit'])) {
			$ageto = $this->input->post('age_to');
			$_SESSION['ageto'] = $ageto;
		} else {
			$ageto = $_SESSION['ageto'];
		}

		if (isset($_POST['submit'])) {
			$maritalstatus = $this->input->post('material_status');
			$_SESSION['maritalstatus'] = $maritalstatus;
		} else {
			$maritalstatus = $_SESSION['maritalstatus'];
		}

		if (isset($_POST['submit'])) {
			$religion = $this->input->post('religion');
			$_SESSION['religion'] = $religion;
		} else {
			$religion = $_SESSION['religion'];
		}

		if (isset($_POST['submit'])) {
			$mothertounge = $this->input->post('mother_tongue');
			$_SESSION['mothertounge'] = $mothertounge;
		} else {
			$mothertounge = $_SESSION['mothertounge'];
		}

		if (isset($_POST['submit'])) {
			$caste = $this->input->post('caste');
			$_SESSION['caste'] = $caste;
		} else {
			$caste = $_SESSION['caste'];
		}

		if (isset($_POST['submit'])) {
			$education = $this->input->post('education_level');
			$_SESSION['education'] = $education;
		} else {
			$education = $_SESSION['education'];
		}

		if (isset($_POST['submit'])) {
			$profession = $this->input->post('profession');
			$_SESSION['profession'] = $profession;
		} else {
			$profession = $_SESSION['profession'];
		} 

		if (isset($_POST['submit'])) {
			$country = $this->input->post('country');
			$_SESSION['country'] = $country;
		} else {
			$country = $_SESSION['country'];
		}

		if (isset($_POST['submit'])) {
			$elight = $this->input->post('elight');
			$_SESSION['elight'] = $elight;
		} else {
			$elight = $_SESSION['elight'];
		}

		if (isset($_POST['submit'])) {
			$payment = $this->input->post('payment');
			$_SESSION['payment'] = $payment;
		} else {
			$payment = $_SESSION['payment'];
		}

		if (isset($_POST['submit'])) {
			$dorfrom = $this->input->post('dorfrom');
			$_SESSION['dorfrom'] = $dorfrom;
		} else {
			$dorfrom = $_SESSION['dorfrom'];
		}

		if (isset($_POST['submit'])) {
			$dorto = $this->input->post('dorto');
			$_SESSION['dorto'] = $dorto;
		} else {
			$dorto = $_SESSION['dorto'];
		}

		if (isset($_POST['submit'])) {
			$propertyfor = $this->input->post('propertyfor');
			$_SESSION['property_for'] = $propertyfor;
		} else {
			$propertyfor = $_SESSION['property_for'];
		}

		if (isset($_POST['submit'])) {
			$propertyto = $this->input->post('propertyto');
			$_SESSION['property_to'] = $propertyto;
		} else {
			$propertyto = $_SESSION['property_to'];
		}

		if (isset($_POST['submit'])) {
			$district = $this->input->post('district');
			$_SESSION['district'] = $district;
		} else {
			$district = $_SESSION['district'];
		}


		if (isset($_POST['submit'])) {
			$application_status = $this->input->post('application_status');
			$_SESSION['application_status'] = $application_status;
		} else {
			$application_status = $_SESSION['application_status'];
		}

		if (isset($_POST['submit'])) {
			$employee = $this->input->post('employee');
			$_SESSION['employee'] = $employee;
		} else {
			$employee = $_SESSION['employee'];
		}

		if (isset($_POST['submit'])) {
			$currency = $this->input->post('currency');
			$_SESSION['currency'] = $currency;
		} else {
			$currency = $_SESSION['currency'];
		}

		if (isset($_POST['submit'])) {
			$photos = $this->input->post('photos');
			$_SESSION['photos'] = $photos;
		} else {
			$photos = $_SESSION['photos'];
		}

		if (isset($_POST['submit'])) {
			$salaryfrom = $this->input->post('salaryfrom');
			$_SESSION['salaryfrom'] = $salaryfrom;
		} else {
			$salaryfrom = $_SESSION['salaryfrom'];
		}

		if (isset($_POST['submit'])) {
			$salaryto = $this->input->post('salaryto');
			$_SESSION['salaryto'] = $salaryto;
		} else {
			$salaryto = $_SESSION['salaryto'];
		}

		if (isset($_POST['submit'])) {
			$star = $this->input->post('star');
			$_SESSION['star'] = $star;
		} else {
			$star = $_SESSION['star'];
		}


		$this->load->view($this->headerPage);


		$total_records_count = $this->my_model->search_tot_recordsNEW($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $religion, $mothertounge, $caste, $education, $profession, $country, $elight, $payment, $dorfrom, $dorto, $propertyfor, $propertyto, $district, $application_status, $employee, $currency,$photos, $salaryfrom, $salaryto, $star);
		// print_r($total_records_count);exit();

		$this->load->library('pagination');

		/*$config = [
			'base_url'			=> base_url ('admin/admin_search/searchprofilesNew'),
			'per_page'			=> 5,
			'total_rows'		=> $total_records_count,
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
		$this->pagination->initialize($config);*/
		$sub_records = $this->my_model->search_sub_recordsNew($config['per_page'], $this->uri->segment(4), $gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $religion, $mothertounge, $caste, $education, $profession, $country, $elight, $payment, $dorfrom, $dorto, $propertyfor, $propertyto, $district, $application_status, $employee, $currency,$photos, $salaryfrom, $salaryto, $star);
		/*$data['search_sub_rec'] = $sub_records;
		$data['search_tot_rec'] = $total_records_count;
		$data['images_info']  =  $this->my_model->get_images($sub_records[0]['user_id']);
		$data['links'] = $this->pagination->create_links();*/
		
		$data = array();
        
        //total rows count
        $totalRec = $total_records_count;
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url ('admin/admin_search/searchprofilesajax');
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['profiles'] = $sub_records;
		//$this->post->getRows(array('limit'=>$this->perPage));
        
        //load the view		
		$this->load->view($this->viewPage, $data);
		$this->load->view($this->footerPage);
	}


	public function viewprofile($id)
	{
// print_r($id);die;
		// if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != ''){
		$data['primary_info'] = $this->my_model->get_primary_details($id);
		// $data['profile_complete']=$this->my_model->get_profile_complete($id);
		$data['profile_pic'] = $this->my_model->get_profilepic_details($id);
		$data['profile_info'] = $this->my_model->get_profile_info($id);
		$data['images_info'] = $this->my_model->get_images($id);
		// $data['payment_details']=$this->my_model->get_payment_details($id);

		$data['religion_info'] = $this->my_model->get_religion_details($id);
		$data['profession_info'] = $this->my_model->get_professional_details($id);
		$data['parents_info'] = $this->my_model->get_parents_details($id);
		$data['siblings_info'] = $this->my_model->get_siblings_details($id);
		$data['sisters_info'] = $this->my_model->get_sisters_details($id);
		$data['brothers_info'] = $this->my_model->get_brothers_details($id);
		$data['Propertyinfo'] = $this->my_model->get_property_details($id);
		$data['contact_info'] = $this->my_model->get_contact_city_details($id);
		$data['profilesettings'] = getprofilesetbyuserid($id);
		$this->load->model('Admin_dashboard_model', 'my_admindb_model');
$data['education_info'] = $this->my_admindb_model->education_info($id);	
$data['rm_image'] =  $this->my_model->rm_image(); 
		// $data['recently_viewed']=$this->my_model->recently_viewed($id);
		// $data['shortlisted_count']=$this->my_model->shortlisted_count($id);
		// $data['ignored_count']=$this->my_model->ignored_count($id);
		// $data['contact_list']=$this->my_model->contact_count($id);
// echo '<pre>';print_r($data['brothers_info']);exit;
		$this->load->view($this->headerPage,$data);
		// $this->load->view($this->profilePage, $data);
		$this->load->view($this->profilePage, $data);
		$this->load->view($this->footerPage);
		// }
		// else{
		// redirect($this->listPage_redirect,'refresh');
		// }
	}
	
	/***
	* Get Full Profile
	*/
	public function full_profile($id)
	{
		// if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != ''){
		$data['primary_info'] = $this->my_model->get_primary_details($id);
		// $data['profile_complete']=$this->my_model->get_profile_complete($id);
		$data['profile_pic'] = $this->my_model->get_profilepic_details($id);
		$data['profile_info'] = $this->my_model->get_profile_info($id);
		$data['images_info'] = $this->my_model->get_images($id);
		// $data['payment_details']=$this->my_model->get_payment_details($id);

		$data['religion_info'] = $this->my_model->get_religion_details($id);
		$data['profession_info'] = $this->my_model->get_professional_details($id);
		$data['parents_info'] = $this->my_model->get_parents_details($id);
		$data['siblings_info'] = $this->my_model->get_siblings_details($id);
		$data['sisters_info'] = $this->my_model->get_sisters_details($id);
		$data['brothers_info'] = $this->my_model->get_brothers_details($id);
		$data['Propertyinfo'] = $this->my_model->get_property_details($id);
		$data['profilesettings'] = getprofilesetbyuserid($id);
		$this->load->model('Admin_dashboard_model', 'my_admindb_model');
		$data['education_info'] = $this->my_admindb_model->education_info($id);	
		$data['contact_info'] = $this->dashboard_model->get_contact_details($id);
		$data['primary_info']['mobile'] = $this->encrypt_model->decryptField($data['primary_info']['mobile']);
        $data['primary_info']['email'] = $this->encrypt_model->decryptField($data['primary_info']['email']);
		$data['parents_info']['father_email'] = $this->encrypt_model->decryptField($data['parents_info']['father_email']);
		$data['parents_info']['father_mobile'] = $this->encrypt_model->decryptField($data['parents_info']['father_mobile']);
		$data['parents_info']['mother_email'] = $this->encrypt_model->decryptField($data['parents_info']['mother_email']);
		$data['parents_info']['mother_mobile'] = $this->encrypt_model->decryptField($data['parents_info']['mother_mobile']);
		$this->load->view($this->headerPage);
		// $this->load->view($this->profilePage, $data);
		$this->load->view($this->fullProfilePage, $data);
		$this->load->view($this->footerPage);
		// }
		// else{
		// redirect($this->listPage_redirect,'refresh');
		// }
	}


	public function profileview($id)
	{
		// if($this->session->userdata('user_email') != '' &&  $this->session->userdata('user_id') != ''){
		$data['primary_info'] = $this->my_model->get_primary_details($id);
		// $data['profile_complete']=$this->my_model->get_profile_complete($id);
		$data['profile_pic'] = $this->my_model->get_profilepic_details($id);
		$data['profile_info'] = $this->my_model->get_profile_info($id);
		$data['images_info'] = $this->my_model->get_images($id);
		// $data['payment_details']=$this->my_model->get_payment_details($id);

		$data['religion_info'] = $this->my_model->get_religion_details($id);
		$data['profession_info'] = $this->my_model->get_professional_details($id);
		$data['parents_info'] = $this->my_model->get_parents_details($id);
		$data['siblings_info'] = $this->my_model->get_siblings_details($id);
		$data['sisters_info'] = $this->my_model->get_sisters_details($id);
		$data['brothers_info'] = $this->my_model->get_brothers_details($id);
		$data['Propertyinfo'] = $this->my_model->get_property_details($id);

		// $data['recently_viewed']=$this->my_model->recently_viewed($id);
		// $data['shortlisted_count']=$this->my_model->shortlisted_count($id);
		// $data['ignored_count']=$this->my_model->ignored_count($id);
		// $data['contact_list']=$this->my_model->contact_count($id);

		$this->load->view($this->headerPage);
		$this->load->view($this->profilePage, $data);
		$this->load->view($this->footerPage);
		// }
		// else{
		// redirect($this->listPage_redirect,'refresh');
		// }
	}
	public function generateWhatsAppShareUrl() {
		// print_r("deva");die;
		$interestOnId = $this->input->post('profile_id');
		$profile = $this->input->post('share_to');
		$resendWhatsapp = $this->input->post('resend_whatsapp');
		$share_type = $this->input->post('share_type');
		
		$resp = [];
		$this->load->model('Admin_dashboard_model', 'admin_dashboard_model');
		if(!empty($interestOnId) && !empty($profile)) {
			$shareFromData = getuserdetbyprofid($profile);
			$shareToData = getuserdetbyid($interestOnId);	
			// echo "test--".$shareFromData->id;exit;	
			if($shareFromData->id == "") {
				$resp["status"] = "error";
				$resp["message"] = "Profile Id does not exist. Please check.";
				echo json_encode($resp);exit;
			}
			if($shareFromData->gender == $shareToData->gender) {
				$resp["status"] = "error";
				$resp["message"] = "Both Profiles gender is same. Please check.";
				echo json_encode($resp);exit;
			}
			if($resendWhatsapp == 0) {
				$existingFromids = [];
				$existingFromids[] = $shareFromData->id;
				$alreadysent = $this->admin_dashboard_model->getallreadyemailsentinfoByFromIds($existingFromids, $shareToData->id);
				// print_r($alreadysent);exit;
				if ($alreadysent["status"] == "exist") {
					$resp["status"] = "error";
					$resp["message"] = $shareToData->profile_id." profile already shared to '".$shareFromData->profile_id."' profile(s).";
					echo json_encode($resp);exit;
				}
			}
			$linkExpireDate = Date('y:m:d', strtotime('+3 days'));
			if($share_type == 'normal') {
			// print_r($share_type);die;
			$url = base_url()."dashboard/search/view_profile/".base64_encode($interestOnId."/".$shareFromData->id."-".$interestOnId."/".$this->session->userdata('user_id')."/expiry=".$linkExpireDate);
		// print_r($url);die;	
		}
			else if($share_type == 'fp') { 
	
			$url = base_url()."dashboard/search/view_profile_contact_info/".base64_encode($interestOnId."/".$shareFromData->id."-".$interestOnId."/".$this->session->userdata('user_id')."/expiry=".$linkExpireDate);
			}
			$resp["status"] = "success";
			$resp["url"] = $url;
		} else {
			$resp["status"] = "error";
			$resp["message"] = "Something went wrong. Please try again.";
		}
		echo json_encode($resp);		
	}
}
