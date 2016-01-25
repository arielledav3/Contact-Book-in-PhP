<?php
class contacts extends CI_Model{
function __construct() {
	parent::__construct();
}

function form_insert($data){
// Inserting in Table(students) of Database(college)
	$this->db->insert('contacts', $data);
	
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
	
}
?>