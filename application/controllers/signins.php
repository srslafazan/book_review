<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signins extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Signin');
        $this->output->enable_profiler();
        
    }

    public function index()
    {
        $this->load->view('signins');
    }

    public function user_registration()
    {
        // adding $id after statements carries the id to the 'home' page
        $id = $this->Signin->registration($this->input->post());

        // passing the key 'user_id'
        $this->session->set_userdata('user_id', $id);
        // checking if id is passed to 'home' page
        // var_dump($id);
        // die();

        $this->load->view('homes');
        // checking if information is being sent
        // var_dump($this->input->post());
        // die();
    }

}

//end of main controller