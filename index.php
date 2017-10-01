<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Mancuerna</title>
<link rel="shortcut icon" href="images/P.ICO"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body >


      <div id="home" class="header">
        <div class="container">
           <nav class="top-nav">
              <ul class="top-nav"> 
                  <a><img src="Imagen/Logo-website.png"  /></a>
                        
                </ul>       
            </nav>
        </div>
      </div>
     
<br>
<br>
<br>
<br>
<br>
<form id="form1" action = "validar.php" method="POST" class="form-horizontal" >
   <fieldset>
     <legend align="center" >     Iniciar Sesión</legend>
      <div class="form-group">
         <label class="col-lg-6 control-label">Usuario</label>
         <div class="col-lg-2">
         <input  name="usuario" type="text" class="form-control"  placeholder="Usuario">
     </div>
     </div>

     <div class="form-group">
         <label class="col-lg-6 control-label">Contraseña</label>
         <div class="col-lg-2">
         <input name="contra" type="password" class="form-control"  placeholder="Contraseña">
     </div>
     </div>
 

     <div class="form-group">
            <div class="col-lg-0 col-lg-offset-7">
            <button name="login" type="submit" value="login" class="btn btn-primary">Ingresar</button>
            </div>
    </div>
       </div>
    
      </fieldset>
    </form>


</body>
</html>

