<?php

  class _login{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function login_user($id,$password){

      $this->db->query("SELECT * FROM ic_user WHERE (id = '$id' and PASSWORD = '$password')");

      return $this->db->registry();
    }

    public function verifyUser($username){
      $this->db->query("SELECT * FROM ic_user WHERE username = '$username'");

      return $this->db->registry();

    }


  }

 ?>
