<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Search extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
        $this->load->model('books_model');
	}

    public function results() {
        $data['page'] = 'Wyniki wyszukiwania';

        $search = $this->input->post('search');

        if(empty($search)) {
            redirect('/');
            exit();
        }


        $this->db->like('title', $search);
        $this->db->or_like('description', $search);
        $this->db->or_like('author', $search);
        $query = $this->db->get('books');

        $data['books'] = $query->result();
        $data['search'] = $search;

        $this->load->view('template/header', $data);
        $this->load->view('search/results');
        $this->load->view('template/footer');
    }

}