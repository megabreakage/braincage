<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login() {

		// form input validations
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {

      $user = $this->auth_model->login_user();

      //if user exists
      if($user){
        // temporary message
        $this->session->set_flashdata("success", "You are Logged in");

        //set session variables
        $_SESSION['user_logged'] = TRUE;
        $_SESSION['username'] = $user->username; //to retrieve the a username for the next page
				$_SESSION['id'] = $user->id;

        // redirect to profile page
        redirect("auth/profile", "refresh");
      }else {
        $this->session->set_flashdata("error", "Invalid username or password");
        redirect("auth/login", "refresh");
      }
    }

		// load views
		$this->load->view('templates/header');
		$this->load->view('auth/login');
	}

	public function account(){
		$this->load->view('templates/header');
		$this->load->view('auth/ac_type');
	}

	public function sponsor(){

		$this->register->reg_standard();

		$this->load->view('templates/header');
		$this->load->view('auth/standard');
	}

	public function standard(){
		if(isset($_POST['register'])) {
			//form inputs validations
			$this->form_validation->set_rules('fname', 'first name', 'required');
			$this->form_validation->set_rules('lname', 'last name', 'required');
			$this->form_validation->set_rules('id_num', 'ID number', 'required');
			$this->form_validation->set_rules('country', 'country', 'required');
			$this->form_validation->set_rules('code', 'phone_code', 'required|max_length[3]');
			$this->form_validation->set_rules('cell', 'phone number', 'required');
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'password', 'required|min_length[5]');
			$this->form_validation->set_rules('password', 'confirm password', 'required|min_length[5]|matches[password]');

			if ($this->form_validation->run() == TRUE) {
				if ($this->input->post('membership') == 2 || $this->input->post('membership') == 3) {
					redirect("auth/pesapal", "refresh");

					$this->auth_model->reg_peacock();
					$this->session->set_flashdata("success", "Your have been registered Successfully!");
				} else {
					$this->auth_model->reg_peacock();
					$this->session->set_flashdata("success", "Your have been registered Successfully!");
				}
			}
		}

		$this->load->view('templates/header');
		$this->load->view('auth/standard');
	}

	public function register(){
		$this->load->view('templates/header');
		$this->load->view('auth/register');
	}

	public function pesapal(){
		$this->load->view('templates/header');
		$this->load->view('pesapal/pesapal');
		$this->load->view('templates/footer');
	}

	public function profile(){
		$data['fetch'] = $this->auth_model->fetch_data();

		$this->load->view('templates/header');
		$this->load->view('auth/profile', $data);
		$this->load->view('templates/footer');
	}

	public function products(){
		$this->load->view('templates/header');
		$this->load->view('auth/products');
		$this->load->view('templates/footer');
	}

	public function product_details(){
		$this->load->view('templates/header');
		$this->load->view('auth/product_details');
		$this->load->view('templates/footer');
	}
	public function logout(){
		unset($_SESSION['user_logged']);
		redirect("auth/login", "refresh");
	}
}
