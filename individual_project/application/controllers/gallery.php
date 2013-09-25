<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function year($year) {
		$pageName = "Image Gallery | $year";
		$pageDescription = "Sharks caught by anglers during the $year Blacktip Challenge shark fishing tournament in Florida";
		$keywords = "gallery, sharks, blacktip, challenge, $year, bull, blacktip, photos, images, photo, image";;
		$cssLink = "/asl_project/css/screen.css";

		$metaData = array();
		$metaData['site_title'] = "Blacktip Challenge Shark Tournament | ".$pageName;
		$metaData['pageDescription'] = $pageDescription;
		$metaData['keywords'] = $keywords;
		$metaData['cssLink'] = $cssLink;

		$this->load->view('header', $metaData);
		$this->load->view($year, $metaData);
		$this->load->view('footer');
		$this->load->view('sponsorMap');

		// var_dump($metaData);
	}
}