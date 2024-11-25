<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Successstories extends CI_Controller
{

	public $headerPage = 'admin_header';
	public $addPage    = 'successstories-add';
	public $editPage   = 'successstories-edit';
	public $listPage   = 'successstories';
	public $index_page = '/admin';

	public $addsPage   = 'adds_page';
	public $footer = 'admin_footer';

	public $listPage_redirect = '/admin/Successstories ';
	public $addPage_redirect  = '/admin/Successstories/add/';
	public $editPage_redirect = '/admin/Successstories/edit/';

	public $adavaPage_redirect = '/admin/Successstories/advertisement/';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Successstories_model', 'my_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors', 'off');
		if ($this->session->userdata('user_id') == "") {
			redirect($this->login_redirect, 'refresh');
		}
	}

	public function index()
	{
		// $data['rm_image'] =  $this->emp_model->rm_image();

		$data['record'] = $this->my_model->get_all_records();
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage, $data);
	}

	public function add()
	{

		$data['msg'] = '';
		if ($this->input->post('submit') != '') {
			if ($_FILES['image']['name'] != '') {
				$config['upload_path'] = './images/successstories/';
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

			$result = $this->my_model->add_record($ImgData);
			if ($result) {
				$this->session->set_flashdata('msg_succ', 'added Successfully...');
				redirect($this->listPage_redirect);
			} else {
				$data['msg'] = "please try again...";
			}
		}
		$this->load->view($this->headerPage);
		$this->load->view($this->addPage, $data);
	}


	public function advertisement(){
		$data['rm_image'] =  $this->my_model->rm_image();
        $data["videos"]  = $this->my_model->get_advertisement();
	    $this->load->view($this->headerPage,$data);
		$this->load->view($this->addsPage,$data);
		$this->load->view($this->footer);

	}
	public function save_add(){
		$data["videos"]  = $this->my_model->get_advertisement();
		if(count($data["videos"]) >= 4){
			$this->session->set_flashdata('msg_succ', 'Limit Crossed ....');
			redirect($this->adavaPage_redirect);
		}
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if ($_FILES['fileToUpload']['name'] != '') {
				$config['upload_path'] = './images/successstories/';
				// $config['upload_path']   = './videos/successstories/';
                $config['allowed_types'] = 'mp4|avi|mov|flv|wmv';
                $config['max_size']      = '0';
                $config['max_width']     = '0';
                $config['max_height']    = '0';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('fileToUpload')) {
					$msg = $this->upload->display_errors();
					$this->session->set_flashdata('msg_succ',$msg);
				}else {
					$data = $this->upload->data();
					//echo '<pre>';print_r($data);
					$ImgData = $data['file_name'];
				}

				$result = $this->my_model->add_video($ImgData);
				if($result){
					$this->session->set_flashdata('msg_succ', 'added Successfully...');
					redirect($this->adavaPage_redirect);
				}else{
					$this->session->set_flashdata('msg_succ', 'Try again latter...');
					redirect($this->adavaPage_redirect);
				}
			}else{
				$this->session->set_flashdata('msg_succ', 'No File is Selected...');
				redirect($this->adavaPage_redirect);
			}	
		}else{
			$this->session->set_flashdata('msg_succ', 'Internal Server error...');
			redirect($this->adavaPage_redirect);
		}
		// redirect($this->addsPage);
		$this->load->view($this->headerPage);
		$this->load->view($this->addsPage,$data);
		$this->load->view($this->footer);
		
	}


	public function delete_add($id) {
		$res = $this->my_model->delete_add($id);
		if ($res) {
			// echo "came";die;
			$this->session->set_flashdata('msg_succ', 'Deleted Successfully...');
			redirect($this->adavaPage_redirect);
		} else {
			$this->session->set_flashdata('msg_succ', 'Try again later...');
			redirect($this->adavaPage_redirect);
		}
	}
	



	public function edit($id)
	{

		$data['record'] = $this->my_model->get_single_record($id);
		$data['msg'] = '';
		$old_image = $data['record']['image'];
		if ($this->input->post('submit') != '') {
			//echo '<pre>'; print_r($_FILES);exit;
			if ($_FILES['image']['name'] != '') {
				$config['upload_path'] = './images/successstories/';
				$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				$config['max_size']  = '0';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$data['msg'] = $this->upload->display_errors();
				} else {
					$data = $this->upload->data();
					//echo '<pre>';print_r($data);exit;
					$ImgData = $data['file_name'];
				}
			} else {
				$ImgData = $old_image;
			}
			$result = $this->my_model->update_record($id, $ImgData);
			//echo '<pre>';print_r($result);exit;
			if ($result) {

				$this->session->set_flashdata('msg_succ', 'updated Successfully...');
				redirect($this->listPage_redirect);
			} else {

				$data['msg'] = "please try again...";
			}
		}
		$this->load->view($this->headerPage);
		$this->load->view($this->editPage, $data);
	}


	public function delete($id)
	{

		$data['msg'] = '';
		if ($id) {
			$result = $this->my_model->delete_record($id);
			if ($result) {
				$this->session->set_flashdata('msg_succ', 'Deleted Successfully...');
				redirect($this->listPage_redirect);
			} else {
				$data['msg'] = "Not Deleted...";
			}
		}
	}

	public function delete_selected()
	{

		$data['msg'] = '';
		if ($this->input->post('selected_ids') != '') {
			$delete_ids = $this->input->post('selected_ids');
			for ($i = 0; $i < count($delete_ids); $i++) {
				$result = $this->my_model->delete_record($delete_ids[$i]);
			}
			if ($result) {
				$this->session->set_flashdata('msg_succ', 'Deleted Successfully...');
				redirect($this->listPage_redirect);
			} else {
				$this->session->set_flashdata('msg_succ', 'Not Deleted...');
				redirect($this->listPage_redirect);
			}
		} else {
			$this->session->set_flashdata('msg_succ', 'Select any Check Box...');
			redirect($this->listPage_redirect);
		}
	}


	public function status($id, $status)
	{

		$data['msg'] = '';
		$statu = ($status == 1 ? 'Deactive' : 'Active');
		if ($id) {
			$result = $this->my_model->status_record($id, $status);
			if ($result) {
				$this->session->set_flashdata('msg_succ', $statu . ' Successfully...');
				redirect($this->listPage_redirect);
			} else {
				$data['msg'] = " Status Not Updated...";
			}
		}
	}
}
