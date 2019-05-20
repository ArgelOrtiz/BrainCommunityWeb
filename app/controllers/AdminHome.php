<?php
/**
 *
 */
class AdminHome extends Controller
{

  function __construct()
  {
    $this->userModel       = $this->model('_user');
    $this->categoryModel   = $this->model('_category');
    $this->postsModel   = $this->model('_post');
    $this->commentModel   = $this->model('_comment');
  }

  public function index(){
    $this->view('pages/admin/adminHome');
  }

  public function users(){
    $users = $this->userModel->getUsers();

    $data = [
      'title' => 'Usuarios',
      'users' => $users
    ];

    $this->view('pages/admin/adminUsers', $data);
  }

  public function categories(){
    $categories = $this->categoryModel->getCategories();

    $data = [
      'title' => 'Usuarios',
      'categories' => $categories
    ];
    $this->view('pages/admin/adminCategories',$data);
  }

  public function posts(){
    $posts = $this->postsModel->getPosts();

    $data = [
      'title' => 'Posts',
      'posts' => $posts
    ];
    $this->view('pages/admin/adminPosts');
  }

  public function comments(){
    $comments = $this->commentModel->getComments();

    $data = [
      'title' => 'Comentarios',
      'comments' => $comments
    ];
    $this->view('pages/admin/adminComments');
  }

}


 ?>
