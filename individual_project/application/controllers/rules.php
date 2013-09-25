<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rules extends CI_Controller {

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

	public function rulesAndRegulations() {
		$pageName = "Rules &#38; Regulations";
		$pageDescription = "Here is the rules and regulations for the blacktip challenge shark fishing tournament";
		$keywords = "rules, regulations, law, blacktip, challenge, tournament, guidelines, information, angler";

		$this->viewLoader('rulesAndRegulations', $pageName, $pageDescription, $keywords);
	}

	public function registration() {
		$pageName = "Tournament Registration";
		$pageDescription = "How to register to participate in the Blacktip Challenge shark fishing tournament";
		$keywords = "registration, how to enter, enter, participate, sign-up, sign, up, join, register, how to fish, blacktip, challenge, fishing, tournament";

		$this->viewLoader('registration', $pageName, $pageDescription, $keywords);
	}

	public function prizes() {
		$pageName = "Prizes";
		$pageDescription = "Prizes that will be paid out to the winning anglers";
		$keywords = "fishing, prizes, tournament, prize, awards, trophies, trophy, award, blacktip, challenge";

		$this->viewLoader('prizes', $pageName, $pageDescription, $keywords);
	}
}