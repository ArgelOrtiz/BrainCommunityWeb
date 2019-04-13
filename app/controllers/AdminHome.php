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


}


 ?>
