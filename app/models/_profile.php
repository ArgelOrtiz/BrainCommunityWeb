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

    public function editUserName($userName, $id){
      $this->db->query("UPDATE ic_user SET username='$userName' WHERE id='$id'");

      return $this->db->execute();
    }

    public function editEmail($email, $id){
      $this->db->query("UPDATE ic_user SET email='$email' WHERE id='$id'");

      return $this->db->execute();
    }

    public function editName($name, $id){
      $this->db->query("UPDATE ic_user SET first_name='$name' WHERE id='$id'");

      return $this->db->execute();
    }

    public function editMiddleName($middle, $id){
      $this->db->query("UPDATE ic_user SET middle_name='$middle' WHERE id='$id'");

      return $this->db->execute();
    }

    public function editLastName($last, $id){
      $this->db->query("UPDATE ic_user SET last_name='$last' WHERE id='$id'");

      return $this->db->execute();
    }

    public function editCountry($country, $id){
      $this->db->query("UPDATE ic_user SET country='$country' WHERE id='$id'");

      return $this->db->execute();
    }

    public function editGender($gender, $id){
      $this->db->query("UPDATE ic_user SET gender='$gender' WHERE id='$id'");

      return $this->db->execute();
    }

    public function getExperience($id){
      $this->db->query("SELECT * from experience WHERE id_user ='$id'");

      return $this->db->records();
    }

    public function getClasification(){
      $this->db->query("SELECT * from clasification");

      return $this->db->records();
    }

    public function createExperience($data){
      $this->db->query("INSERT into experience
        values (null,'".$data['id']."','".$data['clasification']."','".$data['name']."','".$data['summary']."','".$data['extra']."',
        '".$data['start_date']."','".$data['end_date']."') ");

      return $this->db->execute();
    }

    public function deleteExperience($id){
      $this->db->query("DELETE from experience WHERE id='$id'");

      return $this->db->execute();
    }

    public function refreshData($id, $id){
      $this->db->query("SELECT * from ic_user WHERE id='$id'");

      return $this->db->registry();
    }

    public function getUser($username){
      $this->db->query("SELECT id, username, first_name, 	middle_name,	last_name, country, gender, posts, comments, points from ic_user WHERE username='$username'");

      return $this->db->registry();

    }

    public function getUserPoints($id){
      $this->db->query("SELECT points FROM ic_user WHERE id = $id ");

      return $this->db->registry();
    }

    public function setUserPoints($points,$id){
      $this->db->query("UPDATE ic_user set points = $points WHERE id = $id ");

      return $this->db->execute();
    }
  }


 ?>
