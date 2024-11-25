<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Logo extends CI_Controller
{

	public $headerPage = 'admin_header';
	public $listPage   = 'logo';
	public $addPage    = 'logo-add';
	public $editPage   = 'logo-edit';
	public $listPage_redirect = 'admin/Logo';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Logo_model', 'my_model');
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		error_reporting(0);
		ini_set('display_errors', 'off');
		if ($this->session->userdata('user_id') == "") {
			redirect($this->login_redirect, 'refresh');
		}
	}

	public function index()
	{
		$data['record'] = $this->my_model->get_all_records();
		$this->load->view($this->headerPage);
		$this->load->view($this->listPage, $data);
	}

	public function view($id)
	{
		$data['record'] = $this->my_model->get_single_record($id);
		$this->load->view($this->headerPage);
		$this->load->view($this->viewPage, $data);
	}

	public function add()
	{
		if ($this->input->post('submit') != '') {

			$config['upload_path'] = './images/logo/';
			$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
			$config['max_size']  = '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
			/* Load the upload library */
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image')) {
				$data['msg'] = $this->upload->display_errors();
			} else {

				$data = $this->upload->data();
				$uploadedImages['image'] = $data['file_name'];
				$ImgData = array(
					'image' => $uploadedImages['image']
				);
			}

			$result = $this->my_model->add_record($ImgData['image']);
			if ($result) {
				$this->session->set_flashdata('msg_succ', 'Uploaded Successfully.');
				redirect($this->listPage_redirect);
			} else {
				$this->session->set_flashdata('msg_fail', 'Upload Failed Try Again');
				redirect($this->listPage_redirect);
			}
		}
		$this->load->view($this->headerPage);
		$this->load->view($this->addPage, $data);
	}

	public function edit($id)
	{

		$data['record'] = $this->my_model->get_single_record($id);
		$old_image = $data['record']['logo'];

		$data['msg'] = '';
		if ($this->input->post('submit') != '') {
			/*echo '<pre>'; print_r($_FILES);exit;*/
			if ($_FILES['image']['name'] != '') {
				$config['upload_path'] = './images/logo/'; /* NB! create this dir! */
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
					$result = $this->my_model->update_record($id, $ImgData);
					if ($result) {
						$file = $config['upload_path'] . $old_image;
						if (is_file($file)) {
							unlink($file);
						} // delete file
						//echo $file.'file deleted';exit;
						$this->session->set_flashdata('msg_succ', 'Updated Successfully...');
						redirect($this->listPage_redirect);
					} else {
						$data['msg'] = "Not Updated...";
					}
				}
			} else {
				$ImgData = $old_image;
				$result = $this->my_model->update_record($id, $ImgData);
				if ($result) {
					$this->session->set_flashdata('msg_succ', 'Updated Successfully...');
					redirect($this->listPage_redirect);
				} else {
					$data['msg'] = "Not Updated...";
				}
			}
		}
		$this->load->view($this->headerPage);
		$this->load->view($this->editPage, $data);
	}

	public function delete_selected()
	{
		$data['msg'] = '';
		if ($this->input->post('selected_ids') != '') {
			$selected_ids = $this->input->post('selected_ids');
			for ($i = 0; $i < count($selected_ids); $i++) {
				$result = $this->my_model->delete_record($selected_ids[$i]);
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

	public function delete($id)
	{
		if ($id) {
			$result = $this->my_model->delete_record($id);
			if ($result) {
				$this->session->set_flashdata('msg_succ', 'Deleted Successfully...');
				redirect($this->listPage_redirect);
			} else {
				$this->session->set_flashdata('msg_succ', 'Not Deleted...');
				redirect($this->listPage_redirect);
			}
		}
	}
}
