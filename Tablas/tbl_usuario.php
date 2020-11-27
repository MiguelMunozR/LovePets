<?php
//require_once ('../../controllers/usuariosController.php');
$Obj= new usuariosController();
$data_user=$Obj->select();
$n=count($data_user);
//var_dump($data_user);
//echo $n;

?>
<div>
    <table class="table table-hover table-condensed table-bordered" id="tbUsuarios">
        <thead class="bg-dark"style="color:white;font-weight: bold">
            <tr>
                <td>Id</td>
                <td>Usuarios</td>
                <td>Contraseña</td>
                <td>Nombre</td>
                <td>Apellido paterno</td>
                <td>Apellido materno</td>
                <td>Email</td> 
                <td>Telefono</td>
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
                    <?php echo $data_user[$i]['idusuarios'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['usuario'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['contrasena'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['nombre'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['apellidop'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['apellidom'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['correo'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['telefono'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['tipo_usuario'];?>
                </td>
                <td style="text-align: center">
                    <span class="btn btn-warning btn-md" data-toggle="modal" data-target="#ActualizarModal"onclick="getInfoUsuario(<?php echo $data_user[$i]['idusuarios'];?>)"><i class="fas fa-edit"></i></span> 
                </td>
                <td style="text-align: center">
                    <span class="btn btn-danger btn-md"onclick="EliminarUsuario(<?php echo $data_user[$i]['idusuarios'];?>)"><i class="fas fa-trash-alt"></i></span>
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
    $('#tbUsuarios').DataTable({
       "scrollX": true
    });
} );
</script>-->