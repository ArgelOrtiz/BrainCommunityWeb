<?php

  class _login{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function login_user($username,$password){


      $this->db->query("SELECT id FROM `ic_user` WHERE (username = '$username' and PASSWORD = '$password')");

      return $this->db->registry();
    }


  }

 ?>
