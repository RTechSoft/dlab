<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resource_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function add_resource_table()
	{

		$resource_data = array(
			'owner_id' => 1, //arbitrary-for testing
			'type' => $this->input->post('type'),
			'quantity' => $this->input->post('quantity'),
			'no_of_available_units' => $this->input->post('no_available_units'),
			'remarks' => $this->input->post('remarks')
		);

		$this->db->insert('resource', $resource_data);
	}
}
?>