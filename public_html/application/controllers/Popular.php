<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Popular extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
        $this->load->model('books_model');
	}

    public function index() {
        $data['page'] = 'Popularne';
        $data['books'] = $this->books_model->getPopular();

        $this->load->view('template/header', $data);
        $this->load->view('profile/books');
        $this->load->view('template/footer');
    }

}