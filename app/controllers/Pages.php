<?php
    class Pages extends Controller{
        public function __construct(){
            $this->userModel = $this->model('User');
            $this->multimediaModel = $this->model('Multimedia');
        }


        public function index(){}


        public function about(){
            $data = [
                'title' => 'About Us'
            ];

            $this->view('pages/about', $data);
        }
		
		public function getBooks(){
               $notes = $this->multimediaModel->getNotes();

                $data = [
                    'title' => 'Notatki',
                    'description' => 'Dodaj nowa lub modyfikuj notatke',
                    'notes' => $notes
                ];

                $this->view('users/notes',$data);
        }
		

        public function main(){
        	//pobranie ilosci Multimedia z bazy danych
        	$numberOfMultimedia = $this->multimediaModel->numberOfMultimedia();
            $data = [
                'title' => 'About Us',
                'numberOfMultimedia' => $numberOfMultimedia->multimedia_count
            ];

            $this->view('pages/main', $data);
        }
    }
?>