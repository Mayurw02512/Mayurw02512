<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->model('loginmodel');
                $this->load->helper('url_helper');
                $this->load->library('session');
                $this->load->model('adminmodel');
        }
	public function login(){
		$username=$_POST['username'];
        $password=$_POST['password'];
        $res = array();
		$res = $this->loginmodel->login($username,$password);
		if($res!=null){
            $_SESSION['username']=$res->username;
            $_SESSION['log']=1;
            if($_SESSION['username']=='admin'){
                $_SESSION['admin']=$res->username;
                $this->product();
            }
            else{
            redirect();
            }
        }
		else{
            $_SESSION['log']=0;
            redirect();
		}
	}
    public function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['admin']);
        redirect();
    }
    public function product(){
		$_SESSION['adminuser']=false;
		$data=$this->index();
        $data['product']=$this->list();
		$this->load->view('partial/header',$data);
		$this->load->view('partial/navbar');
		$this->load->view('pages/admin');
	}
    public function index()
    {
        if (isset($_SESSION['log']) && $_SESSION['log']==1){
			echo '<script>alert("log in successful")</script>';
			unset($_SESSION['log']);
		}
		elseif(isset($_SESSION['log']) && $_SESSION['log']==0){
			echo '<script>alert("log in unsuccessful")</script>';
			unset($_SESSION['log']);
		}
        if(isset($_SESSION['username'])){
			$data['title']=$_SESSION['username'];
			$_SESSION['login'] = true ;
		}else{
			$data['title'] = 'Home';
			$_SESSION['login'] = false ;
		}
        return $data;
    }
    public function list(){
        $res = array();
		$res = $this->adminmodel->products();
        return $res;
    }
}
