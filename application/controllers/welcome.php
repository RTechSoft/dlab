<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

	public function __construct() {
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('map_model');
		$this->load->model('resource_model');
	}

	public function index()
	{
		$quan = $this->input->post('quantity');
		$data['hosp']=$this->map_model->getHospitals(); //get hospitals from db
		$data['fire']=$this->map_model->getFirestations(); //get firestations from db
		$data['police'] = $this->map_model->getPolice(); //get police stations from db
		$data['schools'] = $this->map_model->getSchools(); //get schools from db
		$data['orgs2'] = $this->map_model->getOrgs(); //get schools from db
		$data['orgs'] = $this->resource_model->getResources($quan);
		$this->load->view('home_view',$data); //pass data to view
		//end
	}

	public function sign_up()
	{
		$this->load->view('signup_view');
	}

	public function sign_in()
	{
		$this->load->view('signin_view');
	}

	public function load_resource()
	{
		$this->load->view('user_resources');
	}

	public function load_addres_form()
	{
		$this->load->view('add-resource.php');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */