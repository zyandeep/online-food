<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('cart');
	}
}
