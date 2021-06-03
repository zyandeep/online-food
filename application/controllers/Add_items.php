<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_items extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       $this->load->model('add_model');
       
        
    }

    public function index()
    {
        $data['name']= $this->add_model->get_cat();
       
        
        $this->load->view('includes/admin_header');
        $this->load->view('add_items',$data,array('error' => ' ' ));

    }

   
     public function do_upload() { 
        $config['upload_path']   = 'D:xampp/htdocs/online-food/storage/items/veg'; 
        $config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']      = 10000; 
        $config['max_width']     = 1024; 
        $config['max_height']    = 768;  
        $this->load->library('upload', $config);
           
        if ( ! $this->upload->do_upload('userfile')) {
         //$error = array('error' => $this->upload->display_errors()); 
           $this->load->view('add_items'); 
        }
           
        else { 
           // $data = array('upload_data' => $this->upload->data());
           $this->load->view('add_items'); 
        } 
     } 
}