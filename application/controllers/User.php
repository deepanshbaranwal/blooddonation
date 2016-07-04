<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$userID=$this->session->userdata('userID');
		if (!isset($userID) || $userID == "") {
			redirect('logout');
		}
		$this->load->model('User_model');
	}

	/**/
	public function profile(){
		$layout=array(array("layout"=>"header","data"=>""),array("layout"=>"admin/left_menu","data"=>""),array("layout"=>"user/admin_list","data"=>$data),array("layout"=>"footer","data"=>""),array("layout"=>"controls","data"=>""));
		_layout($layout);
	}

	public function add()
	{
		$this->load->view('user/add1.php');
	}

	/*FUNCTION TO POPULATED USER LIST FOR ADMIN*/

	public function list_admin(){
		$result=$this->User_model->user_list();
		if($result){
			$data['result']=$result;
		}
		else{
			$data="";
		}
		$layout=array(array("layout"=>"header","data"=>""),array("layout"=>"admin/left_menu","data"=>""),array("layout"=>"user/admin_list","data"=>$data),array("layout"=>"footer","data"=>""),array("layout"=>"controls","data"=>""));
		_layout($layout);
	}
}