<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Play extends CI_Controller
{
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->data = array("js" => base_url("asset/js"), 
							"css" => base_url("asset/css"),
							"sounds" => base_url("asset/sounds")
							);
	}

	public function index()
	{
		$this->load->view("joke_secret.html");
	}


	public function test()
	{
		$this->load->view("test.html");
	}

	public function collide_test()
	{
		$this->parser->parse("collide_test.html", $this->data);
	}
}


//End