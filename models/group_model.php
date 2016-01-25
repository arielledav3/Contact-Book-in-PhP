<?php
class group_model extends CI_Model{

/*function get_dropdown_list()
{
	$this->db->from('contacts');
	$this->db->order_by('first_name');
	$result = $this->db->get();
	$return = array();
	if($result->num_rows() > 0) {
	foreach($result->result_array() as $row) {
	$return[$row['id']] = $row['first_name'];
	}
	}
	 return $return;
   }
   
function get_groupdropdown_list()
{
	$this->db->from('group_create');
	$this->db->order_by('name');
	$result = $this->db->get();
	$return = array();
	if($result->num_rows() > 0) {
	foreach($result->result_array() as $row) {
	$return[$row['id']] = $row['name'];
	}
	}
	 return $return;

  }*/
  
function form_insert($data){
// Inserting in Table(students) of Database(college)
	$this->db->insert('group_create', $data);
	}
	
// Function to select all from table name students.
function show_students(){
	$query = $this->db->get('group_create');
	$query_result = $query->result();
	return $query_result;
}

function show_student_id($data){
	$this->db->select('*');
	$this->db->from('contacts');
	$this->db->where('group_id', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
}
	
// Function to Delete selected record from table name students.
function delete_student_id($id){
	$this->db->where('id', $id);
	$this->db->delete('group_create');
}
}

?>