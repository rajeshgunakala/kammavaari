<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class My_account_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        //$this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        //error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        //error_reporting(0);
        //ini_set('display_errors', 'off');
         $this->load->library('email');
    }
    public function expressinterestinsert_new($getfrom_id, $getto_id, $rmid) {
        $array = array('kv_eirm_fromfkid' => $getfrom_id, 'kv_eirm_tofkid' => $getto_id, 'kv_eirm_rmfkid' => $rmid, 'kv_eirm_created_date' => date('Y-m-d H:i:s'), 'kv_eirm_status' => 1,);
        $this->db->insert('kv_expressinterestbyrm', $array);
        return true;
    }

    public function plans(){
        $this->db->select('*');
        $this->db->from('tbl_plans');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_user_id($profile_id) {
        $this->db->select('id');
        $this->db->from('tbl_primary_info');
        $this->db->where('profile_id', $profile_id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallheights() {
        $this->db->select('height,status');
        $this->db->from('tbl_height');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallcastes() {
        $this->db->select('caste,status');
        $this->db->from('tbl_caste');
        $this->db->order_by('caste', 'asc');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallreligions() {
        $this->db->select('religion,status');
        $this->db->from('tbl_religion');
        $this->db->where('status', 1);
        $this->db->order_by('religion', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallmothertounges() {
        $this->db->select('mothertounge,status');
        $this->db->from('tbl_mothertounge');
        $this->db->where('status', 1);
        $this->db->order_by('mothertounge', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallprofessions() {
        $this->db->select('profession,status');
        $this->db->from('tbl_profession');
        $this->db->where('status', 1);
        $this->db->order_by('profession', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallcountries() {
        $this->db->select('country,status');
        $this->db->from('tbl_country');
        $this->db->where('status', 1);
        $this->db->order_by('country', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getsearchrecords($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country) {
		$user_id = $this->session->userdata('user_id');
		$this->db->select("ms_usertype");
		$this->db->from("ms_profilesetting");
		$this->db->where("ms_id",$user_id);
		$usertype = $this->db->get()->row_array();
        $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'inner');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'inner');
        $this->db->select('u.image,u.user_id');
        $this->db->join('upload-images as u', 'p.id=u.user_id', 'left');
        if ($gender != "") {
            $this->db->where('p.gender', $gender);
        }
        if ($agefrom != "" && $ageto != "") {
            $this->db->where("p.age BETWEEN $agefrom AND $ageto");
        }
        if ($heightfrom != "") {
            $this->db->where('r.height >=', $heightfrom);
        }
        if ($heightto != "") {
            $this->db->where('r.height <=', $heightto);
        }
        if ($maritalstatus != "") {
            $this->db->where('r.marital_status', $maritalstatus);
        }
        if ($religion != "") {
            $this->db->where('r.religion', $religion);
        }
        if ($caste != "") {
            $this->db->where('r.caste', $caste);
        }
        if ($mothertounge != "") {
            $this->db->where('r.mother_tounge', $mothertounge);
        }
        if ($country != "") {
            $this->db->where('p.living_in', $country);
        }
        if ($profession != "") {
            $this->db->where('e.occupation', $profession);
        }
		 if ($usertype["ms_usertype"] == "regular") {
                $this->db->where('s.ms_usertype',$usertype["ms_usertype"]);
            }
           else if ($usertype == "confidential") {
				$type=array("regular","confidential");
                $this->db->where_in('s.ms_usertype',$type);
               
            }
            else if ($usertype == "superconfidential") {
				$type=array("superconfidential","confidential","regular");
                $this->db->where_in('s.ms_usertype',$type);
                 $this->db->order_by('s.usertype_order', 'DESC');   
            }
            else if ($usertype == "elite") {
				$type=array("elite","superconfidential","confidential","regular");
                $this->db->where_in('s.ms_usertype',$type);
                 $this->db->order_by('s.usertype_order', 'DESC');   
            }
             $this->db->where('s.ms_showntype','yes');
        $this->db->where('p.status', 1);
        $this->db->group_by('u.user_id');
	//	echo $this->db->last_query();exit;
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallrecords($arr1, $arr2, $arr3, $arr4) {
		//print_r($arr3);exit;
        $user_id = $this->session->userdata('user_id');
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age,dob');
        $this->db->from('tbl_primary_info as p');
        $this->db->select('s.ms_usertype');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'left');
      /*$this->db->select('pp.*');
        $this->db->join('tbl_partner_preferences as pp', 'p.id = pp.ms_id', 'left');  */
        $this->db->where('p.id', $user_id);
        $primary_details = $this->db->get()->row_array();
        //print_r($primary_details);exit;
        $this->db->select('caste,height,height_cm,marital_status');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id', $user_id);
		
        $religion_details = $this->db->get()->row_array();
       
        $usertype = $primary_details["ms_usertype"];
        $caste = $religion_details['caste'];
        $height = $religion_details['height'];
		$height_cm = $religion_details['height_cm'];
        $marital_status = $religion_details['marital_status'];
        $gender = $primary_details['gender'];
        $living_in = $primary_details['living_in'];
        $age = $primary_details['age'];
        $dob = $primary_details['dob'];
		 
        $this->db->select("p.gender,p.private,p.id,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.dob,p.living_in,p.profile_id,p.first_name,p.last_name,s.ms_usertype");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        /*	$this->db->where('user_id !=',$user_id);
        */
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'left');
        $this->db->select('adm.id as rm_id, adm.username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone');
        $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');
        $this->db->where('p.status', 1);
        $this->db->where('s.profileowner > 0');
        
        //Regular user -> show regular profiles and property less than 2 crores
        //Confindential -> Show regular and confidentials profiles
        //$this->db->where('s.elite', 'no');
        $this->db->where('p.id !=', $user_id);
        //echo $primary_details['p_age_to'];exit;
        if ($gender == 'male') {
            if (isset($primary_details['p_age_to']) && !empty($primary_details['p_age_to'])) {
                $from_dob = date('Y-m-d', strtotime($dob . ' + ' . $primary_details['p_age_to'] . ' years'));
            } else {
                $from_dob = date('Y-m-d', strtotime($dob . ' + 8 years'));
            }
            $this->db->where('p.dob <=', $from_dob);
            if (isset($primary_details['p_age_from']) && !empty($primary_details['p_age_from'])) {
                $to_dob = date('Y-m-d', strtotime($dob . ' + ' . $primary_details['p_age_from'] . ' years'));
            } else {
                $to_dob = $dob;
            }
            $this->db->where('p.dob >=', $to_dob);
        }
        if ($gender == 'female') {
            if (isset($primary_details['p_age_to']) && !empty($primary_details['p_age_to'])) {
                $from_dob = date('Y-m-d', strtotime($dob . ' - ' . $primary_details['p_age_to'] . ' years'));
            } else {
                $from_dob = $dob;
            }
            $this->db->where('p.dob <=', $from_dob);
            if (isset($primary_details['p_age_from']) && !empty($primary_details['p_age_from'])) {
                $to_dob = date('Y-m-d', strtotime($dob . ' - ' . $primary_details['p_age_from'] . ' years'));
            } else {
                $to_dob = date('Y-m-d', strtotime($dob . ' - 8 years'));
            }
            $this->db->where('p.dob >=', $to_dob);
        }
        $this->db->where('r.caste =', $caste);
        if ($gender == 'male' && $height != "") {
            $this->db->where('r.height_cm <=', $height_cm);
        } else if ($gender == 'female') {
            $this->db->where('r.height_cm >=', $height_cm);
        }
    /*    $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        if ($gender == 'male') {
            if ($usertype == "regular") {
                $this->db->where('pr.property_value!=', '');
                $this->db->where('pr.property_value<=', 3);
            }
            if ($usertype == "confidential") {
                $this->db->where('pr.property_value>=', 3);
                $this->db->where('pr.property_value<=', 6);
            }
        }
        if ($gender == 'female') {
            if ($usertype == "regular") {
                $this->db->where('pr.property_value!=', '');
                $this->db->where('pr.property_value<=', 6);
            }
            if ($usertype == "confidential") {
                $this->db->where('pr.property_value>=', 5);
                $this->db->where('pr.property_value<=', 10);ms_usertype
            }
        }  */
		 if ($usertype == "regular") {
				
                $this->db->where('s.ms_usertype',$usertype);
                $this->db->where('s.elite', 'no');
				$this->db->order_by('p.id', 'DESC'); 
            }
           else if ($usertype == "confidential") {
				$type=array("confidential","regular");
                $this->db->where_in('s.ms_usertype',$type);
               $this->db->order_by('p.id', 'DESC'); 
            }
        else if ($usertype == "superconfidential") {
				$type=array("superconfidential","confidential","regular");
                $this->db->where_in('s.ms_usertype',$type);
                 $this->db->order_by('p.id', 'DESC');   
            }
            else if ($usertype == "elite") {
				$type=array("elite","superconfidential","confidential","regular");
                $this->db->where_in('s.ms_usertype',$type);
                 $this->db->order_by('p.id', 'DESC');   
            }


        //id not in(select kv_ni_touserid from kv_notinterested where kv_ni_userid="'.$user_id.'") and
        $this->db->where(' p.id not in(select kv_ni_touserid from kv_notinterested where kv_ni_userid="' . $user_id . '") and r.marital_status =', $marital_status);
        $this->db->where('p.gender !=', $gender);
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->where_not_in('p.id', $arr3);
        $this->db->where_not_in('p.id', $arr4);
         $this->db->where('s.ms_showntype','yes');
        $this->db->group_by('p.id');
        $this->db->order_by('s.usertype_order', 'DESC');
        $query = $this->db->get();
        $result = $query->result_array();
		//print_r($result);exit;
      // echo $this->db->last_query();exit;
      
        return $result;
    }

    public function get_AllPartner_preferences($dob = null, $living = null, $status = null, $gen = null, $h_from = null, $h_to = null, $country = null)
    {
        $user_id = $this->session->userdata('user_id');
        $currentWeek = date('W');
        $currentMonth = date('m');
    
        // Calculate LIMIT and OFFSET based on the current week and month
        $limit = ($currentWeek) * 2;
        $offset = (($currentMonth - 1) * 4) * 2;
    
        // Set the gender condition dynamically
        $genderCondition = ($gen == 'male') ? 'p.dob >= ?' : 'p.dob <= ?';
    
        $query = '
            SELECT 
                p.gender,
                p.id,
                p.status,
                DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), p.dob)), "%Y")+0 as cur_age,
                p.dob,
                p.living_in,
                p.profile_id,
                p.first_name,
                p.last_name,
                p.private,
                s.ms_usertype,
                r.height,
                r.marital_status,
                r.religion,
                r.mother_tounge,
                r.user_id,
                r.caste,
                e.user_id,
                e.heighst_education,
                e.annual_income,
                e.occupation,
                e.about_me,
                u.photoname,
                u.MS_id,
                u.ismain,
                u.isactive,
                u.applicationphotopath,
                adm.id as rm_id,
                adm.username,
                adm.name as rm_name,
                adm.email as rm_email,
                adm.phone_no as rm_phone
            FROM
                tbl_primary_info as p
            JOIN
                tbl_religion_info as r ON p.id = r.user_id
            LEFT JOIN
                tbl_professional_info as e ON p.id = e.user_id
            LEFT JOIN
                MS_photos as u ON p.id = u.MS_id
            LEFT JOIN
                ms_profilesetting as s ON p.id = s.ms_id
            LEFT JOIN
                tbl_admin_data as adm ON s.profileowner = adm.id
            INNER JOIN 
                tbl_partner_preferences as pat ON p.id = pat.ms_id   
            WHERE 
                ' . $genderCondition . '
                AND p.gender != ?
                ';
    
        // Prepare parameters for query execution
        $params = array($dob, $gen);
    
        // If $status is provided, add the marital status condition
        if ($status !== null) {
            $query .= ' AND pat.p_marital_status = ?';
            $params[] = $status;
        }
    
        if ($h_from !== null) {
            $query .= ' AND pat.p_height_from >= ?';
            $params[] = $h_from;
        }
    
        if ($h_to !== null) {
            $query .= ' AND pat.p_height_to <= ?';
            $params[] = $h_to;
        }
    
        // if ($country !== null) {
        //     $query .= ' AND LOWER(pat.p_coountry) LIKE LOWER(?)';
        //     $params[] = '%' . strtolower($country) . '%';
        // }
    
        $query .= ' GROUP BY p.id';
        $query .= ' LIMIT ? OFFSET ?';
        $params[] = $limit;
        $params[] = $offset;
    
        // Debugging: Output the query and parameters
        // echo $query; 
        // echo '<pre>'; 
        // print_r($params); 
        // die;
    
        $result = $this->db->query($query, $params);
    
        // Return the result array
        return $result->result_array();
    }
    
    

	public function getNewProfiles($arr1, $arr2, $arr3,$arr4, $params) {
		//print_r($arr3);exit;
        $user_id = $this->session->userdata('user_id');
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age,dob');
        $this->db->from('tbl_primary_info as p');
        $this->db->select('s.ms_usertype');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'left');
       // $this->db->select('pp.*');
       // $this->db->join('tbl_partner_preferences as pp', 'p.id = pp.ms_id', 'left');
        $this->db->where('p.id', $user_id);
        $primary_details = $this->db->get()->row_array();
        //print_r($primary_details);exit;
        $this->db->select('caste,height,height_cm,marital_status');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id', $user_id);
        $religion_details = $this->db->get()->row_array();
       
        $usertype = $primary_details["ms_usertype"];
        $caste = $religion_details['caste'];
        $height = $religion_details['height'];
        $height_cm = $religion_details['height_cm'];
        $marital_status = $religion_details['marital_status'];
        $gender = $primary_details['gender'];
        $living_in = $primary_details['living_in'];
        $age = $primary_details['age'];
        $dob = $primary_details['dob'];
		 
        $this->db->select("p.gender,p.id,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.dob,p.living_in,p.profile_id,p.first_name,p.last_name,s.ms_usertype");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.gothram,r.star,r.raasi');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        /*	$this->db->where('user_id !=',$user_id);
        */
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.city');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'left');
        $this->db->select('adm.id as rm_id, adm.username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone,pr.property_value');
        $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');
        $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        $this->db->where('p.status', 1);
        
        //Regular user -> show regular profiles and property less than 2 crores
        //Confindential -> Show regular and confidentials profiles
        //$this->db->where('s.elite', 'no');
        $this->db->where('p.id !=', $user_id);
        //echo $primary_details['p_age_to'];exit;
        if ($gender == 'male') {
            if (isset($primary_details['p_age_to']) && !empty($primary_details['p_age_to'])) {
                $from_dob = date('Y-m-d', strtotime($dob . ' + ' . $primary_details['p_age_to'] . ' years'));
            } else {
                $from_dob = date('Y-m-d', strtotime($dob . ' + 8 years'));
            }
            $this->db->where('p.dob <=', $from_dob);
            if (isset($primary_details['p_age_from']) && !empty($primary_details['p_age_from'])) {
                $to_dob = date('Y-m-d', strtotime($dob . ' + ' . $primary_details['p_age_from'] . ' years'));
            } else {
                $to_dob = $dob;
            }
            $this->db->where('p.dob >=', $to_dob);
        }
        if ($gender == 'female') {
            if (isset($primary_details['p_age_to']) && !empty($primary_details['p_age_to'])) {
                $from_dob = date('Y-m-d', strtotime($dob . ' - ' . $primary_details['p_age_to'] . ' years'));
            } else {
                $from_dob = $dob;
            }
            $this->db->where('p.dob <=', $from_dob);
            if (isset($primary_details['p_age_from']) && !empty($primary_details['p_age_from'])) {
                $to_dob = date('Y-m-d', strtotime($dob . ' - ' . $primary_details['p_age_from'] . ' years'));
            } else {
                $to_dob = date('Y-m-d', strtotime($dob . ' - 8 years'));
            }
            $this->db->where('p.dob >=', $to_dob);
        }
        $this->db->where('r.caste =', $caste);
        if ($gender == 'male' && $height != "") {
            $this->db->where('r.height_cm <=', $height_cm);
        } else if ($gender == 'female') {
            $this->db->where('r.height_cm >=', $height_cm);
        }
    /*    $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        if ($gender == 'male') {
            if ($usertype == "regular") {
                $this->db->where('pr.property_value!=', '');
                $this->db->where('pr.property_value<=', 3);
            }
            if ($usertype == "confidential") {
                $this->db->where('pr.property_value>=', 3);
                $this->db->where('pr.property_value<=', 6);
            }
        }
        if ($gender == 'female') {
            if ($usertype == "regular") {
                $this->db->where('pr.property_value!=', '');
                $this->db->where('pr.property_value<=', 6);
            }
            if ($usertype == "confidential") {
                $this->db->where('pr.property_value>=', 5);
                $this->db->where('pr.property_value<=', 10);ms_usertype
            }
        }  */
		 if ($usertype == "regular") {
				
                $this->db->where('s.ms_usertype',$usertype);
                $this->db->where('s.elite', 'no');
				$this->db->order_by('p.id', 'DESC'); 
            }
           else if ($usertype == "confidential") {
				$type=array("regular","confidential");
                $this->db->where_in('s.ms_usertype',$type);
                 $this->db->order_by('p.id', 'DESC');   
            }
        
           else if ($usertype == "superconfidential") {
				$type=array("superconfidential","confidential","regular");
                $this->db->where_in('s.ms_usertype',$type);
                 $this->db->order_by('p.id', 'DESC');   
            }
        else if ($usertype == "elite") {
				$type=array("elite","superconfidential","confidential","regular");
                $this->db->where_in('s.ms_usertype',$type);
                 $this->db->order_by('p.id', 'DESC');   
            }


        //id not in(select kv_ni_touserid from kv_notinterested where kv_ni_userid="'.$user_id.'") and
        $this->db->where(' p.id not in(select kv_ni_touserid from kv_notinterested where kv_ni_userid="' . $user_id . '") and r.marital_status =', $marital_status);
        $this->db->where('p.gender !=', $gender);
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->where_not_in('p.id', $arr3);
        $this->db->where_not_in('p.id', $arr4);
         $this->db->where('s.ms_showntype','yes');
        $this->db->where('s.profileowner > 0');
        $this->db->group_by('p.id');
        $this->db->order_by('s.usertype_order', 'DESC');
        
		if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
			$query = $this->db->get();
            $result = $query->num_rows();
        }else{
			if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
				$this->db->limit($params['limit'],$params['start']); 
			}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
				$this->db->limit($params['limit']); 
			} 
			$query = $this->db->get();
			 $result = $query->result_array();
		}        
		//print_r($result);exit;
         //echo $this->db->last_query();exit;
        return $result;
    }
	
    public function get_profile_info($id) {
        $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.date,p.year,p.month");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.star,r.time_of_birth,r.raasi,r.place_of_birth,r.gothram');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'inner');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.education_description,e.about_profession,e.currency,e.country,e.state,e.city,e.departure-date,e.residing-since,e.arrival-date');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'inner');
        $this->db->select('f.father_name,f.fathers_father_name,f.fathers_father_native_place,f.mother_name,mothers_father_name,f.mothers_father_native_place,f.user_id');
        $this->db->join('tbl_parents_info as f', 'p.id=f.user_id', 'inner');
        $this->db->select('s.user_id,s.no_of_brothers,s.no_of_sisters');
        $this->db->join('tbl_siblings_info as s', 'p.id=s.user_id', 'inner');
        $this->db->where('p.profile_id', $id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }
    public function get_images($profile_id) {
        $this->db->select('i.image,i.user_id,i.status');
        $this->db->from('upload-images as i');
        $this->db->select("p.profile_id,p.id");
        $this->db->join('tbl_primary_info as p', 'i.user_id=p.id', 'inner');
        $this->db->where('p.profile_id', $profile_id);
        $this->db->where('i.status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function update_view_status($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query = $this->db->get();
        $result = $query->result_array();
        $count = $query->num_rows();
        if ($count == 0) {
            $this->db->select('*');
            $this->db->from('MS_shortlist_viewedd_ignored');
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $query = $this->db->get();
            $rows = $query->num_rows();
            $result = $query->result_array();
            if ($rows == 0) {
                $data = array('from_msid' => $user_id, 'to_msid' => $to_user_id, 'viewed_status' => 1, 'viewed_date' => date('Y-m-d H:i:s'));
                $this->db->insert('MS_shortlist_viewedd_ignored', $data);
            } else {
                $data = array('viewed_status' => 1, 'shortlist_status' => 0, 'ignore_status' => 0);
                $this->db->where('from_msid', $user_id);
                $this->db->where('to_msid', $to_user_id);
                $this->db->update('MS_shortlist_viewedd_ignored', $data);
            }
        }
    }
    /*  --------------old function--------
    public function update_view_status($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query = $this->db->get();
        $result = $query->result_array();
        $count = $query->num_rows();
        if ($count == 0) {
            $this->db->select('*');
            $this->db->from('MS_shortlist_viewedd_ignored');
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $query = $this->db->get();
            $rows = $query->num_rows();
            $result = $query->result_array();
            if ($rows == 0) {
                $data = array('from_msid' => $user_id, 'to_msid' => $to_user_id, 'viewed_status' => 1, 'viewed_date' => date('Y-m-d H:i:s'));
                $this->db->insert('MS_shortlist_viewedd_ignored', $data);
            } else {
                $data = array('viewed_status' => 1, 'shortlist_status' => 0, 'ignore_status' => 0);
                $this->db->where('from_msid', $user_id);
                $this->db->where('to_msid', $to_user_id);
                $this->db->update('MS_shortlist_viewedd_ignored', $data);
            }
        }
    }
    */
    /* view profile update */
    public function update_viewprofile_status($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query = $this->db->get();
        $result = $query->result_array();
        $count = $query->num_rows();
        if ($count == 0) {
            $data = array('from_msid' => $user_id, 'to_msid' => $to_user_id, 'viewed_status' => 1, 'viewed_date' => date('Y-m-d H:i:s'));
            $this->db->insert('MS_shortlist_viewedd_ignored', $data);
        } else {
            $data = array('viewed_status' => 1, 'shortlist_status' => 0, 'ignore_status' => 0);
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $this->db->update('MS_shortlist_viewedd_ignored', $data);
        }
    }
    /* -----------old function --------
    public function update_viewprofile_status($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query = $this->db->get();
        $result = $query->result_array();
        $count = $query->num_rows();
        if ($count == 0) {
            $this->db->select('*');
            $this->db->from('MS_shortlist_viewedd_ignored');
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $query = $this->db->get();
            $rows = $query->num_rows();
            $result = $query->result_array();
            if ($rows == 0) {
                $data = array('from_msid' => $user_id, 'to_msid' => $to_user_id, 'viewed_status' => 1, 'viewed_date' => date('Y-m-d H:i:s'));
                $this->db->insert('MS_shortlist_viewedd_ignored', $data);
            }
        }
    }      */
    /* public function recently_viewed($user_id) {
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('viewed_status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
        return $result;
    }  */
    public function shortlisted_count($user_id) {
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('shortlist_status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
        return $result;
    }

    public function getShortListForUser($user_id){
        // $this->db->select('from_msid');
        // $this->db->from('MS_shortlist_viewedd_ignored');
        // $this->db->where('to_msid', $user_id);
        // $this->db->where('shortlist_status', 1);
        // $this->db->where('read_not', 1);
        // $query = $this->db->get();
        // $rows = $query->num_rows();
        // $result = $query->result_array();
        // return $result;
        $q1 = $this->db->query("SELECT A.MS_svi_id as main_id,A.from_msid AS id, B.first_name,C.applicationphotopath as photo
                        FROM MS_shortlist_viewedd_ignored AS A
                        INNER JOIN tbl_primary_info AS B ON A.from_msid = B.id
                        LEFT JOIN MS_photos AS C ON A.from_msid = C.ms_id
                        WHERE A.to_msid = $user_id AND A.shortlist_status = 1 AND A.read_not = 1 AND B.status = 1 ORDER BY A.MS_svi_id DESC LIMIT 1");

        return json_encode($q1->result());
                   
    }
    public function ignored_count($user_id) {
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('ignore_status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
        return $result;
    }
    public function recently_viewed($user_id) {
        $this->db->select("v.*");
        $this->db->from('kv_profileview as v');
        $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
        $this->db->join('tbl_primary_info as p', 'v.kv_profileview_on = p.id', 'left');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.ms_id', 'left');
        $this->db->select('s.*');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'inner');
        $this->db->where('s.elite', 'no');
        $this->db->where('p.status', 1);
        // $this->db->where('v.viewed_status', 1);
        $this->db->where('v.kv_userfkid', $user_id);
        $this->db->where('u.ismain', 1);
        $this->db->where(' p.id not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="' . $user_id . '")');
        $this->db->where(' p.id not in(select to_msid from MS_shortlist_viewedd_ignored where from_msid="' . $user_id . '" AND shortlist_status=1)');
        $this->db->where(' p.id not in(select to_msid from MS_shortlist_viewedd_ignored where from_msid="' . $user_id . '"AND ignore_status=1)');
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->order_by('v.kv_profileview_created_date', 'DESC');
        $this->db->limit('10');
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
        return $result;
    }
    public function contact_count($user_id) {
        $this->db->select('profileowner');
        $this->db->from('ms_profilesetting');
        $this->db->where('ms_id',$user_id);
         $query = $this->db->get();
        $res= $query->row_array();
		
		$i_profile_list = array();
		$s_profile_list = array();
	    $this->db->select('to_msid');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $query = $this->db->get();
        $shortlisted_profile_result = $query->result_array();
		
		for($i=0; $i < count($shortlisted_profile_result); $i++){
		  $s_profile_list[] = $shortlisted_profile_result[$i]['to_msid'];
		}
		
		$this->db->select('kv_msi_interested_on');
        $this->db->from('kv_mysideinterests');
        $this->db->where('kv_msi_profilefkid', $user_id);
        $query = $this->db->get();
        $intersted_profile_result = $query->result_array();
		for($j=0; $j < count($intersted_profile_result); $j++){
		  $i_profile_list[] = $intersted_profile_result[$j]['kv_msi_interested_on'];
		}
		
       // echo $profileowner['profileowner'];exit;
        $this->db->select("v.*");
        $this->db->from('kv_mysideinterests as v');
        $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
        $this->db->join('tbl_primary_info as p', 'p.id=v.kv_msi_interested_on', 'left');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'v.kv_msi_interested_on=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'v.kv_msi_interested_on=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
		$this->db->join('MS_shortlist_viewedd_ignored as svi', 'p.id = svi.to_msid', 'left');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'inner');
        if($res['profileowner']=='regular')
        {
        $this->db->where('s.elite', 'no');
        }
        else if($res['profileowner']=='confidential')
        {
           // $this->db->where('s.elite', '');
        }
        $this->db->where('p.status', 1);
		if(count($s_profile_list) > 0){
		  $this->db->where_not_in('`v`.`kv_msi_interested_on`', $s_profile_list);
		}
		//$this->db->where('svi.shortlist_status', NULL);
        $this->db->group_by('v.kv_msi_interested_on');
        // 	if($fromcol=='to')
        //	$this->db->where('v.to_MSid',$user_id );
        //	else
        $this->db->where('v.kv_msi_profilefkid', $user_id);
        $this->db->where('u.ismain', 1);
        $this->db->where('kv_msi_onresstatus', 'oneside_accepted');
        $this->db->order_by('v.kv_msi_created_date', 'DESC');
        $query = $this->db->get();
		//echo $this->db->last_query();exit;
        $rows = $query->num_rows();
        $result = $query->result_array();
        return $result;
    }
    public function profile_intrest_by_count($user_id, $params=NULL) {
        $this->db->select("v.*,p.*,r.*,e.*,u.*,s.*");
        $this->db->from('kv_mysideinterests as v');
        $this->db->join('tbl_primary_info as p', 'p.id=v.kv_msi_profilefkid', 'left');
        $this->db->join('tbl_religion_info as r', 'r.user_id=p.id', 'left');
        $this->db->join('tbl_professional_info as e', 'e.user_id=p.id', 'left');
        $this->db->join('MS_photos as u', 'p.id=u.ms_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'inner');
        $this->db->select('adm.id as rm_id, adm.username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone');
        $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');
        //$this->db->where('s.elite', 'no');
        $this->db->where('p.status', 1);
        $this->db->where('v.kv_msi_interested_on', $user_id);
        $this->db->where('u.ismain', 1);
        $this->db->group_by('v.kv_msi_profilefkid');
        $this->db->where('kv_msi_onresstatus', 'oneside_accepted');
        $this->db->order_by('v.kv_msi_created_date', 'DESC');
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
			$query = $this->db->get();
            $result = $query->num_rows();; 
        }else{
			if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
				$this->db->limit($params['limit'],$params['start']); 
			}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
				$this->db->limit($params['limit']); 
			} 
			$query = $this->db->get();
			 $result = $query->result_array();
		}        
        return $result;
    }
    public function update_shortlist_status($user_id, $to_user_id,$from_rm_id,$to_rm_id) {
        //echo 'hi';exit;
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query = $this->db->get();
        $result = $query->result_array();
        $count = $query->num_rows();
        $this->db->from('MS_ViewedContacts');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query1 = $this->db->get();
        $result1 = $query->result_array();
        $count1 = $query->num_rows();
        if ($count1) {
            $data1 = array('From_MSid' => $user_id, 'to_MSid' => $to_user_id);
            $this->db->delete('MS_ViewedContacts', $data1);
        }
        if ($count == 0) {
            $data = array('from_msid' => $user_id, 'to_msid' => $to_user_id,'from_msid_rmid'=>$from_rm_id,'to_msid_rmid'=>$to_rm_id, 'shortlist_status' => 1, 'shortist_date' => date('Y-m-d H:i:s'));
            $this->db->insert('MS_shortlist_viewedd_ignored', $data);
        } else {
            $data = array('shortlist_status' => 1, 'viewed_status' => 0, 'ignore_status' => 0, 'shortist_date' => date('Y-m-d H:i:s'));
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $this->db->update('MS_shortlist_viewedd_ignored', $data);
        }
       // echo $this->db->last_query();exit;
    }
    public function update_ignored_status($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query = $this->db->get();
        $result = $query->result_array();
        $count = $query->num_rows();
        $this->mysideinterests($user_id, $to_user_id, '','reject');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query1 = $this->db->get();
        $result1 = $query->result_array();
        $count1 = $query->num_rows();
        if ($count1) {
            $data1 = array('From_MSid' => $user_id, 'to_MSid' => $to_user_id);
            $this->db->delete('MS_ViewedContacts', $data1);
        }
        if ($count == 0) {
            $data = array('from_msid' => $user_id, 'to_msid' => $to_user_id, 'ignore_status' => 1, 'ignore_date' => date('Y-m-d H:i:s'));
            $this->db->insert('MS_shortlist_viewedd_ignored', $data);
        } else {
            $data = array('ignore_status' => 1, 'viewed_status' => 0, 'shortlist_status' => 0, 'ignore_date' => date('Y-m-d H:i:s'));
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $this->db->update('MS_shortlist_viewedd_ignored', $data);
        }
    }
    /* -------------old function-----
    public function update_ignored_status($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query = $this->db->get();
        $result = $query->result_array();
        $count = $query->num_rows();
        $this->mysideinterests($user_id, $to_user_id, 'reject');
        if ($count == 0) {
            $this->db->select('*');
            $this->db->from('MS_shortlist_viewedd_ignored');
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $query = $this->db->get();
            $rows = $query->num_rows();
            $result = $query->result_array();
            if ($rows == 0) {
                $data = array('from_msid' => $user_id, 'to_msid' => $to_user_id, 'ignore_status' => 1, 'ignore_date' => date('Y-m-d H:i:s'));
                $this->db->insert('MS_shortlist_viewedd_ignored', $data);
            } else {
                $data = array('ignore_status' => 1, 'viewed_status' => 0, 'shortlist_status' => 0, 'ignore_date' => date('Y-m-d H:i:s'));
                $this->db->where('from_msid', $user_id);
                $this->db->where('to_msid', $to_user_id);
                $this->db->update('MS_shortlist_viewedd_ignored', $data);
            }
        }
    } */
    public function get_contact_list($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query = $this->db->get();
        $result = $query->result_array();
        $rows = $query->num_rows();
        return $result;
    }
    public function notinerest_update($user_id, $to_user_id) {
        $array = array("kv_ni_userid" => $user_id, "kv_ni_touserid" => $to_user_id, "kv_ni_created_by" => $user_id, "kv_ni_created_date" => date('Y-m-d H:i:s'));
        $this->db->insert('kv_notinterested', $array);
        return true;
    }
    public function profileviewed($user_id, $to_user_id) {
        $this->db->delete('kv_profileview', array('kv_userfkid' => $user_id, 'kv_profileview_on' => $to_user_id));
        $array = array('kv_userfkid' => $user_id, 'kv_profileview_on' => $to_user_id, 'kv_profileview_created_date' => date('Y-m-d H:i:s'));
        $this->db->insert('kv_profileview', $array);
        return true;
    }
    public function bookmark($user_id, $to_user_id) {
        $this->db->delete('kv_bookmark', array('kv_userfkid' => $user_id, 'kv_bookmark_on' => $to_user_id));
        $array = array('kv_userfkid' => $user_id, 'kv_bookmark_on' => $to_user_id, 'kv_bookmark_created_date' => date('Y-m-d H:i:s'));
        $this->db->insert('kv_bookmark', $array);
        return true;
    }
    public function checkProfileViewed($getFromId, $getToId) {
        $condition = '(from_msID=' . $getFromId . ' AND to_msID=' . $getToId . ' AND f_status=1 ) OR (from_msID=' . $getToId . ' AND to_msID=' . $getFromId . ' AND t_status=1)';
        $this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where($condition);
        $result = $this->db->get()->row_array();
        return $result;
    }
    public function checkProfileInterested($getFromId, $getToId) {
        $condition = '(from_msID=' . $getFromId . ' AND to_msID=' . $getToId . ' AND f_status >1 ) OR (from_msID=' . $getToId . ' AND to_msID=' . $getFromId . ' AND t_status > 1)';
        $this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where($condition);
        $result = $this->db->get()->num_rows();
        return $result;
    }
    public function getOnesideMsServiceListPkId($getFromId, $getToId) {
        $condition = '(from_msID=' . $getFromId . ' AND to_msID=' . $getToId . ' ) OR (from_msID=' . $getToId . ' AND to_msID=' . $getFromId . ' )';
        $this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where($condition);
        $result = $this->db->get()->num_rows();
        return $result;
    }
    public function getBothsideMsServiceListPkId($tikcetId) {
        $this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where('t_ticketid = "' . $tikcetId . '"');
        $query = $this->db->get();
        $record = $query->num_rows();
        return $record;
    }
    public function getMsServiceListPkId($tikcetId) {
        $this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where('f_ticketid = "' . $tikcetId . '" OR t_ticketid = "' . $tikcetId . '"');
        $query = $this->db->get();
        $record = $query->row_array();
        //echo $this->db->last_query();
        if (empty($record)) {
            return "";
        } else {
            return $record["id"];
        }
    }
    public function mysideinterests($user_id, $to_user_id, $serviceListPkId = NULL, $reject = NULL, $createdBy = NULL) {
        $array = $user_id . ',' . $to_user_id;
        //check already exist record
        $this->db->select('*');
        $this->db->from('kv_mysideinterests');
        $this->db->where('(kv_msi_profilefkid = "' . $user_id . '" AND kv_msi_interested_on = "' . $to_user_id . '") OR (kv_msi_profilefkid = "' . $to_user_id . '" AND kv_msi_interested_on = "' . $user_id . '")');
        $getexisting = $this->db->get()->row();
        //$getexisting=$this->db->get_where('kv_mysideinterests',array('kv_msi_profilefkid'=>$to_user_id,'kv_msi_interested_on'=>$user_id))->row();
        //$getExistingSame = $this->db->get_where('kv_mysideinterests',array('kv_msi_profilefkid'=>$user_id,'kv_msi_interested_on'=>$to_user_id))->row();
        //print_r($getExistingSame);
        //print_r($getexisting);exit;
        $modid = '';
        $moddate = '0000-00-00 00:00:00';
        $accepted = ($reject) ? $reject : 'oneside_accepted';
        if ($getexisting) {
            $accepted = ($reject) ? $reject : 'accepted';
            $modid = $user_id;
            $moddate = date('Y-m-d H:i:s');
        }
        if ($getexisting) {
            $array = array("servicelistPkId" => $serviceListPkId, "kv_msi_modified_by" => ($createdBy > 0) ? $createdBy : $modid, "kv_msi_modified_date" => $moddate, "kv_msi_onresstatus" => $accepted);
            $this->db->where(array('kv_msi_id' => $getexisting->kv_msi_id));
            $this->db->update('kv_mysideinterests', $array);
        } else {
            $touerid_det = getprofilesettingsrm($to_user_id);
            $fromuerid_det = getprofilesettingsrm($user_id);
            $array = array("servicelistPkId" => $serviceListPkId, "kv_msi_profilefkid" => $user_id, "kv_msi_interested_on" => $to_user_id, "kv_msi_client_rmid" => $fromuerid_det[0]->profileowner, "kv_msi_interested_rmid" => $touerid_det[0]->profileowner, "kv_msi_created_by" => ($createdBy > 0) ? $createdBy : $user_id, "kv_msi_created_date" => date('Y-m-d H:i:s'), "kv_msi_modified_by" => "", "kv_msi_status" => 'sentinterested', "kv_msi_onresstatus" => $accepted);
            $this->db->insert('kv_mysideinterests', $array);
        }
        return true;
    }
    public function update_interested_status($ticket) {
        $this->db->set("f_status", 2);
        $this->db->where("f_ticketid", $ticket);
        $res = $this->db->update('ms_servicelist');
        $this->db->set("t_status", 2);
        $this->db->where("t_ticketid", $ticket);
        $res1 = $this->db->update('ms_servicelist');
        if ($res) {
            return $res;
        } else {
            return $res1;
        }
    }
    public function update_contact_list($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('From_MSid', $user_id);
        $this->db->where('to_MSid', $to_user_id);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
        $ticketid = base64_encode($user_id . "/" . $to_user_id . "-" . $user_id);
        $ticketidto = base64_encode($to_user_id . "/" . $user_id . "-" . $to_user_id);
        $this->db->delete('ms_servicelist', array("f_ticketid" => $ticketid));
        $array_sl = array("from_msID" => $user_id, "f_ticketid" => $ticketid, "f_status" => 1, "fs_Date" => date('Y-m-d H:i:s'), "to_msID" => $to_user_id, "t_ticketid" => $ticketidto, "t_status" => 1, "ts_Date" => date('Y-m-d H:i:s'), "sentby_ID" => $user_id, "send_Date" => date('Y-m-d H:i:s'), "revsend_Date" => date('Y-m-d H:i:s'), "rev_sent" => 1, "sentprofile_full" => '');
        $this->db->insert('ms_servicelist', $array_sl);
        if ($rows == 0) {
            $data = array('From_MSid' => $user_id, 'to_MSid' => $to_user_id, 'Contact_Vieweddate' => date('Y-m-d H:i:s'));
            $this->db->insert('MS_ViewedContacts', $data);
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $this->db->delete('MS_shortlist_viewedd_ignored');
            $this->db->select('*');
            $this->db->from('MS_ViewedContacts');
            $this->db->where('From_MSid', $user_id);
            $query1 = $this->db->get();
            $rows = $query1->num_rows();
            $result1 = $query1->result_array();
            $this->db->select('*');
            $this->db->from('tbl_payments_log');
            $this->db->where('user_id', $user_id);
            $this->db->order_by("paymentlog_id", "desc");
            $this->db->limit('1');
            $query = $this->db->get()->result_array();
            $latest_record = $query[0]['paymentlog_id'];
            $data = array('used_contacts' => $rows);
            $this->db->where('user_id', $user_id);
            $this->db->where('paymentlog_id', $latest_record);
            $this->db->update('tbl_payments_log', $data);
        }
    }
    public function view_short_ignore($user_id) {
        $this->db->distinct();
        $this->db->select('to_msid');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function contact($user_id) {
        $this->db->distinct();
        $this->db->select('to_MSid');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('From_MSid', $user_id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function get_contact_info_oppoProfile($to_user_id) {
        $this->db->select('id, email, mobile, first_name');
        $this->db->from('tbl_primary_info');
        $this->db->where('id', $to_user_id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }
    public function get_OurProfile_info($user_id) {
        $this->db->select('profile_id, first_name, last_name');
        $this->db->from('tbl_primary_info');
        $this->db->where('id', $user_id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }
    public function get_ToProfile_detailsForMail($TProfileId) {
        // print_r($proArr);exit();
        $this->db->select('tbl_primary_info.*, tbl_religion_info.star, tbl_religion_info.raasi, tbl_religion_info.height, tbl_professional_info.heighst_education, tbl_professional_info.occupation, tbl_professional_info.annual_income, tbl_professional_info.country, tbl_professional_info.city, tbl_professional_info.state, tbl_professional_info.education_degree, tbl_parents_info.fathers_father_native_place, tbl_parents_info.mothers_father_native_place, ms_property_info.property_value');
        $this->db->from('tbl_primary_info');
        $this->db->join('tbl_religion_info', 'tbl_religion_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('tbl_professional_info', 'tbl_professional_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('tbl_parents_info', 'tbl_parents_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('ms_property_info', 'ms_property_info.ms_id = tbl_primary_info.id', 'left');
        $this->db->where('tbl_primary_info.profile_id', $TProfileId);
        $result = $this->db->get()->row_array();
        // echo $this->db->last_query();
        return $result;
    }
    public function get_FromRevSendProfile_details($user_id) {
        $this->db->select('tbl_primary_info.*, tbl_religion_info.star, tbl_religion_info.raasi, tbl_religion_info.height, tbl_professional_info.heighst_education, tbl_professional_info.occupation, tbl_professional_info.annual_income, tbl_professional_info.country, tbl_professional_info.city, tbl_professional_info.state, tbl_professional_info.education_degree, tbl_parents_info.fathers_father_native_place, tbl_parents_info.mothers_father_native_place, ms_property_info.property_value');
        $this->db->from('tbl_primary_info');
        $this->db->join('tbl_religion_info', 'tbl_religion_info.user_id = tbl_primary_info.id', 'LEFT');
        $this->db->join('tbl_professional_info', 'tbl_professional_info.user_id = tbl_primary_info.id', 'LEFT');
        $this->db->join('tbl_parents_info', 'tbl_parents_info.user_id = tbl_primary_info.id', 'LEFT');
        $this->db->join('ms_property_info', 'ms_property_info.ms_id = tbl_primary_info.id', 'LEFT');
        $this->db->where('tbl_primary_info.id', $user_id);
        $result = $this->db->get()->row_array();
        // print_r($result);exit();
        return $result;
    }
    public function get_FromPImage_details($ID) {
        $this->db->select('applicationphotopath');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $ID);
        $this->db->where('ismain', 1);
        $this->db->where('isactive', 1);
        $result = $this->db->get()->row_array();
        // print_r($result);exit();
        return $result;
    }
    public function get_ToPImage_details($ID) {
        $this->db->select('applicationphotopath');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $ID);
        $this->db->where('ismain', 1);
        $this->db->where('isactive', 1);
        $result = $this->db->get()->row_array();
        // print_r($result);exit();
        return $result;
    }
    public function expressInterestInsert($dataArr) {
        $condition = '(from_msID=' . $dataArr['from_msID'] . ' AND to_msID=' . $dataArr['to_msID'] . ' ) OR (from_msID=' . $dataArr['to_msID'] . ' AND to_msID=' . $dataArr['from_msID'] . ' )';
        $this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where($condition);
        $result = $this->db->get()->row_array();
        // print_r($result);exit();
        if (empty($result)) {
            $res1 = $this->db->insert('ms_servicelist', $dataArr);
            return $res1;
        } else {
            $upArr = array('sentby_ID' => $this->session->userdata('user_id'), 'send_Date' => date('Y-m-d'), 'revsend_Date' => date('Y-m-d'), 'rev_sent' => 1);
            $this->db->where($condition);
            $res2 = $this->db->update('ms_servicelist', $upArr);
            return $res2;
        }
    }
    public function get_daily_click_count($user_id) {
        $curDT = date('Y-m-d');
        $this->db->select("serviceDateTime, serviceClickCount");
        $this->db->from("tbl_primary_info");
        $this->db->where("id", $user_id);
        $this->db->where("serviceDateTime", $curDT);
        $result = $this->db->get()->row_array();
        return $result;
    }
    public function expressInterestCountInsert($id) {
        // echo $id;
        $curDT = date('Y-m-d');
        $this->db->select("serviceDateTime, serviceClickCount");
        $this->db->from("tbl_primary_info");
        $this->db->where("id", $id);
        $this->db->where("serviceDateTime", $curDT);
        $result = $this->db->get()->row_array();
        // print_r($result);
        if (empty($result)) {
            $dataArr = array('serviceDateTime' => date('Y-m-d'), 'serviceClickCount' => 1);
            $this->db->where('id', $id);
            $res2 = $this->db->update('tbl_primary_info', $dataArr);
        } else if ($result['serviceDateTime'] == $curDT) {
            $addCount = $result['serviceClickCount'] + 1;
            $dataArr = array('serviceClickCount' => $addCount,);
            $this->db->where('id', $id);
            $res2 = $this->db->update('tbl_primary_info', $dataArr);
        }
        return $res2;
    }
    public function insert_payment_info($paymentInfo) {
        $this->db->insert('tbl_payments_info', $paymentInfo);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function insert_payment_log($paymentLog, $user_id) {
        $res = $this->db->insert('tbl_payments_log', $paymentLog);
        if ($res) {
            $this->db->set('payment_status', "paid");
            $this->db->where('ms_id', $user_id);
            $this->db->update('ms_profilesetting');
        }
        return $res;
    }
    public function customersideinterests($user_id, $to_user_id, $reject = NULL, $createdBy = NULL) {
        $condition = '(from_msID=' . $user_id . ' AND to_msID=' . $to_user_id . ' ) OR (from_msID=' . $to_user_id . ' AND to_msID=' . $user_id . ' )';
        $condition1 = '(from_msID=' . $user_id . ' AND to_msID=' . $to_user_id . ')';
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where($condition1);
        $result1 = $this->db->get()->row_array();
        if (!empty($result1)) {
            $data1 = array('From_MSid' => $user_id, 'to_MSid' => $to_user_id);
            $this->db->delete('MS_shortlist_viewedd_ignored', $data1);
        }
        $this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where($condition);
        $result = $this->db->get()->row_array();
        $serviceListPkId = "";
        // print_r($result);exit();
        if (empty($result)) {
            $dataArr = array('from_msID' => $user_id, 'f_ticketid' => base64_encode($to_user_id . "/" . $user_id . "-" . $to_user_id), 'f_status' => 1, 'fs_Date' => date('Y-m-d'), 'to_msID' => $to_user_id, 'sentby_ID' => $this->session->userdata('user_id'), 'send_Date' => date('Y-m-d'), 'sentprofile_full' => '', 'rev_sent' => 0, 'share_type' => 'online');
            $res1 = $this->db->insert('ms_servicelist', $dataArr);
            $serviceListPkId = $res1;
        } else {
            $dataArr = array('t_ticketid' => base64_encode($user_id . "/" . $to_user_id . "-" . $user_id), 'revsend_Date' => date('Y-m-d H:i:s'), 'rev_sent' => 1);
            $this->db->where($condition);
            $res2 = $this->db->update('ms_servicelist', $dataArr);
            $serviceListPkId = $result[0]["id"];
        }
        $array = $user_id . ',' . $to_user_id;
        //check already exist record
        $this->db->select('*');
        $this->db->from('kv_mysideinterests');
        $this->db->where('(kv_msi_profilefkid = "' . $user_id . '" AND kv_msi_interested_on = "' . $to_user_id . '") OR (kv_msi_profilefkid = "' . $to_user_id . '" AND kv_msi_interested_on = "' . $user_id . '")');
        $getexisting = $this->db->get()->row();
        //$getexisting=$this->db->get_where('kv_mysideinterests',array('kv_msi_profilefkid'=>$to_user_id,'kv_msi_interested_on'=>$user_id))->row();
        //$getExistingSame = $this->db->get_where('kv_mysideinterests',array('kv_msi_profilefkid'=>$user_id,'kv_msi_interested_on'=>$to_user_id))->row();
        //print_r($getExistingSame);
        //print_r($getexisting);exit;
        $modid = '';
        $moddate = '0000-00-00 00:00:00';
        $accepted = ($reject) ? $reject : 'oneside_accepted';
        if ($getexisting) {
            $accepted = ($reject) ? $reject : 'accepted';
            $modid = $user_id;
            $moddate = date('Y-m-d H:i:s');
        }
        if ($getexisting) {
            $array = array("servicelistPkId" => $serviceListPkId, "kv_msi_modified_by" => ($createdBy > 0) ? $createdBy : $modid, "kv_msi_modified_date" => $moddate, "kv_msi_onresstatus" => $accepted);
            $this->db->where(array('kv_msi_id' => $getexisting->kv_msi_id));
            $this->db->update('kv_mysideinterests', $array);
        } else {
            $touerid_det = getprofilesettingsrm($to_user_id);
            $fromuerid_det = getprofilesettingsrm($user_id);
            $ticketid = base64_encode($user_id . "/" . $to_user_id . "-" . $user_id);
            $ticketidto = base64_encode($to_user_id . "/" . $user_id . "-" . $to_user_id);
            $array_sl = array("from_msID" => $user_id, "f_ticketid" => $ticketid, "f_status" => 1, "fs_Date" => date('Y-m-d H:i:s'), "to_msID" => $to_user_id, "t_ticketid" => $ticketidto, "t_status" => 1, "ts_Date" => date('Y-m-d H:i:s'), "sentby_ID" => $user_id, "send_Date" => date('Y-m-d H:i:s'), "revsend_Date" => date('Y-m-d H:i:s'), "rev_sent" => 1, "sentprofile_full" => '');
            $this->db->insert('ms_servicelist', $array_sl);
            $serviceListPkId = $this->db->insert_id();
            $array = array("servicelistPkId" => $serviceListPkId, "kv_msi_profilefkid" => $user_id, "kv_msi_interested_on" => $to_user_id, "kv_msi_client_rmid" => $fromuerid_det[0]->profileowner, "kv_msi_interested_rmid" => $touerid_det[0]->profileowner, "kv_msi_created_by" => ($createdBy > 0) ? $createdBy : $user_id, "kv_msi_created_date" => date('Y-m-d H:i:s'), "kv_msi_modified_by" => "", "kv_msi_status" => 'sentinterested', "kv_msi_onresstatus" => $accepted);
            $this->db->insert('kv_mysideinterests', $array);
        }
		//echo $this->db->last_query();exit;
        return true;
    }
    public function getCustomerIntrestedProfileList($user_id) {
        $this->db->select('*');
        $this->db->from('kv_mysideinterests');
        $this->db->where('kv_msi_profilefkid', $user_id);
		$query = $this->db->get();
        $result = $query->result_array();
    }
    public function getProfilesViewedByUser($user_id, $params = array()) {
        //echo 'hi';
       // print_r($params);//exit;	    
		$i_profile_list = array();
		$s_profile_list = array();
	    $this->db->select('to_msid');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $query = $this->db->get();
        $shortlisted_profile_result = $query->result_array();
		
		for($i=0; $i < count($shortlisted_profile_result); $i++){
		  $s_profile_list[] = $shortlisted_profile_result[$i]['to_msid'];
		}
		
		$this->db->select('kv_msi_interested_on');
        $this->db->from('kv_mysideinterests');
        $this->db->where('kv_msi_profilefkid', $user_id);
        $query = $this->db->get();
        $intersted_profile_result = $query->result_array();
		for($j=0; $j < count($intersted_profile_result); $j++){
		  $i_profile_list[] = $intersted_profile_result[$j]['kv_msi_interested_on'];
		}
		
        $this->db->select('kv_profileview_on');
        $this->db->from('kv_profileview as v');
		$this->db->select("DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.*");
		$this->db->join('tbl_primary_info as p', 'p.id=v.kv_profileview_on', 'left');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.gothram,r.star,r.raasi');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.city');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');	
		$this->db->select('powner.profileowner');
        $this->db->join('ms_profilesetting as powner', 'p.id = powner.ms_id', 'left');	
		$this->db->select('adm.id as rm_id, adm.username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone');
        $this->db->join('tbl_admin_data as adm', 'powner.profileowner = adm.id', 'left');	
		$this->db->select('svi.shortlist_status,svi.ignore_status');
        $this->db->join('MS_shortlist_viewedd_ignored as svi', 'p.id = svi.to_msid', 'left');	
		$this->db->select('msi.kv_msi_onresstatus');
		$this->db->join('kv_mysideinterests as msi','p.id = msi.kv_msi_interested_on','left');
        $this->db->where('kv_userfkid', $user_id);
		$this->db->where('p.status', 1);
		if(count($s_profile_list) > 0){
		  $this->db->where_not_in('v.kv_profileview_on', $s_profile_list);
		}
		
		if(count($i_profile_list) > 0){
		  $this->db->where_not_in('v.kv_profileview_on', $i_profile_list);
		}
		//$this->db->where('p.id NOT IN (select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="'.$user_id.'")',NULL,FALSE);
		$this->db->order_by('kv_profileview_id','DESC');
		$this->db->group_by('kv_profileview_on');
		if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
			
			$query = $this->db->get();
	//	echo $this->db->last_query();exit;
           $result = $query->num_rows();
        }else{
			if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
			   // echo 'hi';
			   if($params['start']!=0){
			   $start=$params['start']-1;
				$this->db->limit($params['limit'],$start*10); }
				else{
				    	$this->db->limit($params['limit'],$start);
				}
			}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
				$this->db->limit($params['limit']); 
			} 
			$query = $this->db->get();
		//	echo $this->db->last_query();exit;
			 $result = $query->result_array();
		}        
		
		
        return $result;
    }
    public function getIgnoreProfiles($user_id) {
        $this->db->select('to_msid');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('ignore_status', '1');
        $query = $this->db->get();
        //echo $this->db->last_query();exit;
        $result = $query->result_array();
        return $result;
    }
    public function getShortListProfiles($user_id) {
        $this->db->select('to_msid');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('shortlist_status', '1');
        $query = $this->db->get();
        //echo $this->db->last_query();exit;
        $result = $query->result_array();
        return $result;
    }
    public function getallAges() {
        $this->db->select('age,status');
        $this->db->from('tbl_ages');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
		
	public function getCustomerPaymentStatistics($user_id)
	{	
			//echo 'hi';
			$this->db->select('ms.payment_status,ms.login_count,p.registered_on,a.paid_date,l.login_date_time,l.notification_id');
			$this->db->from('tbl_primary_info as p');
			$this->db->join('ms_profilesetting as ms','p.id = ms.ms_id','left');
			$this->db->join('tbl_payments_info as a', 'p.id = a.user_id','left');
			$this->db->join('customer_login_notification as l', 'p.id = l.user_id','left');
			$this->db->where('p.id',$user_id);
			$this->db->order_by('l.notification_id','desc');
			$this->db->limit(1);
			$query = $this->db->get();
			//echo $this->db->last_query();exit;
			//echo "<pre>";print_r($this->db->last_query());exit;
			$result = $query->row_array();
			return $result;
	
	}
	
	 public function getSuggestedProfilesByRm($rm_id,$arr1, $arr2, $arr3,$params=NULL) {
        
		$user_id = $this->session->userdata('user_id');
     
        $this->db->select("rm.*,p.gender,p.id,p.status,p.age,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.dob,p.living_in,p.profile_id,p.first_name,p.last_name,s.ms_usertype, s.profileowner, adm.id as rm_id, adm.username as rm_username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone");
        $this->db->from('ms_servicelist as rm');
		$this->db->join('tbl_primary_info as p','rm.to_msID = p.id','left');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.gothram,r.star,r.raasi');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        
        /*$this->db->select('r1.setteld_id');
        $this->db->join('tbl_settled_deleted_info as r1', 'p.id=r1.user_id', 'left');
        $this->db->where_not_in('r1.user_id', $user_id);*/
        
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.city');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath,pr.property_value');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'inner');
        $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');
        $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        
		$this->db->where('sentby_ID', $rm_id);
		$this->db->where('rm.from_msID', $user_id);
		// $this->db->where_in('share_type',array('email','whatsapp'));
        //echo $primary_details['p_age_to'];exit;
        $this->db->where(' p.id not in(select kv_ni_touserid from kv_notinterested where kv_ni_userid="' . $user_id . '")');
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->where_not_in('p.id', $arr3);
        $this->db->group_by('p.id');
        
        // $this->db->where('p.status =',1);
        $this->db->where('p.status !=',3);
        $this->db->where('p.status !=',2);
        
        $this->db->order_by('rm.send_Date', 'DESC');
		
      if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
			$query = $this->db->get();
		     $result = $query->num_rows();; 
        }else{
			if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
				$this->db->limit($params['limit'],$params['start']); 
			}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
				$this->db->limit($params['limit']); 
			} 
			$query = $this->db->get();
			// echo $this->db->last_query();exit;
            $result = $query->result_array();
		}  
        return $result;
    }
	
	public function getConfidentialProfilesForRegular($arr1, $arr2, $arr3) {
        $user_id = $this->session->userdata('user_id');
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age,dob');
        $this->db->from('tbl_primary_info as p');
        $this->db->select('s.ms_usertype');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'left');
        $this->db->select('pp.*');
        $this->db->join('tbl_partner_preferences as pp', 'p.id=pp.ms_id', 'left');
        $this->db->where('p.id', $user_id);
        $primary_details = $this->db->get()->row_array();
        //print_r($primary_details);exit;
        $this->db->select('caste,height,marital_status');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id', $user_id);
        $religion_details = $this->db->get()->row_array();
       
        $usertype = $primary_details["ms_usertype"];
        $caste = $religion_details['caste'];
        $height = $religion_details['height'];
        $marital_status = $religion_details['marital_status'];
        $gender = $primary_details['gender'];
        $living_in = $primary_details['living_in'];
        $age = $primary_details['age'];
        $dob = $primary_details['dob'];
		 
        $this->db->select("p.gender,p.id,p.status,p.age,p.dob,p.living_in,p.profile_id,p.first_name,p.last_name,s.ms_usertype");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'inner');
        $this->db->where('p.status', 1);
        $this->db->where('s.elite', 'no');

        $this->db->where('p.id !=', $user_id);
        //echo $primary_details['p_age_to'];exit;
        if ($gender == 'male') {
            if (isset($primary_details['p_age_to']) && !empty($primary_details['p_age_to'])) {
                $from_dob = date('Y-m-d', strtotime($dob . ' + ' . $primary_details['p_age_to'] . ' years'));
            } else {
                $from_dob = date('Y-m-d', strtotime($dob . ' + 4 years'));
            }
            $this->db->where('p.dob <=', $from_dob);
            if (isset($primary_details['p_age_from']) && !empty($primary_details['p_age_from'])) {
                $to_dob = date('Y-m-d', strtotime($dob . ' + ' . $primary_details['p_age_from'] . ' years'));
            } else {
                $to_dob = $dob;
            }
            $this->db->where('p.dob >=', $to_dob);
        }
        if ($gender == 'female') {
            if (isset($primary_details['p_age_to']) && !empty($primary_details['p_age_to'])) {
                $from_dob = date('Y-m-d', strtotime($dob . ' - ' . $primary_details['p_age_to'] . ' years'));
            } else {
                $from_dob = $dob;
            }
            $this->db->where('p.dob <=', $from_dob);
            if (isset($primary_details['p_age_from']) && !empty($primary_details['p_age_from'])) {
                $to_dob = date('Y-m-d', strtotime($dob . ' - ' . $primary_details['p_age_from'] . ' years'));
            } else {
                $to_dob = date('Y-m-d', strtotime($dob . ' - 4 years'));
            }
            $this->db->where('p.dob >=', $to_dob);
        }
        $this->db->where('r.caste =', $caste);
        if ($gender == 'male' && $height != "") {
            $this->db->where('r.height <=', $height);
        } else if ($gender == 'female') {
            $this->db->where('r.height >=', $height);
        }
		$this->db->where('s.ms_usertype',"confidential");
        $this->db->where(' p.id not in(select kv_ni_touserid from kv_notinterested where kv_ni_userid="' . $user_id . '") and r.marital_status =', $marital_status);
        $this->db->where('p.gender !=', $gender);
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->where_not_in('p.id', $arr3);
        $this->db->where('s.profileowner > 0');
        $this->db->group_by('p.id');
        $this->db->order_by('registered_on', 'DESC');
        $query = $this->db->get();
        $result = $query->result_array();
      // echo $this->db->last_query();exit;
        return $result;
    }
   	
	public function shortlistedProfilesByUser($user_id, $arr1, $arr2) {
   
		$this->db->select("ms.*");
        $this->db->from('MS_shortlist_viewedd_ignored as ms');
        $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
        $this->db->join('tbl_primary_info as p', 'ms.to_msid = p.id', 'left');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.ms_id', 'left');
        $this->db->select('s.*');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'inner');
        //$this->db->where('s.elite', 'no');
        $this->db->where('p.status', 1);
        // $this->db->where('v.viewed_status', 1);
        $this->db->where('ms.from_msid', $user_id);
        $this->db->where('ms.shortlist_status', 1);
        $this->db->where('u.ismain', 1);
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->group_by('p.id');
        $this->db->order_by('ms.viewed_date', 'DESC');
        $query = $this->db->get();
       // echo $this->db->last_query();exit;
        $result = $query->result_array();
        return $result;
    }

    public function getRmId($id)
    {
        $this->db->select('profileowner');
        $this->db->from('ms_profilesetting');
        $this->db->where('ms_id',$id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['profileowner'];
    }
    public function getDailySystemSuggestedProfiles($arr1,$arr2,$arr3,$arr4){
         
   $user_id = $this->session->userdata('user_id');
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age,dob');
        $this->db->from('tbl_primary_info as p');
        $this->db->select('s.ms_usertype');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'left');
        $this->db->select('pp.*');
        $this->db->join('tbl_partner_preferences as pp', 'p.id = pp.ms_id', 'left');
        $this->db->where('p.id', $user_id);
        $primary_details = $this->db->get()->row_array();
   //print_r($primary_details);exit;
        $this->db->select('caste,height,height_cm,marital_status');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id', $user_id);
        $religion_details = $this->db->get()->row_array();
       
        $usertype = $primary_details["ms_usertype"];
        $caste = $religion_details['caste'];
        $height = $religion_details['height'];
        $height_cm = $religion_details['height_cm'];
        $marital_status = $primary_details['p_marital_status'];
        $gender = $primary_details['gender'];
        $living_in = $primary_details['living_in'];
        $age = $primary_details['age'];
        $dob = $primary_details['dob'];
		 
        $this->db->select("p.gender,p.id,p.email,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.dob,p.living_in,p.profile_id,p.first_name,p.last_name,s.ms_usertypes.profileowner");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'left');
        $this->db->select('adm.id as rm_id, adm.username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone');
        $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');
        $this->db->where('p.status', 1);
        
        //Regular user -> show regular profiles and property less than 2 crores
        //Confindential -> Show regular and confidentials profiles
        //$this->db->where('s.elite', 'no');
        $this->db->where('p.id !=', $user_id);
        //echo $primary_details['p_age_to'];exit;
        if ($gender == 'male') {
            if (isset($primary_details['p_age_to']) && !empty($primary_details['p_age_to'])) {
                $from_dob = date('Y-m-d', strtotime($dob . ' + ' . $primary_details['p_age_to'] . ' years'));
            } else {
                $from_dob = date('Y-m-d', strtotime($dob . ' + 8 years'));
            }
            $this->db->where('p.dob <=', $from_dob);
            if (isset($primary_details['p_age_from']) && !empty($primary_details['p_age_from'])) {
                $to_dob = date('Y-m-d', strtotime($dob . ' + ' . $primary_details['p_age_from'] . ' years'));
            } else {
                $to_dob = $dob;
            }
            $this->db->where('p.dob >=', $to_dob);
        }
        if ($gender == 'female') {
            if (isset($primary_details['p_age_to']) && !empty($primary_details['p_age_to'])) {
                $from_dob = date('Y-m-d', strtotime($dob . ' - ' . $primary_details['p_age_to'] . ' years'));
            } else {
                $from_dob = $dob;
            }
            $this->db->where('p.dob <=', $from_dob);
            if (isset($primary_details['p_age_from']) && !empty($primary_details['p_age_from'])) {
                $to_dob = date('Y-m-d', strtotime($dob . ' - ' . $primary_details['p_age_from'] . ' years'));
            } else {
                $to_dob = date('Y-m-d', strtotime($dob . ' - 8 years'));
            }
            $this->db->where('p.dob >=', $to_dob);
        }
        $this->db->where('r.caste =', $caste);
        if ($gender == 'male' && $height != "") {
            $this->db->where('r.height_cm <=', $height_cm);
        } else if ($gender == 'female') {
            $this->db->where('r.height_cm >=', $height_cm);
        }
    /*    $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        if ($gender == 'male') {
            if ($usertype == "regular") {
                $this->db->where('pr.property_value!=', '');
                $this->db->where('pr.property_value<=', 3);
            }
            if ($usertype == "confidential") {
                $this->db->where('pr.property_value>=', 3);
                $this->db->where('pr.property_value<=', 6);
            }
        }
        if ($gender == 'female') {
            if ($usertype == "regular") {
                $this->db->where('pr.property_value!=', '');
                $this->db->where('pr.property_value<=', 6);
            }
            if ($usertype == "confidential") {
                $this->db->where('pr.property_value>=', 5);
                $this->db->where('pr.property_value<=', 10);ms_usertype
            }
        }  */
		 if ($usertype == "regular") {
				
                $this->db->where('s.ms_usertype',$usertype);
                $this->db->where('s.elite', 'no');
            }
           else if ($usertype == "confidential") {
				$type=array("regular","confidential");
                $this->db->where_in('s.ms_usertype',$type);
               
            }
        


        //id not in(select kv_ni_touserid from kv_notinterested where kv_ni_userid="'.$user_id.'") and
        $this->db->where(' p.id not in(select kv_ni_touserid from kv_notinterested where kv_ni_userid="' . $user_id . '") and r.marital_status =', $marital_status);
        $this->db->where('p.gender !=', $gender);
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->where_not_in('p.id', $arr3);
        $this->db->where_not_in('p.id', $arr4);
        $this->db->group_by('p.id');
        $this->db->order_by('registered_on', 'DESC');
        $this->db->limit(1);
			$query = $this->db->get();
			 $result = $query->result_array();
	       
		//print_r($result);exit;
       //  echo $this->db->last_query();exit;
        return $result;
   

    }
     public function getEmailTosendProfile($FProfileId)
    {
        $this->db->select('email,first_name,last_name, id, gender');
        $this->db->from('tbl_primary_info');
        $this->db->where('profile_id', $FProfileId);
        $this->db->where('status', 1);
        $result = $this->db->get()->row_array();
		//print_r($result);
       // echo $this->db->last_query();
        return $result;
    }
    
    public function get_ToProfile_detailsForMailFromSearch($pid)
    {
       // $proArr = implode(",",$arr);
        $this->db->select('tbl_primary_info.*, tbl_religion_info.star, tbl_religion_info.raasi, tbl_religion_info.height, tbl_professional_info.heighst_education, tbl_professional_info.occupation, tbl_professional_info.annual_income, tbl_professional_info.country, tbl_professional_info.city, tbl_professional_info.state, tbl_professional_info.education_degree, tbl_parents_info.fathers_father_native_place, tbl_parents_info.mothers_father_native_place, ms_property_info.property_value');
        $this->db->from('tbl_primary_info');
        $this->db->join('tbl_religion_info', 'tbl_religion_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('tbl_professional_info', 'tbl_professional_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('tbl_parents_info', 'tbl_parents_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('ms_property_info', 'ms_property_info.ms_id = tbl_primary_info.id', 'left');
      //  $this->db->where('tbl_primary_info.id IN ('.$proArr.')');
		//$this->db->group_by('tbl_primary_info.id');
        $this->db->where('tbl_primary_info.profile_id',$pid);
		$result = $this->db->get()->row_array();
        //echo $this->db->last_query();
        return $result;
    }
    	public function getDailySystemSuggestedProfilesEmail($data) {
		$resp = [];
		$sendprofile = "";
		$IsrevSend = '';		
        $emailstr = '';
        $shareProfileIds = ''; 
		$bothsideSelectedProfileFlag = 0;
		if(count($bothsideSelectedProfile) > 0 && $IsrevSend == 0) {
			$bothsideSelectedProfileFlag = 1;
		}		

        $date = date('Y-m-d');
        $Curdate = date("F d, Y", strtotime($date));       
        $shareToData = $this->getEmailTosendProfile($data['profile_id']);
        $shareToData['email'] = $this->encrypt_model->decryptField($shareToData['email']);       
		if (empty($shareToData)) {
			$resp["status"] = "error";
			$resp["message"] = "Please enter valid profile Id";
			return $resp;
		}
		
        if (!empty($shareToData)) {
			//print_r($shareProfiles);
            $shareProfilesData = $this->get_ToProfile_detailsForMailFromSearch($data['profile_id']);
			if ($shareProfilesData) {
				$names = [];
					 if($shareProfilesData["gender"] == $shareToData["gender"]) {
						 array_push($names, $shareProfilesData["first_name"]);
					 }
				
				if(count($names) > 0) {
					$resp["status"] = "error";
					$resp["message"] = "'".implode(", ", $names)."' gender is same as '".$shareToData["first_name"]."'. Please check.";
					return $resp;
				}
			}
			             
             
            $edutable="";
            $mailBody = '<div style="padding:0 10px;">
						<h3>Dear '.$shareToData["first_name"]." ".$shareToData["last_name"].'</h3>
						<p style="font-size: 18px; line-height:24px;text-align: left;">Below are suggested matches from kammavaari.com</p>
						</div>';
            $userid='';
            foreach ($shareProfilesData as $row) {
                $fulldata='';
                if ($sendprofile=='mms') {
                    $fulldata='<p>Phone: '.$row['mobile'].'</p><p>Email: '.$row['email'].'</p>';
                }
                $image = $this->get_ToPImage_details($row['id']);
                if ($image == null) {
                    $IMG = base_url()."/assets/img/img_avatar.png";
                } else {
                    $IMG = $image['applicationphotopath'];
                } 
                $url = base64_encode($row['id']."/".$shareToData['id']."-".$row['id']);
                // echo $url;
                $mailBody .= '<div class="containertwo">
							<div class="row">
						  	<div class="columnone">
						    	<img src="'.$IMG.'" style="width:200px; height: 200px; margin: 15px 15px; border: 1px solid; border-color:silver;">
						  	</div>
						  	<div class="columntwo">
						    	<div class="info" style="margin-top: 18px;">
						  			<b>'.$row['first_name'].' '.$row['last_name'].' ('.$row['profile_id'].')</b>
						  			<p>DOB : '.$row['date'].'-'.$row['month'].'-'.$row['year'].' | Height : '.$row['height'].'</p>
						  			<p>'.$row['city'].', '.$row['state'].'</p>
									
						  			'.$edutable.'
									
						  			<p>Occupation: '.$row['occupation'].'</p><br>'.$fulldata.'
									<div class="actions">
							    		<a class="button" href="'.site_url().'dashboard/search/user_profile/'.$url.'">View Full Profile</a> <a class="button"  href="https://www.kammavaari.com/dashboard/search/interested_user_profile/'.$url.'" >I Am Interested</a>
									</div>
						  		</div>
						  	</div>
						  	</div></div>';
							if ($emailstr == '') {
								$emailstr .= $row['email'];
							} else {
								$emailstr .= ','.$row['email'];
							}

							if ($shareProfileIds == '') {
								$shareProfileIds .= $row['id'];
							} else {
								$shareProfileIds .= ','.$row['id'];
							}
            }
            $mailBody .= '<br><div style="font-size: 15px;margin:10px 0;padding:0 10px"><p>Thank You,</p><p>'.$this->session->userdata('uname').'</p><p>'.$this->session->userdata('phone_no').'</p><p>Kammavaari.com</p></div>';
            
           //echo $shareToData['email'];
          //echo '<pre>';print_r($mailBody);exit;
            $to = $shareToData['email'];
			//$to = 'smkrishna1785@gmail.com';
			$shareProfileEmail=emailtemplate('share_profile_email');
			$shareProfileEmail=str_replace('{base_url}',base_url(),$shareProfileEmail);
			$shareProfileEmail=str_replace('{logo}',base_url().'images/logo.png',$shareProfileEmail);
			$shareProfileEmail=str_replace('{website_name}','Kammavaari',$shareProfileEmail);
			$shareProfileEmail=str_replace('{info_email}','info@kammavaari.com',$shareProfileEmail);
			$shareProfileEmail=str_replace('{support_contact}','91-9177036777',$shareProfileEmail);
			$shareProfileEmail=str_replace('{mail_body}', $mailBody, $shareProfileEmail);
			
            $response = $this->email_model->emailgmailconf($to, "Suggested Matches From kammavaari.com", $shareProfileEmail);
            if ($response == 'Success') {
                $shareProfileIdArr = explode(",", $shareProfileIds);				
                for ($y=0; $y < sizeof($shareProfileIdArr); $y++) {
					if($bothsideSelectedProfileFlag == 1 && in_array($shareProfileIdArr[$y], $bothsideSelectedProfile)) {
						$reverseSent = 1;
					} else {
						$reverseSent = $IsrevSend;
					}
                    $dataArr = array(	
                        'from_msID'  => $shareToData['id'],
                        'to_msID'    => $shareProfileIdArr[$y],
                        'sentby_ID'  => $data['profileowner'],
                        'send_Date'  => date('Y-m-d H:i:s'),
                        'sentprofile_full'=>$sendprofile,
                        'rev_sent'   => $reverseSent,
                        'f_ticketid'=>$url,
                        'share_type'=>'suggest_email'
                    );                    
                   $res =  $this->expressInterestInsert($dataArr);                    
                }
				if ($IsrevSend == '0' && $bothsideSelectedProfileFlag == 0) {
					$resp["status"] = "success";
					$resp["message"] = "Profile sent successfully";
					return $resp;
				}
            } else {
                $resp["status"] = "error";
				$resp["message"] = "Failed to send emails";
				return $resp;
            }
        }
        }

    
     public function getSuggestedProfilesByEmail($rm_id,$arr1, $arr2, $arr3,$arr4,$params=NULL) {
		$user_id = $this->session->userdata('user_id');
        $this->db->select("rm.*,p.gender,p.id,p.status,p.age,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.dob,p.living_in,p.profile_id,p.first_name,p.last_name,s.ms_usertype, s.profileowner, adm.id as rm_id, adm.username as rm_username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone");
        $this->db->from('ms_servicelist as rm');
		$this->db->join('tbl_primary_info as p','rm.to_msID = p.id','left');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'inner');
        $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');
		$this->db->where('sentby_ID', $rm_id);
		$this->db->where('rm.from_msID', $user_id);
		$this->db->where_in('share_type',array('suggest_email'));
        //echo $primary_details['p_age_to'];exit;
        $this->db->where(' p.id not in(select kv_ni_touserid from kv_notinterested where kv_ni_userid="' . $user_id . '")');
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->where_not_in('p.id', $arr3);
        $this->db->where_not_in('p.id', $arr4);
        $this->db->group_by('p.id');
        $this->db->order_by('registered_on', 'DESC');
	
     }

     public function get_partner_preferences()
     {
        $id = $this->session->userdata('user_id');

         $partner_pre = $this->db->query('SELECT A.dob,A.gender, A.living_in, B.p_marital_status AS marital_status,B.p_height_from AS h_from,B.p_height_to AS h_to,B.p_country as country FROM tbl_primary_info AS A LEFT JOIN tbl_partner_preferences AS B ON A.id = B.ms_id WHERE A.id = ?', array($id));

         return $partner_pre->result();
     }

}