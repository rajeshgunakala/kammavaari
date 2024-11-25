<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Admin_dashboard_model extends CI_Model
{
    
    public function __construct() {
        parent::__construct();
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
    
    public function admin_photosdelete($delid)
    {
        $response=$this->db->get_where('MS_photos', array('photos_id'=>$delid))->row();
        unlink("images/profilepics/".$response->MS_id."/".$response->photoname);
        //echo '<pre>';print_r($response);
        //exit;
        $this->db->delete('MS_photos', array('photos_id'=>$delid));
        return true;
    }
    public function get_primary_details($user_id)
    {
        $this->db->select('tbl_primary_info.email,tbl_primary_info.password,tbl_primary_info.mobile,tbl_primary_info.first_name,tbl_primary_info.last_name,tbl_primary_info.gender,tbl_primary_info.living_in,tbl_primary_info.date,tbl_primary_info.month,tbl_primary_info.year,tbl_primary_info.profile_id,tbl_primary_info.age,tbl_primary_info.registered_on,MS_photos.photoname');
        $this->db->from('tbl_primary_info');
        $this->db->join('MS_photos', 'MS_photos.MS_id = tbl_primary_info.id');
        $this->db->where('tbl_primary_info.id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_primary_details_ADM($user_id)
    {
        $this->db->select('employee_in, specialization,company,tbl_primary_info.id,tbl_primary_info.gender,tbl_primary_info.profile_id,tbl_primary_info.first_name,tbl_primary_info.last_name, tbl_primary_info.date,tbl_primary_info.month,tbl_primary_info.year,tbl_primary_info.registered_on, tbl_religion_info.marital_status, tbl_religion_info.complexion, tbl_religion_info.height, tbl_religion_info.religion, tbl_religion_info.mother_tounge, tbl_religion_info.caste, tbl_religion_info.dosham, tbl_professional_info.heighst_education, tbl_professional_info.education_degree, tbl_professional_info.university, tbl_professional_info.college, tbl_professional_info.city, tbl_professional_info.education_description, tbl_professional_info.occupation, tbl_professional_info.annual_income,, tbl_professional_info.currency, tbl_professional_info.visatype, tbl_professional_info.residing-since, tbl_professional_info.arrival-date, tbl_professional_info.departure-date, tbl_professional_info.state, tbl_professional_info.country, tbl_professional_info.about_profession, tbl_primary_info.living_in, tbl_professional_info.about_me');
        $this->db->order_by('tbl_professional_info.id', 'DESC');
        $this->db->from('tbl_primary_info');
        $this->db->join('tbl_religion_info', 'tbl_religion_info.user_id = tbl_primary_info.id', 'LEFT');
        $this->db->join('tbl_professional_info', 'tbl_professional_info.user_id = tbl_primary_info.id', 'LEFT');
        $this->db->where('tbl_primary_info.id', $user_id);
        $query = $this->db->get()->row_array();
        
        //echo '<pre>';print_r($this->db->last_query());exit;
        return $query;
    }
    

    public function get_profilepic_detailsADM($user_id)
    {
        /*$this->db->select('id,user_id,image,updated_on,status');
        $this->db->from('upload-images');
        $this->db->where('user_id',$user_id);
        $this->db->order_by('id', 'ASC');
        $this->db->limit('1');
        $query = $this->db->get()->result_array();
        return $query;*/

        $this->db->select('photoname,MS_id,ismain,isactive,applicationphotopath,fullphotopath');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $user_id);
        $this->db->where('ismain', 1);
        $this->db->where('isactive', 1);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_imagesADM($id)
    {
        $this->db->select('*');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $id);
        $this->db->order_by('photos_id', 'ASC');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_profile_details_ADM($user_id)
    {
        $this->db->select('ms_profilesetting.profileowner,tbl_primary_info.id,tbl_primary_info.first_name,tbl_primary_info.last_name, tbl_primary_info.date,tbl_primary_info.registered_on,tbl_primary_info.profile_id,tbl_primary_info.mobile,tbl_primary_info.email, tbl_primary_info.is_Mverified, tbl_primary_info.is_Everified,tbl_primary_info.contact_exchaged,tbl_primary_info.no_of_match_makings,tbl_primary_info.comments,MS_photos.photoname, ms_profilesetting.elite, ms_profilesetting.ms_usertype');
        $this->db->from('tbl_primary_info');
        $this->db->join('MS_photos', 'MS_photos.MS_id = tbl_primary_info.id', 'LEFT');
        $this->db->join('ms_profilesetting', 'ms_profilesetting.ms_id = tbl_primary_info.id', 'LEFT');
        $this->db->where('tbl_primary_info.id', $user_id);
        $query = $this->db->get()->row_array();
                // print_r($query);exit();

        return $query;
    }

    // For basic modal popup data
    public function getBasicDataForUpdate($userId)
    {
        $this->db->select('tbl_primary_info.gender, tbl_primary_info.first_name, tbl_primary_info.last_name, tbl_primary_info.date, tbl_primary_info.month, tbl_primary_info.year, tbl_primary_info.living_in, tbl_religion_info.marital_status,tbl_religion_info.complexion, tbl_religion_info.height, tbl_religion_info.religion, tbl_religion_info.mother_tounge, tbl_religion_info.caste, tbl_religion_info.sub_caste, tbl_religion_info.dosham');
        $this->db->from('tbl_primary_info');
        $this->db->join('tbl_religion_info', 'tbl_religion_info.user_id = tbl_primary_info.id', 'LEFT');
        $this->db->where('tbl_primary_info.id', $userId);
        $query = $this->db->get()->row_array();
        // print_r($query);exit();
        return $query;
    }
	
	public function getHeightInCms($height)
	{	
		$this->db->select('height_in_cm');
		$this->db->from('tbl_height');
		$this->db->where('height',$height);
		$result = $this->db->get()->row_array();
		return $result;
	}

    // To update basic detail
    public function basicDetailUpdate($dataPrimaryArr, $dataReligionArr, $id)
    {
        // print_r($dataPrimaryArr);exit();
        $this->db->where('id', $id);
        $res = $this->db->update('tbl_primary_info', $dataPrimaryArr);
//echo $this->db->last_query();exit;
        if ($res) {
            $this->db->select('*');
            $this->db->from('tbl_religion_info');
            $this->db->where('user_id', $id);
            $count = $this->db->get()->num_rows();
            if ($count == 0) {
                $dataReligionArr["user_id"] = $id;
                $res1 = $this->db->insert('tbl_religion_info', $dataReligionArr);
            } else {
                $this->db->where('user_id', $id);
                $res1 = $this->db->update('tbl_religion_info', $dataReligionArr);
              
            }
            return $res1;
        } else {
            return $res;
        }
    }

    // for education modal popup data
    public function getEducationDataForUpdate($userId)
    {
        $this->db->select('*, residing-since as sinceDate, arrival-date as arrivalDate, departure-date as deptDate');
        $this->db->from('tbl_professional_info');
        $this->db->where('user_id', $userId);
        $query = $this->db->get()->row_array();
        return $query;
    }

    // Check entry exist for education or not
    public function checkeducationDetailUpdate($id)
    {
        $this->db->select('*, residing-since as "residing_since",arrival-date as "arrival_date",departure-date as "departure_date"');
        $this->db->order_by('id', 'DESC');
        $this->db->from('tbl_professional_info');
        $this->db->where('user_id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    
       public function special(){
        $this->db->select('*');   
        $this->db->from('specialization');      
        $query = $this->db->get()->result_array();
        return $query;

    }
    
    public function education_info($user_id)
    {
        $this->db->order_by('kv_usereducation_id', 'DESC');
        $response=$this->db->get_where('kv_usereducation', array('kv_userfkid'=>$user_id))->row();
        return $response;
    }
    public function usereducdetinsert($user_id)
    {
        extract($_POST);
        $this->db->delete('kv_usereducation', array('kv_userfkid'=>$user_id));
        //echo '<pre>';print_r($_POST);exit;
        $educationdet=array(
            'kv_userfkid'=>$user_id,
            'kv_ue_status'=>1,
            'kv_ue_date'=>date('Y-m-d H:i:s'),
            'kv_ue_highedu'=>($select_education_1)? $select_education_1 :'',
			'kv_ue_highedu_deg'=>($education_degree_1)? $education_degree_1 :'',
			'kv_ue_highedu_spec'=>($specialization_1)? $specialization_1 :'',
			'kv_ue_highedu_univ'=>($university_1)? $university_1 :'',
			'kv_ue_highedu_college'=>($college_1)? $college_1 :'',
			'kv_ue_highedu_special'=>($special_1)? $special_1 :'',
			'kv_ue_pg'=>($highest_education_2)? $highest_education_2 :'',
			'kv_ue_pg_deg'=>($education_degree_2)? $education_degree_2 :'',
			'kv_ue_pg_spec'=>($specialization_2)? $specialization_2 :'',
			'kv_ue_pg_univ'=>($university_2)? $university_2 :'',
			'kv_ue_pg_college'=>($college_2)? $college_2 :'',
			'kv_ue_pg_special'=>($special_2)? $special_2 :'',
			'kv_ue_g'=>($highest_education_3)? $highest_education_3 :'',
			'kv_ue_g_deg'=>($education_degree_3)? $education_degree_3 :'',
			'kv_ue_g_spec'=>($specialization_3)? $specialization_3 :'',
			'kv_ue_g_univ'=>($university_3)? $university_3 :'',
			'kv_ue_g_college'=>($college_3)? $college_3 :'',
			'kv_ue_g_special' =>($special) ? $special : '',
			'kv_ue_ug'=>($highest_education_4)? $highest_education_4 :'',
			'kv_ue_ug_deg'=>($education_degree_4)? $education_degree_4 :'',
			'kv_ue_ug_spec'=>($specialization_4)? $specialization_4 :'',
			'kv_ue_ug_univ'=>($university_4)? $university_4 :'',
			'kv_ue_ug_college'=>($college_4)? $college_4 :'',
			'kv_ue_x'=>($txt_tenth)? $txt_tenth :'',
			'kv_ue_x_spec'=>($txt_tenthspec)? $txt_tenthspec :'',
			'kv_ue_x_univ'=>($txt_tenthboard)? $txt_tenthboard :'',
			'kv_ue_x_college'=>($school)? $school :'',
			'kv_ue_highedu_year'=>($txt_yearofpassing_1)? $txt_yearofpassing_1 :'',
			'kv_ue_pg_year'=>($txt_yearofpassing_2)? $txt_yearofpassing_2 :'',
			'kv_ue_g_year'=>($txt_yearofpassing_3)? $txt_yearofpassing_3 :'',
			'kv_ue_ug_year'=>($txt_yearofpassing_4)? $txt_yearofpassing_4 :'',
			'kv_ue_x_year'=>($txt_yearofpassing_5)? $txt_yearofpassing_5 :'',
			'kv_ue_x_deg'=>'');
        $this->db->insert("kv_usereducation", $educationdet);
    }
    // For update education details
    public function educationDetailUpdate($dataArr, $id)
    {
        //echo $id;exit;
        $this->db->where('user_id', $id);
        $res1 = $this->db->update('tbl_professional_info', $dataArr);
        //echo '<pre>';print_r($this->db->last_query());exit;
        return $res1;
    }

    // For insert education details
    public function educationDetailInsrt($dataArr)
    {
        $res1 = $this->db->insert('tbl_professional_info', $dataArr);
        return $res1;
    }

    // For update profession details
    public function proffesionDetailUpdate($dataArr, $id)
    {
        $this->db->where('user_id', $id);
        $res1 = $this->db->update('tbl_professional_info', $dataArr);
        return $res1;
    }

    // For insert profession details
    public function proffesionDetailInsert($dataArr)
    {
        $res1 = $this->db->insert('tbl_professional_info', $dataArr);
        return $res1;
    }

    // Check entry exist for property or not
    public function checkparentsDetailUpdate($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_parents_info');
        $this->db->where('user_id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    // For update parents details
    public function parentsDetailUpdate($dataArr, $id)
    {
        $this->db->where('user_id', $id);
        $res1 = $this->db->update('tbl_parents_info', $dataArr);
        return $res1;
    }

    // For update parents details
    public function parentsDetailInsert($dataArr)
    {
        $res1 = $this->db->insert('tbl_parents_info', $dataArr);
        return $res1;
    }

    public function checksiblingsDetailUpdate($userid)
    {
        $this->db->select('*');
        $this->db->from('tbl_siblings_info');
        $this->db->where('user_id', $userid);
        $query = $this->db->get()->row_array();
        return $query;
    }

    // For check parents sibling data
    public function checkParentsiblingsDetailUpdate($userid)
    {
        $this->db->select('*');
        $this->db->from('tbl_parents_sibling_info');
        $this->db->where('user_id', $userid);
        $query = $this->db->get()->row_array();
        return $query;
    }

    // For update sibling details
    public function siblingsDetailUpdate($dataArr, $id)
    {
        $this->db->where('user_id', $id);
        $res1 = $this->db->update('tbl_siblings_info', $dataArr);
        return $res1;
    }

    // For update parents sibling details
    public function ParentsiblingsDetailUpdate($dataArr, $id)
    {
        $this->db->where('user_id', $id);
        $res1 = $this->db->update('tbl_parents_sibling_info', $dataArr);
        return $res1;
    }

    // For insert sibling details
    public function siblingsDetailInsert($dataArr)
    {
        $res1 = $this->db->insert('tbl_siblings_info', $dataArr);
        return $res1;
    }

    // For insert sibling details
    public function ParentsiblingsDetailInsert($dataArr)
    {
        $res1 = $this->db->insert('tbl_parents_sibling_info', $dataArr);
        return $res1;
    }

    // For property modal popup data
    public function getPropertyDataForUpdate($userId)
    {
        $this->db->select('*');
        $this->db->from('ms_property_info');
        $this->db->where('ms_id', $userId);
        $query = $this->db->get()->row_array();
        // print_r($query);exit();
        return $query;
    }

    // Check entry exist for property or not
    public function checkpropertyDetailUpdate($id)
    {
        $this->db->select('*');
        $this->db->from('ms_property_info');
        $this->db->where('ms_id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    // Check entry exist for property or not
    public function checkpreferenceData($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_partner_preferences');
        $this->db->where('ms_id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    // For update preference details
    public function preferenceDetailUpdate($dataArr, $id)
    {
        $this->db->where('ms_id', $id);
        $res1 = $this->db->update('tbl_partner_preferences', $dataArr);
        return $res1;
    }

    // For insert preference details
    public function preferenceDetailInsert($dataArr)
    {
        $res1 = $this->db->insert('tbl_partner_preferences', $dataArr);
        return $res1;
    }

    // For update property details
    public function propertyDetailUpdate($dataArr, $id)
    {
        $this->db->where('ms_id', $id);
        $res1 = $this->db->update('ms_property_info', $dataArr);
        return $res1;
    }

    // For insert property details
    public function propertyDetailInsert($dataArr)
    {
        $res1 = $this->db->insert('ms_property_info', $dataArr);
        return $res1;
    }

    // get sister detail data for update
    public function getSistersDataForUpdate($userId, $Id)
    {
        $this->db->select('*');
        $this->db->from('tbl_sister_info');
        $this->db->where('user_id', $userId);
        $this->db->where('id', $Id);
        $query = $this->db->get()->row_array();
        // print_r($query);exit();
        return $query;
    }

    // get parents sister detail data for update
    public function getParentsSistersDataForUpdate($userId, $Id)
    {
        $this->db->select('*');
        $this->db->from('parents_sister_details');
        $this->db->where('user_id', $userId);
        $this->db->where('id', $Id);
        $query = $this->db->get()->row_array();
        // print_r($query);exit();
        return $query;
    }

    // For insert sister Data
    public function sisterDetailsInsert($dataArr)
    {
        $res1 = $this->db->insert('tbl_sister_info', $dataArr);
        return $res1;
    }

    // For insert parent sister Data
    public function ParentsisterDetailsInsert($dataArr)
    {
        $res1 = $this->db->insert('parents_sister_details', $dataArr);
        return $res1;
    }

    // For sister details update
    public function sisterDetailsUpdate($dataArr, $id, $sisid)
    {
        $this->db->where('user_id', $id);
        $this->db->where('id', $sisid);
        $res1 = $this->db->update('tbl_sister_info', $dataArr);
        return $res1;
    }

    // For parent sister details update
    public function parentsisterDetailsUpdate($dataArr, $id, $sisid)
    {
        $this->db->where('user_id', $id);
        $this->db->where('id', $sisid);
        $res1 = $this->db->update('parents_sister_details', $dataArr);
        return $res1;
    }

    // get brother detail data for update
    public function getBrotherDataForUpdate($userId, $Id)
    {
        $this->db->select('*');
        $this->db->from('tbl_brother_info');
        $this->db->where('id', $Id);
        $this->db->where('user_id', $userId);
        $query = $this->db->get()->row_array();
        // print_r($query);exit();
        return $query;
    }

    // get parents brother detail data for update
    public function getparentsBrotherDataForUpdate($userId, $Id)
    {
        $this->db->select('*');
        $this->db->from('parents_brother_details');
        $this->db->where('id', $Id);
        $this->db->where('user_id', $userId);
        $query = $this->db->get()->row_array();
        // print_r($query);exit();
        return $query;
    }

    // For insert brother Data
    public function brotherDetailsInsert($dataArr)
    {
        $res1 = $this->db->insert('tbl_brother_info', $dataArr);
        return $res1;
    }

    // For insert parent brother Data
    public function ParentsbrotherDetailsAdd($dataArr)
    {
        $res1 = $this->db->insert('parents_brother_details', $dataArr);
        return $res1;
    }

    // For brother details update
    public function brotherDetailsUpdate($dataArr, $userid, $id)
    {
        // echo $id, $userid;
        $this->db->where('user_id', $userid);
        $this->db->where('id', $id);
        $res1 = $this->db->update('tbl_brother_info', $dataArr);
        return $res1;
    }

    // For parents brother details update
    public function parentsbrotherDetailsUpdate($dataArr, $userid, $id)
    {
        // echo $id, $userid;
        $this->db->where('user_id', $userid);
        $this->db->where('id', $id);
        $res1 = $this->db->update('parents_brother_details', $dataArr);
        return $res1;
    }

    // get contact detail data for update
    public function getContactDataForUpdate($userId)
    {
        $this->db->select('tbl_primary_info.mobile, tbl_primary_info.email, tbl_primary_info.contact_exchaged,tbl_primary_info.no_of_match_makings,tbl_primary_info.comments,tbl_contact_info.*');
        $this->db->from('tbl_primary_info');
        $this->db->join('tbl_contact_info', 'tbl_contact_info.user_id = tbl_primary_info.id', 'LEFT');
        $this->db->where('tbl_primary_info.id', $userId);
        $query = $this->db->get()->row_array();
        // print_r($query);exit();
        return $query;
    }

    // For parents modal popup data
    public function getParentsDataForUpdate($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_parents_info');
        $this->db->where('user_id', $userId);
        $query = $this->db->get()->row_array();
        return $query;
    }

    // For parents modal popup data
    public function getSiblingDataForUpdate($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_siblings_info');
        $this->db->where('user_id', $userId);
        $query = $this->db->get()->row_array();
        // print_r($query);exit();
        return $query;
    }

    // For parents sibling modal popup data
    public function getRelativesDataForUpdate($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_parents_sibling_info');
        $this->db->where('user_id', $userId);
        $query = $this->db->get()->row_array();
        // print_r($query);exit();
        return $query;
    }

    // For parents sibling sister delete modal popup data
    public function deletesisterRelativesData($userId)
    {
        $this->db->where('id', $userId);
        $res = $this->db->delete('parents_sister_details');
        return $res;
    }

    // For parents sibling brother delete modal popup data
    public function deletebrotherRelativesData($userId)
    {
        $this->db->where('id', $userId);
        $res = $this->db->delete('parents_brother_details');
        return $res;
    }

    public function checkContactDetails($userid)
    {
        $this->db->select('*');
        $this->db->from('tbl_contact_info');
        $this->db->where('user_id', $userid);
        $query = $this->db->get()->row_array();
        return $query;
    }

    // For contact details update
    public function contactDetailUpdate($dataArr, $priInfoArr, $userid,$empreport,$count)
    {
        if($count == '1'){
             $this->db->insert('emp_individual_report',$empreport);
        }

        $this->db->where('user_id', $userid);
        $res1 = $this->db->update('tbl_contact_info', $dataArr);
        if ($res1) {
            $this->db->where('id', $userid);
            $res = $this->db->update('tbl_primary_info', $priInfoArr);
            return $res;
        }
    }
    
    //update city from parents details page
    public function contactCityDetailUpdate($dataContactArr, $id)
    {
        $this->db->where('user_id', $userid);
        $res1 = $this->db->update('tbl_contact_info', $dataArr);
        return $res;
    }
    
    // For contact city detail insert
    public function contactCityDetailsInsert($dataContactArr, $id)
    {
        $res1 = $this->db->insert('tbl_contact_info', $dataContactArr);
        return $res;
    }

    // For contact details insert
    public function contactDetailsInsert($dataArr, $priInfoArr, $userid,$empreport,$count)
    {
        if($count == '1'){
            $this->db->insert('emp_individual_report',$empreport);
       }
        $res1 = $this->db->insert('tbl_contact_info', $dataArr);
        if ($res1) {
            $this->db->where('id', $userid);
            $res = $this->db->update('tbl_primary_info', $priInfoArr);
            return $res;
        }
    }

    // to get astro detail
    public function get_astro_details($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id', $userId);
        $query = $this->db->get()->row_array();
        // print_r($query);exit();
        return $query;
    }

    // For contact details update
    public function astroDetailUpdate($dataArr, $userid)
    {
        $this->db->where('user_id', $userid);
        $res1 = $this->db->update('tbl_religion_info', $dataArr);
        return $res1;
    }

    // For contact details insert
    public function astroDetailInsert($dataArr)
    {
        $res = $this->db->insert('tbl_religion_info', $dataArr);
        return $res;
    }

    // public function getAstroDataForUpdate($user_id)
    // {
    //     $this->db->select("");
    //     $this->db->from('tbl_religion_info');
    //     $this->db->where('user_id', $userId);
    //     $query = $this->db->get()->row_array();
    //     // print_r($query);exit();
    //     return $query;
    // }

    public function getallheightsADM()
    {
        $this->db->select('height,status');
        $this->db->from('tbl_height');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function getallcastesADM()
    {
        $this->db->select('caste,status');
        $this->db->from('tbl_caste');
        $this->db->order_by('caste', 'asc');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function getallmothertoungesADM()
    {
        $this->db->select('mothertounge,status');
        $this->db->from('tbl_mothertounge');
        $this->db->where('status', 1);
        $this->db->order_by('mothertounge', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function getallprofessionsADM()
    {
        $this->db->select('profession,status');
        $this->db->from('tbl_profession');
        $this->db->where('status', 1);
        $this->db->order_by('profession', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function getalleducationsADM()
    {
        $this->db->select('heighsteducation,status');
        $this->db->from('tbl_heighsteducation');
        $this->db->where('status', 1);
        $this->db->order_by('heighsteducation', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function get_preference_data_ADM($user_id)
    {
        $this->db->select("*");
        $this->db->from('tbl_partner_preferences');
        $this->db->where('ms_id', $user_id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }

    public function getallcountriesADM()
    {
        $this->db->select('country,status');
        $this->db->from('tbl_country');
        $this->db->where('status', 1);
        $this->db->order_by('country', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function get_profile_complete($user_id)
    {
        $query = $this->db->query("select (basicdetails+religion+edu_prof+parents+Siblings+photo) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id=$user_id");
        $result = $query->result();
        
        return $result;
    }
    
    public function get_payment_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_payments');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->result_array();
        return $query;
    }
    
    public function get_all_degrees_ajax_user($id)
    {
        $this->db->select("d.id,d.hid,d.status,d.educationdegree");
        $this->db->from('tbl_educationdegree as d');
        $this->db->select("e.heighsteducation");
        $this->db->join('tbl_heighsteducation as e', 'd.hid=e.id', 'inner');
        $this->db->where('d.status', '1');
        $this->db->where("e.heighsteducation", $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function get_all_specialization_ajax_user($id, $highedu=null)
    {
        $this->db->select("s.id,s.hid,s.eid,s.status,s.specialization");
        $this->db->from('tbl_specialization as s');
        $this->db->select("d.educationdegree");
        $this->db->join('tbl_educationdegree as d', 's.eid=d.id', 'inner');
        $this->db->where('s.status', '1');
        $this->db->where("d.educationdegree", $id);
        if ($highedu) {
            $this->db->where("s.hid", $highedu);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        //echo '<pre>';echo $this->db->last_query();exit;
        return $result;
    }

    public function get_all_specialization_ajax($id)
    {
        $this->db->select("s.id,s.hid,s.eid,s.status,s.specialization");
        $this->db->from('tbl_specialization as s');
        $this->db->select("d.educationdegree");
        $this->db->join('tbl_educationdegree as d', 's.eid=d.id', 'inner');
        $this->db->where('s.status', '1');
        $this->db->where("d.educationdegree", $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function get_heighsteducations()
    {
        $this->db->select('heighsteducation,status,id,edutype');
        $this->db->from('tbl_heighsteducation');
        $this->db->where('status', '1');
        $this->db->order_by('heighsteducation', 'asc');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_educationdegrees()
    {
        $this->db->select('educationdegree,status,id');
        $this->db->from('tbl_educationdegree');
        $this->db->where('status', '1');
        $this->db->order_by('educationdegree', 'asc');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_specializations()
    {
        $this->db->select('specialization,status,id');
        $this->db->from('tbl_specialization');
        $this->db->where('status', '1');
        $this->db->order_by('specialization', 'asc');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_religion_details($user_id)
    {
        $this->db->select('user_id,marital_status,height,religion,mother_tounge,caste,sub_caste,gothram,place_of_birth,time_of_birth,star,raasi,dosham,updated_on');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_professional_details($user_id)
    {
        $this->db->select('user_id,heighst_education,education_degree,specialization,university,college,education_description,employee_in,occupation,annual_income,currency,company,about_profession,country,visatype,residing-since,arrival-date,departure-date,city,state,about_me,updated_on');
        $this->db->from('tbl_professional_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_parent_details($user_id)
    {
        $this->db->select('user_id,father_name,father_education,father_profession,father_email,father_mobile,fathers_father_name,fathers_father_state,fathers_father_district,fathers_father_native_place,mother_name,mother_education,mother_profession,mother_email,mother_mobile,mothers_father_name,mothers_father_state,mothers_father_district,mothers_father_native_place,updated_on,`father_semiprof`,`father_semiprof_det`,`father_natplace_d`,`mother_semiprof`,`mother_semiprof_det`,`mother_natplace_d`,`father_mother_name`,`mother_mother_name`');
        $this->db->from('tbl_parents_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    
    public function get_property_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('ms_property_info');
        $this->db->where('ms_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    
    public function get_property_count($user_id)
    {
        $this->db->select('*');
        $this->db->from('ms_property_info');
        $this->db->where('ms_id', $user_id);
        $query=$this->db->get()->result_array();
        return count($query);
    }
    
    public function get_sibling_details($user_id)
    {
        $this->db->select('user_id,no_of_brothers,no_of_sisters,no_of_elder_brothers,no_of_younger_brothers,no_of_elder_sisters,no_of_younger_sisters,updated_on');
        $this->db->from('tbl_siblings_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    //For parents siblings data
    public function get_parents_sibling_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_parents_sibling_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_sister_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_sister_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    // Te get sister of parents
    public function get_parents_sister_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('parents_sister_details');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_brother_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_brother_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    // To get brohters of parents details
    public function get_parents_brother_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('parents_brother_details');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_contact_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_contact_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    
    public function get_parent_city_details($user_id){
        $this->db->select('city');
        $this->db->from('tbl_contact_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;    
    }

    public function get_images_details($user_id)
    {
        $this->db->select('photos_id,MS_id,photoname,uploaded_date,ismain, applicationphotopath, fullphotopath');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $user_id);
        $this->db->order_by('photos_id', 'ASC');
        $query = $this->db->get()->result_array();
        return $query;
    }
    
    public function get_profilepic_details($user_id)
    {
        $this->db->select('id,user_id,image,updated_on,status');
        $this->db->from('upload-images');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('id', 'ASC');
        $this->db->limit('1');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_countries()
    {
        $this->db->select('*');
        $this->db->from('tbl_country');
        $this->db->where('status', '1');
        $this->db->order_by('country', 'asc');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getallprofessions()
    {
        $this->db->select('profession,status');
        $this->db->from('tbl_profession');
        $this->db->where('status', 1);
        $this->db->order_by('profession', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function get_all_heights()
    {
        $this->db->select('height,status');
        $this->db->from('tbl_height');
        $this->db->where('status', '1');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_religions()
    {
        $this->db->select('religion,status');
        $this->db->from('tbl_religion');
        $this->db->order_by('religion', 'asc');
        $this->db->where('status', '1');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_mothertounges()
    {
        $this->db->select('mothertounge,status');
        $this->db->from('tbl_mothertounge');
        $this->db->order_by('mothertounge', 'asc');
        $this->db->where('status', '1');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_castes()
    {
        $this->db->select('caste,status');
        $this->db->from('tbl_caste');
        $this->db->order_by('caste', 'asc');
        $this->db->where('status', '1');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_subcastes()
    {
        $this->db->select('subcaste,status');
        $this->db->from('tbl_subcaste');
        $this->db->order_by('subcaste', 'asc');
        $this->db->where('status', '1');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_stars()
    {
        $this->db->select('star,status');
        $this->db->from('tbl_star');
        $this->db->order_by('star', 'asc');
        $this->db->where('status', '1');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_zodic_signs()
    {
        $this->db->select('zodic,status');
        $this->db->from('tbl_zodic');
        $this->db->order_by('zodic', 'asc');
        $this->db->where('status', '1');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_subcastes_ajax($caste)
    {
        $this->db->select("s.subcaste,s.status,s.caste_id");
        $this->db->from('tbl_subcaste as s');
        $this->db->select("c.caste");
        $this->db->join('tbl_caste as c', 's.caste_id=c.id', 'inner');
        $this->db->where('s.status', '1');
        $this->db->where("c.caste", $caste);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function get_all_states_ajax($id)
    {
        $this->db->select("s.state,s.id,s.country_id");
        $this->db->from('tbl_state as s');
        $this->db->select("c.country");
        $this->db->join('tbl_country as c', 's.country_id=c.id', 'inner');
        $this->db->where('s.status', '1');
        $this->db->where("c.country", $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function get_all_states()
    {
        $this->db->select('state,status,id');
        $this->db->from('tbl_state');
        $this->db->where('status', '1');
        $this->db->order_by('state', 'asc');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_districts()
    {
        $this->db->select('district,status,id');
        $this->db->from('tbl_district');
        $this->db->where('status', '1');
        $this->db->order_by('district', 'asc');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_districts_ajax($id)
    {
        $this->db->select("c.district,c.state_id,c.status");
        $this->db->from('tbl_district as c');
        $this->db->select("s.state");
        $this->db->join('tbl_state as s', 'c.state_id=s.id', 'inner');
        $this->db->where('c.status', '1');
        $this->db->where("s.state", $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function get_all_districts_ajaxADM($id)
    {
        // echo $id;exit();
        $this->db->select("tbl_district.district");
        $this->db->from('tbl_district');
        $this->db->join('tbl_state', 'tbl_state.id = tbl_district.state_id', 'LEFT');
        $this->db->where('tbl_state.state', $id);
        $this->db->where('tbl_district.status', '1');
		$this->db->order_by("tbl_district.district", "ASC");
        $query = $this->db->get();
        $result = $query->result_array();
        // print_r($result);exit();
        return $result;
    }
    public function get_profile_info($id)
    {
        $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.date,p.year,p.month,p.email,p.mobile");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.star,r.time_of_birth,r.raasi,r.place_of_birth,r.gothram');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'inner');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.education_description,e.about_profession,e.currency,e.country,e.state,e.city,e.residing-since,e.arrival-date,e.departure-date,e.visatype');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'inner');
        $this->db->select('f.father_name,f.fathers_father_name,f.fathers_father_native_place,f.mother_name,mothers_father_name,f.mothers_father_native_place,f.user_id');
        $this->db->join('tbl_parents_info as f', 'p.id=f.user_id', 'inner');
        $this->db->select('s.user_id,s.no_of_brothers,s.no_of_sisters');
        $this->db->join('tbl_siblings_info as s', 'p.id=s.user_id', 'inner');
        $this->db->where('p.id', $id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }
    public function get_images($id)
    {
        $this->db->select('*');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $id);
         
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function update_record($id, $ImgData, $user_id)
    {
        $set_data = array(
                        'photoname' =>$ImgData,
                        'uploaded_date'=>date('Y-m-d H:i:s'),
                        'MS_id' =>$user_id
                        );

        $this->db->where('photos_id', $id);
        $result = $this->db->update('MS_photos', $set_data);
        return $result;
    }
    
    public function add_record($ImgData, $main_photo, $userid)
    {
        $set_data = array(
                        'MS_id' =>$userid,
                        'photoname' =>$ImgData,
                        'ismain' => $main_photo,
                        'uploaded_date'=>date('Y-m-d H:i:s')
                    );
        $result = $this->db->insert('MS_photos', $set_data);
        return $result;
    }
    
    public function status_record($id, $status)
    {
        $sts = ($status == 1 ? 0 : 1);
        $set_data = array(
                        'status' => $sts
                    );
        $this->db->where('id', $id);
        $result = $this->db->update('upload-images', $set_data);
        return $result;
    }
    public function get_single_record($id='')
    {
        $this->db->select("*");
        $this->db->from('MS_photos');
        if ($id != '') {
            $this->db->where("photos_id", $id);
            $query = $this->db->get();
            $result = $query->row_array();
        }
        return $result;
    }
    public function delete_record($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->delete('upload-images');
        return $result;
    }
    public function imagescount($id)
    {
        $this->db->select('photos_id');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $id);
        $result = $this->db->get()->result_array();
        return count($result);
    }
    
    public function get_payment_records($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_payments');
        $this->db->where('user_id', $user_id);
        $result = $this->db->get()->result_array();
        return count($result);
    }
    
    public function get_ToProfile_details($profileID)
    {
        $this->db->select('tbl_primary_info.*, ms_property_info.property_value');
        $this->db->from('tbl_primary_info');
        $this->db->join('ms_property_info', 'ms_property_info.ms_id = tbl_primary_info.id', 'LEFT');
        $this->db->where('tbl_primary_info.profile_id', $profileID);
        $result = $this->db->get()->row_array();
        // print_r($result);exit();
        return $result;
    }

    public function get_FromRevSendProfile_details($profileID)
    {
        $this->db->select('tbl_primary_info.*, tbl_religion_info.star, tbl_religion_info.raasi, tbl_religion_info.height, tbl_professional_info.heighst_education, tbl_professional_info.occupation, tbl_professional_info.annual_income, tbl_professional_info.country, tbl_professional_info.city, tbl_professional_info.state, tbl_professional_info.education_degree, tbl_parents_info.fathers_father_native_place, tbl_parents_info.mothers_father_native_place, ms_property_info.property_value');
        $this->db->from('tbl_primary_info');
        $this->db->join('tbl_religion_info', 'tbl_religion_info.user_id = tbl_primary_info.id', 'LEFT');
        $this->db->join('tbl_professional_info', 'tbl_professional_info.user_id = tbl_primary_info.id', 'LEFT');
        $this->db->join('tbl_parents_info', 'tbl_parents_info.user_id = tbl_primary_info.id', 'LEFT');
        $this->db->join('ms_property_info', 'ms_property_info.ms_id = tbl_primary_info.id', 'LEFT');
        $this->db->where('tbl_primary_info.profile_id', $profileID);
        $result = $this->db->get()->row_array();
        // print_r($result);exit();
        return $result;
    }

    public function get_ToPImage_details($ID)
    {
        $this->db->select('applicationphotopath');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $ID);
        $this->db->where('ismain', 1);
        $this->db->where('isactive', 1);
        $result = $this->db->get()->row_array();
        // print_r($result);exit();
        return $result;
    }

    public function get_ToProfile_detailsForMail($arr)
    {
        $proArr = explode(",", $arr);
        // print_r($proArr);exit();
        $this->db->select('tbl_primary_info.*, tbl_religion_info.star, tbl_religion_info.raasi, tbl_religion_info.height, tbl_professional_info.heighst_education, tbl_professional_info.occupation, tbl_professional_info.annual_income, tbl_professional_info.country, tbl_professional_info.city, tbl_professional_info.state, tbl_professional_info.education_degree, tbl_parents_info.fathers_father_native_place, tbl_parents_info.mothers_father_native_place, ms_property_info.property_value');
        $this->db->group_by('tbl_primary_info.profile_id');
        $this->db->from('tbl_primary_info');
        $this->db->join('tbl_religion_info', 'tbl_religion_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('tbl_professional_info', 'tbl_professional_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('tbl_parents_info', 'tbl_parents_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('ms_property_info', 'ms_property_info.ms_id = tbl_primary_info.id', 'left');
        $this->db->where_in('tbl_primary_info.profile_id', $proArr);
        $result = $this->db->get()->result_array();
        // echo $this->db->last_query();
        return $result;
    }
	public function get_ToProfile_detailsForMailFromSearch($arr)
    {
        $proArr = implode(",",$arr);
        $this->db->select('tbl_primary_info.*, tbl_religion_info.star, tbl_religion_info.raasi, tbl_religion_info.height, tbl_professional_info.heighst_education, tbl_professional_info.occupation, tbl_professional_info.annual_income, tbl_professional_info.country, tbl_professional_info.city, tbl_professional_info.state, tbl_professional_info.education_degree, tbl_parents_info.fathers_father_native_place, tbl_parents_info.mothers_father_native_place, ms_property_info.property_value');
        $this->db->from('tbl_primary_info');
        $this->db->join('tbl_religion_info', 'tbl_religion_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('tbl_professional_info', 'tbl_professional_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('tbl_parents_info', 'tbl_parents_info.user_id = tbl_primary_info.id', 'left');
        $this->db->join('ms_property_info', 'ms_property_info.ms_id = tbl_primary_info.id', 'left');
        $this->db->where('tbl_primary_info.id IN ('.$proArr.')');
		$this->db->group_by('tbl_primary_info.id');
		$result = $this->db->get()->result_array();
        //echo $this->db->last_query();
        return $result;
    }
    public function sendProfileOnMail($arr=null, $FProfileId=null, $IsrevSend=null, $sendprofile=null)
    {
        $array=array(
        "kv_spom_from_profileid"=>$FProfileId,
		"kv_spom_to_profileid"=>$arr,
		"kv_spom_created_by"=>$this->session->userdata('user_id'),
		"kv_spom_created_date"=>date('Y-m-d H:i:s'),
		"kv_spom_status"=>1,
		"kv_spom_sendreverse"=>$IsrevSend,
		"kv_spom_senttype"=>$sendprofile,
        );
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

    public function expressInterestInsert($dataArr)
    {
     
        $condition = '(from_msID='.$dataArr['from_msID'].' AND to_msID='.$dataArr['to_msID'].' ) OR (from_msID='.$dataArr['to_msID'].' AND to_msID='.$dataArr['from_msID'].' )';

        $this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where($condition);
        $result = $this->db->get()->row_array();
      
        if (empty($result)) {
            //    print_r("deva");die;
            $res1 = $this->db->insert('ms_servicelist', $dataArr);
            return $res1;
        }
         else {
            // print_r("cl");die;
            $upArr = array(
                'sentby_ID'  => ($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id'),
                // 'send_Date'  => date('Y-m-d'),
                'revsend_Date'  => date('Y-m-d H:i:s'),
                'rev_sent'   => 1
            );
            
            $this->db->where($condition);
            $res2 = $this->db->update('ms_servicelist', $upArr);
            return $res2;
        }
    }

    public function getServiceData()
    {
        $this->db->select("*");
        $this->db->from('ms_servicelist');
        // $this->db->where("rev_sent", 9);
        $query = $this->db->get();
        $results = $query->result();
        // print_r($results);exit;
        return $results;
    }

    public function getIDFromServiceData($Fid)
    {
        $status = 1;
        $this->db->select("$Fid as checkId, ms.from_msID,ms.share_type, ms.to_msID, ms.f_ticketid, ms.f_status, ms.t_status, DATE_FORMAT(ms.fs_Date, '%d-%m-%Y %H:%i') as fs_Date, ms.sentby_ID, DATE_FORMAT(ms.send_Date, '%d-%m-%Y %H:%i') as send_Date, DATE_FORMAT(ms.revsend_Date, '%d-%m-%Y %H:%i') as revsend_Date, Ftpl.profile_id as FproID, Ttpl.profile_id as TproID, Ftpl.first_name as FproFnm, Ftpl.last_name as FproLnm, Ttpl.first_name as TproFnm, Ttpl.last_name as TproLnm, Fadt.username as FpsID, Tadt.username as TpsID, Tadmindt.username as sendName");
        //$this->db->select("$Fid as checkId, ms.from_msID,ms.share_type, ms.to_msID, ms.f_ticketid, ms.f_status, ms.t_status,ms.fs_Date as fs_Date, ms.sentby_ID, ms.send_Date as send_Date, ms.revsend_Date as revsend_Date, Ftpl.profile_id as FproID, Ttpl.profile_id as TproID, Ftpl.first_name as FproFnm, Ftpl.last_name as FproLnm, Ttpl.first_name as TproFnm, Ttpl.last_name as TproLnm, Fadt.username as FpsID, Tadt.username as TpsID, Tadmindt.username as sendName");
        $this->db->from('ms_servicelist as ms');
		$this->db->join('tbl_primary_info as Ftpl', 'Ftpl.id = ms.from_msID', 'left');
        $this->db->join('tbl_primary_info as Ttpl', 'Ttpl.id = ms.to_msID', 'left');
        $this->db->join('ms_profilesetting as Fps', 'Fps.ms_id = ms.from_msID', 'left');
        $this->db->join('ms_profilesetting as Tps', 'Tps.ms_id = ms.to_msID', 'left');
        $this->db->join('tbl_admin_data as Fadt', 'Fadt.id = Fps.profileowner', 'left');
        $this->db->join('tbl_admin_data as Tadt', 'Tadt.id = Tps.profileowner', 'left');
        $this->db->join('tbl_admin_data as Tadmindt', 'Tadmindt.id = ms.sentby_ID', 'left');
        $this->db->where("from_msID", $Fid);
        // $this->db->or_where('(rev_sent1= 3)');
        // $this->db->or_where('(to_msID = '.$Fid.' AND rev_sent= '.$status.')');
		$this->db->group_by('from_msID, to_msID');
		$this->db->order_by("send_Date", "DESC");
        $query = $this->db->get();
        $results = $query->result();
		// echo $this->db->last_query();
        return $results;
    }
	
    public function getIDToServiceData($Tid)
    {
        $status = 1;
        $this->db->select("$Tid as checkId, ms.from_msID, ms.share_type, ms.to_msID, ms.t_ticketid, ms.t_status, ms.f_status, DATE_FORMAT(ms.ts_Date, '%d-%m-%Y %H:%i') as ts_Date, ms.sentby_ID, DATE_FORMAT(ms.send_Date, '%d-%m-%Y %H:%i') as send_Date, DATE_FORMAT(ms.revsend_Date, '%d-%m-%Y %H:%i') as revsend_Date, Ftpl.profile_id as FproID, Ttpl.profile_id as TproID, Ftpl.first_name as FproFnm, Ftpl.last_name as FproLnm, Ttpl.first_name as TproFnm, Ttpl.last_name as TproLnm, Fadt.username as FpsID, Tadt.username as TpsID, Tadmindt.username as sendName");
        //$this->db->select("$Tid as checkId, ms.from_msID, ms.share_type, ms.to_msID, ms.t_ticketid, ms.t_status, ms.f_status, ms.ts_Date as ts_Date, ms.sentby_ID, ms.send_Date as send_Date,ms.revsend_Date as revsend_Date, Ftpl.profile_id as FproID, Ttpl.profile_id as TproID, Ftpl.first_name as FproFnm, Ftpl.last_name as FproLnm, Ttpl.first_name as TproFnm, Ttpl.last_name as TproLnm, Fadt.username as FpsID, Tadt.username as TpsID, Tadmindt.username as sendName");
        $this->db->from('ms_servicelist as ms');
        $this->db->join('tbl_primary_info as Ftpl', 'Ftpl.id = ms.from_msID', 'left');
        $this->db->join('tbl_primary_info as Ttpl', 'Ttpl.id = ms.to_msID', 'left');
        $this->db->join('ms_profilesetting as Fps', 'Fps.ms_id = ms.from_msID', 'left');
        $this->db->join('ms_profilesetting as Tps', 'Tps.ms_id = ms.to_msID', 'left');
        $this->db->join('tbl_admin_data as Fadt', 'Fadt.id = Fps.profileowner', 'left');
        $this->db->join('tbl_admin_data as Tadt', 'Tadt.id = Tps.profileowner', 'left');
        $this->db->join('tbl_admin_data as Tadmindt', 'Tadmindt.id = ms.sentby_ID', 'left');
        $this->db->where("to_msID", $Tid);
        $this->db->or_where('(to_msID = '.$Tid.' AND rev_sent= '.$status.')');
        $this->db->or_where('(to_msID = '.$Tid.' AND rev_sent1= 5)');
        // $this->db->or_where('(rev_sent1= 3)');
		$this->db->group_by('to_msID, from_msID');
		$this->db->order_by("send_Date", "DESC");
        $query = $this->db->get();
        $results = $query->result();
		// echo $this->db->last_query();
        return $results;
    }
    public function payment_details($id){
        $select = " SELECT
        t.profile_id,
        t.first_name,t.last_name,
        t.registered_on AS registered_date,
        p.paid_date AS date_of_payment,
        p.payment_type AS payment_type,
        (pp.expiry_date) AS expiry_date,
        m.ms_usertype,
        p.agreed_amount AS registered_amount,
        p.saamount,
        p.paid_times
    FROM
        tbl_primary_info AS t
    LEFT JOIN
        tbl_payments_info AS p ON t.id = p.user_id
    LEFT JOIN
        tbl_payments_log AS pp ON (p.user_id = pp.user_id and p.paid_times = pp.paid_times)
    LEFT JOIN
        ms_profilesetting AS m ON m.ms_id = t.id
    WHERE
        t.profile_id = '$id'
    GROUP BY
        t.profile_id, m.ms_usertype, p.paid_times";
// print_r($select);die;
      $result = $this->db->query($select);
       return  $result->result_array();
      
    }
    public function profile_share_report($id){
        $idSuffix = substr($id, 4);
        // print_r($id);die;
     $select =" SELECT
     (SELECT COUNT(to_msID) FROM ms_servicelist WHERE to_msID = a.id) AS me_recived,
     (SELECT COUNT(from_msID) FROM ms_servicelist WHERE from_msID = a.id) AS my_intrested,
     (SELECT COUNT(kv_msi_profilefkid) FROM kv_mysideinterests WHERE kv_msi_profilefkid = a.id) AS  my_intrest,
   (SELECT COUNT(kv_msi_interested_on) FROM kv_mysideinterests WHERE 	kv_msi_interested_on = a.id) AS  another_person_intrestedonme,
   (SELECT login_count FROM ms_profilesetting WHERE profilesetting_id = a.id) AS  number_of_times_login,
    (SELECT max(login_date) FROM ms_profilesetting WHERE profilesetting_id = a.id) AS  last_login,
     (SELECT sum(contact_exchaged) FROM emp_individual_report WHERE user_id = '$idSuffix') AS  contact_exchanged,
    (SELECT sum(no_of_match_makings) FROM emp_individual_report WHERE user_id = '$idSuffix') AS  match_makings

    
 FROM
     tbl_primary_info AS a 

 WHERE
     a.profile_id = '$id' ";
    //  echo $this->db->last_query();exit();
          $result = $this->db->query($select);
          return  $result->result_array();

    }
    public function viewcontacts($id){
        $idSuffix = substr($id, 4);
        $select  = "SELECT sum(contact_exchaged),sum(no_of_match_makings) 
        FROM emp_individual_report   WHERE user_id = '$idSuffix' group by '$idSuffix' "; 
                  $result = $this->db->query($select);
                  return  $result->result_array();

    }
    public function image($id){
        // print_r($id);die;

        $idSuffix = substr($id, 4);
      
        $select = " SELECT `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
        FROM `tbl_primary_info` as `p` 
        LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id` 
        WHERE u.ms_id= $idSuffix limit 1 ";
        // print_r($select);die;
         $result = $this->db->query($select)->row_array();
    
        return $result;

    }

    public function getNameServiceData($id)
    {
        $this->db->select('first_name, last_name');
        $this->db->from('tbl_primary_info');
        $this->db->where("id", $id);
        $query = $this->db->get();
        $results = $query->row_array();
        return $results;
    }

    public function verifyMobile($userId)
    {
        $this->db->set('is_Mverified', 1);
        $this->db->where('id', $userId);
        $res = $this->db->update('tbl_primary_info');
        return $res;
    }

    public function verifyEmail($userId)
    {
        $this->db->set('is_Everified', 1);
        $this->db->where('id', $userId);
        $res = $this->db->update('tbl_primary_info');
        return $res;
    }

    public function updateEliteInfo($userID, $elite, $usertype=null)
    {
        $this->db->set(array('elite'=>$elite,'ms_usertype'=>$usertype));
        $this->db->where('ms_id', $userID);
        $res = $this->db->update('ms_profilesetting');
        return $res;
    }
	 public function updateShownInfo($userID, $shownValue)
    {
       // echo $shownValue;exit;
        $this->db->set('ms_showntype',$shownValue);
        $this->db->where('ms_id', $userID);
        $res = $this->db->update('ms_profilesetting');
        return $res;
    }
     public function updatePrimeInfo($userID, $primeValue)
    {
       // echo $shownValue;exit;
        $this->db->set('prime',$primeValue);
        $this->db->where('ms_id', $userID);
        $res = $this->db->update('ms_profilesetting');
        return $res;
    }
	public function getallreadyemailsentinfoByFromIds($existingFromids, $toId) {
		$resp = [];
        $this->db->where_in('from_msID', $existingFromids);
        $results = $this->db->get_where('ms_servicelist', array('to_msID'=>$toId))->result_array();
		$alreadySent = [];
		if(count($results) > 0) {
			foreach($results as $result) {
				$profileData = $this->getProfileDetailsById($result["from_msID"]);
				array_push($alreadySent, $profileData["profile_id"]);
			}
			$sentProfiles = implode(", ", $alreadySent);
			$resp["status"] = "exist";
			$resp["profiles"] = $sentProfiles;
		} else {
			$resp["status"] = "no";
			$resp["profiles"] = "";
		}
        return $resp;
	}
    
    public function getallreadyemailsentinfo($toids, $fromid)
    {
		$resp = [];
        $this->db->where_in('to_msID', $toids);
        $results = $this->db->get_where('ms_servicelist', array('from_msID'=>$fromid))->result_array();
		$alreadySent = [];
		if(count($results) > 0) {
			foreach($results as $result) {
				$profileData = $this->getProfileDetailsById($result["to_msID"]);
				array_push($alreadySent, $profileData["profile_id"]);
			}
			$sentProfiles = implode(", ", $alreadySent);
			$resp["status"] = "exist";
			$resp["profiles"] = $sentProfiles;
		} else {
			$resp["status"] = "no";
			$resp["profiles"] = "";
		}
        return $resp;
    }
	
	public function getProfileDetailsById($id)
    {
        $this->db->select('id,first_name,last_name, profile_id');
        $this->db->from('tbl_primary_info');
        $this->db->where('id', $id);
        $result = $this->db->get()->row_array();
        return $result;
    }
	
	public function getPropertyValueRanges() {
	//echo 'hi';
        $this->db->select('*');
        $this->db->from('tbl_propery_values');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function getProfilesViewedByUser($user_id, $params = array()) {

        $user_id = substr($user_id, -4);

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
			// echo $this->db->last_query();exit;
			 $result = $query->result_array();
		}        
		
		
        return $result;
    }
    
     public function employee_details_list()
    {
         $rm_id = $this->session->userdata('user_id'); 
        // print_r($rm_id);die;
        $sql= '';
        if($this->session->userdata('type')=='staff'){
            
            $sql = "AND ms_profilesetting.profileowner = '$rm_id' ";
            
        }
        
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $query = $this->db->query("select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings,user_id,tbl_primary_info.profile_id,tbl_primary_info.first_name,tbl_primary_info.last_name,tbl_primary_info.registered_on 
        from tbl_profilebattery 
        INNER join tbl_primary_info on tbl_profilebattery.user_id = tbl_primary_info.id   
        INNER join ms_profilesetting on ms_profilesetting.ms_id =  tbl_primary_info.id 
        where tbl_primary_info.status != '2' and tbl_primary_info.status != '3'  $sql
        group by user_id  ORDER BY  tbl_primary_info.registered_on DESC ");
        // print_r($query);die;
        $result = $query->result();
        
        return $result;
            
    }

    public function employee_details_list_count()
    {
          $rm_id = $this->session->userdata('user_id'); 
        // print_r($rm_id);die;
        $sql= '';
        if($this->session->userdata('type')=='staff'){
            
            $sql = "AND ms_profilesetting.profileowner = '$rm_id' ";
            
        }
        
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $query = $this->db->query("select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings,user_id,tbl_primary_info.profile_id,tbl_primary_info.first_name,tbl_primary_info.last_name,tbl_primary_info.registered_on 
        from tbl_profilebattery 
        INNER join tbl_primary_info on tbl_profilebattery.user_id = tbl_primary_info.id  
        INNER join ms_profilesetting on ms_profilesetting.ms_id =  tbl_primary_info.id 
        where tbl_primary_info.status != '2' and tbl_primary_info.status != '3' $sql
        group by user_id  ");
        // print_r($query);die;
        $result = $query->num_rows();
        
        return $result;
            
    }

    public function rm_image(){
		$a = $this->session->userdata('user_id');

		$select = "select * from tbl_admin_data where id = $a "; 
		$result = $this->db->query($select)->row();
		return $result; 
		
	}


}
