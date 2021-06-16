<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function changePassword($id, $password, $new_password, $confirm_pass)
    {
        if($new_password != $confirm_pass)
            return 2;

        $this->db->where('id', $id);
        $query = $this->db->get('users');
    
		$hash = $query->row('password');

        if($this->verifyPasswordHash($password, $hash) == false)
            return 3;

        $update = array(
            'password'      =>  $this->hashPassword($new_password)
        );

        $this->db->where('id', $id);
        $this->db->update('users', $update);

        return 1;
    }

    public function createUser($email, $password, $name, $username) {
        $data = array(
            'email'      => $email,
            'username'   => $username,
            'name'       => $name,
            'password'   => $this->hashPassword($password)
        );
        $this->db->insert('users', $data);
        
        return $this->db->insert_id();
    }
	
	public function userAuthentication($email, $password) {
		$this->db->where('email', $email);
        $query = $this->db->get('users');
        
		$hash = $query->row('password');

        if($this->verifyPasswordHash($password, $hash))
        {
            $userData = [
                'id' => $query->row('id'),
                'email' => $query->row('email'),
                'username' => $query->row('username')
            ];
            
            return $userData;
        }
		
		return false;
	}
	
	public function getUserIdFromEmail($email) {
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('email', $email);

		return $this->db->get()->row('id');
	}
	
	public function getUserData($user_id) {
		$this->db->from('users');
		$this->db->where('id', $user_id);
        
		return $this->db->get()->row();
	}
    
    public function checkAuthStatus() {
        if(!$this->session->has_userdata('logged_in'))
            return false;
        
        if(!$this->session->userdata('logged_in'))
            return false;
        
        return true;
    }

    public function changeEmail($id, $email)
    {
        if($this->checkEmail($email) === false)
            return false;
            
        
        $update = array(
            'email'      =>  $email
        );

        $this->db->where('id', $id);
        $this->db->update('users', $update);

        return true;
    }

    public function changeUsername($id, $username)
    {
        if($this->checkUsername($username) === false)
            return false;
            
        
        $update = array(
            'username'      =>  $username
        );

        $this->db->where('id', $id);
        $this->db->update('users', $update);

        return true;
    }

    private function checkEmail($email) {
        if($this->db->get_where('users', ['email' => $email])->num_rows() > 0)
            return false;
        
        return true;
    }

    private function checkUsername($username) {
        if($this->db->get_where('users', ['username' => $username])->num_rows() > 0)
            return false;
        
        return true;
    }

	private function hashPassword($password) {
		return password_hash($password, PASSWORD_BCRYPT);
	}
	
	private function verifyPasswordHash($password, $hash) {
		return password_verify($password, $hash);
	}


	
}
