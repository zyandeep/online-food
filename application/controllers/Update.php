

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database(); 
	}

	public function index()
	{
        $this->load->model('update_model');

        $query=$this->update_model->get_details();

        $this->load->view('includes/header');
        $this->load->view('update');
       
     }

     public function update_action()
     {
        $this->load->model('update_model');
     }
}