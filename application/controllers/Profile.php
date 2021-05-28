<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->database(); 
	}

	public function index()
	{
		
		if($this->session->userdata('customer_id') != '')  
       {     
		$this->load->model('profile_model');
            $query = $this->profile_model->details();
			
            $data['info'] = null;
            if($query) {
                $data['info'] =  $query[0];
            }
			$this->load->view('includes/header');
			$this->load->view('profile_new',$data);
       } 
	}
}