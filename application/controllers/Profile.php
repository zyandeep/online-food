<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('profile_model');
	}

	public function index()
	{

		if ($this->session->userdata('customer_id') != '') {

			$query = $this->profile_model->details();

			$data['info'] = null;
			if ($query) {
				$data['info'] =  $query[0];
			}


			$this->load->view('includes/header');
			$this->load->view('profile_new', $data);
		}
	}

	public function update_profile()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('mobile_no', 'Mobile', 'trim|required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		$new_pwd = trim($this->input->post('new_pwd', true));

		if (strlen($new_pwd) > 0) {
			$this->form_validation->set_rules('new_pwd', 'Password', 'trim|required|min_length[4]');
			$this->form_validation->set_rules('conf_pwd', 'Password Confirmation', 'trim|required|matches[new_pwd]');
		}


		if ($this->form_validation->run() == FALSE) {

			$this->index();
		} else {


			$cols = array('name', 'mobile_no', 'address', 'email');


			if (strlen($new_pwd) > 0) {
				array_push($cols, 'new_pwd');
			}

			$data = $this->input->post($cols, TRUE);

			if (array_key_exists('new_pwd', $data)) {
				$data['password'] = $data['new_pwd'];
				unset($data['new_pwd']);
			}




			$this->profile_model->update_details($this->session->userdata('customer_id'), $data);
			$this->session->set_flashdata('message', 'Data updated succesfully');
			redirect('profile/index');
		}
	}

	public function history()
	{
		$querys = $this->profile_model->get_history();

		$data['history'] = null;


		if ($querys) {
			$data['history'] =  $querys;
		}
		
		// pre($data['history']);


		foreach ($querys as $q) :
			
			// array_push($data['bill'], json_decode($q->bill_summary, true)) ;

			$q->bill_summary = json_decode($q->bill_summary, true) ;
			

			
			//pre($q);
		 endforeach;
		//pre($query3);


		//pre($data);
		

		$this->load->view('includes/header');
		$this->load->view('history', $data);
	}
}
