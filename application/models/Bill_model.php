<?php
class Bill_model extends CI_Model
{

    public function insert_orders($customer_id, $bill_summary,$bill_amount)
    {

        $data = array(
            'customer_id' => $customer_id,
            'bill_summary' => $bill_summary,
            'bill_amount'=>$bill_amount,


        );

        $this->db->insert('bills', $data);
    }
}
