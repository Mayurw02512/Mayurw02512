<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
    public function login($username,$password)
    {
        $data=array(
            'username'=>$username,
            'password'=>$password,
            'status'=>'1'
        );
        $this->db->select('id,username')->from('user')->where($data);
        $login=$this->db->get();
        $login = $login->row();
        return $login;

    //     $data=array($username,$password);
    //     $sql = "SELECT * FROM user WHERE username = ? AND password = ?;";
    //    //  $result= $db->query($sql,$data);
    //     $result= $this->db->query($sql,$data);
    //     $response = $result->result();
    //     print_r($response); 
    //     if(count($response)!=0){
    //         return $response;
    //     }else{
    //         return false;
    //     }
    }
}