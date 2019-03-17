<?php

  class _category{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function getCategory(){
      $this->db->query("SELECT * FROM category");

      return $this->db->records();
    }


  }


 ?>
