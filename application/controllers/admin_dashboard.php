<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
        
    }

    public function index()
    {
        $this->load->view('includes/admin_header');
        $this->load->view('admin_Dashboard');
       
       // $this->load->view('includes/footer');
    }

 

}