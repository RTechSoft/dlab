<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SignUp extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper("url");
		$this->load->model("organization_model");
	}

	public function registration() {
		$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('name', 'Organization Name', 'required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('type', 'Organization Type', 'required|min_length[10]|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'required|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'required|min_length[10]|xss_clean');
		$this->form_validation->set_rules('hotline', 'Contact Number', 'required|min_length[11]|xss_clean');
		$this->form_validation->set_rules('email_address', 'E-mail Address', 'required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('website', 'Website URL', 'min_length[5]|xss_clean');

		if($this->form_validation->run() == TRUE) {
			$this->organization_model->add_organization();
			//THE USER IS AUTOMATICALLY LOGGED IN
		}
		else {
			$this->load->view('signup_view');
		}
	}
}