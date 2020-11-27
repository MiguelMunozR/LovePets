<?php
//require_once ('../../controllers/usuariosController.php');
$Obj= new propietarioController();
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
                <td>Apellido</td>
                <td>Edad</td>
                <td>Telefono</td>
                <td>Direccion</td>
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
                    <?php echo $data_user[$i]['idpropietario'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['nombre'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['apellido'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['edad'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['telefono'];?>
                </td>
                 <td>
                    <?php echo $data_user[$i]['direccion'];?>
                </td>
               
                <td style="text-align: center">
                    <span class="btn btn-warning btn-md" data-toggle="modal" data-target="#ActualizarpModalPropietario"onclick="getInfoPropietario(<?php echo $data_user[$i]['idpropietario'];?>)"><i class="fas fa-edit"></i></span> 
                </td>
                <td style="text-align: center">
                    <span class="btn btn-danger btn-md"onclick="EliminarPropietario(<?php echo $data_user[$i]['idpropietario'];?>)"><i class="fas fa-trash-alt"></i></span>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>    
    </table>
  
</div>
