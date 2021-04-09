<?php

	class Multimedia{
		private $db;
		
		public function __construct(){
			$this->db = new Database;
		}
		
		//liczba multimediow
		public function numberOfMultimedia(){
			$this->db->query("SELECT COUNT(multimedia_id) as multimedia_count FROM Multimedia"); 		//przypisanie zapytania
			$multimedia = $this->db->single();										//wywołanie zapytania
			
			return $multimedia;													
		}
		
		//pobieranie multimediow
		public function getMultimedia($typ){
			$this->db->query("SELECT * FROM Multimedia WHERE type = :typ "); 	
			$this->db->bind(':typ', $typ);
			$multimedia = $this->db->resultSet();

            if($this->db->rowCount() > 0){
                return $multimedia;
            }
            return false;
        }
		
	}
?>