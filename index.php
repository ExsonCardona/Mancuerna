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

<form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Name</label>
      <input type="text" class="form-control mb-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2 mb-sm-0">
        <div class="input-group-addon">@</div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
      </div>
    </div>
    <div class="col-auto">
      <div class="form-check mb-2 mb-sm-0">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox"> Remember me
        </label>
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
     <!-- Fin Formulario de ingreso -->

</div>

     

   
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>