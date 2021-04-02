<?php
    class Pages extends Controller{
        public function __construct(){
            $this->userModel = $this->model('User');
        }


        public function register(){
            if(isLoggedIn()){
                redirect('pages/index');
            }

            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form

                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $data = [
                    'login' => trim($_POST['login']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),

                    'login_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];

                // Validate Login
                if(empty($data['login'])){
                    $data['login_err'] = "Prosze wpisac login";
                }

                // Validate Password
                if(empty($data['email'])){
                    $data['email_err'] = "Prosze wpisac mail";
                } else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                    $data['email_err'] = "Problem z emailem";
                }

                // Validate Password
                if(empty($data['password'])){
                    $data['password_err'] = "Please enter password";
                } else if(strlen($data['password']) < 8){
                    $data['password_err'] = "Password must be at least 8 characters";
                }

                // Validate Confirm Password
                if(empty($data['confirm_password'])){
                    $data['confirm_password_err'] = "Please confirm password";
                } else if($data['password'] != $data['confirm_password']){
                    $data['confirm_password_err'] = "Passwords do not match";
                }

                // Make sure errors are empty
                if(empty($data['login_err']) && empty ($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                    // Validated
                    
                    // Hash Password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    // Register User
                    if($this->userModel->register($data)){
                        flash('register_success', 'You are registered and can log in');
                        redirect('users/login');
                    } else {
                        die('Coś poszło nie tak');
                    }
                } else {
                    // Load view with errors
                    $this->view('users/register', $data);
                }

            } else {
                // Init data
                $data = [
                    'login' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',

                    'login_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];

                // Load view
                $this->view('users/register', $data);
            }
        }

		public function login(){
			if(isLoggedIn()){
				redirect('pages/index');
			}

			// Check for POST
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				// Process form

				// Sanitize POST data
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

				// Init data
				$data = [
					'password' => trim($_POST['password']),
					'password_err' => '',
					'email' => trim($_POST['email']),
					'email_err' => ''
				];

				// Validate e-mail
				if(empty($data['email'])){
					$data['email_err'] = 'Wprowadź adres e-mail';
				}
				else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
					$data['email_err'] = 'Niepoprawny adres e-mail';
				}
				else if($this->db->userExists($data['email'])){
					$data['email_err'] = 'Niepoprawne dane logowania';
				}

				// Validate Password
				if(empty($data['password'])){
					$data['password_err'] = 'Wprowadź hasło';
				}

				// Make sure errors are empty
				if(empty($data['email_err']) && empty($data['password_err'])){
					// Validated

					// Check and set logged in user
					$loggedInUser = $this->userModel->login($data['email'],$data['password']);

					if($loggedInUser){
						// Create Session
						$this->createUserSession($loggedInUser);
						redirect('pages/main');
					} else {
						$data['password_err'] = "Niepoprawne dane logowania";
					}
					$this->view('users/login', $data);
				} else {
					// Load view with errors
					$this->view('users/login', $data);
				}

			} else {
				// Init data
				$data = [
					'password' => '',
					'password_err' => ''
				];

				// Load view
				$this->view('users/login', $data);
			}
		}

		public function createUserSession($user){
			$_SESSION['user_id'] = $user->id;
			$_SESSION['user_nick'] = $user->nick;
			$_SESSION['user_email'] = $user->email;
			redirect('pages/index');
		}

		public function logout(){
			session_destroy();
			session_start();
			flash('logout_success','Zostałeś pomyślnie wylogowany!', 'alert alert-info');
			redirect('users/login');
		}  
    }

?>