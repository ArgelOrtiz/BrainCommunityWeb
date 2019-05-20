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

    public function createAdminUser($email, $username, $password, $first_name,$middle_name, $last_name, $birthday, $status, $country, $gender, $rol){

      $current = date("Y-m-d");
      $this->db->query("INSERT into ic_user (email, username, password,
        first_name, middle_name, last_name, birthday, country, gender, status,
        create_date, last_update, posts, comments, points, role)
        VALUES('".$email."', '".$username."', '".$password."',
          '".$first_name."','".$middle_name."', '".$last_name."',
          '".$birthday."','".$country."', '".$gender."','".$status."',
          '".$current."', '".$current."', 0, 0, 0, '".$role."')");

      $created = $this->db->execute();

      return $created;
    }

    public function updateUser($user_id, $first_name, $middle_name, $last_name, $birthday,
      $status, $country, $gender, $rol){

      $this->db->query("UPDATE ic_user SET first_name = '".$first_name."',
        middle_name ='".$middle_name."', last_name = '".$last_name."',
        birthday ='".$birthday."', status ='".$status."', country ='".$country."',
        gender ='".$gender."', role ='".$role."' where id = ".$user_id);
      $updated = $this->db->execute();

      return $updated;
    }

    public function deleteUser($user_id){
      $this->db->query("UPDATE ic_user SET status = 0 where id = " . $user_id);
      $deleted = $this->db->execute();

      return $deleted;
    }

  }

 ?>
