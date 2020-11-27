<?php
Class compra_productoModel extends baseModel{
    public function __construct(){
      $this->database = 'Diagnostico';
    }
    public function insert($venta= array()){
      foreach ($venta as $key => $value){
        $$key = $value;
      }
      $this->sql = "insert into compra_producto(cantidad,precio,fecha,producto_idproducto,provedor_idprovedor) values ($cantidad,$precio,'$fecha',$producto_idproducto,$provedor_idprovedor);";
       $this->setQuery();
    }
    public function select($user_id = ''){
        //($user_id!='')?"select * from usuarios where =$user_id": 
        //select u.idusuarios,u.usuario,u.contrasena,u.nombre,u.apellidop,u.apellidom,u.correo,u.telefono,t.tipo_usuario from usuarios as u, tipo_usuario as t where u.tipo_usuario=t.idTipo_usuario;
      $this->sql = ($user_id!='')?"select *from compra_producto where idcompra_producto=$user_id":"select compra_producto.idcompra_producto,compra_producto.cantidad,compra_producto.precio,compra_producto.fecha,producto.nombre,provedor.nombre from  compra_producto inner join producto on producto.idproducto=compra_producto.producto_idproducto inner join provedor on provedor.idprovedor=compra_producto.provedor_idprovedor;";
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
        $this->sql= "Update compra_producto set cantidad=$cantidad,precio=$precio,fecha='$fecha',producto_idproducto=$producto_idproducto,provedor_idprovedor=$provedor_idprovedor where idcompra_producto=$idcompra_producto;";
        //echo $this->sql;
        //,contrasena='$contrasena',nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',correo='$correo',telefono='$telefono',tipo_usuario=$tipoU
        $this->setQuery();
    }
    public function delete($compra_delete = ''){
            $this->sql= " DELETE FROM compra_producto where idcompra_producto=$compra_delete;";
            $this->setQuery();
    }
    public function __destruct() {
        
    }
  }
