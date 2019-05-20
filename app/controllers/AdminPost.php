<?php

/**
 *
 */
class AdminPost extends Controller
{

  function __construct()
  {
    // code...
  }

  public function index(){

    $this->view('pages/admin/adminNewPost');
  }


  public function new(){

  }
  public function addpost(){
    $id = $_POST['post_id'];
    $post = $this->postModel->adminPosts($user_id, $category_id,$title,$summary,$currentdate);
    $data = [
      $titulo = $_POST['title'];
      $desc = $_POST['summary'];
      $creacion = $_POST['create_date'];
      $act = $_POST['last_update'];
      $coment = $_POST['comments'];
      $visita = $_POST['visits'];
      $prior = $_POST['priority'];
      $estatus = $_POST['status'];
  ];
  }

}


 ?>
