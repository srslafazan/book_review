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

		// var_dump($post);
		// die();

		// adding 2 queries to insert to 'books' and 'reviews' table
		$add_book_query = "INSERT INTO books(author, name) VALUES(?,?)";

		$add_review_query = "INSERT INTO reviews(review, rating, created_at) VALUES(?,?, NOW())";


		// echo $add_book_query;
		return $this->db->query($add_book_query, array($author, $book_name, $review, $rating));
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

	// public function login_reg()
	// {
	// 	$query = "SELECT * FROM users WHERE users.email = ?";
	// 	return $this->db->query($query, array($post))->row_array();
	// }

}

//end of model