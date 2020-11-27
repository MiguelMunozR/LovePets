<?php
  //require_once('baseModel.php');
  Class tipo_de_mascotaModel extends baseModel{
    public function __construct(){
      $this->database = 'Diagnostico';
    } 
    public function insert($user_data = array()){
      foreach ($user_data as $key => $value){
        $$key = $value;
      }
        $this->sql="insert into tipo_de_mascota(tipo) values ('$tipo');";
        $this->setQuery();
    }
    public  function select($tipo_mascota=''){
       $this->sql = ($tipo_mascota!='')?"select *from tipo_de_mascota where idtipo_de_mascota=$tipo_mascota":"select * from tipo_de_mascota";
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
        $this->sql= "Update tipo_de_mascota set tipo='$tipo' where idtipo_de_mascota=$idtipo_de_mascota;";
        //echo $this->sql;
        $this->setQuery();
    }
    public function delete($user_delete = ''){
            $this->sql= " DELETE FROM tipo_de_mascota where idtipo_de_mascota=$user_delete;";
            $this->setQuery();
    }
     public function __destruct() {
        
    }
  }

?>