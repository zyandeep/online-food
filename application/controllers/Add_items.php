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
     // $query['name'] = $this->add_model->get_cat();
      $this->load->view('includes/admin_header');
      $this->load->view('add_image');
   }
  

   public function do_upload()
   {
      $query['name'] = $this->add_model->get_cat();
      $config['upload_path']   = 'storage/items/veg';
      $query['image_path'] = $config['upload_path'];
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']      = 10000;
      $config['max_width']     = 1024;
      $config['max_height']    = 768;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('userfile')) {
         //$error = array('error' => $this->upload->display_errors()); 

         $this->load->view('add_items', $query);
      } else {
         // $data = array('upload_data' => $this->upload->data());
         $this->load->view('add_items', $query);
      }
   }
   public function add_item()
   {
      $query1 = $this->add_model->add_item();
      //pre($query1);
      if ($query1) {
         // $this->load->view('includes/admin_header');
         redirect('admin_dashboard');
      } else {
         echo '<script>alert("Success")</script>';
         redirect('admin_dashboard');
      }
   }
  
}
