
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

        $name=$this->input->post('name');
        $category=$this->input->post('category');
        $price=$this->input->post('price');
        $image_path=$this->input->post('image_path');
        $rate=$this->input->post('rate');
        $description=$this->input->post('description');

        $data = array(
            'name' => $name,
            'category'=>$category,
            'price' => $price,
            'image_path' => $image_path,
            'rate' => $rate,
            'description' => $description
        );

        $this->db->insert('items', $data);
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
