<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tickets extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
        $this->load->model('tickets_model');
        if(!$this->user_model->checkAuthStatus()) {
            redirect('/login');
            exit();
        }
	}

    public function new() {
        $data['page'] = 'Nowe zgłoszenie';

        $this->load->view('template/header', $data);
        $this->load->view('tickets/new');
        $this->load->view('template/footer');
    }
    
    public function add() {
        $subject = $this->input->post('subject');
        $value = $this->input->post('ticket');

        if(empty($subject) || empty($value)) {
            redirect('tickets/new');
            exit();
        }

        $this->tickets_model->addTicket($subject, $value);
        $this->session->set_flashdata('ticket_success', 'Zgłoszenie zostało wysłane do administratorów portalu');

        redirect('tickets/new');
    }
}