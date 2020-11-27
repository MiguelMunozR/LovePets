<?php
//require_once ('../../models/tipo_usuariosModel.php');
$Obj= new tipo_usuariosController();
$data_user=$Obj->select();
$n=count($data_user);
//var_dump($data_user);
//echo $n;
?>
<div>
    <table class="table table-hover table-condensed table-bordered" id="tbTipoUsuarios">
        <thead class="bg-dark"style="color:white;font-weight: bold">
            <tr>
                <td>Id</td>
                <td>Tipo de usuario</td>
                <td>Actualizar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i=0;$i<$n;$i++){
                ?>
            <tr>
                <td>
                    <?php echo $data_user[$i]['idTipo_usuario'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['tipo_usuario'];?>
                </td>
                
                <td style="text-align: center">
                    <span class="btn btn-warning btn-md" data-toggle="modal" data-target="#ActualizarTipoUsuario" onclick="getInfoTipoUsuario(<?php echo $data_user[$i]['idTipo_usuario'];?>)"><i class="fas fa-edit"></i></span> 
                </td>
                <td style="text-align: center">
                    <span class="btn btn-danger btn-md"onclick="EliminarTipoUsuario(<?php echo $data_user[$i]['idTipo_usuario'];?>)"><i class="fas fa-trash-alt"></i></span>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>    
    </table>
  
</div>

<!--<script>
    $(document).ready(function() {
    $('#tbTipoUsuarios').DataTable({
       "scrollX": true
    });
} );
</script>-->
