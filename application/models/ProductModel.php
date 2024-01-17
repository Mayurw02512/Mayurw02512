<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model
{
    public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
    public function product($id)
    {
        // if (!isset($_SESSION['productid'])){
        //     $_SESSION['productid']=1;
        // }
        $data=array(
            'product_id'=>$id,
            'status'=>'1'
        );
        $this->db->select('*')->from('product')->where($data);
        $product=$this->db->get();
        $product=$product->result();
        $value=$product[0];
        return $value;
    }
}