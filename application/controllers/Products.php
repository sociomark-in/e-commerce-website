<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProductModel');
	}
	
	 public function index($page = null)
	 { 
		 $per_page = 24;
		 $page = ($page != null) ? $page : 0;
		 
		 $this->load->helper('string');
		 $products_all = json_decode($this->ProductModel->get([]), true, 4);
		 $products_current = json_decode($this->ProductModel->get(['offset' => $per_page, 'count' => $page]), true, 4);
 
		 $this->load->library('pagination');

		 $pagination['base_url'] = base_url('products');
		 $pagination['total_rows'] = count($products_all);
		 $pagination['per_page'] = $per_page;
		 $pagination["cur_page"] = $page;
 
		 $this->pagination->initialize($pagination);
 
		 // echo $this->pagination->create_links();
		 // // echo 
		 // echo $page . "to"  . $page + $per_page;
 
		 // echo count($products_all);
 
 
		 $data['page'] = [
			 "title" => "Products",
		 ];
		 $data['products']['data'] = $products_current;
		 $data['products']['pagination'] = $this->pagination->create_links();
 
		 $this->load->view('pages/products/home', $data);
	 }
	public function details($slug, $id)
	{
		$product_single = json_decode($this->ProductModel->get_where(['product_id' => $id]), true, 4);
		$data['page'] = [
			"title" => $product_single['name'],
		];
		$data['product'] = $product_single;
		$this->load->view('pages/products/detail', $data);
	}
	public function new()
	{
		$data['page'] = [
			'title'=> "Add New Product"
		];
		$data['breadcrumb'] = [
			"Home" => "",
			"Products" => "products",
			"Create Product" => "Current",
		];
		$this->load->view('dashboard/products/product_new', $data);
	}
	public function edit($productId)
	{
		$data['page'] = [
			'title'=> "Edit Product"
		];
		$data['breadcrumb'] = [
			"Home" => "",
			"Products" => "products",
			"Edit Product" => "Current",
		];
		$data['product'] = $productId;
		$this->load->view('dashboard/products/product_edit', $data);
	}
}
