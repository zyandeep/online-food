<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
        
    }

    public function index()
    {
        $this->load->model('items_model');
        $data['vegs'] = $this->items_model->get_veg_items();
        $data['non_vegs'] = $this->items_model->get_nonveg_items();
        $data['brevs'] = $this->items_model->get_bev_items();
        
        $this->load->view('includes/header');
        $this->load->view('Dashboard',$data);
       // $this->load->view('includes/footer');
    }

    public function items()
    {
        $this->load->model('items_model');
        
    }

}