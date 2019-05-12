<?php

/**
 *
 */
class Profile extends Controller{
  private $profileModel;
  private $experienceResult;

  function __construct()
  {
    $this->profileModel = $this->model('_profile');
    $this->getExperience();
    // code...
  }

  public function index(){
    session_start();
    if ($_SESSION) {
      // code...

      $data = [
        'experience' =>$experienceResult
      ];
      $this->view('pages/profile',$data);
    }else{
      $this->controller('NotFound');
    }

  }

  public function editName(){
    session_start();
    $newName  = $_POST['name'];
    $id       = $_SESSION['id'];

    if ($this->profileModel->editName($newName, $id)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }else {
      // code...
      $this->controller('Home');
    }
  }

  public function editMiddleName(){
    session_start();
    $newMiddle = $_POST['middle_name'];
    $id       = $_SESSION['id'];

    if ($this->profileModel->editMiddleName($newMiddle, $id)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }
  }

  public function editLastName(){
    session_start();
    $newLast = $_POST['last_name'];
    $id       = $_SESSION['id'];

    if ($this->profileModel->editLastName($newLast, $id)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }
  }

  public function editCountry(){
    session_start();
    $newCountry = $_POST['country'];
    $id       = $_SESSION['id'];

    if ($this->profileModel->editCountry($newCountry, $id)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }
  }

  public function editGender(){
    session_start();
    $newGender = $_POST['gender'];

    if ($newGender == M) {
      // code...
      $newGender = 2;
    }elseif ($newGender == F) {
      // code...
      $newGender = 1;
    }else {
      // code...
      $newGender = 0;
    }

    $id       = $_SESSION['id'];

    if ($this->profileModel->editGender($newGender, $id)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }
  }

  function getExperience(){
    session_start();
    $id       = $_SESSION['id'];

    $this->experienceResult = $this->profileModel->getExperience($id);
  }

  public function refreshData(){
    session_start();
    $result = $this->profileModel->refreshData($_SESSION['id']);

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
