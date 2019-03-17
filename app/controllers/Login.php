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
        $this->view('pages/login');

    }

    public function register(){
      $this->view('pages/register');

    }

    public function login(){
      $this->loginModel = $this->model('_login');
      $username = $_POST['username'];
      $password = $_POST['password'];

      $result = $this->loginModel->login_user($username,$password);

      if ($result != null) {
        // code...
        $this->controller('home');


      }else{
        // $data = 0;
        $this->controller('Login');

      }


    }
  }


 ?>
