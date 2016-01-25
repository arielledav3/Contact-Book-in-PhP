<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{

       
function __construct() {
		parent::__construct();
		$this->load->library('stripe');
	}
	
function index(){

	$this->load->view('product_page');
}
public function charge_user(){
	$error = '';
	try{
		$amount = $this->input->post('amount');
		$newamount = round((float)$amount * 100);
		$card = $this->input->post('stripeToken');
		$desc = $this->input->post('desc');
		$this->stripe->charge_card($newamount, $card, $desc);
		//echo $response;
		$data['message'] = 'Payment Successful';
		$this->load->view('product_page', $data);
	}catch(Exception $e) {
		$error = $e->getMessage();
		$this->load->view('product_page', $error);
	}
  }
}

?>