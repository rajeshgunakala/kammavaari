<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_search_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
		$this->load->model('Admin_dashboard_model', 'dashboard_model');
		$this->load->model('Email_model', 'email_model');
		$this->load->model('Encrypt_model', 'encrypt_model');
    }
    public function getallheights()
    {
        $this->db->select('height,height_in_cm,status');
        $this->db->from('tbl_height');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallcastes()
    {
        $this->db->select('caste,status');
        $this->db->from('tbl_caste');
        $this->db->order_by('caste', 'asc');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallreligions()
    {
        $this->db->select('religion,status');
        $this->db->from('tbl_religion');
        $this->db->where('status', 1);
        $this->db->order_by('religion', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallmothertounges()
    {
        $this->db->select('mothertounge,status');
        $this->db->from('tbl_mothertounge');
        $this->db->where('status', 1);
        $this->db->order_by('mothertounge', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
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

    public function getalleducations()
    {
        $this->db->select('heighsteducation,status');
        $this->db->from('tbl_heighsteducation');
        $this->db->where('status', 1);
        $this->db->order_by('heighsteducation', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function getallcountries()
    {
        $this->db->select('country,status');
        $this->db->from('tbl_country');
        $this->db->where('status', 1);
        $this->db->order_by('sort_order', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function getallemployee()
    {
        $this->db->select('username, id');
        $this->db->from('tbl_admin_data');
		$this->db->where('status', 1);
		$this->db->order_by('username','ASC');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function getalldistrict()
    {
        $this->db->select('state_id, district,status');
        $this->db->from('tbl_district');
        $this->db->where_in('state_id',array('1', '2'));
        $this->db->where('status', 1);
        $this->db->order_by('district', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        // print_r($result);exit();
        return $result;
    }


    public function getallcurrency()
    {
        $this->db->select('district,status');
        $this->db->from('tbl_district');
        $this->db->where('status', 1);
        $this->db->order_by('district', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function get_all_starsADM()
    {
        $this->db->select('star,status');
        $this->db->from('tbl_star');
        $this->db->order_by('star','asc');
        $this->db->where('status','1');
        $query = $this->db->get()->result_array();
        return $query;
    } 
    
    
    public function get_all_citys(){
        $this->db->distinct();
        $this->db->select('city');
        $this->db->from('tbl_professional_info');
        $this->db->where('city !=', '');

        $query = $this->db->get()->result_array();
        return $query;
        

    }

    public function search_sub_records($limit, $offset, $gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country)
    {

        $this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.living_in,p.profile_id,p.date,p.month,p.year");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
        $this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left');

        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');

        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');

        $this->db->select('pr.property_value,pr.property_type,pr.property_Desc');

        $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        
        if ($gender != "") {
            $this->db->where('p.gender', $gender);
        }
        if ($agefrom != "" && $ageto != "") {
            $this->db->where("cur_age BETWEEN $agefrom AND $ageto");
        }
        if ($heightfrom != "") {
            $this->db->where('r.height_cm >=', $heightfrom);
        }
        if ($heightto != "") {
            $this->db->where('r.height_cm <=', $heightto);
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
        if ($education != "") {
            $this->db->where('e.heighst_education', $education);
        }
        if ($country != "") {
            $this->db->where('p.living_in', $country);
        }

        if ($profession != "") {
            $this->db->where('e.occupation', $profession);
        }
        $this->db->where('p.status', 1);
        $this->db->limit($limit, $offset);
        $this->db->group_by('p.id');
        $this->db->order_by('p.registered_on', 'DESC');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
	
	public function getSelectedShareProfilesData($selectedProfiles) {
     
		$result = [];
		if(count($selectedProfiles) > 0) {
			$selectedProfilesList = explode(",",implode(",", array_keys($selectedProfiles)));
					//echo $selectedProfilesList;exit;
			$this->db->select("p.first_name,p.last_name,p.gender,p.profile_id, p.id,p.status");
			$this->db->from('tbl_primary_info as p');
			$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
			$this->db->select('payment_status, elite, profileowner,ms_usertype,prime');
            $this->db->join('ms_profilesetting as mprosetting', 'p.id=mprosetting.MS_id', 'left');
			$this->db->where_in('p.id', $selectedProfilesList);
			$this->db->group_by('u.MS_id');
			$this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
			$this->db->where('u.ismain=1 AND u.isactive=1');
			$query = $this->db->get();
			$result = $query->result_array();
		
		}
        return $result;
	}
	
	public function getProfileDetailsById($profileId) {
		//echo $profileId;
			$this->db->select("p.first_name,p.last_name,p.gender,p.profile_id, p.id,p.status");
			$this->db->from('tbl_primary_info as p');
			$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
			$this->db->where('p.id', $profileId);
			$this->db->group_by('u.MS_id');
			$this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
			$this->db->where('u.ismain=1 AND u.isactive=1');			
			$query = $this->db->get();
            // echo $this->db->last_query();exit;
			$result = $query->row_array();
			return $result;
	}
	
	public function sendShareProfilesFromInEmail($shareType,$shareProfiles, $shareFrom, $bothSides, $resend, $bothsideSelectedProfile,$intrest) {
        $outputString = implode(', ', $intrest);
    //  print_r($shareType);die;
		$resp = [];
		$sendprofile = "";
		$IsrevSend = $bothSides;	
        // print_r($IsrevSend);die;	
        $emailstr = '';
        $shareProfileIds = ''; 
		$bothsideSelectedProfileFlag = 0;
		if(count($bothsideSelectedProfile) > 0 && $IsrevSend == 0) {
			$bothsideSelectedProfileFlag = 1;
		}	

        $date = date('Y-m-d');
        $Curdate = date("F d, Y", strtotime($date));       
        $shareFromData = $this->dashboard_model->getEmailTosendProfile($shareFrom);
        $shareFromData['email'] = $this->encrypt_model->decryptField($shareFromData['email']);
       // print_r($shareFromData);exit();
		if (empty($shareFromData)) {
			$resp["status"] = "error";
			$resp["message"] = "Please enter valid profile Id";
			return $resp;
		}
		
        if (!empty($shareProfiles)) {
		 $shareProfilesData = $this->dashboard_model->get_ToProfile_detailsForMailFromSearch($shareProfiles);
			if ($shareProfilesData) {
				$names = [];
				foreach ($shareProfilesData as $row) {
					 if($row["gender"] == $shareFromData["gender"]) {
						 array_push($names, $row["first_name"]);
					 }
				}
				if(count($names) > 0) {
					$resp["status"] = "error";
					$resp["message"] = "'".implode(", ", $names)."' gender is same as '".$shareFromData["first_name"]."'. Please check.";
					return $resp;
				}
			}
			//check if already shared profiles
            if ($resend == 0) {
                if ($shareProfilesData) {
                    $existingFromids=array();
                    foreach ($shareProfilesData as $row) {
                        $existingFromids[]=$row['id'];
                    }
					$alreadysent = $this->dashboard_model->getallreadyemailsentinfoByFromIds($existingFromids, $shareFromData['id']);
                    if ($alreadysent["status"] == "exist") {
						$resp["status"] = "error";
						$resp["message"] = $shareFrom." profile already shared to '".$alreadysent["profiles"]."' profile(s).";
						return $resp;
                    }
                }
            }             
             
            $edutable="";
            
            $userid='';
			$failedProfiles = [];
			$failedProfilesCount = 0;
			$profileData = $this->dashboard_model->get_FromRevSendProfile_details($shareFrom);
			//print_r($profileData);exit;
            foreach ($shareProfilesData as $row) {
				$mailBody = '<div style="padding:0 10px;">
						<h3>Dear '.$row["first_name"]." ".$row["last_name"].'</h3>
						<p style="font-size: 18px; line-height:24px;text-align: left;">Below are suggested matches from kammavaari.com</p>
						</div>';
                $fulldata='';
                if ($sendprofile=='mms') {
                    $fulldata='<p>Phone: '.$profileData['mobile'].'</p><p>Email: '.$profileData['email'].'</p>';
                }
                $image = $this->dashboard_model->get_ToPImage_details($profileData['id']);
                if ($image == null) {
                    $IMG = base_url()."/assets/img/img_avatar.png";
                } else {
                    $IMG = $image['applicationphotopath'];
                }
                $from = "from"; 

                $url = base64_encode($profileData['id']."/".$row['id']."-".$profileData['id']."-".$from);
                $mailBody .= '<div class="containertwo">
					<div class="row">
					<div class="columnone">
						<img src="'.$IMG.'" style="width:200px; height: 200px; margin: 15px 15px; border: 1px solid; border-color:silver;">
					</div>
					<div class="columntwo">
						<div class="info" style="margin-top: 18px;">
							<b>'.$profileData['first_name'].' '.$profileData['last_name'].' ('.$profileData['profile_id'].')</b>
							<p>DOB : '.$profileData['date'].'-'.$profileData['month'].'-'.$profileData['year'].' | Height : '.$profileData['height'].'</p>
							<p>'.$profileData['city'].', '.$profileData['state'].'</p>
							
							'.$edutable.'
							
							<p>Occupation: '.$profileData['occupation'].'</p><br>'.$fulldata.'
							<div class="actions">
								<a class="button" href="'.site_url().'dashboard/search/user_profile/'.$url.'">View_from Full Profile</a> <a class="button" href="https://www.kammavaari.com/dashboard/search/interested_user_profile/'.$url.'">I Am Interested</a>
							</div>
						</div>						
					</div>
					</div></div>';
					$mailBody .= '<br><div style="font-size: 15px;margin:10px 0;padding:0 10px"><p>Thank You,</p><p>'.$this->session->userdata('uname').'</p><p>'.$this->session->userdata('phone_no').'</p><p>Kammavaari.com</p></div>';
					$row['email'] = $this->encrypt_model->decryptField($row['email']);	
				$to = $row['email'];
				// $to = '';
                // echo "<pre>"; print_r($shareProfiles);exit;
                $shareProfilesString333 = implode(',', $shareProfiles);
                if(empty($to)){

                    foreach ($shareProfiles as $row) {
                        $user22 = array(
                            'from_msID'  =>$row,
                            'to_msID'    => $shareFrom,
                            'sentby_ID'  => ($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id'),
                            'send_Date'  => date('Y-m-d H:i:s')
                     );
                     $this->db->insert('user_share_activity', $user22);
                    }


                $resp["status"] = "error";
				$resp["message"] = "Failed to send emails";
				return $resp;

                }

				$shareProfileEmail=emailtemplate('share_profile_email');
				$shareProfileEmail=str_replace('{base_url}',base_url(),$shareProfileEmail);
				$shareProfileEmail=str_replace('{logo}',base_url().'images/logo.png',$shareProfileEmail);
				$shareProfileEmail=str_replace('{website_name}','Kammavaari',$shareProfileEmail);
				$shareProfileEmail=str_replace('{info_email}','info@kammavaari.com',$shareProfileEmail);
				$shareProfileEmail=str_replace('{support_contact}','91-9177036777',$shareProfileEmail);
				$shareProfileEmail=str_replace('{mail_body}', $mailBody, $shareProfileEmail);
				
				$response = $this->email_model->emailgmailconf($to, "Suggested Matches From kammavaari.com", $shareProfileEmail);
				if ($response == 'Success') {
					if ($emailstr == '') {
						$emailstr .= $row['email'];
					} else {
						$emailstr .= ','.$row['email'];
					}

					if ($shareProfileIds == '') {
						$shareProfileIds .= $row['id'];
					} else {
						$shareProfileIds .= ','.$row['id'];
					}
					if($bothsideSelectedProfileFlag == 1 && in_array($row['id'], $bothsideSelectedProfile)) {
						$reverseSent = 1;
					} else {
						$reverseSent = $IsrevSend;
					}
                   
                    if($shareType == "from" && $outputString != "bothside_selected_profile"){
                
                        $dataArr = array(
                            'from_msID'  => $row['id'],
                            'to_msID'    => $profileData['id'],
                            'sentby_ID'  => ($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id'),
                            'send_Date'  => date('Y-m-d H:i:s'),
                            'sentprofile_full'=>$sendprofile,
                            'rev_sent'   => $reverseSent,
                            'rev_sent1'   => '5',
                            'f_ticketid'=>$url
                        ); 

                    } else if($outputString == "bothside_selected_profile"){
     
                    $dataArr = array(
                    'from_msID'  => $row['id'],
                    'to_msID'    => $profileData['id'],
                    'sentby_ID'  => ($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id'),
                    'send_Date'  => date('Y-m-d H:i:s'),
                    'sentprofile_full'=>$sendprofile,
                    'rev_sent1'   => '3',
                    'f_ticketid'=>$url
                );            
				
				   }else {
          
                     $dataArr = array(
                    'from_msID'  => $row['id'],
                    'to_msID'    => $profileData['id'],
                    'sentby_ID'  => ($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id'),
                    'send_Date'  => date('Y-m-d H:i:s'),
                    'sentprofile_full'=>$sendprofile,
                    'rev_sent'   => $reverseSent,
                    'f_ticketid'=>$url
                );     
                   } 
                   $res =  $this->dashboard_model->expressInterestInsert($dataArr);
                //    print_r($res);die;
                } else {
                $failedProfiles[] = $row["first_name"]." ".$row["last_name"];
                $failedProfilesCount++;					
            }	

			if($failedProfilesCount > 0) {
				$resp["status"] = "error";
				$resp["message"] = "Failed to send profile '".$profileData['first_name']." ".$profileData['last_name']."' to '".implode(", ",$failedProfiles)."'";
				return $resp;
			}
			if ($IsrevSend == '0' && $bothsideSelectedProfileFlag == 0) {
				$resp["status"] = "success";
				$resp["message"] = "Profile sent successfully.";
				return $resp;
			}
         
			//Reverse Send
            if ($IsrevSend == 1 || $bothsideSelectedProfileFlag == 1) {                
                $dupemail=array();
				$mailBody1 = '<div style="padding:0 10px;">
						<h3>Dear '.$shareFromData["first_name"]." ".$shareFromData["last_name"].'</h3>
						<p style="font-size: 18px; line-height:24px;text-align: left;">Below are suggested matches from kammavaari.com</p>
						</div>';
                foreach ($shareProfilesData as $rowR) {
					if($bothsideSelectedProfileFlag == 1 && !in_array($rowR['id'], $bothsideSelectedProfile)){
						continue;
					}
                    if (!in_array($rowR['email'], $dupemail)) {
						//$data1 = $this->dashboard_model->get_FromRevSendProfile_details($rowR);             
						$edutable="";
						$photo = $this->dashboard_model->get_ToPImage_details($rowR['id']);
						$fulldata='';
						if ($sendprofile=='mms') {
							$fulldata='<p>Phone: '.$rowR['mobile'].'</p><p>Email: '.$rowR['email'].'</p>';
						}
						$ToEmail = explode(",", $emailstr);
						// print_r($ToEmail);exit();
						if ($photo == null) {
							$IMAG = base_url()."/assets/img/img_avatar.png";
						} else {
							$IMAG = $photo['applicationphotopath'];
						}

                        $url1 = base64_encode($rowR['id']."/".$shareFromData['id']."-".$rowR['id']);
						$mailBody1 .= '<div class="containertwo">
							<div class="row">
							  	<div class="columnone">
							    	<img src="'.$IMAG.'" style="width:200px; height: 200px; margin: 15px 15px; border: 1px solid; border-color:silver;">
							  	</div>
							  	<div class="columntwo">
							    	<div class="info" style="margin-top: 18px;">
							  			<b>'.$rowR['first_name'].' '.$rowR['last_name'].' ('.$rowR['profile_id'].')</b>
							  			<p>DOB : '.$rowR['date'].'-'.$rowR['month'].'-'.$rowR['year'].' | Height : '.$rowR['height'].'</p>
							  			<p>'.$rowR['city'].', '.$rowR['state'].'</p>
							  			
										'.$edutable.'
							  			<p>Occupation : '.$rowR['occupation'].'</p><br>'.$fulldata.'
										<div class="actions">
							    		<a class="button" href="'.site_url().'dashboard/search/user_profile/'.$url1.'">View Full Profile</a> <a class="button" href="https://www.kammavaari.com/dashboard/search/interested_user_profile/'.$url1.'" >I Am Interested</a>
										</div>							  			
							  		</div>
						  		</div>
						  	</div></div>';

                        $dupemail[]=$rowR['email'];
                    // }
                }
				$mailBody1 .= '<br><div style="font-size: 15px;margin:10px 0;padding:0 10px"><p>Thank You,</p><p>'.$this->session->userdata('uname').'</p><p>'.$this->session->userdata('phone_no').'</p><p>Kammavaari.com</p></div>';
				$to = $shareFromData['email'];
				//$to = 'smkrishna1784@gmail.com';
				$shareProfileEmail=emailtemplate('share_profile_email');
				$shareProfileEmail=str_replace('{base_url}',base_url(),$shareProfileEmail);
				$shareProfileEmail=str_replace('{logo}',base_url().'images/logo.png',$shareProfileEmail);
				$shareProfileEmail=str_replace('{website_name}','Kammavaari',$shareProfileEmail);
				$shareProfileEmail=str_replace('{info_email}','info@kammavaari.com',$shareProfileEmail);
				$shareProfileEmail=str_replace('{support_contact}','91-9177036777',$shareProfileEmail);
				$shareProfileEmail=str_replace('{mail_body}', $mailBody1, $shareProfileEmail);
				$response=$this->email_model->emailgmailconf($to, "Suggested Matches From kammavaari.com", $shareProfileEmail);
				$shareProfileIdArr = explode(",", $shareProfileIds);
				for ($z=0; $z < sizeof($shareProfileIdArr); $z++) {
					if($bothsideSelectedProfileFlag == 1 && !in_array($shareProfileIdArr[$z], $bothsideSelectedProfile)){
						continue;
					}
                    if($resend == 1){
                      
                        $dataArr = array(
                            't_ticketid'=>$url1
                            ,'revsend_Date'=>date('Y-m-d H:i:s')
                        );
                    }else{
                     
                        $dataArr = array(
                            't_ticketid'=>$url1,
                            // ,'revsend_Date'=>date('Y-m-d H:i:s')
                        );
                    }
                   
                    $this->db->where(array('from_msID' => $shareProfileIdArr[$z],'to_msID' => $shareFromData['id'] ,'sentby_ID'  => $this->session->userdata('user_id')));
                    $this->db->update('ms_servicelist', $dataArr);
                }
            }
			$resp["status"] = "success";
			$resp["message"] = "Profiles sent successfully";
			return $resp;
        }
	}
}
    }
	public function sendShareProfilesInEmail($shareProfiles, $shareTo, $bothSides, $resend, $bothsideSelectedProfile, $intrest) {
		$outputString = implode(', ', $intrest);
        $resp = [];
		$sendprofile = "";
		$IsrevSend = $bothSides;		
        $emailstr = '';
        $shareProfileIds = ''; 
		$bothsideSelectedProfileFlag = 0;
		if(count($bothsideSelectedProfile) > 0 && $IsrevSend == 0) {
			$bothsideSelectedProfileFlag = 1;
		}		

        $date = date('Y-m-d');
        $Curdate = date("F d, Y", strtotime($date));       
        $shareToData = $this->dashboard_model->getEmailTosendProfile($shareTo);
        $shareToData['email'] = $this->encrypt_model->decryptField($shareToData['email']);
        //
       // print_r($shareToData);exit();
		if (empty($shareToData)) {
			$resp["status"] = "error";
			$resp["message"] = "Please enter valid profile Id";
			return $resp;
		}
		
        if (!empty($shareToData)) {
			//print_r($shareProfiles);
            $shareProfilesData = $this->dashboard_model->get_ToProfile_detailsForMailFromSearch($shareProfiles);
			if ($shareProfilesData) {
				$names = [];
				foreach ($shareProfilesData as $row) {
					 if($row["gender"] == $shareToData["gender"]) {
						 array_push($names, $row["first_name"]);
					 }
				}
				if(count($names) > 0) {
					$resp["status"] = "error";
					$resp["message"] = "'".implode(", ", $names)."' gender is same as '".$shareToData["first_name"]."'. Please check.";
					return $resp;
				}
			}
			//check if already shared profiles
            if ($resend == 0) {
                if ($shareProfilesData) {
                    $existingtoids=array();
                    foreach ($shareProfilesData as $row) {
                        $existingtoids[]=$row['id'];
                    }
                    $alreadysent = $this->dashboard_model->getallreadyemailsentinfo($existingtoids, $shareToData['id']);
                    if ($alreadysent["status"] == "exist") {
						$resp["status"] = "error";
						$resp["message"] = "'".$alreadysent["profiles"]."' profiles already shared to '".$shareTo."' profile.";
						return $resp;
                    }
                }
            }             
             
            $edutable="";
            $mailBody = '<div style="padding:0 10px;">
						<h3>Dear '.$shareToData["first_name"]." ".$shareToData["last_name"].'</h3>
						<p style="font-size: 18px; line-height:24px;text-align: left;">Below are suggested matches from kammavaari.com</p>
						</div>';
            $userid='';
            foreach ($shareProfilesData as $row) {
                $fulldata='';
                if ($sendprofile=='mms') {
                    $fulldata='<p>Phone: '.$row['mobile'].'</p><p>Email: '.$row['email'].'</p>';
                }
                $image = $this->dashboard_model->get_ToPImage_details($row['id']);
                if ($image == null) {
                    $IMG = base_url()."/assets/img/img_avatar.png";
                } else {
                    $IMG = $image['applicationphotopath'];
                }

                $url = base64_encode($row['id']."/".$shareToData['id']."-".$row['id']);
                // echo $url;
                $mailBody .= '<div class="containertwo">
							<div class="row">
						  	<div class="columnone">
						    	<img src="'.$IMG.'" style="width:200px; height: 200px; margin: 15px 15px; border: 1px solid; border-color:silver;">
						  	</div>
						  	<div class="columntwo">
						    	<div class="info" style="margin-top: 18px;">
						  			<b>'.$row['first_name'].' '.$row['last_name'].' ('.$row['profile_id'].')</b>
						  			<p>DOB : '.$row['date'].'-'.$row['month'].'-'.$row['year'].' | Height : '.$row['height'].'</p>
						  			<p>'.$row['city'].', '.$row['state'].'</p>
									
						  			'.$edutable.'
									
						  			<p>Occupation: '.$row['occupation'].'</p><br>'.$fulldata.'
									<div class="actions">
							    		<a class="button" href="'.site_url().'dashboard/search/user_profile/'.$url.'">View Full Profile</a> <a class="button"  href="https://www.kammavaari.com/dashboard/search/interested_user_profile/'.$url.'" >I Am Interested</a>
									</div>
						  		</div>
						  	</div>
						  	</div></div>';
							if ($emailstr == '') {
								$emailstr .= $row['email'];
							} else {
								$emailstr .= ','.$row['email'];
							}

							if ($shareProfileIds == '') {
								$shareProfileIds .= $row['id'];
							} else {
								$shareProfileIds .= ','.$row['id'];
							}
            }
            $mailBody .= '<br><div style="font-size: 15px;margin:10px 0;padding:0 10px"><p>Thank You,</p><p>'.$this->session->userdata('uname').'</p><p>'.$this->session->userdata('phone_no').'</p><p>Kammavaari.com</p></div>';
            
           //echo $shareToData['email'];
          //echo '<pre>';print_r($mailBody);exit;
            $to = $shareToData['email'];
            $shareProfilesString2222 = implode(',', $shareProfiles);
            if(empty($to)){
                foreach ($shareProfiles as $row) {
                    $user22 = array(
                        'from_msID'  =>$row,
                        'to_msID'    => $shareTo,
                        'sentby_ID'  => ($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id'),
                        'send_Date'  => date('Y-m-d H:i:s')
                 );
                 $this->db->insert('user_share_activity', $user22);
                }
                

                $resp["status"] = "error";
				$resp["message"] = "Failed to send emails";
				return $resp;
            }
            //echo $to;exit;
		//	$to = 'smkrishna1785@gmail.com';
			$shareProfileEmail=emailtemplate('share_profile_email');
			$shareProfileEmail=str_replace('{base_url}',base_url(),$shareProfileEmail);
			$shareProfileEmail=str_replace('{logo}',base_url().'images/logo.png',$shareProfileEmail);
			$shareProfileEmail=str_replace('{website_name}','Kammavaari',$shareProfileEmail);
			$shareProfileEmail=str_replace('{info_email}','info@kammavaari.com',$shareProfileEmail);
			$shareProfileEmail=str_replace('{support_contact}','91-9177036777',$shareProfileEmail);
			$shareProfileEmail=str_replace('{mail_body}', $mailBody, $shareProfileEmail);
			
            $response = $this->email_model->emailgmailconf($to, "Suggested Matches From kammavaari.com", $shareProfileEmail);
            if ($response == 'Success') {
                $shareProfileIdArr = explode(",", $shareProfileIds);				
                for ($y=0; $y < sizeof($shareProfileIdArr); $y++) {
					if($bothsideSelectedProfileFlag == 1 && in_array($shareProfileIdArr[$y], $bothsideSelectedProfile)) {
						$reverseSent = 1;
					} else {
						$reverseSent = $IsrevSend;
					}
                    if($outputString == "bothside_selected_profile"){
                        $dataArr = array(	
                            'from_msID'  => $shareToData['id'],
                            'to_msID'    => $shareProfileIdArr[$y],
                            'sentby_ID'  => ($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id'),
                            'send_Date'  => date('Y-m-d H:i:s'),
                            'sentprofile_full'=>$sendprofile,
                            'rev_sent'   => $reverseSent,
                            'rev_sent1'   => '3',
                            'f_ticketid'=>$url
                        );  

                    }else{
                    $dataArr = array(	
                        'from_msID'  => $shareToData['id'],
                        'to_msID'    => $shareProfileIdArr[$y],
                        'sentby_ID'  => ($this->session->userdata('staff_id')) ? $this->session->userdata('staff_id') : $this->session->userdata('admin_id'),
                        'send_Date'  => date('Y-m-d H:i:s'),
                        'sentprofile_full'=>$sendprofile,
                        'rev_sent'   => $reverseSent,
                        'f_ticketid'=>$url
                    );  
                }                  
                    $res =  $this->dashboard_model->expressInterestInsert($dataArr);                    
                }
				if ($IsrevSend == '0' && $bothsideSelectedProfileFlag == 0) {
					$resp["status"] = "success";
					$resp["message"] = "Profile sent successfully";
					return $resp;
				}
            } else {
                $resp["status"] = "error";
				$resp["message"] = "Failed to send emails";
				return $resp;
            }
        
         
            if ($IsrevSend == 1 || $bothsideSelectedProfileFlag == 1) {
                $data1 = $this->dashboard_model->get_FromRevSendProfile_details($shareTo);
             
                $edutable="";
                $photo = $this->dashboard_model->get_ToPImage_details($data1['id']);
                $fulldata='';
                if ($sendprofile=='mms') {
                    $fulldata='<p>Phone: '.$data1['mobile'].'</p><p>Email: '.$data1['email'].'</p>';
                }
                $ToEmail = explode(",", $emailstr);
                // print_r($ToEmail);exit();
                if ($photo == null) {
                    $IMAG = base_url()."/assets/img/img_avatar.png";
                } else {
                    $IMAG = $photo['applicationphotopath'];
                }
                //echo '<pre>';print_r($data);exit;
                $dupemail=array();
                foreach ($shareProfilesData as $rowR) {
					if($bothsideSelectedProfileFlag == 1 && !in_array($rowR['id'], $bothsideSelectedProfile)){
						continue;
					}
					$rowR['email'] = $this->encrypt_model->decryptField($rowR['email']);
                    if (!in_array($rowR['email'], $dupemail)) {
                        $url1 = base64_encode($shareToData['id']."/".$rowR['id']."-".$shareToData['id']);

                        $mailBody1 = '<div style="padding:0 10px;">
						<h3>Dear '.$rowR["first_name"]." ".$rowR["last_name"].'</h3>
						<p style="font-size: 18px; line-height:24px;text-align: left;">Below are suggested matches from kammavaari.com</p>
						</div>
						    <div class="containertwo">
							<div class="row">
							  	<div class="columnone">
							    	<img src="'.$IMAG.'" style="width:200px; height: 200px; margin: 15px 15px; border: 1px solid; border-color:silver;">
							  	</div>
							  	<div class="columntwo">
							    	<div class="info" style="margin-top: 18px;">
							  			<b>'.$data1['first_name'].' '.$data1['last_name'].' ('.$data1['profile_id'].')</b>
							  			<p>DOB : '.$data1['date'].'-'.$data1['month'].'-'.$data1['year'].' | Height : '.$data1['height'].'</p>
							  			<p>'.$data1['city'].', '.$data1['state'].'</p>
							  			
										'.$edutable.'
							  			<p>Occupation : '.$data1['occupation'].'</p><br>'.$fulldata.'
										<div class="actions">
											<a class="button" href="'.site_url().'dashboard/search/user_profile/'.$url1.'">View Full Profile</a> <a class="button" href="https://www.kammavaari.com/dashboard/search/interested_user_profile/'.$url1.'" >I Am Interested</a>
										</div>							  			
							  		</div>							  		
						  		</div>
						  	</div></div><br><div style="font-size: 15px;margin:10px 0;padding:0 10px"><p>Thank You,</p><p>'.$this->session->userdata('uname').'</p><p>'.$this->session->userdata('phone_no').'</p><p>Kammavaari.com</p></div>';

                         $to = $rowR['email'];
                        $subject = "Suitable matches of the day 11";
					//	$to = 'smkrishna1784@gmail.com';
						$shareProfileEmail=emailtemplate('share_profile_email');
						$shareProfileEmail=str_replace('{base_url}',base_url(),$shareProfileEmail);
						$shareProfileEmail=str_replace('{logo}',base_url().'images/logo.png',$shareProfileEmail);
						$shareProfileEmail=str_replace('{website_name}','Kammavaari',$shareProfileEmail);
						$shareProfileEmail=str_replace('{info_email}','info@kammavaari.com',$shareProfileEmail);
						$shareProfileEmail=str_replace('{support_contact}','91-9177036777',$shareProfileEmail);
						$shareProfileEmail=str_replace('{mail_body}', $mailBody1, $shareProfileEmail);
                        $response=$this->email_model->emailgmailconf($to, "Suggested Matches From kammavaari.com", $shareProfileEmail);
                        // if(mail($to, "Suggested Matches From kammavaari.com", $mailBody1, $headers)){
                        if ($response=='Success') {
                        } else {
                           // echo 'fail';
                        }
                
                        $dupemail[]=$rowR['email'];
                    }
                }

                for ($z=0; $z < sizeof($shareProfileIdArr); $z++) {
					if($bothsideSelectedProfileFlag == 1 && !in_array($shareProfileIdArr[$z], $bothsideSelectedProfile)){
						continue;
					}
                    $dataArr = array(
                            't_ticketid'=>$url1
                            ,'revsend_Date'=>date('Y-m-d H:i:s')
                        );
                    $this->db->where(array('from_msID'  => $shareToData['id'],'to_msID'    => $shareProfileIdArr[$z],'sentby_ID'  => $this->session->userdata('user_id')));
                    $this->db->update('ms_servicelist', $dataArr);
                    //echo '<pre>';print_r($dataArr);exit;
                        //$res =  $this->dashboard_model->expressInterestInsert($dataArr);
                }
               // echo $res;
            }
			$resp["status"] = "success";
			$resp["message"] = "Profiles sent successfully";
			return $resp;
        }
	}
	public function getPreferencesByProfile($profile_id) {	
		$this->db->select("p.id, p.gender,p.date,p.month,p.year");
        $this->db->from('tbl_primary_info as p');
		$this->db->select("ppr.*");
        $this->db->join('tbl_partner_preferences as ppr', 'p.id = ppr.ms_id', 'left');
		$this->db->where('p.profile_id', $profile_id);
		$result = $this->db->get()->row_array();
		//echo $this->db->last_query();exit;
		$month = date('m',strtotime($result["month"]));
		$age = date_diff(date_create($result["year"]."-".$month."-".$result["date"]), date_create('today'))->y;
		$preferences = [];
		if(!empty($result)) {			
			$preferences["gender"] = $result["gender"];
			$preferences["age"] = $age;
			if(!empty($result["p_height_from"])) {
				$preferences["height_from"] = $result["p_height_from"];
			}
			if(!empty($result["p_height_to"])) {
				$preferences["height_to"] = $result["p_height_to"];
			}
			if(!empty($result["p_age_from"])) {
				$preferences["age_from"] = $result["p_age_from"];
			}
			if(!empty($result["p_age_to"])) {
				$preferences["age_to"] = $result["p_age_to"];
			}
			if(!empty($result["p_marital_status"])) {
				$preferences["marital_status"] = $result["p_marital_status"];
			}
			if(!empty($result["p_mother_tongue"])) {
				$preferences["mother_tongue"] = $result["p_mother_tongue"];
			}
			if(!empty($result["p_caste"])) {
				$preferences["caste"] = $result["p_caste"];
			}
			if(!empty($result["p_star"])) {
				$preferences["star"] = $result["p_star"];
			}
			if(!empty($result["p_education"])) {
				$preferences["education"] = $result["p_education"];
			}
			if(!empty($result["employee_in"])) {
				$preferences["employee_in"] = $result["employee_in"];
			}
			if(!empty($result["p_profession"])) {
				$preferences["profession"] = $result["p_profession"];
			}
			if(!empty($result["p_country"])) {
				$preferences["country"] = $result["p_country"];
			}
			if(!empty($result["p_district"])) {
				$preferences["district"] = $result["p_district"];
			}
			if(!empty($result["p_city"])) {
				$preferences["city"] = $result["p_city"];
			}
			return $preferences;	
		} else {
			return false;
		}
	}
	
	public function searchLatestProfilesCount() {
		$this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.living_in,p.profile_id,p.date,p.month,p.year, mprosetting.ms_usertype");
		$this->db->from('tbl_primary_info as p');
		$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
		$this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
		$this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me, e.country');
		$this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
		$this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
		$this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left'); 
		$this->db->select('pr.property_value,pr.property_type,pr.property_Desc');
		$this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
		$this->db->select('payment_status, elite, profileowner,prime');
		$this->db->join('ms_profilesetting as mprosetting', 'p.id=mprosetting.MS_id', 'left');
		$this->db->select('adm.username as profile_owner_name');
		$this->db->join('tbl_admin_data as adm', 'mprosetting.profileowner=adm.id', 'left');	
		$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
		$this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
		$this->db->select('ppr.p_height_from, ppr.p_height_to, ppr.p_age_from, ppr.p_age_to, ppr.p_marital_status, ppr.p_mother_tongue, ppr.p_caste, ppr.p_star, ppr.p_education, ppr.employee_in, ppr.p_profession, ppr.p_country, ppr.p_district, ppr.p_city, ppr.p_about');
		$this->db->join('tbl_partner_preferences as ppr', 'p.id=ppr.ms_id', 'left');
		
		$this->db->where('u.ismain=1 AND u.isactive=1');
		
		if($this->session->userdata('type')=='staff')
		{
			if($this->session->userdata('rm_type') != 1 && $this->session->userdata('rm_type') != 2){
			$this->db->where('mprosetting.profileowner >', 0);
			$this->db->where('mprosetting.ms_usertype !=', 'elite');
			}
		}
		$this->db->where('mprosetting.ms_usertype !=', 'Notshown');
		$this->db->where('p.status', 1);
		$this->db->where("p.registered_on > DATE_ADD(NOW(),INTERVAL -10 DAY)");
		$this->db->group_by('p.id');
		$query = $this->db->get();
		$result = $query->num_rows();
		//echo $this->db->last_query();exit;
		// print_r($result);exit();
		return $result;
	}
	
	public function searchLatestProfiles($limit, $offset) {
		$this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.living_in,p.profile_id,p.date,p.month,p.year, mprosetting.ms_usertype");
		$this->db->from('tbl_primary_info as p');
		$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
		$this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
		$this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me, e.country');
		$this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
		$this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
		$this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left'); 
		$this->db->select('pr.property_value,pr.property_type,pr.property_Desc');
		$this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
		$this->db->select('payment_status, elite, profileowner,prime');
		$this->db->join('ms_profilesetting as mprosetting', 'p.id=mprosetting.MS_id', 'left');
		$this->db->select('adm.username as profile_owner_name');
		$this->db->join('tbl_admin_data as adm', 'mprosetting.profileowner=adm.id', 'left');
		$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
		$this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
		$this->db->select('ppr.p_height_from, ppr.p_height_to, ppr.p_age_from, ppr.p_age_to, ppr.p_marital_status, ppr.p_mother_tongue, ppr.p_caste, ppr.p_star, ppr.p_education, ppr.employee_in, ppr.p_profession, ppr.p_country, ppr.p_district, ppr.p_city, ppr.p_about');
		$this->db->join('tbl_partner_preferences as ppr', 'p.id=ppr.ms_id', 'left');
		$this->db->where('u.ismain=1 AND u.isactive=1');		
		$this->db->where("`p.registered_on` > DATE_ADD(NOW(),INTERVAL -10 DAY)");

		if($this->session->userdata('type')=='staff')
		{
			if($this->session->userdata('rm_type') != 1 && $this->session->userdata('rm_type') != 2){
			$this->db->where('mprosetting.profileowner >', 0);
			$this->db->where('mprosetting.ms_usertype !=', 'elite');
			}
		}
		$this->db->where('mprosetting.ms_usertype !=', 'Notshown');
		$this->db->where('p.status', 1);
		$this->db->limit($limit, $offset);
		$this->db->group_by('p.id');
		$this->db->order_by('p.registered_on', 'DESC');
		$query = $this->db->get();
		$result = $query->result_array();
		//echo $this->db->last_query();exit;
		// print_r($result);exit();
		return $result;
	}
	
	public function searchRecomendationsCount($profile_id)
    {
		$preferences = $this->getPreferencesByProfile($profile_id);
		if(!empty($preferences)) {
			$this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.living_in,p.profile_id,p.date,p.month,p.year, mprosetting.ms_usertype");
			$this->db->from('tbl_primary_info as p');
			$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
			$this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
			$this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me, e.country');
			$this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
			$this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
			$this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left');	 
			$this->db->select('pr.property_value,pr.property_type,pr.property_Desc');
			$this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
			$this->db->select('payment_status, elite, profileowner,prime');
			$this->db->join('ms_profilesetting as mprosetting', 'p.id=mprosetting.MS_id', 'left');
			$this->db->select('adm.username as profile_owner_name');
			$this->db->join('tbl_admin_data as adm', 'mprosetting.profileowner=adm.id', 'left');			
			$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
			$this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
			
			$this->db->where('u.ismain=1 AND u.isactive=1');
			
			if (!empty($preferences["gender"])) {
				$this->db->where('p.gender !=', $preferences["gender"]);
			}	
			
			if (!empty($preferences["height_from"])) {
				$this->db->where('r.height >=', $preferences["height_from"]);
			}
			if (!empty($preferences["height_to"])) {
				$this->db->where('r.height <=', $preferences["height_to"]);
			}
			if (!empty($preferences["age_from"])) {
				//$this->db->where('((YEAR(CURDATE()) - CAST(p.year AS UNSIGNED)) - $preferences["age"])  >=', $preferences["age_from"]);
			}
			if (!empty($preferences["age_to"])) {
				//$this->db->where('((YEAR(CURDATE()) - CAST(p.year AS UNSIGNED)) - 32) >=', $preferences["age_to"]);
				//$this->db->where("((YEAR(CURDATE()) - CAST(p.year AS UNSIGNED)) <=", $preferences["age_to"]);
			}
			if (!empty($preferences["marital_status"])) {
				$this->db->where_in('r.marital_status', $preferences["marital_status"]);
			}
			if (!empty($preferences["star"])) {
				$this->db->where_in('r.star', $preferences["star"]);
			}
			if (!empty($preferences["mother_tongue"])) {
				$this->db->where_in('r.mother_tounge', $preferences["mother_tounge"]);
			}
			if (!empty($preferences["caste"])) {
				$this->db->where_in('r.caste', $preferences["caste"]);
			}
				
			if (!empty($preferences["education"])) {
				$eductionIn = "'".implode("','", array_map('trim', explode(",",$preferences["education"])))."'";
				$this->db->where('e.heighst_education IN ('.$eductionIn.')');
			}
			if (!empty($preferences["employee_in"])) {
				$employeeIn = "'".implode("','", array_map('trim', explode(",",$preferences["employee_in"])))."'";
				$this->db->where('e.employee_in IN ('.$employeeIn.')');
			}
			if (!empty($preferences["profession"])) {
				$professionIn = "'".implode("','", array_map('trim', explode(",",$preferences["profession"])))."'";
				$this->db->where('e.occupation IN ('.$professionIn.')');
			}
			if (!empty($preferences["country"])) {
				$this->db->where_in('e.country', $preferences["country"]);
			}
			if (!empty($preferences["district"])) {
				$this->db->where_in('pa.fathers_father_district', $preferences["district"]);
			}
			// if (!empty($preferences["city"])) {
			// 	$this->db->where_in('pa.fathers_father_native_place', $preferences["city"]);
			// }
			if($this->session->userdata('type')=='staff')
			{
				$this->db->where('mprosetting.profileowner >', 0);
				$this->db->where('mprosetting.ms_usertype !=', 'elite');
			}

			$this->db->where('p.status', 1);
			$this->db->group_by('p.id');
			$query = $this->db->get();
			$result = $query->num_rows();
			//echo $this->db->last_query();exit;
			// print_r($result);exit();
			return $result;
		} else {
			return 0;
		}        
    }
	
	public function searchRecomendationsByProfile($limit, $offset, $profile_id)
    {
		$preferences = $this->getPreferencesByProfile($profile_id);
		if(!empty($preferences)) {
			$this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.date,p.month,p.year, mprosetting.ms_usertype");
			$this->db->from('tbl_primary_info as p');
			$this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
			$this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
			$this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me, e.country');
			$this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
			$this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
			$this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left');

			$this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
			$this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');

			$this->db->select('pr.property_value,pr.property_type,pr.property_Desc');
			$this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');

			$this->db->select('payment_status, elite, profileowner,prime');
			$this->db->join('ms_profilesetting as mprosetting', 'p.id=mprosetting.MS_id', 'left');
			$this->db->select('adm.username as profile_owner_name');
			$this->db->join('tbl_admin_data as adm', 'mprosetting.profileowner=adm.id', 'left');
			
			$this->db->where('u.ismain=1 AND u.isactive=1');
			
			if (!empty($preferences["gender"])) {
				$this->db->where('p.gender !=', $preferences["gender"]);
			}	
			
			if (!empty($preferences["height_from"]) && $preferences["height_from"] != 'N/A') {
				$this->db->where('r.height >=', $preferences["height_from"]);
			}
			if (!empty($preferences["height_to"]) && $preferences["height_to"] != 'N/A') {
				$this->db->where('r.height <=', $preferences["height_to"]);
			}
			/*if (!empty($preferences["age_from"])) {
				$this->db->where('(YEAR(CURDATE()) - CAST(p.year AS UNSIGNED)) >=', $preferences["age_from"]);
			}
			if (!empty($preferences["age_to"])) {
				$this->db->where("(YEAR(CURDATE()) - CAST(p.year AS UNSIGNED)) <=", $preferences["age_to"]);
			}*/
			if (!empty($preferences["marital_status"]) && $preferences["marital_status"] != 'N/A') {
				$this->db->where_in('r.marital_status', $preferences["marital_status"]);
			}
            // print_r($preferences["star"]);die;
			if (!empty($preferences["star"]) && $preferences["star"] != 'N/A') {
                // Split the comma-separated string into an array
                $stars = explode(', ', $preferences["star"]);
                
                // Ensure all elements are properly quoted
                $quoted_stars = array_map(function($star) {
                    return "'" . $this->db->escape_str(trim($star)) . "'";
                }, $stars);
                
                // Create a comma-separated string of quoted values
                $star_list = implode(",", $quoted_stars);
                
                // Use where_in with the quoted values
                $this->db->where("r.star IN ($star_list)");
            }
            
			if (!empty($preferences["mother_tongue"]) && $preferences["mother_tongue"] != 'N/A' ) {
				$this->db->where_in('r.mother_tounge', $preferences["mother_tounge"]);
			}
			if (!empty($preferences["caste"]) && $preferences["caste"] != 'N/A' ) {
				$this->db->where_in('r.caste', $preferences["caste"]);
			}
				
			if (!empty($preferences["education"]) && $preferences["education"] != 'N/A' ) {
				$eductionIn = "'".implode("','", array_map('trim', explode(",",$preferences["education"])))."'";
				$this->db->where('e.heighst_education IN ('.$eductionIn.')');
			}
			if (!empty($preferences["employee_in"])  && $preferences["employee_in"] != 'N/A' ) {
				$employeeIn = "'".implode("','", array_map('trim', explode(",",$preferences["employee_in"])))."'";
				$this->db->where('e.employee_in IN ('.$employeeIn.')');
			}
			if (!empty($preferences["profession"]) && $preferences["profession"] != 'N/A' ) {
				$professionIn = "'".implode("','", array_map('trim', explode(",",$preferences["profession"])))."'";
				$this->db->where('e.occupation IN ('.$professionIn.')');
			}
			if (!empty($preferences["country"]) && $preferences["country"] != 'N/A'  ) {
				$this->db->where_in('e.country', $preferences["country"]);
			}
			if (!empty($preferences["district"]) && $preferences["district"] != 'any'  ) {
				$this->db->where_in('pa.fathers_father_district', $preferences["district"]);
			}
			// if (!empty($preferences["city"]) && $preferences["city"] != 'N/A'  ) {
			// 	$this->db->where_in('pa.fathers_father_native_place', $preferences["city"]);
			// }
			if($this->session->userdata('type')=='staff')
			{
				$this->db->where('mprosetting.profileowner >', 0);
				$this->db->where('mprosetting.ms_usertype !=', 'elite');
			}

			$this->db->where('p.status', 1);
			$this->db->limit($limit, $offset);
			$this->db->group_by('p.id');
			$this->db->order_by('p.registered_on', 'DESC');
			$query = $this->db->get();
			$result = $query->result_array();
			// echo $this->db->last_query();exit;
			// print_r($result);exit();
			return $result;
		} else {
			return "";
		}
    }

    public function search_sub_recordsNew($limit, $offset, $gender, $profile_id, $surname, $name, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $religion, $mothertounge, $caste, $education, $profession, $country, $elight, $payment, $dorfrom, $dorto, $propertyfor, $propertyto, $district, $application_status, $employee, $currency,$photos, $salaryfrom, $salaryto, $star, $phone_no,$state,$visatype,$city,$specialization)
    {
        $search_type = $_GET["searchtype"]; 
        // print_r($search_type);die;

        $this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.living_in,p.profile_id,p.date,p.month,p.year, mprosetting.ms_usertype");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me, e.country');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
        $this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left');

        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');

        $this->db->select('pr.property_value,pr.property_type,pr.property_Desc');
        $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');

        $this->db->select('payment_status, elite, profileowner,prime');
        $this->db->join('ms_profilesetting as mprosetting', 'p.id=mprosetting.MS_id', 'left');
		$this->db->select('adm.username as profile_owner_name');
		$this->db->join('tbl_admin_data as adm', 'mprosetting.profileowner=adm.id', 'left');
		$this->db->select('ppr.p_height_from, ppr.p_height_to, ppr.p_age_from, ppr.p_age_to, ppr.p_marital_status, ppr.p_mother_tongue, ppr.p_caste, ppr.p_star, ppr.p_education, ppr.employee_in, ppr.p_profession, ppr.p_country, ppr.p_district, ppr.p_city, ppr.p_about');
		$this->db->join('tbl_partner_preferences as ppr', 'p.id=ppr.ms_id', 'left');
		 $this->db->select('kv.kv_ue_highedu_special');
        $this->db->join('kv_usereducation as kv', 'kv.kv_userfkid=p.id', 'left');
        
        if ($gender != "") {
            $this->db->where('p.gender', $gender);
        }
        
        if ($specialization != "") {
            $this->db->group_start()
                     ->where_in('kv.kv_ue_highedu_special', $specialization)
                     ->or_where_in('kv.kv_ue_pg_special', $specialization)
                     ->or_where_in('kv.kv_ue_g_special', $specialization)
                     ->group_end();
        }
        if ($state != "") {
            $this->db->where_in('e.state', $state);
        }
        
         if ($visatype != "") {
            $this->db->where_in('e.visatype', $visatype);
        }
        
        if ($city != "") {
            $this->db->like('e.city', $city);
        }
        
		if ($profile_id != "") {
			$this->db->like('p.profile_id', $profile_id, 'both');
		}
		if ($name != "") {
            $this->db->like('p.first_name', $name, 'both');
        }	
		if ($surname != "") {
			$this->db->like('p.last_name', $surname, 'after');
		}		
		if ($phone_no != "") {
			$this->db->where('p.mobile', $phone_no);
		}
        if ($heightfrom != "") {
            $this->db->where('r.height_cm >=', $heightfrom);
        }
        if ($heightto != "") {
            $this->db->where('r.height_cm <=', $heightto);
        }
        if ($agefrom != "") {
            $this->db->where('(DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), "%Y")+0) >=', $agefrom);
        }
        if ($ageto != "") {
            $this->db->where("(DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <=", $ageto);
        }
        if ($maritalstatus != "") {
            $this->db->where_in('r.marital_status', $maritalstatus);
        }
        if ($religion != "") {
            $this->db->where_in('r.religion', $religion);
        }
        if ($mothertounge != "") {
            $this->db->where_in('r.mother_tounge', $mothertounge);
        }
        if ($caste != "") {
            $this->db->where_in('r.caste', $caste);
        }
        if ($star != "") {
            $this->db->where_in('r.star', $star);
        }
        if ($education != "") {
            $this->db->where_in('e.heighst_education', $education);
        }
        if ($profession != "") {
            $this->db->where_in('e.occupation', $profession);
        }
        if ($country != "") {
            $this->db->where_in('e.country', $country);
        }
        if ($elight != "" && $elight == "yes") {
            $this->db->where('mprosetting.elite', $elight);
        }
        if ($payment != "" && $payment != "both") {
			$paymentVal = ($payment == "paid") ? 1 : "NULL";
			if($payment == "free") {
				$this->db->where('mprosetting.payment_status IS NULL');
			} else {
				$this->db->where('mprosetting.payment_status', $paymentVal);
			}
        }
        if ($dorfrom != "") {
            $this->db->where('p.registered_on >=', date('Y-m-d', strtotime($dorfrom)));
        }
        if ($dorto != "") {
            $this->db->where('p.registered_on <=', date('Y-m-d', strtotime($dorto)));
        }
        if ($propertyfor != "") {
            $this->db->where('CAST(pr.property_value AS DECIMAL(8, 2)) >=', $propertyfor);
        }
        if ($propertyto != "") {
            $this->db->where('CAST(pr.property_value AS DECIMAL(8, 2)) <=', $propertyto);
        }
        if ($application_status != "") {
            $this->db->where_in('p.status', $application_status);
        }
        if ($employee != "") {
            $this->db->where_in('mprosetting.profileowner', $employee);
        }
		if ($district != "") {
			$district_list = "'".implode("','", $district)."'";
			$where = '(pa.fathers_father_district IN('.$district_list.') or pa.mothers_father_district IN('.$district_list.'))';
            $this->db->where($where);
        }
        /*if ($district != "") {
            $this->db->where_in('pa.fathers_father_district', $district);
        }
        if ($district != "") {
            $this->db->where_in('pa.mothers_father_district', $district);
        }*/
		//echo $photos;
        if ($photos == "no") {
           $this->db->where('p.id NOT IN (SELECT MS_photos.MS_id FROM MS_photos WHERE MS_photos.MS_id=p.id)');
        } else {
			$this->db->where('u.ismain=1 AND u.isactive=1');
		}
        if ($currency != "") {
            $this->db->where_in('e.currency', $currency);
        }
        if ($salaryfrom != "") {
            $this->db->where('CAST(e.annual_income AS DECIMAL(8, 2)) >=', $salaryfrom);
        }
        if ($salaryto != "") {
            $this->db->where('CAST(e.annual_income AS DECIMAL(8, 2)) <=', $salaryto);
        }
		if($this->session->userdata('type')=='staff')
		{
			$this->db->where('mprosetting.profileowner >', 0);
		//	$this->db->where('mprosetting.ms_usertype !=', 'elite');
		}

        // || $search_type == ""
		
		if($elight == "no" || $search_type == "quick" || $search_type == ""){  
		  //  print_r("deva");die;
        if($this->session->userdata('rm_type')=='rc_rm')
		{
		  //  print_r("d");die;
		    $type=array("confidential","regular");
		 $this->db->where_in('mprosetting.ms_usertype',$type);
		 
		}
		if($this->session->userdata('rm_type')=='sc_rm')
		{
		  //  print_r("e");die;
	       // $type=array("superconfidential","confidential","regular"); -- old 17-07-2023
	       $type=array("superconfidential","confidential","regular");
		   $this->db->where_in('mprosetting.ms_usertype',$type);
		}
		if($this->session->userdata('rm_type')=='elite_rm')
		{
		  //  print_r("v");die;
		    // $type=array("elite","superconfidential","confidential","regular"); -- old - 17-07-2023
		    $type=array("elite","superconfidential","confidential","regular");
		    $this->db->where_in('mprosetting.ms_usertype',$type);
		}
		if($this->session->userdata('rm_type')=='superelite_rm')
		{
		  //  print_r("a");die;
	    	$type=array("elite","superelite","superconfidential","confidential","regular");
		    $this->db->where_in('mprosetting.ms_usertype',$type);
		}
		}else{
        $type=array("elite","superelite");
		    $this->db->where_in('mprosetting.ms_usertype',$type);

    }
		
        $this->db->where('p.status', 1);
        $this->db->limit($limit, $offset);
        $this->db->group_by('p.id');
        $this->db->order_by('p.registered_on', 'DESC');
        $query = $this->db->get();
        $result = $query->result_array();
		// echo $this->db->last_query();exit;
        // print_r($result);exit();
        return $result;
    }
    
     public function search_tot_recordsNEW($gender, $profile_id, $surname, $name, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $religion, $mothertounge, $caste, $education, $profession, $country, $elight, $payment, $dorfrom, $dorto, $propertyfor, $propertyto, $district, $application_status, $employee, $currency,$photos, $salaryfrom, $salaryto, $star, $phone_no,$state,$visatype,$city,$specialization)
    {
		
		//echo '<pre>';print_r($_SESSION);exit;

      
        $search_type = $_GET["searchtype"]; 
        // print_r($search_type);die;
                $this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.living_in,p.profile_id,p.date,p.month,p.year, mprosetting.ms_usertype");
                $this->db->from('tbl_primary_info as p');
                $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
                $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
                $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me, e.country');
                $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
                $this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
                $this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left');
        
                $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
                $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');
        
                $this->db->select('pr.property_value,pr.property_type,pr.property_Desc');
                $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        
                $this->db->select('payment_status, elite, profileowner,prime');
                $this->db->join('ms_profilesetting as mprosetting', 'p.id=mprosetting.MS_id', 'left');
                $this->db->select('adm.username as profile_owner_name');
                $this->db->join('tbl_admin_data as adm', 'mprosetting.profileowner=adm.id', 'left');
                $this->db->select('ppr.p_height_from, ppr.p_height_to, ppr.p_age_from, ppr.p_age_to, ppr.p_marital_status, ppr.p_mother_tongue, ppr.p_caste, ppr.p_star, ppr.p_education, ppr.employee_in, ppr.p_profession, ppr.p_country, ppr.p_district, ppr.p_city, ppr.p_about');
                $this->db->join('tbl_partner_preferences as ppr', 'p.id=ppr.ms_id', 'left');
                 $this->db->select('kv.kv_ue_highedu_special');
        $this->db->join('kv_usereducation as kv', 'kv.kv_userfkid=p.id', 'left');
        
        if ($gender != "") {
            $this->db->where('p.gender', $gender);
        }
        
        if ($specialization != "") {
            $this->db->group_start()
                     ->where_in('kv.kv_ue_highedu_special', $specialization)
                     ->or_where_in('kv.kv_ue_pg_special', $specialization)
                     ->or_where_in('kv.kv_ue_g_special', $specialization)
                     ->group_end();
        }
                
            
                
                if ($state != "") {
            $this->db->where('e.state', $state);
        }
        
        if ($visatype != "") {
            $this->db->where_in('e.visatype', $visatype);
        }


        if ($city != "") {
            $this->db->like('e.city', $city);
        }


                if ($profile_id != "") {
                    $this->db->like('p.profile_id', $profile_id, 'both');
                }
                if ($name != "") {
                    $this->db->like('p.first_name', $name, 'both');
                }	
                if ($surname != "") {
                    $this->db->like('p.last_name', $surname, 'after');
                }		
                if ($phone_no != "") {
                    $this->db->where('p.mobile', $phone_no);
                }
                if ($heightfrom != "") {
                    $this->db->where('r.height_cm >=', $heightfrom);
                }
                if ($heightto != "") {
                    $this->db->where('r.height_cm <=', $heightto);
                }
                if ($agefrom != "") {
                    $this->db->where('(DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), "%Y")+0) >=', $agefrom);
                }
                if ($ageto != "") {
                    $this->db->where("(DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <=", $ageto);
                }
                if ($maritalstatus != "") {
                    $this->db->where_in('r.marital_status', $maritalstatus);
                }
                if ($religion != "") {
                    $this->db->where_in('r.religion', $religion);
                }
                if ($mothertounge != "") {
                    $this->db->where_in('r.mother_tounge', $mothertounge);
                }
                if ($caste != "") {
                    $this->db->where_in('r.caste', $caste);
                }
                if ($star != "") {
                    $this->db->where_in('r.star', $star);
                }
                if ($education != "") {
                    $this->db->where_in('e.heighst_education', $education);
                }
                if ($profession != "") {
                    $this->db->where_in('e.occupation', $profession);
                }
                if ($country != "") {
                    $this->db->where_in('e.country', $country);
                }
                if ($elight != "" && $elight == "yes") {
                    $this->db->where('mprosetting.elite', $elight);
                }
                if ($payment != "" && $payment != "both") {
                    $paymentVal = ($payment == "paid") ? 1 : "NULL";
                    if($payment == "free") {
                        $this->db->where('mprosetting.payment_status IS NULL');
                    } else {
                        $this->db->where('mprosetting.payment_status', $paymentVal);
                    }
                }
                if ($dorfrom != "") {
                    $this->db->where('p.registered_on >=', date('Y-m-d', strtotime($dorfrom)));
                }
                if ($dorto != "") {
                    $this->db->where('p.registered_on <=', date('Y-m-d', strtotime($dorto)));
                }
                if ($propertyfor != "") {
                    $this->db->where('CAST(pr.property_value AS DECIMAL(8, 2)) >=', $propertyfor);
                }
                if ($propertyto != "") {
                    $this->db->where('CAST(pr.property_value AS DECIMAL(8, 2)) <=', $propertyto);
                }
                if ($application_status != "") {
                    $this->db->where_in('p.status', $application_status);
                }
                if ($employee != "") {
                    $this->db->where_in('mprosetting.profileowner', $employee);
                }
                if ($district != "") {
                    $district_list = "'".implode("','", $district)."'";
                    $where = '(pa.fathers_father_district IN('.$district_list.') or pa.mothers_father_district IN('.$district_list.'))';
                    $this->db->where($where);
                }
                /*if ($district != "") {
                    $this->db->where_in('pa.fathers_father_district', $district);
                }
                if ($district != "") {
                    $this->db->where_in('pa.mothers_father_district', $district);
                }*/
                //echo $photos;
                if ($photos == "no") {
                   $this->db->where('p.id NOT IN (SELECT MS_photos.MS_id FROM MS_photos WHERE MS_photos.MS_id=p.id)');
                } else {
                    $this->db->where('u.ismain=1 AND u.isactive=1');
                }
                if ($currency != "") {
                    $this->db->where_in('e.currency', $currency);
                }
                if ($salaryfrom != "") {
                    $this->db->where('CAST(e.annual_income AS DECIMAL(8, 2)) >=', $salaryfrom);
                }
                if ($salaryto != "") {
                    $this->db->where('CAST(e.annual_income AS DECIMAL(8, 2)) <=', $salaryto);
                }
                if($this->session->userdata('type')=='staff')
                {
                    $this->db->where('mprosetting.profileowner >', 0);
                //	$this->db->where('mprosetting.ms_usertype !=', 'elite');
                }
                
                if($elight == "no" || $search_type == "quick" || $search_type == ""){
                if($this->session->userdata('rm_type')=='rc_rm')
                {
                    $type=array("confidential","regular");
                 $this->db->where_in('mprosetting.ms_usertype',$type);
                 
                }
                if($this->session->userdata('rm_type')=='sc_rm')
                {
                   // $type=array("superconfidential","confidential","regular"); -- old 17-07-2023
                   $type=array("superconfidential","confidential","regular");
                   $this->db->where_in('mprosetting.ms_usertype',$type);
                }
                if($this->session->userdata('rm_type')=='elite_rm')
                {
                    // $type=array("elite","superconfidential","confidential","regular"); -- old - 17-07-2023
                    $type=array("elite","superconfidential","confidential","regular");
                    $this->db->where_in('mprosetting.ms_usertype',$type);
                }
                if($this->session->userdata('rm_type')=='superelite_rm')
                {
                    $type=array("elite","superelite","superconfidential","confidential","regular");
                    $this->db->where_in('mprosetting.ms_usertype',$type);
                }
                }else{
                $type=array("elite","superelite");
                    $this->db->where_in('mprosetting.ms_usertype',$type);
        
            }
                
                $this->db->where('p.status', 1);
                $this->db->limit($limit, $offset);
                $this->db->group_by('p.id');
                $this->db->order_by('p.registered_on', 'DESC');
                $query = $this->db->get();
                $result = $query->num_rows();
        // echo $this->db->last_query();exit;
        // print_r($result);exit();
        return $result;
    }



    public function search_tot_records($gender, $heightfrom, $heightto, $agefrom, $ageto, $maritalstatus, $caste, $religion, $mothertounge, $education, $profession, $country)
    {

        $this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.living_in,p.profile_id");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
        $this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
        $this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left');

        $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
        $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');

        if ($gender != "") {
            $this->db->where('p.gender', $gender);
        }
        if ($agefrom != "" && $ageto != "") {
            $this->db->where("cur_age BETWEEN $agefrom AND $ageto");
        }
        if ($heightfrom != "") {
            $this->db->where('r.height_cm >=', $heightfrom);
        }
        if ($heightto != "") {
            $this->db->where('r.height_cm <=', $heightto);
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
        if ($education != "") {
            $this->db->where('e.heighst_education', $education);
        }
        if ($country != "") {
            $this->db->where('p.living_in', $country);
        }

        if ($profession != "") {
            $this->db->where('e.occupation', $profession);
        }
        $this->db->where('p.status', 1);
        $this->db->group_by('p.id');
        $this->db->order_by('p.registered_on', 'DESC');
        $query = $this->db->get();
        $result = $query->num_rows();
        return $result;
    }


    public function search_img_records($id)
    {

        $this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,p.age,p.living_in,p.profile_id");
        $this->db->from('tbl_primary_info as p');

        $this->db->select('u.image,u.user_id');
        $this->db->join('upload-images as u', 'p.id=u.user_id', 'left');

        $this->db->where('u.user_id', $id);
        $this->db->where('p.status', 1);
        // $this->db->limit ($limit,$offset);
        // $this->db->group_by('u.image');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }






    public function get_primary_details($user_id)
    {
        $this->db->select("email,password,mobile,first_name,last_name,gender,living_in,date,month,year,profile_id");
        $this->db->from('tbl_primary_info');
        $this->db->where('id', $user_id);
        $query = $this->db->get()->row_array();
		$month = date('m',strtotime($query["month"]));
		$age = date_diff(date_create($query["year"]."-".$month."-".$query["date"]), date_create('today'))->y;
		$query["age"] = $age;
		return $query;
    }

    public function get_profile_complete($user_id)
    {

        $query = $this->db->query("select (basicdetails+religion+edu_prof+parents+Siblings+photo) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id=$user_id");
        $result = $query->result();

        return $result;
    }

    public function get_profilepic_details($user_id)
    {
        /*$this->db->select('id,user_id,image,updated_on,status');
        $this->db->from('upload-images');
        $this->db->where('user_id',$user_id);
        $this->db->order_by('id', 'ASC');
        $this->db->limit('1');
        $query = $this->db->get()->result_array();
        return $query;*/

        $this->db->select('photoname,MS_id,ismain,isactive,applicationphotopath');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $user_id);
        $this->db->where('ismain', 1);
        $this->db->where('isactive', 1);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_profile_info($id)
    {
        $this->db->select("p.gender,p.id,p.status,p.age,p.living_in,p.profile_id,p.date,p.year,p.month,p.email,p.mobile");
        $this->db->from('tbl_primary_info as p');
        $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.star,r.time_of_birth,r.raasi,r.place_of_birth,r.gothram');
        $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'inner');
        $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me,e.education_description,e.about_profession,e.currency,e.country,e.state,e.city,e.residing-since,e.arrival-date,e.departure-date,e.visatype');
        $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'inner');
        $this->db->select('f.father_name,f.fathers_father_name,f.fathers_father_native_place,f.mother_name,mothers_father_name,f.mothers_father_native_place,f.father_mobile,f.mother_mobile,f.user_id');
        $this->db->join('tbl_parents_info as f', 'p.id=f.user_id', 'inner');
        $this->db->select('pr.property_value,pr.property_type,pr.property_Desc');
        $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'inner');
        $this->db->select('s.user_id,s.no_of_brothers,s.no_of_sisters');
        $this->db->join('tbl_siblings_info as s', 'p.id=s.user_id', 'inner');
        $this->db->where('p.id', $id);
        $query = $this->db->get();
        $result = $query->row_array();
		$month = date('m',strtotime($result["month"]));
		$age = date_diff(date_create($result["year"]."-".$month."-".$result["date"]), date_create('today'))->y;
		$result["age"] = $age;
        return $result;
    }



    public function get_images($id)
    {

        $this->db->select('*');
        $this->db->from('MS_photos');
        $this->db->where('MS_id', $id);
        $this->db->order_by('photos_id', 'ASC');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function imagescount($id)
    {
        $this->db->select('id');
        $this->db->from('upload-images');
        $this->db->where('user_id', $id);
        $result = $this->db->get()->result_array();
        return count($result);
    }

    public function get_religion_details($user_id)
    {
        $this->db->select('user_id,marital_status,height,religion,mother_tounge,caste,sub_caste,gothram,place_of_birth,time_of_birth,star,raasi,paadam, dosham,updated_on');
        $this->db->from('tbl_religion_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_professional_details($user_id)
    {
        $this->db->select('user_id,heighst_education,education_degree,specialization,university,college,education_description ,employee_in,occupation,annual_income,currency,company,about_profession,country,visatype,residing-since,arrival-date,departure-date,city,state,about_me,updated_on');
        $this->db->from('tbl_professional_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_parents_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_parents_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_siblings_details($user_id)
    {
        $this->db->select('user_id,no_of_brothers,no_of_sisters,no_of_elder_brothers,no_of_younger_brothers,no_of_elder_sisters,no_of_younger_sisters,updated_on');
        $this->db->from('tbl_siblings_info');
        $this->db->where('user_id', $user_id);
        // echo $this->db->last_query();exit;
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_sisters_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_sister_info');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 1);
        $query = $this->db->get();
        // $rows = $query->num_rows();
        $result = $query->result_array();
        // print_r($result);die;
        return $result;
    }
    public function get_brothers_details($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_brother_info');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->row_array();
        return $result;
    }
    public function get_property_details($user_id)
    {
        $this->db->select('property_type,property_value,property_Desc');
        $this->db->from('ms_property_info');
        $this->db->where('ms_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function get_contact_city_details($user_id)
    {
        $this->db->select('city');
        $this->db->from('tbl_contact_info');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function recently_viewed($user_id)
    {

        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('viewed_status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();

        return $result;
    }

    public function shortlisted_count($user_id)
    {

        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('shortlist_status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();

        return $result;
    }

    public function ignored_count($user_id)
    {

        $this->db->select('*');
        $this->db->from('MS_shortlist_viewedd_ignored');
        $this->db->where('from_msid', $user_id);
        $this->db->where('ignore_status', 1);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();

        return $result;
    }

    public function contact_count($user_id)
    {
        $this->db->select('*');
        $this->db->from('MS_ViewedContacts');
        $this->db->where('from_msid', $user_id);
        $query = $this->db->get();
        $rows = $query->num_rows();
        $result = $query->result_array();
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
    
     public function getRmtype($rm_id)
    {
        $this->db->select('rm.rm_type_name');
        $this->db->from('tbl_rm_type rm');
        $this->db->join('tbl_admin_data as d','d.rm_type=rm.id');
        $this->db->where('d.id', $rm_id);
        $query = $this->db->get()->row_array();
        // echo $this->db->last_query();exit;
        return $query;
    }
    
     // searchtotalrecordsnewdevlopment 18-07-2023
     public function searchtotalrecordsnewdevlopment($gender,$payment,$country,$user_id)
     {
         $this->db->select("p.first_name,p.last_name,p.gender,p.id,p.status,DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0 as cur_age,p.living_in,p.profile_id, p.date, p.month, p.year ,p.contact_exchaged");
         $this->db->from('tbl_primary_info as p');
         $this->db->select('r.height,r.marital_status,r.religion,r.mother_tounge,r.user_id,r.caste,r.time_of_birth,r.place_of_birth,r.gothram,r.star');
         $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');
         $this->db->select('e.user_id,e.heighst_education,e.annual_income,e.occupation,e.about_me, e.country');
         $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');
         $this->db->select('pa.fathers_father_district,pa.mothers_father_district,pa.father_mobile,pa.mother_mobile');
         $this->db->join('tbl_parents_info as pa', 'p.id=pa.user_id', 'left');

         $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');
         $this->db->join('MS_photos as u', 'p.id=u.MS_id', 'left');

         $this->db->select('payment_status, elite, profileowner,ms_usertype,prime');
         $this->db->join('ms_profilesetting as mprosetting', 'p.id=mprosetting.MS_id', 'left');
      
         $this->db->select('pr.property_value,pr.property_type,pr.property_Desc');
         $this->db->join('ms_property_info as pr', 'p.id=pr.ms_id', 'left');
        
         
         //$this->db->select("count(ms.id) as profilereceivedTotalCount");
         //$this->db->join('ms_servicelist as ms', 'p.id=ms.from_msID', 'left');
         


        if ($gender != "") {
            $this->db->where('p.gender', $gender);
        }
        if ($country != "") {
            $this->db->where_in('e.country', $country);
        }
        if ($payment != "" && $payment != "both") {
			$paymentVal = ($payment == "paid") ? 1 : "NULL";
			if($payment == "free") {
				$this->db->where('mprosetting.payment_status IS NULL');
			} else {
				$this->db->where('mprosetting.payment_status', $paymentVal);
			}
        }
		if($this->session->userdata('type')=='staff')
		{
			$this->db->where('mprosetting.profileowner >', 0);
			$this->db->where('mprosetting.ms_usertype !=', 'elite');
			
		}
		if($this->session->userdata('rm_type')=='rc_rm')
		{
		    // $type=array("regular","confidential"); --- old 17-07-2023
		    $type=array("regular","confidential","superconfidential","elite","superelite");
		    $this->db->where_in('mprosetting.ms_usertype',$type);
		}
		if($this->session->userdata('rm_type')=='sc_rm')
		{
	       // $type=array("regular","confidential","superconfidential"); -- old 17-07-2023
	       $type=array("regular","confidential","superconfidential","elite","superelite");
		   $this->db->where_in('mprosetting.ms_usertype',$type);
		}
		if($this->session->userdata('rm_type')=='elite_rm')
		{
		   // $type=array("regular","confidential","superconfidential","elite"); -- old 17-07-2023
		   $type=array("regular","confidential","superconfidential","elite","superelite");
		   $this->db->where_in('mprosetting.ms_usertype',$type);
		}
		if($this->session->userdata('rm_type')=='superelite_rm')
		{
	    	$type=array("regular","confidential","superconfidential","elite","superelite");
		 $this->db->where_in('mprosetting.ms_usertype',$type);
		}
        $this->db->where('mprosetting.profileowner', $user_id);
        $this->db->where('p.status', 1);
        $this->db->group_by('p.id');
        $this->db->order_by('p.registered_on', 'DESC');
        $query = $this->db->get();
        $result = $query->result_array();
        //echo $this->db->last_query();exit;
        // print_r($result);exit();
        return $result;
     }
     // end of searchtotalrecordsnewdevlopment 18-07-2023

     public function rm_image(){
		$a = $this->session->userdata('user_id');

		$select = "SELECT * FROM tbl_admin_data where id = $a "; 
		$result = $this->db->query($select)->row();
		return $result; 
		
	}

    public function no_images(){
        $type = $this->session->userdata('type');
        $user_id = $this->session->userdata('user_id');
        $select='';
        if($type ='admin'){
            $select = "SELECT * FROM tbl_primary_info AS p 
            WHERE p.status NOT IN (2, 3,4) 
            AND p.id NOT IN (SELECT MS_photos.MS_id FROM MS_photos WHERE MS_photos.MS_id = p.id) ORDER BY registered_on desc";
        }else{
            $select = "SELECT p.* FROM tbl_primary_info AS p 
           INNER JOIN ms_profilesetting AS d ON p.id = d.ms_id
            WHERE p.status NOT IN (2, 3,4) AND d.profileowner = '".$user_id."'
            AND p.id NOT IN (SELECT MS_photos.MS_id FROM MS_photos WHERE MS_photos.MS_id = p.id) ORDER BY registered_on desc";
        }
                //    print_r($select);die;
        $result = $this->db->query($select)->result_array();
        return $result; 
    }
    
    
    
    
    
    
}
