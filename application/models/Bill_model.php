<?php
class Bill_model extends CI_Model
{

    public function insert_orders($customer_id, $bill_summary)
    {

        $data = array(
            'customer_id' => $customer_id,
            'bill_summary' => $bill_summary,

        );

        $this->db->insert('bills', $data);
    }
}
