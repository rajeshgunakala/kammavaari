<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Recently_viewed_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }

public function getrecentviews(){
    
         $user_id=$this->session->userdata('user_id');

         
            $this->db->select("v.*");
    	 	$this->db->from('kv_profileview as v');
    	    $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
    	 	$this->db->join('tbl_primary_info as p','v.kv_profileview_on = p.id','left');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
    	 	$this->db->join('tbl_religion_info as r','p.id=r.user_id','left');
    	    $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.city');
    	 	$this->db->join('tbl_professional_info as e','p.id=e.user_id','left');
    	 
    	   
        	$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
            $this->db->join('MS_photos as u','p.id=u.ms_id','left');
            $this->db->select('s.*');
            $this->db->join('ms_profilesetting as s','p.id=s.ms_id','inner');
			$this->db->select('adm.id as rm_id, adm.username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone');
            $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');
    	 	
    	   $this->db->where('s.elite', 'no');
           $this->db->where('p.status', 1);
          // $this->db->where('v.viewed_status', 1);
    	   $this->db->where('v.kv_userfkid',$user_id );
           $this->db->where('u.ismain',1 );
		   $this->db->where(' p.id not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="' . $user_id . '")');
			 $this->db->where(' p.id not in(select to_msid from MS_shortlist_viewedd_ignored where from_msid="' . $user_id . '" AND shortlist_status=1)');
           $this->db->where(' p.id not in(select to_msid from MS_shortlist_viewedd_ignored where from_msid="' . $user_id . '"AND ignore_status=1)');
			$this->db->where_not_in('p.id', $arr1);
			$this->db->where_not_in('p.id', $arr2);
    	   $this->db->order_by('v.kv_profileview_created_date', 'DESC');
			$this->db->limit('10'); 
           

    	    $query = $this->db->get();
		//echo $this->db->last_query();exit;
    	 	$result = $query->result_array();
    	 	return $result;
         
         
    	 
      }
      
}

?>