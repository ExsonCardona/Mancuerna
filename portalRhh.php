<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['user']==1) {
  header("Location:portalRhh.php");
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
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Nuevo Registro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Consultar</a>
  </li>
 
   <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="Desconectar.php" role="tab" aria-controls="profile" img src="/open-iconic/svg/icon-name.svg" alt="icon name">Cerrar Sesión</a>
  </li>
</ul>
<!---------------------Programacion---------------------------------------------------------------->
<br><br><br>
<div class="row">
  <div class="col-md-2">
      <button type="button" class="btn btn-outline-dark active">Datos Empleado</button>
     </div>
     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="dpi" type="text" class="form-control is-valid" id="validationServer01" placeholder="Numero DPI "  required>
      <br>
      <input name="apellido3" type="text" class="form-control is-valid" id="validationServer01" placeholder="Apellido Casado"  required>
      <br>
       <input name="domicilio" type="text" class="form-control is-valid" id="validationServer01" placeholder="Domicilio"  required>
       <br>
        <input name="apellido2" type="text" class="form-control is-valid" id="validationServer01" placeholder="Segundo Apellido"  required>
    </div>

    <!--Segundo Bloque-->
    <div class="col-lg-3">
     
      <input name="nit" type="text" class="form-control is-valid" id="validationServer01" placeholder="NIT"  required>
      <br>
      <input name="nombre1" type="text" class="form-control is-valid" id="validationServer01" placeholder="Primer Nombre"  required>
    
    <br>
      <input name="nacimiento" type="data-toggle" class="form-control is-valid" id="validationServer01" placeholder="Fecha nacimiento"  required>
      <br>
      <input name="Profesion" type="text" class="form-control is-valid" id="validationServer01" placeholder="Profesión"  required>
</div>

    <!--Tercer Bloque-->
    <div class="col-lg-3">
      <input name="nombre2" type="text" class="form-control is-valid" id="validationServer01" placeholder="Segundo Nombre"  required>
   
    <br>
      <input name="estado" type="text" class="form-control is-valid" id="validationServer01" placeholder="Estado Civil"  required>
      <br>
      <input name="apellido1" type="text" class="form-control is-valid" id="validationServer01" placeholder="Primer Apellido"  required>
      <br>
      <input name="sexo" type="text" class="form-control is-valid" id="validationServer01" placeholder="Genero"  required>
      <br>
      <button type="button" class="btn btn-outline-success">Guardar</button>
      <button type="button" class="btn btn-outline-danger">Eliminar</button>
      <button type="button" class="btn btn-outline-warning">Editar</button>
 </div>
  </div>


 <?php 
/* Cerrar la conexión */
mysql_close($conexion); 
?>

</body>
</html>
