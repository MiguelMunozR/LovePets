<?php //require_once 'public/includes/header.php';
//require_once ('controllers/tipo_usuariosModel.php');
$Obj= new tipo_usuariosController();
$data_user=$Obj->select();
$n=count($data_user);
?>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="usersForm" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Usuario</label>
                      <input id="userR"class="form-control" type="text" name="usuario" placeholder=" usuario" required>
                  </div>
                  <div class="col-6">
                      <label for="contraseñaR">Contraseña</label>
                      <input id="pass" class="form-control" type="text" name="contrasena" placeholder="contraseña de usuario"required>
                  </div>
                  <div class="col-6">
                      <label for="nombreR">Nombre</label>
                      <input id="nombreR" class="form-control" type="text" name="nombre" placeholder="Nombre(s)" required>
                  </div>
                   <div class="col-6">
                      <label for="apellidop">Apellido paterno</label>
                      <input id="apellidopR"class="form-control" type="text" name="apellidop" placeholder="apellido paterno" required>
                  </div>
                   <div class="col-6">
                      <label for="apelldom">Apellido materno</label>
                      <input id="apellidomr"class="form-control" type="text" name="apellidom" placeholder="Apellido materno" required>
                  </div>
                  <div class="col-12">
                      <label for="correo">Correo</label>
                      <input id="correoR"class="form-control" type="text" name="correo" placeholder="correo electronico">
                  </div>
                  <div class="col-6">
                      <label for="telefono">Telefono</label>
                      <input id="telefonoR"class="form-control" type="text" name="telefono" placeholder="telefono">
                  </div>
                    <div class="col-6">
                      <?php if($_SESSION['Active']){?>
                      <label for="">Tipo de usuario</label>
                      <select class="form-control form-control-lg"id="tipo_usuario" name="tipo_usuario"  required>
                        <?php for($i=0;$i<$n;$i++): ?>
                          <option value="<?php echo $data_user[$i]['idTipo_usuario'];?>"><?php echo $data_user[$i]['tipo_usuario'];?></option>
                        <?php endfor ?>
                      </select>
                      <?php } else { ?>
                      <input id="tipo_usuario" type="number" name="tipo_usuario" value="1" hidden="">
                      <?php } ?>
                  </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registrarUsuario()">Registrar Usuario</button>
      </div>
    </div>
  </div>
</div>

<!-- actualizar modal-->
<div class="modal fade" id="ActualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos de usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="UpdateusersForm" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Usuario</label>
                      <input id="useru" class="form-control" type="text" name="usuariou"  required>
                  </div>
                  <div class="col-6">
                      <label for="contraseñaR">Contraseña</label>
                      <input id="contraseñau"class="form-control" type="text" name="contrasenau" required>
                  </div>
                  <div class="col-6">
                      <label for="nombreR">Nombre</label>
                      <input id="nombreu"class="form-control" type="text" name="nombreu"  required>
                  </div>
                   <div class="col-6">
                      <label for="apellidop">Apellido paterno</label>
                      <input id="apellidopu"class="form-control" type="text" name="apellidopu" required>
                  </div>
                   <div class="col-6">
                      <label for="apelldom">Apellido materno</label>
                      <input id="apellidomu"class="form-control" type="text" name="apellidomu"  required>
                  </div>
                  <div class="col-12">
                      <label for="correo">Correo</label>
                      <input id="correou"class="form-control" type="text" name="correou">
                  </div>
                  <div class="col-6">
                      <label for="telefono">Telefono</label>
                      <input id="telefonou"class="form-control" type="text" name="telefonou">
                  </div>
                      <div class="col-6">
                      <?php if($_SESSION['Active']){?>
                      <label for="">Tipo de usuario</label>
                      <select class="form-control form-control-lg"id="tipo_usuariou" name="tipo_usuariou"  required>
                        <?php for($i=0;$i<$n;$i++): ?>
                          <option value="<?php echo $data_user[$i]['idTipo_usuario'];?>"><?php echo $data_user[$i]['tipo_usuario'];?></option>
                        <?php endfor ?>
                      </select>
                      <?php } else { ?>
                      <input type="number" name="tipo_usuario" value="2" hidden="">
                      <?php } ?>
                  </div>
                  <input id="id" type="text" name="idusuario" hidden="">
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizarUsuario()">ActualizarUsuario</button>
      </div>
    </div>
  </div>
</div>

