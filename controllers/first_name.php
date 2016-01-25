<?php
class First_Name extends CI_Controller{

function __construct(){
	parent::__construct();
	$this->load->library(array('ion_auth','form_validation'));
	$this->load->helper(array('url','language'));
	$this->lang->load('auth');
	$this->load->model('order');
}

function first_order(){
	$id = $this->uri->segment(3);
	$data['contacts'] = $this->order->show_students();
	$data['single_contact'] = $this->order->show_student_id($id);
	$data['id'] = $id;
	$this->load->view('first_order_contact', $data);

}

// Function to Delete selected record from database.
function delete_student_id() {
	$id = $this->uri->segment(3);
	$this->order->delete_student_id($id);
	$this->first_order();
}

}

?>