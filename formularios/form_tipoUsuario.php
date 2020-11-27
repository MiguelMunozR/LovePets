<div class="modal fade" id="registroTipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Tipo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class="modal-body">
          <form id="RegistroTipoU" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                   <label for="userR">Tipo usuario</label>
                      <input class="form-control" type="text" name="tipo_usuarioR" placeholder="tipo usuario" required>
                   
                  </div>
              </div>
          </form>
      </div>
        <div id="Tabla_TipoUsuarios">
            <?php require_once ('Public/Tablas/tbl_tipo_usuarios.php');?>
        </div>

     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registrarTipoUsuario()">Registrar Tipo usuario</button>
         
      </div>
    </div>
  </div>
</div>
<!--------actualizar tipo usuario form-------->

<div class="modal fade" id="ActualizarTipoUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Tipo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class="modal-body">
          <form id="actTipoU" class="form-group" action="" method="post">
              <div class="  w-100">
                  <div class="col-6">
                   <label for="userR">Tipo usuario</label>
                   <input id="TipoU_of_form" class="form-control" type="text" name="atipo_usuario"  required >
                    
                  </div>
                 
              </div>
               <input id="ide" type="text" name="idTipo">
          </form>
      </div>
        <div id="Tabla_TipoUsuarios">
         
        </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="actualizarTipoUsuario()">actualizar</button>
         
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    //$(document).ready(function(){
      //  $('#Tabla_TipoUsuarios').load('public/Tablas/tbl_tipo_usuarios.php');
    //})
</script>
