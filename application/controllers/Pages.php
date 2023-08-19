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
		$data['page'] = [
			"title" => "Home"
		];
		$this->load->view('pages/index', $data);
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

	public function test()
	{
		$this->load->view('pages/test');
	}

	public function do_upload()
	{
		$this->load->helper('string');

		$upload['upload_path']          = './assets/uploads/';
		$upload['allowed_types']        = 'gif|jpg|png';
		$upload['max_size']             = 10000;
		$upload['file_name']			= date('U') . "_" . random_string();

		$this->load->library('upload', $upload);

		echo "<pre>";
		print_r($_FILES['userfile']);
		if (isset($_FILES['userfile'])) {
			$files = [];
			foreach ($_FILES['userfile'] as $property => $value) {
				foreach ($value as $index => $file) {
					$files[$index][$property] = $file;
				}
			}
			for ($i=0; $i < count($files); $i++) { 
				print_r($files[$i]);
				if (!$this->upload->do_upload("userfile['name'][".$i."]")) {
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				} else {
					$data = $this->upload->data();
					print_r($data);
					$height = $this->input->post('height');
					switch ($height) {
						case '50':
							$this->resize($data, $height, true, true);
							break;
						case '16':
						case '32':
						case '100':
						case '160':
						case '240':
						case '480':
						case '600':
						case '1024':
						case '2048':
							$this->resize($data, $height, true, false);
							break;
						default:
							break;
					}
				}
			}
		}
	}

	public function resize(array $data, $height, $preserveRatio = TRUE, $createThumb = TRUE)
	{
		$resize['image_library'] = 'gd2';
		$resize['source_image'] = $data['full_path'];
		$resize['new_image'] = $data['file_path'] . $data['raw_name'] . "-" . $height . $data['file_ext'];
		$resize['create_thumb'] = $createThumb;
		$resize['maintain_ratio'] = $preserveRatio;
		$resize['height']   = $height;
		$this->load->library('image_lib', $resize);
		$this->image_lib->resize();
	}
}
