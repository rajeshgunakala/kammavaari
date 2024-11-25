<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class My_ignore_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }

public function getignorelist($params=NULL){
    
         $user_id=$this->session->userdata('user_id');
         
         $this->db->select("*");
    	 	$this->db->from('MS_shortlist_viewedd_ignored as v');
    	    $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
    	 	$this->db->join('tbl_primary_info as p','p.id=v.to_msid','left');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
    	 	$this->db->join('tbl_religion_info as r','v.to_msid=r.user_id','left');
    	    $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
    	 	$this->db->join('tbl_professional_info as e','v.to_msid=e.user_id','left');
            $this->db->join('ms_profilesetting as s','p.id=s.ms_id','inner');
    	    $this->db->select('adm.id as rm_id, adm.username, adm.name as rm_name, adm.email as rm_email, adm.phone_no as rm_phone');
            $this->db->join('tbl_admin_data as adm', 's.profileowner = adm.id', 'left');    	   
        	$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
             $this->db->join('MS_photos as u','p.id=u.MS_id','left');
    	 	
    	   $this->db->where('s.elite', 'no');
           $this->db->where('p.status', 1);
           
           $this->db->where('v.ignore_status', 1);
    	   $this->db->where('v.from_msid',$user_id );
          //  $this->db->where('u.ismain',1 );
    	 	 $this->db->order_by('v.ignore_date', 'DESC');
			 $this->db->group_by('p.id');
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
			 $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
		}  
    	 	return $result;
      
      }
      
}