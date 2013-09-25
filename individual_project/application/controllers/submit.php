<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submit extends CI_Controller {

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

	public function addEntry() {
		$pageName = "Submit Entry";
		$pageDescription = "Sumission App for the Blacktip Challenge land-based shark fishing tournament on the Atlantic Coast of Florida";
		$keywords = "submit, entry, shark, fish";

		//Set Time Zone
		date_default_timezone_set('America/New_York');
		$time = date('h:i:s a', time());
		$date = date('F j, Y', time());
		// echo $date;

		//Image Uploading Options
		$config = array(
			'upload_path' => 'upload',
			'allowed_types' => 'gif|jpg|jpeg|png',
			'max_size' => 10000,
			'overwrite' => TRUE,
		);

		//Load Libraries | Upload, Form Validation,
		$this->load->library('upload', $config);
		$this->load->library('form_validation');

		//Load Helpers | Form,
		$this->load->helper('form');

		//Load the Model
		$this->load->model('Angler');
		$entryData = $this->Angler->get();

		//Form Validation
		$this->form_validation->set_rules(array(
			array(
				'field' => 'angler_name',
				'label' => 'Angler Name',
				'rules' => 'required|callback_checkName',
			),
			array(
				'field' => 'team_name',
				'label' => 'Team Name',
				'rules' => 'required|max_length[50]',
			),
			array(
				'field' => 'shark_species',
				'label' => 'Shark Species',
				'rules' => 'required',
			),
			array(
				'field' => 'overall',
				'label' => 'Overall Measurement',
				'rules' => 'required|numeric|max_length[10]',
			),
			array(
				'field' => 'fork',
				'label' => 'Fork Measurement',
				'rules' => 'required|numeric|max_length[10]',
			),
			array(
				'field' => 'girth',
				'label' => 'Girth Measurement',
				'rules' => 'numeric|max_length[10]|callback_checkGirth',
			),
		));

		//Set Error Delimiters
		$this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>');

		//File Uploader
		$check_file_upload = FALSE;

		if (isset($_FILES['angler_photo']['error'])) {
			$check_file_upload = TRUE;
			$upload_data = $this->upload->data();

			// echo '==== isset';
			// var_dump($upload_data);
		}
		if(
			!$this->form_validation->run() ||
			($check_file_upload && !$this->upload->do_upload('angler_photo'))
		) {
			$this->viewLoader('submit_entry', $pageName, $pageDescription, $keywords);
			$upload_data = $this->upload->data();

			// echo '====!!!!!!!';
			// var_dump($upload_data);
		}
		else {
			//User Input
			$angler = new Angler();
			$angler->angler_name = $this->input->post('angler_name');
			$angler->team_name = $this->input->post('team_name');
			$angler->shark_species = $this->input->post('shark_species');
			$angler->overall = $this->input->post('overall');
			$angler->fork = $this->input->post('fork');
			$angler->girth = $this->input->post('girth');

			//Estimated Weight
			$formula = ($angler->fork * ($angler->girth * $angler->girth))/800;

			if($angler->shark_species == 'blacktip'){
				$angler->weight = $formula;
			}
			else {
				$angler->weight = 0;
			}

			//Time
			$angler->entry_time = $time;

			//Date
			$angler->entry_date = $date;

			//Image Uploads
			$this->load->model('Photo');
			$photo = new Photo();
			$metaDataTime = '4:50pm';
			$upload_data = $this->upload->data();

			// echo '====';
			// var_dump($upload_data);

			if(isset($upload_data['file_name'])){
				$photo->angler_photo['file_name'];
			}

			$photo->angler_photo = '/asl_project/upload/' . $upload_data['file_name'];
			$photo->angler_date = $metaDataTime;

			// var_dump($angler);

			//Save and show success
			$angler->save();
			$photo->save();

			$pageName = "Submission Success";
			$pageDescription = "Your entry submission was accepted";
			$keywords = "submit, entry, success";

			$metaData = array();
			$metaData['site_title'] = "Blacktip Challenge Shark Tournament | ".$pageName;
			$metaData['pageDescription'] = $pageDescription;
			$metaData['keywords'] = $keywords;
			$metaData['cssLink'] = $this->_cssLink;

			$this->load->view('header', $metaData);
			$this->load->view('entry_success', array(
				'angler' => $angler,
				'photo' => $photo,
			));
			$this->load->view('footer');
			$this->load->view('sponsorMap');
		}
	}

	/*
	== Create custom error with regular expression and custom error message
	*/
	public function checkName($str){
		if(preg_match("/^[a-zA-Z ]+$/", $str)){
			// echo 'true';
			return TRUE;
		}
		else {
			// echo 'false';
			// var_dump($str);

			if($str == null) {
				return TRUE;
			}
			else {
				$this->form_validation->set_message('checkName', 'The %s field contains illegal characters');
				return FALSE;
			}
		}
	}

	/*
	== Girth Validation for Blacktips
	*/
	public function checkGirth($str){
		$this->load->model('Angler');
		$angler = new Angler();
		$angler->shark_species = $this->input->post('shark_species');

		if($angler->shark_species == 'blacktip' && $str == null){
			$this->form_validation->set_message('checkGirth', 'The girth measurement is required for blacktip sharks');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}

}