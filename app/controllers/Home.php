<?php

  class Home extends Controller{

    public function __construct(){
      $this->categoryModel = $this->model('_category');
      $this->postModel = $this->model('_post');

      //echo 'controlador home cargado';
      $this->index();
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


    public function post($id){
        echo $id;

    }

    public function profile(){
      $this->view('pages/profile');

    }

    public function search(){

      $categories = $this->postModel->getCategory();

      $data = [
        'title' => 'Bienvenido a community',
        'categories' => $categories
      ];

      $this->view('pages/home',$data);

    }


  }


 ?>
