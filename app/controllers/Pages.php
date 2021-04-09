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
            $data = [
                'title' => 'About Us',
                'numberOfMultimedia' => $this->multimediaModel->numberOfMultimedia()->multimedia_count,
                'books' => $this->multimediaModel->getMultimedia('2')
            ];

    //         echo('<pre>');
 			// print_r($data["books"]);
 			// echo('</pre>');
 			// die();

            $this->view('pages/main', $data);
        }
    }
?>