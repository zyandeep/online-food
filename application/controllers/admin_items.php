<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_items extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

       $this->load->model('Dashboard_model');
       $data['item']= $this->Dashboard_model->get_items();
       
        $this->load->view('includes/admin_header');
        $this->load->view('admin_Items',$data);
       
       // $this->load->view('includes/footer');
    }
}