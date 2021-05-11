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
        $data['items'] = $this->items_model->get_items();
       // $this->load->model('dashboard_mod');
        $this->load->view('includes/header');
        $this->load->view('Dashboard');
       // $this->load->view('includes/footer');
    }

}