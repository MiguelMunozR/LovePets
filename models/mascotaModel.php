<?php
Class mascotaModel extends baseModel{
    public function __construct(){
      $this->database = 'Diagnostico';
    }
    public function insert($venta= array()){
      foreach ($venta as $key => $value){
        $$key = $value;
      }
      $this->sql = "insert into mascota(nombre,edad,raza,propietario,tipomascota) values ('$nombre','$edad','$raza',$propietario,$tipomascota);";
       $this->setQuery();
    }
    public function select($user_id = ''){
        //($user_id!='')?"select * from usuarios where =$user_id": 
        //select u.idusuarios,u.usuario,u.contrasena,u.nombre,u.apellidop,u.apellidom,u.correo,u.telefono,t.tipo_usuario from usuarios as u, tipo_usuario as t where u.tipo_usuario=t.idTipo_usuario;
      $this->sql = ($user_id!='')?"select *from mascota where idmascota=$user_id":"select idmascota,mascota.nombre,mascota.edad,mascota.raza,propietario.nombre,tipo_de_mascota.tipo from  mascota inner join propietario on propietario.idpropietario=mascota.propietario inner join tipo_de_mascota on tipo_de_mascota.idtipo_de_mascota=mascota.tipomascota;";
      $datos = array();
       $this->getQuery();
      foreach($this->rows as $key => $value){
        $datos[$key] = $value;
      }
      return $datos;
    }
      public function update($mascota_update = array()){
        foreach ($mascota_update as $key => $value){
            $$key = $value;
        }
        $this->sql= "Update mascota set nombre='$nombre',edad=$edad,raza='$raza',propietario=$propietario,tipomascota=$tipomascota where idmascota=$idmascota;";
        //echo $this->sql;
        //,contrasena='$contrasena',nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',correo='$correo',telefono='$telefono',tipo_usuario=$tipoU
        $this->setQuery();
    }
    public function delete($compra_delete = ''){
            $this->sql= " DELETE FROM mascota where idmascota=$compra_delete;";
            $this->setQuery();
    }
    public function __destruct() {
        
    }
  }

