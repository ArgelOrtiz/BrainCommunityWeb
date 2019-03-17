<?php

/**
 *
 */
require_once 'BCConfigController.php';

if ($_POST['username']) {
  // code...
  header( 'Location: ../Views/Post.html' );

}



  function __construct()
  {
    // code...

    echo "constructor";
  }

  function index(){

    echo "funciono";

    header( 'Location: G:\ITL\Common\BrainCorp\Proyect\Brain Community web\Views\Post.html' );



  }



  function change_password(){
      $password = post("password");

      echo $password;


  }

  function login(){
    $username = post("username");
    $password = post("password");

    header( 'Location: G:\ITL\Common\BrainCorp\Proyect\Brain Community web\Views\Post.html' );

    echo $username;
    echo $password;


  }




 ?>
