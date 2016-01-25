<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Api extends REST_Controller
{
	function user_get($id)
	{
		//respond with information about user
		if(!$id)
		{
			$this->response(NULL, 400);
		}
		$this->load->model('group_model');
		$user = $this->group_model->show_student_id($id);
		
		if($user)
		{
			$this->response($user, 200); //200 being the http response
		}
		else
		{
			$this->response(NULL, 404);
		}
	}
	
	function user_put($id)
	{
		$this->load->model('update_model');
		
		//create a new user and respond with a status/error
		$data['group_id'] = $this->update_model->get_groupdropdown_list();
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
	 
	function user_post()
	{	
		//create a new user and respond with a status/error
		$data = array(
		'name' => $this->input->post('name'),
		'description' => $this->input->post('description'),
		);
		
		$this->load->model('group_model');
		$result = $this->group_model->form_insert($data);
		
		 if($result){
		 
		 	$this->response($result, 201);
		 	
		 }else{
		 	$this->response(NULL,404);
		 }
	
	}
	
	function user_delete($id)
	{
		//$id = (int) $this->get('id');

        // Validate the id.
        if ($id == NULL)
        {
            // Set the response and exit
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

		$this->load->model('group_model');
        $this->group_model->delete_student_id($id);
        $message = [
            'id' => $id,
            'message' => 'Deleted the resource'
        ];

        $this->set_response($message, REST_Controller::HTTP_NO_CONTENT); // NO_CONTENT (204) being the HTTP response code
	}
	
}

?>