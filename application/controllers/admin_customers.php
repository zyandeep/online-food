<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_customers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->database(); 
        
    }

    public function index()
    {

        $this->load->model('Dashboard_model');
       $data['info']= $this->Dashboard_model->get_users();
       
        $this->load->view('includes/admin_header');
        $this->load->view('admin_Customers',$data);
       
       // $this->load->view('includes/footer');
    }
   

 

}