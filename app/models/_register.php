<?php

/**
 *
 */
class _register
{

  function __construct()
  {
    $this->db = new DataBase;
    // code...
  }

  public function register_user($data){

    date_default_timezone_set('America/Mexico_City');

    if(empty($data->country)) {
      // code...
      $extracountry = NULL ;
    }else{
      $extracountry = $data['country'];
    }

    if (empty($data->gender)) {
      // code...
      $extragender = null;
    }else{
      $extragender = $data['gender'];
    }

    $currentdate = date('y-m-d');


    $query = "INSERT INTO `ic_user` VALUES (NULL, '".$data['email']."', '".$data['username']."', '".$data['password']."', '".$data['name']."', '".$data['last_name']."', '".$data['middle_name']."', '".$data['birthday']."', '$extracountry', '0', 1, '$currentdate', '$currentdate', 0, 0, 0, 1)";

    $this->db->query($query);

    return $this->db->execute();

  }

  public function verify_username($username){

    $query = "SELECT count(id) exist FROM ic_user WHERE username = '$username'";

    $this->db->query($query);

    return $this->db->registry();
  }

  public function verify_email($email){

    $query = "SELECT count(id) exist FROM ic_user WHERE email = '$email'";

    $this->db->query($query);

    return $this->db->registry();
  }

}


 ?>
