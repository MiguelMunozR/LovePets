<?php
//require_once ('../../controllers/usuariosController.php');
$Obj= new productoController();
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
                <td>Costo</td>
                <td>Precio</td>
                <td>Cantidad</td>
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
                    <?php echo $data_user[$i]['idproducto'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['nombre'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['costo'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['precio'];?>
                </td>
                <td>
                    <?php echo $data_user[$i]['cantidad'];?>
                </td>
               
                <td style="text-align: center">
                    <span class="btn btn-warning btn-md" data-toggle="modal" data-target="#ActualizarpModalProducto"onclick="getInfoProducto(<?php echo $data_user[$i]['idproducto'];?>)"><i class="fas fa-edit"></i></span> 
                </td>
                <td style="text-align: center">
                    <span class="btn btn-danger btn-md"onclick="EliminarProducto(<?php echo $data_user[$i]['idproducto'];?>)"><i class="fas fa-trash-alt"></i></span>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>    
    </table>
  
</div>

