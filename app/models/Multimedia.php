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
		
		//pobieranie ksiazek
		public function getBooks(){
			$this->db->query("SELECT * FROM Multimedia WHERE type = '2' "); 			
			$multimedia = $this->db->resultSet();

            if($this->db->rowCount() > 0){
                return $multimedia;
            }
            return false;
        }
		
		//pobieranie filmow
		public function getVideos(){
			$this->db->query("SELECT * FROM Multimedia WHERE type = '1' "); 		
			$multimedia = $this->db->resultSet();

            if($this->db->rowCount() > 0){
                return $multimedia;
            }
            return false;
        }
		
	}
?>