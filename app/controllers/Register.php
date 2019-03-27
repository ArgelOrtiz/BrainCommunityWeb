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

  public function check_in(){
    $this->registerModel = $this->model('_register');


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
      $this->controller('Login');

    }else{
      $this->controller('Home');
    }


  }
}



 ?>
