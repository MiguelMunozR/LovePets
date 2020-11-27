<?php
Class venta_productoModel extends baseModel{
    public function __construct(){
      $this->database = 'Diagnostico';
    }
    public function insert($venta= array()){
      foreach ($venta as $key => $value){
        $$key = $value;
      }
      $this->sql = "insert into venta_producto(cantidad,costo,fecha,producto_idproducto) values ($cantidad,$costo,'$fecha',$producto_idproducto);";
       $this->setQuery();
    }
    public function select($user_id = ''){
        //($user_id!='')?"select * from usuarios where =$user_id": 
        //select u.idusuarios,u.usuario,u.contrasena,u.nombre,u.apellidop,u.apellidom,u.correo,u.telefono,t.tipo_usuario from usuarios as u, tipo_usuario as t where u.tipo_usuario=t.idTipo_usuario;
      $this->sql = ($user_id!='')?"select *from venta_producto where idventa_producto=$user_id":"select idventa_producto,venta_producto.cantidad,venta_producto.costo,venta_producto.fecha,producto.nombre from venta_producto inner join producto where producto.idproducto=venta_producto.producto_idproducto;";
      $datos = array();
       $this->getQuery();
      foreach($this->rows as $key => $value){
        $datos[$key] = $value;
      }
      return $datos;
    }
   
      public function update($Venta_update = array()){
        foreach ($Venta_update as $key => $value){
            $$key = $value;
        }
        $this->sql= "Update venta_producto set cantidad=$cantidad,costo=$costo,fecha='$fecha',producto_idproducto=$producto_idproducto where idventa_producto=$idventa_producto;";
        //echo $this->sql;
        //,contrasena='$contrasena',nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',correo='$correo',telefono='$telefono',tipo_usuario=$tipoU
        $this->setQuery();
    }
    public function delete($venta_delete = ''){
            $this->sql= " DELETE FROM venta_producto where idventa_producto=$venta_delete;";
            $this->setQuery();
    }
    public function __destruct() {
        
    }
  }
