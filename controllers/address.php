<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
       
	function __construct() {
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
		$this->load->model('contacts');
	}
		
	function index()
	{	
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth', 'refresh');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//Validating Name Field
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('zip_code', 'Zip Code', 'required');
		$this->form_validation->set_rules('birthday', 'Birthday', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$data['group_id'] = $this->contacts->get_groupdropdown_list();
			$this->load->view('address_view', $data);
			
		} else {
			//Setting values for tabel columns
			$data['group_list'] = $this->contacts->get_groupdropdown_list();
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
			
			//now transfer that group_id to contacts
			$this->contacts->form_insert($data);
			//Transfering data to Model
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			$data['group_id'] = $this->contacts->get_groupdropdown_list();
			$this->load->view('address_view', $data);
		}
	}
	
		
		
  }
	
?>