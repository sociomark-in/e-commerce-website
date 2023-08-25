<?php

class CartModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cart');
    }

    function add(array $products = null) : bool{
        $result = [];
        if (count($products) > 0 || $products != null) {
            if ($this->session->userdata('website_username')) {
                $this->session->set_userdata();
            } else{
                redirect('/login');
            }
            return true;
        } else {
            return false;
        }
        return json_encode($result);
    }

}
