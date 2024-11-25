<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Employee_model extends CI_Model
{
	public function bothsideinterest()
	{
		$this->db->select('piinton.id as "toid",piclient.id as "fromid",kv_msi_client_rmid,kv_msi_interested_rmid,kv_msi_profilefkid,kv_msi_interested_on,kv_msi_rmstatus,kv_msi_id,kv_msi_modified_date,sd.username,sd.phone_no,sd.id as "staffid",piinton.first_name as "intonclientfname",piinton.last_name as "intonclientlname",piclient.first_name as "clientfname",piclient.last_name as "clientlname",kv_msi_created_date,piclient.profile_id as "clientprofileid",piinton.profile_id as "intonclientprofileid"');
		$this->db->limit('0,2000');
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');	
		$this->db->join('tbl_primary_info as piinton','piinton.id=kv_msi_interested_on');
		$this->db->join('tbl_primary_info as piclient','piclient.id=kv_msi_profilefkid');
		$this->db->where('(kv_msi_rmstatus not in("mms","closeticket","cancel","settled") OR kv_msi_rmstatus IS NULL) AND (kv_msi_client_rmid = "'.$this->session->userdata('user_id').'" OR kv_msi_interested_rmid = "'.$this->session->userdata('user_id').'")');
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_onresstatus'=>'accepted'))->result();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function bothsideinterestTotalRecords()
	{
		$this->db->select('kv_msi_client_rmid');
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');	
		$this->db->where('(kv_msi_rmstatus not in("mms","closeticket","cancel","settled") OR kv_msi_rmstatus IS NULL) AND (kv_msi_client_rmid = "'.$this->session->userdata('user_id').'" OR kv_msi_interested_rmid = "'.$this->session->userdata('user_id').'")');
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_onresstatus'=>'accepted'))->num_rows();
		return $resp;
	}
	
	public function bothsideinterestRecord($limit, $offset)
	{
		$this->db->select('kv_msi_client_rmid,kv_msi_interested_rmid,kv_msi_profilefkid,kv_msi_interested_on,kv_msi_rmstatus,kv_msi_id,kv_msi_modified_date,sd.username,sd.phone_no,sd.id as "staffid",kv_msi_created_date');
		$this->db->limit($limit, $offset);
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');
		$this->db->select('mservice.*');
		$this->db->join('ms_servicelist mservice','mservice.id = servicelistPkId', 'left');
		$this->db->where('(kv_msi_rmstatus not in("mms","closeticket","cancel","settled") OR kv_msi_rmstatus IS NULL) AND (kv_msi_client_rmid = "'.$this->session->userdata('user_id').'" OR kv_msi_interested_rmid = "'.$this->session->userdata('user_id').'")');
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_onresstatus'=>'accepted'))->row_array();
		//echo $this->db->last_query();exit;
		return $resp;
	}	
	
	public function matchmetingserious()
	{
		$this->db->select('kv_msi_client_rmid,kv_msi_interested_rmid,kv_msi_profilefkid,kv_msi_interested_on,kv_msi_rmstatus,kv_msi_id,kv_msi_modified_date,sd.username,sd.phone_no,sd.id as "staffid",piinton.first_name as "intonclientfname",piinton.last_name as "intonclientlname",piclient.first_name as "clientfname",piclient.last_name as "clientlname",kv_msi_created_date,piclient.profile_id as "clientprofileid",piinton.profile_id as "intonclientprofileid"');
		//$this->db->limit('0,2000');
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');	
		$this->db->join('tbl_primary_info as piinton','piinton.id=kv_msi_interested_on');
		$this->db->join('tbl_primary_info as piclient','piclient.id=kv_msi_profilefkid');
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_onresstatus'=>'accepted','kv_msi_rmstatus'=>'mms'))->result();
		// $query = $this->db->get();
		//    $result = $query->num_rows();
		return $resp;
	}
	
	public function matchmetingseriousTotalRecords()
	{
		$this->db->select('kv_msi_client_rmid');
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id = kv_msi_interested_rmid');
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_onresstatus'=>'accepted','kv_msi_rmstatus'=>'mms'))->num_rows();
		return $resp;
	}
	
	public function matchmetingseriousRecord($limit, $offset)
	{
		$this->db->select('kv_msi_client_rmid,kv_msi_interested_rmid,kv_msi_profilefkid,kv_msi_interested_on,kv_msi_rmstatus,kv_msi_id, kv_msi_modified_date,sd.username,sd.phone_no,sd.id as "staffid",kv_msi_created_date');
		$this->db->limit($limit, $offset);
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');
		$this->db->select('mservice.*');
		$this->db->join('ms_servicelist mservice','mservice.id = servicelistPkId', 'left');
		$resp = $this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_onresstatus'=>'accepted','kv_msi_rmstatus'=>'mms'))->row_array();
		//echo "<pre>";print_r($resp);exit;
		return $resp;
	}
	
	function opposidesidesinterest($fortyeighthours=NULL)
	{
		$this->db->select('kv_msi_client_rmid,kv_msi_interested_rmid,kv_msi_profilefkid,kv_msi_interested_on,kv_msi_rmstatus,kv_msi_id,sd.username,sd.phone_no,sd.id as "staffid",piinton.first_name as "intonclientfname",piinton.last_name as "intonclientlname",piclient.first_name as "clientfname",piclient.last_name as "clientlname",kv_msi_created_date,piclient.profile_id as "clientprofileid",piinton.profile_id as "intonclientprofileid"');
		$this->db->limit('0,2000');
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');	
		$this->db->join('tbl_primary_info as piinton','piinton.id=kv_msi_interested_on');
		$this->db->join('tbl_primary_info as piclient','piclient.id=kv_msi_profilefkid');
		$this->db->join('ms_profilesetting ps','ps.ms_id=kv_msi_profilefkid');
		$this->db->where('(`kv_msi_onresstatus` = "oneside_accepted" AND (kv_msi_rmstatus not in("mms","closeticket","cancel","settled") OR kv_msi_rmstatus IS NULL))');
		if($fortyeighthours)
		$this->db->where("(`kv_msi_created_date` < DATE_ADD(NOW(),INTERVAL -2 DAY) AND ps.`last_call_updated` IS NULL)");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_interested_rmid'=>$this->session->userdata('user_id'),'kv_msi_client_rmid !='=>$this->session->userdata('user_id')))->result();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function oppositeSideInterestTotalRecords($fortyeighthours=NULL)
	{
		$this->db->select('kv_msi_client_rmid');
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');
		$this->db->join('ms_profilesetting ps','ps.ms_id=kv_msi_profilefkid');		
		$this->db->where('(`kv_msi_onresstatus` = "oneside_accepted" AND (kv_msi_rmstatus not in("mms","closeticket","cancel","settled") OR kv_msi_rmstatus IS NULL))');
		if($fortyeighthours)
		$this->db->where("(`kv_msi_created_date` < DATE_ADD(NOW(),INTERVAL -2 DAY) AND ps.`last_call_updated` IS NULL)");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_interested_rmid'=>$this->session->userdata('user_id'),'kv_msi_client_rmid !='=>$this->session->userdata('user_id')))->num_rows();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function oppositeSideInterestRecord($fortyeighthours=NULL, $limit, $offset)
	{
		$this->db->select('kv_msi_client_rmid,kv_msi_interested_rmid,kv_msi_profilefkid,kv_msi_interested_on,kv_msi_rmstatus,kv_msi_id,sd.username,sd.phone_no,sd.id as "staffid",kv_msi_created_date');
		$this->db->limit($limit, $offset);
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');
		$this->db->join('ms_profilesetting ps','ps.ms_id=kv_msi_profilefkid');
		$this->db->select('mservice.*');
		$this->db->join('ms_servicelist mservice','mservice.id = servicelistPkId', 'left');
		$this->db->where('(`kv_msi_onresstatus` = "oneside_accepted" AND (kv_msi_rmstatus not in("mms","closeticket","cancel","settled") OR kv_msi_rmstatus IS NULL))');
		if($fortyeighthours)
		$this->db->where("(`kv_msi_created_date` < DATE_ADD(NOW(),INTERVAL -2 DAY) AND ps.`last_call_updated` IS NULL)");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_interested_rmid'=>$this->session->userdata('user_id'),'kv_msi_client_rmid !='=>$this->session->userdata('user_id')))->row_array();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function opposideclosetickets()
	{
		$this->db->select('piinton.id as "toid",piclient.id as "fromid", kv_msi_rmstatus,kv_msi_id,kv_msi_modified_date,sd.username,sd.phone_no,sd.id as "staffid",piinton.first_name as "intonclientfname",piinton.last_name as "intonclientlname",piclient.first_name as "clientfname",piclient.last_name as "clientlname",kv_msi_created_date,piclient.profile_id as "clientprofileid",piinton.profile_id as "intonclientprofileid"');
		$this->db->limit('0,2000');
		$this->db->order_by('kv_msi_modified_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');	
		$this->db->join('tbl_primary_info as piinton','piinton.id=kv_msi_interested_on');
		$this->db->join('tbl_primary_info as piclient','piclient.id=kv_msi_profilefkid');
		$this->db->where("(kv_msi_onresstatus='reject' OR kv_msi_rmstatus in ('closeticket','cancel','settled'))");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid !='=>$this->session->userdata('user_id'),'kv_msi_interested_rmid'=>$this->session->userdata('user_id')))->result();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function oppositeSideClosedTicketsTotalRecords()
	{
		$this->db->select('kv_msi_rmstatus');
		$this->db->order_by('kv_msi_modified_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');
		$this->db->where("(kv_msi_onresstatus = 'reject' OR kv_msi_rmstatus in ('closeticket','cancel','settled'))");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid !='=>$this->session->userdata('user_id'),'kv_msi_interested_rmid'=>$this->session->userdata('user_id')))->num_rows();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function oppositeSideClosedTicketsRecord($limit, $offset)
	{
		$this->db->select('kv_msi_client_rmid, kv_msi_interested_rmid, kv_msi_profilefkid, kv_msi_interested_on, kv_msi_rmstatus, kv_msi_id, kv_msi_modified_date, sd.username, sd.phone_no, sd.id as "staffid", kv_msi_created_date, close_reason');
		$this->db->limit($limit, $offset);
		$this->db->order_by('kv_msi_modified_date','DESC');
		$this->db->group_by('kv_msi_profilefkid, kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');
		$this->db->select('mservice.*');
		$this->db->join('ms_servicelist mservice','mservice.id = servicelistPkId', 'left');
		$this->db->where("(kv_msi_onresstatus='reject' OR kv_msi_rmstatus in ('closeticket','cancel','settled'))");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid !='=>$this->session->userdata('user_id'),'kv_msi_interested_rmid'=>$this->session->userdata('user_id')))->row_array();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function mysidesinterest($fortyeighthours=NULL)
	{
		$this->db->select('kv_msi_client_rmid,kv_msi_interested_rmid,kv_msi_profilefkid,kv_msi_interested_on,kv_msi_rmstatus,kv_msi_id,sd.username,sd.phone_no,sd.id as "staffid",piinton.first_name as "intonclientfname",piinton.last_name as "intonclientlname",piclient.first_name as "clientfname",piclient.last_name as "clientlname",kv_msi_created_date,piclient.profile_id as "clientprofileid",piinton.profile_id as "intonclientprofileid"');
		$this->db->limit('0,2000');
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');	
		$this->db->join('tbl_primary_info as piinton','piinton.id=kv_msi_interested_on');
		$this->db->join('tbl_primary_info as piclient','piclient.id=kv_msi_profilefkid');
		$this->db->where("(kv_msi_onresstatus ='oneside_accepted' AND (kv_msi_rmstatus not in ('closeticket','cancel','settled','mms') OR kv_msi_rmstatus IS NULL))");
		if($fortyeighthours) {
			$this->db->where("(`kv_msi_created_date` < DATE_ADD(NOW(),INTERVAL -2 DAY) AND ps.`last_call_updated` IS NULL)");
		}
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid'=>$this->session->userdata('user_id')))->result();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function mysidefollowupsint($fortyeighthours=NULL)
	{
		$this->db->select('kv_msi_client_rmid,kv_msi_interested_rmid,kv_msi_profilefkid,kv_msi_interested_on,kv_msi_rmstatus,kv_msi_id,sd.username,sd.phone_no,sd.id as "staffid",piinton.first_name as "intonclientfname",piinton.last_name as "intonclientlname",piclient.first_name as "clientfname",piclient.last_name as "clientlname",kv_msi_created_date,piclient.profile_id as "clientprofileid",piinton.profile_id as "intonclientprofileid"');
		$this->db->limit('0,2000');
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');	
		$this->db->join('tbl_primary_info as piinton','piinton.id=kv_msi_interested_on');
		$this->db->join('tbl_primary_info as piclient','piclient.id=kv_msi_profilefkid');
		$this->db->join('ms_profilesetting ps','ps.ms_id=kv_msi_profilefkid');
		$this->db->where("(kv_msi_onresstatus ='oneside_accepted' AND (kv_msi_rmstatus not in ('closeticket','cancel','settled','mms') OR kv_msi_rmstatus IS NULL))");
		if($fortyeighthours)
		$this->db->where("(`kv_msi_created_date` < DATE_ADD(NOW(),INTERVAL -2 DAY) AND ps.`last_call_updated` IS NULL)");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid' => $this->session->userdata('user_id')))->result();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function mySideFollowupsInterestTotalRecords($fortyeighthours=NULL)
	{
		$this->db->select('kv_msi_client_rmid');
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid, kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');
		$this->db->join('ms_profilesetting ps','ps.ms_id=kv_msi_profilefkid');
		$this->db->where("(kv_msi_onresstatus ='oneside_accepted' AND (kv_msi_rmstatus not in ('closeticket','cancel','settled','mms') OR kv_msi_rmstatus IS NULL))");
		if($fortyeighthours) {
			$this->db->where("(`kv_msi_created_date` < DATE_ADD(NOW(),INTERVAL -2 DAY) AND ps.`last_call_updated` IS NULL)");
		}
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid'=>$this->session->userdata('user_id')))->num_rows();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function mySideFollowupsInterestRecord($fortyeighthours=NULL, $limit, $offset)
	{
		$this->db->select('kv_msi_client_rmid,kv_msi_interested_rmid,kv_msi_profilefkid,kv_msi_interested_on,kv_msi_rmstatus,kv_msi_id,sd.username,sd.phone_no,sd.id as "staffid",kv_msi_created_date');
		$this->db->limit($limit, $offset);
		$this->db->order_by('kv_msi_created_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');
		$this->db->join('ms_profilesetting ps','ps.ms_id=kv_msi_profilefkid');
		$this->db->select('mservice.*');
		$this->db->join('ms_servicelist mservice','mservice.id = servicelistPkId', 'left');
		$this->db->where("(kv_msi_onresstatus ='oneside_accepted' AND (kv_msi_rmstatus not in ('closeticket','cancel','settled','mms') OR kv_msi_rmstatus IS NULL))");
		if($fortyeighthours) {
			$this->db->where("(`kv_msi_created_date` < DATE_ADD(NOW(),INTERVAL -2 DAY) AND ps.`last_call_updated` IS NULL)");
		}
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid' => $this->session->userdata('user_id')))->row_array();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function mysideclosetickets()
	{
		$this->db->select('piinton.id as "toid",piclient.id as "fromid", kv_msi_client_rmid, kv_msi_interested_rmid,kv_msi_profilefkid,kv_msi_interested_on, kv_msi_rmstatus,kv_msi_id,kv_msi_modified_date,sd.username,sd.phone_no,sd.id as "staffid",piinton.first_name as "intonclientfname",piinton.last_name as "intonclientlname",piclient.first_name as "clientfname",piclient.last_name as "clientlname",kv_msi_created_date,piclient.profile_id as "clientprofileid",piinton.profile_id as "intonclientprofileid"');
		$this->db->limit('0,2000');
		$this->db->order_by('kv_msi_modified_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');	
		$this->db->join('tbl_primary_info as piinton','piinton.id=kv_msi_interested_on');
		$this->db->join('tbl_primary_info as piclient','piclient.id=kv_msi_profilefkid');
		$this->db->where("(kv_msi_onresstatus='reject' OR kv_msi_rmstatus in ('closeticket','cancel','settled'))");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid'=>$this->session->userdata('user_id')))->result();//,'kv_msi_onresstatus'=>'reject'
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function mySideClosedTicketsTotalRecords()
	{
		$this->db->select('kv_msi_client_rmid, kv_msi_interested_rmid, kv_msi_profilefkid, kv_msi_interested_on, kv_msi_rmstatus, kv_msi_id, kv_msi_modified_date, sd.username, sd.phone_no,sd.id as "staffid", kv_msi_created_date');
		$this->db->order_by('kv_msi_modified_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');
		$this->db->where("(kv_msi_onresstatus='reject' OR kv_msi_rmstatus in ('closeticket','cancel','settled'))");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid'=>$this->session->userdata('user_id')))->num_rows();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function mySideClosedTicketsRecord($limit, $offset)
	{
		$this->db->select('kv_msi_client_rmid, kv_msi_interested_rmid, kv_msi_profilefkid, kv_msi_interested_on, kv_msi_rmstatus, kv_msi_id, kv_msi_modified_date, sd.username, sd.phone_no, sd.id as "staffid", kv_msi_created_date, close_reason');
		$this->db->limit($limit, $offset);
		$this->db->order_by('kv_msi_modified_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_client_rmid');
		$this->db->select('mservice.*');
		$this->db->join('ms_servicelist mservice','mservice.id = servicelistPkId', 'left');
		$this->db->where("(kv_msi_onresstatus='reject' OR kv_msi_rmstatus in ('closeticket','cancel','settled'))");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid'=>$this->session->userdata('user_id')))->row_array();//,'kv_msi_onresstatus'=>'reject'
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	public function freeprofticketexpiry()
	{
		$this->db->limit(2000);
		$this->db->select('pi.*,ps.rem_date');	
		$this->db->order_by('last_call_updated','ASC');
		$this->db->group_by('pi.id');
		$this->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
		$this->db->where("ps.rem_date > DATE_ADD(NOW(),INTERVAL -2 DAY)");
		$resp=$this->db->get_where('tbl_primary_info pi',array('ps.profileowner'=>$this->session->userdata('user_id')))->result();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	function get_registerby($userid)
	{				
		$this->db->join('tbl_admin_data','rm_fkid=id');
		$results=$this->db->get_where('registerby_det',array('user_fkid'=>$userid))->row();
		return $results;
	}
	function profinttrackdetbyprofids($profid1=NULL,$profid2=NULL)
	{
		$results=$this->db->get_where('kv_mysideinterests',array('kv_msi_profilefkid'=>$profid1,'kv_msi_interested_on'=>$profid2))->row();
		return $results;
	}
	function getrmnotesbyintid($pf1,$rmid,$intonid=NULL,$lim=NULL)
	{
		if($lim)	
			$this->db->limit($lim);
			$this->db->order_by('kv_created_date','DESC');	
		if($intonid)
			$this->db->where(array('kv_mysideintfkid'=>$intonid));
		$this->db->select('adm.username');
		$this->db->select('notes.*');
		$this->db->join('tbl_admin_data adm','adm.id = kv_created_by');
		$results=$this->db->get_where('kv_rmnotes notes',array('kv_rmfkid'=>$rmid,'kv_ufkid'=>$pf1))->result();	
		//echo $this->db->last_query();exit;
		return $results;
	}
	
	function addstaffadmin()
	{
		extract($_POST);		
		$getexist=$this->db->get_where('tbl_admin_data',array('username'=>$txt_username))->num_rows();
		if($getexist)
		{
			return "0";
		}
		$array=array(
		'username'=>$txt_username,
		'password'=>$txt_password,
		'email'=>$txt_email,
		'phone_no'=>$txt_phone,
		'type'=>$sel_usertype,
		'rm_type'=>$rm_type,
		'status'=>1
		);
		//$this->db->where(array('id'=>$txt_sid));
		$this->db->insert('tbl_admin_data',$array);
		return '1';
	}
	
	function staffdelete()
	{
		extract($_POST);
		
		//$getexist=$this->db->get_where('tbl_admin_data',array('username'=>$txt_username,'id !='=>$txt_sid))->num_rows();
		 
		$array=array(
		'status'=>0 
		);
		$this->db->where(array('id'=>$txt_sid));
		$this->db->update('tbl_admin_data',$array);
		return '1';
	}
	function staffupdate()
	{
		extract($_POST);
		
		$getexist=$this->db->get_where('tbl_admin_data',array('username'=>$txt_username,'id !='=>$txt_sid))->num_rows();
		if($getexist)
		{return "0";}
		$array=array(
		'username'=>$txt_username,
		'password'=>$txt_password,
		'email'=>$txt_email,
		'phone_no'=>$txt_phone,
		'rm_type'=>$rm_type,
		'type'=>$sel_usertype
		);
		$this->db->where(array('id'=>$txt_sid));
		$this->db->update('tbl_admin_data',$array);
		return '1';
	}
	function addeditstaff()
	{
	    $this->db->select('t.*,rm.rm_type_name');
	    $this->db->join('tbl_rm_type as rm','rm.id=t.rm_type','left');
		$this->db->order_by('id','DESC');
		$results=$this->db->get_where('tbl_admin_data as t',array('t.status'=>'1'))->result();
		//echo $this->db->last_query();exit;
		return $results;
	}
	
	function unpaidmembers()
	{
		$this->db->limit(2000);
		$this->db->select('pi.*,ps.rem_date');	
		$this->db->order_by('last_call_updated','ASC');
		$this->db->group_by('pi.id');
		$this->db->join('ms_profilesetting ps','ps.ms_id=pi.id and pi.id not in(select user_id from tbl_payments_info)');

		$resp=$this->db->get_where('tbl_primary_info pi',array('pi.status'=>'1','ps.profileowner'=>$this->session->userdata('user_id')))->result();
		//echo $this->db->last_query();exit;
		return $resp;	
	}
	
	function savermticketnotes()
	{
		extract($_POST);
		$array=array(
		'kv_rmfkid'=>$rmid, 
		'kv_ufkid'=>$uid, 
		'kv_mysideintfkid'=>$intid, 
		'kv_rmn_call_received_by'=>$call_received_by, 
		'kv_rmn_call_status'=>$call_status, 
		'kv_rmn_notes'=>base64_encode($notes), 
		'kv_created_by'=>$rmid, 
		'kv_created_date'=>date('Y-m-d H:i:s'));
		$this->db->insert('kv_rmnotes',$array);
		$date_val = date("Y-m-d H:i:s");
		$sql_query_up = "UPDATE ms_profilesetting SET last_call_updated='" . $date_val . "' WHERE ms_id=" . $uid;
        	$this->db->query($sql_query_up);
		return true;
		//echo '<pre>';print_r($_POST);exit;
	}
	
	function reminderalert()
	{
		
	}
	
	function bothsideinterest_action()
	{
		//echo '<pre>';print_r($_POST);exit;
		$array=array(
		'kv_msi_modified_by'=>$this->session->userdata('user_id')
		,'kv_msi_modified_date'=>date('Y-m-d H:i:s')
		,'kv_msi_rmstatus'=>$this->input->post('action')
		,'kv_msi_statuschangedrmid'=>$this->session->userdata('user_id')
		);
		$this->db->where(array('kv_msi_id'=>$this->input->post('intid')));
		$this->db->update('kv_mysideinterests',$array);
	}

	public function close_ticket_action()
	{
		$array=array(
		'kv_msi_modified_by' => $this->session->userdata('user_id')
		,'kv_msi_modified_date' => date('Y-m-d H:i:s')
		,'kv_msi_rmstatus' => "closeticket"
		,'kv_msi_statuschangedrmid' => $this->session->userdata('user_id'),
		'close_reason' => $this->input->post('close_reason')
		);
		$this->db->where(array('kv_msi_id' => $this->input->post('init_id')));
		$this->db->update('kv_mysideinterests',$array);
	}	
	
	function noservicesincemonth()
	{		
		$this->db->limit(2000);
		$this->db->select('pi.*,ps.last_call_updated');	
		$this->db->order_by('last_call_updated','DESC');
		$this->db->group_by('pi.id');
		$this->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
		$this->db->where("ps.last_call_updated < DATE_ADD(NOW(),INTERVAL -10 DAY)");
		$resp=$this->db->get_where('tbl_primary_info pi',array('ps.profileowner'=>$this->session->userdata('user_id'),'pi.status'=>1));
		$resp=$resp->result_array();
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	function nearbyexpiryprofiles()
	{		
		//$this->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
		$this->db->limit(2000);
		$this->db->select('pi.*,pl.expiry_date');	
		$this->db->order_by('expiry_date','DESC');
		$this->db->group_by('pi.id');
		$this->db->join('tbl_payments_log pl','pl.user_id=pi.id');
		$this->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
	//	$this->db->where('(pl.expiry_date - now()) < 30');
	    $this->db->where('pl.expiry_date>NOW()');
		$this->db->where('DATEDIFF(pl.expiry_date,NOW())<=30');
		$this->db->where('pi.status = 1');
		$resp=$this->db->get_where('tbl_primary_info pi',array('ps.profileowner'=>$this->session->userdata('user_id')))->result();
	//	echo $this->db->last_query();exit;
		return $resp;
	}
	
	function freenewprofiles()
	{		
		//$this->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
		$this->db->limit(2000);
		$this->db->select('pi.*,ps.login_date');	
		$this->db->order_by('registered_on','DESC');
		$this->db->group_by('pi.id');
		$this->db->where('last_call_updated IS NULL');
		$this->db->join('ms_profilesetting ps','ps.ms_id=pi.id');
		$resp=$this->db->get_where('tbl_primary_info pi',array('pi.status'=>'1','ps.profileowner'=>$this->session->userdata('user_id')))->result();
		//echo $this->db->last_query();exit;
		return $resp;
	}	
	
	function mysidefollowupscloseticket($fortyeighthours=NULL)
	{
		$this->db->select('kv_msi_rmstatus,kv_msi_id,kv_msi_modified_date,sd.username,sd.phone_no,sd.id as "staffid",piinton.first_name as "intonclientfname",piinton.last_name as "intonclientlname",piclient.first_name as "clientfname",piclient.last_name as "clientlname",kv_msi_created_date,piclient.profile_id as "clientprofileid",piinton.profile_id as "intonclientprofileid"');
		$this->db->limit('0,2000');
		$this->db->order_by('kv_msi_modified_date','DESC');
		$this->db->group_by('kv_msi_profilefkid,kv_msi_interested_on');
		$this->db->join('tbl_admin_data as sd','sd.id=kv_msi_interested_rmid');	
		$this->db->join('tbl_primary_info as piinton','piinton.id=kv_msi_interested_on');
		$this->db->join('tbl_primary_info as piclient','piclient.id=kv_msi_profilefkid');
		$this->db->where("(kv_msi_onresstatus='reject' OR kv_msi_rmstatus in ('closeticket','cancel','settled'))");
		$resp=$this->db->get_where('kv_mysideinterests',array('kv_msi_status'=>'sentinterested','kv_msi_client_rmid'=>$this->session->userdata('user_id'),'kv_msi_interested_rmid'=>$this->session->userdata('user_id')))->result();//,'kv_msi_onresstatus'=>'reject'
		//echo $this->db->last_query();exit;
		return $resp;
	}
	
	function profileviewed()
	{
		$results=$this->db->query("SELECT fpin.`id` AS 'fromid',tpin.id AS 'toid',fpin.`profile_id` AS 'fromprofileid',tpin.profile_id AS 'toprofileid',fad.`phone_no` AS 'sfromphone',tad.phone_no AS 'stophone',fad.`username` AS 'fromstaffname' ,fpin.`profile_id` AS 'fromprofileid',fpin.`email` AS 'fromemail',
		fpin.`first_name` AS 'fromname',tad.`username` AS 'tostaffname' ,tpin.`profile_id` AS 'toprofileid',
		tpin.`email` AS 'toemail',tpin.`first_name` AS 'toname',`kv_profileview_created_date` 
		FROM `kv_profileview` JOIN ms_profilesetting fps ON kv_userfkid=fps.`ms_id`
		JOIN ms_profilesetting tps ON `kv_profileview_on`=tps.`ms_id`
		JOIN tbl_admin_data fad ON fad.`id`=fps.`profileowner`
		JOIN tbl_admin_data tad ON tad.`id`=tps.`profileowner`
		JOIN `tbl_primary_info` fpin ON fpin.id=kv_userfkid
		JOIN `tbl_primary_info` tpin ON tpin.id=kv_profileview_on
		WHERE (fps.profileowner='".$this->session->userdata('staff_id')."' OR tps.profileowner='".$this->session->userdata('staff_id')."')
		GROUP BY `kv_userfkid`,`kv_profileview_on`")->result();
		return $results;
	}	
	
    // To update basic detail
    public function basicDetailUpdate($dataPrimaryArr, $dataReligionArr, $id)
    {
        // print_r($dataPrimaryArr);exit();
        $this->db->where('id', $id);
        $res = $this->db->update('tbl_primary_info', $dataPrimaryArr);

        if($res) {
            $this->db->where('user_id', $id);
            $res1 = $this->db->update('tbl_religion_info', $dataReligionArr); 
            return $res1;               
        }
        else
        {
            return $res;
        }
    }

    public function get_costomer_info_by_membership_id($membership_id)
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        $sql_query = "SELECT cs.caste,  pinfo.father_mobile, ms.*, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,' ' ,prm.first_name) as ms_user_name 
        from ms_profilesetting as ms 
        JOIN tbl_primary_info as prm ON (prm.id = ms.ms_id AND prm.status = 1 )
        JOIN tbl_parents_info as pinfo on pinfo.user_id = ms.ms_id  
        JOIN tbl_religion_info as cs ON cs.user_id = ms.ms_id WHERE prm.profile_id LIKE '%" . $membership_id . "%' group by prm.profile_id";
        $query = $this->db->query($sql_query);

        foreach ($query->result_array() as $row) {
//print_r($row);exit;
            $result["found"] = "1";
            $un_paid_user["user_id"] = $row['profilesetting_id'];

            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];

            $un_paid_user["user_name"] = $row['ms_user_name'];

            $un_paid_user["user_cast"] = $row['caste'];

            $un_paid_user["user_father_mobile"] = $row['father_mobile'];

            $un_paid_user["payment_status"] = $row['payment_status'];

            $un_paid_user["reg_fee"] = $row['reg_fee'];

            $un_paid_user["sa_fee"] = $row['sa_fee'];

            $un_paid_user["elite"] = $row['elite'];
			$registerby=$this->get_registerby($row['profilesetting_id'])->username;
			$un_paid_user["user_registerby"] = ($registerby) ? ucfirst($registerby) : 'Online';
			$un_paid_user["ms_usertype"] = $row['ms_usertype'];
			$un_paid_user["ms_showntype"] = $row['ms_showntype'];
            $un_paid_user["login_date"] = $row['login_date'];

            $un_paid_user["login_count"] = $row['login_count'];

            $un_paid_user["prof_owner"] = $row['profileowner'];

            array_push($add_res_array, $un_paid_user);
        }
        $result["users"] = $add_res_array;
        return $result;
    }

	public function deletesiblings($delid,$deltype)
	{
		if($deltype=='sisterdel')
		{
		$this->db->delete('tbl_sister_info',array('id'=>$delid));	
		}		
		if($deltype=='brotherdel')
		{
			$this->db->delete('tbl_brother_info',array('id'=>$delid));			
		}		
	}
    public function get_un_paid_user_list()
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        $sql_query = "SELECT  ms.*, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,' ' ,prm.first_name) as ms_user_name 
        from ms_profilesetting as ms 
        JOIN tbl_primary_info as prm ON prm.id = ms.ms_id  and prm.status=1
       
         WHERE  ms.profileowner IS NULL ";

        $query = $this->db->query($sql_query);
		//echo $this->db->last_query();exit;
        foreach ($query->result_array() as $row) {
            $result["found"] = "1";
			$registerby=$this->get_registerby($row['profilesetting_id'])->username;
			$un_paid_user["user_registerby"] = ($registerby) ? ucfirst($registerby) : 'Online';
            $un_paid_user["user_id"] = $row['profilesetting_id'];
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
          //  $un_paid_user["user_cast"] = $row['caste'];
       
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["elite"] = $row['elite'];
			$un_paid_user["ms_usertype"] = $row['ms_usertype'];	
			$un_paid_user["ms_showntype"] = $row['ms_showntype'];
			$un_paid_user["prime"] = $row['prime'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            array_push($add_res_array, $un_paid_user);
        }
        $result["users"] = $add_res_array;
        return $result;
    }

    public function get_employees()
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        $sql_query = "SELECT * from  tbl_admin_data WHERE status=1";
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $un_paid_user["emp_name"] = $row['username'];

            $un_paid_user["emp_id"] = $row['id'];

            array_push($add_res_array, $un_paid_user);
        }
        $result["employees"] = $add_res_array;
        return $result;
    }

    public function get_allocated_profiles($emp_id,$user_id=NULL)
    {
		
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
		$userwherecond='';
		if($user_id)
		{
			$userwherecond=' and prm.id="'.$user_id.'"';
		}
        $sql_query = "SELECT ms.*, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,prm.first_name) 
        as ms_user_name from ms_profilesetting as ms INNER JOIN tbl_primary_info as prm ON prm.id = ms.ms_id 
        WHERE  ms.profileowner=" . $emp_id . "   AND prm.status='1' ".$userwherecond." ORDER BY ms.last_call_updated DESC";
     //echo $sql_query;exit;
        $query = $this->db->query($sql_query);

        foreach ($query->result_array() as $row) {
            $un_paid_user = array();
            $un_paid_user["user_id"] = $row['profilesetting_id'];
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
            $un_paid_user["user_cast"] = "1";
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["elite"] = $row['elite'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            $result["found"] = "1";
            array_push($add_res_array, $un_paid_user);
        }
        $result["users"] = $add_res_array;
		
		//echo '<pre>';print_r( $result["users"] );exit;
        return $result;
    }

    public function get_association_search($emp_id, $dor_from, $dor_to, $app_status, $profile_id, $surname, $firstname)
    {		
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        $is_where = false;

        $sql_query = "SELECT ms.*,prm.id as userid, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,prm.first_name) as ms_user_name 
            from ms_profilesetting as ms 
            INNER JOIN tbl_primary_info as prm ON prm.id = ms.ms_id ";

        if ($emp_id != '0') {
            $is_where = true;
            $sql_query .= " WHERE ms.profileowner=" . $emp_id;
        }
		
        if ($dor_from != '') {
            if ($is_where) {
                $sql_query .= " AND prm.registered_on > '" . $dor_from . "'";
            } else {
                $is_where = true;
                $sql_query .= " WHERE prm.registered_on > '" . $dor_from . "'";
            }
        }
        if ($dor_to != '') {
            if ($is_where) {
                $sql_query .= " AND prm.registered_on < '" . $dor_to . "'";
            } else {
                $is_where = true;
                $sql_query .= " WHERE prm.registered_on < '" . $dor_to . "'";
            }
        }
        if ($app_status != "0") {
			if ($is_where) {
				$sql_query .= " AND prm.status=" . $app_status;
			} else {
				$is_where = true;
				$sql_query .= " WHERE prm.status=" . $app_status;
			}
        }
		if(!empty($profile_id)) {
			if ($is_where) {
				$sql_query .= " AND prm.profile_id='".$profile_id."'";
			} else {
				$is_where = true;
				$sql_query .= " WHERE prm.profile_id='".$profile_id."'";
			}			
		}
		if(!empty($firstname)) {
			if ($is_where) {
				$sql_query .= " AND prm.first_name='".$firstname."'";
			} else {
				$is_where = true;
				$sql_query .= " WHERE prm.first_name='".$firstname."'";
			}
		}
		if(!empty($surname)) {
			if ($is_where) {
				$sql_query .= " AND prm.last_name='".$surname."'";
			} else {
				$is_where = true;
				$sql_query .= " WHERE prm.last_name='".$surname."'";
			}			
		}
        $sql_query .= " ORDER BY ms.last_call_updated DESC";

        $query = $this->db->query($sql_query);

        foreach ($query->result_array() as $row) {
			$payemtdet=getpaymentdetbyid($row['userid']);
            $result["found"] = "1";
			$un_paid_user["reg_amount"] = $payemtdet->agreed_amount;
			$un_paid_user["setllement_amount"] = $payemtdet->paid_amount;
            $un_paid_user["user_id"] = $row['profilesetting_id'];
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
            $un_paid_user["user_cast"] = "1";
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["elite"] = $row['elite'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            array_push($add_res_array, $un_paid_user);
        }
        $result["users"] = $add_res_array;
        return $result;
    }

    public function get_market_reminder_search($emp_id, $dor_from, $dor_to, $reminderType, $app_status, $profile_id, $surname, $firstname)
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        $is_where = false;

        $this->db->select('ms.*,  prm.profile_id as ms_profile_id, CONCAT( prm.last_name,prm.first_name) as ms_user_name ');
        $this->db->from('ms_profilesetting as ms');
        $this->db->join('tbl_primary_info as prm', 'prm.id = ms.ms_id');
        if($emp_id > 0) {
			$this->db->where('ms.profileowner', $emp_id);
		}
		
        $this->db->where('prm.status', $app_status);
		if(!empty($profile_id)) {
			$this->db->where('prm.profile_id', $profile_id);
		}
		if(!empty($firstname)) {
			$this->db->where('prm.first_name', $firstname);
		}
		if(!empty($surname)) {
			$this->db->where('prm.last_name', $surname);
		}
        if($reminderType == 1) {
            $this->db->where("ms.rem_date = ", date('Y-m-d'));
        }
        else if($reminderType == 2)
        {
            // $this->db->where("ms.rem_date <= '$dor_to' AND ms.rem_date >= '$dor_from'");
            $this->db->where("ms.rem_date BETWEEN '$dor_from' AND '$dor_to'");
        }
        else
        {
            $this->db->where("ms.rem_date < ", date('Y-m-d'));            
        }
        $query = $this->db->get();

        foreach ($query->result_array() as $row) {
            $result["found"] = "1";
            $un_paid_user["user_id"] = $row['profilesetting_id'];
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
            $un_paid_user["user_cast"] = "1";
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["elite"] = $row['elite'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            array_push($add_res_array, $un_paid_user);
        }
        $result["users"] = $add_res_array;
        return $result;
    }

    public function get_user_profile_image($user_id)
    {
        $result = "img_avatar.png";
        $sql_query = "SELECT applicationphotopath, photoname FROM MS_photos WHERE MS_id =" . $user_id . " AND isactive=1 AND ismain=1";
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $result = $row["applicationphotopath"];
            return $result;
        }
        return $result;
    }

	public function get_parent_info($user_id)
    {
       
        $sql_query = "SELECT * from  tbl_parents_info WHERE user_id =" . $user_id;
        $result = $this->db->query($sql_query)->row();
      
        return $result;
    }
	
    public function get_parent_mobile_no($user_id)
    {
        $result = "not found";
        $sql_query = "SELECT father_mobile from  tbl_parents_info WHERE user_id =" . $user_id;
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $result = $row["father_mobile"];
            return $result;
        }
        return $result;
    }

    public function get_user_info($user_id)
    {
        $result = array();
        $result["found"] = "0";
        $add_res_array = array();
        // "SELECT ms.*,cs.caste,pinfo.father_mobile,
        $sql_query =
            "SELECT ms.*,prm.id as userid,prm.mobile, prm.profile_id as ms_profile_id, prm.registered_on, prm.status as prof_status,CONCAT( prm.last_name,' ' ,prm.first_name) as ms_user_name 
        from ms_profilesetting as ms 
        JOIN tbl_primary_info as prm ON (prm.id = ms.ms_id)
        WHERE ms.profilesetting_id=" . $user_id;

        $query = $this->db->query($sql_query);
        $this->load->model('Encrypt_model', 'encrypt_model');
        $this->encrypt_model->encryptionInitialize();
        foreach ($query->result_array() as $row) {
            $result["found"] = "1";
			$payemtdet=$this->getpaymentdetbyid($row['userid']);
 			$un_paid_user["reg_amount"] = $payemtdet['agreed_amount'];
			$un_paid_user["setllement_amount"] = $payemtdet['saamount'];
			
            $un_paid_user["user_id"] = $row['ms_id'];
            $un_paid_user["profile_id"] = $row['profilesetting_id'];
            $un_paid_user["profile_url"] = $this->get_user_profile_image($row["ms_id"]);
            $un_paid_user["images_info"] = $this->get_profile_images($row["ms_id"]);
            $un_paid_user["reg_fee"] = $row['reg_fee'];
            $un_paid_user["sa_fee"] = $row['sa_fee'];
            $un_paid_user["rem_date"] = $row['rem_date'];
            $un_paid_user["payment_status"] = $row['payment_status'];
            $un_paid_user["elite"] = $row['elite'];
            $un_paid_user["login_date"] = $row['login_date'];
            $un_paid_user["login_count"] = $row['login_count'];
            $un_paid_user["prof_owner"] = $row['profileowner'];
            $un_paid_user["father_mobile"] = $this->get_parent_mobile_no($row["ms_id"]);
            $un_paid_user['father_mobile'] = $this->encrypt_model->decryptField($un_paid_user['father_mobile']);
            $un_paid_user["user_mobile"] = $row['mobile'];
            $un_paid_user['user_mobile'] = $this->encrypt_model->decryptField($un_paid_user['user_mobile']);
            $un_paid_user["user_ms_id"] = $row['ms_profile_id'];
            $un_paid_user["user_dor"] = $row['registered_on'];
            $un_paid_user["user_name"] = $row['ms_user_name'];
            $un_paid_user["prof_status"] = $row['prof_status'];
            $result["user"] = $un_paid_user;
        }
       // print_r($result);exit;
        return $result;
    }
public function getpaymentdetbyid($uid)
	{
		$this->db->select('*');
		$this->db->from('tbl_payments_info');
		$this->db->where('user_id', $uid);
		$this->db->order_by('payment_id', 'DESC');
		$query = $this->db->get()->row_array();
		return $query;
	}
    public function get_profile_images($id)
    {
        $this->db->select('*');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $id);
        $this->db->order_by('photos_id', 'ASC');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function save_cust_reg_fee($cust_profile_id, $reg_fee)
    {
        $sql_query = "UPDATE ms_profilesetting set reg_fee=" . $reg_fee . " WHERE ms_id=" . $cust_profile_id;
        $this->db->query($sql_query);
        $date_val = date("Y-m-d H:i:s");
        $sql_query_up = "UPDATE ms_profilesetting SET last_call_updated='" . $date_val . "' WHERE ms_id=" . $cust_profile_id;
        $this->db->query($sql_query_up);
    }

    public function save_cust_sa_fee($cust_profile_id, $sa_fee)
    {
        $sql_query = "UPDATE ms_profilesetting set sa_fee=" . $sa_fee . " WHERE ms_id=" . $cust_profile_id;
        $this->db->query($sql_query);
        $date_val = date("Y-m-d H:i:s");
        $sql_query_up = "UPDATE ms_profilesetting SET last_call_updated='" . $date_val . "' WHERE ms_id=" . $cust_profile_id;
        $this->db->query($sql_query_up);
    }

    public function save_cust_call_log($cust_id, $cl_type, $cl_success, $cl_description, $cl_by)
    {
        $sql_query = "INSERT INTO  ms_marketing_docket ( ms_id,call_type,call_discussion, call_enteredby,called_status, called_date ) VALUES (" . $cust_id . ",'" . $cl_type . "', '".$this->db->escape_str($cl_description)."', '" . $cl_by . "', '" . $cl_success . "', '".date("Y-m-d H:i:s")."')";
        $this->db->query($sql_query);
        $date_val = date("Y-m-d H:i:s");
        $sql_query_up = "UPDATE ms_profilesetting SET last_call_updated='" . $date_val . "' WHERE ms_id=" . $cust_id;
        $this->db->query($sql_query_up);
    }

    public function save_reminder($cust_id, $rem_date)
    {
        $this->db->set('rem_date', $rem_date);
        $this->db->where('ms_id', $cust_id);
        return $this->db->update('ms_profilesetting');
    }

    public function get_call_log($cust_id)
    {
        $result = array();
        $result["found"] = "0";
        $call_log_array = array();
        $sql_query = "SELECT md.*, ad.username as added_by  FROM ms_marketing_docket md LEFT JOIN tbl_admin_data ad ON ad.id = md.call_enteredby WHERE md.ms_id=" . $cust_id . " ORDER BY md.called_date DESC";
        $query = $this->db->query($sql_query);
        foreach ($query->result_array() as $row) {
            $call_log = array();
            $call_log["cl_type"] = $row['call_type'];
            $call_log["cl_description"] = $row['call_discussion'];
            $call_log["cl_success"] = $row['called_status'];
            $call_log["cl_by"] = $row['call_enteredby'];
	    $call_log["added_by"] =  $row['added_by'];
            if ($row['added_by'] == null) {
                $call_log["added_by"] =  $row['call_enteredby'];
            }
            $call_log["called_date"] = $row['called_date'];
            array_push($call_log_array, $call_log);
        }
        $result["call_log"] = $call_log_array;
        return $result;
    }

    public function update_profile_owner($cust_id, $emp_id)
    {
		$curDate = date("Y-m-d H:i:s");
        $sql_query = "UPDATE ms_profilesetting set profileowner=" . $emp_id . ", assign_date = '".$curDate."' WHERE profilesetting_id=" . $cust_id;
        $this->db->query($sql_query);
    }
	public function update_customer_status($cust_id)
    {
	//	$curDate = date("Y-m-d H:i:s");
        $sql_query = "UPDATE tbl_primary_info set status='1'  WHERE id=" . $cust_id;
        $this->db->query($sql_query);
//echo $this->db->last_query();exit;
    }
	public function emailtemplates()
	{		
		$results=$this->db->get_where('email_templates',array('et_status'=>1))->result();
		return $results;		
	}
	
	
	public function templatetype($templatetype=NULL)
	{		
		$results=$this->db->get_where('email_templates',array('et_status'=>1,'et_key'=>$templatetype))->row();
		return $results;		
	}
	
	public function submitemailtemplate()
	{
		$array=array(
		'et_body'=>$this->input->post('txt_editor'),
		'et_modified_by'=>($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id'),
		'et_modified_date'=>date('Y-m-d H:i:s')
		);
		$this->db->where(array('et_key'=>$this->input->post('txt_template')));
		$this->db->update('email_templates',$array);
		//echo $this->db->last_query();exit;
		return true;		
	}
	
	public function deletepayment($delRec)
	{
		$deleteArr = explode("_", $delRec);
		$delid = $deleteArr["0"];
		$userId = $deleteArr["1"];
		
		$this->db->query("INSERT INTO tbl_payments_info_deldata(`payment_id`, 
		`user_id`, 
		`payment_type`, 
		`agreed_amount`, 
		`paid_amount`, 
		`bal_amount`, 
		`entered_by`, 
		`comments`, 
		`saamount`, 
		`paid_date`, 
		`tbl_image`, 
		`tbl_image_name`,deleted_by,deleted_date)
		SELECT `payment_id`, 
		`user_id`, 
		`payment_type`, 
		`agreed_amount`, 
		`paid_amount`, 
		`bal_amount`, 
		`entered_by`, 
		`comments`, 
		`saamount`, 
		`paid_date`, 
		`tbl_image`, 
		`tbl_image_name`,'".$this->session->userdata('staffadmin_id')."','".date('Y-m-d H:i:s')."' FROM tbl_payments_info WHERE payment_id = '".$delid."'");
	 
		$this->db->query("INSERT INTO tbl_payments_log_deldata(`paymentlog_id`, 
		`payment_id`, 
		`user_id`, 
		`allowed_contacts`, 
		`used_contacts`, 
		`expiry_date`)
	SELECT `paymentlog_id`, 
		`payment_id`, 
		`user_id`, 
		`allowed_contacts`, 
		`used_contacts`, 
		`expiry_date` FROM tbl_payments_log WHERE payment_id = '".$delid."'");
		
		
		$this->db->delete('tbl_payments_info',array('payment_id'=>$delid));
		if($userId > 0){
			$sql_query = "UPDATE ms_profilesetting set payment_status='0' WHERE ms_id=" . $userId;
			$this->db->query($sql_query);
		}
		$this->db->delete('tbl_payments_log',array('payment_id'=>$delid));	
		return true;	
	}	
	
	public function inactivateProfile($postData) {
		$query = "SELECT id FROM tbl_primary_info WHERE profile_id ='" . $postData["profile_id"]."'";
		$record = $this->db->query($query)->num_rows();
		if($record > 0) {
			 $activate_date = date('Y-m-d', strtotime( date("Y-m-d") . ' +'.$postData["activate_date"].' days'));
			$query = "UPDATE tbl_primary_info SET status = 4, inactive_reason = '".$this->db->escape_str($postData["reason"])."', before_remind = '".$postData["remind_before"]."', activate_date = '".$activate_date."'  WHERE profile_id ='" . $postData["profile_id"]."'";
			$record = $this->db->query($query);
			return true;
		} else {
			return false;
		}
	}
	
	public function getTotalInactiveProfiles($filters) {
		$queryString = "";
		if(count($filters) > 0) {
			if(isset($filters["profile_id"]) && !empty($filters["profile_id"])) {
				$queryString .= " AND profile_id = '".$filters["profile_id"]."'";
			}
			if(isset($filters["surname"]) && !empty($filters["surname"])) {
				$queryString .= " AND last_name = '".$filters["surname"]."'";
			}
			if(isset($filters["firstname"]) && !empty($filters["firstname"])) {
				$queryString .= " AND first_name = '".$filters["firstname"]."'";
			}			
		}
		
		$this->db->select("p.*");
		$this->db->from('tbl_primary_info as p');		
		$this->db->where('p.status = 4'.$queryString);
		$this->db->order_by("p.id DESC");
		$query = $this->db->get();
		$result = $query->num_rows(); 
		//echo $this->db->last_query();
		return $result;
	}
	
	public function getInactiveProfiles($limit, $offset, $filters) {
		$queryString = "";
		$this->db->select("p.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->where('p.status = 4'.$queryString);
		$this->db->limit($limit, $offset);
		$this->db->order_by("p.id DESC");
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function activateProfile($id) {
		$query = "UPDATE tbl_primary_info SET status = 1 WHERE id ='" . $id."'";
		$record = $this->db->query($query);
		return true;		
	}
	public function getLatestProfiles() {
		$this->db->select("p.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->select('payment_status, elite, profileowner');
		$this->db->join('ms_profilesetting as mprosetting', 'p.id=mprosetting.MS_id', 'left');		
		if($this->session->userdata('type')=='staff')
		{
			$this->db->where('mprosetting.profileowner >', 0);
			$this->db->where('mprosetting.ms_usertype !=', 'elite');
		}
		$this->db->where("`registered_on` > DATE_ADD(NOW(),INTERVAL -7 DAY)");
		$this->db->order_by('registered_on', 'DESC');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;		
	}
	
	public function getProfilesCount() {
		$this->db->select("p.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->where('p.status="1"');
		$query=$this->db->get();
		//$result["profile_data"]= $query->result_array();
		$result["profiles_count"]=$query->num_rows();
		$this->db->select("p.*,pr.* ");
		$this->db->from('tbl_primary_info` as p');
		$this->db->join('ms_profilesetting as pr', 'p.id=pr.MS_id', 'left');
		$this->db->where('p.status=1 AND pr.profileowner>0');
		$query=$this->db->get();
		//$result["profile_data"]= $query->result_array();
		$result["assigned_count"]=$query->num_rows();
		$result["unassigned_count"]=$result["profiles_count"]-$result["assigned_count"];
		return $result;		
	}
	public function getProfilesCountByRm() {
		$this->db->select("p.*");
		$this->db->from('tbl_admin_data as p');
		$this->db->where('p.status="1"');
		$query = $this->db->get();
		$result["rmdata"] = $query->result_array();
		$result["rmcount"]=$query->num_rows();
		$this->db->select("p.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->where('p.status="1"');
		$query=$this->db->get();
		$result["profile_data"]= $query->result_array();
		$result["profiles_count"]=$query->num_rows();
		$this->db->select("p.*,pr.* ");
		$this->db->from('tbl_primary_info` as p');
		$this->db->join('ms_profilesetting as pr', 'p.id=pr.MS_id', 'left');
		$this->db->where('p.status=1 AND pr.profileowner>0');
		$query=$this->db->get();
		//$result["profile_data"]= $query->result_array();
		$result["assigned_count"]=$query->num_rows();
		$result["unassigned_count"]=$result["profiles_count"]-$result["assigned_count"];
		return $result;		
	}
	public function getRmProfiles() {
		$this->db->select ("count(p.id) as num,a.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'ps.profileowner=a.id', 'left');
		$this->db->where('a.status=1 and p.status=1');
		$this->db->group_by('ps.profileowner');
		$query = $this->db->get();
		$result["rmdata"] = $query->result_array();
		$result["rmcount"]=$query->num_rows();
		return $result;		
	}
	public function getProfilesByRmCount($id) {
		//print_r($id);exit;
		$this->db->select ("p.*,ps.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1 and ps.profileowner='.$id["profileowner"]);
		//$this->db->group_by('ps.profileowner');
		$query = $this->db->get();
		$result = $query->num_rows();
		return $result;		
	}
	public function getProfilesByRm($rmId,$login_type) {
		//print_r($offset);exit;
        //echo $offset;exit;
		$this->db->select ("p.*,ps.*,pr.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1');
		if($login_type != 'admin')
			{
				$this->db->where('ps.profileowner='.$rmId);
			}
		$query = $this->db->get();
		//echo $this->db->last_query();exit;
		$result["profiles"] = $query->result_array();
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();
	//	echo "<pre>";print_r($result);exit;
		return $result;		
	}
	
	public function getRegularProfilesCount($login_type)
	{
		$rmId=$this->session->userdata('user_id');
		$this->db->select ("p.*,ps.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1 ');
		if($login_type != "admin")
		{
		   $this->db->where('ps.profileowner='.$rmId);
		}
		$this->db->where('ps.ms_usertype','regular');
		//$this->db->limit($perPage,$offset);
		//$this->db->group_by('ps.profileowner');
		$query = $this->db->get();
		$result["regprofiles"] = $query->result_array();
		$result["regcount"]=$query->num_rows(); 
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();

		//echo "<pre>";print_r($result);exit;
		return $result;
	}

	public function getRegularProfiles($rmId,$login_type)
	{
		//$rmId=$this->session->userdata('user_id');
		$this->db->select ("p.*,ps.*,a.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1');
		if($login_type != "admin")
		{

		   $this->db->where('ps.profileowner='.$rmId);
		}
		$this->db->where('ps.ms_usertype','regular');
		
		$this->db->limit($perPage,$offset);
		//$this->db->group_by('ps.profileowner');
		$this->db->order_by('p.registered_on','DESC');
		$query = $this->db->get();
	//	echo $this->db->last_query();exit;
		$result["regprofiles"] = $query->result_array();
		//echo $this->db->last_query();exit;
		$result["regcount"]=$query->num_rows(); 
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();

		//echo "<pre>";print_r($result);exit;
		return $result;
	}
	
	public function getConfidentialProfiles($rmId,$login_type)
	{
		$rmId=$this->session->userdata('user_id');
		$this->db->select ("p.*,ps.*,a.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1');
		if($login_type != "admin")
		{

		   $this->db->where('ps.profileowner='.$rmId);
		}
		$this->db->where('ps.ms_usertype','confidential');
		$this->db->limit($perPage,$offset);
		//$this->db->group_by('ps.profileowner');
		$query = $this->db->get();
		$result["confprofiles"] = $query->result_array();
		$result["confcount"]=$query->num_rows(); 
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();

		//echo "<pre>";print_r($result);exit;
		return $result;
	}
	public function getSuperConfidentialProfiles($rmId,$login_type)
	{
		
		$rmId=$this->session->userdata('user_id');
		$this->db->select ("p.*,ps.*,a.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1');
		if($login_type != "admin")
		{

		   $this->db->where('ps.profileowner='.$rmId);
		}
		$this->db->where('ps.ms_usertype','superconfidential');
		$this->db->limit($perPage,$offset);
		//$this->db->group_by('ps.profileowner');
		$this->db->order_by('p.id','DESC');
		$query = $this->db->get();
		$result["superconfprofiles"] = $query->result_array();
		$result["superconfcount"]=$query->num_rows(); 
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();
		return $result;
	}

	public function getEliteProfiles($rmId = NULL,$login_type=NULL)
	{
		$rmId=$this->session->userdata('user_id');
		$this->db->select ("p.*,ps.*,a.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1');
		if($login_type != "admin")
		{

		   $this->db->where('ps.profileowner='.$rmId);
		}
		$this->db->where('ps.ms_usertype','elite');
		$this->db->limit($perPage,$offset);
		//$this->db->group_by('ps.profileowner');
		$query = $this->db->get();
		$result["eliteprofiles"] = $query->result_array();
		$result["eliteprofilescount"]=$query->num_rows(); 
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();
		return $result;
	}
	
	public function getSuperEliteProfiles($rmId,$login_type)
	{
		$rmId=$this->session->userdata('user_id');
		$this->db->select ("p.*,ps.*,a.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1');
		if($login_type != "admin")
		{

		   $this->db->where('ps.profileowner='.$rmId);
		}
		$this->db->where('ps.ms_usertype','superelite');
		$this->db->limit($perPage,$offset);
		//$this->db->group_by('ps.profileowner');
		$query = $this->db->get();
		$result["supereliteprofiles"] = $query->result_array();
		$result["superelitecount"]=$query->num_rows(); 
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();
		return $result;
	}
	public function getRCRMProfiles()
	{
		$type=array("regular","confidential");
		$this->db->select ("p.*,ps.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1');
		$this->db->where_in('ps.ms_usertype',$type);
		$this->db->limit($perPage,$offset);
		//$this->db->group_by('ps.profileowner');
		$query = $this->db->get();
		$result["rcrmprofiles"] = $query->result_array();
		$result["rcrmcount"]=$query->num_rows(); 
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();

		//echo "<pre>";print_r($result);exit;
		return $result;
	}
	public function getSCRMProfiles()
	{
		$type=array("superconfidential");
		$this->db->select ("p.*,ps.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1');
		$this->db->where_in('ps.ms_usertype',$type);
		$this->db->limit($perPage,$offset);
		//$this->db->group_by('ps.profileowner');
		$query = $this->db->get();
		$result["scrmprofiles"] = $query->result_array();
		$result["scrmcount"]=$query->num_rows(); 
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();

		//echo "<pre>";print_r($result);exit;
		return $result;
	}
	public function getEliteRMProfiles()
	{
		$type=array("elite");
		$this->db->select ("p.*,ps.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1');
		$this->db->where_in('ps.ms_usertype',$type);
		$this->db->limit($perPage,$offset);
		//$this->db->group_by('ps.profileowner');
		$query = $this->db->get();
		$result["elitermprofiles"] = $query->result_array();
		$result["elitermcount"]=$query->num_rows(); 
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();

		//echo "<pre>";print_r($result);exit;
		return $result;
	}
	public function getSuperEliteRMProfiles()
	{
		$type=array("superelite");
		$this->db->select ("p.*,ps.*");
		$this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ps', 'p.id=ps.MS_id', 'left');
		$this->db->join('tbl_admin_data as a', 'a.id=ps.profileowner', 'left');
		$this->db->where('p.status=1');
		$this->db->where_in('ps.ms_usertype',$type);
		$this->db->limit($perPage,$offset);
		//$this->db->group_by('ps.profileowner');
		$query = $this->db->get();
		$result["superelitermprofiles"] = $query->result_array();
		$result["superelitermcount"]=$query->num_rows(); 
		$this->db->select('a.*');
		$this->db->from('tbl_admin_data as a');
		$this->db->where('a.id='.$rmId);
		$query = $this->db->get();
		$result["profileOwner"] = $query->row_array();

		//echo "<pre>";print_r($result);exit;
		return $result;
	}	
	public function getAdminLoginType($id)
	{
	    $this->db->select('type');
	    $this->db->from('tbl_admin_data');
	    $this->db->where('id',$id);
	    $query=$this->db->get();
	    $result=$query->row_array();
	    return $result;
	}

	public function getLoginNotifications($rm_id)
	{

	    $this->db->select('c.*,p.profile_id,p.first_name,p.last_name');
	    $this->db->from('customer_login_notification as c');
		$this->db->join('tbl_primary_info as p', 'c.user_id=p.id', 'left');
		$this->db->where('c.rm_id',$rm_id);
		$this->db->order_by('c.status','asc');
		$this->db->order_by("c.login_date_time", "desc");
	    $query=$this->db->get();
	    $result["total_records"] = $query->result_array();
		//echo "<pre>"; print_r($this->db->last_query());exit;
		$this->db->select('c.*,p.profile_id,p.first_name,p.last_name');
	    $this->db->from('customer_login_notification as c');
		$this->db->join('tbl_primary_info as p', 'c.user_id=p.id', 'left');
		$this->db->where('c.rm_id',$rm_id);
		$this->db->where('c.status','0');
	
	    $query=$this->db->get();
		$result["login_count"] = $query->num_rows();
		//print_r($result);exit;
	    return $result;
	}
	public function getRecentLoginNotifications($rm_id)
	{
	    $this->db->select('c.*,p.*');
	    $this->db->from('customer_login_notification as c');
		$this->db->join('tbl_primary_info as p', 'c.user_id=p.id', 'left');
		$this->db->where('c.rm_id',$rm_id);
		$this->db->where('c.status','0');	
		$this->db->order_by("notification_id", "desc");
		$this->db->limit(5);
	    $query=$this->db->get();
	    $result=$query->row_array();
		
	    return $result;
	}

	public function getPaidProfilesOfRm($rm_id)
	{
	    $this->db->select('ms.ms_id');
	    $this->db->from('ms_profilesetting as ms');
		$this->db->join('tbl_primary_info as p', 'ms.ms_id=p.id', 'left');
		$this->db->where('ms.profileowner',$rm_id);
		$this->db->where('ms.payment_status','1');	
		$this->db->where('p.status','1');
		$query=$this->db->get();
		//echo $this->db->last_query();exit;
	    $result=$query->num_rows();
		
	    return $result;
	}

	public function getUnPaidProfilesOfRm($rm_id)
	{
	    $this->db->select('ms.ms_id');
	    $this->db->from('ms_profilesetting as ms');
		$this->db->join('tbl_primary_info as p', 'ms.ms_id=p.id', 'left');
		$this->db->where('ms.profileowner',$rm_id);
		$this->db->where('ms.payment_status IS NULL');	
		$this->db->where('p.status','1');
		$query=$this->db->get();
		//echo $this->db->last_query();exit;
	    $result=$query->num_rows();
		
	    return $result;
	}

	public function updateLoginNotificationStatus($notification_id)
	{
	    $arr=array(
			'status'=>'1'
		);
		$this->db->where('notification_id',$notification_id);
		$this->db->update('customer_login_notification',$arr);
		return $result;
	}

    public function getTodayRegisterProfiles()
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d ');
	    $this->db->select('p.id,p.profile_id ,p.last_name,p.first_name,p.mobile,p.living_in,a.username,p.created_by,p.registered_on');
	    $this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ms', 'ms.ms_id=p.id', 'left');
		$this->db->join('tbl_admin_data as a', 'ms.profileowner=a.id', 'left');
		//$this->db->where(date('p.registered_on'),date(now()));
		$this->db->where('DATE(p.registered_on)',$curr_date);
		$this->db->where('p.status','1');
		$query=$this->db->get();
	//	echo $this->db->last_query();exit;
	    $result=$query->result_array();
	//	print_r($result);exit;
	    return $result;
	}

public function getRegisterProfilesBetweenDates($fdate,$tdate)
	{
		//echo $fdate; exit;
		$this->db->select('p.id,p.profile_id ,p.last_name,p.first_name,p.mobile,p.living_in,a.username,p.created_by,p.registered_on');
	    $this->db->from('tbl_primary_info as p');
		$this->db->join('ms_profilesetting as ms', 'ms.ms_id=p.id', 'left');
		$this->db->join('tbl_admin_data as a', 'ms.profileowner=a.id', 'left');
		if(!empty($fdate)){
		$this->db->where('DATE(p.registered_on) >=',$fdate);
		}
		if(!empty($tdate)){
		$this->db->where('DATE(p.registered_on) <=',$tdate);
		}
		else{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d ');
		$this->db->where('DATE(p.registered_on)',$curr_date);
		}
		$this->db->where('p.status','1');
		$query=$this->db->get();
       $result=$query->result_array();
	    return $result;
	}

	public function getRmTypes()
	{
	    $this->db->select('id,rm_type_name');
	    $this->db->from('tbl_rm_type');
	    $query=$this->db->get();
	    $result=$query->result_array();
	    return $result;
	}
	
	public function getAdminLoginLogs()
	{
	    $date = new DateTime("now");
	    $curr_date = $date->format('Y-m-d ');
	    $this->db->select('*');
	    $this->db->from('admin_login_notifications');
		$this->db->order_by("login_notification_id", "desc");
		$query=$this->db->get();
		// echo $this->db->last_query();exit;
	    $result=$query->result_array();
	    // print_r($result);exit;
	    $this->db->select('*');
	    $this->db->from('admin_login_notifications');
	    $this->db->where('DATE(login_date_time) <=',$curr_date);
	    $this->db->where('DATE(login_date_time) >=',$curr_date);
        $this->db->order_by("login_notification_id", "desc");
		$query=$this->db->get();
		$result['today_admin_logins']=$query->result_array();
		$result['admin_login_count'] = $query->num_rows();
		return $result;
	}
	
	    
	public function getAdminRecentLoginNotifications()
	{
	    $this->db->select('*');
	    $this->db->from('admin_login_notifications');
		//$this->db->where('status','1');	
		$this->db->order_by("login_notification_id", "desc");
		$this->db->limit(5);
	    $query=$this->db->get();
	    $result=$query->result_array();
		//print_r($result);
	    return $result;
	}

	
		public function getAdminLoginLogsBetweenDates($fdate,$tdate)
	{
	    $this->db->select('*');
	    $this->db->from('admin_login_notifications');
	    if(!empty($fdate)){
	    $this->db->where('DATE(login_date_time) >=',$fdate);
	    }
	    if(!empty($tdate)){
	    $this->db->where('DATE(login_date_time) <=',$tdate);
	    }
	    else{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d ');
		$this->db->where('DATE(login_date_time)',$curr_date);
		}
		$this->db->order_by("login_notification_id", "desc");
		$query=$this->db->get();
	//	echo $this->db->last_query();exit;
	    $result=$query->result_array();
	 //   print_r($result);exit;
		 return $result;
	}
	function get_registerbyname($userid)
	{				
		$this->db->join('tbl_admin_data','rm_fkid=id');
		$results=$this->db->get_where('registerby_det',array('user_fkid'=>$userid))->row_array();
		return $results['username'];
	}
}