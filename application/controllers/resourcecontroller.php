<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ResourceController extends CI_Controller {

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

	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->model("resource_model");
		$this->load->model("map_model");
	}

	public function index()
	{
		$data['listRes'] = $this->resource_model->get_res_table(); //list of resources
		$this->load->view('user_resources', $data);

	}

	public function load_resource()
	{
		$this->load->view('user_resources');
	}

	public function load_addres_form()
	{
		$resource_data = array(
			'owner_id' => 1, //arbitrary-for testing
			'type' => $this->input->post('type'),
			'quantity' => $this->input->post('quantity'),
			'no_of_available_units' => $this->input->post('no_available_units'),
			'remarks' => $this->input->post('remarks')
		);
		$this->resource_model->add_resource_table($resource_data);
		$this->load->view('add-resource');
	}

	public function search()
	{
		$quan = $this->input->post('quantity');
		$data['hosp']=$this->map_model->getHospitals(); //get hospitals from db
		$data['fire']=$this->map_model->getFirestations(); //get firestations from db
		$data['police'] = $this->map_model->getPolice(); //get police stations from db
		$data['schools'] = $this->map_model->getSchools(); //get schools from db
		$data['orgs'] = $this->resource_model->getResources($quan);
		$this->load->view("home_view",$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */?>