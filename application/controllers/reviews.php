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

    public function home()
    {

        // maybe need to be deleted

        $id = $this->Signin->registration($this->input->post());
        $post = $this->input->post();
        $results = $this->Signin->registration($post);

        var_dump($results);

        $reviews = $this->Signin->display_top3_reviews();
        $display_books = $this->Signin->get_all_books_authors();
        
        $this->load->view('homes', array('reviews' => $reviews, 'display_books'=>$display_books, 'results' => $results));
    }
}

//end of main controller