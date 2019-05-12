<?php
/**
 *
 */
class AdminHome extends Controller
{

  function __construct()
  {
    // code...
  }

  public function index(){
    $this->view('pages/admin/adminHome');
  }

  public function users(){
    $this->view('pages/admin/adminUsers');
  }

  public function questions(){
    $this->view('pages/admin/adminQuestions');
  }
}


 ?>
