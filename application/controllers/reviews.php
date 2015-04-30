<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler();
        $this->load->model('Signin');
    }

    public function index()
    {
        $this->load->view('signins');
    }

    public function add_book($post)
    {
    	$this->Signin->add_review_book($this->input->post());

    	// checking if data is being sent to view
    	var_dump($this->input->post());
    	die();

    	// redirect('/');
    }

}

//end of main controller