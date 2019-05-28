<?php

  class _issue{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function get_issues(){
      $this->db->query("SELECT * from issue");

      return $this->db->records();
    }
  }

 ?>
