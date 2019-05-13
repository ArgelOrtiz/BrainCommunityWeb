<?php

  class _category{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function getCategories(){
      $this->db->query("SELECT * from category");

      return $this->db->records();
    }

    public function deleteCategory($category_id){
      $this->db->query("DELETE FROM category where id = " . $category_id);

      return $this->db->registry();
    }

    public function getTags($category_id){
      $this->db->query("SELECT * FROM metadata_post where id_category = ' $category_id'");

      return $this->db->records();
    }

  }

 ?>
