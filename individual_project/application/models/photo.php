<?php

class Photo extends MY_Model {

	const DB_TABLE = 'photo';
	const DB_TABLE_PK = 'photo_id';

	//unique identifier
	public $photo_id;

	//== Overall Length | Close-up
	//@var = String
	//@var = Date
	public $overall_closeUp_photo;
	public $overall_closeUp_date;

	//== Overall Length | Wide
	//@var = String
	//@var = Date
	public $overall_wide_photo;
	public $overall_wide_date;

	//== Fork Length
	//@var = String
	//@var = Date
	public $fork_photo;
	public $fork_date;

	//== Girth
	//@var = String
	//@var = Date
	public $girth_photo;
	public $girth_date;

	//== Fighting
	//@var = String
	//@var = Date
	public $fighting_photo;
	public $fighting_date;

	//== Angler
	//@var = String
	//@var = Date
	public $angler_photo;
	public $angler_date;
}

?>