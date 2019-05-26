<?php

/**
 *
 */
class Profile extends Controller{
  private $profileModel;
  private $registerModel;
  private $experienceResult;
  private $clasification;
  private $type;

  function __construct()
  {
    session_start();
    $this->type               = 0;
    $this->experienceResult   = [];
    $this->clasification      = [];
    $this->profileModel       = $this->model('_profile');
    $this->registerModel      = $this->model('_register');

    // code...
  }

  public function index(){
    $this->getExperience();
    $this->getClasification();

    if ($_SESSION) {
      // code...

      $data = [
        'type'          => $this->type,
        'experience'    => $this->experienceResult,
        'clasification' => $this->clasification
      ];
      $this->view('pages/profile',$data);
    }else{
      $this->controller('NotFound');
    }

  }

  public function user(){

    $username = $_GET['username'];

    $userResult = $this->profileModel->getUser($username);

    if ($_SESSION) {
      // code...
      if ($userResult->id === $_SESSION['id']) {
        // code...
        $this->controller('Profile');
        die();
      }
    }

    $experienceResult = $this->profileModel->getExperience($userResult->id);


    $data = [
      'user'        => $userResult,
      'experience'  => $experienceResult
    ];

    $this->view('pages/userProfile',$data);
  }

  public function setPoint(){
    $id       = $_POST['id'];
    $username = $_POST['username'];

    $result = $this->profileModel->getUserPoints($id);

    if ($result) {
      // code...
      $points = $result->points + 1;

      $result = $this->profileModel->setUserPoints($points,$id);

      if ($result) {
        // code...

        $this->controller("Profile/user?username=".$username);
      }

    }
  }

  public function editUserName(){
    $newUserName  = $_POST['username'];
    $id           = $_SESSION['id'];

    if ($newUserName === $_SESSION['username']) {
      // code...
      $this->controller('Profile');
      die();
    }

    $result = $this->registerModel->verify_username($newUserName);
    if ($result->exist != 0) {
      // code... the username exist
      $this->type = 1;
      $this->index();
      die();
    }

    if ($this->profileModel->editUserName($newUserName, $id)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }else {
      // code...
      $this->controller('Home');
    }
  }

  public function editEmail(){
    $newEmail     = $_POST['email'];
    $id           = $_SESSION['id'];

    if ($newEmail === $_SESSION['email']) {
      // code...
      $this->controller('Profile');
      die();
    }

    $result =  $this->registerModel->verify_email($newEmail);
    if ($result->exist != 0) {
      // code... email exist
      $this->type = 2;
      $this->index();
      die();
    }

    if ($this->profileModel->editEmail($newEmail, $id)) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }else {
      // code...
      $this->controller('Home');
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


    $result = $this->profileModel->createExperience($data);

    if ($result) {
      // code...
      $this->refreshData();
      $this->controller('Profile');
    }else {
      // code...
      echo 'error';
    }
  }

  function deleteExperience(){
    $id   = $_POST['id'];

    $result   = $this->profileModel->deleteExperience($id);

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
