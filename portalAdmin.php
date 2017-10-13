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
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Reportes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Contratos</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Invenatrio
    </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab" data-toggle="tab" aria-controls="dropdown1">Exson</a>
      <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab" data-toggle="tab" aria-controls="dropdown2">Preuba</a>
    </div>

  </li>
   <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="Desconectar.php" role="tab" aria-controls="profile">Inicio</a>
  </li>
</ul>


<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagen/paisaje.jpg" alt="First slide">
      <h3>Misión </n></h3>
      <br>
    <p>
    MANCUERNA, es una mancomunidad que promueve la gestión integrada del recurso hídrico, a través del fortalecimiento</p>
    
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagen/rio.jpg" alt="Second slide">
        <h3>Visión</h3>
      <br>
    <p>Los Municipios de MANCUERNA para el año 2020 han generado el restablecimiento de la Gobernabilidad del agua a través</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagen/acatenango.jpg" alt="Third slide">
    </div>
  </div>
</div>


 <?php 
/* Cerrar la conexión */
mysql_close($conexion); 
?>

</body>
</html>
