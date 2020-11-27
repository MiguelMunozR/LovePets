<?php require_once ("Public/includes/header.php"); 
//if(!isset($_SESSION))session_start();
//if(!isset($_SESSION['Active']))$_SESSION['Active'] = false;
//if(!$_SESSION['Active']){
//header('Location: index.php');
//}else{
?>
<link rel="stylesheet" href="Public/css/estilo.css">
<div class="container ">
    <div class="row">
        <div  class=" btn col-sm-12 col-md-8 col-lg-4 cuadro1" onclick="location.href='mascota'" >
            <span>
                 <h2>MASCOTAS</h2>
                  <i class="fa fa-users fa-10x"  aria-hidden="true"></i>
            </span>
        </div>
    </div>
    <br>
 
</div>

</div>
<?php require_once ("Public/includes/footer.php"); ?>