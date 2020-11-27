<?php
Class propietarioModel extends baseModel{
    public function __construct(){
      $this->database = 'Diagnostico';
    }
    public function insert($producto = array()){
      foreach ($producto as $key => $value){
        $$key = $value;
      }
      $this->sql = "insert into propietario(nombre,apellido,edad,telefono,direccion) values('$nombre','$apellido',$edad,$telefono,'$direccion');";
       $this->setQuery();
    }
    public function select($user_id = ''){
        //($user_id!='')?"select * from usuarios where =$user_id": 
        //select u.idusuarios,u.usuario,u.contrasena,u.nombre,u.apellidop,u.apellidom,u.correo,u.telefono,t.tipo_usuario from usuarios as u, tipo_usuario as t where u.tipo_usuario=t.idTipo_usuario;
      $this->sql = ($user_id!='')?"select *from propietario where idpropietario=$user_id":"select * from propietario;";
      $datos = array();
       $this->getQuery();
      foreach($this->rows as $key => $value){
        $datos[$key] = $value;
      }
      return $datos;
    }
      public function update($user_update = array()){
        foreach ($user_update as $key => $value){
            $$key = $value;
        }
        $this->sql= "Update propietario set nombre='$nombre',apellido='$apellido',edad=$edad,telefono=$telefono,direccion='$direccion' where idpropietario=$idpropietario;";
        //echo $this->sql;
        //,contrasena='$contrasena',nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',correo='$correo',telefono='$telefono',tipo_usuario=$tipoU
        $this->setQuery();
    }
    public function delete($producto_delete = ''){
            $this->sql= " DELETE FROM propietario where idpropietario=$producto_delete;";
            $this->setQuery();
    }
    public function __destruct() {
        
    }
  }
