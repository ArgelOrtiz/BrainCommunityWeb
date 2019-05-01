<?php

  /*Clase controlador principal
  se encarga de poder cargar los modelos y mas vistas
  */
  class Controller{

    //cargar modelo
    public function model($model){
      //cargar
      require_once '../app/models/'.$model.'.php';

      //instanciar el modelo
      return new $model();

    }

    //cargar vista
    public function view($view, $data=[]){
      //verificar si la vista existe
      if (file_exists('../app/views/'.$view.'.php')) {
        // code...
        require_once '../app/views/'.$view.'.php';

      }else{
        //si no existe
        die('la vista no existe');


      }
    }

    //termporal
    public function controller($location = null){
      //cargar
      if ($location != null ) {
        // code...
        $location = '/'.$location;
      }else {
        // code...
        $location = '';
      }

      header('Location: '.ROUTE_URL.$location);
      die();
    }

  }



 ?>
