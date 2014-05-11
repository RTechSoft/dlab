<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resource_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	public function getResources($quan)
	{
		$sql = "SELECT * FROM resource WHERE quantity<='".$quan."'";
		$this->db->select('*'); 
			 $this->db->from('resource');
   			 $this->db->join('organization','resource.owner_id = organization.user_id');
    		 $this->db->group_by("resource.owner_id"); 
    		# SELECT maemberID,
            #	GROUP_CONCAT(DISTINCT test_score)
             #   FROM taskassignment
         #GROUP BY memberID;
    		 
            return $this->db->get()->result_array();

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