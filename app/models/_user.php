<?php

  class _user{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function getUsers(){
      $this->db->query("SELECT * FROM ic_user");

      return $this->db->records();
    }

  }

 ?>
