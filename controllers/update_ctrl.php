<?php
class update_ctrl extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->library(array('ion_auth','form_validation'));
$this->load->helper(array('url','language'));
$this->lang->load('auth');
$this->load->model('update_model');
}
function show_student_id() {
if (!$this->ion_auth->logged_in())
{
	redirect('auth', 'refresh');
}
	
$id = $this->uri->segment(3);
$data['contacts'] = $this->update_model->show_students();
$data['single_contact'] = $this->update_model->show_student_id($id);
$data['group_id'] = $this->update_model->get_groupdropdown_list();
$data['id'] = $id;
$this->load->view('update_view', $data);
}
function update_student_id1() {
if (!$this->ion_auth->logged_in())
{
	redirect('auth', 'refresh');
}

$data['group_id'] = $this->update_model->get_groupdropdown_list();
$id= $this->input->post('id');
//Setting values for tabel columns
$data = array(
'email' => $this->input->post('email'),
'first_name' => $this->input->post('first_name'),
'last_name' => $this->input->post('last_name'),
'phone_number' => $this->input->post('phone_number'),
'address' => $this->input->post('address'),
'city' => $this->input->post('city'),
'state' => $this->input->post('state'),
'zip_code' => $this->input->post('zip_code'),
'birthday' => $this->input->post('birthday'),
'group_id' => $this->input->post('group_id'),
);

//show all groups and have user check which one they want to be apart of or dropbox it

$this->update_model->update_student_id1($id,$data);
$this->show_student_id();
}

function searchBooks() {
	$data['contacts'] = $this->update_model->get_search($this->input->post('search'));
	$this->load->view('update_view',$data);

}

}
?>
