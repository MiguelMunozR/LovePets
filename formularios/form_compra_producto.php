<?php //require_once 'public/includes/header.php';
//require_once ('controllers/tipo_usuariosModel.php');
$Obj= new productoController();
$data_user=$Obj->select();
$n=count($data_user);
$Obj2= new provedorController();
$data_user2=$Obj2->select();
$n2=count($data_user2);
?>
<div class="modal fade" id="exampleModalCompra_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar compra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="compra_productoForm" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Cantidad</label>
                      <input id="caC"class="form-control" type="text" name="cantidad" placeholder="cantidad" required>
                  </div>
                  <div class="col-6">
                      <label for="userR">Precio</label>
                      <input id="PreC"class="form-control" type="text" name="precio" placeholder="precio" required>
                  </div>
                   <div class="col-6">
                      <label for="userR">Fecha</label>
                      <input id="feC"class="form-control" type="text" name="fecha" placeholder="fecha" required>
                  </div>
                 <div class="col-6">
                      <label for="">producto</label>
                      <select class="form-control form-control-lg"id="idCPro" name="producto_idproducto" required>
                        <?php for($i=0;$i<$n;$i++): ?>
                          <option value="<?php echo $data_user[$i]['idproducto'];?>"><?php echo $data_user[$i]['nombre'];?></option>
                        <?php endfor ?>
                      </select>    
                  </div>
                  <div class="col-6">
                      <label for="">provedor</label>
                      <select class="form-control form-control-lg"id="idCProv" name="provedor_idprovedor" required>
                        <?php for($i=0;$i<$n2;$i++): ?>
                          <option value="<?php echo $data_user2[$i]['idprovedor'];?>"><?php echo $data_user2[$i]['nombre'];?></option>
                        <?php endfor ?>
                      </select>    
                  </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registrarCompra_producto()">Registrar venta</button>
      </div>
    </div>
  </div>
</div>

<!-- actualizar modal-->
<div class="modal fade" id="ActualizarModalcompra_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar  venta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="UpdateCompra_productoForm" class="form-group" action="" method="post">
            <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Cantidad</label>
                      <input id="caCa"class="form-control" type="text" name="cantidadCP"  required>
                  </div>
                  <div class="col-6">
                      <label for="userR">Precio</label>
                      <input id="preCa"class="form-control" type="text" name="precioCP"  required>
                  </div>
                   <div class="col-6">
                      <label for="userR">Fecha</label>
                      <input id="feCa"class="form-control" type="text" name="fechaCP"  required>
                  </div>
                 <div class="col-6">
                      <label for="">producto</label>
                      <select class="form-control form-control-lg"id="idCProa" name="idproductovC" required>
                        <?php for($i=0;$i<$n;$i++): ?>
                          <option value="<?php echo $data_user[$i]['idproducto'];?>"><?php echo $data_user[$i]['nombre'];?></option>
                        <?php endfor ?>
                      </select>    
                  </div>
                  <div class="col-6">
                      <label for="">provedor</label>
                      <select class="form-control form-control-lg"id="idCProva" name="idprovedorvC" required>
                        <?php for($i=0;$i<$n2;$i++): ?>
                          <option value="<?php echo $data_user2[$i]['idprovedor'];?>"><?php echo $data_user2[$i]['nombre'];?></option>
                        <?php endfor ?>
                      </select>    
                  </div>
                <input id="idVProu" type="text" name="idcompra_productoC" hidden="">
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizarcompra_producto()">ActualizarVenta</button>
      </div>
    </div>
  </div>
</div>
