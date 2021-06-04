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
    // Update the status of the bill by admin
    public function update_orders($bill_id,$status)
    {
        $data = array(
            'bill_id' => $bill_id,
            'status' => $status,
        );

        $this->db->where('bill_id',  $bill_id);
        return $this->db->update('bills', $data); //Change effect
    }
}
