<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');



class Admin_login_model extends CI_Model {



	public $admindata = "tbl_admin_data";

	

	public function __construct() {

        parent::__construct();
		$this->load->model('../../login/models/Login_model', 'login_model');
$this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
 		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

		error_reporting(0);

		ini_set('display_errors','off'); 

    }

  

	  public function getadmindata() 

	  {

        $result = array();

        $this->db->select("*");

        $this->db->where('username', $this->input->post('username'));

        $this->db->where('password', $this->input->post('password'));

		$query = $this->db->get($this->admindata);

        if ($query->num_rows() > 0):

            $result = $query->row_array();

		else:

			$result = FALSE;

        endif;

		return $result;

     }


     public function getAdminMobileAccount($mobile, $otp = null) {
		$this->db->select('*');
		$this->db->from('tbl_admin_data');
		$this->db->where('phone_no', $mobile);
		if($otp) {
			$this->db->where('login_otp', $otp);
		}		
		$this->db->where('status',1);
		$response = $this->db->get()->row_array();

		//echo '<pre>';print_r($this->db->last_query());exit;
		return $response;
	}

	public function loginOtp($mobile, $customerName) {		
		$otp = $this->login_model->generate_otp();
		$message = "Dear ".$customerName.", Your OTP No is ".$otp." Thank you. From kammavaari.com";
		$this->login_model->send_sms($mobile, $message);	
		return $otp;
	}

	public function updateOtpToAccount($userId, $otp) {
		$data = array(
		    'login_otp' => $otp
		);
	
		$this->db->where('id',$userId);
		$result = $this->db->update("tbl_admin_data", $data);
	}

	public function insertAdminLoginLogs($data)
	{
		$ip = $_SERVER['REMOTE_ADDR'];
                $details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json"));
                //echo '<pre>';print_r("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json");exit;
                $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                $QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
                $location = $details->loc;
                $city = $details->city;
                $region = $details->region;
                $country = $details->country;
				$setdata = array('admin_id' => $data["id"], 'admin_name' => $data["username"],'ip_address' => $ip, 'location' => ($location) ? $location : 'NA', 'city' => ($city) ? $city : 'NA', 'region' => ($region) ? $region : 'NA',  'country' => ($country) ? $country : 'NA', 'login_date_time' => date('Y-m-d H:i:s'),);
                $this->db->insert("admin_login_notifications",$setdata);
            return $this->db->insert_id();
	}
	
	     public function getAdminMobileAccount1($mobile, $otp = null) {
		$this->db->select('*');
		$this->db->from('tbl_admin_data');
		$this->db->where('phone_no', $mobile);
		if($otp) {
			$this->db->where('password', $otp);
		}		
		$this->db->where('status',1);
		$response = $this->db->get()->row_array();

		//echo '<pre>';print_r($this->db->last_query());exit;
		return $response;
	}
	

}