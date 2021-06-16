<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

    public function getComments($bookId) {
        $this->db->select('comments.*, users.username');
        $this->db->join('users', 'users.id = comments.user_id');
        $this->db->where('comments.book_id', $bookId);
        $this->db->order_by('comments.created_at', 'DESC');
        $query = $this->db->get('comments');

        return $query->result();
    }

    public function addCommect($bookId, $comment) {
        $instertData = [
            'user_id' => $this->session->userdata('user_id'),
            'book_id' => $bookId,
            'comment' => $comment
        ];

        $this->db->insert('comments', $instertData);
    }

}