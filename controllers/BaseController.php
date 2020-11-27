<?php

class BaseController{
    public $route;
    public function __construct($route) {
        if(!isset($_SESSION)) session_start();
        if(!isset($_SESSION['Active'])) $_SESSION['Active']= false;
        if($_SESSION['Active']){
            $view=new ViewController();
           switch($route){
               case'logout':
                   $closeSession= new sessionController();
                   $closeSession->logout();
                   break;
               case 'menu':
                   $view->loadview($route);
                   break;
               case 'login':
                       $view->loadview($route);
                   break;
               case 'users':
                   $view->loadview($route);
                   break;
               case'productos':
                   $view->loadview($route);
                   break;
               case'provedor':
                   $view->loadview($route);
                   break;
               case'ventas':
                   $view->loadview($route);
                   break;
               case'compras':
                   $view->loadview($route);
                   break;
               case'menu_veterinario':
                   $view->loadview($route);
                   
                   break;
               case'mascota':
                   $view->loadview($route);
                   break;
               case 'SubirArchivos':
                   $view->loadview($route);
                   break;
               case 'registrarUsuario':
              if(empty($_POST['telefono'])){
              $_POST['telefono']=0;
    }
    $usuarioController= new usuariosController();
    $verificar=$usuarioController->selectUsuario($_POST['usuario']);
    if(!empty($verificar[0]['usuario'])){
        echo 1;
    }else{
        $data=array(
        'usuario'=>$_POST['usuario'],
        'contrasena'=>$_POST['contrasena'],
        'nombre'=>$_POST['nombre'],
        'apellidop'=>$_POST['apellidop'],
        'apellidom'=>$_POST['apellidom'],
        'correo'=>$_POST['correo'],
        'telefono'=>$_POST['telefono'],
        'tipo_usuario'=>$_POST['tipo_usuario'],
);
        $usuarioController->insert($data);
    echo 2;
    }
                    break;
               case 'eliminarUsuario':
                   $usuarioControl= new usuariosController();
                   $usuarioControl->delete($_POST['id']);
                   break;
               case'getInfoUsuario':
                   $usuarioControl =new usuariosController();
                   echo json_encode($usuarioControl->select($_POST['id']));
                   break;
               case 'actualizarUsuario':
                    if(empty($_POST['telefono'])){
        $_POST['telefono']=0;
    }
   $id= (int)$_POST['idusuario'];
   //$tipo=(int)$_POST['tipo_usuariou'];
    $data=array(
        'idusuarios'=> $id,
        'usuario'=>$_POST['usuariou'],
        'contrasena'=>$_POST['contrasenau'],
        'nombre'=>$_POST['nombreu'],
        'apellidop'=>$_POST['apellidopu'],
        'apellidom'=>$_POST['apellidomu'],
        'correo'=>$_POST['correou'],
        'telefono'=>$_POST['telefonou'],
        'tipo_usuario' => $tipo=(int)$_POST['tipo_usuariou']
    );
    $usuarioController= new usuariosController();
    $usuarioController->Update($data);
                   break;
               case 'registrarTipoUsuario':
                    $data=array(    
                    'tipo_usuario'=>$_POST['tipo_usuarioR'],
    );
       $TipousuarioController= new tipo_usuariosController();
       $TipousuarioController->insert($data);
                   break;
               case 'eliminarTipoUsuario':
                   $id=$_POST['ide'];
                  $TipousuarioController= new tipo_usuariosController();
                  $TipousuarioController->delete($id);
                   break;
               case'getinfoTipoUsuario':
                   $TipousuarioController= new tipo_usuariosController();
                   echo json_encode($TipousuarioController->select($_POST['ide']));
                   break;
               case 'actualizarTipoUsuario':
                    $data=array(
                     'idTipo_usuario'=>$_POST['idTipo'], 
                     'tipo_usuario'=>$_POST['atipo_usuario']);
                    $TipousuarioController= new tipo_usuariosController();
                    $TipousuarioController->Update($data);
                   break;
               case 'subirArchivo':
                    $fichero = $_FILES["file"];
                    // Cargando el fichero en la carpeta "archivos"
                    move_uploaded_file($fichero["tmp_name"], "./archivos/".$fichero["name"]);
                    // Redirigiendo hacia atrás
                    header("Location: " . $_SERVER["HTTP_REFERER"]);
                   break;
               case 'registrarProducto':
                    $data=array(
                    'nombre'=>$_POST['nombre'],
                    'costo'=>$_POST['costo'],
                    'precio'=>$_POST['precio'],
                    'cantidad'=>$_POST['cantidad'],);
                    $producto= new productoController();
                    $producto->insert($data);
                   break;
               case'getInfoProducto':
                    $productoController= new productoController();
                   echo json_encode($productoController->select($_POST['idp']));
                   break;
               case'actualizarProducto':
                   $i=(int)$_POST['idproducto'];
                   $data=array(
                     'idproducto'=>$_POST['idproducto'], 
                     'nombre'=>$_POST['nombreu'],
                       'costo'=>$_POST['costou'],
                       'precio'=>$_POST['preciou'],
                       'cantidad'=>$_POST['cantidadu']);
                    $productoController= new productoController();
                    $productoController->Update($data);
                   break;
               case'eliminarProducto':
                    $id=$_POST['idp'];
                  $productoController= new productoController();
                  $productoController->delete($id);
                   break;
               case 'registrarProvedor':
                    $data=array(
                    'nombre'=>$_POST['nombre'],
                    'direccion'=>$_POST['direccion'],
                    'telefono'=>$_POST['telefono'],
                    );
                    $provedor= new provedorController();
                     $provedor->insert($data);
                   break;
               case'getInfoProvedor':
                    $provedorController= new provedorController();
                   echo json_encode($provedorController->select($_POST['idpr']));
                   break;
               case'actualizarProvedor':
                   $data=array(
                    'idprovedor'=>$_POST['idprovedor'], 
                    'nombre'=>$_POST['nombreu'],
                    'direccion'=>$_POST['direccionu'],
                    'telefono'=>$_POST['telefonou'],
                    );
                    $provedorController= new provedorController();
                    $provedorController->Update($data);
                   break;
               case'eliminarProvedor':
                    $id=$_POST['idpr'];
                  $provedorController= new provedorController();
                   $provedorController->delete($id);
                   break;
               case 'registrarVenta_producto':
                    $data=array(  
                    'cantidad'=>$_POST['cantidad'],
                    'costo'=>$_POST['costo'],
                    'fecha'=>$_POST['fecha'],
                    'producto_idproducto'=>$_POST['idproductov'],
                        );
                   $ventapController= new venta_productoController();
                   $ventapController->insert($data);
                   break;
               case 'eliminarVenta_producto':
                   $id=$_POST['idVPro'];
                   $ventapController= new venta_productoController();
                   $ventapController->delete($id);
                   break;
               case'getInfoVenta_producto':
                  $ventapController= new venta_productoController();
                   echo json_encode($ventapController->select($_POST['idVProu']));
                   break;
               case 'actualizarVenta_producto':
                   $data=array(  
                    'idventa_producto'=>$_POST['idventa_productoV'],
                    'cantidad'=>$_POST['cantidadq'],
                    'costo'=>$_POST['costoq'],
                    'fecha'=>$_POST['fechaq'],
                    'producto_idproducto'=>$_POST['producto_idproducto'],
                        );
                    $ventapController= new venta_productoController();
                     $ventapController->Update($data);
                   break;
                case 'registrarCompra_producto':
                    $data=array(  
                    'cantidad'=>$_POST['cantidad'],
                    'precio'=>$_POST['precio'],
                    'fecha'=>$_POST['fecha'],
                    'producto_idproducto'=>$_POST['producto_idproducto'],
                    'provedor_idprovedor'=>$_POST['provedor_idprovedor'],
                        );
                   $comprapController= new compra_productoController();
                  $comprapController->insert($data);
                   break;
               case 'eliminarCompra_producto':
                   $id=$_POST['idVPro'];
                   $comprapController= new compra_productoController();
                   $comprapController->delete($id);
                   break;
               case'getInfoCompra_producto':
                  $comprapController= new compra_productoController();
                   echo json_encode($comprapController->select($_POST['idVProu']));
                   break;
               case 'actualizarCompra_producto':
                   $data=array(  
                    'idcompra_producto'=>$_POST['idcompra_productoC'],
                    'cantidad'=>$_POST['cantidadCP'],
                    'precio'=>$_POST['precioCP'],
                    'fecha'=>$_POST['fechaCP'],
                    'producto_idproducto'=>$_POST['idproductovC'],
                    'provedor_idprovedor'=>$_POST['idprovedorvC'],
                        );
                    $comprapController= new compra_productoController();
                     $comprapController->Update($data);
                   break;
               case 'registrarPropietarios':
                    $data=array(
                    'nombre'=>$_POST['nombreS'],
                    'apellido'=>$_POST['apellidoS'],
                    'edad'=>$_POST['edadS'],
                    'telefono'=>$_POST['telefonoS'],
                    'direccion'=>$_POST['direccionS'],);
                    $propietario= new propietarioController();
                    $propietario->insert($data);
                   break;
               case'getInfoPropietario':
                    $propietario= new propietarioController();
                   echo json_encode($propietario->select($_POST['IDpr']));
                   break;
               case'actualizarPropietario':
                   $data=array(
                    'idpropietario'=>(int)$_POST['idpropietario'],
                    'nombre'=>$_POST['nombreF'],
                    'apellido'=>$_POST['apellidoF'],
                    'edad'=>$_POST['edadF'],
                    'telefono'=>$_POST['telefonoF'],
                    'direccion'=>$_POST['direccionF'],);
                    $propietario= new propietarioController();
                    $propietario->Update($data);
                   break;
               case'eliminarPropietario':
                    $id=$_POST['pr'];
                 $propietario= new propietarioController();
                  $propietario->delete($id);
                   break;
                case 'registrarTipoMascota':
                    $data=array(    
                    'tipo'=>$_POST['tipo'],
    );
       $TipoMController= new tipo_de_mascotaController();
       $TipoMController->insert($data);
                   break;
               case 'eliminarTipoMascota':
                  
                  $TipoMController= new tipo_de_mascotaController();
                  $TipoMController->delete($_POST['idM']);
                   break;
               case'getInfoTipoMascota':
                  $TipoMController= new tipo_de_mascotaController();
                   echo json_encode($TipoMController->select($_POST['idM']));
                   break;
               case 'actualizarTipoMascota':
                    $data=array(
                     'idtipo_de_mascota'=>$_POST['idTipo'], 
                     'tipo'=>$_POST['tipo']);
                    $TipoMController= new tipo_de_mascotaController();
                   $TipoMController->Update($data);
                   break;
               case 'registrarMascota':
                    $data=array(
                        'nombre'=>$_POST['nombre'],
                        'edad'=>$_POST['edad'],
                        'raza'=>$_POST['raza'],
                        'propietario'=>$_POST['propietario'],
                        'tipomascota'=>$_POST['tipomascota'],
    );
       $mascotaMController= new mascotaController();
      $mascotaMController->insert($data);
                   break;
               case 'eliminarMascota':
                  
                   $mascotaMController= new mascotaController();
                  $mascotaMController->delete($_POST['idMas']);
                   break;
               case'getInfoMascota':
                   $mascotaMController= new mascotaController();
                   echo json_encode($mascotaMController->select($_POST['idMas']));
                   break;
               case 'actualizarMascota':
                    $data=array(
                    'idmascota'=>$_POST['idmascota'],
                    'nombre'=>$_POST['nombre'],
                        'edad'=>$_POST['edad'],
                        'raza'=>$_POST['raza'],
                        'propietario'=>(int)$_POST['propietario'],
                        'tipomascota'=>(int)$_POST['tipomascota']);
                    $mascotaMController= new mascotaController();
                   $mascotaMController->Update($data);
                   break;   
           }
        }else{
            if($route=='registrarUsuario'){
                  $data=array(
        'usuario'=>$_POST['usuario'],
        'contrasena'=>$_POST['contrasena'],
        'nombre'=>$_POST['nombre'],
        'apellidop'=>$_POST['apellidop'],
        'apellidom'=>$_POST['apellidom'],
        'correo'=>$_POST['correo'],
        'telefono'=>$_POST['telefono'],
        'tipo_usuario'=>$_POST['tipo_usuario'],
);
         $usuarioController=new usuariosController();         
        $usuarioController->insert($data);
            }
            if($route == 'procesalogin'){
                if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
                    $session_data = array(
                        'usuario' => $_POST['usuario'],  
                        'contrasena' => $_POST['contrasena'],
				);
                    $sessionController = new sessionController();
                    $dataLogin = $sessionController->login($session_data);
                    if (isset($dataLogin[0]['v_idusuario'])) {
                        if (is_numeric($dataLogin[0]['v_idusuario'])) {
                            $_SESSION['Active'] = true;
                            //$obj = new usuarioModel();
                           // $dataUser = $obj->select($dataLogin[0]['v_idusuario']);
                            $dataLogin = array('r' => 1);
                        }
   	    }
   	    echo json_encode($dataLogin);
			}else{
			$view = new viewController();
			$view->loadView('login');
			}
		}else{
			$view = new viewController();
			$view->loadView('login');
		}
	//	$view = new viewController();
	//	$view->loadView($route);
	}
}
}
