<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="imagen/favicon.ico"/>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>


  <div class="container-fluid"> <!-- container-fluid es para un contenedor con el ancho completo -->
      <br>
      <nav class="navbar sticky-top navbar-light bg-light" style="background-color: #111B3E;"> <!--Color banner--> 
        <a><img src="imagen/Logo-website.png"  /></a> <!--Insercion logo de mancuerna-->
      </nav>

      <br><br><br><br>
      <!-- Formulario de ingreso -->
    <div class="col ">
       <form action="validar.php" method="post">

  <div class="row justify-content-md-center">
      <div class="col-md-3 mb-3">
      <label for="validationServer01">Usuario</label>
      <input name="usuario" type="text" class="form-control is-valid" id="validationServer01" placeholder="Usuario"  required>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-md-3 mb-3">
      <label for="validationServer03">Contraseña</label>
      <input name="pass" type="password" class="form-control is-invalid" id="validationServer03" placeholder="Contraseña" required>
      <div class="invalid-feedback">
        
      </div>
    </div>
  </div>
   <div class=" row justify-content-md-center">
<button class="btn btn-dark" type="submit"> Iniciar Sesión</button>
  </div>
</form>

 </body>
</html>