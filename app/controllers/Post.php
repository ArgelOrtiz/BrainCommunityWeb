<?php

/**
 *
 */
class Post extends Controller
{

  function __construct()
  {
    $this->postModel = $this->model('_post');
  }

  public function index()
  {
    $this->view('pages/post');
  }

  public function edit()
  {
    $id = $_POST['post_id'];
    $post = $this->postModel->getPostById($id);

    $data = [
      'title' => 'Post',
      'user' => $post
    ];

    $this->view('pages/admin/adminPostEdit', $data);
  }

  public function delete()
  {
    $id = $_POST['post_id'];
    $user = $this->postModel->deletePost($id);

    $data = [
      'title' => 'Post',
      'status' => $post
    ];

    $this->view('pages/admin/adminPosts', $data);
  }

}
 ?>
