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

        public function main(){
        	//pobranie ilosci Multimedia z bazy danych
        	//$numberOfMultimedia = $this->multimediaModel->numberOfMultimedia();
			$numberOfMultimedia = 10;

        	
        	
            $data = [
                'title' => 'About Us',
                'numberOfMultimedia' => $numberOfMultimedia
            ];

            $this->view('pages/main', $data);
        }
    }
?>