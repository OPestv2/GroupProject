<?php

	class User{
		private $db;
		
		public function __construct(){
			$this->db = new Database;
		}
		
		//logowanie
		public function numberOfMultimedia(){
			$this->db->query("SELECT COUNT(multimedia_id) FROM Multimedia"); 		//przypisanie zapytania
			$user = $this->db->single();											//wywołanie zapytania
			
			return $user;													
			
		}
		
	
	}


?>

