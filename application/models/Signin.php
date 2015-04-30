<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Model {

	// front page registeration
	public function registration()
	{
		$name = $post['name'];
		$alias = $post['alias'];
		$email = $post['email'];
		$password = $post['password'];
		
		$register_query = "INSERT INTO users(name, alias, email, password) VALUES (?,?,?,?)";

		$this->db->query($register_query, array($name, $alias, $email, $password));

		return $register_query = "SELECT FROM user WHERE user.id = ?";
	}


}

//end of model