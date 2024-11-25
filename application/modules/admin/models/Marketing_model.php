<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Marketing_model extends CI_Model
{

    public function __construct() {
        parent::__construct();
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
    
    public function get_allocated_profilesADM($emp_id)
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        $sql_query = "SELECT ms.*, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,prm.first_name) 
        as ms_user_name from ms_profilesetting as ms INNER JOIN tbl_primary_info as prm ON prm.id = ms.ms_id 
        WHERE ms.rem_date = CURDATE() AND ms.profileowner=" . $emp_id . " AND ms.payment_status IS NULL ORDER BY ms.last_call_updated DESC";
        // echo $sql_query;
        // $this->db->select('ms.*, prm.profile_id as ms_profile_id, CONCAT(prm.last_name,prm.first_name) 
        // as ms_user_name');
        // $this->db->from('ms_profilesetting as ms');
        // $this->db->join('tbl_primary_info as prm', 'prm.id = ms.ms_id');
        // $this->db->where("ms.profileowner =", $emp_id);
        // $this->db->where("ms.rem_date =", date('Y-m-d'));
        // $this->db->where("ms.payment_status", NULL);
        // $this->db->order_by("ms.last_call_updated", "DESC");
        // $sql_query = $this->db->get();
        $query = $this->db->query($sql_query);

        foreach ($query->result_array() as $row) {
            $un_paid_user = array();
            $un_paid_user["user_id"] = $row['profilesetting_id'];
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
            $un_paid_user["user_cast"] = "1";
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["elite"] = $row['elite'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            $result["found"] = "1";
            array_push($add_res_array, $un_paid_user);
        }
        $result["users"] = $add_res_array;
        return $result;
    }

    public function get_user_profile_imageADM($user_id)
    {
        $result = "img_avatar.png";
        $sql_query = "SELECT applicationphotopath, photoname FROM ms_photos WHERE MS_id =" . $user_id . " AND isactive=1 AND ismain=1";
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $result = $row["applicationphotopath"];
            return $result;
        }
        return $result;
    }

    public function get_user_infoADM($user_id)
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        // "SELECT ms.*,cs.caste,pinfo.father_mobile,
        $sql_query =
            "SELECT ms.*,prm.mobile, prm.profile_id as ms_profile_id, prm.registered_on, prm.status as prof_status,CONCAT( prm.last_name,' ' ,prm.first_name) as ms_user_name 
        from ms_profilesetting as ms 
        JOIN tbl_primary_info as prm ON (prm.id = ms.ms_id)
        WHERE ms.profilesetting_id=" . $user_id;

        $query = $this->db->query($sql_query);
        $this->load->model('Encrypt_model', 'encrypt_model');
        $this->encrypt_model->encryptionInitialize();
        foreach ($query->result_array() as $row) {
            $result["found"] = "1";
            $un_paid_user["user_id"] = $row['ms_id'];
            $un_paid_user["profile_id"] = $row['profilesetting_id'];
            $un_paid_user["profile_url"] = $this->get_user_profile_imageADM($row["ms_id"]);
            $un_paid_user["images_info"] = $this->get_profile_imagesADM($row["ms_id"]);
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["rem_date"] = $row['rem_date'];
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["elite"] = $row['elite'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            $un_paid_user["father_mobile"] = $this->get_parent_mobile_no($row["ms_id"]);
            $un_paid_user['father_mobile'] = $this->encrypt_model->decryptField($un_paid_user['father_mobile']);
            $un_paid_user["user_mobile"] = $row['mobile'];
            $un_paid_user['user_mobile'] = $this->encrypt_model->decryptField($un_paid_user['user_mobile']);
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_dor"] = $row['registered_on'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
            $un_paid_user["prof_status"] = $row['prof_status'];
            $result["user"] = $un_paid_user;
        }
        return $result;
    }

    public function get_call_logADM($cust_id)
    {
        $result = array();
        $result["found"] = "0";
        $call_log_array = array();
        $sql_query = "SELECT md.*, ad.username as added_by  FROM ms_marketing_docket md LEFT JOIN tbl_admin_data ad ON ad.id = md.call_enteredby WHERE md.ms_id=" . $cust_id . " ORDER BY md.called_date DESC";
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $call_log = array();
            $call_log["cl_type"] = $row['call_type'];
            $call_log["cl_description"] = $row['call_discussion'];
            $call_log["cl_success"] = $row['called_status'];
            $call_log["cl_by"] = $row['call_enteredby'];
            if ($row['added_by'] == null) {
                $call_log["added_by"] =  $row['call_enteredby'];
            }
            else
            {
                $call_log["added_by"] =  $row['added_by'];                
            }
            $call_log["called_date"] = $row['called_date'];
            array_push($call_log_array, $call_log);
        }
        $result["call_log"] = $call_log_array;
        return $result;
    }

    public function get_parent_mobile_no($user_id)
    {
        $result = "not found";
        $sql_query = "SELECT father_mobile from  tbl_parents_info WHERE user_id =" . $user_id;
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $result = $row["father_mobile"];
            return $result;
        }
        return $result;
    }
    
    public function save_reminderADM($cust_id, $rem_date)
    {
        $this->db->set('rem_date', $rem_date);
        $this->db->where('ms_id', $cust_id);
        return $this->db->update('ms_profilesetting');
    }

    public function get_profile_imagesADM($id)
    {

        $this->db->select('*');
        $this->db->from('ms_photos');
        $this->db->where('MS_id', $id);
        $this->db->order_by('photos_id', 'ASC');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
