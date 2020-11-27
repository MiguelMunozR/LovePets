<?php //require_once 'public/includes/header.php';
//require_once ('controllers/tipo_usuariosModel.php');
$Obj= new productoController();
$data_user=$Obj->select();
$n=count($data_user);
?>
<div class="modal fade" id="exampleModalVenta_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar venta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="venta_productoForm" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Cantidad</label>
                      <input id="ca"class="form-control" type="text" name="cantidad" placeholder="cantidad" required>
                  </div>
                  <div class="col-6">
                      <label for="userR">Costo</label>
                      <input id="co"class="form-control" type="text" name="costo" placeholder="costo" required>
                  </div>
                  <div class="col-6">
                      <label for="userR">Fecha</label>
                      <input id="fech"class="form-control" type="text" name="fecha" placeholder="fecha" required>
                  </div>
                 <div class="col-6">
                      <label for="">producto</label>
                      <select class="form-control form-control-lg"id="idVPro" name="idproductov" required>
                        <?php for($i=0;$i<$n;$i++): ?>
                          <option value="<?php echo $data_user[$i]['idproducto'];?>"><?php echo $data_user[$i]['nombre'];?></option>
                        <?php endfor ?>
                      </select>    
                  </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registrarVenta_producto()">Registrar venta</button>
      </div>
    </div>
  </div>
</div>

<!-- actualizar modal-->
<div class="modal fade" id="ActualizarModalVenta_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar  venta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="UpdateVenta_productoForm" class="form-group" action="" method="post">
            <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Cantidad</label>
                      <input id="CaV"class="form-control" type="text" name="cantidadq"  required>
                  </div>
                  <div class="col-6">
                      <label for="userR">Costo</label>
                      <input id="coV"class="form-control" type="text" name="costoq"  required>
                  </div>
                  <div class="col-6">
                      <label for="userR">Fecha</label>
                      <input id="fechV"class="form-control" type="text" name="fechaq"  required>
                  </div>
                  
                  <div class="col-6">
                      <label for="">producto</label>
                      <select class="form-control form-control-lg"id="proV" name="producto_idproducto"  required>
                        <?php for($i=0;$i<$n;$i++): ?>
                          <option value="<?php echo $data_user[$i]['idproducto'];?>"><?php echo $data_user[$i]['nombre'];?></option>
                        <?php endfor ?>
                      </select>
                  </div>
                <input id="idVProu" type="text" name="idventa_productoV" hidden="">
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizarVenta_producto()">ActualizarVenta</button>
      </div>
    </div>
  </div>
</div>


    