<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
	}

	public function register() {
        
        if($this->user_model->checkAuthStatus())
            redirect('/');
        
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
	    if(!empty($name) && !empty($email) && !empty($password) && !empty($username))
        {
            if($this->db->get_where('users', ['email' => $email])->num_rows() > 0) {
                $this->session->set_flashdata('register_error', 'Użytkownik z tym adresem E-Mail jest już zarejestrowany');
                redirect('/register');
            } else {
                $userId = $this->user_model->createUser($email, $password, $name, $username);
                
                $sessionData = array(
                        'user_id'  => $userId,
                        'email'    => $email,
                        'displayname' => $username,
                        'logged_in' => TRUE
                );

                $this->session->set_userdata($sessionData);
                redirect('/');
            }

        }

        $this->load->view('user/auth/register');
	}
		
	public function login() {
        if($this->user_model->checkAuthStatus())
            redirect('/');
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if(!empty($email) && !empty($password))
        {
            $userData = $this->user_model->userAuthentication($email, $password);

            if ($userData !== false) {
                $sessionData = array(
                        'user_id'  => $userData['id'],
                        'email'    => $userData['email'],
                        'displayname' => $userData['username'],
                        'logged_in' => TRUE
                );

                $this->session->set_userdata($sessionData);
                redirect('/');
            } else {
                $this->session->set_flashdata('login_error', 'Nieprawidłowy E-Mail lub hasło');
                redirect('/login');
            }

        }
        
        $this->load->view('user/auth/login');
	}

	public function logout() {
		$this->session->sess_destroy();
        redirect('/');
	}
	
}
