<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller {
    public $headerPage = '../../views/header';
    public $footerPage = '../../views/footer';
    public $listPage = 'register';
    public $religionPage = 'religion-details';
    public $professionPage = 'professional-details';
    public $propertyPage = 'property-details';
    public $searchPage = 'search';
    public $parentsPage = 'parents-info';
    public $siblingsPage = 'siblings-info';
    public $photosPage = 'photos-info';
    public function __construct() {
        parent::__construct();
        $this->load->model('Register_model', 'my_model');
        $this->load->model('../../dashboard/models/Dashboard_model', 'dashboard_model');
		$this->load->model('../../login/models/Login_model', 'login_model');
        $this->load->library('email');
		$this->load->library('encryption');
        $this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
        // Disable it all for current call
        error_reporting(0);
    }
    public function index() {
		 redirect(site_url() . "registration");
        // echo '<pre>';print_r($_SESSION);exit;
        if ($this->input->post('submit') != '') {
            //error_reporting(E_ALL);
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            //captcha validation
            $secret = '6Lc2sXQeAAAAACo_aNTV1ODi-LadIolteYMW92v3';
            $credential = array('secret' => $secret, 'response' => $this->input->post('g-recaptcha-response'));
            $verify = curl_init();
            curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($verify, CURLOPT_POST, true);
            curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($verify);
            $status = json_decode($response, true);
            if ($status["success"] != 1) {
                $this->session->set_flashdata('msg_failure', 'Something went wrong, please try again111.');
                redirect(site_url() . "register");
            }
            $exit_details = $this->my_model->exit_details($email, $mobile);
            if ($exit_details == 0) {
				//generate simple random code
				$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$code = substr(str_shuffle($set), 0, 12);
                $insert_id = $this->my_model->add_primaryinfo($code);
                if ($insert_id) {
                    $usermessagebody = emailtemplate('register');
                    $usermessagebody = str_replace('{name}', ucfirst($this->input->post('first_name') . ' ' . $this->input->post('last_name')), $usermessagebody);
                    $usermessagebody = str_replace('{base_url}', base_url(), $usermessagebody);
                    $usermessagebody = str_replace('{logo}', base_url() . 'images/logo.png', $usermessagebody);
                    $usermessagebody = str_replace('{website_name}', 'Kammavaari', $usermessagebody);
                    $usermessagebody = str_replace('{login_url}', base_url() . 'login', $usermessagebody);
                    $usermessagebody = str_replace('{email}', $this->input->post('email'), $usermessagebody);
                    $usermessagebody = str_replace('{password}', $this->input->post('password'), $usermessagebody);
                    $usermessagebody = str_replace('{info_email}', 'info@kammavaari.com', $usermessagebody);
                    $usermessagebody = str_replace('{support_contact}', '91-9177036777', $usermessagebody);
                    $message_admin = '<table><tr><td>Dear Admin,<br> New registration on site.</td></tr>
					<tr><td>Name</td><td>:&nbsp; <a href="' . site_url() . "admin/admin_search/viewprofile/" . $insert_id . '">' . ucfirst($this->input->post('first_name') . ' ' . $this->input->post('last_name')) . '</a></td></tr>
					<tr><td>Email</td><td>:&nbsp; ' . $this->input->post('email') . '</td></tr>
					<tr><td>Mobile</td><td>:&nbsp; ' . $this->input->post('mobile') . '</td></tr>
					<tr><td>Gender</td><td>:&nbsp; ' . ucfirst($this->input->post('gender')) . '</td></tr>
					<tr><td>Living In</td><td>:&nbsp; ' . ucfirst($this->input->post('country')) . '</td></tr></table>';
                    $to = $this->input->post('email');
					
					//$encUserId = $this->encrypt->encode($insert_id);
					$emailVerificationUrl = base_url()."register/activate/".$insert_id."/".$code;
					$userVerificationMsgBody = emailtemplate('account_activation');
					$userVerificationMsgBody = str_replace('{name}', ucfirst($this->input->post('first_name') . ' ' . $this->input->post('last_name')), $userVerificationMsgBody);
                    $userVerificationMsgBody = str_replace('{base_url}', base_url(), $userVerificationMsgBody);
                    $userVerificationMsgBody = str_replace('{logo}', base_url() . 'images/logo.png', $userVerificationMsgBody);
                    $userVerificationMsgBody = str_replace('{website_name}', 'Kammavaari', $userVerificationMsgBody);
                    $userVerificationMsgBody = str_replace('{activation_url}', $emailVerificationUrl, $userVerificationMsgBody);
                    $userVerificationMsgBody = str_replace('{email}', $this->input->post('email'), $userVerificationMsgBody);
                    $userVerificationMsgBody = str_replace('{password}', $this->input->post('password'), $userVerificationMsgBody);
                    $userVerificationMsgBody = str_replace('{info_email}', 'info@kammavaari.com', $userVerificationMsgBody);
                    $userVerificationMsgBody = str_replace('{support_contact}', '91-9177036777', $userVerificationMsgBody);
                    //$response = $this->email_model->emailgmailconf($to, "Kammavaari Registration", $usermessagebody);
					//echo $userVerificationMsgBody;exit;
					$response = $this->email_model->emailgmailconf($to, "Kammavaari Matrimonial Services - Registration Email Verification", $userVerificationMsgBody);
                    //$response = $this->email_model->emailgmailconf('info@kammavaari.com', "Kammavaari New User Registration - " . $email . "", $message_admin);
                    $updateBatteryProfile = $this->my_model->update_battery_primary($insert_id);
                    $this->session->set_userdata('user_reg_id', $insert_id);
                    redirect(site_url() . "register/religion");
                } else {
                    $this->session->set_flashdata('msg_failure', 'Something Went Wrong');
                    redirect(site_url() . "register");
                }
            } else {
                $this->session->set_flashdata('msg_failure', 'Record Already Exists');
                redirect(site_url() . "register");
            }
        }
        $data = $this->my_model->get_last_id();
        $data['id'] = $data['id'];
        $data['countries'] = $this->my_model->get_all_countries();
        $this->load->view($this->headerPage, $header);
        $this->load->view($this->listPage, $data);
        $this->load->view($this->footerPage, $footer);
    }
	public function activate() {
		$id =  $this->uri->segment(3);
		$code = $this->uri->segment(4);
		$decUserId = $id;
		//$decUserId = $this->encrypt->decode($id);
		//fetch user details
		$user = $this->my_model->getUserDetailsById($decUserId);
		//echo "<pre>";print_r($user);exit;
		
		//if code matches
		if($user['activation_code'] == $code) {
			//update user active status
			$data['is_Everified'] = 1;
			$query = $this->my_model->activateUser($data, $decUserId);
			if($query) {
				$this->redirectAfterEmailVerified($decUserId);
				$this->session->set_flashdata('msg_succ', 'User activated successfully');
			} else {
				$this->session->set_flashdata('msg_failure', 'Something went wrong in activating account');
			}
		} else {
			$this->session->set_flashdata('msg_failure', 'Cannot activate account.');
		}

		redirect(site_url() . "register");
	}
	public function redirectAfterEmailVerified($id) {
		$data = $this->my_model->getUserDetailsById($id);
		if (isset($data) && $data['is_Everified'] == 1) {
			$this->session->set_userdata('user_login', TRUE);
			$this->session->set_userdata('user_name', ucfirst($data['first_name']) . ' ' . ucfirst($data['last_name']));
			$this->session->set_userdata('profile_id', $data['profile_id']);
			$this->session->set_userdata('user_id', $data['id']);
			$this->session->set_userdata('user_reg_id', $data['id']);
			$this->session->set_userdata('user_email', $data['email']);
			$staffdet = getstaffdetbyclientid($data['id']);
			$staffdet->username = !empty($staffdet->username) ? $staffdet->username : "Nageswara Rao";
			$staffdet->phone_no = !empty($staffdet->phone_no) ? $staffdet->phone_no : "97031 55555";
			$this->session->set_userdata('s_id', $staffdet->id);
			$this->session->set_userdata('s_name', ucfirst($staffdet->username));
			$this->session->set_userdata('s_mobile', $staffdet->phone_no);
			$data = $this->login_model->get_payment_details($this->session->userdata('user_id'));
			if (count($data) == 0) {
				$payment_level = "Free";
			} else {
				$current_date = date('Y-m-d H:i:s');
				if (($data[0]['used_contacts'] >= $data[0]['allowed_contacts']) || ($current_date >= $data[0]['expiry_date'])) {
					$payment_level = "Renewal";
				} else {
					$payment_level = "Paid";
				}
			}
			$this->session->set_userdata('payment_level', $payment_level);
			$ip = $_SERVER['REMOTE_ADDR'];
			$details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json"));
			//echo '<pre>';print_r("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json");exit;
			$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
			$location = $details->loc;
			$city = $details->city;
			$region = $details->region;
			$country = $details->country;
			$date = date("D dS M,Y h:i a");
			//echo 'afas';exit;
			$setdata = array('ip_address' => $ip, 'location' => ($location) ? $location : 'NA', 'city' => ($city) ? $city : 'NA', 'region' => ($region) ? $region : 'NA', 'user_id' => $this->session->userdata('user_id'), 'country' => ($country) ? $country : 'NA', 'logged_time' => date('Y-m-d H:i:s'),);
			//echo '<pre>';print_r($setdata);
			$result = $this->db->insert('tbl_track_users', $setdata);
			// echo 'afas';exit;
			if ($result) {
				$this->session->set_userdata($newdata);
				$this->db->where('ms_id', $this->session->userdata('user_id'));
				$this->db->set('login_date', date('Y-m-d H:i:s'));
				$this->db->set('login_count', 'login_count+ 1', FALSE);
				$this->db->update('ms_profilesetting');
				redirect(site_url() . 'dashboard/my_account');
			}
		 }
	}
    public function religion() {
        $regUserId = $this->session->userdata("user_reg_id");
        if (empty($regUserId)) {
            redirect(site_url() . "register");
        }
        $data = [];
        $data['profile_complete'] = $this->dashboard_model->get_profile_complete($this->session->userdata("user_reg_id"));
        if ($this->input->post('submit') != '') {
            $result = $this->my_model->add_religioninfo();
            if ($result) {
                $updateBatteryProfile = $this->my_model->update_battery_religion($regUserId);
                redirect(site_url() . "register/profession");
            } else {
                $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
                redirect(site_url() . "register/religion");
            }
        }
        $data['users_info'] = $this->my_model->getsessiondetails($regUserId);
        $data['heights'] = $this->my_model->get_all_heights();
        $data['religions'] = $this->my_model->get_all_religions();
        $data['mother_tounges'] = $this->my_model->get_all_mothertounges();
        $data['castes'] = $this->my_model->get_all_castes();
        $data['zodic_signs'] = $this->my_model->get_all_zodic_signs();
        $data['stars'] = $this->my_model->get_all_stars();
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->religionPage, $data);
        $this->load->view($this->footerPage, $footer);
    }
    public function profession() {
        $regUserId = $this->session->userdata("user_reg_id");
        if (empty($regUserId)) {
            redirect(site_url() . "register");
        }
        $data = [];
        $data['profile_complete'] = $this->dashboard_model->get_profile_complete($regUserId);
        if ($this->input->post('submit') != '') {
            $result = $this->my_model->add_profession_info();
            if ($result) {
                $updateBatteryProfile = $this->my_model->update_battery_profession($regUserId);
                redirect(site_url() . "register/property");
            } else {
                $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
                redirect(site_url() . "register/profession");
            }
        }
        $data['users_info'] = $this->my_model->getsessiondetails($regUserId);
        $data['countries'] = $this->my_model->get_all_countries();
        $data['professions'] = $this->my_model->getallprofessions();
        $data['heighsteducation'] = $this->my_model->get_heighsteducations();
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->professionPage, $data);
        $this->load->view($this->footerPage);
    }
    public function property() {
        $regUserId = $this->session->userdata("user_reg_id");
        if (empty($regUserId)) {
            redirect(site_url() . "register");
        }
        $data = [];
        $data['profile_complete'] = $this->dashboard_model->get_profile_complete($regUserId);
        if ($this->input->post('submit') != '') {
            $result = $this->my_model->add_property_info();
            if ($result) {
                $updateBatteryProfile = $this->my_model->update_battery_profession($regUserId);
                redirect(site_url() . "register/parents");
            }
        } else {
		$data['property_values'] = $this->my_model->getPropertyValueRanges();
            $this->load->view($this->headerPage, $data);
            $this->load->view($this->propertyPage);
            $this->load->view($this->footerPage);
        }
		
    }
    public function parents() {
        $regUserId = $this->session->userdata("user_reg_id");
        if (empty($regUserId)) {
            redirect(site_url() . "register");
        }
        $data = [];
        $data['profile_complete'] = $this->dashboard_model->get_profile_complete($regUserId);
        if ($this->input->post('submit') != '') {
            $result = $this->my_model->add_parents_info();
            if ($result) {
                $updateBatteryProfile = $this->my_model->update_battery_parents($regUserId);
                redirect(site_url() . "register/siblings");
            } else {
                $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
                redirect(site_url() . "register/parents");
            }
        }
        $data['users_info'] = $this->my_model->getsessiondetails($regUserId);
        $data['states'] = $this->my_model->get_all_states();
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->parentsPage, $data);
        $this->load->view($this->footerPage);
    }
    public function siblings() {
        $regUserId = $this->session->userdata("user_reg_id");
        if (empty($regUserId)) {
            redirect(site_url() . "register");
        }
        $data = [];
        $data['profile_complete'] = $this->dashboard_model->get_profile_complete($regUserId);
        if ($this->input->post('submit') != '') {
            $result = $this->my_model->add_siblingsinfo();
            if ($result) {
                $updateBatteryProfile = $this->my_model->update_battery_siblings($regUserId);
                redirect(site_url() . "register/upload");
            } else {
                $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
                redirect(site_url() . "register/siblings");
            }
        }
        $data['users_info'] = $this->my_model->getsessiondetails($regUserId);
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->siblingsPage, $data);
        $this->load->view($this->footerPage);
    }
    public function upload() {
        $regUserId = $this->session->userdata("user_reg_id");
        if (empty($regUserId)) {
            redirect(site_url() . "register");
        }
        $data = [];
        $data['profile_complete'] = $this->dashboard_model->get_profile_complete($regUserId);
        $data = array();
        $user_id = $regUserId;
        // If file upload form submitted
        if ($this->input->post('submit_image') && !empty($_FILES['images']['name'])) {
            $filesCount = count($_FILES['images']['name']);
            if ($filesCount <= 3) {
                for ($i = 0;$i < $filesCount;$i++) {
                    $t = $j = $i + 1;
                    /*$_FILES['file']['name']     = $user_id."_".$_FILES['images']['name'][$i];*/
                    $image_type = $_FILES['images']['type'][$i];
                    $image_type = explode("/", $image_type);
                    $image_type = "." . $image_type[1];
                    $_FILES['file']['name'] = $user_id . "_" . $_FILES['images']['name'][$i]; //"image_".$j.$image_type;
                    $_FILES['file']['type'] = $_FILES['images']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['images']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['images']['size'][$i];
                    $target_path = "images/profilepics/" . $user_id;
                    if (!is_dir($target_path)) {
                        mkdir($target_path);
                    }
                    $uploadPath = $target_path;
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('file')) {
                        $imagepathnew = site_url() . $uploadPath . '/' . $user_id . "_" . $_FILES['images']['name'][$i]; //exit;
                        $fileData = $this->upload->data();
                        $uploadData[$i]['photoname'] = $user_id . "_" . $_FILES['images']['name'][$i]; //$fileData['file_name'];
                        $uploadData[$i]['uploaded_date'] = date("Y-m-d H:i:s");
                        $uploadData[$i]['fullphotopath'] = $imagepathnew;
                        $uploadData[$i]['applicationphotopath'] = $imagepathnew;
                        $uploadData[$i]['MS_id'] = $user_id;
                        if ($i == 0) {
                            $uploadData[$i]['ismain'] = 0;
                            $uploadData[$i]['isactive'] = "";
                        } else {
                            $uploadData[$i]['ismain'] = 0;
                            $uploadData[$i]['isactive'] = "";
                        }
                    }
                }
            } else { ?>
                <script>
                    alert("You can select only 3 images");
                </script>
            <?php
            }
            if (!empty($uploadData)) {
                $insert = $this->my_model->add_images($uploadData);
                if ($insert) {
                    $updateBatteryProfile = $this->my_model->update_battery_images($user_id);
                    // $this->session->set_flashdata('msg_succ', 'Registered Successfully');
                    //redirect(site_url()."register/upload/".$user_id);
                     ?>
    			<script>
    			    alert('Registration Done Successfully');
    			    window.location = "<?php echo site_url(); ?>";
    			</script>
               <?php
                } else {
                    $this->session->set_flashdata('msg_succ', 'Something Went Wrong');
                    redirect(site_url() . "register/upload");
                }
            }
        }
        $this->load->view($this->headerPage, $data);
        $this->load->view($this->photosPage);
        $this->load->view($this->footerPage);
    }
    public function getsubcastes() {
        $caste = $this->input->post('valu');
        $castes = $this->my_model->get_all_subcastes_ajax($caste);
        $selBox = '<option value="">---Select Subcaste---</option>';
        foreach ($castes as $key => $value) {
            $selBox.= '<option value="' . $value['subcaste'] . '">' . $value['subcaste'] . '</option>';
        }
        echo $selBox;
    }
    public function getdistricts() {
        $state_id = $this->input->post('value');
        $districts = $this->my_model->get_all_districts_ajax($state_id);
        $selBox = '<option value="">---Select District---</option>';
        foreach ($districts as $key => $value) {
            $selBox.= '<option value="' . $value['district'] . '">' . $value['district'] . '</option>';
        }
        echo $selBox;
    }
    public function getstates() {
        $country_id = $this->input->post('valu');
        $states = $this->my_model->get_all_states_ajax($country_id);
        $selBox = '<option value="">---Select States---</option>';
        foreach ($states as $key => $value) {
            $selBox.= '<option value="' . $value['state'] . '">' . $value['state'] . '</option>';
        }
        echo $selBox;
    }
    public function getdegree() {
        $h_id = $this->input->post('valu');
        $degrees = $this->my_model->get_all_degrees_ajax($h_id);
        $selBox = '<option value="">---Select Education First---</option>';
        foreach ($degrees as $key => $value) {
            $selBox.= '<option value="' . $value['educationdegree'] . '">' . $value['educationdegree'] . '</option>';
        }
        echo $selBox;
    }
    public function getspecialization() {
        $h_id = $this->input->post('valu');
        $specialization = $this->my_model->get_all_specialization_ajax($h_id);
        $selBox = '<option value="">---Select Degree First---</option>';
        foreach ($specialization as $key => $value) {
            $selBox.= '<option value="' . $value['specialization'] . '">' . $value['specialization'] . '</option>';
        }
        echo $selBox;
    }
    public function get_mysqli() {
        $db = (array)get_instance()->db;
        return mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
    }
	
	
}