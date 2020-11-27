<?php //require_once ("Public/includes/header.php");
 require_once('Public/includes/scripts.php');?>
<div class="col-12-lg bg-img">
        <div class="col-5 contenedor-form">
            <form id="loginform"class="form-group"  method="post">
                <div class="col-12 pt-3">
                    <img id="imglogin"class="d-block col-6 mx-auto"src="Public/img/user.png" alt="icono de inicio">
                </div>
                <div class="col-10 mx-auto">
                    <label for="" style="color: black; font-size: 20px">Usuario</label>
                    <input id="user"class="form-control" type="text" name="usuario" placeholder="ingresa el usuario" required>
                </div>
                <div class="col-10 mx-auto">
                    <label for=""style="color: black; font-size: 20px">Contraseña</label>
                    <input id="contrasena"class="form-control" type="password" name="contrasena" placeholder="Ingresa tu contraseña" required>
                </div>
                <div class="row col-10 mx-auto  mt-3">
                   <button type="button" class="btn btn-dark col-12" onclick="login()"> Ingresar</button>
                <!--<input class="btn col-6 bg-primary mb-3 mx-auto"type="submit" name="" value="ingresar">-->
                </div>
                <div class="row col-10 mx-auto  mt-3">
                <button type="button" class="btn btn-dark col-12"  data-toggle="modal" data-target="#exampleModal">
                 registrar usuario</button>
                </div>
            </form>
        </div>
    </div>  

<?php
require_once 'public/formularios/usersForm.php';
//require_once ("Public/includes/footer.php");
?>


