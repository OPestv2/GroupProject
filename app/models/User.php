<?php

	class User{
		private $db;
		
		public function __construct(){
			$this->db = new Database;
		}
		
		//logowanie
		public function login($login, $password){
			$this->db->query('SELECT * FROM Users WHERE login = :login'); 		//przypisanie zapytania
			$this->db->bind(':login', $login);									//dodanie zmiennej do zapytania
			$user = $this->db->single();										//wywołanie zapytania
			
			if(password_verify($password, $user->password)){					//sprawdzenie czy hasło jest zgodne
				return $user;													//jeżeli tak, zwrócenie danych użytkownika
			}else{
				return false;													//jeżeli nie, zwraca fałsz 
			}
		}
		
		//sprawdzanie czy użytkownik istnieje
		public function userexist($login, $email){
			$this->db->query('SELECT login, email FROM Users WHERE login = :login OR email = :email');
			$this->db->bind(':login', $login);
			$this->db->bind(':email', $email);
			$user = $this->db->single();
			
			if($user != NULL){
				return false;
			}else{
				return true;
			}
		}
		
		//rejestracja
		public function register($login, $email, $password_hash, $first_name, $last_name, $phone_number, $birth_date){
			if(!userexist($login, $email)){
				$this->db->query('INSERT INTO Users (password_hash, login, email, first_name, last_name, phone_number, birth_date) VALUES (:password_hash, :login, :email, :first_name, :last_name, :phone_number, :birth_date)');
				$this->db->bind(':login', $login);
				$this->db->bind(':email', $email);
				$this->db->bind(':password_hash', $password_hash);
				$this->db->bind(':first_name', $first_name);
				$this->db->bind(':last_name', $last_name);
				$this->db->bind(':phone_number', $phone_number);
				$this->db->bind(':birth_date', $birth_date);
				$register = $this->db->single();
			}else{
				return false;
			}
		}
		
	//	//odzyskanie hasła
	//	public function restore(){
	//		
	//	}
		
		//zmiana nicku
		public function changenickname($oldnickname, $newnickname){
			$this->db->query('UPDATE Users SET login = :newnickname WHERE login = :oldnickname');
			$this->db->bind(':oldnickname', $oldnickname);
			$this->db->bind(':newnickname', $newnickname);
		}

		
		//zmiana hasła
		public function changepassword($newpasswordhash, $login){
			$this->db->query('UPDATE Users SET password_hash = :newpasswordhash WHERE login = :login');
			$this->db->bind(':login', $login);
			$this->db->bind(':newpasswordhash', $newpasswordhash);
		}
	}


?>

