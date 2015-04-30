<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
    }

    public function index()
    {
        $this->load->view('books');
    }


}

//end of main controller