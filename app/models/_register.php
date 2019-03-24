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

    date_default_timezone_set('America/Mexico_City')

    if ($data->country != null && $data->country != '') {
      // code...
      $extracountry = $data->country :
    }else{
      $extracountry = NULL ;
    }

    if ($data->gender != null && $data->gender != '') {
      // code...
      $extragender = $data->gender;
    }else{
      $extragender = null;

    }
    $this->db->query(INSERT INTO `ic_user` VALUES (NULL, $data->email, $data->username, $data->password, $data->first_name, $data->middle_name, $data->last_name, $data->birthday, $extracountry, $extragender, '', date_default_timezone_get(), date_default_timezone_get(), 0, 0, 0, 0));

    return $this->db->registry();

  }
}


 ?>
