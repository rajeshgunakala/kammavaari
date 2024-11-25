<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_pv_model extends CI_Model
{

   public function __construct() {
        parent::__construct();
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
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

   public function sub_records($limit, $offset, $payment, $gender, $profileid, $allphones, $allemails, $surname, $name, $status, $caste, $emp_drop_down, $dor_from, $dor_to, $area_name)
   {
      $this->db->select("pfs.ms_usertype,p.*,adm.id as 'rmid'");
      // $this->db->select("p.id, p.profile_id, p.last_name,p.first_name,p.age,p.gender,p.date,p.month,p.year,p.email,p.mobile");

      $this->db->from('tbl_primary_info as p');

      $this->db->select('r.caste,r.height,r.star,r.time_of_birth,r.raasi');

      $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');

      $this->db->select('prp.property_value');

      $this->db->join('ms_property_info as prp', 'p.id=prp.ms_id', 'left');

      $this->db->select('e.occupation,e.education_degree,e.visatype, e.city , e.country,e.annual_income');

      $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');

      $this->db->select('pi.fathers_father_district,pi.mothers_father_district,pi.father_mobile');

      $this->db->join('tbl_parents_info as pi', 'p.id=pi.user_id', 'left');

      $this->db->select('pfs.payment_status, pfs.profilesetting_id as pfs_id,pfs.last_call_updated');

      $this->db->join('ms_profilesetting as pfs', 'p.id=pfs.ms_id', 'left');

      $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');

      $this->db->join('MS_photos as u', 'p.id=u.MS_id AND u.ismain="1" AND u.isactive="1"', 'left');


      $this->db->select('adm.username as profile_owner');

      $this->db->join('tbl_admin_data as adm', 'pfs.profileowner=adm.id', 'left');

      // $this->db->where('u.ismain', '1');
      // $this->db->where('u.isactive', '1');


      if ($gender != "") {
         $this->db->where('p.gender', $gender);
      }

      if ($profileid != "") {
         $this->db->like('p.profile_id', $profileid, 'both');
      }
      if ($surname != "") {
         $this->db->like('p.last_name', $surname, 'both');
      }
      if ($allphones != "") {
         $this->db->like('p.mobile', $allphones, 'both');
      }
      if ($allemails != "") {
         $this->db->like('p.email', $allemails, 'both');
      }
      if ($name != "") {
         $this->db->like('p.first_name', $name, 'both');
      }
      if ($status != "") {
         $this->db->where('p.status', $status);
      }
      if ($caste != "") {
         $this->db->where('r.caste', $caste);
      }
      if ($payment == "paid") {
         $this->db->where_in('pfs.payment_status', array(0, 1));
      } else if ($payment == "free") {
         $this->db->where("pfs.payment_status", NULL);
      }

      if ($emp_drop_down != 0) {

         $this->db->where('pfs.profileowner', $emp_drop_down);
      }

      if ($dor_from != "") {
         $this->db->where('p.registered_on >=', $dor_from);
      }
      if ($dor_to != "") {
         $this->db->where('p.registered_on <=', $dor_to);
      }
if($this->session->userdata('type')=='staff')
	  $this->db->where('adm.id',$this->session->userdata('staff_id'));

      if ($area_name != "") {
         // $this->db->like('pi.mothers_father_district', $area_name, 'both');
         // $this->db->like('pi.fathers_father_district', $area_name, 'both');
         $this->db->like('pi.mothers_father_native_place', $area_name, 'both');
         $this->db->like('pi.fathers_father_native_place', $area_name, 'both');
      }

      $this->db->limit($limit, $offset);
      $this->db->group_by('p.id');
      //$this->db->order_by('p.registered_on', 'DESC');
	  $this->db->order_by("pfs.assign_date DESC, p.registered_on DESC");
	  
      $query = $this->db->get();
      $result = $query->result_array();
      	// echo '<pre>'; echo $this->db->last_query();exit;

      return $result;
   }

   public function tot_records($payment, $gender, $profileid, $allphones, $allemails, $surname, $name, $status, $caste, $emp_drop_down, $dor_from, $dor_to, $area_name)
   {

      $this->db->select("p.*");
      // $this->db->select("p.id, p.profile_id, p.last_name,p.first_name,p.age,p.gender,p.date,p.month,p.year,p.email,p.mobile");

      $this->db->from('tbl_primary_info as p');

      $this->db->select('r.caste,r.height,r.star,r.time_of_birth,r.raasi');

      $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');

      $this->db->select('prp.property_value');

      $this->db->join('ms_property_info as prp', 'p.id=prp.ms_id', 'left');

      // $this->db->select('e.occupation,e.education_degree,e.visatype, e.city , e.country');
      $this->db->select('e.occupation,e.education_degree,e.visatype, e.city , e.country,e.annual_income');

      $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');

     
      $this->db->select('pfs.payment_status, pfs.profilesetting_id as pfs_id,pfs.last_call_updated');

      $this->db->join('ms_profilesetting as pfs', 'p.id=pfs.ms_id', 'left');

     

      $this->db->select('adm.username as profile_owner');

      $this->db->join('tbl_admin_data as adm', 'pfs.profileowner=adm.id', 'left');


      if ($gender != "") {
         $this->db->where('p.gender', $gender);
      }

      if ($profileid != "") {
         $this->db->like('p.profile_id', $profileid, 'both');
      }

      if ($surname != "") {
         $this->db->like('p.last_name', $surname, 'both');
      }

      if ($allphones != "") {
         $this->db->like('p.mobile', $allphones, 'both');
      }

      if ($allemails != "") {
         $this->db->like('p.email', $allemails, 'both');
      }

      if ($name != "") {
         $this->db->like('p.first_name', $name, 'both');
      }

      if ($status != "") {
         $this->db->where('p.status', $status);
      }
      if ($caste != "") {
         $this->db->where('r.caste', $caste);
      }

      if ($payment == "paid") {
         $this->db->where_in('pfs.payment_status', array(0, 1));
      } else if ($payment == "free") {
         $this->db->where("pfs.payment_status", NULL);
      }

      if ($emp_drop_down != 0) {
         $this->db->where('pfs.profileowner', $emp_drop_down);
      }

      if ($dor_from != "") {
         $this->db->where('p.registered_on >=', $dor_from);
      }
      if ($dor_to != "") {
         $this->db->where('p.registered_on <=', $dor_to);
      }
	  if($this->session->userdata('type')=='staff')
	  $this->db->where('adm.id',$this->session->userdata('staff_id'));
      if ($area_name != "") {
         // $this->db->like('pi.mothers_father_district', $area_name, 'both');
         // $this->db->like('pi.fathers_father_district', $area_name, 'both');
         $this->db->like('pi.mothers_father_native_place', $area_name, 'both');
         $this->db->like('pi.fathers_father_native_place', $area_name, 'both');
      }
      $this->db->group_by('p.id');

      $query = $this->db->get();

      $result = $query->num_rows();
	  
	// echo '<pre>'; echo $this->db->last_query();exit;

      return $result;
   }

 
   public function tot_records_myprofile($payment,$search,$rm_names,$gender)
   {

     $id = $this->session->userdata('staff_id');

      $list = '';

if ($gender != "") {
    $list .= " AND p.gender = '$gender' ";
}

$rm_id = ''; 

if(!empty($id)){
$rm_id .= " AND adm.id = '$id' ";

}

$names = $this->session->userdata('type') ; 
if($names == 'admin' && $rm_names != ''){
   $rm_id .= " AND adm.id = '$rm_names' ";
}


if ($payment == "paid") {
   $list .= " AND pfs.payment_status in (0, 1) ";
   
} else if ($payment == "free") {
   $list .= " AND pfs.payment_status IS NULL ";
      
      }

      if (!empty($search)) {
         $list .= "AND (
                    p.profile_id = '$search'
              OR p.last_name LIKE '%" . $search . "%'
              OR p.first_name LIKE '%" . $search . "%'
              OR p.email LIKE '%" . $search . "%'
              OR p.mobile LIKE '%" . $search . "%')";
     }
     


$select = "SELECT p.*, r.caste, r.height, r.star, r.time_of_birth, r.raasi, prp.property_value, e.occupation,
    e.education_degree,e.visatype,e.city,e.country,e.annual_income,pfs.payment_status, 
    pfs.profilesetting_id AS pfs_id,   pfs.last_call_updated, adm.username AS profile_owner
FROM
    tbl_primary_info AS p
LEFT JOIN
    tbl_religion_info AS r ON p.id = r.user_id
LEFT JOIN
    ms_property_info AS prp ON p.id = prp.ms_id
LEFT JOIN
    tbl_professional_info AS e ON p.id = e.user_id
LEFT JOIN
    ms_profilesetting AS pfs ON p.id = pfs.ms_id
LEFT JOIN
    tbl_admin_data AS adm ON pfs.profileowner = adm.id
WHERE
    adm.id  != 0  AND p.status NOT IN (2,3,4) $rm_id  $list
GROUP BY
    p.id";
// print_r($select);die;
      $res = $this->db->query($select);
      $result = $res->num_rows();


   //    $this->db->select("p.*");
      

   //    $this->db->from('tbl_primary_info as p');

   //    $this->db->select('r.caste,r.height,r.star,r.time_of_birth,r.raasi');

   //    $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');

   //    $this->db->select('prp.property_value');

   //    $this->db->join('ms_property_info as prp', 'p.id=prp.ms_id', 'left');

   //    // $this->db->select('e.occupation,e.education_degree,e.visatype, e.city , e.country');
   //    $this->db->select('e.occupation,e.education_degree,e.visatype, e.city , e.country,e.annual_income');

   //    $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');

     
   //    $this->db->select('pfs.payment_status, pfs.profilesetting_id as pfs_id,pfs.last_call_updated');

   //    $this->db->join('ms_profilesetting as pfs', 'p.id=pfs.ms_id', 'left');

     

   //    $this->db->select('adm.username as profile_owner');

   //    $this->db->join('tbl_admin_data as adm', 'pfs.profileowner=adm.id', 'left');


   //    if ($gender != "") {
   //       $this->db->where('p.gender', $gender);
   //    }

   //    if ($profileid != "") {
   //       $this->db->like('p.profile_id', $profileid, 'both');
   //    }

   //    if ($surname != "") {
   //       $this->db->like('p.last_name', $surname, 'both');
   //    }

   //    if ($allphones != "") {
   //       $this->db->like('p.mobile', $allphones, 'both');
   //    }

   //    if ($allemails != "") {
   //       $this->db->like('p.email', $allemails, 'both');
   //    }

   //    if ($name != "") {
   //       $this->db->like('p.first_name', $name, 'both');
   //    }

   //    if ($status != "") {
   //       $this->db->where('p.status', $status);
   //    }
   //    if ($caste != "") {
   //       $this->db->where('r.caste', $caste);
   //    }

   //    if ($payment == "paid") {
   //       $this->db->where_in('pfs.payment_status', array(0, 1));
   //    } else if ($payment == "free") {
   //       $this->db->where("pfs.payment_status", NULL);
   //    }

   //    if ($emp_drop_down != 0) {
   //       $this->db->where('pfs.profileowner', $emp_drop_down);
   //    }

   //    if ($dor_from != "") {
   //       $this->db->where('p.registered_on >=', $dor_from);
   //    }
   //    if ($dor_to != "") {
   //       $this->db->where('p.registered_on <=', $dor_to);
   //    }
	//   if($this->session->userdata('type')=='staff')
	//   $this->db->where('adm.id',$this->session->userdata('staff_id'));
   //    if ($area_name != "") {
   //       // $this->db->like('pi.mothers_father_district', $area_name, 'both');
   //       // $this->db->like('pi.fathers_father_district', $area_name, 'both');
   //       $this->db->like('pi.mothers_father_native_place', $area_name, 'both');
   //       $this->db->like('pi.fathers_father_native_place', $area_name, 'both');
   //    }
   //    $this->db->group_by('p.id');

   //    $query = $this->db->get();

   //    $result = $query->num_rows();
	  
	// echo '<pre>'; echo $this->db->last_query();exit;

      return $result;
   }

   public function sub_records_myprofile($limit, $offset, $payment,$search,$rm_names,$gender)
   {
      // print_r("deva");die;
      
     
//       $this->db->select("pfs.ms_usertype,p.*,adm.id as 'rmid'");
//       // $this->db->select("p.id, p.profile_id, p.last_name,p.first_name,p.age,p.gender,p.date,p.month,p.year,p.email,p.mobile");

//       $this->db->from('tbl_primary_info as p');

//       $this->db->select('r.caste,r.height,r.star,r.time_of_birth,r.raasi');

//       $this->db->join('tbl_religion_info as r', 'p.id=r.user_id', 'left');

//       $this->db->select('prp.property_value');

//       $this->db->join('ms_property_info as prp', 'p.id=prp.ms_id', 'left');

//       $this->db->select('e.occupation,e.education_degree,e.visatype, e.city , e.country,e.annual_income');

//       $this->db->join('tbl_professional_info as e', 'p.id=e.user_id', 'left');

//       $this->db->select('pi.fathers_father_district,pi.mothers_father_district,pi.father_mobile');

//       $this->db->join('tbl_parents_info as pi', 'p.id=pi.user_id', 'left');

//       $this->db->select('pfs.payment_status, pfs.profilesetting_id as pfs_id,pfs.last_call_updated');

//       $this->db->join('ms_profilesetting as pfs', 'p.id=pfs.ms_id', 'left');

//       $this->db->select('u.photoname,u.MS_id,u.ismain,u.isactive,u.applicationphotopath');

//       $this->db->join('MS_photos as u', 'p.id=u.MS_id AND u.ismain="1" AND u.isactive="1"', 'left');


//       $this->db->select('adm.username as profile_owner');

//       $this->db->join('tbl_admin_data as adm', 'pfs.profileowner=adm.id', 'left');

//       // $this->db->where('u.ismain', '1');
//       // $this->db->where('u.isactive', '1');


//       if ($gender != "") {
//          $this->db->where('p.gender', $gender);
//       }

//       if ($profileid != "") {
//          $this->db->like('p.profile_id', $profileid, 'both');
//       }
//       if ($surname != "") {
//          $this->db->like('p.last_name', $surname, 'both');
//       }
//       if ($allphones != "") {
//          $this->db->like('p.mobile', $allphones, 'both');
//       }
//       if ($allemails != "") {
//          $this->db->like('p.email', $allemails, 'both');
//       }
//       if ($name != "") {
//          $this->db->like('p.first_name', $name, 'both');
//       }
//       if ($status != "") {
//          $this->db->where('p.status', $status);
//       }
//       if ($caste != "") {
//          $this->db->where('r.caste', $caste);
//       }
//       if ($payment == "paid") {
//          $this->db->where_in('pfs.payment_status', array(0, 1));
//       } else if ($payment == "free") {
//          $this->db->where("pfs.payment_status", NULL);
//       }

//       if ($emp_drop_down != 0) {

//          $this->db->where('pfs.profileowner', $emp_drop_down);
//       }

//       if ($dor_from != "") {
//          $this->db->where('p.registered_on >=', $dor_from);
//       }
//       if ($dor_to != "") {
//          $this->db->where('p.registered_on <=', $dor_to);
//       }
// if($this->session->userdata('type')=='staff')
// 	  $this->db->where('adm.id',$this->session->userdata('staff_id'));

//       if ($area_name != "") {
//          // $this->db->like('pi.mothers_father_district', $area_name, 'both');
//          // $this->db->like('pi.fathers_father_district', $area_name, 'both');
//          $this->db->like('pi.mothers_father_native_place', $area_name, 'both');
//          $this->db->like('pi.fathers_father_native_place', $area_name, 'both');
//       }
$a = $this->session->set_userdata('selected_search', $selected_value);

// print_r($a);die;
$id = $this->session->userdata('staff_id');

$list = '';

if ($gender != "" ) {
$list .= " AND p.gender = '$gender' ";
}
// if ($payment != "" && $payment != "paid" && $payment != "free") {
// $list .= " AND p.gender = '$payment' ";
// }
$rm_id = ''; 

if(!empty($id)){
$rm_id .= " AND adm.id = '$id' ";

}
$names = $this->session->userdata('type') ; 
if($names == 'admin' && $rm_names != ''){
   $rm_id .= " AND adm.id = '$rm_names' ";
}


if ($payment == "paid") {
$list .= " AND pfs.payment_status in (0, 1) ";

}else if ($payment == "free") {
$list .= " AND pfs.payment_status IS NULL ";

}else{
   $list = '';
}

if (!empty($search)) {
   $list .= "AND (
              p.profile_id = '$search'
              OR p.last_name LIKE '%" . $search . "%'
              OR p.first_name LIKE '%" . $search . "%'
              OR p.email LIKE '%" . $search . "%'
              OR p.mobile LIKE '%" . $search . "%')";

          
}



$select = "SELECT p.*, r.caste, r.height, r.star, r.time_of_birth, r.raasi, prp.property_value, e.occupation,
e.education_degree,e.visatype,e.city,e.country,e.annual_income,pfs.payment_status, pfs.ms_usertype, pl.expiry_date, pol.paid_date,
pfs.profilesetting_id AS pfs_id,   pfs.last_call_updated, adm.username AS profile_owner
FROM
tbl_primary_info AS p
LEFT JOIN
tbl_religion_info AS r ON p.id = r.user_id
LEFT JOIN
ms_property_info AS prp ON p.id = prp.ms_id
LEFT JOIN
tbl_professional_info AS e ON p.id = e.user_id
LEFT JOIN
ms_profilesetting AS pfs ON p.id = pfs.ms_id
LEFT JOIN
tbl_admin_data AS adm ON pfs.profileowner = adm.id
LEFT JOIN 
tbl_payments_log AS pl ON pl.user_id = p.id 
LEFT JOIN 
tbl_payments_info AS pol ON pol.user_id = p.id 
WHERE
  adm.id != 0  AND  p.status NOT IN (2,3,4) $rm_id  $list  
GROUP BY
p.id   order by p.registered_on desc ";
// print_r($select);die;
$query = $this->db->query($select);


   //    $this->db->limit($limit, $offset);
   //    $this->db->group_by('p.id');
   //    //$this->db->order_by('p.registered_on', 'DESC');
	//   $this->db->order_by("pfs.assign_date DESC, p.registered_on DESC");
	  
      // $query = $this->db->get();
   $result = $query->result_array();
      	// echo '<pre>'; echo $this->db->last_query();exit;

      return $result;
   }

 

   public function rm_names() {
      $select = "SELECT * FROM tbl_admin_data where status = 1 order by username asc"; 
      $result = $this->db->query($select)->result_array();
      return $result;
  }
}
