<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['user']==1) {
  header("Location:portalAdmin.php");
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

<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
<script src="js/scripts.js"></script>
  <body>


  <div class="container-fluid"> <!-- container-fluid es para un contenedor con el ancho completo -->
      <br>
      <nav class="navbar sticky-top navbar-light bg-light" style="background-color: #111B3E;"> <!--Color banner--> 
        <a><img src="imagen/Logo-website.png"  /></a> <!--Insercion logo de mancuerna-->
         
      </nav>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Activo<strong><?php echo $_SESSION['user'];?></strong></a> </a>
  </li>   
  <li class="nav-item">
    <a class="nav-link" id="breportes" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Reportes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bcontratos" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Contratos</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link" id="binventario" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"> Inventario
    </a>

  </li>
   <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="Desconectar.php" role="tab" aria-controls="profile">Inicio</a>
  </li>
</ul>


<!--<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagen/paisaje.jpg" alt="First slide">
      <h3>Misión </n></h3>
      <br>
    <p>
    MANCUERNA, es una mancomunidad que promueve la gestión integrada del recurso hídrico, a través del fortalecimiento</p>
    </div>
  </div>
</div>-->


<!---------------------Programacion---------------------------------------------------------------->
<br><br><br>

<!--primer Fragmento-->
<form method="POST" action="guardarE.php">
<div id="vreportes">
<div class="row" >
  <div class="col-md-2">
        <button id="bexpediente" type="button" class="btn btn-outline-dark active">REPORTE1</button>
        <br><br>
        <button id="bexpediente" type="button" class="btn btn-outline-dark active">REPORTE2</button>
        <br><br>
        <button id="bexpediente" type="button" class="btn btn-outline-dark active">REPORTE2</button><br>
      </div>
  
<!--HOJA DE REPORTES>-->



 </div>
  </div>
  </div>
   </form>

<!---------------------->

<!--Datos del conyugue-->

  <div class="row" id="vcontratos">
  <div class="col-md-2">
   
      <button type="button" class="btn btn-outline-dark active">CONTRATOS</button>
     </div>

     <!--HOJA DE CONTRATOS>-->
   
    
      <br>
 </div>
   </div>


   <!--Datos del Profesion-->

  <div class="row" id="vinventario">
  <div class="col-md-2">
   
      <button type="button" class="btn btn-outline-dark active">INVENTARIO</button>
     </div>

      <!--HOJA DE INVENTARIO>-->
  
 </div>
   </div>

 <?php 
?>

</body>
</html>
