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
      // $this->load->view('add_image');

      $this->load->view('test_item_add');
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

      $this->load->model('add_model');

      // save the file first based on item category
      $item_name = $this->input->post('name', true);
      $item_category = $this->input->post('category', true);
      $item_price = $this->input->post('price', true);
      $item_rate = $this->input->post('rate', true);
      $item_description = $this->input->post('description', true);

      $config['upload_path']   = "storage/items/$item_category";
      $config['file_name'] =  $item_name;
      $query['image_path'] = $config['upload_path'];
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']      = 1024;
  

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('userfile')) {
         
         // display errors

         $error = array('error' => $this->upload->display_errors());

         pre($error);


      } 
      else {
        
         // success in uploading image

         $data = array('upload_data' => $this->upload->data());

         $image_path = substr($data['upload_data']['full_path'], stripos($data['upload_data']['full_path'], "storage"));

         

        // pre($image_path);





         $this->add_model->add_item(array(
            'name'=>$item_name,
            'category'=>strtoupper($item_category),
            'price'=>$item_price,
            'image_path' => $image_path,
            'rate'=>$item_rate,
            'description'=>$item_description,
            
         ));


         echo "<script> alert('Successfully added')</script>";
         $this->index();


      }

   }
}
