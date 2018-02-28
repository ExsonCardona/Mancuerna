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
<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
<script src="js/script.js"></script>
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
    <a class="nav-link" id="bbienes" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Ingreso Bienes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="btarjeta" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Tarjeta Responsabilidad</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="btraslado" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Traslados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bbaja" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Baja Bienes</a>
  </li>
 
   <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="Desconectar.php" role="tab" aria-controls="profile" img src="/open-iconic/svg/icon-name.svg" alt="icon name">Cerrar Sesión</a>
  </li>
  
</ul>

  <!---------------------Programacion---------------------------------------------------------------->
<br><br><br>
<div id="vbienes">
<div class="row">
  <div class="col-md-2">
      <button type="button" class="btn btn-outline-dark active">Recepción de Bienes</button>
      </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
      <div class="form-group">
        <label class="col-xs-3 control-label">Tipo de Ingreso</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="color">
                <option value="">Compra</option>
                <option value="black">Donación</option>
            </select>
        </div>
    </div>
    </div>
    </div>



<!--Detalles de factura-->
<br><br>
  <div class="row">
  <div class="col-md-2">
   
      <button type="button" class="btn btn-outline-dark active">Detalles de Factura</button>
     </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="numfac" type="text" class="form-control is-valid" id="validationServer01" placeholder="Numero de Factura"  required><br>

      <input name="fecha" type="text" class="form-control is-valid" id="validationServer01" placeholder="Fecha de Compra"  required>
     
       
    </div>

    <!--Segundo Bloque-->
    <div class="col-lg-3">

      <input name="Prov" type="text" class="form-control is-valid" id="validationServer01" placeholder="Proveedor"  required>
      
</div>

    <!--Tercer Bloque-->
    <div class="col-lg-3">
     
      <input name="donante" type="text" class="form-control is-valid" id="validationServer01" placeholder="Entidad Donante"  required><br>

      <input name="doc" type="text" class="form-control is-valid" id="validationServer01" placeholder="Número Documento"  required>

  
 </div>
   </div>


   <!--Información del Mobiliario y Equipo-->
<br><br>
  <div class="row">
  <div class="col-md-2">
   
      <button type="button" class="btn btn-outline-dark active">Mobiliario y Equipo</button>
     </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="marca" type="text" class="form-control is-valid" id="validationServer01" placeholder="Marca"  required>
      <br>
      <input name="color" type="text" class="form-control is-valid" id="validationServer01" placeholder="Color"  required>
      <br>
      <input name="modelo" type="text" class="form-control is-valid" id="validationServer01" placeholder="Modelo"  required>
 
    </div>

    <!--Segundo Bloque-->
    <div class="col-lg-3">
      <input name="codigo" type="text" class="form-control is-valid" id="validationServer01" placeholder="Código"  required><br>

      <input name="nums" type="text" class="form-control is-valid" id="validationServer01" placeholder="Numero de Serie"  required><br>

      <input name="Vu" type="text" class="form-control is-valid" id="validationServer01" placeholder="Valor Unitario"  required>
</div>

    <!--Tercer Bloque-->
    <div class="col-lg-3">
      <input name="estado" type="text" class="form-control is-valid" id="validationServer01" placeholder="Estado"  required><br>
      <input name="detalles" type="text" class="form-control is-valid" id="validationServer01" placeholder="Detalles"  required>
  
 </div>
   </div>
</div>

   <!--Tarjeta de Responsabilidades-->
  <div id="vtarjeta">
  <div class="row">
  <div class="col-md-2">
   
      <button type="button" class="btn btn-outline-dark active">Tarjeta de Resonsabilidad</button>
     </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">

    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar</button>
      </span>
      <input type="text" class="form-control">
    </div>
    </div>
    </div>
     <br><br>


<!--Datos del Empleado-->
<div class="row">
  <div class="col-md-2">
      <button type="button" class="btn btn-outline-dark active">Datos Del Empleado</button>
      </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="cui" type="text" class="form-control is-valid" id="validationServer01" placeholder="DPI CUI"  required>
      <br>
      <input name="unidad" type="text" class="form-control is-valid" id="validationServer01" placeholder="Unidad"  required>
      <br>
  
    </div>


    <!--Segundo Bloque-->
    <div class="col-lg-3">
      <input name="nombres" type="text" class="form-control is-valid" id="validationServer01" placeholder="Nombres"  required>
      <br>
      <input name="proyecto" type="text" class="form-control is-valid" id="validationServer01" placeholder="Proyecto"  required>
        </div>

         <!--Tercer Bloque-->
      <div class="col-lg-3">

      <input name="apellidos" type="text" class="form-control is-valid" id="validationServer01" placeholder="Apellidos"  required>
      <br>
      <input name="departamento" type="text" class="form-control is-valid" id="validationServer01" placeholder="Departamento"  required><br>
</div>
</div><br>

      <!--Tarjeta-->
<div class="row">
  <div class="col-md-2">
      <button type="button" class="btn btn-outline-dark active">Tarjeta</button>
      </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="destino" type="text" class="form-control is-valid" id="validationServer01" placeholder="Destino"  required>
      <br>
      <label>Fecha de Cargo</label>
      <input name="fechcargo" type="date" class="form-control is-valid" id="validationServer01" placeholder="Fecha de Cargo"  required>

    </div>


    <!--Segundo Bloque-->
    <div class="col-lg-3">
      <input name="estado" type="text" class="form-control is-valid" id="validationServer01" placeholder="Estado"  required>
      <br>

      <label>Fecha de Descargo</label>
      <input name="fechdescargo" type="date" class="form-control is-valid" id="validationServer01" placeholder="Fecha de Descargo"  required>
        </div>

         <!--Tercer Bloque-->
      <div class="col-lg-3">

      <input name="cargo" type="text" class="form-control is-valid" id="validationServer01" placeholder="Cargo"  required>
      <br>
      <input name="descripción" type="text" class="form-control is-valid" id="validationServer01" placeholder="Descripción"  required><br>

      </div>
      </div>
      <br><br>


    <!--Bienes-->
    <div class="row">
    <div class="col-md-2">
      <button type="button" class="btn btn-outline-dark active">Bienes</button>
      </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
      <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar</button>
      </span>
      <input type="text" class="form-control">
    </div>

    </div>


      </div>
     
    
   




    <!--Tarjeta-->
  <div class="row">
  <div class="col-md-2">
     
      </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="marcao" type="text" class="form-control is-valid" id="validationServer01" placeholder="Marca"  required>
      <br>

      <input name="modelo" type="text" class="form-control is-valid" id="validationServer01" placeholder="Modelo"  required>

    </div>


    <!--Segundo Bloque-->
    <div class="col-lg-3">
      <input name="serie" type="text" class="form-control is-valid" id="validationServer01" placeholder="Serie"  required>
      <br>

      <input name="vu" type="text" class="form-control is-valid" id="validationServer01" placeholder="Valor Unitario"  required>
        </div>

         <!--Tercer Bloque-->
      <div class="col-lg-3">

      <input name="caracteristicas" type="text" class="form-control is-valid" id="validationServer01" placeholder="Caracteristicas"  required>
      <br>
      </div>
      </div>
 </div>
     

      <!--Traslados-->
    <div id="vtraslado">
    <div class="row">
    <div class="col-md-2">
      <button type="button" class="btn btn-outline-dark active">Traslados</button>
      </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
      <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar</button>
      </span>
      <input type="text" class="form-control">
    </div>
    </div>
  </div>
   <br><br>
    <div class="row">
    <div class="col-md-2">
      <button type="button" class="btn btn-outline-dark active">Traslados</button>
      </div> 
  
      <br><br>
      <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="tipo" type="text" class="form-control is-valid" id="validationServer01" placeholder="Tipo de bien "  required>
      <br>
      <input name="serie" type="text" class="form-control is-valid" id="validationServer01" placeholder="Serie"  required>
      <br>
      <input name="org" type="text" class="form-control is-valid" id="validationServer01" placeholder="Organización"  required>
      <br>
      <input name="estado" type="text" class="form-control is-valid" id="validationServer01" placeholder="Estado"  required>
      <br>
      <label>Fecha Entrega</label>
      <input name="fechaE" type="date" class="form-control is-valid" id="validationServer01" placeholder=""  required>
      <br>
      <input name="libro" type="text" class="form-control is-valid" id="validationServer01" placeholder="Libro"  required>


    </div>


    <!--Segundo Bloque-->
    <div class="col-lg-3">
      <input name="marca" type="text" class="form-control is-valid" id="validationServer01" placeholder="Marca"  required>
      <br>

      <input name="vu" type="text" class="form-control is-valid" id="validationServer01" placeholder="Valor Unitario"  required>
        <br>
        <input name="notif" type="text" class="form-control is-valid" id="validationServer01" placeholder="Notificación"  required>
      <br>
      <input name="responsable" type="text" class="form-control is-valid" id="validationServer01" placeholder="Responsable"  required>
   
         <br>
         <label>Fecha Egreso</label>
      <input name="fechaEgreso" type="date" class="form-control is-valid" id="validationServer01" placeholder="Responsable"  required>
               <br>
      <input name="numacta" type="text" class="form-control is-valid" id="validationServer01" placeholder="Número Acta"  required>
        </div>

         <!--Tercer Bloque-->
      <div class="col-lg-3">

      <input name="modelo" type="text" class="form-control is-valid" id="validationServer01" placeholder="Modelo"  required>
      <br>
      <input name="caracteristicas" type="text" class="form-control is-valid" id="validationServer01" placeholder="Caracteristicas"  required>
       <br>
      <input name="dias" type="text" class="form-control is-valid" id="validationServer01" placeholder="Número de Dias"  required>
       <br>
      <input name="numcomocimiento" type="text" class="form-control is-valid" id="validationServer01" placeholder="Número de Conocimiento"  required>
       <br>
       <label>Fecha registro</label>
      <input name="fecha" type="date" class="form-control is-valid" id="validationServer01" placeholder="Caracteristicas"  required>
      </div>
      </div>
      </div>
   


       <!--Buscar bien para darle baja-->
       <div id="vbajabienes">
        <div class="row">
    <div class="col-md-2">
      <button type="button" class="btn btn-outline-dark active">Baja bienes</button>
      </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
      <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar</button>
      </span>
      <input type="text" class="form-control">
    </div>
    </div>
  </div>
   <br><br>
  <div class="row">
  <div class="col-md-2">
     
      </div>

     <!--Primer Bloque-->
    <div class="col-lg-3">
       <input name="marcao" type="text" class="form-control is-valid" id="validationServer01" placeholder="Marca"  required>
      <br>

      <input name="modelo" type="text" class="form-control is-valid" id="validationServer01" placeholder="Modelo"  required>

    </div>


    <!--Segundo Bloque-->
    <div class="col-lg-3">
      <input name="serie" type="text" class="form-control is-valid" id="validationServer01" placeholder="Serie"  required>
      <br>

      <input name="vu" type="text" class="form-control is-valid" id="validationServer01" placeholder="Valor Unitario"  required>
        </div>

         <!--Tercer Bloque-->
      <div class="col-lg-3">

      <input name="caracteristicas" type="text" class="form-control is-valid" id="validationServer01" placeholder="Caracteristicas"  required>
      <br>
      </div>
      </div>
      <br><br>

      <div class="row">
    <div class="col-md-2">
    
      </div>

       <div class="col-lg-3">
      <div class="form-group">
        <label class="col-xs-3 control-label">Tipo Baja</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="color">
                <option value="">Destruccion</option>
                <option value="black">Robo</option>
                <option value="black">Perdida</option>
                <option value="black">Faltante</option>
                <option value="black">Extravio</option>
            </select>
        </div>
    </div>
     <input name="dictamen" type="text" class="form-control is-valid" id="validationServer01" placeholder="Numero de Dictamen"  required>
     </div>
  <!--Primer Bloque-->
     <br>
    <div class="col-lg-3"><br>
      <input name="status" type="text" class="form-control is-valid" id="validationServer01" placeholder="Status"  required><br>
      <input name="autorizacion" type="text" class="form-control is-valid" id="validationServer01" placeholder="Autorización"  required>

    
   
      
    

    </div>
     </div>
     </div>



 <?php 

?>

</body>
</html>







