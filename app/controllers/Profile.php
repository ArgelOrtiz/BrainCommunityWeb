<?php

/**
 *
 */
class Profile extends Controller{
  private $editModel;

  function __construct()
  {
    $this->editModel = $this->model('_profile');
    // code...
  }

  public function index(){
    session_start();
    if ($_SESSION) {
      // code...
      $this->view('pages/profile');
    }else{
      $this->controller('NotFound');
    }

  }

  public function editName(){
    $newName = $_POST['name'];

    if ($this->editModel->nameEdit($newName)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }
  }

  public function refreshData(){
    session_start();
    $result = $this->editModel->refreshData($_SESSION['id']);

    if ($result) {
      // code...
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
    }
  }


}



 ?>
