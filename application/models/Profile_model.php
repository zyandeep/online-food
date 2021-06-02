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

    public function update_details($customer_id, $data=array())
    {
    //    $this->db->update('mytable', $data, array('id' => $id));
        $this->db->where('customer_id', $customer_id);
        $this->db->update('customers', $data);
    }

    public function get_history()
    {
        $this->db->select("*");
        $this->db->from('bills');

        $this->db->where("customer_id", $this->session->userdata('customer_id'));
        $this->db->order_by('bill_id', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }
}
