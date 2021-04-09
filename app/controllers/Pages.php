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
		
		public function multimedia($typ){
               $notes = $this->multimediaModel->getMultimedia($typ);

                $data = [
					books = [
						book = [
							'authors' => 'Autorzy',
							'title' => 'Tytuł',
							'descryption' => 'Opis',
							'add_date' => 'Data_dodania',
							'page_amount' => 'Liczba_stron',
							...
						]
					]
                    
                ];

               //??? $this->view('',$data);
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