<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organization_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url'); 
	}
	
	public function add_organization() {

		$organization_data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'name' => $this->input->post('name'),
			'type' => $this->input->post('type'),
			'description' => $this->input->post('description'),
			'address' => $this->input->post('address'),
			'hotline' => $this->input->post('hotline'),
			'email_address' => $this->input->post('email_address'),
			'website' => $this->input->post('website')
		);

		$this->db->insert('organization', $organization_data);
	}
}
?>