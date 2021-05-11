<?php
class Items_model extends CI_Model {
    public function get_items() {
    	$query = $this->db->get("items");
        return $query->result();
    }
}
?>