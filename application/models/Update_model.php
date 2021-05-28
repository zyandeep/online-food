

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_details()
    {
        $this->db->select("name,email,mobile_no,password,address");
        $this->db->from('customers');

        $this->db->where("customer_id", $this->session->userdata('customer_id'));

       return $this->db->get()->result();
    }

    public function update()
    {
        $data = array(
            'name'   =>  $this->session->userdata('name'),
            //'email'      =>  $this->session->userdata('email'),
            'mobile_no'      =>  $this->session->userdata('mobile_no'),
            // 'password'      =>  $this->session->userdata('password'),
            // 'address'      =>  $this->session->userdata('address'),

        );
        $this->db->where('customer_id',  $this->session->userdata('customer_id'));
        return $this->db->update('customers', $data); //Change effect
    }
}
