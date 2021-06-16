<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

    public function get_count() {
        return $this->db->count_all('books');
    }

    public function getBooks($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('books');

        return $query->result();
    }

    public function getBook($bookId) {
        $this->db->where('id', $bookId);
        $query = $this->db->get('books');

        return $query->row();
    }

    public function getFavoriteStatus($bookId, $userId) {
        $this->db->where('book_id', $bookId);
        $this->db->where('user_id', $userId);
        $query = $this->db->get('favorite');

        return $query->num_rows();
    }

    public function getFavoriteBooks($userId) {
        $this->db->select('books.*, favorite.user_id');
        $this->db->join('books', 'books.id = favorite.book_id');
        $this->db->where('favorite.user_id', $userId);
        $query = $this->db->get('favorite');

        return $query->result();
    }

    public function getPopular() {
        $this->db->having('(SELECT count(*) from comments WHERE book_id = books.id) > 0');
        $query = $this->db->get('books');

        return $query->result();
    }

    public function createBook($title, $description, $poster, $file, $author, $genre) {
        $instertData = [
            'user_id' => $this->session->userdata('user_id'),
            'title' => $title,
            'description' => $description,
            'poster' => $poster,
            'file' => $file,
            'author' => $author,
            'genre' => $genre
        ];

        $this->db->insert('books', $instertData);
    }



}