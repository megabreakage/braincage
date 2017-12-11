<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function view($page='index'){

    $data['title'] = ucfirst($page);

		$data['posts'] = $this->profile_model->get_posts();

    //load various views
		$this->load->view('templates/header', $data );
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
  }
}
