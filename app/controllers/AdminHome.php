<?php
/**
 *
 */
class AdminHome extends Controller
{

  function __construct()
  {
    $this->postModel = $this->model('_user');
  }

  public function index(){
    $this->view('pages/admin/adminHome');
  }

  public function users(){
    $users = $this->postModel->getUsers();

    $data = [
      'title' => 'Usuarios',
      'users' => $users
    ];

    $this->view('pages/admin/adminUsers', $data);
  }

  public function categories(){
    $this->view('pages/admin/adminCategories');
  }

  public function questions(){
    $this->view('pages/admin/adminQuestions');
  }

  public function answers(){
    $this->view('pages/admin/adminAnswers');
  }
}


 ?>
