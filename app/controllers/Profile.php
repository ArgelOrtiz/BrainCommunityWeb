<?php

/**
 *
 */
class Profile extends Controller{
  private $profileModel;
  private $experienceResult;
  private $clasification;

  function __construct()
  {
    session_start();
    $this->experienceResult = [];
    $this->clasification =[];
    $this->profileModel = $this->model('_profile');
    $this->getExperience();
    $this->getClasification();
    // code...
  }

  public function index(){

    if ($_SESSION) {
      // code...

      $data = [
        'experience' => $this->experienceResult,
        'clasification' => $this->clasification
      ];
      $this->view('pages/profile',$data);
    }else{
      $this->controller('NotFound');
    }

  }

  public function editName(){

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

    $newMiddle = $_POST['middle_name'];
    $id       = $_SESSION['id'];

    if ($this->profileModel->editMiddleName($newMiddle, $id)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }
  }

  public function editLastName(){

    $newLast = $_POST['last_name'];
    $id       = $_SESSION['id'];

    if ($this->profileModel->editLastName($newLast, $id)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }
  }

  public function editCountry(){

    $newCountry = $_POST['country'];
    $id       = $_SESSION['id'];

    if ($this->profileModel->editCountry($newCountry, $id)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }
  }

  public function editGender(){

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

    $id       = $_SESSION['id'];

    $this->experienceResult = $this->profileModel->getExperience($id);
  }

  function getClasification(){
    $this->clasification = $this->profileModel->getClasification();
  }

  function createExperience(){

    $data =[
      'id'            => $_SESSION['id'],
      'clasification' => $_POST['clasification'],
      'name'          => $_POST['name'],
      'summary'       => $_POST['summary'],
      'extra'         => $_POST['extra'],
      'start_date'    => $_POST['start_date'],
      'end_date'      => $_POST['end_date']
    ];

    print_r($data);

    $resutl = $this->profileModel->createExperience($data);

    if ($result) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }else {
      // code...
      echo 'error';
    }
  }

  public function refreshData(){

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
