<div class="modal fade" id="exampleModalPropietario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Propietario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="propietariosForm" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Nombre</label>
                      <input id="nombrePropi"class="form-control" type="text" name="nombreS" placeholder="nombre" required>
                  </div>
                  <div class="col-6">
                      <label for="nombreR">Apellido</label>
                      <input id="apellidoPropi" class="form-control" type="text" name="apellidoS" placeholder="apellido" required>
                  </div>
                   <div class="col-6">
                      <label for="apellidop">Edad</label>
                      <input id="edadPropi"class="form-control" type="text" name="edadS" placeholder="edad" required>
                  </div>
                   <div class="col-6">
                      <label for="apelldom">Telefono</label>
                      <input id="telPropi"class="form-control" type="text" name="telefonoS" placeholder="telefono" required>
                  </div>
                   <div class="col-6">
                      <label for="apelldom">Direccion</label>
                      <input id="dirPropi"class="form-control" type="text" name="direccionS" placeholder="direccion" required>
                  </div>
              </div>
          </form>
      </div>
         <div id="Tabla_propietarios">
            <?php require_once ('Public/Tablas/tbl_propietarios.php');?>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registrarPropietario()">Registrar propietario</button>
      </div>
        
    </div>
  </div>
</div>

<!-- actualizar modal-->
<div class="modal fade" id="ActualizarpModalPropietario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar  propietario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class="modal-body">
          <form id="UpdatepropietarioForm" class="form-group" action="" method="post">
             <div class="  w-100">
                    <div class="col-6">
                      <label for="userR">Nombre</label>
                      <input id="nombreF"class="form-control" type="text" name="nombreF"  required>
                  </div>
                  <div class="col-6">
                      <label for="nombreR">Apellido</label>
                      <input id="apellidoF" class="form-control" type="text" name="apellidoF"  required>
                  </div>
                   <div class="col-6">
                      <label for="apellidop">Edad</label>
                      <input id="edadF"class="form-control" type="text" name="edadF"  required>
                  </div>
                   <div class="col-6">
                      <label for="apelldom">Telefono</label>
                      <input id="telF"class="form-control" type="text" name="telefonoF"  required>
                  </div>
                   <div class="col-6">
                      <label for="apelldom">Direccion</label>
                      <input id="dirF"class="form-control" type="text" name="direccionF"  required>
                  </div>
                  <input id="IDpr" type="text" name="idpropietario" >
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizarPropietario()">ActualizarUsuario</button>
      </div>
    </div>
  </div>
</div>

