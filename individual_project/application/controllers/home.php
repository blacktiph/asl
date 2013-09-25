<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function index(){
		$pageName = "Home";
		$pageDescription = "The Blacktip Challenge is a research-driven land-based shark fishing tournament in Florida";
		$keywords = "blacktip, challenge, shark, fishing, tournament, saltwater, ocean, big-game, big, game, blacktips, sharks, florida, btc";

		$this->viewLoader('home', $pageName, $pageDescription, $keywords);
	}

	public function contactUs() {
		$pageName = "How to Measure a Shark";
		$pageDescription = "If you need to know how to properly measure a shark this page explains the procedure step by step";
		$keywords = "shark, measurement, measure, how, to, howto, step, by, explanation, explain, procedure, blacktip, challenge, fishing, fork, girth, overall, total, length, inches";

		$this->viewLoader('contactUs', $pageName, $pageDescription, $keywords);
	}
}