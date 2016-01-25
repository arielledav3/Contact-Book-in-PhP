<?php
class Names extends CI_Controller{

function __construct(){
	parent::__construct();
	$this->load->library(array('ion_auth','form_validation'));
	$this->load->helper(array('url','language'));
	$this->lang->load('auth');
	$this->load->model('delete_names');
}
// Function to Fetch selected record from database.
function show_student_id() {
	if (!$this->ion_auth->logged_in())
	{
		redirect('auth', 'refresh');
	}
	
	$id = $this->uri->segment(3);
	$data['contacts'] = $this->delete_names->show_students();
	$data['single_contact'] = $this->delete_names->show_student_id($id);
	$data['id'] = $id;
	$this->load->view('show_names', $data);
}
// Function to Delete selected record from database.
function delete_student_id() {
	if (!$this->ion_auth->logged_in())
	{
		redirect('auth', 'refresh');
	}
	
	$id = $this->uri->segment(3);
	$this->delete_names->delete_student_id($id);
	$this->show_student_id();
}

}
?>