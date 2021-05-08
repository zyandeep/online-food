<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function index()
    {
        if ($this->input->post('register')) {
            $n = $this->input->post('name');
            $e = $this->input->post('email');
            $m = $this->input->post('mobile');
            $a = $this->input->post('address');
            $p = $this->input->post('password');

            // $query = $this->db->query("select * from customers where email='" . $e . "'");

            $query = $this->db->where('email', $e);
            $query = $this->db->get('customers');

            $row = $query->num_rows();
            if ($row) {
                $data['error'] = "<h3 style='color:red'>This user already exists</h3>";
                redirect(base_url() . 'application/views/fail.php');
            } else {
                //$query = $this->db->query("insert into customers values('','$n','$e','$m','$a','$p')");



                $query = array(
                    'name' => $n,
                    'email' => $e,
                    'mobile' => $m,
                    'address' => $a,
                    'password' => $p
                );
                $this->db->insert('customers', $query);

                $data['error'] = "<h3 style='color:blue'>Your account created successfully</h3>";
                redirect('login/index');
            }
        }

        $this->load->view('Signup_view', @$data);
    }
}
