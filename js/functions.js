
function logout(){
    $.ajax({
        type: 'GET',
        url: 'logout',
        success:function(r){
            location.href= "./login";
        }
    });
}
function login(){
 datos= $('#loginform').serialize();
     $.ajax({
      type:'POST',
      data:datos,
      url: 'procesalogin',
      success:function(r){
        console.log(r);
        dataLogin=$.parseJSON(r);
        if(dataLogin['r'] == 1){
            location.href="./menu";
        }else if(dataLogin[0]['r']=='nopassword'){
            $('#contrasena').val('');
            alertify.warning('El usuario y la contraseña estan mal');
        }else if(dataLogin[0]['r']=='nousser'){
            $('#user').val('');
            $('#contrasena').val('');
            alertify.warning('El usuario no existe registrarse o intente otro usuario');
        }else{
            alertify.warning("Error en el sistema");
        }
      }
  });
}
function registrarUsuario(){
    var number=$('#telefonoR').val();
    var name = $('#userR').val();
    var correo=$('#correoR').val();
if( name == null || name.length==0 || /^\s+$/.test(name)){
    $('#userR').css("border","solid red 2px");
    alertify.warning('falta el nombre de usuario');
}else if(isNaN(number)){
    $('#telefonoR').css("border","solid red 2px");
    $('#telefonoR').val("");
    alertify.warning('la informacion debe ser un numero');
}else if(!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(correo))){
    $('#correoR').css("border","solid red 2px");
    $('#correoR').val("");
    alertify.warning('El corrreo es incorrecto'); 
}
else{
    datos=$('#usersForm').serialize();
    console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './registrarUsuario',      
      success:function(){
          //if(r == 1){
            var actualPage=window.location.pathname;
          if(actualPage=='/proyectoFinalVeterinaria/login'){
            $('#exampleModal').modal('hide');
             alertify.success("se envio al sevidor");
          }else if(actualPage=='/proyectoFinalVeterinaria/users'){
              $('#exampleModal').modal('hide');
              location.href='./users';
          }
//      }else{
//           alertify.error("el usuario ya existe");
//           $('#usuario').css()("border","solid red 2 px");
//      }
      }
  });  
    }
  
}
function registrarTipoUsuario(){
  datos=$('#RegistroTipoU').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './registrarTipoUsuario',
      success:function(r){
        
          var actualPage=window.location.pathname;
         if(actualPage=='/proyectoFinalVeterinaria/usersView.php'){
              $('#RegistroTipoU').modal('hide');
              //$("#Tabla_TipoUsuarios").load('Tablas/tbl_tipo_usuario.php');
              location.href='./users';
          }
        //$('#exampleModal').modal('hide');
         // location.href='usersView.php';
       //$("#DataTableusuarios").load('Tablas/tbl_usuarios.php');
      }
  });
}
function EliminarUsuario(id){
    alertify.confirm("Desea eliminar este registro??",
  function(){
    $.ajax({
     type:'POST',
     data:{'id':id},
     url:'./eliminarUsuario',
     success:function(r){
         location.href='./users';
          //$("#DataTableusuarios").load('Tablas/tbl_usuarios.php')
         alertify.warning('Registro eliminado');
     }
    }            
);
  },
  function(){
    alertify.warning('Accion cancelada');
  });
}
function EliminarTipoUsuario(id){
    alertify.confirm("Desea eliminar este registro??",
  function(){
    $.ajax({
     type:'POST',
     data:{'ide':id},
     url:'./eliminarTipoUsuario',
     success:function(r){
         location.href='users';
          $("#Tabla_TipoUsuarios").load('Tablas/tbl_tipo_usuarios.php');
         alertify.warning('Registro eliminado');
     }
    }            
);
  },
  function(){
    alertify.warning('Accion cancelada');
  });
}
function getInfoUsuario(id){
$.ajax({
    type: 'POST',
    data:{'id' : id},
    url: './getInfoUsuario',
    success:function(r){
        datos=$.parseJSON(r);
                $('#id').val(datos[0]['idusuarios']);
                $('#useru').val(datos[0]['usuario']);
                $('#contraseñau').val(datos[0]['contrasena']);
                $('#nombreu').val(datos[0]['nombre']);
                $('#apellidopu').val(datos[0]['apellidop']);
                $('#apellidomu').val(datos[0]['apellidom']);
                $('#correou').val(datos[0]['correo']);
                $('#telefonou').val(datos[0]['telefono']);
                $('#tipo_usuariou').val(datos[0]['tipo_usuario']);
    }
});
}
function getInfoTipoUsuario(id){
$.ajax({
    type: 'POST',
    data:{'ide' : id},
    url: './getinfoTipoUsuario',
    success:function(r){
        datos=$.parseJSON(r);
        $('#ide').val(datos[0]['idTipo_usuario']);
        $('#TipoU_of_form').val(datos[0]['tipo_usuario']);
    }
});
}
function actualizarUsuario(){
  datos=$('#UpdateusersForm').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './actualizarUsuario',
      success:function(){
        $('#ActualizarModal').modal('hide');
        //$('#DataTableUsuarios').load('Tablas/tbl_usuario.php');
      }
  });
}
function actualizarTipoUsuario(){
  datos=$('#actTipoU').serialize();
  $.ajax({
      type:'POST',
      data:datos,
      url: './actualizarTipoUsuario',
      success:function(r){
          console.log(r);
        $('#ActualizarTipoUsuario').modal('hide');
        //$('#DataTableUsuarios').load('Tablas/tbl_tipo_usuarios.php');
      }
  });
}


function subirArchivo(){
 var datos= new FormData($('#formArchivo')[0]);
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './subirArchivo',
      contentType: false,
      processData: false,
      success:function(){
       alertify.warning("Archivos agredados");
      }
  });
}
function registrarProducto(){
  datos=$('#productosForm').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './registrarProducto',
      success:function(){
          var actualPage=window.location.pathname;
         if(actualPage=='/proyectoFinalVeterinaria/productosView.php'){
              $('#exampleModalProducto').modal('hide');
              //$("#Tabla_TipoUsuarios").load('Tablas/tbl_tipo_usuario.php');
              location.href='./productos';
          }
      }
  });
}
function getInfoProducto(id){
$.ajax({
    type: 'POST',
    data:{'idp' : id},
    url: './getInfoProducto',
    success:function(r){
        datos=$.parseJSON(r);
        console.log(r);
                $('#idp').val(datos[0]['idproducto']);
                $('#productoN').val(datos[0]['nombre']);
                $('#costoA').val(datos[0]['costo']);
                $('#precioA').val(datos[0]['precio']);
                $('#cantidadA').val(datos[0]['cantidad']);
                
    }
});
}

function actualizarProducto(){
  datos=$('#UpdateproductoForm').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './actualizarProducto',
      success:function(r){
          console.log(r);
        $('#ActualizarpModalProducto').modal('hide');
        //$('#DataTableUsuarios').load('Tablas/tbl_usuario.php');
      }
  });
}
function EliminarProducto(id){
    alertify.confirm("Desea eliminar este producto??",
  function(){
    $.ajax({
     type:'POST',
     data:{'idp':id},
     url:'./eliminarProducto',
     success:function(r){
         location.href='./productos';
          //$("#DataTableusuarios").load('Tablas/tbl_usuarios.php')
         alertify.warning('Producto eliminado');
     }
    }            
);
  },
  function(){
    alertify.warning('Accion cancelada');
  });
}
function registrarProvedor(){
  datos=$('#provedorForm').serialize();
  $.ajax({
      type:'POST',
      data:datos,
      url: './registrarProvedor',
      success:function(){
          //var actualPage=window.location.pathname;
         //if(actualPage=='/proyectoFinalVeterinaria/provedorView.php'){
              $('#exampleModalProvedor').modal('hide');
              //$("#Tabla_TipoUsuarios").load('Tablas/tbl_tipo_usuario.php');
              location.href='./provedor';
          //}
      }
  });
}
function getInfoProvedor(id){
$.ajax({
    type: 'POST',
    data:{'idpr' : id},
    url: './getInfoProvedor',
    success:function(r){
        datos=$.parseJSON(r);
        $('#idpr').val(datos[0]['idprovedor']);
        $('#provedorN').val(datos[0]['nombre']);
        $('#direccionA').val(datos[0]['direccion']);
        $('#telefonoA').val(datos[0]['telefono']);
    }
});
}

function actualizarProvedor(){
  datos=$('#UpdateprovedorForm').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './actualizarProvedor',
      success:function(r){
          console.log(r);
        $('#ActualizarpModalProvedor').modal('hide');
        //$('#DataTableUsuarios').load('Tablas/tbl_usuario.php');
      }
  });
}
function EliminarProvedor(id){
    alertify.confirm("Desea eliminar este producto??",
  function(){
    $.ajax({
     type:'POST',
     data:{'idpr':id},
     url:'./eliminarProvedor',
     success:function(r){
         location.href='./provedor';
          //$("#DataTableusuarios").load('Tablas/tbl_usuarios.php')
         alertify.warning('Provedor eliminado');
     }
    }            
);
  },
  function(){
    alertify.warning('Accion cancelada');
  });
}
function registrarVenta_producto(){
  datos=$('#venta_productoForm').serialize();
  $.ajax({
      type:'POST',
      data:datos,
      url: './registrarVenta_producto',
      success:function(r){
          console.log(r);
          console.log(datos);
          var actualPage=window.location.pathname;
         if(actualPage=='/proyectoFinalVeterinaria/ventasView.php'){
              $('#exampleModalVenta_producto').modal('hide');
              //$("#Tabla_TipoUsuarios").load('Tablas/tbl_tipo_usuario.php');
              location.href='./ventas';
          }
      }
  });
}
function getInfoVenta_producto(id){
$.ajax({
    type: 'POST',
    data:{'idVProu' : id},
    url: './getInfoVenta_producto',
    success:function(r){
        datos=$.parseJSON(r);
        $('#idVProu').val(datos[0]['idventa_producto']);
        $('#CaV').val(datos[0]['cantidad']);
        $('#coV').val(datos[0]['costo']);
        $('#fechV').val(datos[0]['fecha']);
        $('#proV').val(datos[0]['producto_idproducto']);
    }
});
}

function actualizarVenta_producto(){
  datos=$('#UpdateVenta_productoForm').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './actualizarVenta_producto',
      success:function(r){
          console.log(r);
        $('#exampleModalVenta_producto').modal('hide');
        //$('#DataTableUsuarios').load('Tablas/tbl_usuario.php');
        //location.href='./ventas';
      }
  });
}
function EliminarVenta_producto(id){
    alertify.confirm("Desea eliminar este producto??",
  function(){
    $.ajax({
     type:'POST',
     data:{'idVPro':id},
     url:'./eliminarVenta_producto',
     success:function(r){
         location.href='./ventas';
          //$("#DataTableusuarios").load('Tablas/tbl_usuarios.php')
         alertify.warning('venta eliminado');
     }
    }            
);
  },
  function(){
    alertify.warning('Accion cancelada');
  });
}
function registrarCompra_producto(){
  datos=$('#compra_productoForm').serialize();
  $.ajax({
      type:'POST',
      data:datos,
      url: './registrarCompra_producto',
      success:function(r){
          console.log(r);
          console.log(datos);
          var actualPage=window.location.pathname;
         if(actualPage=='/proyectoFinalVeterinaria/comprasView.php'){
              $('#exampleModalCompra_producto').modal('hide');
              //$("#Tabla_TipoUsuarios").load('Tablas/tbl_tipo_usuario.php');
              location.href='./compras';
          }
      }
  });
}
function getInfoCompra_producto(id){
$.ajax({
    type: 'POST',
    data:{'idVProu' : id},
    url: './getInfoCompra_producto',
    success:function(r){
        console.log(r);
        datos=$.parseJSON(r);
        $('#idVProu').val(datos[0]['idcompra_producto']);
        $('#caCa').val(datos[0]['cantidad']);
        $('#preCa').val(datos[0]['precio']);
        $('#feCa').val(datos[0]['fecha']);
        $('#idCPra').val(datos[0]['producto_idproducto']);
        $('#idCProva').val(datos[0]['provedor_idprovedor']);
    }
});
}

function actualizarcompra_producto(){
  datos=$('#UpdateCompra_productoForm').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './actualizarCompra_producto',
      success:function(r){
          console.log(r);
        $('#exampleModalCompra_producto').modal('hide');
        //$('#DataTableUsuarios').load('Tablas/tbl_usuario.php');
        //location.href='./ventas';
      }
  });
}
function EliminarCompra_producto(id){
    alertify.confirm("Desea eliminar este producto??",
  function(){
    $.ajax({
     type:'POST',
     data:{'idVPro':id},
     url:'./eliminarCompra_producto',
     success:function(r){
         location.href='./compras';
          //$("#DataTableusuarios").load('Tablas/tbl_usuarios.php')
         alertify.warning('compra eliminada');
     }
    }            
);
  },
  function(){
    alertify.warning('Accion cancelada');
  });
}
function registrarPropietario(){
  datos=$('#propietariosForm').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './registrarPropietarios',
      success:function(r){
          console.log(r);
          var actualPage=window.location.pathname;
         if(actualPage=='/proyectoFinalVeterinaria/propietariosView.php'){
              $('#exampleModalPropietarios').modal('hide');
              //$("#Tabla_TipoUsuarios").load('Tablas/tbl_tipo_usuario.php');
              location.href='./propietarios';
          }
      }
  });
}
function getInfoPropietario(id){
$.ajax({
    type: 'POST',
    data:{'IDpr' : id},
    url: './getInfoPropietario',
    success:function(r){
        datos=$.parseJSON(r);
        console.log(r);
                $('#IDpr').val(datos[0]['idpropietario']);
                $('#nombreF').val(datos[0]['nombre']);
                $('#apellidoF').val(datos[0]['apellido']);
                $('#edadF').val(datos[0]['edad']);
                $('#telF').val(datos[0]['telefono']);
                $('#dirF').val(datos[0]['direccion']);
                
    }
});
}

function actualizarPropietario(){
  datos=$('#UpdatepropietarioForm').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './actualizarPropietario',
      success:function(r){
          console.log(r);
        $('#ActualizarpModalPropietario').modal('hide');
        //$('#DataTableUsuarios').load('Tablas/tbl_usuario.php');
      }
  });
}
function EliminarPropietario(id){
    alertify.confirm("Desea eliminar este producto??",
  function(){
    $.ajax({
     type:'POST',
     data:{'pr':id},
     url:'./eliminarPropietario',
     success:function(r){
         location.href='./propietarios';
          //$("#DataTableusuarios").load('Tablas/tbl_usuarios.php')
         alertify.warning('propietario eliminado');
     }
    }            
);
  },
  function(){
    alertify.warning('Accion cancelada');
  });
}
function registrarTipoMascota(){
  datos=$('#RegistroTipoMascota').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './registrarTipoMascota',
      success:function(r){
          console.log(r);
          var actualPage=window.location.pathname;
         if(actualPage=='/proyectoFinalVeterinaria/mascotaView.php'){
              $('#registroTipoM').modal('hide');
              //$("#Tabla_TipoUsuarios").load('Tablas/tbl_tipo_usuario.php');
              location.href='./mascota';
          }
      }
  });
}
function getInfoTipoMascota(id){
$.ajax({
    type: 'POST',
    data:{'idM' : id},
    url: './getInfoTipoMascota',
    success:function(r){
        datos=$.parseJSON(r);
        console.log(r);
                $('#idM').val(datos[0]['idtipo_de_mascota']);
                $('#TipoM_of_form').val(datos[0]['tipo']);                    
    }
});
}

function actualizarTipoMascota(){
  datos=$('#actTipoM').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './actualizarTipoMascota',
      success:function(r){
          console.log(r);
        $('#ActualizarTipoMascota').modal('hide');
        //$('#DataTableUsuarios').load('Tablas/tbl_usuario.php');
      }
  });
}
function EliminarTipoMascota(id){
    alertify.confirm("Desea eliminar este tipo de mascota??",
  function(){
    $.ajax({
     type:'POST',
     data:{'id':id},
     url:'./eliminarTipoMascota',
     success:function(r){
         //location.href='./mascota';
          //$("#DataTableusuarios").load('Tablas/tbl_usuarios.php')
         alertify.warning('tipo de mascota eliminada');
     }
    }            
);
  },
  function(){
    alertify.warning('Accion cancelada');
  });
}
function registrarMascota(){
  datos=$('#mascotaForm').serialize();
    console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './registrarMascota',
      success:function(r){
          console.log(r);
        
          var actualPage=window.location.pathname;
         if(actualPage=='/proyectoFinalVeterinaria/mascotaView.php'){
              $('#ActualizarModalmascota').modal('hide');
              //$("#Tabla_TipoUsuarios").load('Tablas/tbl_tipo_usuario.php');
              location.href='./mascota';
          }
      }
  });
}
function getInfoMascota(id){
$.ajax({
    type: 'POST',
    data:{'idMas' : id},
    url: './getInfoMascota',
    success:function(r){
        console.log(r);
        datos=$.parseJSON(r);
        $('#idMas').val(datos[0]['idmascota']);
        $('#Nm').val(datos[0]['nombre']);
        $('#Em').val(datos[0]['edad']);
        $('#Rm').val(datos[0]['raza']);
        $('#Pm').val(datos[0]['propietario']);
        $('#Tm').val(datos[0]['tipomascota']);
    }
});
}

function actualizarMascota(){
  datos=$('#UpdateMascotaForm').serialize();
  console.log(datos);
  $.ajax({
      type:'POST',
      data:datos,
      url: './actualizarMascota',
      success:function(r){
          
        $('#ActualizarModalmascota').modal('hide');
        //$('#DataTableUsuarios').load('Tablas/tbl_usuario.php');
        //location.href='./ventas';
      }
  });
}
function EliminarMascota(id){
    alertify.confirm("Desea eliminar este mascota??",
  function(){
    $.ajax({
     type:'POST',
     data:{'idMas':id},
     url:'./eliminarMascota',
     success:function(r){
         location.href='./mascota';
          //$("#DataTableusuarios").load('Tablas/tbl_usuarios.php')
         alertify.warning('mascota eliminada');
     }
    }            
);
  },
  function(){
    alertify.warning('Accion cancelada');
  });
}