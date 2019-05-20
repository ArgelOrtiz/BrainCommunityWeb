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
