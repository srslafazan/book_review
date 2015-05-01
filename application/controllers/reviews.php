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
        echo "book added!";
    	$this->Signin->add_book_review($this->input->post());

    	// checking if data is being sent from view
    	// var_dump($this->input->post());
    	// die();

    	// redirect('/');
    }

    // public function add_review()
    // {
    //     echo "review added!";
    //     $this->Signin->add_reviews($this->input->post());

    //     var_dump($this->input->post());
    //     die();
    // }

}

//end of main controller