<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shark extends CI_Controller {

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

	public function measuring() {
		$pageName = "How to Measure a Shark";
		$pageDescription = "If you need to know how to properly measure a shark this page explains the procedure step by step";
		$keywords = "shark, measurement, measure, how, to, howto, step, by, explanation, explain, procedure, blacktip, challenge, fishing, fork, girth, overall, total, length, inches";

		$this->viewLoader('measuring', $pageName, $pageDescription, $keywords);
	}

	public function sharkTagging() {
		$pageName = "How to Tag a Shark";
		$pageDescription = "Here is a great description on how to properly tag a shark";
		$keywords = "tag, tagging, shark, tags, step, by, howto, how, to, noaa, apex, predator, length, girth, dorsal, fin, needle, dart";

		$this->viewLoader('sharkTagging', $pageName, $pageDescription, $keywords);
	}

	public function migration() {
		$pageName = "Blacktip Migration";
		$pageDescription = "The winter blacktip migration on Florida's east coast attracts media attention across the world. 1000's of sharks close the beaches every year";
		$keywords = "blacktip, migration, florida, east, coast, media, close, beach, danger, sharks, shark, beaches, 1000's, thousands, winter";

		$this->viewLoader('migration', $pageName, $pageDescription, $keywords);
	}
}