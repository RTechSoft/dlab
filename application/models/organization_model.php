<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organization_model extends CI_Model {

	public function __construct() {
		parent::__construct(); 
	}
	
	function sign_in($email_address, $password) {
		$this->db->where("email_address", $email_address);
		$this->db->where("password", $password);

		$query = $this->db->get("organization");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $rows) {
				//add all data to session
				$newdata = array(
					'user_id' => $rows->user_id,
					'username' => $rows->username,
					'name' => $rows->name,
					'type' => $rows->type,
					'description' => $rows->description,
					'address' => $rows->address,
					'hotline' => $rows->hotline,
					'email_address' => $rows->email_address,
					'website' => $rows->website,
					'logged_in' => TRUE,
				);
			}
			$this->session->set_userdata($newdata);
			return true;
		}
		return false;
	}

	public function add_organization() {

		$organization_data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
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