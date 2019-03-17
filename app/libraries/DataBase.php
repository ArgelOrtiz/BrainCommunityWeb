<?php


  /**
   * Clase para conectarse a la base de datos y ejecutar consultas PDO
   */
  class DataBase
  {
    private $host           = DB_HOSt;
    private $user           = DB_USER;
    private $pass           = DB_PASSWORD;
    private $name_database  = DB_NAME;


    private $dbh;   //data base handler
    private $stmt;  //statement
    private $error;

    public function __construct(){
      //configurar conexion
      $dsn = 'mysql:host='.$this->host.';dbname='.$this->name_database;

      $options = array(
        PDO::ATTR_PERSISTENT  => true,
        PDO::ATTR_ERRMODE     => PDO::ERRMODE_EXCEPTION
      );

      //Crear una instancia de PDO
      try {
        $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);

        //corregir caracteres especiales
        $this->dbh->exec('set names utf8');
      } catch (PDOException $e) {
        $this->error = $e->getMessage();
        echo $this->error;
      }


    }

    //Prepara la consulta
    public function query($sql){
      $this->stmt = $this->dbh->prepare($sql);
    }

    //Vincula la consulta con el metodo bind
    public function bind($parameter, $value, $type=null){
      if (is_null($type)) {
        // code...
        switch (true) {
          case is_int($valor):
            // code...
            $type = PDO::PARAM_INT;
            break;
          case is_bool($valor):
            // code...
            $type = PDO::PARAM_BOOL;
            break;
          case is_null($valor):
              // code...
              $type = PDO::PARAM_NULL;
              break;
          default:
            // code...
            $type = PDO::PARAM_STR;
            break;

        }
      }

      $this->stmt->bindValue($parameter, $value, $type);
    }

    //Ejecuta la consulta
    public function execute(){
      return $this->stmt->execute();

    }

    //obtener registros de consultas
    public function records(){
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //optener un solo registro
    public function registry(){
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //obtener cantidad de filas con el metodo rowCount
    public function rowCount(){
      return $this->stmt->rowCount();
    }

  }



 ?>
