<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
				$this->load->library('session');
				$this->load->model('adminmodel');
        }
        public function data1()
        {
            if(isset($_SESSION['username'])){
                $data['title']=$_SESSION['username'];
                $_SESSION['login'] = true ;
            }else{
                $data['title'] = 'Home';
                $_SESSION['login'] = false ;
            }
        }
    public function index($id){
        if(isset($_SESSION['admin'])):
            $res = $this->adminmodel->user($id);
            $data['user']=$res;
            $_SESSION['adminuser']=true;
            $this->data1();
            $this->load->view('partial/header',$data);
            $this->load->view('partial/navbar');
            $this->load->view('pages/user');
        endif;
    }
    public function edit($id){
		if(isset($_SESSION['admin'])):
			$name=$_POST['name'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$res = $this->adminmodel->uedit($name,$username,$password,$id);
			$data['user']=$res;
			$_SESSION['adminuser']=true;
			$this->data1();
			$this->load->view('partial/header',$data);
			$this->load->view('partial/navbar');
			$this->load->view('pages/admin');
		endif;
	}
    public function delete($id)
	{
		if(isset($_SESSION['admin'])):
			$res = array();
			$res = $this->adminmodel->udelete($id);
			$data['user']=$res;
			$_SESSION['adminuser']=true;
			$this->data1();
			$this->load->view('partial/header',$data);
			$this->load->view('partial/navbar');
			$this->load->view('pages/admin');
		endif;
	}
}
