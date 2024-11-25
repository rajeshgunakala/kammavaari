<?php 
class Changepassword_model extends CI_Model {

	public $table_name = 'tbl_admin_data';

	public function __construct() {
        parent::__construct();
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
	
	
	public function change_password()
	{
		$datac = array
		(
		    'password'=>md5($this->input->post('confirm_password'))
		);
		$this->db->where('id',1);
        $result = $this->db->update($this->table_name, $datac);
		return $result;
	}
	
	public function password_check()
	{
		
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->where('password',md5($this->input->post('cur_pass')));
		$this->db->where('id',1);
		$result=$this->db->get();
		return $result->num_rows();	
	}
	
}