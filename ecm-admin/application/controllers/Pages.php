<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

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
		$this->load->model("User");
		if (isset($_SESSION['user'])) {
			$id = $_SESSION['user']['id'];
			$user = (array)$this->User->get($id);
			$menu = json_decode($this->DashboardControl->menu_options(), 3);
			$this->session->set_userdata(['user' => $user]);
			$data = [
				'page' => [
					'title' => "Dashboard"
				],
				'menu' => $menu
			];
			$data['user'] = $user;
			$this->session->set_userdata(['user' => $user]);
			$this->load->view('dashboard/index', $data);
		} else {
			redirect('/login');
		}
	}

	public function login()
	{
		$data['page'] = [
			"title" => "Login"
		];
		$this->load->view('pages/login', $data);
	}
	public function register()
	{
		$data['page'] = [
			"title" => "Register"
		];
		$this->load->view('pages/register', $data);
	}

	public function about()
	{
		$this->load->view('welcome_message');
	}
}
