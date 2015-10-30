<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		$this->load->view('main');
	}

	public function home()
	{
		$this->load->view('home');
	}

	public function about()
	{
		$this->load->view('about');
	}
}
