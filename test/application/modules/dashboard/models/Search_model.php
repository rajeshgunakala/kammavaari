<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
    public function get_user_id($profile_id) {
        $this->db->select('id');
        $this->db->from('tbl_primary_info');
        $this->db->where('profile_id', $profile_id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function get_user_profile_id($id) {
        $this->db->select('profile_id');
        $this->db->from('tbl_primary_info');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->row_array();
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
        $this->db->where('p.status', 1);
        $this->db->group_by('u.user_id');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function get_primary_details($user_id) {
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,dob,YEAR(CURDATE()) - CAST(year AS UNSIGNED) as age');
        $this->db->from('tbl_primary_info');
        $this->db->where('profile_id', $user_id);
       
        $query = $this->db->get()->row_array();
        $month = date('m',strtotime($query["month"]));
		 $query['age'] = date_diff(date_create($query["year"]."-".$month."-".$query["date"]), date_create('today'))->y;
        return $query;
    }
    public function get_primary_detailsNew($user_id) {
		//echo 'hi';
        $this->db->select('email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id,dob, YEAR(CURDATE()) - CAST(year AS UNSIGNED) as age');
        $this->db->from('tbl_primary_info');
        $this->db->where('profile_id', $user_id);
        $result = $this->db->get()->row_array();
        $month = date('m',strtotime($result["month"]));
         $result['age'] = date_diff(date_create($result["year"]."-".$month."-".$result["date"]), date_create('today'))->y;
		//print_r($result);exit;
		return $result;
    }
    public function get_religion_details($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_contact_details($user_id) {
        $this->db->select('city');
        $this->db->from('tbl_contact_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_profession_details($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_professional_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_parents_details($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_parents_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_siblings_details($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_siblings_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_property_details($user_id) {
        $this->db->select('*');
        $this->db->from('ms_property_info');
        $this->db->where('ms_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function getallrecords() {
        $user_id = $this->session->userdata('user_id');
        $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'inner');
        /*	$this->db->where('user_id !=',$user_id);
        */
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'inner');
        $this->db->select('u.image,u.user_id');
        $this->db->join('upload-images as u', 'p.id=u.user_id', 'left');
        $this->db->where('p.status', 1);
        $this->db->where('p.id !=', $user_id);
        $this->db->group_by('u.user_id');
        $query = $this->db->get();
        $result = $query->result_array();
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
        $this->db->select('*');
        $this->db->from('MS_photos as u');
        $this->db->select("p.profile_id,p.id");
        $this->db->join('tbl_primary_info as p', 'u.MS_id=p.id', 'inner');
        $this->db->where('p.profile_id', $profile_id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function update_view_status($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('to_msid', $to_user_id);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
        if ($rows == 0) {
            $data = array('from_msid' => $user_id, 'to_msid' => $to_user_id, 'viewed_status' => 1);
            $this->db->insert('MS_shortlist_viewedd_ignored', $data);
        }
        else {
            $data = array('shortlist_status' => 0, 'viewed_status' => 1, 'ignore_status' => 0);
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $this->db->update('MS_shortlist_viewedd_ignored', $data);
        } 
    }
    public function recently_viewed($user_id) {
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('viewed_status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
        return $result;
    }
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
    public function contact_count($user_id) {
        $this->db->select('*');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('from_msid', $user_id);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
        return $result;
    }
    public function update_shortlist_status($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('to_msid', $to_user_id);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
        if ($rows == 0) {
            $data = array('from_msid' => $user_id, 'to_msid' => $to_user_id, 'shortlist_status' => 1, 'shortlist_date' => date('Y-m-d H:i:s'));
            $this->db->insert('MS_shortlist_viewedd_ignored', $data);
        } else {
            $data = array('shortlist_status' => 1, 'viewed_status' => 0, 'ignore_status' => 0, 'shortlist_date' => date('Y-m-d H:i:s'));
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $this->db->update('MS_shortlist_viewedd_ignored', $data);
        }
    }
    public function update_ignored_status($user_id, $to_user_id) {
        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('to_msid', $to_user_id);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
        if ($rows == 0) {
            $data = array('from_msid' => $user_id, 'to_msid' => $to_user_id, 'ignore_status' => 1,'ignore_date' => date('Y-m-d H:i:s'));
            $this->db->insert('MS_shortlist_viewedd_ignored', $data);
        } else {
            $data = array('ignore_status' => 1, 'viewed_status' => 0, 'shortlist_status' => 0,'ignore_date' => date('Y-m-d H:i:s'));
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $this->db->update('MS_shortlist_viewedd_ignored', $data);
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
        if ($rows == 0) {
            $data = array('From_MSid' => $user_id, 'to_MSid' => $to_user_id);
            $this->db->insert('MS_ViewedContacts', $data);
            $this->db->where('from_msid', $user_id);
            $this->db->where('to_msid', $to_user_id);
            $this->db->delete('MS_shortlist_viewedd_ignored');
        }
    }
	// To check and insert/update service ticket and status
    public function addWhatsAppShareInsertAndView($ticket, $sentBy, $full_profile = NULL) {
        $arr = explode("-", $ticket);
        // print_r($arr);exit();
       $condition = '(from_msID=' . $arr[0] . ' AND to_msID=' . $arr[1] . ' )';
        $condition1 = '(from_msID=' . $arr[1] . ' AND to_msID=' . $arr[0] . ' )';
		
		//check service record exist
		$this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where('(from_msID=' . $arr[0] . ' AND to_msID=' . $arr[1] . ' ) OR (from_msID=' . $arr[1] . ' AND to_msID=' . $arr[0] . ' )');
        $query = $this->db->get();

       $existRecords = $query->num_rows();
		//no records
		if($existRecords == 0) {
			$dataArr = array(
				'from_msID'  => $arr[0],
				'to_msID'    => $arr[1],
				'sentby_ID'  => $sentBy,
				'send_Date'  => date('Y-m-d H:i:s'),
				'fs_Date'  => date('Y-m-d H:i:s'),
				'sentprofile_full'=> "",
				'rev_sent'   => 0,
				'f_status'=> 1,
				'f_ticketid'=> $arr[0]."-".$arr[1],
				'share_type' => 'whatsapp',
				'sentprofile_full' => $full_profile
			);
			$res1 = $this->db->insert('ms_servicelist', $dataArr);
            return $res1;
		} else {		
			$this->db->select('*');
			$this->db->from('ms_servicelist');
			$this->db->where($condition);
			$query = $this->db->get();
			$status = $query->row_array();
			if (!empty($status)) {
				if ($status['f_status'] == 0) {
					$dataArr1 = array('f_ticketid' => $ticket, 'f_status' => 1, 'fs_Date' => date('Y-m-d H:i:s'));
					$this->db->where($condition);
					$res = $this->db->update('ms_servicelist', $dataArr1);
				} else {
					$dataArr1 = array('fs_Date' => date('Y-m-d H:i:s'));
					$this->db->where($condition);
					$res = $this->db->update('ms_servicelist', $dataArr1);
				}
			}
			$this->db->select('*');
			$this->db->from('ms_servicelist');
			$this->db->where($condition1);
			$query = $this->db->get();
			$status1 = $query->row_array();
			if (!empty($status1)) {
				if ($status1['t_status'] == 0) {
					$dataArr2 = array('t_ticketid' => $ticket, 't_status' => 1, 'ts_Date' => date('Y-m-d H:i:s'));
					$this->db->where($condition1);
					$res = $this->db->update('ms_servicelist', $dataArr2);
                    return $res;
				} else {
					$dataArr2 = array('ts_Date' => date('Y-m-d H:i:s'));
					$this->db->where($condition1);
					$res = $this->db->update('ms_servicelist', $dataArr2);
                    return $res;
				}
			}
			if ($res) {
				return $res;
			} else {
				return $res1;
			}
		}
    }
	
    // To update ticket and status
    public function update_user_profile_view_status($ticket) {
        $arr = explode("-", $ticket);
        // print_r($arr);exit();
        $condition = '(from_msID=' . $arr[0] . ' AND to_msID=' . $arr[1] . ' )';
        $condition1 = '(from_msID=' . $arr[1] . ' AND to_msID=' . $arr[0] . ' )';
        $this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where($condition);
        $query = $this->db->get();
        $status = $query->row_array();
        if (!empty($status)) {
            if ($status['f_status'] == 0) {
                $dataArr1 = array('f_ticketid' => $ticket, 'f_status' => 1, 'fs_Date' => date('Y-m-d'));
                $this->db->where($condition);
                $res = $this->db->update('ms_servicelist', $dataArr1);
            } else {
                $dataArr1 = array('fs_Date' => date('Y-m-d'));
                $this->db->where($condition);
                $res = $this->db->update('ms_servicelist', $dataArr1);
            }
        }
        $this->db->select('*');
        $this->db->from('ms_servicelist');
        $this->db->where($condition1);
        $query = $this->db->get();
        $status1 = $query->row_array();
        if (!empty($status1)) {
            if ($status1['t_status'] == 0) {
                $dataArr2 = array('t_ticketid' => $ticket, 't_status' => 1, 'ts_Date' => date('Y-m-d'));
                $this->db->where($condition1);
                $res = $this->db->update('ms_servicelist', $dataArr2);
            } else {
                $dataArr2 = array('ts_Date' => date('Y-m-d'));
                $this->db->where($condition1);
                $res = $this->db->update('ms_servicelist', $dataArr2);
            }
        }
        if ($res) {
            return $res;
        } else {
            return $res1;
        }
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
    public function update_Notinterested_status($ticket) {
        $this->db->set("f_status", 3);
        $this->db->where("f_ticketid", $ticket);
        $res = $this->db->update('ms_servicelist');
        $this->db->set("t_status", 3);
        $this->db->where("t_ticketid", $ticket);
        $res1 = $this->db->update('ms_servicelist');
        if ($res) {
            return $res;
        } else {
            return $res1;
        }
    }
    public function get_data_for_email($ticket) {
        $arr = explode("-", $ticket);
        //echo '<pre>';print_r($arr);exit;
        $this->db->select('first_name, last_name');
        $this->db->from('tbl_primary_info');
        $this->db->where('tbl_primary_info.id', $arr[0]);
        $result = $this->db->get()->row_array();
        $this->db->select('tbl_primary_info.mobile, tbl_admin_data.username, tbl_admin_data.phone_no');
        $this->db->join('ms_profilesetting', 'ms_profilesetting.ms_id = tbl_primary_info.id', 'left');
        $this->db->join('tbl_admin_data', 'tbl_admin_data.id = ms_profilesetting.profileowner', 'left');
        $this->db->from('tbl_primary_info');
        $this->db->where('tbl_primary_info.id', $arr[1]);
        $result1 = $this->db->get()->row_array();
        $res = array_merge($result, $result1);
        return $res;
    }
    public function update_user_profile_interested_status_n($ticket) {
        //  echo '<pre>...';print_r($ticket);
        $arr = explode("-", $ticket[1]);
        //print_r($arr);exit;
        $condition = '(from_msID=' . $arr[0] . ' AND to_msID=' . $arr[1] . ' )';
        $condition1 = '(from_msID=' . $arr[1] . ' AND to_msID=' . $arr[0] . ' )';
        $dataArr1 = array(
        //  'f_ticketid' => $ticket,
        'f_status' => 2, 'fs_Date' => date('Y-m-d'));
        $dataArr2 = array(
        //  't_ticketid' => $ticket,
        't_status' => 2, 'ts_Date' => date('Y-m-d'));
        $this->db->where($condition);
        $res = $this->db->update('ms_servicelist', $dataArr1);
        $this->db->where($condition1);
        $res1 = $this->db->update('ms_servicelist', $dataArr2);
        if ($res) {
            return $res;
        } else {
            return $res1;
        }
    }
    // To update interested status
    public function update_user_profile_interested_status($ticket) {
        $arr = explode("-", $ticket);
        // print_r($arr);exit();
        $condition = '(from_msID=' . $arr[0] . ' AND to_msID=' . $arr[1] . ' )';
        $condition1 = '(from_msID=' . $arr[1] . ' AND to_msID=' . $arr[0] . ' )';
        $dataArr1 = array('f_ticketid' => $ticket, 'f_status' => 2, 'fs_Date' => date('Y-m-d'));
        $dataArr2 = array('t_ticketid' => $ticket, 't_status' => 2, 'ts_Date' => date('Y-m-d'));
        $this->db->where($condition);
        $res = $this->db->update('ms_servicelist', $dataArr1);
        $this->db->where($condition1);
        $res1 = $this->db->update('ms_servicelist', $dataArr2);
        if ($res) {
            return $res;
        } else {
            return $res1;
        }
    }
    public function education_info($userid) {
        $this->db->order_by('kv_usereducation_id', 'DESC');
        $results = $this->db->get_where('kv_usereducation', array('kv_userfkid' => $userid))->row();
        return $results;
    }
    public function get_profile_rm_details($userid) {
        $this->db->select("pfs.ms_usertype,adm.id as rmid, adm.phone_no as rm_phone, adm.username as rm_username");
        $this->db->from('tbl_primary_info as p');
        $this->db->join('ms_profilesetting as pfs', 'p.id=pfs.ms_id', 'left');
        $this->db->join('tbl_admin_data as adm', 'pfs.profileowner=adm.id', 'left');
        $results = $this->db->where('p.id', $userid)->get()->result_array();
        //print_r($results);
        return $results;
    }
}