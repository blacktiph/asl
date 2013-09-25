<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

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

	public function missionStatement() {
		$pageName = "Our Mission";
		$pageDescription = "The Blacktip Challenge is an exciting and beneficial combination of competitive sport fishing, adventure, entertainment, scientific research and educations";
		$keywords = "about, us, mission, statement, our, blacktip, challenge, shark, fishing, tournament, florida, saltwater";

		$this->viewLoader('missionStatement', $pageName, $pageDescription, $keywords);
	}

	public function history() {
		$pageName = "History";
		$pageDescription = "The history of the Blacktip Challenge shark fishing tournament in Florida";
		$keywords = "blacktip, challenge, history, shark, fishing, tournament, saltwater, josh, jorgensen, sean, brooks, paxton, how, to, do, florida, tv, show";

		$this->viewLoader('history', $pageName, $pageDescription, $keywords);
	}

	public function partners() {
		$pageName = "Partners";
		$pageDescription = "These organizations have contributed to the integrity of the Blacktip Challenge";
		$keywords = "partners, partner, organizations, blacktip, challenge, help, support, noaa, ilsfa, apex, predator, program, shark, tournament, fishing";

		$this->viewLoader('partners', $pageName, $pageDescription, $keywords);
	}

	public function sponsors() {
		$pageName = "Sponsors";
		$pageDescription = "These are the sponsors that make the Blacktip Challenge shark fishing tournament possible";
		$keywords = "sponsor, sponsors, tournament sponsors, eagle, claw, lazer, south, florida, shark club, luna, rosa, tackle, snook, nook, blackfin, rods, roller, guides, all american, barrett, bull buster, custom, support, noaa, ilsfa, apex, predator, program, shark, tournament, fishing, okuma, yeti, yeti coolers, okuma fishing";

		$this->viewLoader('sponsors', $pageName, $pageDescription, $keywords);
	}

	public function accommodations() {
		$pageName = "Accommodations";
		$pageDescription = "Whether your looking for a place to stay or a kayak to rent, below is a list of suggestions from the staff at the Blacktip Challenge shark fishing tournament";
		$keywords = "accommodations, kayak, rentals, hotels, motels, beds, eletric, charger, tournament, housing, rent, boat, blacktip, challenge";

		$this->viewLoader('accommodations', $pageName, $pageDescription, $keywords);
	}

	public function media() {
		$pageName = "Media";
		$pageDescription = "The Blacktip Challenge has been covered in various media groups, including: SpiegelTV, Global Angler, and Sun Newspapers";
		$keywords = "media, blacktip, challenge, news, tv, newspaper, magazine, article, online, blog, video, print, attention";

		$this->viewLoader('media', $pageName, $pageDescription, $keywords);
	}
}