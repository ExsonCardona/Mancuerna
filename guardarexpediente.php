<?php 

 	  $vmedico=$_POST['medico'];
      $vhos=$_POST['hos'];
      $valergias=$_POST['alergias'];
      $vda=$_POST['da'];
      $vparentesco=$_POST['parentesco'];
      $vtel=$_POST['tel'];
      $vconn=$_POST['conn'];
      



$con = mysqli_connect('localhost', 'root','', 'mancuerna');
            

               $query= "INSERT INTO `expediente` (`idexpediente`, `medicopart`, `hospital`, `alergias`, `detallealergia`, `parentesco`, `Empleado_cui`, `telefono`) VALUES (NULL, '$vmedico', '$vhos', '$valergias', '$vda', '$vparentesco', '$vconn', '$vtel')";

mysqli_query($con,$query);
 ?>
<script language="javascript">window.location="portalRhh.php";</script>