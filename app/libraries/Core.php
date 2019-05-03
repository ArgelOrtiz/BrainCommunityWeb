<?php

  /*
  mapear la url ingresada en el navegador
  1-Controlador 0
  2-Método      1
  3-Parámetro   2

  Ejemplo: /post/ver/5
  */

  class Core{
    protected $currencyController = 'Home';
    protected $currencyMethod     = 'index';
    protected $parameters         = [];

    //constructor
    public function __construct(){
      //separa la url
      $url = $this->getUrl();

      //Verificar que el controlador exista
      if (file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
        // code...
        //si existe se configura como controlador actual ($currencyController)
        $this->currencyController = ucwords($url[0]);

        //unset indice
        unset($url[0]);
      }

      //requerir el controlador
      require_once '../app/controllers/'.$this->currencyController.'.php';
      $this->currencyController = new $this->currencyController;


      //verificar si se mando un metodo
      if (isset($url[1])) {
        // code...
        //verificar si existe el metodo
        if (method_exists($this->currencyController,$url[1])) {
          // code...
          //si existe configurar como el metodo actual ($currencyMethod)
          $this->currencyMethod = $url[1];

          //unset indice
          unset($url[1]);
        }
      }

      //obtener parametros
      $this->parameters = $url?array_values($url):[];

      //llamar callback con parametro array
      call_user_func_array([$this->currencyController, $this->currencyMethod], $this->parameters);



      //echo $this->currencyMethod;

    }

    public function getUrl(){
      //echo $_GET['url'];

      if (isset($_GET['url'])) {
        // code...

        //rtrim corta espacisos en blanco despues de '/'
        $url = rtrim($_GET['url'],'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/',$url);
        return $url;

      }
    }


  }


 ?>
