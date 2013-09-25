<?php

class Angler extends MY_Model {

	const DB_TABLE = 'angler';
	const DB_TABLE_PK = 'angler_id';

	//unique identifier
	public $angler_id;
	
	//== Team Name
	//@var = String
	public $team_name;

	//== Angler Name
	//@var = String
	public $angler_name;

	//== Shark Species
	//@var = String
	public $shark_species;

	//== Overall Length
	//@var = Int
	public $overall;

	//== Fork Length
	//@var = Int
	public $fork;

	//== Girth
	//@var = Int
	public $girth;

	//== Entry Time
	//@var = String
	public $entry_time;

	//== Entry Date
	//@var = String
	public $entry_date;

	//== Weight
	//@var = String
	public $weight;
}

?>