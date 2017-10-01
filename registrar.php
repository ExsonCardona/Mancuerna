<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/estilos.css"/>
    <script src="js/jquery-1-11-3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">
</head>
<script type="text/javascript">
function valido()
{
  if(document.form1.user.value==""||document.form1.password.value=="" ){
    alert('Debe llenar todos los campos');
    document.form1.user.focus();
    return false;

  } else{
   
    return true;
  }
    
}
    </script>


    <script type="text/javascript">
function cancelar()
{
  
    document.form2.user.value="";
    return false;
 }
    </script>


<body>
	<!--barra navegacion-->


    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
         <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    	<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
              
                </button>
                <a href="index.php" class="navbar-brand color_animation "> Iniciar Sesión</a>
            </div>
            <!--Agrupar los enalaces en navegacion, que se puedan ocultar al minimizar la barra-->
   <div class="collapse navbar-collapse" id="bs-example-navbar-ccolor_animationollapse-1">
                <ul class="nav navbar-nav main-nav  clear navbar-right ">
                
                  
                   
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav></br></br></br></br>

  
    <div>
        <img src="images/imagen.jpg" alt="im" class="im">
      </div>

<div class="container-fluid col-lg-offset-3">
   <div class="row">
    <div class="col-md-7">

<!--Inicio formulario -->
<form id="form1" action = "guardar.php" method="POST" class="form-horizontal" >
   <fieldset>
   	<legend aling="center">Registrar</legend>
    <div class="form-group">
         <label class="col-lg-2 control-label">Nombre</label>
         <div class="col-lg-7">
         <input  name="nombre" type="text" class="form-control"  placeholder="Nombre">
     </div>
     </div>

     <div class="form-group">
         <label class="col-lg-2 control-label">Apellido</label>
         <div class="col-lg-7">
         <input name="apellido" type="text" class="form-control"  placeholder="Apellido">
     </div>
     </div>
     <div class="form-group">
         <label class="col-lg-2 control-label">Usuario</label>
         <div class="col-lg-7">
         <input  name="user" type="text" class="form-control"  placeholder="Usuario">
     </div>
     </div>

     <div class="form-group">
         <label class="col-lg-2 control-label">Contraseña</label>
         <div class="col-lg-7">
         <input name="password" type="password" class="form-control"  placeholder="Contraseña">
     </div>
     </div>
    <div class="form-group">
            <label for="select" class="col-lg-3 control-label">Departamento</label>
            <div class="col-lg-6">        
            <select name="dep" class="form-control" id="select">
                 <?php
                  $conexion = mysql_connect('localhost','root',"");

                  mysql_select_db("conex",$conexion);

                  $query = "SELECT * FROM dep";

                  $record = mysql_query($query);

                  while ($dato = mysql_fetch_array($record)) 
                  {
                    echo "<option value='".$dato['id']."'>".$dato['departamento']."</option>";
                  }

                ?>

              </select>
          </div>
            </div>

     <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button name="login" type="submit" value="login" class="btn btn-info">Guardar</button>
              <button class="btn btn-info" type="reset" value="Reset">Cancelar</button>  
            </div>
    </div>
       </div>
    
      </fieldset>
    </form>

    </div>
    </div>
    </div>
   </body>
</html>
