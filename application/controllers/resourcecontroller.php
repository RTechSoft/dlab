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
	}

	public function load_resource()
	{
		$this->load->view('user_resources');
	}

	public function load_addres_form()
	{
		$this->load->view('add-resource');
	}

	public function add_resource() {
			$this->resource_model->add_resource_table();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */?>