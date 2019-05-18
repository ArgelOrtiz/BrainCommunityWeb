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

    public function getTags($id){
      $this->db->query("DELETE FROM metadata_post where id_category = '$id'");

      return $this->db->registry();
    }

    public function createPost($user_id, $category_id,$title,$summary,$currentdate){
      $this->db->query("INSERT into ic_post VALUES (NULL,'$user_id ','$category_id ','$title','$summary','$currentdate','$currentdate',0,0,1,1,1 )");

      return $this->db->execute();
    }

    public function currentPost($user_id,$title,$currentdate){
      $this->db->query("SELECT id FROM ic_post WHERE id_user = '$user_id' AND create_date = '$currentdate'  AND title = '$title' LIMIT 1");

      return $this->db->registry();
    }

    public function addMetadataPost($post_id,$metadata_id){
      $this->db->query("INSERT INTO post_metadata_post values (null,$post_id,$metadata_id) ");

      return $this->db->execute();
    }
  }

 ?>
