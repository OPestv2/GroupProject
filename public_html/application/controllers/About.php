<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class About extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
	}

    public function index() {
        $data['page'] = 'O nas';

        $this->load->view('template/header', $data);
        $this->load->view('about/index');
        $this->load->view('template/footer');
    }

}