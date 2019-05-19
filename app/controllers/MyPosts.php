<?php

/**
 *
 */
class MyPosts extends Controller{
  private $categoryModel;
  private $postModel;

  function __construct(){
    // code...
    $this->categoryModel  = $this->model('_category');
    $this->postModel      = $this->model('_post');

  }

  public function index(){
    session_start();

    if ($_SESSION) {
      $id = $_SESSION['id'];

      $post = $this->postModel->myPost($id);

      $data = [
        'post' => $post
      ];

      $this->view('pages/myPosts',$data);
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
        'metadata' => $metadata,
        'category' => $id
      ];
      $this->view('pages/newPost',$data);
    }else{
      $this->controller('NotFound');
    }
  }

  public function createPost(){
    session_start();
    $title        = $_POST['title'];
    $summary      = $_POST['summary'];
    $id_category  = $_POST['id_category'];
    $metadata     = $_POST['metadata[]'];
    $id_user      = $_SESSION['id'];

    date_default_timezone_set('America/Mexico_City');

    $currentdate = date('y-m-d');

    $result = $this->postModel->createPost($id_user,$id_category,$title,$summary,$currentdate);

    if ($result) {
      // code...
      // $post_id = $this->postModel->currentPost($id_user,$title,$currentdate);
      //
      // for ($i=0; $i < sizeof($metadata) ; $i++) {
      //   // code...
      //   $result = $this->postModel->addMetadataPost($post_id,$metadata[$i]);
      // }
      //
      // if ($result) {
      //   // code...
      //   $this->controller('Home');
      // }else {
      //   // code...
      //   $this->controller('NotFound');
      // }

      $this->controller('Home');

    }else {
      // code...
      $this->controller('NotFound');
    }

  }
}


 ?>
