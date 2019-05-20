<?php

  class Home extends Controller{

    public function __construct(){
      $this->categoryModel = $this->model('_category');
      $this->postModel = $this->model('_post');

      //echo 'controlador home cargado';
      //$this->index();
    }

    public function index(){

      $categories = $this->categoryModel->getCategories();
      $post       = $this->postModel->getPosts();

      $data = [
        'type'        => 0,
        'categories'  => $categories,
        'post'        => $post
      ];
      $this->view('pages/home',$data);

    }

    public function badData($username,$type){
      $categories = $this->categoryModel->getCategories();
      $post       = $this->postModel->getPosts();

      $data = [
        'type'        => $type,
        'categories'  => $categories,
        'post'        => $post,
        'username'    => $username
      ];
      $this->view('pages/home',$data);
    }

    public function login(){
      $this->loginModel = $this->model('_login');
      $username = $_POST['username'];
      $password = $_POST['password'];

      $result = $this->loginModel->verifyUser($username);

      if ($result != null) {
        // code...

        if ($result->password === $password) {
          // code...
          session_start();
          $_SESSION['id']           = $result->id;
          $_SESSION['email']        = $result->email;
          $_SESSION['username']     = $result->username;
          $_SESSION['first_name']   = $result->first_name;
          $_SESSION['middle_name']  = $result->middle_name;
          $_SESSION['last_name']    = $result->last_name;
          $_SESSION['birthday']     = $result->birthday;
          $_SESSION['country']      = $result->country;
          $_SESSION['gender']       = $result->gender;
          $_SESSION['role']         = $result->role;

          echo "second";


          $this->controller('Home');
        }else{
          //bad password
          $this->badData($username,2);
        }

      }else{
        //user doesn't exist.
        $this->badData($username,1);
      }

    }

    public function go(){
      $result = $this->postModel->countPost();

      print_r($result);

      $result = json_encode((array)$result);

      echo $result;
      print_r($result);

    }

    public function category(){
      $title = $_GET['title'];


      $categories = $this->categoryModel->getCategories();
      $result     = $this->postModel->getIdCategory($title);
      $post       = $this->postModel->categoryPost($result->id);



      $data = [
        'categories'  => $categories,
        'post'        => $post
      ];
      $this->view('pages/home',$data);
    }


    public function post($id){
        echo $id;

    }

    public function profile(){
      $this->view('pages/profile');

    }

    public function search(){
      $title = $_GET['post'];

      $title =  preg_replace('/\s+/', '%', $title);

      $categories = $this->categoryModel->getCategories();
      $result     = $this->postModel->getSearchPost($title);

      if ($result) {
        // code...
        $data = [
          'categories'  => $categories,
          'post'        => $result
        ];

        $this->view('pages/home',$data);

      }else {
        // code...
        $this->index();
      }
    }

  }


 ?>
