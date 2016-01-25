<?php
class Last_Name extends CI_Controller{

function __construct(){
	parent::__construct();
	$this->load->library(array('ion_auth','form_validation'));
	$this->load->helper(array('url','language'));
	$this->lang->load('auth');
	$this->load->model('last_order');
}

function last_order(){
	$id = $this->uri->segment(3);
	$data['contacts'] = $this->last_order->show_students();
	$data['single_contact'] = $this->last_order->show_student_id($id);
	$data['id'] = $id;
	$this->load->view('last_order_contact', $data);

}

// Function to Delete selected record from database.
function delete_student_id() {
	$id = $this->uri->segment(3);
	$this->last_order->delete_student_id($id);
	$this->last_order();
}

}

?>