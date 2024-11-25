<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_photos_model extends CI_Model {

     public function getallpendings(){
        $this->db->select('p.photos_id,p.ms_id,p.photoname');
        $this->db->from('MS_photos as p');
        $this->db->select('r.first_name,r.last_name');
        $this->db->join('tbl_primary_info as r','p.ms_id=r.id','left');
        $this->db->where('p.isactive != 1 OR p.isactive IS NULL');
        $this->db->order_by('uploaded_date','desc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
	
	public function getPhotoDetailsByPhotoId($photoId, $userId){
        $this->db->select('photoname, ismain');
        $this->db->from('MS_photos');
        $this->db->where('photos_id', $photoId);
        $query = $this->db->get();
        $result = $query->row();		
        return $result;
    }

    public function update_img_path($data,$photoId, $userId){
        $this->db->where('ms_id',$userId);
        $this->db->where('photos_id',$photoId);
        $this->db->update('MS_photos',$data);
		
		// make other photos as not main photo 
		if($data['ismain'] == 1) {
			$data1=array('ismain'=>0);        
			$this -> db -> where('MS_id',$userId);
			$this -> db -> where('photos_id !=', $photoId);
			$this -> db -> update('MS_photos',$data1);
		}
    }
}