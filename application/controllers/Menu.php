<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
        
    }

    public function index()
    {

        $this->load->view('includes/header');
        $this->load->view('menu');
    }
}