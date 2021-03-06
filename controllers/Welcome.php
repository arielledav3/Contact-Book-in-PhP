<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
	
	}
		
	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth', 'refresh');
		}
		
		$this->load->library('session');
		$this->load->helper('url');
		$data['user_email'] = $this->session->userdata('username');
	
		$this->load->view('welcome_message', $data);
		
		
	}
}

