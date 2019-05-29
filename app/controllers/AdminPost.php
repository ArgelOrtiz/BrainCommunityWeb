<?php

/**
 *
 */
class AdminPost extends Controller
{

  function __construct()
  {
      $this->AdminPostModel = $this->model('_post');
      $this->categoryModel = $this->model('_category');
  }

  public function index(){

    $this->view('pages/admin/adminNewPost');
  }

  // public function create()
  // {
  //   $title    = $_POST['title'];
  //   $summary  = $_POST['summary'];
  //   $current  = date("Y-m-d");
  //   $priority = $_POST['priority'];
  //   $comments = 0
  //   $visits   = 0
  //   $status   = 1
  //   $active   = 1
  //   $id_user  = $_SESSION['id'];
  //   $id_category = $_POST['category_id'];
  //
  //   $created = $this->Model->createPost($);
  //   if($created)
  //     $this->controller('/AdminHome/posts');
  //   else
  //     echo "Hubo un error";
  // }
  public function edit()
  {
    $id       = $_POST['post_id'];
    $title    = $_POST['title'];
    $summary  = $_POST['summary'];
    $status   = $_POST['status'];
    $priority = $_POST['priority'];

    $updated = $this->AdminPostModel->updatePost($id, $title, $summary, $status, $priority);

    if($updated)
      $this->controller('/AdminHome/posts');
    else
      echo "Hubo un error";

  }

  // public function delete()
  // {
  //   $id = $_POST['category_id'];
  //   $deleted = $this->categoryModel->deleteCategory($id);
  //
  //   if($deleted){
  //     $url = ROUTE_URL.'/AdminHome/categories';
  //     header('Location: ' . $url, true, $statusCode);
  //     die();
  //   }else
  //     echo "Hubo un error";
  // }
  public function newPost(){
  session_start();
  if ($_SESSION) {
    $id = $_POST['category'];
    $metadata = $this->categoryModel-> getTags($id);
    $data = [
      'metadata'=> $metadata,
      'category'=> $id
    ];
    $this->view('pages/admin/adminNewPost');
  }
  }
}


 ?>
