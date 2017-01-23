<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('Share_Model');
		$this->rootpath = $_SERVER['DOCUMENT_ROOT'];
		$this->load->library('form_validation');
		//$this->rootpath = 'C:/xampp/htdocs/sampleadmin/';
	}	
	
	public function index()
	{
		echo "<h1>Access Denied</h1>";
	}
	
	public function featured()
	{
		$data['title'] = 'Featured Market';
        $data['errors'] = '';
        $data['baseUrl'] = base_url();	
		
		$featured_q = $this->Share_Model->get_rows('ai_question',array(),'id,question,image');
		
		$data['questions'] =  $featured_q;	
		$this->load->view('header');
		$this->load->view('question/question',$data);
		$this->load->view('footer');
	}	
	
	public function propsMarket()
	{
		$prop_id = $this->uri->segment(3);
		if(!empty($prop_id))
		{
			$title = str_replace("_", " ", $prop_id );
			$data['title'] = $title;
			$data['errors'] = '';
			$data['baseUrl'] = base_url();	
			
			$featured_q = $this->Share_Model->get_rows_limit_order_by('ai_question',array('question_type'=>$prop_id),'id,question,image','added_date','desc',15);
			
			$data['questions'] =  $featured_q;	
			$this->load->view('header');
			$this->load->view('question/question',$data);
			$this->load->view('footer');	
		}
	}	
	
	public function new_arrival()
	{
		$data['title'] = 'New Arrival';
        $data['errors'] = '';
        $data['baseUrl'] = base_url();	
		
		$featured_q = $this->Share_Model->get_rows_limit_order_by('ai_question',array(),'id,question,image','added_date','desc',15);
		
		$data['questions'] =  $featured_q;	
		$this->load->view('header');
		$this->load->view('question/question',$data);
		$this->load->view('footer');
	}
	
	public function sendemail($senderEmail,$reciverEmail,$senderName,$ccEmails,$bccEmails,$subject,$message)
	{
		$this->load->library('email');

		$this->email->from($senderEmail, $senderName);
		$this->email->to($reciverEmail);
		$this->email->cc($ccEmails);
		$this->email->bcc($bccEmails);
		$this->email->subject($subject);
		$this->email->message($message);

		$this->email->send();
	}
}
