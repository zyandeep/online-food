<?php
class Items_model extends CI_Model {
	//GET ALL
    public function get_items() {
    	$query = $this->db->get("items");
        return $query->result();
    }
    //GET VEG
    public function get_veg_items() {
    	$this->db->select('*');
		$this->db->from('items');
		$this->db->where("category","VEG");
		$query=$this->db->get();
    	//$query = $this->db->get("items");
        return $query->result();
    }
    //GET NON VEG 
    public function get_nonveg_items() {
    	$this->db->select('*');
		$this->db->from('items');
		$this->db->where("category","NON_VEG");
		$query=$this->db->get();
        return $query->result();
    }
    //GET BEVERAGE
    public function get_items() {
    	$this->db->select('*');
		$this->db->from('items');
		$this->db->where("category","BEVERAGE");
		$query=$this->db->get();
    	//$query = $this->db->get("items");
        return $query->result();
    }
}
?>