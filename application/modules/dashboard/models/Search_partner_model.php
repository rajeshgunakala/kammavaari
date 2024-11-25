<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Search_partner_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
        $this->load->library('session');
    }
    public function getallheights() {
        $this->db->select('height,height_in_cm,status');
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
    public function get_religion_details($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getsearchrecords($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country, $arr1, $arr2, $arr3, $params=array(), $propertyfor, $propertyto) {
     //  print_r($country);
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age,dob');
        $this->db->from('tbl_primary_info as p');
        $this->db->select('s.ms_usertype');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'left');
        $this->db->where('p.id', $this->session->userdata('user_id'));
        $primary_details = $this->db->get()->row_array();
        $this->db->select("p.gender,p.id,p.status,p.age,p.year,p.living_in,p.profile_id,p.first_name,p.last_name,p.dob,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.gothram,r.star,r.raasi');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'inner');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me, e.country, e.state, e.currency,e.city');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'inner');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'inner');
        $this->db->select('adm.id as rm_id, adm.username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone,pr.property_value');
        $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');
		$this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        $usertype = $primary_details["ms_usertype"];
        if ($gender != "") {
            $this->db->where('p.gender', $gender);
        }
        // if($agefrom!="" && $ageto!=""){
        //   $this->db->where("p.age BETWEEN $agefrom AND $ageto");
        // }
        if ($agefrom != "") {
            $this->db->where('DATEDIFF(NOW(),p.dob)/365.25 >=', $agefrom);
        }
		
        if (!empty($ageto)) {
			
            $this->db->where("DATEDIFF(NOW(),p.dob)/365.25 <=", $ageto);
        }
        if ($heightfrom != "") {
            $this->db->where('r.height_cm >=', $heightfrom);
        }
        if ($heightto != "") {
            $this->db->where('r.height_cm <=', $heightto);
        }
        // if($heightfrom!="" && $heightto!="") {
        //     $this->db->where("r.height BETWEEN '".$heightfrom."' AND '".$heightto."'");
        //  }
        if ($maritalstatus != "") {
            $this->db->where_in('r.marital_status', $maritalstatus);
        }
        if ($religion != "") {
            $this->db->where_in('r.religion', $religion);
        }
        if ($caste != "") {
            $this->db->where_in('r.caste', $caste);
        }
        if ($mothertounge != "") {
            $this->db->where_in('r.mother_tounge', $mothertounge);
        }
        if ($country != "") {
			//echo $country ;exit;
            $this->db->where_in('p.living_in', $country);
        }
        if ($education != "") {
            $this->db->where_in('e.heighst_education', $education);
        }
        if ($profession != "") {
            $this->db->where_in('e.occupation', $profession);
        }
    /*  $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        if ($gender == 'male') {
            if ($primary_details["ms_usertype"] == "regular") {
                $this->db->where('pr.property_value!=', '');
                $this->db->where('pr.property_value<=', 3);
            }
            if ($primary_details["ms_usertype"] == "confidential") {
                $this->db->where('pr.property_value>=', 3);
                $this->db->where('pr.property_value<=', 6);
            }
        }
        if ($gender == 'female') {
            if ($primary_details["ms_usertype"] == "regular") {
                $this->db->where('pr.property_value!=', '');
                $this->db->where('pr.property_value<=', 6);
            }
            if ($primary_details["ms_usertype"] == "confidential") {
                $this->db->where('pr.property_value>=', 5);
                $this->db->where('pr.property_value<=', 10);
            }
        }   */
		if ($propertyfor != "") {
            $this->db->where('CAST(pr.property_value AS DECIMAL(8, 2)) >=', $propertyfor);
        }
        if ($propertyto != "") {
            $this->db->where('CAST(pr.property_value AS DECIMAL(8, 2)) <=', $propertyto);
        }
        $this->db->where('p.status', 1);
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->where_not_in('p.id', $arr3);
         $this->db->where('s.ms_showntype','yes');
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
        //$this->db->group_by('u.MS_id');
		  $this->db->order_by('s.usertype_order', 'DESC');
		  $this->db->group_by('p.profile_id');
        
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
	//		echo "<pre>";echo $this->db->last_query();exit;
			 $result = $query->result_array();
		} 
        return $result;
    }
	public function getsearchPartnerProfileById($profileId) {
        $user_id = $this->session->userdata('user_id');
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age,dob');
        $this->db->from('tbl_primary_info as p');
        $this->db->select('s.ms_usertype');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'left');
        $this->db->select('pp.*');
        $this->db->join('tbl_partner_preferences as pp', 'p.id=pp.ms_id', 'left');
        $this->db->where('p.id', $user_id);
        $primary_details = $this->db->get()->row_array();      
        $usertype = $primary_details["ms_usertype"];
        $this->db->select("p.gender,p.id,p.status,p.age,p.dob,p.living_in,p.profile_id,p.first_name,p.last_name,s.ms_usertype");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'inner');
        $this->db->select('adm.id as rm_id, adm.username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone');
        $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');
        $this->db->where('p.status', '1');
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->where_not_in('p.id', $arr3);
       
    // $this->db->where('p.profile_id', $profileId);
		$this->db->where('p.last_name',$profileId);
		
        if ($usertype == "regular") {
				
                $this->db->where('s.ms_usertype',$usertype);
                $this->db->where('s.elite', 'no');
            }
           else if ($usertype == "confidential") {
				$type=array("regular","confidential");
                $this->db->where_in('s.ms_usertype',$type);
               $this->db->order_by('s.ms_usertype', 'asc');
            }
        
        $this->db->group_by('u.MS_id');
        $this->db->where('p.gender !=', $primary_details['gender']);
	      $this->db->where('s.ms_showntype', 'yes');
	      $this->db->where('s.profileowner > 0');
	
        $query = $this->db->get();
        $result = $query->result_array();
      //  echo $this->db->last_query();exit;
        return $result;
    }
	
	public function getsearchPartnerByProfileId($profileId) {
        $user_id = $this->session->userdata('user_id');
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age,dob');
        $this->db->from('tbl_primary_info as p');
        $this->db->select('s.ms_usertype');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'left');
        $this->db->select('pp.*');
        $this->db->join('tbl_partner_preferences as pp', 'p.id=pp.ms_id', 'left');
        $this->db->where('p.id', $user_id);
        $primary_details = $this->db->get()->row_array();      
        $usertype = $primary_details["ms_usertype"];
        $this->db->select("p.gender,p.id,p.status,p.age,p.dob,p.living_in,p.profile_id,p.first_name,p.last_name,s.ms_usertype");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        $this->db->join('ms_profilesetting as s', 'p.id=s.ms_id', 'inner');
        $this->db->select('adm.id as rm_id, adm.username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone');
        $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');
        $this->db->where('p.status', '1');
        $this->db->where_not_in('p.id', $arr1);
        $this->db->where_not_in('p.id', $arr2);
        $this->db->where_not_in('p.id', $arr3);
       
     $this->db->where('p.profile_id', $profileId);
		//$this->db->where('p.last_name',$profileId);
		
        if ($usertype == "regular") {
				
                $this->db->where('s.ms_usertype',$usertype);
                $this->db->where('s.elite', 'no');
            }
           else if ($usertype == "confidential") {
				$type=array("regular","confidential");
                $this->db->where_in('s.ms_usertype',$type);
               $this->db->order_by('s.ms_usertype', 'asc');
            }
        
        $this->db->group_by('u.MS_id');
        $this->db->where('p.gender !=', $primary_details['gender']);
	      $this->db->where('s.ms_showntype', 'yes');
	      $this->db->where('s.profileowner > 0');
	
        $query = $this->db->get();
        $result = $query->result_array();
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
    public function get_user_count() {
        $this->db->select('*');
        $this->db->from('tbl_partner_preferences');
        $this->db->where('ms_id', $this->session->userdata('user_id'));
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }
    public function get_preference_details() {
        $this->db->select('*');
        $this->db->from('tbl_partner_preferences');
        $this->db->where('ms_id', $this->session->userdata('user_id'));
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }
}