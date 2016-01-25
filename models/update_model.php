<?php
class update_model extends CI_Model{
// Function To Fetch All Students Record
function show_students(){
$query = $this->db->get('contacts');
$query_result = $query->result();
return $query_result;
}
// Function To Fetch Selected Student Record
function show_student_id($data){
$this->db->select('*');
$this->db->from('contacts');
$this->db->where('id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
// Update Query For Selected Student
function update_student_id1($id,$data){
$this->db->where('id', $id);
$this->db->update('contacts', $data);
}

function get_groupdropdown_list()
{
	//$this->db->from('group_create');
	//$this->db->order_by('name');
	$this->db->select('group_create.*');
  	$this->db->from('group_create');
  	$this->db->join('contacts', 'contacts.group_id = group_create.id','left');
  	$this->db->order_by('name');
	$result = $this->db->get();
	$return = array();
	if($result->num_rows() > 0) {
	foreach($result->result_array() as $row) {
	$return[$row['id']] = $row['name'];
	}
	}
	 return $return;

}

function getSearch($searchContact){
	if(empty($searchContact)){
		return array();
	}
	
	$result = $this->db->like('first_name', $searchContact)
				->or_like('last_name', $searchContact)
				->get('id');
	return $result->result();
}
}
?>