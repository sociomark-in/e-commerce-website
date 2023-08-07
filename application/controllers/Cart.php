<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	/* POST Requests */
	public function empty()
	{
		$this->load->view('welcome_message');
	}
	public function add()
	{
		$this->load->view('welcome_message');
	}
	public function remove()
	{
		$this->load->view('welcome_message');
	}
	public function edit()
	{
		$this->load->view('welcome_message');
	}
	public function process()
	{
		$this->load->view('welcome_message');
	}
}
