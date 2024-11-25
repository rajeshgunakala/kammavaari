<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_payment extends MX_Controller
{

	public $headerPage 	= 'admin_header';
	// public $indexPage	= 'admin/Admin_payment/index';
	public $indexPage	= 'admin/enterpayment';
	public $listPage_a 	= 'admin_payment_a';
	public $listPage_ini = 'admin_payment_initial';
	public $listPage_bal = 'admin_payment_balance';
	public $excel_report = 'excel_report';
	public $listPage_ren = 'admin_payment_renewal';
	public $viewPage_a	= 'admin_payment_a_status';
	public $footerPage 	= 'admin_footer';

	public $plans_view = 'plans_view_page';





	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_payment_model', 'my_model');
		$this->load->model('Admin_payment_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors', 'on');
		if (!$this->session->userdata('staffadmin_id')) {
			redirect('admin/login');
		}
	}

	public function index()
	{
//echo 'hi';exit;
		$this->load->view($this->headerPage);

		if ($this->session->flashdata('no_rec')) {

			$error['msg'] = $this->session->flashdata('no_rec');
			$this->load->view($this->listPage_a, $error);
		} else if ($this->session->flashdata('insert_rec_info')) {
			$info['ins'] = $this->session->flashdata('insert_rec_info');
			$this->load->view($this->listPage_a, $info);
		} else {

			$this->load->view($this->listPage_a);
		}

		$this->load->view($this->footerPage);
	}

	public function plans(){
		  $data['plans'] = $this->Admin_payment_model->plans();
		//   echo "<pre>"; print_r($data['plans']);die;
		  $this->load->view($this->headerPage);
		  $this->load->view($this->plans_view,$data);
		  $this->load->view($this->footerPage);
	}

	public function edit_plan()
	{
		//    echo "<pre>"; print_r($_POST);die;
		$id = $this->input->post('planId');
		// echo $id;die;
		$data = array(
			   "title" => $this->input->post('planTitle'),
			   "amount" => $this->input->post('planAmount'),
			   "months" => $this->input->post('planMonths'),
			   "profiles" => $this->input->post('profiles'),
			   "servies" => $this->input->post('service'),
			   "intrests" => $this->input->post('interests'),
			   "contact" => $this->input->post('contact'),
			   "des" => $this->input->post('dis'),
			             
		);
       
		$this->db->where(array('id'=>$id));
		$plan_update=$this->db->update('tbl_plans',$data);
		if($plan_update){
			    $this->session->set_userdata('update_message', 'Plan updated successfully!');
                redirect('admin/Admin_payment/plans');
		}else{
			    $this->session->set_userdata('update_message', 'Failed to update Please try again later!');
			    redirect('admin/Admin_payment/plans');
		}
	}
	public function add_plan()
	{
		// echo "<pre>"; print_r($_POST);die;
		$data = array(
			   "title" => $this->input->post("planTitle"),
			   "amount" => $this->input->post("planAmount"),
			   "months" => $this->input->post("planMonths"),
			   "profiles" => $this->input->post("profiles"),
			   "servies" => $this->input->post("service"),
			   "intrests" => $this->input->post("interests"),
			   "contact" => $this->input->post("contact"),
			   "des" => $this->input->post("dis")
		);

		$query = $this->db->insert('tbl_plans',$data);
		if($query){
			$this->session->set_userdata('update_message', 'Plan Added successfully!');
			redirect('admin/Admin_payment/plans');
		}else{
			$this->session->set_userdata('update_message', 'Failed to add Plan!');
			redirect('admin/Admin_payment/plans');
		}
	
	}

	public function delete_plan($id)
	{
		 $query = $this->db->query("SELECT id from tbl_plans WHERE id ='".$id."' ");
		 $rows = $query->num_rows();
		 if($rows == 1){
            // $query = $this->db->query("DELETE FROM tbl_plans WHERE id = '".$id."'");
			$this->db->delete('tbl_plans', array('id' => $id));
			 if($this->db->affected_rows() > 0 )
			 {
				$this->session->set_userdata('update_message', "Plan deleted succesfully");
				redirect('admin/Admin_payment/plans');
			 }else{
				$this->session->set_userdata('update_message', "Failed to delete plan");
				redirect('admin/Admin_payment/plans');
			 }
		 }else{
			$this->session->set_userdata('update_message', "No Plan found OR Duplicate Plan");
			redirect('admin/Admin_payment/plans');
		 }
		
	}


	public function initial_details_form()
	{
		$data['id_rec'] = $this->session->userdata('profileid');
		$data['rm_names'] = $this->my_model->rm_names();
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage_ini, $data);
		$this->load->view($this->footerPage);
	}
public function update_details_form()
	{
		$data['id_rec'] = $this->session->userdata('profileid');
		$data['data'] = $this->getPaymentDetails($data['id_rec']);
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage_ini, $data);
		$this->load->view($this->footerPage);
	}
	public function insert_initial_payment_details()
	{

		if (isset($_POST['submit'])) {
			$user_id = getuserdetbyprofid(trim($this->input->post('profileid')))->id;//$this->session->userdata('user_id');
			if($user_id > 0) {
			$agreed_amount = $this->input->post('agreed_amount');
			$rm_name = $this->input->post('staffSelect');
			$sa_amount = $this->input->post('sa_amount');
		//	$bal_amount = $agreed_amount - $paid_amount;
			$payment_type = 'Registration';
			$allowed_contacts = ($this->input->post('allowed_contacts')) ? $this->input->post('allowed_contacts') : '';
			$used_contacts	= 0;
			if($this->input->post('expiry_date') == 2){
			$expiryDateTime = strtotime("+" . $this->input->post('expiry_date') . " days");
			$expiry_date = date('Y-m-d H:i:s', $expiryDateTime);
			}else{
			$expiryDateTime = strtotime("+" . $this->input->post('expiry_date') . " months");
            $expiry_date = date('Y-m-d H:i:s', $expiryDateTime);
			// $expiry_date = date('Y-m-d', strtotime("+" . $this->input->post('expiry_date') . " months"));
			}
			
			$now	= $now = date('Y-m-d H:i:s');
			$entered_by = ($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id');
			$comments	=  ($this->input->post('comments')) ? $this->input->post('comments') : '';
				
				if($_FILES['image']['type'])
				{
					$image_type = $_FILES['image']['type'];
                    $image_type = explode("/", $image_type);
                    $image_type = "." . $image_type[1];
                    $_FILES['image']['name'] = "image_" . $user_id.'_'.time() . $image_type;
                    $target_path = "images/paymentslips/";

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
				}
				else
				{
					$ImgData='';
				}


				$countQuery = "SELECT COUNT(payment_type) AS payment_count FROM tbl_payments_info WHERE user_id = '$user_id'";
				$query = $this->db->query($countQuery);
				$result = $query->row()->payment_count;
			// print_r($rm_name);die;
			$insert_rec1 = array(
				'user_id' => $user_id,
				'agreed_amount' => $agreed_amount,
				'saamount' => $sa_amount,
				'payment_type' => $result == 0 ? $payment_type : 'renewal',
			    // 'payment_type' => $payment_type,
				'paid_date'  => $now,
				'payment_mode' => $this->input->post('payment_mode'),
				'entered_by' => $entered_by,
				'comments'	 => $comments,
				'tbl_image'=>$ImgData,
				'tbl_image_name'=>$ImgData,
				'paid_times' => $result,
				'given_by' => $rm_name,
				
			);
			$this->my_model->insert_payment_rec1($insert_rec1);

$paymentupdate=array('payment_status'=>'1','reg_fee'=>$agreed_amount,'sa_fee'=>$paid_amount);
$this->db->where(array('ms_id'=>$user_id));
$this->db->update('ms_profilesetting',$paymentupdate);

			$payment_id = $this->my_model->get_payment_id($user_id)->payment_id;

			$insert_rec2 = array(
				'payment_id'	  => $payment_id,
				'user_id' 		  => $user_id,
				'allowed_contacts' => $allowed_contacts,
				'used_contacts'	  => $used_contacts,
				'expiry_date'     => $expiry_date,
				'paid_times' => $result,
				'given_by' => $rm_name,
			);


			$this->my_model->insert_payment_rec2($insert_rec2);
			if ($success1 = 1 and $success2 = 1) {
				$this->session->set_flashdata('insert_rec_info', 'Registration payment details recorded successfully!');
			}
			} else {
				$this->session->set_flashdata('insert_rec_info', 'Profile ID does not exist, Please check!');
			}
			redirect($this->indexPage);
		}
	}

	// public function export_report(){
	// 	$result = $this->Admin_payment_model->export_report();
	// 	$data['result'] = $result;
	// 	$this->load->view($this->excel_report, $data);
	// }
	
	

	public function balance_details_form()
	{



		$user_id = $this->session->userdata('user_id');
		$payments['latest_rec'] = $this->my_model->get_latest_payment_rec($user_id);
		$contacts['contacts_rec'] = $this->my_model->get_contacts_rec($user_id);
		$data = array_merge($payments, $contacts);
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage_bal, $data);
		$this->load->view($this->footerPage);
	}


	public function insert_balance_payment_details()
	{

		if (isset($_POST['submit'])) {

			$user_id = $this->session->userdata('user_id');
			$paid_amount = $this->input->post('paid_amount');
			$bal_amount = $this->uri->segment(4) - $paid_amount;
			$payment_type = 'Balance';
			$now	= date('Y-m-d');
			$entered_by = $this->session->userdata('uname');
			$comments	=  $this->input->post('comments');

            if($_FILES['image']['type'])
				{
					$image_type = $_FILES['image']['type'];
                    $image_type = explode("/", $image_type);
                    $image_type = "." . $image_type[1];
                    $_FILES['image']['name'] = "image_" . $user_id.'_'.time() . $image_type;
                    $target_path = "images/paymentslips/";

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
				}
				else
				{
					$ImgData='';
				}



			$insert_rec1 = array(
				'user_id'   => $user_id,
				'paid_amount' => $paid_amount,
				'bal_amount'  => $bal_amount,
				'payment_type' => $payment_type,
				'paid_date'   => $now,
				'entered_by'  => $entered_by,
				'comments'	  => $comments,
				'tbl_image' => $ImgData,
				'tbl_image_name'=>$ImgData 
			);

			$this->my_model->insert_payment_rec1($insert_rec1);
			if ($success1 = 1) {
				$this->session->set_flashdata('insert_rec_info', 'Balance payment details recorded successfully!');
			}
			redirect($this->indexPage);
		}
	}



	public function renewal_details_form()
	{
		$data['id_rec'] = $this->session->userdata('profileid');
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage_ren, $data);
		$this->load->view($this->footerPage);
	}

	public function insert_renewal_payment_details()
	{

		if (isset($_POST['submit'])) {

			$user_id = $this->session->userdata('user_id');
			$agreed_amount = $this->input->post('agreed_amount');
			$paid_amount = $this->input->post('paid_amount');
			$bal_amount = $agreed_amount - $paid_amount;
			$payment_type = 'Renewal';
			$allowed_contacts = $this->input->post('allowed_contacts');
			$used_contacts	= 0;
			$expiry_date = date('Y-m-d', strtotime("+" . $this->input->post('expiry_date') . " months"));
			$now	= date('Y-m-d');
			$entered_by = $this->session->userdata('uname');
			$comments	=  $this->input->post('comments');

			$insert_rec1 = array(
				'user_id' 		=> $user_id,
				'agreed_amount' => $agreed_amount,
				'paid_amount'	=> $paid_amount,
				'bal_amount'	=> $bal_amount,
				'payment_type'	=> $payment_type,
				'paid_date'  	=> $now,
				'entered_by' 	=> $entered_by,
				'comments'	 	=> $comments
			);

			$this->my_model->insert_payment_rec1($insert_rec1);


			$payment_id = $this->my_model->get_payment_id($user_id)->payment_id;

			$insert_rec2 = array(
				'payment_id'	  => $payment_id,
				'user_id' => $user_id,
				'allowed_contacts' => $allowed_contacts,
				'used_contacts' => $used_contacts,
				'expiry_date' => $expiry_date
			);

			$this->my_model->insert_payment_rec2($insert_rec2);

			if ($success1 = 1 and $success2 = 1) {

				$this->session->set_flashdata('insert_rec_info', 'Renewal payment details recorded successfully!');
			}
			redirect($this->indexPage);
		}
	}


	public function get_payment_status()
	{


		if ($this->input->post('submit') != '') {

			$profileid = trim($this->input->post('profileid'));
			if ($profileid != "") {
				$this->session->set_userdata('profileid', $profileid);
				$user_id = $this->my_model->get_user_id($profileid)->id;
				//$this->session->set_userdata('user_id', $user_id);
			}
			$data['user_type'] = $this->session->userdata('type');
			$data['payment_rec'] = $this->my_model->get_payment_rec($user_id);
		
			$count_rec = $this->my_model->get_count_rec($user_id);
			
			if ($count_rec) {

				$this->load->view($this->headerPage);
				$this->load->view($this->viewPage_a, $data);
				$this->load->view($this->footerPage);
			} else {
				$this->load->view($this->viewPage_a, $data);
				$this->session->set_flashdata('no_rec', 'No payment record available!');
				redirect($this->indexPage);
			}
		}
	}
	
	public function getPaymentUpdateStatus()
	{
	         $data['pid'] = $this->session->userdata('profileid');
	        $user_id = $this->my_model->get_user_id($data['pid'])->id;
	        $payment_id = $data['payment_rec'][0]['payment_id'];
	       $data['payment_rec'] = $this->my_model->get_latest_payment_rec1($user_id,$payment_id);
	       // $data['payment_rec'] = $this->my_model->get_latest_payment_rec($user_id);
	       // print_r($data);exit;
	       $this->session->set_userdata('payment_id', $data['payment_rec'][0]['payment_id']);
                $this->load->view($this->headerPage);
				$this->load->view('admin_payment_update.php', $data);
				$this->load->view($this->footerPage);
	}
	
		public function getPaymentUpdateStatus1($user_id1,$payment_id)
    	{
    	         $data['pid'] = $this->session->userdata('profileid');
    	        $user_id = $this->my_model->get_user_id($data['pid'])->id;
    	       $data['payment_rec'] = $this->my_model->get_latest_payment_rec1($user_id1,$payment_id);
    	       // $data['payment_rec'] = $this->my_model->get_latest_payment_rec($user_id);
    	    //    print_r($data['payment_rec'][0]['payment_id']);exit;
    	       $this->session->set_userdata('payment_id', $data['payment_rec'][0]['payment_id']);
                    $this->load->view($this->headerPage);
    				$this->load->view('admin_payment_update.php', $data);
    				$this->load->view($this->footerPage);
    	}
	
	public function insert_update_payment_details()
	{

        if (isset($_POST['submit'])) {
            $profileId = $this->session->userdata('profileid');
	        $id = $this->my_model->get_user_id($data['pid'])->id;
	        $payment_id = $this->session->userdata('payment_id');
			$payment_session_id = $this->input->post('payment_iddd');
			$user_id = $this->session->userdata('user_id');
			$agreed_amount = $this->input->post('agreed_amount');
			$saamount   =   $this->input->post('saamount');
			$paid_amount = $this->input->post('paid_amount');
			$bal_amount = $agreed_amount - $paid_amount;
			$payment_type = 'Update';
		    $now	= date('Y-m-d');
			$entered_by = $this->session->userdata('uname');
			$comments	=  $this->input->post('comments');
			    if($_FILES['image']['type'])
				{
					$image_type = $_FILES['image']['type'];
                    $image_type = explode("/", $image_type);
                    $image_type = "." . $image_type[1];
                    $_FILES['image']['name'] = "image_" . $user_id.'_'.time() . $image_type;
                    $target_path = "images/paymentslips/";

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
				}
				else
				{
					$ImgData='';
				}
//echo '<pre>';print_r($ImgData);exit;
			    $insert_rec1 = array(
				'user_id' => $id,
				'payment_session_id'   => $payment_session_id,
				'agreed_amount' => $agreed_amount,
				'paid_amount' => $paid_amount,
				'bal_amount' => $bal_amount,
				'payment_type' => $payment_type,
				'paid_date'  => $now,
				'entered_by' => $user_id,
				'comments'	 => $comments,
				'tbl_image'=>$_FILES['image']['name'],
				'tbl_image_name'=>$_FILES['image']['name'],
				'payment_id'=>$payment_id,
				'saamount' =>$saamount
				
			);
			// print_r($insert_rec1);exit;
			$this->my_model->update_payment_rec($insert_rec1);

        $paymentupdate=array('payment_status'=>'1','reg_fee'=>$agreed_amount,'sa_fee'=>$paid_amount);
        $this->db->where(array('ms_id'=>$user_id));
        $this->db->update('ms_profilesetting',$paymentupdate);

			$payment_id = $this->my_model->get_payment_id($user_id)->payment_id;
    	if ($success1 = 1 and $success2 = 1) {
				$this->session->set_flashdata('insert_rec_info', 'Registration payment details recorded successfully!');
			}
			} else {
				$this->session->set_flashdata('insert_rec_info', 'Profile ID does not exist, Please check!');
			}
			redirect($this->indexPage);
		}
}
