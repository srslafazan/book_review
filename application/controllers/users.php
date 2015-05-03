<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
        $this->load->model('Signin');
    }

    public function index()
    {

    	$this->session->set_userdata('user_id', $id);

    	$get_user_profiles = $this->Signin->get_user_profiles();

    	// var_dump($get_user_profiles);

        $this->load->view('users', array('results'=>$get_user_profiles));
    }

}

//end of main controller