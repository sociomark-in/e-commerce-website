<?php

class CartModel extends CI_Model
{
    public $result = [];
    public $registered = true;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
    }

    public function add(array $products = null): bool
    {
        if (count($products) > 0 || $products != null) {

            // if ($this->session->userdata('website_username')) {
            //     $this->session->set_userdata();
            // } else{
            //     redirect('/login');
            // }

            if($this->registered){

            }
            $this->db->insert('ecm_cart', $products);
            // return true;
        } 
        return json_encode($this->result);
    }

    public function get_where(array $condition, bool $bulk = true)
    {
        switch ($bulk) {
            case false:
                # code...
                if (count($condition) > 0 || $condition != null) {
                    $this->result = json_decode(json_encode($this->db->get_where('ecm_cart', $condition)->row()), true, 4);
                }
                break;

            default:
                if (count($condition) > 0 || $condition != null) {
                    $this->result = json_decode(json_encode($this->db->get_where('ecm_cart', $condition)->result()), true, 4);
                }
                # code...
                break;
        }
        return $this->result;
    }

    public function count_all() : int {
        return count($this->cart->contents());
    }

    public function update_count(array $condition)
    {
        if (count($condition) > 0 || $condition != null) {
            $this->db->set('quantity', 'quantity+1', FALSE);
            $this->db->where('id', $condition['id']);
            $this->result = $this->db->update('ecm_cart');
            $this->result = json_decode(json_encode($this->result), true, 4);
        }

        return $this->result;
    }
}
