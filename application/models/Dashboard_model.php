<?php
class Dashboard_model extends CI_Model {
	//GET ALL
    public function get_users() {

        $this->db->select('*');
        $this->db->from('customers');
    	$query = $this->db->get();
        return $query->result();
    }
    public function get_items() {

        $this->db->select('*');
        $this->db->from('items');
    	$query = $this->db->get();
        return $query->result();
    }

    public function get_history()
    {
        $this->db->select("*");
        $this->db->from('bills');

        $this->db->order_by('bill_id', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }
}