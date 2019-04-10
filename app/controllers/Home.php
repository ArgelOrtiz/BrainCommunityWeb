<?php

  class Home extends Controller{

    public function __construct(){
      $this->postModel = $this->model('_category');
      //echo 'controlador home cargado';
      $this->index();
    }

    public function index(){

      $posts = $this->postModel->getCategory();

      $data = [
        'title'   => 'Bienvenido a community',
        'posts'     => $posts
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

      $posts = $this->postModel->getCategory();

      $data = [
        'title' => 'Bienvenido a community',
        'posts' => $posts
      ];

      $this->view('pages/home',$data);

    }


  }


 ?>
