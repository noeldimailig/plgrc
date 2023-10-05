<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once(APPPATH . 'libraries/Resizer.php');
class Welcome extends CI_Controller
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
		$this->load->view('welcome_message');
	}

	public function resize()
	{
		$uploadPath =  FCPATH . 'uploads/books/';

		if (file_exists($uploadPath)) {
			$files = array_diff(scandir($uploadPath), array('.', '..', 'book.png'));
			foreach ($files as $file) {
				$uploadPath = $uploadPath . $file;
				// show($uploadPath);
				// $this->load->library('Resizer', $uploadPath);

				$resizer = new Resizer($uploadPath);

				$resizer->resizeImage(512, 512, $uploadPath, 'exact');

				// *** 3) Save image
				$resizer->saveImage($uploadPath, 100);
				$uploadPath =  FCPATH . 'uploads/books/';
			}
		}
	}
}
