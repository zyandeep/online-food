<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->database(); 
       
        
    }

    public function index()
    {
        $this->load->model('Dashboard_model');
        
       $data['info']= $this->Dashboard_model->get_users();
       $data['item']= $this->Dashboard_model->get_items();

       $querys = $this->Dashboard_model->get_history();

		$data['history'] = null;


		if ($querys) {
			$data['history'] =  $querys;
		}
		

		foreach ($querys as $q) :

			$q->bill_summary = json_decode($q->bill_summary, true) ;

		 endforeach;
	

       
        $this->load->view('includes/admin_header');
        $this->load->view('admin_Dashboard',$data);
       
       // $this->load->view('includes/footer');
    }


  
   

 

}