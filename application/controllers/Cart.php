<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('cart');
	}
	public function get_orders()
	{
		$this->load->model('bill_model');
		$orders = $this->input->post('order', true);

		$bill_amount =  array_reduce(json_decode($orders, true), function ($total, $item) {
			return $total + $item['item_total'];
		}, 0);
		
		$this->bill_model->insert_orders($this->session->userdata('customer_id'), $orders,$bill_amount);


		$this->session->set_userdata(array(
			'orders' => json_decode($orders, true)
		));
		$this->session->set_flashdata('message', 'Successfully placed');
		redirect('cart/bill_summary');

		// echo $orders;


	}

	public function bill_summary()
	{
		$this->load->view('includes/header');
		$this->load->view('bill_summary');
	}

	public function print_bill()
	{
		$orders = $this->session->userdata('orders');
		$total_amount =  array_reduce($orders, function ($total, $item) {
			return $total + $item['item_total'];
		}, 0);


		$bill_html = '<table border="1" width="500"><caption><h2>Foodpark Bill Receipt</h2></caption>' . 
		'<thead><tr>  <th width="25%">Item Name</th>
		<th width="45%">Item Description</th>
		<th width="10%">Quantity</th>
		<th width="10%">Price</th>
		<th width="10%">Total</th> </tr></thead><tbody>';  

		foreach ($orders  as $order) {

			$bill_html .= "	<tr>
			<td>  $order[item_name] </td>
			<td>  $order[item_description] </td>
			<td>  $order[item_quantity] </td>
			<td>  $order[item_price] </td>
			<td>  $order[item_total] </td>

		</tr>";
			
		}

		$bill_html .= " </tbody><tfoot>

		<tr>
			<td colspan='4'>
				<h3>Total Amount:</h3>
			</td>
			<td>

				<h3>
					$total_amount

				</h3>

			</td>

		</tr>

	</tfoot></table>";
		

		// $bill_html = $this->input->post('bill_html');

		// pre($bill_html);

		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML($bill_html);







		// pdf settings
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->list_indent_first_level = 0; 
		
		//call watermark content and image
		$mpdf->SetWatermarkText('FoodPark');
		$mpdf->showWatermarkText = true;
		$mpdf->watermarkTextAlpha = 0.1;


		$mpdf->Output();
	}
}
