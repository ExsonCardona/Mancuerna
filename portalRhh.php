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
<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
<script src="js/script.js"></script>
<link href="/open-iconic/font/css/open-iconic-bootstrap.scss" rel="stylesheet">
  <body>

  <div class="container-fluid"> <!-- container-fluid es para un contenedor con el ancho completo -->
      <br>
      <nav class="navbar sticky-top navbar-light bg-light" style="background-color: #111B3E;"> <!--Color banner--> 
        <a><img src="imagen/Logo-website.png"  /></a> <!--Insercion logo de mancuerna-->
         
      </nav>

<ul class="nav nav-tabs" id="myTab" role="tablist" >
      <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Activo <strong><?php echo $_SESSION['user'];?></strong> </a> 
  </li>  
   <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="Desconectar.php" role="tab" aria-controls="profile" img src="/open-iconic/svg/icon-name.svg" alt="icon name">Cerrar Sesión</a>
  </li>  
</ul>


<!---------------------Programacion---------------------------------------------------------------->
<br><br><br>


<form  method="POST" class="form-horizontal">
  <fieldset>
    <div class="container" id="vempleado">

      <!-- Primer Bloque -->
      <div class="row">
    <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="imagen/user.png" alt="Card image cap">
  <div class="card-body">
    <p class="card-text" align="center">Registro Empleados</p>
  </div>
</div>
        <div class="col" >
        <div class="form-group" type="submit">
          <input type="text" class="form-control is-valid" id="validationServer01" required="required"  name="dpi" placeholder="Codigo unico identificacion" required>
        </div> 
         <div class="form-group" >
          <input type="text" class="form-control is-valid" id="validationServer01" required="required" name="nom1" placeholder="Primer Nombre" required>
        </div>
         <div class="form-group">
          <input type="text" class="form-control is-valid" id="validationServer01"  name="nom2" placeholder="Segundo Nombre" required>
        </div> 
         <div class="form-group" >
          <input type="text" class="form-control is-valid" id="validationServer01"  name="ap1" placeholder="Primer Apellido" required>
        </div>
         <div class="form-group" >
          <input type="text" class="form-control is-valid" id="validationServer01"  name="ap2" placeholder="Segundo Apellido" required>
        </div>  
      </div>
 
 
    
    <!--SEgundo Bloque-->
 <div class="col order-12">
  <div class="form-group">
          <select type="text" class="form-control is-valid" id="validationServer01"  name="sex" class="form-group" required>>
            <option>Sexo</option>
            <option>Masculino</option>
            <option>Femenino</option>
          </select> 
        </div> 
  <div class="form-group">
          <select type="text" class="form-control is-valid" id="validationServer01"  name="estadocivil" class="form-group" required>
            <option>Estado Civil</option>
            <option>Soltero</option>
            <option>Casado</option>
          </select> 
        </div>  
        <div class="form-group">
          <input type="text" class="form-control is-valid" id="validationServer01"  name="email" placeholder="Correo Electronico" required>
        </div> 
         <div class="form-group">
          <input class="form-control" type="text" name="igss" placeholder="Número Afilicion IGSS" required>
        </div>

  </div>

      <!--Tercer Bloque-->
      <div class="col order-1">
         <div class="form-group">
          <label>Fecha Nacimiento</label>
          <input  class="form-control is-valid" id="validationServer01"  type="date" name="nacimiento" placeholder="Fecha" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control is-valid" id="validationServer01"  name="direccion" placeholder="Domicilio" required>
        </div> 
         <div class="form-group">
          <input type="text" class="form-control is-valid" id="validationServer01"  name="tel1" placeholder="Numero Telefono" required>
        </div>
         <div class="form-group">
          <input type="text" class="form-control is-valid" name="licencia" placeholder="Numero de Licencia" required>
        </div>
         <div class="form-group">
          <button  id="bempleado" class="btn btn btn-success">siguiente</button> 
          </div> 
       
      </div>
    </div>
    </div>



  </fieldset>
</form>


<!---------------------->

<!--Datos del conyugue-->

<form action="portalRhh.php" method="POST" class="form-horizontal">
  <fieldset>
    <div class="container" id="vconyuge">
      <div class="row">
  <div class="card" style="width: 15rem;">
    <div class="card-body">
    <p class="card-text">DPI: <?php echo $_POST['dpi'];?></p>
  </div>
  <img class="card-img-top" src="imagen/user.png" alt="Card image cap">
  
</div>

        <div class="col-sm-3">
         <div class="form-group">
          <input name="numh" type="text" class="form-control is-valid" id="validationServer01" placeholder="<?php echo $_POST['dpi'];?>"  required>
        </div>
        <div class="form-group">
        <input name="numh" type="text" class="form-control is-valid" id="validationServer01" placeholder="Numero de Hijos"  required>
        </div>
         <div class="form-group">
          <input name="numh" type="text" class="form-control is-valid" id="validationServer01" placeholder="Numero de Hijos"  required>
        </div>
        <div class="form-group">
        <input name="numh" type="text" class="form-control is-valid" id="validationServer01" placeholder="Numero de Hijos"  required>
        </div>
         <div class="form-group">
          <button id="bprofesion" class="btn btn btn-success">siguiente</button>
        </div> 
      </div> 
<!--Segundo Bloque-->
      <div class="col-sm-5">   
 <?php 
require("eliminar.php");
/* Mostrar la tabla con los registros */
echo $table; 

?>


 <?php 
/* Cerrar la conexión */
mysql_close($conexion); 
?>

    </div>
  </div>
  </fieldset>
</form>




   <!--Datos del Profesion-->

  <form>
    <fieldset>
      <div class="container" id="vprofesion">
        <div class="row">
           <div class="card" style="width: 15rem;">
               <p class="card-text">DPI: <?php echo $_POST['dpi'];?></p>
     
            <img class="card-img-top" src="imagen/profesion.jpg" alt="Card image cap">
             <div class="card-body">
           
        </div>
      </div>
        <div class="col-sm-3">
           <div class="form-group">
            <input name="profesion" type="text" class="form-control is-valid" id="validationServer01" placeholder="Profesión"  required>
         
        </div>
        <div class="form-group">
          <input name="oe" type="text" class="form-control is-valid" id="validationServer01" placeholder="Otros Estudios"  required>
        </div>
        <div class="form-group">
         <input name="ea" type="text" class="form-control is-valid" id="validationServer01" placeholder="Estudia Actualmente"  required>
        </div>
         <div class="form-group">
         <input name="oe" type="text" class="form-control is-valid" id="validationServer01" placeholder="Otros Estudios"  required>
     
        </div>
        <div class="form-group">
          <input name="descripcion" type="text" class="form-control is-valid" id="validationServer01" placeholder="Descripción"  required>
  
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn btn-success">Guardar</button>
        </div> 
        <div class="form-group">
          <button id="bcontrato" class="btn btn-outline-warning">Siguiente</button>
        </div> 
        </div>         
        </div>
      </div>
    </fieldset>
  </form>


   <!--Datos del contrato-->

  <div class="row" id="vcontrato">
  <div class="col-md-2">
   
      <button type="button" class="btn btn-outline-dark active">Datos del Contrato</button>
     </div>
     <!--Primer Bloque-->
    <div class="col-lg-3">

       <input name="contrato" type="text" class="form-control is-valid" id="validationServer01" placeholder="Número de Contrato "  required><br>
      <input name="proyecto" type="text" class="form-control is-valid" id="validationServer01" placeholder="Proyecto"  required><br>
       <input name="cargo" type="text" class="form-control is-valid" id="validationServer01" placeholder="Cargo"  required>

    </div>


    <!--Segundo Bloque-->
    <div class="col-lg-3">
     
      <input name="dep" type="text" class="form-control is-valid" id="validationServer01" placeholder="Departamento"  required>
      <br>
      <input name="unidad" type="text" class="form-control is-valid" id="validationServer01" placeholder="Unidad"  required>
 
     
</div>

    <!--Tercer Bloque-->
    <div class="col-lg-3">
      <label>Fecha de Contratación</label>
      <input name="fc" type="date" class="form-control is-valid" id="validationServer01" placeholder="Fecha de Contratación"  required>
 </div>
   </div>



<!--Datos Expediente-->
<div class="row" id="vexpediente">
  <div class="col-md-2">
      <button type="button" class="btn btn-outline-dark active">Datos Expediente</button>
      </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="medico" type="text" class="form-control is-valid" id="validationServer01" placeholder="Médico Particular"  required>
      <br>
      <input name="telefono" type="text" class="form-control is-valid" id="validationServer01" placeholder="Telefono de Doctor"  required>
      <br>
       <input name="sangre" type="text" class="form-control is-valid" id="validationServer01" placeholder="Tipo de Sangre"  required>
  
    </div>


    <!--Segundo Bloque-->
    <div class="col-lg-3">
      <input name="alergias" type="text" class="form-control is-valid" id="validationServer01" placeholder="Alergias"  required>
      <br>
      <input name="da" type="text" class="form-control is-valid" id="validationServer01" placeholder="Detalles de Alergias"  required>
        </div>

         <!--Tercer Bloque-->
      <div class="col-lg-3">
      <label> En caso de emergencia llamar a</label>
      <input name="parentesco" type="text" class="form-control is-valid" id="validationServer01" placeholder="Parentesco"  required>
      <br>
      <input name="tel" type="text" class="form-control is-valid" id="validationServer01" placeholder="Teléfono"  required><br>

      </div>
      </div>
      <br><br>
  
</body>
 

</html>
  <div class="container">
<nav class="navbar sticky-top navbar-light bg-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
   <ul class="nav justify-content-end">
      <ul class="nav nav-tabs">
   <li class="nav-item">

    <a class="nav-link active" id="bempleado" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Datos Personales</a>
  </li>
  <li class="nav-item">
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bprofesion" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Profesion</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bcontrato" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Datos del Contrato</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" id="bexpediente" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Datos Expediente</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bconyuge" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Conyuge</a>
  </li> 
</ul>
</ul>
</nav>
</div>




