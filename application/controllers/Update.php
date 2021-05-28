<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database(); 
	}

	public function index()
	{

        $this->form_validation->set_rules('email', 'email', 'trim|required');
        
        if($this->form_validation->run() == false) {
            redirect('dashboard');
        } else {
            // Set variable from Form
            $user_id    =   $this->input->post('customer_id');
            $username   =   $this->input->post('name');
            $email      =   $this->input->post('email');
            if($this->update_model->update($user_id, $username, $email)) {
                $this->session->set_flashdata('notice','<div class="success">Your details updated Successfully!</div>');
                redirect('profile');
            } else {    
                $this->session->set_flashdata('msg', '<div class="error">Problem with update your detail!</div>');
                redirect('profile');
            }
        }
     }
}