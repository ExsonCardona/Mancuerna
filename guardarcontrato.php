<?php 

 	  $vcontrato=$_POST['contrato'];
      $vproyecto=$_POST['proyecto'];
      $vcargo=$_POST['cargo'];
      $vdep=$_POST['dep'];
      $vunidad=$_POST['unidad'];
      $vfecha=$_POST['fc'];
      $vcn=$_POST['cn'];


$con = mysqli_connect('localhost', 'root','', 'mancuerna');
            

               $query= "INSERT INTO `contrato` (`nocontrato`, `proyecto`, `departamento`, `unidad`, `incio`, `cargo`, `Empleado_cui`) VALUES ('$vcontrato', '$vproyecto', '$vdep', '$vunidad', '$vfecha', ' $vcargo', '$vcn')";

mysqli_query($con,$query);
 ?>
<script language="javascript">window.location="portalRhh.php";</script>