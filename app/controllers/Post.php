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

  public function index(){
    $this->view('pages/post');
  }

  public function viewPost(){
    $id = $_GET['id'];

    $post     = $this->postModel->post($id);
    $comments = $this->postModel->getComments($id);
    $category = $this->postModel->currentCategory($post->id_category);

    if ($post) {
      // code...

      $user = $this->postModel->userPost($post->id_user);

      if ($user) {
        // code...

        $data = [
          'post' => $post,
          'user' => $user,
          'category' => $category,
          'comments' => $comments
        ];

        $this->view('pages/post',$data);
      }else {
        // code...
      }

    }else {
      // code...
    }

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
