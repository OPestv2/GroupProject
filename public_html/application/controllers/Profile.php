<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
        $this->load->library("pagination");
		$this->load->model('user_model');
        $this->load->model('books_model');
        if(!$this->user_model->checkAuthStatus()) {
            redirect('/login');
            exit();
        }
	}

    public function books() {
        $data['page'] = 'Moje książki';
        $data['books'] = $this->books_model->getFavoriteBooks($this->session->userdata('user_id'));

        $this->load->view('template/header', $data);
        $this->load->view('profile/books');
        $this->load->view('template/footer');
    }

    public function settings() {
        $data['page'] = 'Ustawienia';

        $this->load->view('template/header', $data);
        $this->load->view('profile/settings');
        $this->load->view('template/footer');
    }

    public function change_email() {
        $email = $this->input->post('email');

        if(empty($email)) {
            redirect('profile/settings');
            exit();
        }

        if($this->user_model->changeEmail($this->session->userdata('user_id'), $email) == true) {
            $this->session->set_flashdata('email_success', 'E-Mail został zmieniony');
            $this->session->set_userdata('email', $email);
        } else {
            $this->session->set_flashdata('email_error', 'Ten E-Mail jest zajęty');
        }

        redirect('profile/settings');
    }

    public function change_username() {
        $username = $this->input->post('username');

        if(empty($username)) {
            redirect('profile/settings');
            exit();
        }

        if($this->user_model->changeUsername($this->session->userdata('user_id'), $username) == true) {
            $this->session->set_flashdata('username_success', 'Nickname został zmieniony');
            $this->session->set_userdata('displayname', $username);
        } else {
            $this->session->set_flashdata('username_error', 'Ten nickname jest zajęty');
        }

        redirect('profile/settings');
    }

    public function change_password() {
        $oldPassword = $this->input->post('old');
        $newPassword = $this->input->post('new');
        $confirmPassword = $this->input->post('confirm');



        if(empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
            redirect('profile/settings');
            exit();
        }

        $status = $this->user_model->changePassword($this->session->userdata('user_id'), $oldPassword, $newPassword, $confirmPassword);
        if($status == 1) {
            $this->session->set_flashdata('password_success', 'Hosło zostało zmienione');
        } elseif($status == 2) {
            $this->session->set_flashdata('password_error', 'Nowe hasła się nie zgadzają');
        } else {
            $this->session->set_flashdata('password_error', 'Stare hasło nie poprawne');
        }

        redirect('profile/settings');
    }

}