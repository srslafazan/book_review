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
		$id_query = "SELECT id FROM users WHERE users.email = ?";

		return $this->db->query($id_query, $email)->row_array();
	}

	// adding book on the 'reviews' page
	public function add_review_book($post)
	{
		$author = $post['author'];
		$book_name = $post['name'];

		$add_book_query = "INSERT INTO books(author, name) VALUES(?,?)";

		return $this->db->query($add_book_query, array($author, $book_name));
	}

}

//end of model