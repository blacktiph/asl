<?php

class Register extends MY_Model {

	const DB_TABLE = 'register';
	const DB_TABLE_PK = 'user_id';

	//unique identifier
	public $user_id;
	
	//== Team Name
	//@var = String
	public $team_name;

	//== Angler 1
	//@var = String
	public $angler_1;

	//== Angler 1 Age
	//@var = String
	public $angler_1_age;

	//== Angler 2
	//@var = String
	public $angler_2;

	//== Angler 2 Age
	//@var = String
	public $angler_2_age;

	//== Angler 3
	//@var = String
	public $angler_3;

	//== Angler 3 Age
	//@var = String
	public $angler_3_age;

	//== Angler 4
	//@var = String
	public $angler_4;

	//== Angler 4 Age
	//@var = String
	public $angler_4_age;

	//== Angler 5
	//@var = String
	public $angler_5;

	//== Angler 5 Age
	//@var = String
	public $angler_5_age;

	//== Username
	//@var = String
	public $username;

	//== Password
	//@var = String
	public $password;

	function login($username, $password) {
		$this->db->select('user_id, username, password');
		$this->db->from('register');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);

		$query = $this->db->get();
		// var_dump($query);
		if($query->num_rows() == 1) {
			return $query->result();
		}
		else {
			return false;
		}
	}
}

?>