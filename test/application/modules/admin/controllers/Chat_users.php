<?php
   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class Chat_users extends CI_Controller{
           public $header = 'admin_header';
           public $footer = 'admin_footer';
           public $listUsers = 'chating_users';
           public $feedBacks = 'user_feedBacks';
          public function __construct(){
               parent::__construct();
               $this->load->model('Chat_model');
               error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		       error_reporting(0);
		       ini_set('display_errors','on'); 
		       if ($this->session->userdata('user_id') == "") { 
                  redirect($this->login_redirect, 'refresh'); 
                }
          }

          function index(){
               
          }

          function chat_users(){
               $data['users']=$this->Chat_model->get_chat_users();
                //echo "<pre>";print_r($data['users']);die;
               $this->load->view($this->header);
               $this->load->view($this->listUsers,$data);
               $this->load->view($this->footer);
          }


          public static function getTimeago2( $ptime,$online )
          {
               $current_time = time(); // Current Unix timestamp
               $estimate_time = $current_time - $ptime;
    
                if( $estimate_time < 1 )
                {
                      return 'less than 1 second ago';
                }
    
                $condition = array(
                                  12 * 30 * 24 * 60 * 60  =>  'year',
                                  30 * 24 * 60 * 60       =>  'month',
                                  24 * 60 * 60            =>  'day',
                                  60 * 60                 =>  'hour',
                                  60                      =>  'minute',
                                  1                       =>  'second'
                );
    
            $text_string = '';
                foreach( $condition as $secs => $str )
                {
                      $d = $estimate_time / $secs;
    
                      if( $d >= 1 )
                      {
                            $r = round( $d );
                            
                            if($str == 'minute' || $str == 'second'){
                                  if($text_string <= 20 && $online=='Yes'){
                                        $text_string =  '<span style="color: #00bd00;">Online</span>';
                                  }else{
                                        $text_string = 'Last seen ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
                                  }
                            }else{
                                      $text_string = 'Last seen ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
                            }
                            return $text_string;
                      }
                }
          }

          public function add_complaint(){
                 $admin_id=$this->input->post('admin_id');
                 $user_id=$this->input->post('user_id'); 
                 $cmp_id = $this->input->post('cm_id');
                 $message=trim($this->input->post('message'));  
                 $res=$this->Chat_model->add_complaint($admin_id,$user_id,$cmp_id,$message);
                 echo $res;   
          }

          public function get_chat_list($user_id,$rm_id){
                  $res = $this->Chat_model->get_chat_list($user_id,$rm_id);
                  echo $res;
          }


          public function update_message($user_id, $rm_id) {
            if (!empty($user_id)) {
                $this->db->set('read', 1);
                $this->db->where('user_id', $user_id);
                $this->db->where('admin_id', $rm_id);
                $result = $this->db->update('complaints');
                return $result; 
            }
            return false;
        }
        
public function check_new_message() {
      // Your existing code to check for new messages
      $newMessages = $this->Chat_model->check_new_message(); 
      $response = array(
          "newMessages" => $newMessages 
      );
      header('Content-Type: application/json');
      echo json_encode($response);
  }


          public function raise_complaint(){
                $user_id=$this->input->post('user_id'); 
                $message=trim($this->input->post('message'));  
                $res=$this->Chat_model->raise_complaint($user_id,$message);
                echo $res;   
          }

          public function feed_backs()
          {
                $data['feedback']= $this->Chat_model->get_feedBacks();
                $data['rm_image'] =  $this->Chat_model->rm_image(); 

                $this->load->view($this->header,$data);
                $this->load->view($this->feedBacks,$data);
                $this->load->view($this->footer);

          }

          public function track_visitors(){
            $data['rm_image'] =  $this->Chat_model->rm_image(); 
            $this->load->view($this->header,$data);
            $this->load->view('track_users');
            $this->load->view($this->footer);
          }

          public function get_track_users()
          {
            $frm_dt = $this->input->post("from");
            $to_dt = $this->input->post("to");
            $this->data['frm_dat'] = $frm_dt;
            $this->data['to_dat'] = $to_dt;
            $this->data['track_users'] = $this->Chat_model->get_visitors($frm_dt, $to_dt);
            // echo "<pre>"; print_r($this->data['track_users']);die;
            $this->load->view($this->header);
            $this->load->view('visitors_list', $this->data);
            $this->load->view($this->footer);
            
          }
          public function bounce_mails(){

                 $rm_id = $this->input->post('rm_id');
       

                $this->data["bounce_mails"] = $this->Chat_model->get_bounce_mails($rm_id);
            //    print_r($rm_id);die;
                $this->data["rm_names"] = $this->Chat_model->rm_names();

                if ($this->input->is_ajax_request()) {
                  echo json_encode($this->data["bounce_mails"]);
                  return;
              }
        
                $this->load->view($this->header);
                $this->load->view('bounceMail_list', $this->data);
                $this->load->view($this->footer);
          }

          public function bounce_mails2(){
            $this->data["bounce_mails"] = $this->Chat_model->get_bounce_mails2();
            $this->load->view($this->header);
            $this->load->view('bounceMail_list', $this->data);
            $this->load->view($this->footer);
        }


        public function bounce_mails3(){
            $this->data["bounce_mails"] = $this->Chat_model->non_send_emails();
            $this->load->view($this->header);
            $this->load->view('Non_send_mail', $this->data);
            $this->load->view($this->footer);
        }

        public function Delete_bounce($id){
            $res=$this->Chat_model->Delete_bounce($id);
            if($res){
                  $this->session->set_flashdata('success', 'Deleted Successfully');
            }else{
                  $this->session->set_flashdata('failed', 'Something went wrong! Please try again later');
            }
            redirect('admin/chat_users/bounce_mails3');

        }
   }
?>