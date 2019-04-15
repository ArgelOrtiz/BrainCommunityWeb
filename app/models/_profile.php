<?php

  /**
   *
   */
  class _profile {
    private $db;


    function __construct()
    {
      // code...
      $this->db = new DataBase;
    }

    public function editName($name){
      $this->db->query("UPDATE ic_user SET first_name='$name'");

      return $this->db->execute();
    }

    public function editMiddleName($last){
      $this->db->query("UPDATE ic_user SET middle_name='$last'");

      return $this->db->execute();
    }

    public function refreshData($id){
      $this->db->query("SELECT * from ic_user WHERE id='$id'");

      return $this->db->registry();
    }
  }


 ?>
