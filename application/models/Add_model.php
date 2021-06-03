
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add_item()
    {
        $data = array(
            'name' => 'My title',
            'category'=>'Category',
            'price' => 'My Name',
            'rate' => 'My date',
            'description' => 'My date'
        );

        $this->db->insert('mytable', $data);
    }

    public function get_cat()
    {
        $this->db->select('category');
        $this->db->distinct();
        $this->db->from('items');
        $query = $this->db->get();
        return $query->result();
    }
}
