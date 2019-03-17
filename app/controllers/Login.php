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

    public function register(){
      $this->view('pages/register');

    }

    public function login(){
      $this->loginModel = $this->model('_login');
      $username = $_POST['username'];
      $password = $_POST['password'];

      $result = $this->loginModel->verifyUser($username);

      if ($result != null) {
        // code...

        if ($result->PASSWORD === $password) {
          // code...
          $this->controller('home');
        }else{
          //bad password
          $this->controller('Login/badPass');
        }

      }else{
        //user doesn't exist
        $this->controller('Login/badUser');
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
  }


 ?>
