 <?php require_once ("Public/includes/header.php"); ?> 
<div class="container">
  <div class="row">
    <h4>INFORMACION DE LOS CURSOS</h4>
    <hr style="margin-top:5px;margin-bottom: 5px;">
    <div class="content"> </div>
    <div class="container">
    <div class="panel panel-primary">
      <div class="panel-body">
        <div class="col-lg-6">
            <form id="formArchivo" method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
              <label class="btn btn-dark" for="my-file-selector">
                <input required="" type="file" name="file" id="exampleInputFile">
              </label>
              
            </div>
              <button class="btn bg-dark"style="color: white;"  type="submit" onclick="subirArchivo()">Subir Documento</button>
          </form>
        </div>
        <div class="col-lg-6"> </div>
      </div>
    </div>
  </div>


<!--tabla-->
<div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <p></p>
        <h3 class="panel-title">Descargas Disponibles</h3>
      </div>
      <div class="panel-body">
   
<table class="table">
  <thead>
    <tr>
      <th width="7%">#</th>
      <th width="70%">Nombre del Archivo</th>
      <th width="13%">Descargar</th>
      <!--<th width="10%">Eliminar</th>-->
    </tr>
  </thead>
  <tbody>
<?php
$archivos = scandir("archivos");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;
?>
<p>  
 </p>
         
    <tr>
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td>
        <a title="Descargar Archivo" href="archivos/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i];?>" style="color: green; font-size:20px;">
          <i class="fas fa-cloud-download-alt"></i>
        </a>
      </td>
      <td>
        <!--<a title="Eliminar Archivo"  style="color: red; font-size:20px;" onclick="eliminarArchivo(<?php echo $archivos[$i];?>)"> 
          <i class="fas fa-trash"></i>
        </a>-->
      </td>
    </tr>
 <?php }?> 

  </tbody>
</table>
</div>
</div>
</div>
<!-- Fin tabla--> 
  </div>
</div>

