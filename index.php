 <?php
  require_once ('./controllers/autoLoad.php');
  $autoLoad= new Autoload();
  $route= isset($_GET['view'])?$_GET['view']:'login';
  $obj=new BaseController($route);
 ?>