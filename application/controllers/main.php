<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('books');
	}

	public function books()
	{

	}

	public function add()
	{

	}

	public function book_review()
	{

	}

	public function users_review()
	{

	}
}

//end of main controller