<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
				$this->load->model('welcomemodel');
                $this->load->helper('url_helper');
				$this->load->library('session');
        }
	public function index()
	{
		$res = array();
		$res = $this->welcomemodel->products();
		$data['product']=$res;
		if(isset($_SESSION['username'])){
			$data['title']=$_SESSION['username'];
			$_SESSION['login'] = true ;
		}else{
			$data['title'] = 'Home';
			$_SESSION['login'] = false ;
		}
		if (isset($_SESSION['log']) && $_SESSION['log']==1){
			echo '<script>alert("log in successful")</script>';
			unset($_SESSION['log']);
		}
		elseif(isset($_SESSION['log']) && $_SESSION['log']==0){
			echo '<script>alert("log in unsuccessful")</script>';
			unset($_SESSION['log']);
		}
		$this->load->view('partial/header',$data);
		$this->load->view('partial/navbar');
		$this->load->view('pages/main');
	}
}
