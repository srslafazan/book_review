<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Signin');
	}

	 public function index()
    {
        $this->load->view('homes');
    }

}

//end of main controller