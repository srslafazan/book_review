<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signins extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Signin');
        // $this->output->enable_profiler();
        
//login that checks sql
    }

    public function index()
    {
        $this->load->view('signins');
    }

    public function user_registration()
    {
        // adding $id after statements carries the id to the 'home' page
        $id = $this->Signin->registration($this->input->post());

        // printing out results
        $post = $this->input->post();
        $results = $this->Signin->registration($post);

        // passing the key 'user_id'
        $this->session->set_userdata('user_id', $id);
        // checking if id is passed to 'home' page
        // var_dump($results);
        // die();


        $this->load->view('homes', array('results'=>$results));
        // checking if information is being sent
        // var_dump($this->input->post());
        // die();
    }

    public function load_home($results)
    {
        $reviews = $this->Signin->display_top3_reviews();
        $display_books = $this->Signin->get_all_books_authors();
        
        $this->load->view('homes', array('reviews' => $reviews, 'display_books'=>$display_books, 'results' => $results));


    }

    public function user_login()
    {
        $post = $this->input->post();
        $results = $this->Signin->login($post);

        $id = $this->Signin->login($this->input->post());
        $this->session->set_userdata('user_id', $id);
        //login that checks sql

        if($results && $post['password'] == $results['password'])
        {
            $this->load_home($results);
        }
        else
        {
            redirect('/');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        redirect('/');

    }

}

//end of main controller