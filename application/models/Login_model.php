
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
    
    public function login($email, $password)
    {
        $this->db->where('email', $email);

       

        $this->db->where('password', $password);
      //  $this->db->where('active', 1);
        $query = $this->db->get('customers');

        

        if($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
    }
}
?>
