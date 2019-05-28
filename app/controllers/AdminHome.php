<?php
/**
 *
 */
class AdminHome extends Controller
{

  function __construct()
  {
    $this->userModel      = $this->model('_user');
    $this->categoryModel  = $this->model('_category');
    $this->postsModel     = $this->model('_post');
    $this->issueModel    = $this->model('_issue');
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
    $categories = $this->categoryModel->getCategories();
    $posts = $this->postsModel->getPosts();

    $data = [
      'title' => 'Posts',
      'posts' => $posts,
      'categories' => $categories
    ];
    $this->view('pages/admin/adminPosts', $data);
  }

  public function user_issue(){
    $user_issues = $this->issueModel->get_issues();

    $data = [
      'title' => 'Reportes de usuario',
      'issues' => $user_issues
    ];

    $this->view('pages/admin/adminComments', $data);
  }

}


 ?>
