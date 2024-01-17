<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
    public function products()
    {
        $this->db->select('*');
        $this->db->from('product');
        $dt=$this->db->get();
        $dt=$dt->result();
        return $dt;
    }
    public function users()
    {
        $this->db->select('*');
        $this->db->from('user');
        $dt=$this->db->get();
        $dt=$dt->result();
        return $dt;
    }
    public function user($id)
    {
        $id=array('id'=>$id);
        $this->db->select('*')->from('user')->where($id);
        $dt=$this->db->get();
        $dt=$dt->result();
        return $dt;
    }
    public function uedit($name,$username,$password,$id)
    {
        $id=array('id'=>$id);
        $data=array(
            'name'=>$name,
            'username'=>$username,
            'password'=>$password
        );
        $this->db->where($id);
        $this->db->update('user', $data);
        $dt=$this->users();
        return $dt;
    }
    public function pedit($description,$price,$id)
    {
        $id=array('product_id'=>$id);
        $data=array(
            'description'=>$description,
            'price'=>$price
        );
        $this->db->where($id);
        $this->db->update('product', $data);
        $dt=$this->products();
        return $dt;
    }
    public function udelete($id)
    {
        $id=array('id'=>$id);
        $data=array(
            'status'=>'0'
        );
        $this->db->where($id);
        $this->db->update('user', $data);
        $dt=$this->db->users();
        return $dt;
    }
    public function pdelete($id)
    {
        $id=array('product_id'=>$id);
        $data=array(
            'status'=>'0'
        );
        $this->db->where($id);
        $this->db->update('product', $data);
        $dt=$this->products();
        return $dt;
    }
}