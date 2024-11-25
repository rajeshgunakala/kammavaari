<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
    public $headerPage = '../../views/header';
    public $footerPage = '../../views/footer';
    public $listPage = 'login';
    // public $otppage = '../../views/otploginpage';
	public $listPage_redirect = 'login';
    public $login_redirect = 'login';
     public function __construct() {
        // print_r($_POST);exit;
        parent::__construct();
        $this->load->model('Login_model', 'login_model');       
        $this->load->library('email');
        $this->load->model('Encrypt_model', 'encrypt_model');
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
    public function index() { 
 // die;
        $user = $this->input->post("email");
        $mobi = $this->input->post("mobile");   
        if( $user != '' &&  $mobi != ''){
        redirect(base_url());
        }
        // Store the string into variable
        // if ($this->session->userdata('profile_id')) redirect(site_url() . 'dashboard/index');
        if ($this->input->post('submit') == '') {
            $username = $this->input->post("email");
            $mobileNo = $this->input->post("mobile");  
            $is_ajax = false;
            if(isset($mobileNo)) {
                $mobileNo =  $this->encrypt_model->hashInput($mobileNo);
                $data = $this->login_model->getMobileAccount($mobileNo);
                if(isset($data)) {
                    $otp = $this->login_model->loginOtp($mobile, $customerName);
                    $this->login_model->updateOtpToAccount($data, $otp);

                }

                $inptutOtp = $this->input->post("otp");
          
            } else {

                $username = $this->encrypt_model->hashInput($username);
                // print_r($username);die;
                $password = $this->input->post("password");
            
                if (!$username or !$password) {
                    redirect(base_url() . 'login');
                }

                if(is_numeric($this->input->post("email"))){
                    $data = $this->login_model->login($username, md5($password), 'mobile');
                }else{
                    $data = $this->login_model->login($username, md5($password));
                }


               
                $is_ajax = true;
        
                
            }          
            
            if (isset($data)) {
            
                // if($data['is_Mverified'] == 1 && $data['is_Everified'] == 1 )
                //	{
                  
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

                // for active user
                $this->db->delete('tbl_current_login',array('user_id'=>$this->session->userdata('user_id')));	
		        $data_login = array('user_id' =>$this->session->userdata('user_id') ,'last_activity' =>date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa'))),'online'=>'Yes');
		         $this->db->insert('tbl_current_login',$data_login);  
		         $last_id=$this->db->insert_id();
		        if (!empty($last_id)) {
			        $active_user_session = array('login_id' => $last_id);
                    $this->session->set_userdata('active_user_session',$active_user_session); 
		         }	

				if($staffdet->id) {
					$this->login_model->trackUserLogins($staffdet->id, $setdata);
				}

                if ($result) {
                  
                    /*$message = 'Somebody is logged into admin panel' . "\n\n" . ' Profile Id: ' . $data['profile_id'] . "\n\n" . 'Email Id: ' . $data['email'] . "\n\n" . ' Ip Address: ' . $ip . "\n\n" . 'Location: ' . $location . "\n\n" . 'City: ' . $city ."\n\n" . 'Region: ' . $region . "\n\n" . 'Country: ' . $country . "\n\n" . 'Logged Time: ' . $date;
                   
                    $this->email->from('info@kammavaari.com');
                    $this->email->to('Kammavaari@gmail.com');
                    $this->email->to('chmallikarjunamca@gmail.com');
                    $this->email->subject('Users Login Information');
                    $this->email->message($message);	
                    $this->email->send();*/
                    $this->session->set_userdata($newdata);
                    $this->db->where('ms_id', $this->session->userdata('user_id'));
                    $this->db->set('login_date', date('Y-m-d H:i:s'));
                    $this->db->set('login_count', 'login_count+ 1', FALSE);
                    $this->db->update('ms_profilesetting');

                    if($is_ajax === true){
                        echo json_encode(array("login" => true, "message" => "Login successful"));

                        exit();
                    }


                    redirect(site_url() . 'dashboard/index');
                }
                //redirect(site_url().'dashboard/my_account');
                /*redirect(site_url().'dashboard/my_account');*/
                //  }
                /*else
                {
                        redirect(site_url()."register/verify/".$data['id']);
                }*/
          } else {
            if($is_ajax === true){
                echo json_encode(array("login" => false, "message" => "Login failed"));

                exit();
            }
                $this->session->set_flashdata('msg_fail', 'Invalid Credentials.Try again.');
                redirect(base_url() . 'login');
                // redirect("indix.php/admin");
                
            }
        }  
        $this->load->view($this->headerPage);
        $this->load->view($this->listPage);
        $this->load->view($this->footerPage);
    }
    public function sendotp(){
       
        
        $this->load->view('otploginpage');
        
    }
    public function otplogin() {
      
        $inputMobileNo = $this->input->post("mobile");
 
        $otp = $this->input->post("otp");
        $resp = [];
		$notification_type = 1;
        if(isset($inputMobileNo) && !empty($inputMobileNo) && empty($otp)) {
            $mobileNo =  $this->encrypt_model->hashInput($inputMobileNo);
            $data = $this->login_model->getMobileAccount($mobileNo);
			if(count($data) == 0){
				$data = $this->login_model->getEmailAccount($mobileNo);//print_r($data);exit;
				$notification_type = 2;
			}		
			
		
            if(isset($data)) {
                $mobile = $inputMobileNo;
                $customerName = $data["first_name"];
				if($notification_type == 2){
                  
                $otp = $this->login_model->loginOtpEmail($mobile, $customerName);
			    }else{
				$otp = $this->login_model->loginOtp($mobile, $customerName);
				}
                $userId = $data["id"];
                $this->login_model->updateOtpToAccount($userId, $otp);
                $resp["status"] = "success";
                $resp["type"] = "otp";
                $resp["message"] = "OTP sent successfully";

            } else {
                $resp["status"] = "error";
                $resp["type"] = "otp";
                $resp["message"] = "Mobile number/ Account does not exist";
            }
        } else if(!empty($inputMobileNo) && !empty($otp)) {
            $mobileNo =  $this->encrypt_model->hashInput($inputMobileNo);
			
			$data = $this->login_model->getMobileAccount($mobileNo, $otp);	
			if(count($data) == 0){
			$data = $this->login_model->getEmailAccount($mobileNo, $otp);
			}		
			
            
            if(isset($data)) {
               $resp["status"] = "success";
                $resp["type"] = "login_otp";
                $this->loginSuccess($data);
            } else {
                $resp["status"] = "error";
                $resp["type"] = "login_otp";
                $resp["message"] = "Enter correct OTP number";
            }
        }
        echo json_encode($resp);

         //   $inptutOtp = $this->input->post("otp");
    }

    public function loginSuccess($data) {
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
		
		$this->db->delete('tbl_current_login',array('user_id'=>$data['id']));	
		$data_login = array('user_id' =>$data['id'] ,'last_activity' =>date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa'))));
		$this->db->insert('tbl_current_login',$data_login);  
		$last_id=$this->db->insert_id();
		if (!empty($last_id)) {
			$active_user_session = array('login_id' => $last_id);
            $this->session->set_userdata('active_user_session',$active_user_session); 
		}		   
				
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
		if($staffdet->id) {
			$this->login_model->trackUserLogins($staffdet->id, $setdata);
		}

        if ($result) {
            /*$message = 'Somebody is logged into admin panel' . "\n\n" . ' Profile Id: ' . $data['profile_id'] . "\n\n" . 'Email Id: ' . $data['email'] . "\n\n" . ' Ip Address: ' . $ip . "\n\n" . 'Location: ' . $location . "\n\n" . 'City: ' . $city ."\n\n" . 'Region: ' . $region . "\n\n" . 'Country: ' . $country . "\n\n" . 'Logged Time: ' . $date;
                    
            $this->email->from('info@kammavaari.com');
            $this->email->to('Kammavaari@gmail.com');
            $this->email->to('chmallikarjunamca@gmail.com');
            $this->email->subject('Users Login Information');
            $this->email->message($message);	
            $this->email->send();*/
            $this->session->set_userdata($newdata);
            $this->db->where('ms_id', $this->session->userdata('user_id'));
            $this->db->set('login_date', date('Y-m-d H:i:s'));
            $this->db->set('login_count', 'login_count+ 1', FALSE);
            $this->db->update('ms_profilesetting');
        }
    }

    public function redirect() {
        $id = $this->uri->segment(3);
        $data = $this->login_model->getLoginDetail($id);
        // print_r($data);exit();
        if (isset($data)) {
            if ($data['is_Mverified'] == 1 && $data['is_Everified'] == 1) {
                $this->session->set_userdata('user_login', TRUE);
                $this->session->set_userdata('user_id', $data['id']);
                $this->session->set_userdata('user_email', $data['email']);
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
                $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                $QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
                $location = $details->loc;
                $city = $details->city;
                $region = $details->region;
                $country = $details->country;
                $date = date("D dS M,Y h:i a");
                $setdata = array('ip_address' => $ip, 'location' => $location, 'city' => $city, 'region' => $region, 'user_id' => $this->session->userdata('user_id'), 'country' => $country, 'logged_time' => date('Y-m-d H:i:s'),);
                $result = $this->db->insert('tbl_track_users', $setdata);
                if ($result) {
                    $message = 'Somebody is logged into admin panel' . "\n\n" . ' Profile Id: ' . $data['profile_id'] . "\n\n" . 'Email Id: ' . $data['email'] . "\n\n" . ' Ip Address: ' . $ip . "\n\n" . 'Location: ' . $location . "\n\n" . 'City: ' . $city . "\n\n" . 'Region: ' . $region . "\n\n" . 'Country: ' . $country . "\n\n" . 'Logged Time: ' . $date;
                    $this->email->from('info@kammavaari.com');
                    $this->email->to('Kammavaari@gmail.com');
                    $this->email->subject('Users Login Information');
                    $this->email->message($message);
                    $this->email->send();
                    $this->session->set_userdata($newdata);
                    $this->db->where('ms_id', $this->session->userdata('user_id'));
                    $this->db->set('login_date', date('Y-m-d H:i:s'));
                    $this->db->set('login_count', 'login_count+ 1', FALSE);
                    $this->db->update('ms_profilesetting');
                    redirect(site_url() . 'dashboard/my_account');
                }
                /*redirect(site_url().'dashboard/my_account');*/
            } else {
                redirect(site_url() . "register/verify/" . $data['id']);
            }
        } else {
            $this->session->set_flashdata('msg_fail', 'Invalid Credentials.Try again.');
            redirect(site_url());
        }
    }
    public function logout() {
		$notification_id=$this->login_model->getLastLoginId($this->session->userdata('user_id'));
		$this->login_model->updateLogoutTime($notification_id);
        $this->session->unset_userdata('user_login');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_email');
        $this->session->sess_destroy();
        redirect($this->login_redirect, 'refresh');
    }
    public function forget_password() {
        $this->load->view($this->headerPage);
        $this->load->view('forget_password');
        $this->load->view($this->footerPage);
    }
    public function email() {
        $email = $this->input->post('email');
        $res = $this->login_model->email($email);
        if ($res) {
            $this->sendemail($email);
        } else {
            echo $res;
        }
    }
    public function sendemail($email) {
		return true;
        $password = $this->login_model->passwordcreator(6);
        $res = $this->login_model->savepassword($password, $email);
        $mail = new PhpMail;
        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = "mail.kammavaari.com";
        $mail->SMTPAuth = true;
        $mail->Username = "info@kammavaari.com";
        $mail->Password = "Siva@3999";
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->setFrom("info@kammavaari.com", "");
        $mail->addReplyTo("info@kammavaari.com", "");
        $mail->addAddress($email);
        $mail->Subject = "Forgot Password Response From Kammavaari.com";
        $mail->isHTML(true);
        $mail->Body = '<div>
		        <p>Dear ' . $res['first_name'] . ' ' . $res['last_name'] . '</p>
		        <p>You requested to retrieve your login details at www.kammavaari.com</p>
		        <div style="background-color: #9ff5a6;padding: 10px;border-radius: 13px;display: inline-block;">

		        <table border="0">
		                <tr><td><h2 style="margin: 5px 0;"><strong>Website </strong></h2></td><td><h2 style="margin: 5px 0;"><strong>: www.kammavaari.com</strong></h2></td></tr>
		                <tr><td><h2 style="margin: 5px 0;"><strong>Your Email </strong></h2></td><td><h2 style="margin: 5px 0;"><strong>: ' . $res['email'] . '</strong></h2></td></tr>
		                <tr><td><h2 style="margin: 5px 0;"><strong>Your Password </strong></h2></td><td><h2 style="margin: 5px 0;"><strong>: ' . $password . '</strong></h2></td> </tr>
		        </table>
		        </div>
		        <p>Thanks for giving us an opportunity to serve you!</p>
		        <p>Sincerely,</p>
		        <strong>kammavaari Team<br>www.kammavaari.com<br>91-9100965545</strong>
		</div>';
        if (!$mail->send()) {
            echo $mail->ErrorInfo;
        } else {
            echo 1;
        }
    }
    public function resetpassword() {
        if ($this->input->post('email') != '') {
            $pwddigt = substr(rand(1, 1000000), 0, 4);
            $pwdchar = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUXYVWZ"), 0, 4);
            $password = $pwdchar . $pwddigt;
            if ($this->login_model->email_check() != 0) {
                $changepass = $this->login_model->change_password($password);
                if ($changepass) {
                    $msg = "Your new Password is : " . $password . " ";
                    //$result = $this->emailssend($msg);
                    $result = $this->email_model->emailgmailconf($this->input->post('email'), "Password was Reset Successfully...", $msg);
                    if ($result == 'Success') {
                        $data['msg'] = "Password reset link has been sent to the email id provided";
                        $this->load->view($this->headerPage);
                        $this->load->view('forget_password', $data);
                        $this->load->view($this->footerPage);
                    } else {
                        $data['msg'] = "Password reset link has been sent to the email id provided";
                        $this->load->view($this->headerPage);
                        $this->load->view('forget_password', $data);
                        $this->load->view($this->footerPage);
                    }
                }
            } else {
                $data['msg'] = "Enter Valid Kammavaari ID / E-Mail ID";
                $this->load->view($this->headerPage);
                $this->load->view('forget_password', $data);
                $this->load->view($this->footerPage);
            }
        }
    }
    public function emailssend($msg) {
        $this->load->library('email');
        $this->email->from("info@kammavaari.com", "kammavaari Team");
        $this->email->to('info@kammavaari.com');
        $this->email->subject("Password was Reset Successfully...");
        $this->email->message($msg);
        return $result = $this->email->send();
    }
}