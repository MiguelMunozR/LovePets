<?php
Class provedorModel extends baseModel{
    public function __construct(){
      $this->database = 'Diagnostico';
    }
    public function insert($provedor = array()){
      foreach ($provedor as $key => $value){
        $$key = $value;
      }
      $this->sql = "insert into provedor(nombre,direccion,telefono) values('$nombre','$direccion',$telefono);";
       $this->setQuery();
    }
    public function select($user_id = ''){
        //($user_id!='')?"select * from usuarios where =$user_id": 
        //select u.idusuarios,u.usuario,u.contrasena,u.nombre,u.apellidop,u.apellidom,u.correo,u.telefono,t.tipo_usuario from usuarios as u, tipo_usuario as t where u.tipo_usuario=t.idTipo_usuario;
      $this->sql = ($user_id!='')?"select *from provedor where idprovedor=$user_id":"select *from provedor;";
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
        $this->sql= "Update provedor set nombre='$nombre',direccion='$direccion',telefono=$telefono where idprovedor=$idprovedor;";
        //echo $this->sql;
        //,contrasena='$contrasena',nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',correo='$correo',telefono='$telefono',tipo_usuario=$tipoU
        $this->setQuery();
    }
    public function delete($provedor_delete = ''){
            $this->sql= " DELETE FROM provedor where idprovedor=$provedor_delete;";
            $this->setQuery();
    }
    public function __destruct() {
        
    }
  }

