<?php
  //require_once('baseModel.php');
  Class usuarioModel extends baseModel{
    public function __construct(){
      $this->database = 'diagnostico';
    }
    public function insert($user_data = array()){
      foreach ($user_data as $key => $value){
        $$key = $value;
      }
      $this->sql = "insert into usuarios(usuario,contrasena,nombre,apellidop,apellidom,correo,telefono,tipo_usuario) values('$usuario','$contrasena','$nombre','$apellidop','$apellidom','$correo',$telefono,$tipo_usuario);";
       $this->setQuery();
    }
    public function select($user_id = ''){
        //($user_id!='')?"select * from usuarios where =$user_id": 
        //select u.idusuarios,u.usuario,u.contrasena,u.nombre,u.apellidop,u.apellidom,u.correo,u.telefono,t.tipo_usuario from usuarios as u, tipo_usuario as t where u.tipo_usuario=t.idTipo_usuario;
      $this->sql = ($user_id!='')?"select *from usuarios where idusuarios=$user_id":"select idusuarios,usuario,contrasena,nombre,apellidop,apellidom,correo,telefono,tipo_usuario.tipo_usuario from usuarios inner join tipo_usuario where tipo_usuario.idTipo_usuario=usuarios.tipo_usuario;";
      $datos = array();
       $this->getQuery();
      foreach($this->rows as $key => $value){
        $datos[$key] = $value;
      }
      return $datos;
    }
    public function selectUsuario($usuario = ''){
        //($user_id!='')?"select * from usuarios where =$user_id": 
        //select u.idusuarios,u.usuario,u.contrasena,u.nombre,u.apellidop,u.apellidom,u.correo,u.telefono,t.tipo_usuario from usuarios as u, tipo_usuario as t where u.tipo_usuario=t.idTipo_usuario;
      $this->sql = ($usuario!='')?"select usuario from usuarios where usuario='$usuario'":"select * from usuario";
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
        $this->sql= "Update usuarios set usuario='$usuario',contrasena='$contrasena',nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',correo='$correo',telefono=$telefono,tipo_usuario=$tipo_usuario where idusuarios=$idusuarios;";
        //echo $this->sql;
        //,contrasena='$contrasena',nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',correo='$correo',telefono='$telefono',tipo_usuario=$tipoU
        $this->setQuery();
    }
    public function delete($user_delete = ''){
            $this->sql= " DELETE FROM usuarios where idusuarios=$user_delete;";
            $this->setQuery();
    }
    public function login($d=array()){
        foreach ($d as $key => $value) {
            $$key=$value;
        }
        //"call login('$usuario','$contrasena');"
        
        $this->sql="call login('$usuario','$contrasena');";
       $datos = array();
        $this->getQuery();
        foreach($this->rows as $key => $value){
        $datos[$key] = $value;
      }
      return $datos;
    }
    public function __destruct() {
        
    }
  }
  $user_info = array();
  $user_update= array(
      'idusuarios'=> 4,
      'usuario'=>'Nuevo usuario',
      
          );
  $user_data = array(
    'usuario' => 'poderosoabi',
    'contrasena' => 'gordito21',
    'nombre' => 'abimael',
    'apellidop' => 'lira',
    'apellidom' => 'guzman',
    'correo' => 'abi@gmail.com',
    'telefono' => 2225514936,
    
  );
  $loginn = array(
    'usuario' => 'maria',
    'contrasena' => 'm1234',
    'nombre' => 'maria',
    'apellidop' => 'hernandez',
    'apellidom' => 'gomez',
    'correo' => 'maria@gmail.com',
    'telefono' => 2024341094
  );
  
 ?>