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

    public function edit()
    {
      $id = $_POST['user_id'];
      $user = $this->userModel->getUserById($id);

      $data = [
        'title' => 'Usuarios',
        'user' => $user
      ];

      $this->view('pages/admin/adminUserEdit', $data);
    }

    public function delete()
    {
      $id = $_POST['user_id'];
      $deleted = $this->userModel->deleteUser($id);

      if(!$deleted){
        $url = ROUTE_URL.'/AdminHome/users';
        header('Location: ' . $url, true, $statusCode);
        die();
      }else
        echo "Hubo un error";
    }

  }

?>
