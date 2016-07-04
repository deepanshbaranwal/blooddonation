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
		$layout=array(array("layout"=>"header","data"=>""),array("layout"=>"admin/left_menu","data"=>""),array("layout"=>"content","data"=>""),array("layout"=>"footer","data"=>""),array("layout"=>"controls","data"=>""));
		_layout($layout);
	}

	/*DASHBOARD FUNCTION*/
	public function dashboard()
	{

	}

	/*KID REGISTRATION*/
	public function kid_registration()
	{
		$layout=array(array("layout"=>"header","data"=>""),array("layout"=>"admin/left_menu","data"=>""),array("layout"=>"admin/kid_registration","data"=>""),array("layout"=>"footer","data"=>""),array("layout"=>"controls","data"=>""));
		_layout($layout);
	}
	/*KID SAVE*/
	public function kid_save()
	{

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[2]|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[2]|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'valid_email|trim|required|min_length[2]|xss_clean');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required|min_length[10]|xss_clean');
		$this->form_validation->set_rules('locality', 'Locality', 'trim|required|min_length[10]|xss_clean');
		if($this->form_validation->run() == False){
			$layout=array(array("layout"=>"admin/save","data"=>""));
		}
		else{
			$this->load->model('admin_model');
			$result=$this->admin_model->kid_save($this->input->post());
			if($result){
				$data['message']="Data saved successfully.";
			}
			else{
				$data['message']="Error in saving data.";
			}
			redirect('admin/kid_list','refresh');
		}
		
		
	}
	public function kid_list(){
		$this->load->model('admin_model');
		$data['result']=$this->admin_model->kid_list();
		$layout=array(array("layout"=>"header","data"=>""),array("layout"=>"admin/left_menu","data"=>""),array("layout"=>"admin/kid_list","data"=>$data),array("layout"=>"footer","data"=>""),array("layout"=>"controls","data"=>""));
		_layout($layout);
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
