<?php

  class _comment{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function getComments(){
      $this->db->query("SELECT * FROM comments");

      return $this->db->records();
    }

    public function deleteComment($comment_id){
      $this->db->query("DELETE FROM comments where id = " . $comment_id);

      return $this->db->registry();
    }
  }

 ?>
