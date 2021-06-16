<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
        $this->load->library("pagination");
		$this->load->model('user_model');
        $this->load->model('books_model');
        $this->load->model('comments_model');
	}

    public function index() {
        $data = [];

        $config = array();
        $config["base_url"] = base_url('books');
        $config["total_rows"] = $this->books_model->get_count();
        $config["per_page"] = 9;
        $config["uri_segment"] = 2;
        $config['attributes'] = array('class' => 'page-link');
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Poprzednia';
        $config['next_link'] = 'Następna';
        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        


        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['page'] = 'Książki';
        $data['books'] = $this->books_model->getBooks($config["per_page"], $page);

        $this->load->view('template/header', $data);
        $this->load->view('books/index');
        $this->load->view('template/footer');
    }

    public function book($bookId) {
        $data = [];

        $data['page'] = 'Książki';
        $data['book'] = $this->books_model->getBook($bookId);
        $data['comments'] = $this->comments_model->getComments($bookId);
        $data['fav_status'] = $this->books_model->getFavoriteStatus($bookId, $this->session->userdata('user_id'));


        $this->load->view('template/header', $data);
        $this->load->view('books/view');
        $this->load->view('template/footer');
    }

    public function add_book() {
        if(!$this->user_model->checkAuthStatus()) {
            redirect('/login');
            exit();
        }
        $data = [];

        $data['page'] = 'Dodawanie nowej książki do bazy';

        $this->load->view('template/header', $data);
        $this->load->view('books/add_book');
        $this->load->view('template/footer');
    }

    public function add_book_action() {
        if(!$this->user_model->checkAuthStatus()) {
            redirect('/login');
            exit();
        }

        $title = $this->input->post('title');
        $author = $this->input->post('author');
        $genre = $this->input->post('genre');
        $description = $this->input->post('description');

        if(empty($title) || empty($author) || empty($genre) || empty($description)) {
            $this->session->set_flashdata('add_error', 'Brak danych');
            redirect('add_book');
            exit();
        } 


        $file = '';
        $poster = '';


        $config['upload_path']          = './storage/books/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg|jiff';
        $config['max_size']             = 307200000;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

    
        if ($this->upload->do_upload('pdf')) {
            $data = $this->upload->data();
            $file = $data['file_name'];
        } else {
            $this->session->set_flashdata('add_error', 'Problem z dodawaniem pliku');
            redirect('add_book');
            exit();
        }

        if ($this->upload->do_upload('poster')) {
            $data = $this->upload->data();
            $poster = $data['file_name'];
        } else {
            $this->session->set_flashdata('add_error', 'Problem z dodawaniem okładki');
            redirect('add_book');
            exit();
        }

        $this->books_model->createBook($title, $description, $poster, $file, $author, $genre);

        redirect('/');
    }

    public function add_comment($bookId) {
        if(!$this->user_model->checkAuthStatus()) {
            redirect('/login');
            exit();
        }
        $comment = $this->input->post('comment');

        if(empty($comment)) {
            redirect('/');
            exit();
        }

        $this->comments_model->addCommect($bookId, $comment);

        redirect('/book/' . $bookId);
    }

    public function favorite($bookId, $status) {
        if($status == 1) {
            $instertData = [
                'user_id' => $this->session->userdata('user_id'),
                'book_id' => $bookId
            ];
    
            $this->db->insert('favorite', $instertData);
        } elseif ($status == 0) {
            $this->db->where('book_id', $bookId);
            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->delete('favorite');
        }

        redirect('book/' . $bookId);
    }

}