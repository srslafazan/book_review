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
        $this->load->view('reviews');
    }

    public function add_book_reviews()
    {
    	$this->Signin->add_book_review($this->input->post());

    	// checking if data is being sent from view
    	// var_dump($this->input->post());
    	// die();


    	redirect('books');

    }

}

//end of main controller