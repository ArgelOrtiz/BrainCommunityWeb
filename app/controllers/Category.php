<?php

  class User extends Controller
  {

    function __construct()
    {
      $this->postModel = $this->model('_category');
    }

    public function index()
    {
      $categories = $this->postModel->getCategories();

      $data = [
        'title' => 'Categorias',
        'categories' => $categories
      ];
      $this->view('pages/admin/adminCategories');
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
