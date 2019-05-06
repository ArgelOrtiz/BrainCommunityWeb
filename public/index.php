<?php

  try {
    //cargar el iniciador de app
    require_once '../app/initiator.php';
    //Instanciamos la clase Controlador
    $start = new Core;
  } catch (Exception $e) {
    echo 'Error in index';
  }

//header('Location: Views\Login.php')

 ?>
