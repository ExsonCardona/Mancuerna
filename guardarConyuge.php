 <?php 

 	   $vident=$_POST['ident'];
      $vnomc=$_POST['nomc'];
      $vsexo=$_POST['sexo'];



$con = mysqli_connect('localhost', 'root','', 'mancuerna');
            

               $query= "INSERT INTO `conyugue` (`codigo`, `nombre`, `sexo`, `Empelado_cui`) VALUES (NULL, '$vnomc', '$vsexo', '1234')";

mysqli_query($con,$query);
 ?>
<script language="javascript">window.location="portalRhh.php";</script>