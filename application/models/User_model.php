<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	/*FUNCTION TO SAVE USER INFORMATION*/
	function save($table,$data){
		$this->db->insert($table,$data);
		if($this->db->insert_id()){
			return $this->db->insert_id();
		}
		else{
			log('error','Error in saving data');
		}
	}

	/*FUNCTION TO LIST USER FOR ADMIN*/
	public function user_list($id="")
	{
		$this->db->select("*")->from("users");
		if($id !=""){
			$this->db->where('id', $id);
			$this->db->where('user_type !=', "Admin");
		}
		else{
			$this->db->where('user_type !=', "Admin");
		}
		$this->db->order_by('id', 'desc');
		$query=$this->db->get();
		if($query->num_rows() > 0){
			$result=$query->result();
		}
		else{
			$result=false;
		}
		return $result;
	}
}