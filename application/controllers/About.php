<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
	public function index()
	{
		$data['title'] = "About";
		$this->load->view('template/header', $data);
		$this->load->view('about/index');
		$this->load->view('template/footer');
	}
}
