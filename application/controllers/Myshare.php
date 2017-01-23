<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myshare extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('User_model');
		$this->rootpath = $_SERVER['DOCUMENT_ROOT'];
		$this->load->library('form_validation');
	}	
	
	
	public function myShare()
	{
		$this->load->view('header');
		$this->load->view('myshare');
		$this->load->view('footer');
	}
	
}
