<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
    /*
    public function getComments($bookId) {
        $this->db->select('comments.*, users.username');
        $this->db->join('users', 'users.id = comments.user_id');
        $this->db->where('comments.book_id', $bookId);
        $this->db->order_by('comments.created_at', 'DESC');
        $query = $this->db->get('comments');

        return $query->result();
    }
    */
    public function addTicket($subject, $value) {
        $instertData = [
            'user_id' => $this->session->userdata('user_id'),
            'subject' => $subject,
            'value' => $value
        ];

        $this->db->insert('tickets', $instertData);
    }

}