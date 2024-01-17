<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeModel extends CI_Model
{
    public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
    public function products()
    {
        $data=array(
            'status'=>'1'
        );
        $this->db->select('*')->where($data);
        $this->db->from('product');
        $dt=$this->db->get();
        $dt=$dt->result();
        return $dt;
    }
}