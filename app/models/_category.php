<?php

  class _category{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function createAdminCategory($title, $summary, $priority){
      $current = date("Y-m-d");
      $this->db->query("INSERT into category (title, summary, create_date,
        priority) VALUES ('".$title."', '".$summary."', '".$current."', '".$priority."')");

      $created = $this->db->execute();

      return $created;
    }

    public function updateCategory($category_id, $title, $summary, $priority){

       $this->db->query(
         "UPDATE category SET title = '$title', summary = '$summary',
         priority = '$priority' where id = $category_id");

       $updated = $this->db->execute();

       return $updated;
    }

    public function deleteCategory($category_id){
      $this->db->query("UPDATE category SET status = 0 where id = " . $category_id);
      $deleted = $this->db->execute();

      return $deleted;
    }

    public function getCategories(){
      $this->db->query("SELECT * from category");

      return $this->db->records();
    }

    public function getTags($category_id){
      $this->db->query("SELECT * FROM metadata_post where id_category = ' $category_id'");

      return $this->db->records();
    }

    public function findCategory($title){
      $this->db->query("SELECT id FROM category where title = $title");

      return $this->db->registry();
    }

  }

 ?>
