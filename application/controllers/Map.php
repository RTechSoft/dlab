<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('map_model');
	}
	public function index()
	{
		$data['hosp']=$this->map_model->getHospitals(); //get hospitals from db
		$data['fire']=$this->map_model->getFirestations(); //get firestations from db
		$data['police'] = $this->map_model->getPolice(); //get police stations from db
		$data['schools'] = $this->map_model->getSchools(); //get schools from db
		$this->load->view('home_view',$data); //pass data to view
		//end
	}
}
?>

