<?php 

class Height_model extends CI_Model {

	public $table_name = 'tbl_height';

	public function __construct() {
        parent::__construct();
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }

	
    public function get_all_records() 
    {
        $this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->order_by('id','asc');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }

	

    public function get_single_record($id='')
    {
        $this->db->select("*");
		$this->db->from($this->table_name);
		if($id != '')

		{

			$this->db->where("id",$id);
			$query = $this->db->get();
			$result = $query->row_array();
		}
		return $result;
    }

	public function add_record($ImgData){

		$set_data = array(

						'height'=> mysqli_real_escape_string($this->get_mysqli(),stripcslashes(str_replace("\n","",$this->input->post('height')))),
						'created_time'=>date('Y-m-d H:i:s'),
						'status' =>1
					);

		$result = $this->db->insert($this->table_name, $set_data); 

		return $result;

	}



	public function update_record($id,$ImgData){

		$set_data = array(

						'height'=> mysqli_real_escape_string($this->get_mysqli(),stripcslashes(str_replace("\n","",$this->input->post('height')))),
						'updated_time'=>date('Y-m-d H:i:s'),
						);

		$this->db->where('id',$id);
		$result = $this->db->update($this->table_name, $set_data);
		return $result;
	}

	public function delete_record($id)
	{
		$this->db->where('id',$id);
		$result = $this->db->delete($this->table_name); 
		return $result;
	}
    
	public function status_record($id,$status){
		$sts = ($status == 1 ? 0 : 1);
		$set_data = array(
						'status' => $sts
					);
		$this->db->where('id',$id);
		$result = $this->db->update($this->table_name, $set_data); 
		return $result;
	}

	public function get_mysqli()
	{
	   $db = (array)get_instance()->db;
	   return mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
	}

}

?>
