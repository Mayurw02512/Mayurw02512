<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends CI_Model
{
    public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
    public function register($name,$mobile,$email,$username,$password)
    {
        $data=array(
            'name'=>$name,
            'mobile'=>$mobile,
            'email'=>$email,
            'username'=>$username,
            'password'=>$password
        );
        $this->db->insert('user', $data);
        $count=$this->db->count_all('user');
        echo $count;
    }
}