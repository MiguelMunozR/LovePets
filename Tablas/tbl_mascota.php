<?php
//require_once ('../../controllers/usuariosController.php');
$Obj= new mascotaController();
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
                <td>Nombre</td>
                <td>Edad</td>
                <td>Raza</td>
                 <td>Propietario</td>
                 <td>Tipo de Mascota</td>
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
                    <?php echo $data_user[$i]['idmascota'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['nombre'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['edad'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['raza'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['nombre'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['tipo'];?>
                </td>
                <td style="text-align: center">
                    <span class="btn btn-warning btn-md" data-toggle="modal" data-target="#ActualizarModalmascota"onclick="getInfoMascota(<?php echo $data_user[$i]['idmascota'];?>)"><i class="fas fa-edit"></i></span> 
                </td>
                <td style="text-align: center">
                    <span class="btn btn-danger btn-md"onclick="EliminarMascota(<?php echo $data_user[$i]['idmascota'];?>)"><i class="fas fa-trash-alt"></i></span>
                </td>
            </tr>
            <?php
            }
           
            ?>
        </tbody>    
    </table>
  
</div>


