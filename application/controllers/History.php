<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('User_model');
		$this->rootpath = $_SERVER['DOCUMENT_ROOT'];
		$this->load->library('form_validation');
	}	
	
	
	public function history()
	{
		$this->load->view('header');
		$this->load->view('history');
		$this->load->view('footer');
	}
	
}
