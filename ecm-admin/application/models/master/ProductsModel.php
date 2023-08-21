<?php
class ProductsModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = 'ecm_products';
    }

    public function show(array $where = array()){
        $result = [];
        if(count($where)>0){
            $result = $this->db->get_where($this->table, $where)->result();
        }else{
            $result = $this->db->get($this->table)->result();
        }
        return json_encode($result);
    }


    public function create()
    {
    }
    public function update(array $request)
    {
    }
    public function delete(array $request)
    {
    }
    public function get()
    {
        $response = [
            "products" => [
                [
                    "title" => "Product Title",
                    "price" => "4499.99",
                    "locale" => BASE_LOCALE
                ],
                [
                    "title" => "Product Title",
                    "price" => "9959.99",
                    "locale" => BASE_LOCALE
                ],
            ]
        ];
        return json_encode($response);
    }

    public function show_all(){

    }
    public function show_single($productID){

    }

    public function new(array $product){
        $this->db->insert('ecm_products', $product);
    }
}
