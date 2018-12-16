<?php

class verifyregister extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

	function index () {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username',' username','trim|required|min_length[4]');
		$this->form_validation->set_rules('email', 'Your Email','trim|required|valid_email');
  		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');


  		if($this->form_validation->run() == FALSE) {
     	$this->load->view('register_view');  
     } else {
		   $this->user->add_user();
	       redirect('Login', 'refresh');
		  }
 	}
 
}
?>