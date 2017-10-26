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
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Activo<strong><?php echo $_SESSION['user'];?></strong></a> </a>
  </li>   
   <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="Desconectar.php" role="tab" aria-controls="profile" img src="/open-iconic/svg/icon-name.svg" alt="icon name">Cerrar Sesión</a>
  </li>  
</ul>


<!---------------------Programacion---------------------------------------------------------------->
<br><br><br>

<!--primer Fragmento-->
<form method="POST" action="guardarE.php">
<div id="vempleado">
<div class="row" >
  <div class="col-md-2">
        <button id="bexpediente" type="button" class="btn btn-outline-dark active">Datos Personales</button>
      </div>
     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="nom1" type="text" class="form-control is-valid" id="validationServer01" placeholder="Primer Nombre "  required>
      <br>
      <input name="nom2" type="text" class="form-control is-valid" id="validationServer01" placeholder="Segundo NOmbre"  required>
      <br>
       <input name="ap1" type="text" class="form-control is-valid" id="validationServer01" placeholder="Primer Apellido"  required>
       <br>
        <input name="ap2" type="text" class="form-control is-valid" id="validationServer01" placeholder="Segundo Apellido"  required>
        <br>
        <input name="dpi" type="text" class="form-control is-valid" id="validationServer01" placeholder="DPI CUI"  required>
        <br>
      <input name="sex" type="text" class="form-control is-valid" id="validationServer01" placeholder="Sexo"  required>
    
       
    </div>

    <!--Segundo Bloque-->
    <div class="col-lg-3">

      <input name="estadocivil" type="text" class="form-control is-valid" id="validationServer01" placeholder="Estado Civil"  required>
      <br>
     
      <input name="email" type="text" class="form-control is-valid" id="validationServer01" placeholder="Correo Electronico"  required>
      <br>
      <input name="igss" type="text" class="form-control is-valid" id="validationServer01" placeholder="Afiliación IGSS"  required>
    
    <br>
      <label> Fecha de Nacimiento </label>
      <input name="nacimiento" type="date" class="form-control is-valid" id="validationServer01" placeholder="Fecha Nacimiento"  required>
      <br>
      <input name="lugar" type="text" class="form-control is-valid" id="validationServer01" placeholder="Lugar de Nacimiento"  required>
     
</div>

    <!--Tercer Bloque-->
    <div class="col-lg-3">
      <input name="direccion" type="text" class="form-control is-valid" id="validationServer01" placeholder="Dirección"  required>
   
    <br>
      <input name="tel1" type="text" class="form-control is-valid" id="validationServer01" placeholder="Telefono Residencial"  required>
      <br>
      <input name="tel2" type="text" class="form-control is-valid" id="validationServer01" placeholder="Telefono Celular"  required>
      <br>
      <input name="licencia" type="text" class="form-control is-valid" id="validationServer01" placeholder="Licencia de Conducir"  required>
       <br> <br> <br>
      <ul class="nav nav-tabs" id="myTab" role="tablist" >

      <button  type="submit" class="btn btn-outline-primary" onclick="guardarE.php">Siguiente</button>
      <button  type="reset" class="btn btn-outline-primary">Cancelar <span class="glyphicon glyphicon-search"></span></button>    
</ul>     
 </div>
  </div>
  </div>
   </form>

<!---------------------->

<!--Datos del conyugue-->


  <div class="row" id="vconyuge">
  <div class="col-md-2">
   
      <button type="button" class="btn btn-outline-dark active">Datos Conyuge</button>
     </div>
     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="nomc" type="text" class="form-control is-valid" id="validationServer01" placeholder="Nombre de Conyuge "  required><br>
      <input name="numh" type="text" class="form-control is-valid" id="validationServer01" placeholder="Numero de Hijos"  required>
     
       
    </div>

    <!--Segundo Bloque-->
    <div class="col-lg-3">
     <label>Fecha Nacimiento</label>
      <input name="fechan" type="date" class="form-control is-valid" id="validationServer01" placeholder="Fecha de Nacimiento"  required>
      <br>
      <input name="nomh" type="text" class="form-control is-valid" id="validationServer01" placeholder="Nombre de Hijos"  required>
 
     
</div>

    <!--Tercer Bloque-->
    <div class="col-lg-3">
      <input name="sexo" type="text" class="form-control is-valid" id="validationServer01" placeholder="Sexo"  required>
   
    
      <br>
 </div>
   </div>


   <!--Datos del Profesion-->

  <div class="row" id="vprofesion">
  <div class="col-md-2">
   
      <button type="button" class="btn btn-outline-dark active">Profesión</button>
     </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="profesion" type="text" class="form-control is-valid" id="validationServer01" placeholder="Profesión"  required>
      <br>
      <input name="oe" type="text" class="form-control is-valid" id="validationServer01" placeholder="Otros Estudios"  required>
     
       
    </div>

    <!--Segundo Bloque-->
    <div class="col-lg-3">
     
      <input name="ea" type="text" class="form-control is-valid" id="validationServer01" placeholder="Estudia Actualmente"  required>
      
 
     
</div>

    <!--Tercer Bloque-->
    <div class="col-lg-3">
      <input name="descripcion" type="text" class="form-control is-valid" id="validationServer01" placeholder="Descripción"  required>
  
 </div>
   </div>


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



 <?php 

?>

</body>
</html>




