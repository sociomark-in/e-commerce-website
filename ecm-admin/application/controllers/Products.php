<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{

	public $menu;
	public function __construct()
	{
		parent::__construct();
		$this->load->model("DashboardControl");
		$this->load->library("converter/currencyconverter");
		$this->load->library("captchalibrary");
		$this->load->helper('dashboard_menu');
		$this->load->model('master/ProductsModel', 'master_products');
	}
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
		$ratio = $this->currencyconverter->convert("INR", BASE_LOCALE);
		$_SESSION['currency_ratio'] = $ratio;
		$data = [
			'page' => [
				'title' => "All Products",
				'products' => json_decode($this->master_products->show(), true, 4)
			],
			'menu' => json_decode($this->DashboardControl->menu_options(), 3),
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
		$captcha = $this->captchalibrary->create();
		$data = [
			'page' => [
				'title' => "Add New Product",
				'captcha' => $captcha
			],
			'menu' => json_decode($this->DashboardControl->menu_options(), 3)
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
		$product = json_decode($this->master_products->show(array('id' => 1)), true, 4)[0];
		$data = [
			'page' => [
				'title' => "Edit ". $product['name']
			],
			'product_single' => $product,
			'menu' => json_decode($this->DashboardControl->menu_options(), 3)
		];
		$data['breadcrumb'] = [
			"Home" => "",
			"Products" => "products",
			"Edit ". $product['name'] => "Current",
		];
		$data['product'] = $productId;
		$this->load->view('dashboard/products/product_edit', $data);
	}
}
