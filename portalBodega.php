<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['user']==1) {
  header("Location:portalBodega.php");
}
    require("conex.php");
?>



<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="imagen/favicon.ico"/>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   
   <link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/diseño.css">
  </head>
  <body>


  <div class="container-fluid"> <!-- container-fluid es para un contenedor con el ancho completo -->
      <br>
      <nav class="navbar sticky-top navbar-light bg-light" style="background-color: #111B3E;"> <!--Color banner--> 
        <a><img src="imagen/Logo-website.png"  /></a> <!--Insercion logo de mancuerna-->
         
      </nav>
<div class="row">
    <div class="col col-3">
        <div id="menu">
        <div class="form-group">
          <div class="col-lg-2 ">
            <div class="btn-group">
              <ul class="menu menu-responsive">
         <li class="active"><a href="">Bienvenid@ <strong><?php echo $_SESSION['user'];?></strong> 
         <li ><a href="Desconectar.php">Cerrar Sesión</a></li>

      
        <li><a >Inventario</a></li>
        <li><a >Control Bienes</a></li>
        <li><a >Tarjeta Responsabilidad</a></li>    
        
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2" class= "rounded mx-auto d-block" alt="Responsive image"">

      <img src="imagen/Logo-website.png">
  
    
    
  </div>

</div>
 <?php 
/* Cerrar la conexión */
mysql_close($conexion); 
?>

</body>
</html>
