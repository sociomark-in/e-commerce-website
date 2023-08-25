<?php

class SearchModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_search_results($q){
        $result = $this->db->select('name')->like('name', $q)->limit(10)->get('ecm_products_dataset')->result();
        return json_encode($result);
    }
}
