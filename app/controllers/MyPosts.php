<?php

/**
 *
 */
class MyPosts extends Controller{
  private $categoryModel;

  function __construct(){
    // code...
    $this->categoryModel = $this->model('_category');

  }

  public function index(){
    session_start();

    if ($_SESSION) {
      $this->view('pages/myPosts');
    }else{
      $this->controller('NotFound');
    }

  }

  public function newPost(){
    session_start();
    if ($_SESSION) {
      $id = $_POST['category'];

      $metadata =  $this->categoryModel->getTags($id);

      $data = [
        'metadata' => $metadata
      ];
      $this->view('pages/newPost',$data);
    }else{
      $this->controller('NotFound');
    }
  }
}


 ?>
