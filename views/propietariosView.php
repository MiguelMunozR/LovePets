<?php require_once ("Public/includes/header.php");?>
<div class="row">
    <div class="col-2 bg-dark ">
       <nav class="navbar ">
  <!-- Links -->
  <ul class="text-light ">LOVE PETS</ul>
  <ul class="navbar-light "style="list-style: none;">
    <li class="nav-item ">
      <a class="nav-link text-light  btn bg-dark d-block" href="users"> <i class="fa fa-users "  aria-hidden="true"></i> usuarios</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light btn bg-dark d-block" href="productos"> <i class="fa fa-cart-plus " aria-hidden="true"></i> productos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light btn bg-dark d-block" href="provedor"><i class="fa fa-truck " aria-hidden="true"></i> provedor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light btn bg-dark d-block" href="ventas"> <i class="fa fa-university " aria-hidden="true"></i> ventas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light btn bg-dark d-block" href="compras"><i class="fa fa-shopping-cart " aria-hidden="true"></i> compras</a>
    </li>
  </ul>

</nav>
    </div>
    <div class="col-10 justify-content-center">
        <div class="card">
  <div class="card-header">
   <h2>ADMINISTRADOR DE PROPIETARIOS</h2>
  </div>
  <div class="card-body">
      <span class="btn bg-dark"style="color: white;"  data-toggle="modal" data-target="#exampleModalPropietario">Registrar propietario</span>
       <!--<span  class="btn btn-primary" data-toggle="modal" data-target="#ActualizarpModalProducto"> actualizar producto</span>-->
      <hr>
      <div id="DataTableproductos">
        <?php require_once ('Public/Tablas/tbl_propietarios.php');?>
      </div>

<?php
require_once 'public/formularios/form_propietarios.php';

require_once ('public/includes/footer.php');
//}
?>
</div>
</div>
</div>
