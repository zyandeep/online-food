<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->db->select('customers');

    }

public function details($mail,$pass)
{
   $mail= $this->db->select('email', $this->session->userdata('email'));
   return $mail;

       

   $pass= $this->db->select('password',  $this->session->userdata('password'));
       return $pass;
      
       

}

}