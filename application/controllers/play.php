<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Play extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->load->view("joke_secret.html");
	}


	public function test()
	{
		$this->load->view("test.html");
	}


}


//End