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

    public function getUserById($user_id){
      $query = "SELECT * FROM ic_user where id=". $user_id;
      $this->db->query($query);

      return $this->db->records();
    }

    public function deleteUser($user_id){
      $this->db->query("DELETE FROM ic_user where id = " . $user_id);

      return $this->db->registry();
    }

  }

 ?>