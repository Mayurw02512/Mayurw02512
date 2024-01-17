<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->model('registermodel');
                $this->load->helper('url_helper');
				$this->load->library('session');
        }
	public function register(){
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$username=$_POST['username'];
        $password=$_POST['password'];
        $res = array();
		$res = $this->registermodel->register($name,$mobile,$email,$username,$password);
		if($res){
			echo "Registration Success";
        }
		else{
			echo "Registration failed.";
		}
	}
}
