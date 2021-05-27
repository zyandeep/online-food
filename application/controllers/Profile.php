<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		
	}

	public function index()
	{
		$this->load->model('profile_model');
		$data['title']="My Account";

		$this->profile_model->details();
		$this->load->view('includes/header');
		$this->load->view('profile',$data);
	}
}