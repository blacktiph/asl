<?php

class Nonshark extends MY_Model {

	const DB_TABLE = 'nonshark';
	const DB_TABLE_PK = 'angler_id';

	//unique identifier
	public $angler_id;

	//== Angler Name
	//@var = String
	public $angler_name;

	//== Overall Length
	//@var = Int
	public $overall_length;

	//== Fish Species
	//@var = String
	public $fish_species;

	//== Entry Time
	//@var = String
	public $entry_time;
}

?>