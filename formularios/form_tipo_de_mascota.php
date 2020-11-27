<div class="modal fade" id="registroTipoM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Tipo de Mascota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class="modal-body">
          <form id="RegistroTipoMascota" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                   <label for="userR">Tipo Mascota</label>
                      <input class="form-control" type="text" name="tipo" placeholder="tipo" required>
                   
                  </div>
              </div>
          </form>
      </div>
        <div id="Tabla_TipoMascota">
            <?php require_once ('Public/Tablas/tbl_tipo_de_mascota.php');?>
        </div>

     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registrarTipoMascota()">Registrar tipoMascota</button>
         
      </div>
    </div>
  </div>
</div>
<!--------actualizar tipo usuario form-------->

<div class="modal fade" id="ActualizarTipoMascota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Tipo mascota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class="modal-body">
          <form id="actTipoM" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                   <label for="userR">Tipo mascota</label>
                   <input id="TipoM_of_form" class="form-control" type="text" name="tipo"  required >
                  </div>
              </div>
              <input id="idM" type="text" name="idTipo" hidden="">
          </form>
      </div>
        <div id="Tabla_TipoUsuarios">
         
        </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizarTipoMascota()">actualizar</button>
         
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    //$(document).ready(function(){
      //  $('#Tabla_TipoUsuarios').load('public/Tablas/tbl_tipo_usuarios.php');
    //})
</script>

