<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Model {

	// front page registeration
	public function registration($post)
	{
		$name = $post['name'];
		$alias = $post['alias'];
		$email = $post['email'];
		$password = $post['password'];

		$register_query = "INSERT INTO users(name, alias, email, password) VALUES (?,?,?,?)";

		$this->db->query($register_query, array($name, $alias, $email, $password));


		// select users.email to display their info
		$id_query = "SELECT * FROM users WHERE users.email = ?";

		return $this->db->query($id_query, $email)->row_array();
	}


	// adding book on the 'books' view page
	public function add_book_review($post)
	{
		$author = $post['author'];
		$book_name = $post['name'];

		$review = $post['review'];
		$rating = $post['rating'];

		// adding 2 queries to insert to 'books' and 'reviews' table
		$add_book_query = "INSERT INTO books(author, name) VALUES(?,?)";

		$add_review_query = "INSERT INTO reviews(review, rating, created_at) VALUES(?,?, NOW())";

		// echo $add_book_query;
		$this->db->query($add_book_query, array($author, $book_name)) 
		// '?' evulating if it's true
		// shorthand 'if' statement
		? $this->db->query($add_review_query, array($review, $rating)) 
		:FALSE;
	}

	public function login($post)
	{
		// var_dump($post['email']);
		// die();
		$email_address = $post['email'];
		$password = $post['password'];
		$query = "SELECT * FROM users WHERE users.email = ?";
		return $this->db->query($query, array($email_address))->row_array();
	}


	public function get_all_books_authors()
	{
		$get_books_authors_query = "SELECT * FROM books";
		
		return $this->db->query($get_books_authors_query)->result_array();

	}

	public function display_top3_reviews()
	{
		$query = "SELECT books.name as book_name, reviews.rating as book_rating, users.id as reviewer_id, users.name as reviewer_name, reviews.review as review, reviews.created_at as date FROM books 
			LEFT JOIN reviews ON books.id = reviews.book_id 
			LEFT JOIN users ON users.id = reviews.user_id ORDER BY created_at DESC LIMIT 3";

		return $this->db->query($query)->result_array();
	}

	public function get_user_profiles()
	{
		$get_user_profile = "SELECT * FROM users";

		return $this->db->query($get_user_profile)->result_array();
	}


}
//end of model