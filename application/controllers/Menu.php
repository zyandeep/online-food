<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
        
    }

    public function veg()
    {

      
    $data['title']="Vegetarian Menu";
    $this->load->model('items_model');
    $data['items'] = $this->items_model->get_veg_items();
    
    $this->load->view('includes/header');
    $this->load->view('menu',$data);
  }

  public function non_veg()
  {

    
  $data['title']="Non-Veg Menu";
  $this->load->model('items_model');
  
   $data['items'] = $this->items_model->get_nonveg_items();
  // $data['brevs'] = $this->items_model->get_bev_items();
  
  $this->load->view('includes/header');
  $this->load->view('menu',$data);
}

public function bevrg()
{

  
$data['title']="Beverages Menu";
$this->load->model('items_model');

 
 $data['items'] = $this->items_model->get_bev_items();

$this->load->view('includes/header');
$this->load->view('menu',$data);
}
}