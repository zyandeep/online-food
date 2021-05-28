
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login_model extends CI_Model{
    
    public function login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        if($query->num_rows() == 1) {
            return $query->row();
        }
        return false;
    }
}
?>
