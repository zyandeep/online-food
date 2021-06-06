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

     public function update_status($bill_id,$status)
     {
          $this->load->model('bill_model');
          $this->bill_model->update_orders($bill_id,$status);
          
          // load view again
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
     }

     public function send_email($customer_id,$bill_id) {
        $this->load->config('email');
        $this->load->library('email');

        $this->load->model('Dashboard_model');
        $data['customer'] = $this->Dashboard_model->get_user($customer_id);
        $data['email']=$data['customer'][0];



        $from = $this->config->item('smtp_user');
        $subject = "Order Status for Bill id : ".$bill_id;
        $message = "Dear Customer,Your order is approved and will be deliverd soon. Thank you. Barbeque Corner";
        

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($data['email']->email);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }


  
   

 

}