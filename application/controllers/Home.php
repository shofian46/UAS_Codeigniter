<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Home";
		$this->load->view('template/header', $data);
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}
}
