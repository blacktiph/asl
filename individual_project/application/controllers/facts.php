<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facts extends CI_Controller {

	private $_cssLink = "/asl_project/css/screen.css";

	public function viewLoader($pageLink, $pageName, $pageDescription, $keywords){
		$metaData = array();
		$metaData['site_title'] = "Blacktip Challenge Shark Tournament | ".$pageName;
		$metaData['pageDescription'] = $pageDescription;
		$metaData['keywords'] = $keywords;

		$metaData['cssLink'] = $this->_cssLink;

		$this->load->view('header', $metaData);
		$this->load->view($pageLink, $metaData);
		$this->load->view('footer');
		$this->load->view('sponsorMap');
	}

	public function largestSharks() {
		$pageName = "Largest Sharks Caught";
		$pageDescription = "These are the largest sharks that have been caught by anglers fishing in the Blacktip Challenge shark fishing tournament";
		$keywords = "sharks, shark, largest, biggest, monster, tournament, winning, big sharks, largest sharks, large, fish, blacktip, challenge";

		$this->viewLoader('largestSharks', $pageName, $pageDescription, $keywords);
	}

	public function previousWinners() {
		$pageName = "Previous Winners";
		$pageDescription = "These are the previous winners of past Blacktip Challenge shark fishing tournaments";
		$keywords = "winners, previous, blacktip, challenge, shark, trophy, trophies, best anglers, best, angler, tournament, tournament winners";

		$this->viewLoader('previousWinners', $pageName, $pageDescription, $keywords);
	}
}