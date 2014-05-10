<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SignIn extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper("url");
        $this->load->model("organization_model");
    }

    public function sign_in() {
        $email_address = $this->input->post('email_address');
        $password = md5($this->input->post('password'));

        $result=$this->organization_model->sign_in($email_address,$password);
        if($result) $this->load->view('user_resources');
        else        $this->load->view('signin_view');
    }
}