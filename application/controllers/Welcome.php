<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Common_function');
	}
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');
		$this->load->view('login');
	}
	
	/* LOGIN FUNCTION */
	public function login($username="",$password="")
	{
		$data['error']='';
		if($username =="" && $password == ""){
			$username=$this->input->post('email');
			$password=$this->input->post('password');	
		}
		$result=$this->Common_function->login($username,$password);
		if($result != FALSE){
			$sess_data=array("userID"=>$result[0]->id,"userName"=>$result[0]->name,"userEmail"=>$result[0]->email,"userType"=>$result[0]->user_type,"userImage"=>$result[0]->user_photo);
			$this->session->set_userdata($sess_data);
			switch ($result[0]->user_type) {
				case 'Admin':
					redirect('/dashboard');
					break;

				case 'User':
					$this->load->view('dashboard/user');
					break;

				default:
					$this->load->view('welcome',$error);
					break;
			}
		}
		else{
			$data['error']="Incorrect Email/Password";
			$this->load->view('login',$data);
		}
	}

	/*LOGOUT FUNCTION*/
	public function logout(){
		$this->session->sess_destroy();
		$this->load->view('login');
	}
    /* REGISTER FUNCTION */
	public function register(){
		$this->load->view('register');
	}
	
	public function save_register(){
		$this->form_validation->set_rules('name', 'Full name', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'valid_email|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() == FALSE)
			$this->load->view('register');
		else{
			$result=$this->Common_function->register($this->input->post());
			if(isset($result)){
				$this->login($this->input->post('email'),$this->input->post('password'));
			}
			else{
				redirect($this->base_url()."/register");
			}
		}
	}
}
