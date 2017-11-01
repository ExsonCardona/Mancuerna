<?php 

 	  $vpro=$_POST['profesion'];
      $voe=$_POST['oe'];
      $vea=$_POST['ea'];
      $vdes=$_POST['descripcion'];
      $vdpi=$_POST['dpi'];
      

$con = mysqli_connect('localhost', 'root','', 'mancuerna');
            

               $query= "INSERT INTO `profesion` (`idprofesion`, `profesion`, `otroestudio`, `actualestudio`, `descrip`, `Empleado_cui`) VALUES (NULL, '$vpro', '$voe', '$vea', '$vdes', '$vdpi')";

mysqli_query($con,$query);
 ?>
<script language="javascript">window.location="portalRhh.php";</script>