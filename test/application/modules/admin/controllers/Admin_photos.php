<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_photos extends MX_Controller
{

	public $headerPage 	= 'admin_header';
	// public $indexPage	= 'admin/Admin_photos/index';
	public $indexPage	= 'admin/photoshp_photos';
	
	public $listPage 	= 'admin_photos_pending';
	public $UploadPage 	= 'admin_photos_upload_page';
	public $footerPage 	= 'admin_footer';


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->model('Admin_photos_model', 'my_model');

		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors', 'on');
		if (($this->session->userdata('user_id') == "0") || $this->session->userdata('user_id') == NULL) {
			redirect('admin/login');
		}
	}

	public function index()
	{
		//echo 'afdas';exit;
		$data['rm_image'] =  $this->my_model->rm_image(); 

		$this->load->view($this->headerPage,$data);



		$data1['id_pendings'] = $this->my_model->getallpendings();
//echo '<pre>';print_r($data1['id_pendings']);exit;

		if ($this->session->flashdata('error')) {

			$data2['err'] = $this->session->flashdata('error');
			$data = array_merge($data1, $data2);
			$this->load->view($this->listPage, $data);
		} else if ($this->session->flashdata('success')) {

			$data2['suc'] = $this->session->flashdata('success');
			$data = array_merge($data1, $data2);
			$this->load->view($this->listPage, $data);
		} else {
       
			$this->load->view($this->listPage, $data1);
		}

		$this->load->view($this->footerPage);
	}



	
	public function photo_download()
	{

		$this->load->helper('download');
		$download_path = './././images/profilepics/' . $this->uri->segment(4) . '/' . $this->uri->segment(5);
		echo $download_path;
		force_download($download_path, null);
	}

	public function photo_upload_page()
	{
		$this->load->view($this->headerPage);
		$data = array();
		$data['ms_id'] = $this->uri->segment(4);
		$photoId = $this->uri->segment(5);
		$photoData = $this->my_model->getPhotoDetailsByPhotoId($photoId, $data['ms_id']);
		$data['photoname'] = $photoData->photoname;
		$data['ismain'] = $photoData->ismain;
		$data['photo_id'] = $photoId;
		$this->load->view($this->UploadPage, $data);
		$this->load->view($this->footerPage);
	}



	public function create()
	{
		if ($this->input->post('submit') && !empty($_FILES['multiplefiles']['name'][0])) {
			//echo $this->input->post('set_as_profile_pic');exit;
			$num = count($_FILES['multiplefiles']['name']);			
			$files = $_FILES;
			//echo $num;exit;
			//echo "<pre>"; print_r($files);
			for ($i = 0; $i < $num; $i++) {
				$_FILES['multiplefiles']['name'] = $files['multiplefiles']['name'][$i];
				$_FILES['multiplefiles']['type'] = $files['multiplefiles']['type'][$i];
				$_FILES['multiplefiles']['tmp_name'] = $files['multiplefiles']['tmp_name'][$i];
				$_FILES['multiplefiles']['error'] = $files['multiplefiles']['error'][$i];
				$_FILES['multiplefiles']['size'] = $files['multiplefiles']['size'][$i];

				$config['upload_path']	= './././images/profilepics/' . $this->uri->segment(4);
				$config['allowed_types'] = 'gif|png|jpg|jpeg';
				$config['max_size']		= '0';
				$config['max_width']	= '0';
				$config['max_height'] 	= '0';
				$config['overwrite']	= TRUE;
				$config['remove_spaces'] = TRUE;
				$this->upload->initialize($config);
				if (is_numeric($this->uri->segment(4)) && $this->uri->segment(4) > 0) {
					$userId = $this->uri->segment(4);
					$photoId = $this->uri->segment(5);
					$this->upload->do_upload('multiplefiles');
					$info = $this->upload->data();
					if(!empty($info['raw_name'])) {
						$image_path = base_url("images/profilepics/" . $this->uri->segment(4) . '/' . $info['file_name']);
						if (strpos($info['raw_name'], "fp") == true) {
							$data['fullphotopath'] = $image_path;
							$data['full_photo_Created'] = 1;						
						} else {
							$data['applicationphotopath'] = $image_path;
							$data['app_photo_created'] = 1;
						}
						//make it as main profile pic image if selected yes
						$data['ismain'] = $this->input->post('set_as_profile_pic');	
						$data['isactive']		= 1;
						$data['photoname']		= $info['file_name'];
						$data['modified_by']	= $this->session->userdata('uname');
						$data['modified_date'] 	= date('Y-m-d');

						unset($data['submit']);
						//print_r($data);exit;
						$this->my_model->update_img_path($data, $photoId, $userId);
					} else {
						$error = array('error' => $this->upload->display_errors());
					}
				} else {

					$error = array('error' => $this->upload->display_errors());
				}
			}
			if (!$error) {

				$this->session->set_flashdata('success', 'Image(s) uploaded successfully');
				redirect($this->indexPage);
			} else {
				$this->session->set_flashdata('error', 'Uploading images failed, Please check image name!');
				redirect($this->indexPage);
			}
		} else {

			$this->photo_upload_page();
		}
	}



	// public function is_multi($array){
	//       return (count($array) != count($array, 1));
	//   }


}
