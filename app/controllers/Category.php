<?php

  class Category extends Controller
  {

    function __construct()
    {
      $this->categoryModel = $this->model('_category');
    }

    public function index()
    {
      $categories = $this->categoryModel->getCategories();

      $data = [
        'title' => 'Categorias',
        'categories' => $categories
      ];
      $this->view('pages/admin/adminCategories', $data);
    }

    public function create()
    {
      $title    = $_POST['title'];
      $summary  = $_POST['summary'];
      $priority = $_POST['priority'];

      $created = $this->categoryModel->createCat($title, $summary, $priority);

      if($created){
        $url = ROUTE_URL.'/AdminHome/categories';
        header('Location: ' . $url, true, $statusCode);
        die();
      }else
        echo "Hubo un error";
    }

    public function edit()
    {
      $id       = $_POST['category_id'];
      $title    = $_POST['title'];
      $summary  = $_POST['summary'];
      $priority = $_POST['priority'];

      $updated = $this->categoryModel->updateCategory($id, $title, $summary, $priority);

      if($updated){
        $url = ROUTE_URL.'/AdminHome/categories';
        header('Location: ' . $url, true, $statusCode);
        die();
      }else
        echo "Hubo un error";

    }

    public function delete()
    {
      $id = $_POST['category_id'];
      $deleted = $this->categoryModel->deleteCategory($id);

      if($deleted){
        $url = ROUTE_URL.'/AdminHome/categories';
        header('Location: ' . $url, true, $statusCode);
        die();
      }else
        echo "Hubo un error";
    }

  }

?>
