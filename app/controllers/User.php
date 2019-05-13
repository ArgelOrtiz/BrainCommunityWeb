<?php

  class User extends Controller
  {

    function __construct()
    {
      $this->postModel = $this->model('_user');
    }

    public function index()
    {
    }

    public function edit()
    {
      $id = $_POST['user_id'];
      $user = $this->postModel->getUserById($id);

      $data = [
        'title' => 'Usuarios',
        'user' => $user
      ];

      $this->view('pages/admin/adminUserEdit', $data);
    }

    public function delete()
    {
      $id = $_POST['user_id'];
      $user = $this->postModel->deleteUser($id);

      $data = [
        'title' => 'Usuarios',
        'status' => $user
      ];

      $this->view('pages/admin/adminUsers', $data);
    }

  }

?>
