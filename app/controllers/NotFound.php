<?php

/**
 *
 */
class NotFound extends Controller
{

  function __construct()
  {
    // code...
  }

  public function index(){
    $this->view('pages/pageNotFound');
  }

}


 ?>
