<?php

/**
 *
 */
class Register extends Controller
{

  function __construct()
  {
    // code...
  }

  public function index(){
    $this->view('pages/register');

  }

  public function checkin(){
    $this->registerModel = $this->model('_register');

    $usernameValidation = $this->registerModel->verify_username($_POST['username']);
    if ($usernameValidation->exist != 0) {
      // code...
      echo $usernameValidation->exist;
      exit();
    }

    $emailValidation = $this->registerModel->verify_email($_POST['email']);
    if ($emailValidation->exist != 0) {
      // code...
      echo $emailValidation->exist;
      exit();
    }


    if ($_POST['gender'] == M) {
      // code...
      $newg = 2;
    }elseif ($_POST['gender'] == F) {
      // code...
      $newg = 1;
    }else {
      // code...
      $newg = 0;
    }

    $email        = $_POST['email'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $name         = $_POST['name'];
    $last_name    = $_POST['secondName'];
    $middle_name  = $_POST['firstName'];
    $birthday     = $_POST['birthday'];
    $country      = $_POST['country'];
    $gender       = $newg;


    $data =[
      'email'       =>$email,
      'username'    =>$username,
      'password'    =>$password,
      'name'        =>$name,
      'last_name'   =>$last_name,
      'middle_name' =>$middle_name,
      'birthday'    =>$birthday,
      'country'     =>$country,
      'gender'      =>$gender
    ];

    $result = $this->registerModel->register_user($data);

    if ($result != null) {
      // code...
      $this->controller('Home');

    }else{
      $this->controller('Register');
    }


  }
}



 ?>
