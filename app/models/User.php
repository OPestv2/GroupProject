<?php

	class User{
		private $db;
		
		public function __construct(){
			$this->db = new Database;
		}
		
		//logowanie
		public function login($email, $password){
			$this->db->query('SELECT * FROM Users WHERE email = :email'); 		//przypisanie zapytania
			$this->db->bind(':email', $email);									//dodanie zmiennej do zapytania
			$user = $this->db->single();										//wywołanie zapytania
			
			if(password_verify($password, $user->password))						//sprawdzenie czy hasło jest zgodne
				return $user;													//jeżeli tak, zwrócenie danych użytkownika
			return false;
		}
		
		//sprawdzanie czy użytkownik istnieje
		public function userExists($login){
			$this->db->query('SELECT login, email FROM Users WHERE login = :login OR email = :login');
			$this->db->bind(':login', $login);
			$this->db->bind(':email', $login);
			$user = $this->db->single();
			
			if($this->db->rowCount()>0) return true;
			return false;
		}
		
		//rejestracja
		public function register($login, $email, $password_hash){
		
			$this->db->query('INSERT INTO Users (password_hash, login, email) VALUES (:password_hash, :login, :email, :first_name, :last_name, :phone_number, :birth_date)');
			$this->db->bind(':login', $login);
			$this->db->bind(':email', $email);
			$this->db->bind(':password_hash', $password_hash);
			$this->db->bind(':first_name', $first_name);
			$this->db->bind(':last_name', $last_name);
			$this->db->bind(':phone_number', $phone_number);
			$this->db->bind(':birth_date', $birth_date);
			if($this->db->execute())return true;
			return false;
		}
		
	//	//odzyskanie hasła
	//	public function restore(){
	//		
	//	}
		
		//zmiana nicku
		public function changenickname($newnickname){
			$this->db->query('UPDATE Users SET login = :newnickname WHERE user_id = :id');
			$this->db->bind(':id', $_SESSION['user_id']);
			$this->db->bind(':newnickname', $newnickname);
			if($this->db->execute())return true;
			return false;
			
		}

		// zmiana hasła
		public function changepassword($newpasswordhash, $oldpassword){
			$this->db->query('UPDATE Users SET password_hash = :newpasswordhash WHERE user_id = :id');
			$this->db->bind(':id', $_SESSION['user_id']);
			$this->db->bind(':newpasswordhash', $newpasswordhash);
			if($this->db->execute())return true;
			return false;
		}
	}


?>

