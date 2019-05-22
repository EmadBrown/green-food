<?php 

class Users extends Controller {

    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => $this->clean($_POST['email']),
                'password' => $this->clean($_POST['password']),
                'email_err' => '',
                'password_err' => '',  
            ];
           
             // Check for user/email
             $data['email_err'] =  $this->userModel->findUserByEmail($data['email'])? '' : 'No user found';

            // Make sure errors are empty
            if(empty($data['email_err']) && empty($data['password_err'])){
                // Validated
                // Check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
    
                if($loggedInUser){
                // Create Session
                $this->createUserSession($loggedInUser);
                } else {
                $data['password_err'] = 'Password incorrect';
    
                $this->view('users/login', $data);
                }
            } 
            
            else {
                // Load view with errors
                $this->view('users/login', $data);
            }
        }
        else {
        
            $data =[    
              'email' => '',
              'password' => '',
              'email_err' => '',
              'password_err' => '',        
            ];
    
            // Load view
            $this->View('users/login', $data);
        }
    }

    public function register()
    {    
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
                'name' => $this->clean($_POST['name']),
                'email' => $this->clean($_POST['email']),
                'password' => $this->clean($_POST['password']),
                'confirm_password' => $this->clean($_POST['confirm_password']),
                'email_err' => '',
            ];

             // Check email
            $data['email_err'] = $this->userModel->findUserByEmail($data['email']) ? 'Email is already taken' : '';
  
              // Make email error is empty
            if(empty($data['email_err']) ){
            
                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    
                // Register User
                if($this->userModel->register($data))
                {
                    redirect('users/login');
                } 
                else {
                  die('Something went wrong');
                }
  
            } else {
                // Load view with errors
                $this->view('users/register', $data);
            }
        }

        else {
            $data =[    
                'name' =>   '',
                'email' =>  '',
                'password' =>  '',
                'confirm_password' =>  '', 
                'email_err' => '',    
            ];
    
            // Load view
            $this->View('users/register', $data);
        }
    }

    public function createUserSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;
        redirect('home');
    }
  
    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }
  
    public function isLoggedIn(){
        if(isset($_SESSION['user_id'])){
          return true;
        } else {
          return false;
        }
    }
}

?>