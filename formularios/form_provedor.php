<div class="modal fade" id="exampleModalProvedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Provedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="provedorForm" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Nombre</label>
                      <input id="nombreprove"class="form-control" type="text" name="nombre" placeholder="nombre" required>
                  </div>
                  <div class="col-6">
                      <label for="nombreR">Direccion</label>
                      <input id="direcprove" class="form-control" type="text" name="direccion" placeholder="direccion" required>
                  </div>
                   <div class="col-6">
                      <label for="apellidop">Telefono</label>
                      <input id="telprove"class="form-control" type="text" name="telefono" placeholder="telefono" required>
                  </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registrarProvedor()">Registrar provedor</button>
      </div>
    </div>
  </div>
</div>

<!-- actualizar modal-->
<div class="modal fade" id="ActualizarpModalProvedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar  provedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="UpdateprovedorForm" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Nombre</label>
                      <input id="provedorN"class="form-control" type="text" name="nombreu"  required>
                  </div>
                  <div class="col-6">
                      <label for="nombreR">Direccion</label>
                      <input id="direccionA" class="form-control" type="text" name="direccionu"  required>
                  </div>
                   <div class="col-6">
                      <label for="apellidop">Telefono</label>
                      <input id="telefonoA"class="form-control" type="text" name="telefonou"  required>
                  </div>
                  <input id="idpr" type="text" name="idprovedor" hidden="">
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizarProvedor()">ActualizarProvedor</button>
      </div>
    </div>
  </div>
</div>

