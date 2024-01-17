<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
				$this->load->model('adminmodel');
                $this->load->helper('url_helper');
				$this->load->library('session');
        }
	public function index()
	{
		if(isset($_SESSION['username'])){
			$data['title']=$_SESSION['username'];
			$_SESSION['login'] = true ;
		}else{
			$data['title'] = 'Home';
			$_SESSION['login'] = false ;
		}
	}
	public function product(){
		if(isset($_SESSION['admin'])):
		$res = $this->adminmodel->products();
		$data['product']=$res;
		$_SESSION['adminuser']=false;
		$this->index();
		$this->load->view('partial/header',$data);
		$this->load->view('partial/navbar');
		$this->load->view('pages/admin');
		endif;
	}
	public function user()
	{
		if(isset($_SESSION['admin'])):
		$res = $this->adminmodel->users();
		$data['user']=$res;
		$_SESSION['adminuser']=true;
		$this->index();
		$this->load->view('partial/header',$data);
		$this->load->view('partial/navbar');
		$this->load->view('pages/admin');
		endif;
	}
	public function edit($id){
		if(isset($_SESSION['admin'])):
			$description=$_POST['description'];
			$price=$_POST['price'];
			$res = $this->adminmodel->pedit($description,$price,$id);
			$data['product']=$res;
			$_SESSION['adminuser']=false;
			$this->index();
			$this->load->view('partial/header',$data);
			$this->load->view('partial/navbar');
			$this->load->view('pages/admin');
		endif;
	}
	public function delete($id)
	{
		if(isset($_SESSION['admin'])):
			$res = array();
			$res = $this->adminmodel->pdelete($id);
			$data['product']=$res;
			$_SESSION['adminuser']=false;
			$this->index();
			$this->load->view('partial/header',$data);
			$this->load->view('partial/navbar');
			$this->load->view('pages/admin');
		endif;
	}
}
