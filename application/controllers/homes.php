<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('Signin');
	}

	public function index()
	{
		$this->load->view('homes');
	}

	// displaying all book name in overflow box on the left side
    public function book_displays()
    {
    	$display_books = $this->Signin->get_all_books();
    	
    	// var_dump($display_books);
    	// die();
    	
    	$this->load->view('homes', array('display_books'=>$display_books));
    }

}

//end of main controller