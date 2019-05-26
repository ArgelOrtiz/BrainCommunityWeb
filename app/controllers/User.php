<?php

  class User extends Controller
  {

    function __construct()
    {
      $this->userModel = $this->model('_user');
    }

    public function index()
    {
    }

    public function create()
    {
      $email       = $_POST['email'];
      $username    = $_POST['username'];
      $password    = $_POST['password'];
      $first_name  = $_POST['nombre'];
      $middle_name = $_POST['apellidoM'];
      $last_name   = $_POST['apellidoP'];
      $birthday    = $_POST['nac'];
      $status      = $_POST['status'];
      $country     = $_POST['pais'];
      $gender      = $_POST['genero'];
      $rol         = $_POST['rol'];

      $created = $this->userModel->createAdminUser($email, $username, $password,
        $first_name, $middle_name, $last_name, $birthday, $status, $country,
        $gender, $rol);

      if($created){
        $url = ROUTE_URL.'/AdminHome/users';
        header('Location: ' . $url, true, $statusCode);
        die();
      }else
        echo "Hubo un error";

    }

    public function edit()
    {
      $id          = $_POST['user_id'];
      $first_name  = $_POST['nombre'];
      $middle_name = $_POST['apellidoM'];
      $last_name   = $_POST['apellidoP'];
      $birthday    = $_POST['nac'];
      $status      = $_POST['status'];
      $country     = $_POST['pais'];
      $gender      = $_POST['genero'];
      $role        = $_POST['role'];

      $updated = $this->userModel->updateUser($id, $first_name, $middle_name,
       $last_name, $birthday, $status, $country, $gender, $role);


      if($updated){
        $url = ROUTE_URL.'/AdminHome/users';
        header('Location: ' . $url, true, $statusCode);
        die();
      }else
        echo "Hubo un error";

    }

    public function delete()
    {
      $id = $_POST['user_id'];
      $deleted = $this->userModel->deleteUser($id);

      if($deleted){
        $url = ROUTE_URL.'/AdminHome/users';
        header('Location: ' . $url, true, $statusCode);
        die();
      }else
        echo "Hubo un error";
    }

  }

?>
