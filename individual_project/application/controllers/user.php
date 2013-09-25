<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	private $_cssLink = "/asl_project/css/screen.css";

	public function viewLoader($pageLink, $pageName, $pageDescription, $keywords){
		$metaData = array();
		$metaData['site_title'] = "Blacktip Challenge Shark Tournament | ".$pageName;
		$metaData['pageDescription'] = $pageDescription;
		$metaData['keywords'] = $keywords;

		// var_dump($metaData);
		// var_dump('Page Link:'.$pageLink);

		$metaData['cssLink'] = $this->_cssLink;

		// echo '-------======<br>';
		$this->load->view('header', $metaData);
		// echo '_____======<br>';
		$this->load->view($pageLink, $metaData);
		// echo '+++++++======<br>';
		$this->load->view('footer');
		$this->load->view('sponsorMap');
	}

	public function login() {
		$pageName = "User Login";
		$pageDescription = "Users must login in order to submit an entry";
		$keywords = "user, login, blacktip, challenge";

		//Load Libraries | Form Validation,
		$this->load->library('form_validation');

		//Load Helpers | Form,
		$this->load->helper('form');

		//Load the Model
		$this->load->model('Register');

		//Form Validation
		$this->form_validation->set_rules(array(
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'trim|required|max_length[50]',
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|required|max_length[50]|callback_check_database',
			),
		));

		//Set Error Delimiters
		$this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>');

		if(!$this->form_validation->run()) {
			$this->viewLoader('login', $pageName, $pageDescription, $keywords);
		}
		else {
			// var_dump($pageName, $pageDescription, $keywords);
			$this->viewLoader('submit_entry', $pageName, $pageDescription, $keywords);
		}
	}

	public function register() {
		$pageName = "User Registration";
		$pageDescription = "Users must register in order to submit an entry for the tournament";
		$keywords = "user, register, registration, blacktip, challenge";

		//Load Libraries | Form Validation,
		$this->load->library('form_validation');

		//Load Helpers | Form,
		$this->load->helper('form');

		//Load the Model
		$this->load->model('Register');

		//Form Validation
		$this->form_validation->set_rules(array(
			array(
				'field' => 'team_name',
				'label' => 'Team Name',
				'rules' => 'required|max_length[50]',
			),
			array(
				'field' => 'angler_1',
				'label' => 'Team Captain',
				'rules' => 'required|callback_checkName',
			),
			array(
				'field' => 'angler_1_age',
				'label' => 'Team Captain Age',
				'rules' => 'required|is_natural',
			),
			array(
				'field' => 'angler_2',
				'label' => 'Angler 2',
				'rules' => 'callback_checkName',
			),
			array(
				'field' => 'angler_2_age',
				'label' => 'Angler 2 Age',
				'rules' => 'is_natural',
			),
			array(
				'field' => 'angler_3',
				'label' => 'Angler 3',
				'rules' => 'callback_checkName',
			),
			array(
				'field' => 'angler_3_age',
				'label' => 'Angler 3 Age',
				'rules' => 'is_natural',
			),
			array(
				'field' => 'angler_4',
				'label' => 'Angler 4',
				'rules' => 'callback_checkName',
			),
			array(
				'field' => 'angler_4_age',
				'label' => 'Angler 4 Age',
				'rules' => 'is_natural',
			),
			array(
				'field' => 'angler_5',
				'label' => 'Angler 5',
				'rules' => 'callback_checkName',
			),
			array(
				'field' => 'angler_5_age',
				'label' => 'Angler 5 Age',
				'rules' => 'is_natural',
			),
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|max_length[50]',
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[50]',
			),
		));

		//Set Error Delimiters
		$this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>');

		if(!$this->form_validation->run()) {
			$this->viewLoader('user_register', $pageName, $pageDescription, $keywords);
		}
		else {
			//User Input
			$register = new Register();
			$register->team_name = $this->input->post('team_name');

			$register->angler_1 = $this->input->post('angler_1');
			$register->angler_1_age = $this->input->post('angler_1_age');

			$register->angler_2 = $this->input->post('angler_2');
			$register->angler_2_age = $this->input->post('angler_2_age');

			$register->angler_3 = $this->input->post('angler_3');
			$register->angler_3_age = $this->input->post('angler_3_age');

			$register->angler_4 = $this->input->post('angler_4');
			$register->angler_4_age = $this->input->post('angler_4_age');

			$register->angler_5 = $this->input->post('angler_5');
			$register->angler_5_age = $this->input->post('angler_5_age');

			$register->username = $this->input->post('username');

			$this->load->library('encrypt');
			// $register->password = $this->encrypt->encode($this->input->post('password'));
			$hashPassword = md5($this->input->post('password'));
			$register->password = $hashPassword;

			// $register->password = $this->input->post('password');

			//Save and show success
			$register->save();
			$this->viewLoader('register_success', $pageName, $pageDescription, $keywords);
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
	== Check Database
	*/
	function check_database($password) {
        
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //Load the Model
		$this->load->model('Register');
		$register = new Register();

        //query the database
        $result = $register->login($username, $password);

        if($result) {
            $session_array = array();

            foreach($result as $row) {
                $session_array = array(
                    'user_id' => $row->user_id,
                    'username' => $row->username
                );
                $this->session->set_userdata('logged_in', $session_array);
            }

            return TRUE;
        }
        else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}