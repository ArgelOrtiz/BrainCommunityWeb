<?php

  class _post{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function getPosts(){
      $this->db->query("SELECT * FROM ic_post");

      return $this->db->records();
    }

    public function deletePost($post_id){
      $this->db->query("DELETE FROM ic_post where id = " . $post_id);

      return $this->db->registry();
    }
  }

 ?>
