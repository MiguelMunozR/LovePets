<?php
//require_once ('../../controllers/usuariosController.php');
$Obj= new provedorController();
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
                <td>Direccion</td>
                <td>Telefono</td>
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
                    <?php echo $data_user[$i]['idprovedor'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['nombre'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['direccion'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['telefono'];?>
                </td>
               
                <td style="text-align: center">
                    <span class="btn btn-warning btn-md" data-toggle="modal" data-target="#ActualizarpModalProvedor"onclick="getInfoProvedor(<?php echo $data_user[$i]['idprovedor'];?>)"><i class="fas fa-edit"></i></span> 
                </td>
                <td style="text-align: center">
                    <span class="btn btn-danger btn-md"onclick="EliminarProvedor(<?php echo $data_user[$i]['idprovedor'];?>)"><i class="fas fa-trash-alt"></i></span>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>    
    </table>
  
</div>

