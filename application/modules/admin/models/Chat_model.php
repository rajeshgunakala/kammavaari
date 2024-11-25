<?php
// print_r("deva");die;
class Chat_model extends CI_Model{
        public function __construct(){
                 parent::__construct();
                 error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
                 error_reporting(0);
                 ini_set('display_errors','off'); 
                 if ($this->session->userdata('user_id') == "") { 
                    redirect($this->login_redirect, 'refresh'); 
                  }
        }

        public function get_chat_users(){
                $rm_id = $this->session->userdata('user_id');
              $query = $this->db->query("SELECT a.id, a.first_name, b.image,c.applicationphotopath,e.last_activity,e.online,SUM(CASE WHEN f.read = 0 THEN 1 ELSE 0 END) AS unread
                                         FROM tbl_primary_info AS a 
                                         LEFT JOIN `upload-images` AS b ON a.id = b.user_id
                                         LEFT JOIN  MS_photos AS c  ON a.id = c.MS_id
                                         INNER JOIN ms_profilesetting AS d ON a.id = d.ms_id
                                         LEFT JOIN tbl_current_login  AS e  ON a.id = e.user_id
                                         LEFT Join complaints as f ON a.id = f.user_id
                                         WHERE d.profileowner = '".$rm_id."'
                                         GROUP BY a.id
                                         ORDER BY e.online DESC,e.last_activity DESC
                                         ");
               return $query->result_array();

        }

        public function add_complaint($admin,$user,$cmp_id,$msg){
                    $data = array(
                           'sender_id' => $admin,
                           'receiver_id' => $user,
                           'complaint_id'=> $cmp_id,
                           'message_text' => $msg,
                           'created_at' => date('Y-m-d H:i:s')
                    );
                    if($this->db->insert('messages',$data)){
                          return json_encode(array("res"=>true));
                    }else{
                        return json_encode(array("res"=>false));
                    }
        }

        public function get_chat_list($user_id,$rm_id)
        {
                $query = $this->db->query("SELECT * FROM messages WHERE receiver_id = '".$user_id."' AND sender_id = '".$rm_id."'");
                $result = $query->result();  

                $complaits = $this->db->query("SELECT * FROM complaints WHERE user_id ='".$user_id."' AND admin_id = '".$rm_id."' ");
                $result2 = $complaits->result();

                $user_data = $this->db->query("SELECT profile_id,first_name FROM tbl_primary_info WHERE id = '".$user_id."'");
                $result3 = $user_data->result();
                return json_encode(array('adm_msg'=>$result,'user_msg'=>$result2,'user_data'=>$result3));     
  
        }

        public function raise_complaint($user,$msg)
        {
                $get_rm = $this->db->query("SELECT profileowner FROM ms_profilesetting WHERE ms_id = '".$user."'");
                $result = $get_rm->num_rows();
                $rm_id = $get_rm->row()->profileowner;
                if($result == 1){
                        $data = array(
                                'user_id' => $user,
                                'admin_id' => $rm_id,
                                'complaint_text' => $msg,
                                'create_at' => date('Y-m-d H:i:s')
                         );
                         if($this->db->insert('complaints',$data)){
                               return json_encode(array("res"=>true));
                         }else{
                             return json_encode(array("res"=>false));
                         }
                }else{
                        return  "<script>alert('RM not assigned for you can't send messages');</script>";
                }
                
        }

        
 public function get_feedBacks()
 {
            $query = $this->db->query("SELECT * FROM tbl_feedback ORDER BY feedback_id DESC");
            $res = $query->result_array();
            return $res;
 }

 public function get_visitors($frm_dt,$to_dt)
 {
           $query = $this->db->query("SELECT B.profile_id,B.first_name,A.login_date_time,A.logout_date_time
                                      FROM customer_login_notification AS A
                                      INNER JOIN tbl_primary_info AS B  ON A.user_id = B.id
                                      WHERE DATE(A.login_date_time) BETWEEN '".$frm_dt."' AND '".$to_dt."'
                                      ");
                                      return $query->result();  
 }

  public function get_bounce_mails($rm_id = null){

        if(!empty($rm_id)){
                $sql = "AND m.profileowner = '$rm_id' "; 
        }
      
           $query = $this->db->query(
                "SELECT t.profile_id, t.first_name,t.last_name, t.gender, t.registered_on 
           FROM tbl_primary_info as t  inner join ms_profilesetting as m  on m.ms_id=t.id
           WHERE t.status = '1' AND  t.hash_email = '' $sql ");
       
           return $query->result();

  }

  public function getemailby_rm($rm){
        print_r($rm);die;
        $query = $this->db->query("SELECT profile_id, first_name,last_name, gender, registered_on 
        FROM tbl_primary_info WHERE status = '1' AND  hash_email = ''");
        return $query->result();
        
  }


  public function non_send_emails(){
         $rm_id=$this->session->userdata('user_id');
         $where_condi='';
         if(!empty($this->input->post('f_date')) && !empty($this->input->post('t_date'))){
                $f_date = $this->input->post('f_date');
                $t_date = $this->input->post('t_date');
                if ($this->session->userdata('type') == 'admin') {
                        $where_condi .= "WHERE A.send_Date BETWEEN '" . $f_date . "' AND '" . $t_date . "'";
                    } else {
                        $where_condi .= "AND A.send_Date BETWEEN '" . $f_date . "' AND '" . $t_date . "'";
                    }
         }


          if ($this->session->userdata('type') == 'admin') { 
                $query1 = $this->db->query("
                SELECT A.activity_id,B.profile_id as receive_cust_id,C.profile_id as send_cust_id, B.first_name as receive_cust,C.first_name as send_cust_name,D.name as send_by,A.send_Date
                FROM user_share_activity AS A
                LEFT JOIN tbl_primary_info AS B ON A.to_msID = B.id
                LEFT JOIN tbl_primary_info AS C ON A.from_msID = C.id
                INNER JOIN tbl_admin_data AS D ON A.sentby_ID = D.id
                $where_condi
         ");
        //  echo $this->db->last_query();exit;
         return $query1->result();
          }else{
                $query2 = $this->db->query("
                SELECT A.activity_id,B.profile_id as receive_cust_id,C.profile_id as send_cust_id, B.first_name as receive_cust,C.first_name as send_cust_name,D.name as send_by,A.send_Date
                FROM user_share_activity AS A
                LEFT JOIN tbl_primary_info AS B ON A.to_msID = B.profile_id
                LEFT JOIN tbl_primary_info AS C ON A.from_msID = C.id
                LEFT JOIN tbl_admin_data AS D ON A.sentby_ID = D.id
                where D.id = '".$rm_id."' $where_condi
          ");
          return $query2->result();

          }
  }


  public function Delete_bounce($id){
        $this->db->where('activity_id',$id);
        $this->db->delete('user_share_activity');
        return true;
  }

  public function get_bounce_mails2(){
        $rm_id=$this->session->userdata('user_id');
        $query = $this->db->query("SELECT profile_id, first_name,last_name, gender, registered_on 
                                   FROM tbl_primary_info as a
                                --    WHERE hash_email = ''
                                   INNER JOIN ms_profilesetting AS d ON a.id = d.ms_id
                                   WHERE a.status='1' AND d.profileowner = '".$rm_id."'AND hash_email = ''
                                   ");
                                //   echo $this->db->last_query();
        return $query->result();

}

public function check_new_message() {
        $query = $this->db->query("SELECT COUNT(*) AS new_message_count FROM complaints WHERE `read` = 0 AND admin_id = '".$this->session->userdata('user_id')."'");
        $result = $query->row(); // Assuming you expect only one row
        
        if ($result->new_message_count > 0) {
            return TRUE; // New message(s) found
        } else {
            return FALSE; // No new messages found
        }
    }

    public function rm_image(){
        $a = $this->session->userdata('user_id');

        $select = "select * from tbl_admin_data where id = $a "; 
        $result = $this->db->query($select)->row();
        return $result; 
        
}

public function rm_names(){

        $select = "SELECT id,username FROM tbl_admin_data where status = 1 and type = 'staff'  order by username asc"; 
        $result = $this->db->query($select)->result_array();
        return $result;
}

}
?>