<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class My_contact_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'on');
    }
public function profileinterestedby_list()
{
	$user_id=$this->session->userdata('user_id');
           
		   
            $this->db->select("v.Contact_id,v.From_MSid,v.to_MSid");
    	 	$this->db->from('MS_ViewedContacts as v');
    	    $this->db->select("p.profile_id,p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
    	 	$this->db->join('tbl_primary_info as p','p.id=v.From_MSid','left');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
    	 	$this->db->join('tbl_religion_info as r','v.From_MSid=r.user_id','left');
    	    $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
    	 	$this->db->join('tbl_professional_info as e','v.From_MSid=e.user_id','left');
    	 
    	   
        	$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
             $this->db->join('MS_photos as u','p.id=u.MS_id','left');
             $this->db->join('ms_profilesetting as s','p.id=s.ms_id','inner');


    	 	$this->db->where('s.elite', 'no');
           $this->db->where('p.status', 1);
           
    	 	$this->db->where('v.to_MSid',$user_id );
             $this->db->where('u.ismain',1 );
			 $this->db->group_by('v.From_MSid');
    	 	 $this->db->order_by('v.Contact_Vieweddate', 'DESC');
    	    $query = $this->db->get();
    	 	$result = $query->result_array();
			
			//echo '<pre>';print_r($this->db->last_query());exit;
    	 	return $result;
}
public function getcontactlist($fromcol=NULL){
    
           $user_id=$this->session->userdata('user_id');
            $this->db->select('profileowner');
        $this->db->from('ms_profilesetting');
        $this->db->where('ms_id',$user_id);
         $query = $this->db->get();
        $res= $query->row_array();
            $this->db->select("v.Contact_id,v.From_MSid,v.to_MSid");
    	 	$this->db->from('MS_ViewedContacts as v');
    	    $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,last_name");
    	 	$this->db->join('tbl_primary_info as p','p.id=v.to_MSid','left');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
    	 	$this->db->join('tbl_religion_info as r','v.to_MSid=r.user_id','left');
    	    $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
    	 	$this->db->join('tbl_professional_info as e','v.to_MSid=e.user_id','left');
    	 
    	   
        	$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
             $this->db->join('MS_photos as u','p.id=u.MS_id','left');
             $this->db->join('ms_profilesetting as s','p.id=s.ms_id','inner');

  if($res['profileowner']=='regular')
        {
        $this->db->where('s.elite', 'no');
        }
        else if($res['profileowner']=='confidential')
        {
           // $this->db->where('s.elite', '');
        }
           $this->db->where('p.status', 1);
           
		   	if($fromcol=='to')
			$this->db->where('v.to_MSid',$user_id );
			else
    	 	$this->db->where('v.From_MSid',$user_id );
             $this->db->where('u.ismain',1 );
    	 	 $this->db->order_by('v.Contact_Vieweddate', 'DESC');
    	    $query = $this->db->get();
    	 	$result = $query->result_array();
			//echo '<pre>';print_r($this->db->last_query());exit;
    	 	return $result;
        	
    	 
      }
      
}

?>