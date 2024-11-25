<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Marketing extends MX_Controller
{

	public $headerPage 	= 'admin_header_pro';
	public $viewPage 	= 'profile_assign';
	public $footerPage 	= 'admin_footer_pro';
	public $userdashboard = 'user_dashboard';

	public function __construct()
	{

		parent::__construct();
		$this->load->model('Employee_model', 'emp_model');
        $this->load->model('Admin_dashboard_model', 'dashboard_model');
        $this->load->model('Marketing_model', 'Marketing_model');
		$this->load->library('session');

		if ($this->session->userdata('user_id') == "") {
			redirect("admin/login", 'refresh');
		}
	}

	public function get_user_infoADM()
	{
		if (isset($_POST["user_id"])) {
			$user_id = $_POST["user_id"];
			$user_data = $this->Marketing_model->get_user_infoADM($user_id);
			$result = array(
				"success" => "1",
				"data" => $user_data
			);
			echo json_encode($result);
		} else {
			$result = array(
				"success" => "0",
				"data" => "Please provide the user_ms_id"
			);
			echo json_encode($result);
		}
	}

	public function get_emp_associated_profilesADM()
	{
		if (isset($_POST["emp_id"])) {
			$emp_id = $_POST["emp_id"];
			$user_data = $this->Marketing_model->get_allocated_profilesADM($emp_id);
			$result = array(
				"success" => "1",
				"data" => $user_data
			);
			echo json_encode($result);
		} else {
			$result = array(
				"success" => "0",
				"data" => "Please provide the employee id"
			);
			echo json_encode($result);
		}
	}

	public function get_call_logADM()
	{
		if (isset($_POST['cust_id'])) {
			$cust_id = $_POST["cust_id"];
			$user_data = $this->Marketing_model->get_call_logADM($cust_id);
			$result = array(
				"success" => "1",
				"data" => $user_data
			);
			echo json_encode($result);
		} else {
			$result = array(
				"success" => "0",
				"data" => "Please provide the cust_id"
			);
			echo json_encode($result);
		}
	}

	public function save_reminderADM()
	{
		if (isset($_POST['cust_id']) && isset($_POST['rem_date'])) {
			$cust_id = $_POST["cust_id"];
			$rem_date = $_POST["rem_date"];
			// echo $cust_id, $rem_date;exit();
			$this->Marketing_model->save_reminderADM($cust_id, $rem_date);
			$result = array(
				"success" => "1"
			);
			echo json_encode($result);
		} else {
			$result = array(
				"success" => "0",
				"data" => "Please provide the cust_id"
			);
			echo json_encode($result);
		}
	}
}
