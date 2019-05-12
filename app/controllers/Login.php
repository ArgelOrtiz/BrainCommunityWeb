<?php

  /**
   *
   */
  class Login extends Controller
  {

    function __construct()
    {
      // code...
    }
    public function index(){
      $data = '0';

      $this->view('pages/login',$data);

    }


    public function forgotPassword(){
      $this->view('pages/forgot_password');
    }

    public function login(){
      $this->loginModel = $this->model('_login');
      $username = $_POST['username'];
      $password = $_POST['password'];

      $result = $this->loginModel->verifyUser($username);

      if ($result != null) {
        // code...

        if ($result->password === $password) {
          // code...
          session_start();
          $_SESSION['id']           = $result->id;
          $_SESSION['email']        = $result->email;
          $_SESSION['username']     = $result->username;
          $_SESSION['first_name']   = $result->first_name;
          $_SESSION['middle_name']  = $result->middle_name;
          $_SESSION['last_name']    = $result->last_name;
          $_SESSION['birthday']     = $result->birthday;
          $_SESSION['country']      = $result->country;
          $_SESSION['gender']       = $result->gender;
          $_SESSION['role']         = $result->role;

          echo "second";


          $this->controller('Home');
        }else{
          //bad password

        }

      }else{
        //user doesn't exist.

      }

    }

    public function badUser(){
      $data = '1';

      $this->view('pages/login',$data);

    }

    public function badPass(){
      $data = '2';

      $this->view('pages/login',$data);
    }

    public function logout(){
      session_start();

      // remove all session variables
      session_unset();

      // destroy the session
      session_destroy();

      $this->controller('home');
    }


  }
 ?>
