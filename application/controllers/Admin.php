<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('userID')){
			redirect('login');
		}
	}

	public function index()
	{
		$layout=array(array("layout"=>"header","data"=>""),array("layout"=>"admin/left_menu","data"=>""),array("layout"=>"admin/dashboard","data"=>""),array("layout"=>"footer","data"=>""),array("layout"=>"controls","data"=>""));
		_layout($layout);
	}

	/*DASHBOARD FUNCTION*/
	public function dashboard()
	{

	}
}
	
/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
