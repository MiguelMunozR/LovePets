<?php
abstract Class baseModel{
  private static $usuario = 'root';
  private static $contrasena = 'mirock123';
  private static $host = 'localhost';
  protected $database;
  protected $con;
  protected $sql;
  protected $rows = array();
  
abstract protected function insert();
abstract protected function update();
abstract protected function select();
abstract protected function delete();

protected function conectar(){
    try {
      $this->con = new PDO('mysql:host='.self::$host.';dbname='.$this->database,self::$usuario,self::$contrasena);
      $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // echo 'Conexion exitosa';
    } catch (PDOException $e) {
      echo 'Error en la conexion' . $e->getMessage();
    }
  }
  protected function desconectar(){
    $this->con = null;
  }
  protected function setQuery(){
    $this->conectar();
    //https://www.php.net/manual/en/pdo.exec.php
    // Exec only returned the number of rows affected by the query
    $this->con->exec($this->sql);
    $this->desconectar();
    
  }
  protected function getQuery(){
    $this->conectar();
    $result = $this->con->query($this->sql);
    //Metodo uno de almacenar la informacion de la consulta
    //$this->rows = $result->fetch(PDO::FETCH_ASSOC);

    //Metodo dos para almacenar la informacion de la consulta
    while($this->rows[] = $result->fetch(PDO::FETCH_ASSOC));
    $result = null;
    $this->desconectar();
    //https://www.php.net/manual/en/function.array-pop.php
    //delete the last element of array
     array_pop($this->rows);
    //Se hace importante retornar el valor con la funcion array_pop
    return ($this->rows);
  }
  public function __destruct(){

  }
}
  