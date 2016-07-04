<?php
    class  Common_function extends CI_Model{
        
        public function __construct() {
            parent::__construct();
            //constructure
        }
        
        public function register($data)
        {
            if(isset($data) && $data != ''){
                $data["user_type"]="User";
                $this->db->insert("users",$data);
                if($this->db->insert_id()){
                    return $this->db->insert_id();
                }
                else{
                     log_message('error', 'Error in saving Data.Please check table and data variable');
                }
            }
            else{
                log_message('error', 'Error in saving Data.Table variable is not set');
            }
        }

        /*LOGIN FUNCTION*/
        public function login($username,$password){
            $conditions=array("email"=>$username,"password"=>$password);
            $this->db->select('*')->from('users')->where($conditions)->limit(0,1);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                $result=$query->result();
                log_message('info','Successfully Login');
                return $result;
            }   
            else{
                return false;
                log_message('error','Incorrect username/password');
            } 
        }
    }

    
    