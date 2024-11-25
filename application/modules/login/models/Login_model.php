<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class  Login_model extends CI_Model {
	
	
	public function __construct() 
	{
        parent::__construct();
		
    } 
    public function login($email, $password, $type = null)
	{

		// print_r($email);die;
	
		$this->db->select('first_name,last_name,status,email,password,id,profile_id');
		$this->db->from('tbl_primary_info');

		if($type === 'mobile'){
			$this->db->where('hash_mobile', $email);
		}else{
			$this->db->where('hash_email', $email);
		}

		//$this->db->or_where('profile_id', $email);
		$this->db->where('password', $password);
		$this->db->where('status',1);
		$query = $this->db->get()->row_array();

		// echo $this->db->last_query();exit;
		if(!$query)
		{
		$this->db->select('first_name,last_name,status,email,password,id,profile_id');
		$this->db->from('tbl_primary_info');
		$this->db->where('profile_id', $email);
		//$this->db->or_where('profile_id', $email);
		$this->db->where('password', $password);
		$this->db->where('status',1);
		$query = $this->db->get()->row_array();
		}
		//echo '<pre>';print_r($this->db->last_query());exit;
		return $query;
	}

	 public function email_check()
	  {
		$EmailID =  $this->encrypt_model->hashInput($this->input->post('email')); 
		$this->db->select('email');
		$this->db->from("tbl_primary_info");
		$this->db->where('hash_email',$EmailID);
		$result=$this->db->get();
		return $result->num_rows();	
	  }
	 public function change_password($password){
		 
		$datac = array(
		    'password'=>md5($password)
		);
	    
		$EmailID =  $this->encrypt_model->hashInput($this->input->post('email')); 
		$this->db->where('hash_email',$EmailID);
		$result = $this->db->update("tbl_primary_info", $datac);
		
		return $result;
     }
     
      public function get_payment_details($user_id){
        
        $this->db->select('*');
	    $this->db->from('tbl_payments_log');
	    $this->db->where('user_id',$user_id);
	    $this->db->order_by("paymentlog_id", "desc");
	    $this->db->limit('1');
	    $query = $this->db->get()->result_array();
	    return $query;
        
    }

	public function trackUserLogins($rm_id,$data)
	{
		//echo date('Y-m-d H:i:s');exit;
		$setdata = array('ip_address' =>$data["ip_address"] , 'location' => ($data["location"]) ? $data["location"] : 'NA', 'city' => ($data["city"]) ? $data["city"] : 'NA', 'region' => ($data["region"]) ? $data["region"] : 'NA', 'user_id' =>$data["user_id"] , 'country' => ($data["country"]) ? $data["country"] : 'NA', 'login_date_time' => date('Y-m-d H:i:s'),'rm_id'=>$rm_id,'status'=>'0');

        $result = $this->db->insert('customer_login_notification', $setdata);	
		//$query = $this->db->get()->result_array();	
    //  echo '<pre>';print_r($this->db->last_query());exit;
	}
	
	public function getLastLoginId($user_id)
	
	{
	$this->db->select('notification_id');
		$this->db->from('customer_login_notification');
		$this->db->where('user_id',$user_id);
		$this->db->order_by("notification_id", "desc");
		$this->db->limit('1');
		$result=$this->db->get()->result_array();
		return $result;
	}
	public function updateLogoutTime($notification_id)
	{
//echo $notification_id;exit;
		$arr=array(
			'logout_date_time'=>date('Y-m-d H:i:s')
		);
		$this->db->where('notification_id',$notification_id["notification_id"]);
		$result = $this->db->update("customer_login_notification", $arr);
	}

	public function getMobileAccount($mobile, $otp = null) {
		$this->db->select('*');
		$this->db->from('tbl_primary_info');
		$this->db->where('hash_mobile', $mobile);
		if($otp) {
			$this->db->where('login_otp', $otp);
		}		
		$this->db->where('status',1);
		$response = $this->db->get()->row_array();

		//echo '<pre>';print_r($this->db->last_query());exit;
		return $response;
	}
	
	public function getEmailAccount($mobile, $otp = null) {
		$this->db->select('*');
		$this->db->from('tbl_primary_info');
		$this->db->where('hash_email', $mobile);
		if($otp) {
			$this->db->where('login_otp', $otp);
		}		
		$this->db->where('status',1);
		$response = $this->db->get()->row_array();

		//echo '<pre>';print_r($this->db->last_query());exit;
		return $response;
	}
	
	
	public function updateOtpToAccount($userId, $otp) {
		$data = array(
		    'login_otp' => $otp
		);
	
		$this->db->where('id',$userId);
		$result = $this->db->update("tbl_primary_info", $data);
	}

	public function loginOtp($mobile, $customerName) {		
		$otp = $this->generate_otp();
		$message = "Dear ".$customerName.", Your OTP No is ".$otp." Thank you. From kammavaari.com";
		$this->send_sms($mobile, $message);	
		return $otp;
	}
	
	public function loginOtpEmail($mobile, $customerName) {		
		$otp = $this->generate_otp();
		$message = "Dear ".$customerName.", Your OTP No is ".$otp." Thank you. From kammavaari.com";
		$this->email_model->emailgmailconf($mobile, "OTP Details", $message);
		//$this->send_sms($mobile, $message);	
		return $otp;
	}	
	

	public function send_sms($phone, $msg) {
		$otp = $this->generate_otp();
		$username = "9550832999";
		$password = "832999";
		$from = "KAMMAC";
		$sendTo = $phone;
		$message = urlencode($msg);
		$url = "https://sms.zestwings.com/smpp.sms?username=".$username."&password=".$password."&to=".$sendTo."&from=".$from."&text=".$message."&templateid=1707164993026482545";
		
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "");
		//Ignore SSL certificate verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
		curl_close($ch);
       return $response;

	}

	public function generate_otp() {
		$OTP 	=	rand(1,9);
		$OTP 	.=	rand(0,9);
		$OTP 	.=	rand(0,9);
		$OTP 	.=	rand(0,9);
		$OTP 	.=	rand(0,9);
		$OTP 	.=	rand(0,9);
		return $OTP;
	}
}