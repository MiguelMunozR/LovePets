<?php //require_once 'public/includes/header.php';
//require_once ('controllers/tipo_usuariosModel.php');
$Obj= new propietarioController();
$data_user=$Obj->select();
$n=count($data_user);
$Obj2= new tipo_de_mascotaController();
$data_user2=$Obj2->select();
$n2=count($data_user2);
?>
<div class="modal fade" id="exampleModalmascota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar mascota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="mascotaForm" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Nombre</label>
                      <input id="n"class="form-control" type="text" name="nombre" placeholder="nombre" required>
                  </div>
                  <div class="col-6">
                      <label for="userR">Edad</label>
                      <input id="e"class="form-control" type="text" name="edad" placeholder="edad" required>
                  </div>
                   <div class="col-6">
                      <label for="userR">Raza</label>
                      <input id="r"class="form-control" type="text" name="raza" placeholder="raza" required>
                  </div>
                 <div class="col-6">
                      <label for="">Propietario</label>
                      <select class="form-control form-control-lg"id="pr" name="propietario" required>
                        <?php for($i=0;$i<$n;$i++): ?>
                          <option value="<?php echo $data_user[$i]['idpropietario'];?>"><?php echo $data_user[$i]['nombre'];?></option>
                        <?php endfor ?>
                      </select>    
                  </div>
                  <div class="col-6">
                      <label for="">Tipo de mascota</label>
                      <select class="form-control form-control-lg"id="tm" name="tipomascota" required>
                        <?php for($i=0;$i<$n2;$i++): ?>
                          <option value="<?php echo $data_user2[$i]['idtipo_de_mascota'];?>"><?php echo $data_user2[$i]['tipo'];?></option>
                        <?php endfor ?>
                      </select>    
                  </div>
          
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registrarMascota()">Registrar mascota</button>
      </div>
    </div>
  </div>
</div>

<!-- actualizar modal-->
<div class="modal fade" id="ActualizarModalmascota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar  venta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="UpdateMascotaForm" class="form-group" action="" method="post">
            <div class="  w-100">
                  <div class="col-6">
                      <label for="userR">Nombre</label>
                      <input id="Nm"class="form-control" type="text" name="nombre" required>
                  </div>
                  <div class="col-6">
                      <label for="userR">Edad</label>
                      <input id="Em"class="form-control" type="text" name="edad" required>
                  </div>
                   <div class="col-6">
                      <label for="userR">Raza</label>
                      <input id="Rm"class="form-control" type="text" name="raza"  required>
                  </div>
                 <div class="col-6">
                      <label for="">Propietario</label>
                      <select class="form-control form-control-lg"id="Pm" name="propietario" required>
                        <?php for($i=0;$i<$n;$i++): ?>
                          <option value="<?php echo $data_user[$i]['idpropietario'];?>"><?php echo $data_user[$i]['nombre'];?></option>
                        <?php endfor ?>
                      </select>    
                  </div>
                  <div class="col-6">
                      <label for="">Tipo de mascota</label>
                      <select class="form-control form-control-lg"id="Tm" name="tipomascota" required>
                        <?php for($i=0;$i<$n2;$i++): ?>
                          <option value="<?php echo $data_user2[$i]['idtipo_de_mascota'];?>"><?php echo $data_user2[$i]['tipo'];?></option>
                        <?php endfor ?>
                      </select>    
                  </div>
                <input id="idMas" type="text" name="idmascota" hidden="">
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizarMascota()">Actualizar mascota</button>
      </div>
    </div>
  </div>
</div>