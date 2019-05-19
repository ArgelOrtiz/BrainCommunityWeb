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
        'title'       => 'Bienvenido a community',
        'categories'  => $categories,
        'post'        => $post
      ];
      $this->view('pages/home',$data);

    }

    public function go(){
      $result = $this->postModel->countPost();

      print_r($result);

      $result = $result->count / 10;

      echo $result;
    }

    public function category(){
      $title = $_GET['title'];

      $categories = $this->categoryModel->getCategories();
      $post       = $this->postModel->categoryPost($title);


      $data = [
        'title'       => 'Bienvenido a community',
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

  }


 ?>
