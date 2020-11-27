<?php
Class productosModel extends baseModel{
    public function __construct(){
      $this->database = 'Diagnostico';
    }
    public function insert($producto = array()){
      foreach ($producto as $key => $value){
        $$key = $value;
      }
      $this->sql = "insert into producto(nombre,costo,precio,cantidad) values('$nombre',$costo,$precio,$cantidad);";
       $this->setQuery();
    }
    public function select($user_id = ''){
        //($user_id!='')?"select * from usuarios where =$user_id": 
        //select u.idusuarios,u.usuario,u.contrasena,u.nombre,u.apellidop,u.apellidom,u.correo,u.telefono,t.tipo_usuario from usuarios as u, tipo_usuario as t where u.tipo_usuario=t.idTipo_usuario;
      $this->sql = ($user_id!='')?"select *from producto where idproducto=$user_id":"select *from producto;";
      $datos = array();
       $this->getQuery();
      foreach($this->rows as $key => $value){
        $datos[$key] = $value;
      }
      return $datos;
    }
   public function selectP($user_id = ''){
        //($user_id!='')?"select * from usuarios where =$user_id": 
        //select u.idusuarios,u.usuario,u.contrasena,u.nombre,u.apellidop,u.apellidom,u.correo,u.telefono,t.tipo_usuario from usuarios as u, tipo_usuario as t where u.tipo_usuario=t.idTipo_usuario;
      $this->sql = ($user_id!='')?"select precio from producto where nombre=$user_id":"select *from producto;";
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
        $this->sql= "Update producto set nombre='$nombre',costo=$costo,precio=$precio,cantidad=$cantidad where idproducto=$idproducto;";
        //echo $this->sql;
        //,contrasena='$contrasena',nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',correo='$correo',telefono='$telefono',tipo_usuario=$tipoU
        $this->setQuery();
    }
    public function delete($producto_delete = ''){
            $this->sql= " DELETE FROM producto where idproducto=$producto_delete;";
            $this->setQuery();
    }
    public function __destruct() {
        
    }
  }

