<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class My_contact_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
public function profileinterestedby_list()
{
	$user_id=$this->session->userdata('user_id');
            $this->db->select('profileowner');
        $this->db->from('ms_profilesetting');
        $this->db->where('ms_id',$user_id);
         $query = $this->db->get();
        $res= $query->row_array();
		   
            $this->db->select("v.*,p.*,r.*,e.*,u.*,s.*");
    	 	$this->db->from('kv_mysideinterests as v');
    	    $this->db->join('tbl_primary_info as p','p.id=v.kv_msi_profilefkid','left');
    	 	
    	 	$this->db->join('tbl_religion_info as r','r.user_id=p.id','left');
    	   
    	 	$this->db->join('tbl_professional_info as e','e.user_id=p.id','left');
    	 
    	    $this->db->join('MS_photos as u','p.id=u.ms_id','left');
             $this->db->join('ms_profilesetting as s','p.id=s.ms_id','inner');


    	 	$this->db->where('s.elite', 'no');
           $this->db->where('p.status', 1);
           
    	 	$this->db->where('v.kv_msi_interested_on',$user_id );
             $this->db->where('u.ismain',1 );
			 $this->db->group_by('v.kv_msi_profilefkid');
			$this->db->where('kv_msi_onresstatus','oneside_accepted');
    	 	 $this->db->order_by('v.kv_msi_created_date', 'DESC');
    	    $query = $this->db->get();
    	 	$result = $query->result_array();
			
			//echo '<pre>';print_r($this->db->last_query());exit;
    	 	return $result;
}
public function getcontactlist($fromcol=NULL,$params=NULL){
    
           $user_id=$this->session->userdata('user_id');
            $this->db->select('profileowner');
        $this->db->from('ms_profilesetting');
        $this->db->where('ms_id',$user_id);
         $query = $this->db->get();
        $res= $query->row_array();
            $this->db->select("v.*");
    	 	$this->db->from('kv_mysideinterests as v');
    	    $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.first_name,p.last_name,p.dob");
    	 	$this->db->join('tbl_primary_info as p','p.id=v.kv_msi_interested_on','left');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.gothram,r.star,r.raasi');
    	 	$this->db->join('tbl_religion_info as r','v.kv_msi_interested_on=r.user_id','left');
    	    $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.city');
    	 	$this->db->join('tbl_professional_info as e','v.kv_msi_interested_on=e.user_id','left');
    	 
    	   
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
 $this->db->group_by('v.kv_msi_interested_on');
           
		  // 	if($fromcol=='to')
		//	$this->db->where('v.to_MSid',$user_id );
		//	else
    	 	$this->db->where('v.kv_msi_profilefkid',$user_id );
            $this->db->where('u.ismain',1 );
			$this->db->where('kv_msi_onresstatus','oneside_accepted');
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
			 $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
		}  
		//	echo '<pre>';print_r($this->db->last_query());exit;
    	 	return $result;
        	
    	 
      }
      
}

?>