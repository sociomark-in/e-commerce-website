<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['page'] = [
			'title'=> "All Products"
		];
		$data['breadcrumb'] = [
			"Home" => "",
			"Products" => "Current"
		];
		$this->load->view('dashboard/products/product_list', $data);
	}
	public function details($product)
	{
		$this->load->view('dashboard/products/product_detail');
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
