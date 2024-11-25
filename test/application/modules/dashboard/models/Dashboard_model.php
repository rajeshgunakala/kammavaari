<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard_model extends CI_Model {
	
	
	public function __construct() 
	{
        parent::__construct();
        $this->load->helper("file");
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        
		
    } 
    public function get_primary_details($user_id)
    {
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,age,registered_on, (YEAR(CURDATE()) - CAST(year AS UNSIGNED)) as currentAge');
        $this->db->from('tbl_primary_info');
        $this->db->where('id',$user_id);
        $query = $this->db->get()->row_array();
		$month = date('m',strtotime($query["month"]));
		$age = date_diff(date_create($query["year"]."-".$month."-".$query["date"]), date_create('today'))->y;
		$query["currentAge"] = $age;
        return $query;
    }
    
    public function get_profile_complete($user_id)
    {
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $query = $this->db->query("select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='".$user_id."'");
        $result = $query->result();
        
        return $result;
    		
    }
    
    public function get_payment_details($user_id){
        
        $this->db->select('*');
	    $this->db->from('tbl_payments_log');
	    $this->db->where('user_id',$user_id);
	    $this->db->order_by("paymentlog_id", "desc");
	    $this->db->limit('1');
		// echo $this->db->last_query();exit;
	    $query = $this->db->get()->result_array();
	    return $query;
        
    }
	public function get_education_details($user_id){
        
        $this->db->select('*');
	    $this->db->from('kv_usereducation');
	    $this->db->where('kv_usereducation_id',$user_id);
		$query = $this->db->get()->result_array();
		//echo $this->db->last_query();exit;
	   // $query = $this->db->get()->result_array();
	    return $query;
        
    }
    
     public function get_all_degrees_ajax($id) 
		{
    		$this->db->select("d.id,d.hid,d.status,d.educationdegree");
    		$this->db->from('tbl_educationdegree as d');
    		$this->db->select("e.heighsteducation");
    		$this->db->join('tbl_heighsteducation as e','d.hid=e.id','inner');
    		$this->db->where('d.status','1');
    		$this->db->where("e.heighsteducation",$id);
    		$query = $this->db->get();
    		$result = $query->result_array();
    		return $result;
	    }
     public function get_all_specialization_ajax($id) 
	{
		$this->db->select("s.id,s.hid,s.eid,s.status,s.specialization");
		$this->db->from('tbl_specialization as s');
		$this->db->select("d.educationdegree");
		$this->db->join('tbl_educationdegree as d','s.eid=d.id','inner');
		$this->db->where('s.status','1');
		$this->db->where("d.educationdegree",$id);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
    public function get_heighsteducations()
	{
	    $this->db->select('heighsteducation,status,id');
	    $this->db->from('tbl_heighsteducation');
	    $this->db->where('status','1');
	    $this->db->order_by('heighsteducation','asc');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	 public function get_educationdegrees()
	{
	    $this->db->select('educationdegree,status,id');
	    $this->db->from('tbl_educationdegree');
	    $this->db->where('status','1');
	    $this->db->order_by('educationdegree','asc');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	 public function get_specializations()
	{
	    $this->db->select('specialization,status,id');
	    $this->db->from('tbl_specialization');
	    $this->db->where('status','1');
	    $this->db->order_by('specialization','asc');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
     public function get_religion_details($user_id)
    {
        $this->db->select('user_id,marital_status,height,height_cm,religion,mother_tounge,caste,sub_caste,gothram,place_of_birth,time_of_birth,paadam,star,raasi,dosham,updated_on');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
     public function get_professional_details($user_id)
    {
        $this->db->select('user_id,heighst_education,education_degree,specialization,university,college,education_description,employee_in,occupation,annual_income,currency,company,about_profession,country,visatype,residing-since,arrival-date,departure-date,city,state,about_me,updated_on');
        $this->db->from('tbl_professional_info');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    
     public function get_property_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('ms_property_info');
        $this->db->where('ms_id',$user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    
    public function get_property_count($user_id)
    {
        $this->db->select('*');
        $this->db->from('ms_property_info');
        $this->db->where('ms_id',$user_id);
        $query=$this->db->get()->result_array();
        return count($query);
    }
    
    public function get_parent_details($user_id)
    {
        $this->db->select('user_id,father_name,father_education,father_profession,father_email,father_mobile,fathers_father_name,fathers_father_state,fathers_father_district,fathers_father_native_place,mother_name,mother_education,mother_profession,mother_email,mother_mobile,mothers_father_name,mothers_father_state,mothers_father_district,mothers_father_native_place,updated_on');
        $this->db->from('tbl_parents_info');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_sibling_details($user_id)
    {
        $this->db->select('user_id,no_of_brothers,no_of_sisters,no_of_elder_brothers,no_of_younger_brothers,no_of_elder_sisters,no_of_younger_sisters,updated_on');
        $this->db->from('tbl_siblings_info');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
     public function get_images_details($user_id)
    {
        $this->db->select('photos_id,MS_id,photoname,uploaded_date,ismain,applicationphotopath');
        $this->db->from('MS_photos');
        $this->db->where('MS_id',$user_id);
        $this->db->order_by('photos_id', 'ASC');
        $query = $this->db->get()->result_array();
        return $query;
    }
    
    
    
        
    public function delete_image_row($id)
    {
        
        $this->db->select('*');
        $this->db->from('MS_photos');
        $this->db->where('photos_id',$id);
        $query = $this->db->get()->result_array();
        
        $photo_name=$query[0]['photoname'];
        $user_id=$query[0]['MS_id'];
        
        $app_photo=$query[0]['applicationphotopath'];
        $app_array=explode("/",$app_photo);
        
        $full_photo=$query[0]['fullphotopath'];
        $full_array=explode("/",$full_photo);
        
        
        $path_to_file = 'images/profilepics/'.$user_id.'/'.$photo_name;
        
        $path_to_file1 = 'images/profilepics/'.$user_id.'/'.$app_array[6];
        
       $path_to_file2 = 'images/profilepics/'.$user_id.'/'.$full_array[6];
        
        
        unlink($path_to_file); 
        unlink($path_to_file1);
        unlink($path_to_file2);
        
        $this ->db->where('photos_id', $id);
        $this ->db-> delete('MS_photos');
        
        return true;
       
    }
             
    public function set_profile_pic_data($id)
    {
        $data=array('ismain'=>1,'isactive'=>'1');
        
        $data1=array('ismain'=>0,'isactive'=>'0');
        
        $this->db->where('MS_id',$this->session->userdata('user_id'));
        $this->db->where('photos_id', $id);
        $this->db->update('MS_photos',$data);
        
        $this->db->where('MS_id',$this->session->userdata('user_id'));
        $this->db->where('photos_id !=', $id);
        $this->db->update('MS_photos',$data1);
             
    }
    
    public function set_profile_pic_data_admin($id,$user_id)
    {
        $data=array('ismain'=>1);
        
        $data1=array('ismain'=>0);
        
        $this->db->where('MS_id',$user_id);
        $this->db->where('photos_id', $id);
        $this->db->update('MS_photos',$data);
        
        $this->db->where('MS_id',$user_id);
        $this->db->where('photos_id !=', $id);
        $this->db->update('MS_photos',$data1);
             
    }
        
        
    public function get_profilepic_details($user_id)
    {
		//echo $user_id;exit;
        $this->db->select('photoname,MS_id,ismain,isactive,applicationphotopath');
        $this->db->from('MS_photos');
        $this->db->where('MS_id',$user_id);
        $this->db->where('ismain',1);
        $this->db->where('isactive',1);
        $query = $this->db->get()->result_array();
        return $query;
    }
   	public function get_all_countries()
	{
	    $this->db->select('*');
	    $this->db->from('tbl_country');
	    $this->db->where('status','1');
	    $this->db->order_by('country','asc');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function getallprofessions()
      {
          $this->db->select('profession,status');
          $this->db->from('tbl_profession');
          $this->db->where('status',1);
          $this->db->order_by('profession','asc');
          $query = $this->db->get();
          $result = $query->result_array();
          return $result;
      }
	public function get_all_heights()
	{
	    $this->db->select('height,status');
	    $this->db->from('tbl_height');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
		public function get_all_religions()
	{
	    $this->db->select('religion,status');
	    $this->db->from('tbl_religion');
	    $this->db->order_by('religion','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_all_mothertounges()
	{
	    $this->db->select('mothertounge,status');
	    $this->db->from('tbl_mothertounge');
	    $this->db->order_by('mothertounge','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_all_castes()
	{
	    $this->db->select('caste,status');
	    $this->db->from('tbl_caste');
	    $this->db->order_by('caste','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_all_subcastes()
	{
	    $this->db->select('subcaste,status');
	    $this->db->from('tbl_subcaste');
	    $this->db->order_by('subcaste','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_all_stars()
	{
	    $this->db->select('star,status');
	    $this->db->from('tbl_star');
	    $this->db->order_by('star','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	} 
	public function get_all_zodic_signs()
	{
	    $this->db->select('zodic,status');
	    $this->db->from('tbl_zodic');
	    $this->db->order_by('zodic','asc');
	    $this->db->where('status','1');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	public function get_all_subcastes_ajax($caste) 
		{
    		$this->db->select("s.subcaste,s.status,s.caste_id");
    		$this->db->from('tbl_subcaste as s');
    		$this->db->select("c.caste");
    		$this->db->join('tbl_caste as c','s.caste_id=c.id','inner');
    		$this->db->where('s.status','1');
    		$this->db->where("c.caste",$caste);
    		$query = $this->db->get();
    		$result = $query->result_array();
    		return $result;
	    }
	 public function get_all_states_ajax($id) 
	{
		$this->db->select("s.state,s.id,s.country_id");
		$this->db->from('tbl_state as s');
		$this->db->select("c.country");
		$this->db->join('tbl_country as c','s.country_id=c.id','inner');
		$this->db->where('s.status','1');
		$this->db->where("c.country",$id);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
	    public function get_all_states()
	{
	    $this->db->select('state,status,id');
	    $this->db->from('tbl_state');
	    $this->db->where('status','1');
	    $this->db->order_by('state','asc');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
	 public function get_all_districts()
	{
	    $this->db->select('district,status,id');
	    $this->db->from('tbl_district');
	    $this->db->where('status','1');
	    $this->db->order_by('district','asc');
	    $query = $this->db->get()->result_array();
	    return $query;
	}
		public function get_all_districts_ajax($id) 
	{
		$this->db->select("c.district,c.state_id,c.status");
		$this->db->from('tbl_district as c');
		$this->db->select("s.state");
		$this->db->join('tbl_state as s','c.state_id=s.id','inner');
		$this->db->where('c.status','1');
		$this->db->where("s.state",$id);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
     public function get_profile_info($id){
           $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.date,p.year,p.month,p.email,p.mobile,p.dob");
    	 	$this->db->from('tbl_primary_info as p');
    	 	$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.star,r.time_of_birth,r.raasi,r.place_of_birth,r.gothram');
    	 	$this->db->join('tbl_religion_info as r','p.id=r.user_id','LEFT');
    	 	$this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.education_description,e.about_profession,e.currency,e.country,e.state,e.city,e.residing-since,e.arrival-date,e.departure-date,e.visatype,e.company as company_name');
    	 	$this->db->join('tbl_professional_info as e','p.id=e.user_id','LEFT');
    	 	$this->db->select('f.*');
    	 	$this->db->join('tbl_parents_info as f','p.id=f.user_id','LEFT');
    	 	$this->db->select('s.user_id,s.no_of_brothers,s.no_of_sisters');
    	 	$this->db->join('tbl_siblings_info as s','p.id=s.user_id','LEFT');
			$this->db->select('pr.Property_type,pr.property_value,pr.property_Desc');
    	 	$this->db->join('ms_property_info as pr','p.id = pr.ms_id','LEFT');
			$this->db->where('p.id', $id);
    	 	$query = $this->db->get();
    	 //	echo $this->db->last_query();
    	 	$result = $query->row_array();
    	 	return $result;
      }
      public function get_images($id)
      {
          $this->db->select('*');
		  $this->db->order_by('ismain desc,isactive desc');
          $this->db->from('MS_photos');
    	  $this->db->where('MS_id',$id);
    	 
    	  $query = $this->db->get();
	 	  $result = $query->result_array();
	 	  return $result;
      }
      	public function update_record($id,$ImgData){

		$set_data = array(
						'photoname' => $ImgData,
						'uploaded_date'=>date('Y-m-d H:i:s'),
						'MS_id' =>$this->session->userdata('user_id'),
						);

		$this->db->where('photos_id',$id);
		$result = $this->db->update('MS_photos',$set_data);
		return $result;
	}
	public function update_photo_details($id,$ImgData){
		
		$set_data = array(
						'photoname' => $ImgData,
						'fullphotopath' => base_url("images/profilepics/" . $this->session->userdata('user_id') . '/' . $ImgData),
						'applicationphotopath' => base_url("images/profilepics/" . $this->session->userdata('user_id') . '/' . $ImgData),
						'uploaded_date'=>date('Y-m-d H:i:s'),
						'MS_id' =>$this->session->userdata('user_id'),
						);

		$this->db->where('photos_id',$id);
		$result = $this->db->update('MS_photos',$set_data);
		return $result;
	}	
	
	public function add_record($ImgData,$main_photo,$imagepathnew=NULL){

		$set_data = array(
		                'MS_id' =>$this->session->userdata('user_id'),
						'photoname' =>$ImgData,
						'ismain' => $main_photo,
						'uploaded_date'=>date('Y-m-d H:i:s'),
						'applicationphotopath'=>$imagepathnew
					);
		$result = $this->db->insert('MS_photos', $set_data); 
		return $result;

	}
	public function status_record($id,$status){
		$sts = ($status == 1 ? 0 : 1);
		$set_data = array(
						'status' => $sts
					);
		$this->db->where('id',$id);
		$result = $this->db->update('upload-images', $set_data); 
		return $result;
	}
	public function get_single_record($id='')
    {
        $this->db->select("*");
		$this->db->from('MS_photos');
		if($id != '')

		{

			$this->db->where("photos_id",$id);
			$query = $this->db->get();
			$result = $query->row_array();
		}
		return $result;
    }
    	public function delete_record($id)
	{
		$this->db->where('photos_id',$id);
		$result = $this->db->delete('MS_photos'); 
		return $result;
	}
	public function imagescount($id)
	{
	    $this->db->select('photos_id');
	    $this->db->from('MS_photos');
	    $this->db->where('MS_id',$id);
	    $result = $this->db->get()->result_array();
	    return count($result);
	    
	}
	
	public function get_payment_records($user_id){
	    $this->db->select('*');
	    $this->db->from('tbl_payments');
	    $this->db->where('user_id',$user_id);
	    $result = $this->db->get()->result_array();
	    return count($result);
	}
    
		
	public function getLastLoginId($user_id)
	
	{
	$this->db->select('notification_id');
		$this->db->from('customer_login_notification');
		$this->db->where('user_id',$user_id);
		$this->db->order_by("notification_id", "desc");
		$this->db->limit('1');
		$result=$this->db->get()->row_array();
		return $result;
	}
	public function updateLogoutTime($notification_id)
	{
//print_r($notification_id);
//echo $notification_id;exit;
		$arr=array(
			'logout_date_time'=>date('Y-m-d H:i:s')
		);
		$this->db->where('notification_id',$notification_id["notification_id"]);
		$result = $this->db->update("customer_login_notification", $arr);
 //echo '<pre>';print_r($this->db->last_query());exit;
		
	}

	public function updateLogoutStatus($notification_id)
	{ 
		  $user =$this->session->userdata('user_id');
		  $arr = array('online'=>'No');
	      $this->db->where('user_id',$user);
		  $res = $this->db->update('tbl_current_login',$arr);	
	}

	public function getHeightInCms($height)
	{	
		$this->db->select('height_in_cm');
		$this->db->from('tbl_height');
		$this->db->where('height',$height);
		$result = $this->db->get()->row_array();
		return $result;
	}
	
	public function getPropertyValueRanges() {
        $this->db->select('*');
        $this->db->from('tbl_propery_values');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
	public function status($id, $status)
	{
		   $sta = ($status ==1) ? 0:1;

		   $data = array(
			    'private' => $sta 
		   );
		   $this->db->where('id', $id);
		   $result=$this->db->update('tbl_primary_info',$data);
		   return $result;
	}
	
	public function getPrimaryDetails($user_id)
    {
        $this->db->select('p.id as pid,p.email,p.password,p.mobile,p.first_name,p.last_name,p.gender,p.living_in,p.date,p.month,p.year,p.dob,p.profile_id,p.age,p.registered_on, (YEAR(CURDATE()) - CAST(p.year AS UNSIGNED)) as currentAge,p.private, ms.*,a.id as rm_id,  a.username as rm_username, a.name as rm_name, a.email as rm_email, a.phone_no as rm_phone');
        $this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ms','p.id=ms.ms_id','left');
		$this->db->join('tbl_admin_data as a', 'ms.profileowner = a.id' , 'left' );
        $this->db->where('p.id',$user_id);
        $query = $this->db->get()->row_array();
		$month = date('m',strtotime($query["month"]));
		$age = date_diff(date_create($query["year"]."-".$month."-".$query["date"]), date_create('today'))->y;
		$query["currentAge"] = $age;

        return $query;
    }
	
	public function update_last_login(){
    $data = array(
                   'last_activity' =>date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa')))
                );

    $this->db->where('login_id', $this->session->userdata['active_user_session']['login_id']);
    $this->db->update('tbl_current_login', $data); 
   }

   public function chat_with_admin($user_id)
   {
	        $get_rm = $this->db->query("SELECT profileowner FROM ms_profilesetting where ms_id ='".$user_id."' ");
			if($get_rm->num_rows() == 1){
				$rm_id = $get_rm->row()->profileowner;
				$admin_rep= $this->db->query("SELECT * FROM messages WHERE receiver_id = '".$user_id."' AND sender_id ='".$rm_id."'");
				$res1 = $admin_rep->result();
				$user_cmp = $this->db->query("SELECT * FROM complaints WHERE user_id = '".$user_id."' AND admin_id='".$rm_id."'");
				$res2 = $user_cmp->result();
				return (array('adm_msg'=>$res1,'user_msg'=>$res2));
			}else{
				return  "<script>alert('RM not assigned for you can't send messages');</script>";
			}

	        

   }
}