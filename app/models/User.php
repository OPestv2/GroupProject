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
		public function userexist($login){
			
		}
		
		//rejestracja
		public function register(){
			
		}
		
		//odzyskanie hasła
		public function restore(){
			
		}
		
		
	}


?>

