<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('cart');
	}
	public function get_orders()
	{
		$this->load->model('bill_model');
		$orders= $this->input->post('order',true);

		// pre(
		// 	json_decode($orders, true)
		// );
			$this->bill_model->insert_orders($this->session->userdata('customer_id'),$orders);

			
			$this->session->set_userdata(array(
				'orders' => json_decode($orders, true)
			));
			$this->session->set_flashdata('message', 'Successfully placed');
			redirect('cart/bill_summary');
			
		// echo $orders;

		
	}

	public function bill_summary()
	{
		$this->load->view('includes/header');
		$this->load->view('bill_summary');
	}
}
