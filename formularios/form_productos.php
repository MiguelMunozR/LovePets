<?php //require_once 'public/includes/header.php';
//require_once ('controllers/tipo_usuariosModel.php');

?>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="productosForm" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Nombre</label>
                      <input id="nombrep"class="form-control" type="text" name="nombre" placeholder="nombre" required>
                  </div>
                  <div class="col-6">
                      <label for="nombreR">Costo</label>
                      <input id="costop" class="form-control" type="text" name="costo" placeholder="costo" required>
                  </div>
                   <div class="col-6">
                      <label for="apellidop">Precio</label>
                      <input id="preciop"class="form-control" type="text" name="precio" placeholder="precio" required>
                  </div>
                   <div class="col-6">
                      <label for="apelldom">Cantidad</label>
                      <input id="cantidadp"class="form-control" type="text" name="cantidad" placeholder="cantidad" required>
                  </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registrarProducto()">Registrar producto</button>
      </div>
    </div>
  </div>
</div>

<!-- actualizar modal-->
<div class="modal fade" id="ActualizarpModalProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar  producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="UpdateproductoForm" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Nombre</label>
                      <input id="productoN"class="form-control" type="text" name="nombreu"  required>
                  </div>
                  <div class="col-6">
                      <label for="nombreR">Costo</label>
                      <input id="costoA" class="form-control" type="text" name="costou"  required>
                  </div>
                   <div class="col-6">
                      <label for="apellidop">Precio</label>
                      <input id="precioA"class="form-control" type="text" name="preciou"  required>
                  </div>
                   <div class="col-6">
                      <label for="apelldom">Cantidad</label>
                      <input id="cantidadA"class="form-control" type="text" name="cantidadu"  required>
                  </div>
                  <input id="idp" type="text" name="idproducto" hidden="">
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizarProducto()">ActualizarUsuario</button>
      </div>
    </div>
  </div>
</div>

