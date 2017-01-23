<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Market extends CI_Controller {
	
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
	
	public function test()
	{		echo "<pre>";
		
		$eres = $this->sports->do_matched_deals('2','yes','buy','50','78');
		print_r($eres); die;
		
		$tres = $this->sports->get_range_rate('1','no','buy');
		echo $tres; die;
		
		//echo "<pre>";
		$tt = $this->sports->get_available_offers('1','yes','sell'); 
		echo "<table><tr ><td>shares</td><td>Rate in &cent;</td></tr>";
		foreach($tt as $t)
		{
			echo "<tr><td>".$t->shares."</td><td>".$t->rate."&cent;</td></tr>";
		}
		echo "</table>";
		
		echo "<style>table, th, td {
   border: 1px solid black;
}</style>";
		die;
		
		$t = (object)array('sss'=>(object)array('asd'=>'876'),'ddd'=>'213231','fff'=>'235665');
		echo $t->sss->asd;
		
	}
	
	// this is the controller method for a dealing to a perticular question in market. //
	public function deal()
	{
		$id = $this->uri->segment(3);
		
		if(!empty($id))
		{
			/* $data['title'] = '';
			$data['errors'] = '';
			$data['baseUrl'] = base_url(); */	
			
			$featured_q = $this->Share_Model->get_row('ai_question',array('id'=>$id),'id,category_id,question,description_rules,image');
			$option_dt  = $this->sports->get_options_details($id);
			
			$data['question'] =  $featured_q;	
			$data['options'] = $option_dt;
			$this->load->view('header');
			$this->load->view('question/question_detail',$data);
			$this->load->view('footer');
		}	
		else
		{
			
		}
		
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
