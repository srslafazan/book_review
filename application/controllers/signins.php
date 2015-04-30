<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signins extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
        $this->load->model('logins')
    }

    public function index()
    {
        $this->load->view('signins');
    }

    public function user_registration()
    {
    	$this->Login->registration($this->input->post());
    	$this->load->view('welcome');
    }


}

//end of main controller