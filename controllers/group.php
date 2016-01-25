<?php
(APPPATH.'libraries/REST_Controller.php');

class group extends CI_Controller{
function __construct(){
	parent::__construct();
	$this->load->library(array('ion_auth','form_validation'));
	$this->load->helper(array('url','language'));
	$this->lang->load('auth');
	$this->load->model('group_model');
}
public function index(){
	//$data['contact_list'] = $this->group_model->get_dropdown_list();
	//$data['group_list'] = $this->group_model->get_groupdropdown_list();
	if (!$this->ion_auth->logged_in())
	{
		redirect('auth', 'refresh');
	}
	$id = $this->uri->segment(3);
	$data['groups'] = $this->group_model->show_students();
	$data['single_group'] = $this->group_model->show_student_id($id);
	$data['id'] = $id;
	$this->load->view('group_contact', $data); 
}

function create_group(){
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('name', 'Name', 'required');
$this->form_validation->set_rules('description', 'Description', 'required');

if ($this->form_validation->run() == FALSE) {
	$this->load->view('group_contact');
} else {
	//Setting values for tabel columns
	$data = array(
	'name' => $this->input->post('name'),
	'description' => $this->input->post('description'),
	);
	//Transfering data to Model
	$this->group_model->form_insert($data);
	$data['message'] = 'Data Inserted Successfully';
	//Loading View
	//$data['contact_list'] = $this->group_model->get_dropdown_list();
	//$data['group_list'] = $this->group_model->get_groupdropdown_list();
	$id = $this->uri->segment(3);
	$data['groups'] = $this->group_model->show_students();
	$data['single_group'] = $this->group_model->show_student_id($id);
	$data['id'] = $id;
	$this->load->view('group_contact', $data);
}

}

// Function to Fetch selected record from database.
function show_student_id() {
	$id = $this->uri->segment(3);
	$data['single_group'] = $this->group_model->show_student_id($id);
	$data['groups'] = $this->group_model->show_students();
	$data['id'] = $id;
	$this->load->view('group_contact', $data);
}


// Function to Delete selected record from database.
//delete with restful
function delete_student_id($id) {
	$id = $this->uri->segment(3);
	$this->group_model->delete_student_id($id);
	$id = $this->uri->segment(3);
	$data['groups'] = $this->group_model->show_students();
	$data['single_group'] = $this->group_model->show_student_id($id);
	$data['id'] = $id;
	$this->load->view('group_contact', $data);
	
}


}
?>