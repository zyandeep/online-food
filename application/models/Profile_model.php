<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function details()
    {
        $this->db->select("name,mobile_no,email,password,address");
        $this->db->from('customers');

        $this->db->where("customer_id", $this->session->userdata('customer_id'));

        $query = $this->db->get();
        return $query->result();
    }
}
