<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
        $this->load->model('Signin');
    }

    public function index()
    {
        $display_authors = $this->Signin->get_all_books_authors();

        $this->load->view('reviews', array('display_authors'=>$display_authors));
    }

    public function add_book_reviews()
    {
    	$this->Signin->add_book_review($this->input->post());

    	// checking if data is being sent from view
    	// var_dump($this->input->post());
    	// die();
    	// redirect('books');
    }
}

//end of main controller