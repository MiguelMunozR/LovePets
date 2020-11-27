<?php
  //require_once('baseModel.php');
  Class tipo_usuariosModel extends baseModel{
    public function __construct(){
      $this->database = 'Diagnostico';
    } 
    public function insert($user_data = array()){
      foreach ($user_data as $key => $value){
        $$key = $value;
      }
        $this->sql="insert into tipo_usuario(tipo_usuario) values ('$tipo_usuario');";
        $this->setQuery();
    }
    public  function select($tipo_usuario=''){
       $this->sql = ($tipo_usuario!='')?"select *from tipo_usuario where idTipo_usuario=$tipo_usuario":"select * from tipo_usuario";
      $datos = array();
       $this->getQuery();
      foreach($this->rows as $key => $value){
        $datos[$key] = $value;
      }
      return $datos;
    }
     public function Update($user_update = array()){
        foreach ($user_update as $key => $value){
            $$key = $value;
        }
        $this->sql= "Update tipo_usuario set tipo_usuario='$tipo_usuario' where idTipo_usuario=$idTipo_usuario;";
        //echo $this->sql;
        $this->setQuery();
    }
    public function delete($user_delete = ''){
            $this->sql= " DELETE FROM tipo_usuario where idTipo_usuario=$user_delete;";
            $this->setQuery();
    }
     public function __destruct() {
        
    }
  }

?>