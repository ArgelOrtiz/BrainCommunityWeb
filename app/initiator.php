<?php

  //cargar librerias
  require_once 'config/config.php';


  // require_once 'libraries/DataBase.php';
  // require_once 'libraries/Controller.php';
  // require_once 'libraries/Core.php';

  //Autoload de php
  spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';

  });

 ?>
