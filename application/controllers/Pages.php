<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
		$this->rootpath = $_SERVER['DOCUMENT_ROOT'];
		$this->load->library('form_validation');
		//$this->rootpath = 'C:/xampp/htdocs/sampleadmin/';
	}	
	
	public function about()
	{
		$this->load->view('header');
		$where = array('id' => 1);
        $data['about_data'] = $this->User_model->get_row('ai_pages', $where, '*','','');
		$this->load->view('about',$data);
		$this->load->view('footer');
	}
	public function FAQ()
	{
		$this->load->view('header');
		$where = array('id' => 2);
        $data['about_data'] = $this->User_model->get_row('ai_pages', $where, '*','','');
		$this->load->view('faq',$data);
		$this->load->view('footer');
	}
	
	public function Terms_Conditions()
	{
		$this->load->view('header');
		$where = array('id' => 3);
        $data['about_data'] = $this->User_model->get_row('ai_pages', $where, '*','','');
		$this->load->view('terms-conditions',$data);
		$this->load->view('footer');
	}
	
	public function Security()
	{
		$this->load->view('header');
		$where = array('id' => 4);
        $data['about_data'] = $this->User_model->get_row('ai_pages', $where, '*','','');
		$this->load->view('security',$data);
		$this->load->view('footer');
	}
	
	public function Privacy_Policy()
	{
		$this->load->view('header');
		$where = array('id' => 5);
        $data['about_data'] = $this->User_model->get_row('ai_pages', $where, '*','','');
		$this->load->view('privacy-policy',$data);
		$this->load->view('footer');
	}
	
	
	public function setting()
	{	
		$id = $this->session->userdata('id');
		$mobile = $this->input->post('mobile', true);
		$username = $this->input->post('username', true);
		$fname = $this->input->post('fname', true);
		
		$this->form_validation->set_rules('mobile','Mobile','required');
   	    $this->form_validation->set_rules('username','UserName','required');
		$this->form_validation->set_rules('fname','First Name','required');
		
		if( $this->form_validation->run() == true )
		{
				$upd = array(
				'mobile'=>$mobile,
				'username'=>$username,
				'firstname'=>$fname,
				);
				$res=$this->Common_model->updateFields('ai_users',$upd,array('id'=>$id));
				if($res){
				$this->session->set_flashdata( 'msg' , 'pass|Profile update successfully.!' );
				redirect('setting');
				}
		}
		
		$data['profile'] = $this->Common_model->getsingle('ai_users', array('id' => $id), 'id,mobile,username,firstname');
			
		$this->load->view('header');
		$this->load->view('setting',$data);
		$this->load->view('footer');
	}
	
	function change_password() {
		
		$id = $this->session->userdata('id');
		$old_pass = $this->input->post('old_pass', TRUE);
		$new_pass = $this->input->post('new_pass', TRUE);
		$new_cpass = $this->input->post('new_cpass', TRUE);
		
		$this->form_validation->set_rules('old_pass', 'old password', 'trim|required|callback__chk_old_pass');
        $this->form_validation->set_rules('new_pass', 'new password', 'trim|required');
        $this->form_validation->set_rules('new_cpass', 'confirm password', 'trim|required|matches[new_pass]');
		if ($this->form_validation->run() == TRUE) {
			$upd_array = array(
                'password' => $new_pass,
            );
            $res = $this->Common_model->updateFields('ai_users',$upd_array,array('id'=> $id));
			if($res){
				$this->session->set_flashdata( 'msg' , 'pass|Password change successfully.!' );
				redirect('setting');
			}
			
		}
		
		$data['profile'] = $this->Common_model->getsingle('ai_users', array('id' => $id), 'id,mobile,username,firstname');
		$this->load->view('header');
		$this->load->view('setting',$data);
		$this->load->view('footer');
	}
	
	 /** 
    * Supporting functions for change password(Check old password).
    * @param  string $str in where
    * @return void
    */
    function _chk_old_pass($str) {
        $id = $this->session->userdata('id');
        $get_user_where = array('id' => $id);
        $get_user_select = array('password'); //,'password_history'
        $get_user = $this->Common_model->getsingle('ai_users', $get_user_where, $get_user_select);

        if ($get_user != 'no record found') {
            $old_pass_db = $get_user->password;
			$npass = $str;
            $old_pass_us = $npass;

            if ($old_pass_db != $old_pass_us) {
                $this->form_validation->set_message('_chk_old_pass', 'The %s is incorrect.');
                return FALSE;
            } else {
                return TRUE;
            }
        } else {
            $this->form_validation->set_message('_chk_old_pass', 'The %s is incorrect.');
            return FALSE;
        }
    }
	
}
