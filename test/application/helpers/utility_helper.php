<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function getprofilesettingsrm($userarray=NULL)
	{
		$ci=& get_instance();
		//echo '<pre>';print_r();
		$ci->db->group_by('profileowner');
		$ci->db->where('ms_id in('.$userarray.')');
		$resp=$ci->db->get('ms_profilesetting')->result();
		//echo $ci->db->last_query();exit;
		return $resp;
	}

	function emailtemplate($title=NULL)
	{
		$ci=& get_instance();
		$results=$ci->db->get_where('email_templates',array('et_key'=>'header'))->row()->et_body;
		$results.=$ci->db->get_where('email_templates',array('et_key'=>$title))->row()->et_body;
		$results.=$ci->db->get_where('email_templates',array('et_key'=>'footer'))->row()->et_body;
		return $results;
	}
	function getprofilesetbyuserid($userid)
	{
		$ci=& get_instance();
		//echo '<pre>';print_r();
		$ci->db->group_by('ms_id');
		$ci->db->where('ms_id',$userid);
		$resp=$ci->db->get('ms_profilesetting')->row();
		//echo $ci->db->last_query();exit;
		return $resp;
	}

	function getpaymentdetbyid($uid)
	{
		$ci=& get_instance();
		$results=$ci->db->get_where('tbl_payments_info',array('user_id'=>$uid))->row();
		return $results;
	}
	function staffadminsessionset()
	{
		$ci=& get_instance();
		if($ci->session->userdata('type')=='staff')
		$ci->session->set_userdata('user_id', $ci->session->userdata('staff_id'));

		if($ci->session->userdata('type')=='admin')
		$ci->session->set_userdata('user_id', $ci->session->userdata('admin_id'));
	}

	function getuserdetbyid($uid)
	{
		$ci=& get_instance();
		$results=$ci->db->get_where('tbl_primary_info',array('id'=>$uid))->row();
		return 	$results;
	}

	function getexistingintinfobytwoids($ids=array())
	{
		$ci=& get_instance();
		$ci->db->where("kv_msi_profilefkid in(".$ids.") and kv_msi_interested_on in(".$ids.")");
		$results=$ci->db->get('kv_mysideinterests')->row();
		return 	$results;
	}

	function getuserdetbyprofid($uid)
	{
		$ci=& get_instance();
		$results=$ci->db->get_where('tbl_primary_info',array('profile_id'=>$uid))->row();
		//echo '<pre>'; echo $ci->db->last_query();exit;
		return 	$results;
	}
	function getstaffdetbyclientid($userid)
	{
		$ci=& get_instance();
		$ci->db->select('id,username,phone_no');
		$ci->db->group_by('profileowner');
		$ci->db->where('ms_id',$userid);
		$ci->db->join('tbl_admin_data','id = profileowner');
		$resp=$ci->db->get('ms_profilesetting')->row();
		//echo $ci->db->last_query();exit;
		return $resp;
	}
	function getstaffdetbyid($sid)
	{
		//echo $sid;exit;
		$ci=& get_instance();
		$resp=$ci->db->get_where('tbl_admin_data',array('id'=>$sid))->row();
		//echo $ci->db->last_query();exit;
		return $resp;
	}	

	function unpaidmembers_count()
	{
		$ci=& get_instance();
		$ci->db->group_by('pi.id');
		$ci->db->join('ms_profilesetting ps','ps.ms_id=pi.id and pi.id not in(select user_id from tbl_payments_info)');

		$resp=$ci->db->get_where('tbl_primary_info pi',array('pi.status'=>'1','ps.profileowner'=>$ci->session->userdata('user_id')))->num_rows();
		//echo $ci->db->last_query();exit;
		return $resp;	
	}

	function freeprofticketexpiry_count()
	{
		$ci=& get_instance();
		$ci->db->group_by('pi.id');
		$ci->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
		$ci->db->where("ps.rem_date > DATE_ADD(NOW(),INTERVAL -2 DAY)");
		$resp=$ci->db->get_where('tbl_primary_info pi',array('ps.profileowner'=>$ci->session->userdata('user_id')))->num_rows();
		//echo $ci->db->last_query();exit;
		return $resp;
	}
	
	function noservicesincemonth_count()
	{
		$ci=& get_instance();
		$ci->db->group_by('pi.id');
		$ci->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
		$ci->db->where("ps.last_call_updated < DATE_ADD(NOW(),INTERVAL -10 DAY)");
		$resp=$ci->db->get_where('tbl_primary_info pi',array('ps.profileowner'=>$ci->session->userdata('user_id')))->num_rows();
		//echo $ci->db->last_query();exit;
		return $resp;
	}

	function nearbyexpiryprofiles_count()
	{
		$ci=& get_instance();
		$ci->db->group_by('pi.id');
		$ci->db->join('tbl_payments_log pl','pl.user_id=pi.id');
		$ci->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
		$ci->db->where('pl.expiry_date > NOW()');
		$resp=$ci->db->get_where('tbl_primary_info pi',array('ps.profileowner'=>$ci->session->userdata('user_id')))->num_rows();
		// echo $ci->db->last_query();exit;
		return $resp;
	}

	
function nearbyexpiryprofiles_count_header()
{
    $ci = &get_instance();
    $ci->db->group_by('pi.id');
    $ci->db->join('tbl_payments_log pl', 'pl.user_id=pi.id');
    $ci->db->join('ms_profilesetting ps', 'ps.ms_id=pi.id');

    if ($ci->session->userdata('type') == 'staff') {
        // If the user is of type 'staff', add the condition to filter by profile owner
        $ci->db->where('ps.profileowner', $ci->session->userdata('user_id'));
    }

    $ci->db->select('pi.*, MAX(DATE(pl.expiry_date)) as formatted_expiry_date');
    // $ci->db->where('pl.expiry_date < NOW()');

    // Add HAVING clause for filtering aggregated results
    $ci->db->having('formatted_expiry_date < NOW()');

	$ci->db->where_not_in('pi.status',array(2,3));

    $resp = $ci->db->get('tbl_primary_info pi')->num_rows();
    // echo $ci->db->last_query();
    // exit;
    return $resp;
}
	
	
	

	function freenewprofiles_count()
	{
		//$ci->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
		$ci=& get_instance();
		$ci->db->group_by('pi.id');

		$ci->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
		$ci->db->where('last_call_updated IS NULL');
		$resp=$ci->db->get_where('tbl_primary_info pi',array('pi.status'=>'1','ps.profileowner'=>$ci->session->userdata('user_id')))->num_rows();
		//echo $ci->db->last_query();exit;
		return $resp;
	}
	
	function mysidefollowupscloseticket_count()
	{
		$ci=& get_instance();

		$ci->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$ci->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');
		$ci->db->where("(kv_msi_onresstatus='reject' OR kv_msi_rmstatus  in('closeticket','cancel','settled'))");
		$resp=$ci->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid'=>$ci->session->userdata('user_id')))->num_rows();//,'kv_msi_onresstatus'=>'reject'
		//echo $ci->db->last_query();exit;
		return $resp;
	}
	
	function mysideclosetickets_count()
	{
		$ci=& get_instance();
		$ci->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$ci->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');
		$oneMonthAgo = date('Y-m-d', strtotime('-1 month'));
		$ci->db->where("(kv_msi_onresstatus='reject' OR kv_msi_rmstatus in('closeticket','cancel'))");
		$ci->db->where('kv_msi_created_date >=', $oneMonthAgo);
		$resp=$ci->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid'=>$ci->session->userdata('user_id')))->num_rows();//,'kv_msi_onresstatus'=>'reject'
		// echo $ci->db->last_query();exit;
		return $resp;
	}

	function bothsideinterest_count()
	{
		$ci=& get_instance();
		$ci->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$ci->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');
		$ci->db->where('(kv_msi_rmstatus not in("mms","closeticket","cancel","settled") OR kv_msi_rmstatus IS NULL) AND (kv_msi_client_rmid = "'.$ci->session->userdata('user_id').'" OR kv_msi_interested_rmid = "'.$ci->session->userdata('user_id').'")');
		$resp=$ci->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_onresstatus'=>'accepted'))->num_rows();
		//echo $ci->db->last_query();exit;
		return $resp;
	}
		
	function matchmetingserious_count()
	{
		$ci=& get_instance();
		$ci->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$resp=$ci->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_onresstatus'=>'accepted','kv_msi_rmstatus'=>'mms'))->num_rows();
		return $resp;
	}
	
	function mysidefollowupsint_count($fortyeighthours=NULL)
	{
		$ci=& get_instance();
		//echo 'hi';exit;
		$ci->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$ci->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');
		$ci->db->join('ms_profilesetting ps','ps.ms_id=kv_msi_profilefkid');
		$ci->db->where("(kv_msi_onresstatus ='oneside_accepted' AND (kv_msi_rmstatus not in ('closeticket','cancel','settled','mms') OR kv_msi_rmstatus IS NULL))");
		if($fortyeighthours)
		$ci->db->where("(`kv_msi_created_date` < DATE_ADD(NOW(),INTERVAL -2 DAY) AND ps.`last_call_updated` IS NULL)");
		$resp=$ci->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid'=>$ci->session->userdata('user_id')))->num_rows();
		//echo $ci->db->last_query();exit;
		return $resp;
	}
	
	function mysidesinterest_count()
	{
		$ci=& get_instance();
		//$ci->db->limit('0,2000');
		$ci->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$ci->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');
		$ci->db->where("(kv_msi_onresstatus ='oneside_accepted' AND (kv_msi_rmstatus not in ('closeticket','cancel','settled','mms') OR kv_msi_rmstatus IS NULL))");
		$resp=$ci->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid'=>$ci->session->userdata('user_id')))->num_rows();
		//echo $ci->db->last_query();exit;
		return $resp;
	}

	function opposideclosetickets_count()
	{
		$ci=& get_instance();
		$ci->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$ci->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');
		$ci->db->where("(kv_msi_onresstatus='reject' OR kv_msi_rmstatus in ('closeticket','cancel','settled'))");
		$resp=$ci->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid !='=>$ci->session->userdata('user_id'),'kv_msi_interested_rmid'=>$ci->session->userdata('user_id')))->num_rows();
		return $resp;
	}

	function oppositesidesinterest_count($fortyeighthours=NULL)
	{
		$ci=& get_instance();
		$ci->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$ci->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');
		$ci->db->join('ms_profilesetting ps','ps.ms_id=kv_msi_profilefkid');
		$ci->db->where('(`kv_msi_onresstatus` = "oneside_accepted" AND (kv_msi_rmstatus not in("mms","closeticket","cancel","settled") OR kv_msi_rmstatus IS NULL))');
		if($fortyeighthours)
		$ci->db->where("(`kv_msi_created_date` < DATE_ADD(NOW(),INTERVAL -2 DAY) AND ps.`last_call_updated` IS NULL)");
		$resp=$ci->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_interested_rmid'=>$ci->session->userdata('user_id'),'kv_msi_client_rmid !='=>$ci->session->userdata('user_id')))->num_rows();
		//echo $ci->db->last_query();exit;
		return $resp;
	}
	
	function getMatchmetingSeriousByProfileId($profileId)
	{
		$ci=& get_instance();
		$ci->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$ci->db->where('(kv_msi_profilefkid = "'.$profileId.'" OR kv_msi_interested_on = "'.$profileId.'")');
		$resp=$ci->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_onresstatus'=>'accepted','kv_msi_rmstatus'=>'mms'))->num_rows();
		//echo $ci->db->last_query();
		return $resp;
	}
	
	function getAgeDetails($user_id)
	{
		$ci=& get_instance();
		$ci->db->select("date,month,year,profile_id");
		$ci->db->from('tbl_primary_info');
		$ci->db->where('id', $user_id);
		$query = $ci->db->get()->row_array();
		$month = date('m',strtotime($query["month"]));
		$age = date_diff(date_create($query["year"]."-".$month."-".$query["date"]), date_create('today'))->y;
		$query["age"] = $age;
		return $query;
	}
	
	function getLatestProfilesCount()
	{
		$ci=& get_instance();
		$ci->db->select("p.*");
		$ci->db->from('tbl_primary_info as p');
		$ci->db->select('payment_status, elite, profileowner');
		$ci->db->join('ms_profilesetting as mprosetting', 'p.id=mprosetting.MS_id', 'left');	
		$ci->db->join('MS_photos as u', 'u.MS_id=p.id', 'inner');		
		if($ci->session->userdata('type')=='staff')
		{
			$ci->db->where('mprosetting.profileowner >', 0);
			$ci->db->where('mprosetting.ms_usertype !=', 'elite');
		}
		$ci->db->where("`registered_on` > DATE_ADD(NOW(),INTERVAL -10 DAY)");
		$ci->db->where("u.ismain=1 AND u.isactive=1");
		$ci->db->order_by('registered_on', 'DESC');
		$query = $ci->db->get()->num_rows();
		//echo $ci->db->last_query();		
		return $query;
	}

	function reminder_notification() {
		$ci = &get_instance();
		$ci->db->where('rem_date !=', NULL);  
	
		$ci->db->where('reason !=', '');  
		$ci->db->where('status !=', 1);    
		$count = $ci->db->count_all_results('ms_profilesetting');

		$ci->db->where('r.rem_date IS NOT NULL', null, false); 
		$ci->db->where('r.reason !=', '');  
		$ci->db->where('r.status !=', 1);  
	
		$rm = $ci->session->userdata("type");
		if ($rm == 'staff') {
			$rm_id = $ci->session->userdata("user_id");
			$ci->db->where('ms.profileowner', $rm_id);
		}
	  
		$ci->db->select('t.profile_id, t.first_name, t.last_name, r.ms_id, r.rem_date, r.reason');
		$ci->db->from('ms_profilesetting as ms');
		$ci->db->join('tbl_primary_info as t', 't.id = ms.ms_id', 'left');
		$ci->db->join('remainders as r', 'r.ms_id = t.id', 'left');

		$count = $ci->db->count_all_results();
	
		return $count;
	}

	function new_registred_users(){
		$ci = &get_instance();
		$ci->db->where('isNotify !=','0');
		$ci->db->where('status =', '1');
		$count=$ci->db->count_all_results('tbl_primary_info ');
		return $count;
	}

	function get_online_users($rm){
		$ci = &get_instance();
		
		$ci->db->select('COUNT(*) as count');
		$ci->db->from('tbl_current_login a');
		$ci->db->join('ms_profilesetting b', 'a.user_id = b.ms_id');
		$ci->db->where('b.profileowner', $rm);
		$ci->db->where('a.online', 'Yes');
		
		$query = $ci->db->get();
		$result = $query->row();
		
		return $result->count;
	}
	

	function get_new_registered_users_data() {
		$ci = &get_instance();
		$ci->db->select('id,profile_id, gender, first_name'); 
		$ci->db->where('isNotify !=', '0');
		$ci->db->where('status =', '1');
		$query = $ci->db->get('tbl_primary_info');
	
		// Check if there are results
		if ($query->num_rows() > 0) {
			return $query->result();  // Return an array of user data
		} else {
			return false;  // No results found
		}
	}

	
	function get_prime_active_profiles_count() {
		$ci = &get_instance();
    
		// Initialize the SQL query
		$ci->db->select('A.*, B.*, C.username');
		$ci->db->from('ms_profilesetting AS A');
		$ci->db->join('tbl_primary_info AS B', 'A.ms_id = B.id', 'inner');
		$ci->db->join('tbl_admin_data AS C', 'C.id = A.profileowner', 'inner');
		$ci->db->where('A.prime', 'yes');
		$ci->db->where('B.status', '1');
	
		// Get user type and ID
		$type = $ci->session->userdata("type");
		$id = $ci->session->userdata('user_id');
	
		// Add condition if user is staff
		if ($type == "staff") {
			$ci->db->where('A.profileowner', $id);
		}
	
		$query = $ci->db->get();
	
		// Check if there are results
		if ($query->num_rows() > 0) {
			return $query->num_rows(); // Return an array of user data
		} else {
			return false;  // No results found
		}
	}
	


	



	
	

	

	function getlangkeywords($keyword)
	{
		$array['highestqua']='Highest Qualification';		
		$array['postgraduate']='Post Graduate';
		$array['graduate']='Graduate';
		$array['undergraduate']='Under Graduate';
		$array['school']='School';
		$array['moredetails']='More Details';		
		$array['profession']='Profession';
		$array['sendinterest']='Interest';
		$array['notinterest']='Not Interest';
		$array['mysidesinterest']='MySide Interest';
		$array['profileviewed']='Profile Viewed';
		$array['oppositesidesinterest']='OppositeSide interest';
		$array['mysidefollowupsint']='Interested';
		$array['matchmetingserious']='Match Meting Serious (MMS)';
		$array['mysideclosetickets']='Closed Tickets';
		$array['opposideclosetickets']='Closed Tickets';
		$array['freenewprofiles']='New Profiles';
		$array['nearbyexpiryprofiles']='Near by Expiry Profiles';
		$array['noservicesincemonth']='No Service Since Last 10 days';
		$array['freeprofticketexpiry']='Marketing Ticket Exp Within 2 days';
		$array['unpaidmembers']='Unpaid Members';
		$array['bothsideinterest']='BothSide Interest';
		$array['mysidefollowupscloseticket']='Close Tickets';
		$array['Reminder']='Reminder';
		
		$array['dd_open']='Open';
		$array['dd_consultrm']='Consulted RM';
		$array['dd_mms']='Match Meting Serious (MMS)';
		$array['dd_closetickets']='Close Tickets';
		$array['dd_cancel']='Cancel';
		$array['dd_settled']='Settled';
		
		$array['cl_type_incoming']='Incoming Call';
		$array['cl_type_outgoing']='Outgoing Call';
		$array['cl_type_memo']='Memo';
		$array['cl_status_connected']='Connected';
		$array['cl_status_not_connected']='Not Connected';
		$array['cl_status_switch_off']='Switched Off';
		$array['cl_status_connected']='Connected';
		$array['cl_status_not_connected']='Not Connected';
		$array['cl_status_switch_off']='Switched Off';

		$array['prime_profiles']='Prime Profiles';
		
		return $array[$keyword];
	}