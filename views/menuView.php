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
        <div  class=" btn col-sm-12 col-md-8 col-lg-4 cuadro1" style=" box-shadow: 10px 10px 8px rgba(0,0,0,0.5); " onclick="location.href='users'" >
            <span>
                 <h2>USUARIOS</h2>
                  <i class="fa fa-users fa-10x"  aria-hidden="true"></i>
            </span>
        </div>
        
        <div class=" btn col-sm-12 col-md-8 col-lg-4 cuadro2" style=" box-shadow: 10px 10px 8px rgba(0,0,0,0.5); " onclick="location.href='productos'">
            <span>
                 <h2>PRODUCTOS</h2>
               <i class="fa fa-cart-plus fa-10x" aria-hidden="true"></i>
            </span>
        </div>
       
    </div>
    <br>
    <div class="row">
        <div class=" btn col-sm-12 col-md-8 col-lg-4 cuadro1" style=" box-shadow: 10px 10px 8px rgba(0,0,0,0.5); " onclick="location.href='provedor'">
              <span>
                 <h2>PROVEDORES</h2>
             <i class="fa fa-truck fa-10x" aria-hidden="true"></i>
            </span>
        </div>
         
        <div class=" btn col-sm-12 col-md-8 col-lg-4 cuadro2" style=" box-shadow: 10px 10px 8px rgba(0,0,0,0.5); " onclick="location.href='ventas'">
              <span>
                 <h2>VENTAS</h2>
            <i class="fa fa-university fa-10x" aria-hidden="true"></i>
            </span>
        </div> 
    </div>
      <br>
    <div class="row">
        <div class=" btn col-sm-12 col-md-8 col-lg-4 cuadro3" style=" box-shadow: 10px 10px 8px rgba(0,0,0,0.5); " onclick="location.href='compras'">
              <span>
                 <h2>COMPRAS</h2>
             <i class="fa fa-shopping-cart fa-10x" aria-hidden="true"></i>
            </span>
        </div>
    </div>
      <br>
</div>

</div>
<?php require_once ("Public/includes/footer.php"); ?>
