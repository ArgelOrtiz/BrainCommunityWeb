<?php

/**
 *
 */
class MyPosts extends Controller
{

  function __construct()
  {
    // code...
  }

  public function index(){
    session_start();

    if ($_SESSION) {
      $this->view('pages/myPosts');
    }else{
      $this->controller('NotFound');
    }

  }
}


 ?>
