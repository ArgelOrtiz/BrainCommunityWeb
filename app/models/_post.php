<?php

  class _post{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function getPosts(){
      $this->db->query(
        "SELECT P.id, P.title, P.comments, P.create_date, P.summary, C.title as title_category
        FROM ic_post P
        JOIN category C
        ON C.id = P.id_category
        ORDER BY create_date desc");

      return $this->db->records();
    }

    public function countPost(){
      $this->db->query("SELECT count(id) count FROM ic_post ORDER BY create_date desc");

      return $this->db->registry();
    }

    public function categoryPost($id){
      $this->db->query(
        "SELECT P.id, P.title, P.comments, P.create_date, P.summary, C.title as title_category
        FROM ic_post P
        JOIN category C
        ON C.id = P.id_category
        WHERE id_category = $id
        ORDER BY create_date desc");

      return $this->db->records();
    }

    public function getIdCategory($title){
      $this->db->query("SELECT id FROM category WHERE title = '$title'");

      return $this->db->registry();
    }

    public function myPost($id){
      $this->db->query("SELECT * FROM ic_post WHERE id_user = $id ORDER BY create_date desc");

      return $this->db->records();
    }

    public function post($id){
      $this->db->query("SELECT * FROM ic_post WHERE id = $id");

      return $this->db->registry();
    }

    public function getCommentPost($id){
      $this->db->query("SELECT comments FROM ic_post WHERE id = $id");

      return $this->db->registry();
    }

    public function userPost($id){
      $this->db->query("SELECT id, username, points FROM ic_user WHERE id= $id");

      return $this->db->registry();
    }

    public function increaseComments($comments, $id){
      $this->db->query("UPDATE ic_post SET comments = $comments WHERE id= $id");

      return $this->db->execute();
    }

    public function increaseViews($views, $id){
      $this->db->query("UPDATE ic_post SET 	visits = $views WHERE id= $id");

      return $this->db->execute();
    }

    public function currentCategory($id){
      $this->db->query("SELECT id, title FROM category WHERE id= $id");

      return $this->db->registry();
    }

    public function getComments($id){
      $this->db->query("SELECT C.summary, C.create_date, U.username
        FROM comments C
        JOIN ic_user U
        ON C.id_user = U.id
        WHERE id_post = $id
        ORDER BY C.create_date desc");

      return $this->db->records();
    }

    public function setComment($id_post, $id_user, $comment,$currentdate){
      $this->db->query("INSERT INTO comments VALUES (null,'$id_post','$id_user','$comment','$currentdate')");

      return $this->db->execute();
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

    public function getSearchPost($search){
      $this->db->query("SELECT * FROM ic_post WHERE title LIKE '%$search%'");

      return $this->db->records();
    }
  }

 ?>
