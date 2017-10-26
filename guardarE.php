<?php 


$vdpi=$_POST['dpi'];
$vnom1=$_POST['nom1'];
$vnom2=$_POST['nom2'];
$vap1=$_POST['ap1'];
$vap2=$_POST['ap2'];
$vsex=$_POST['sex'];
$vemail=$_POST['email'];
$vcivil=$_POST['estadocivil'];
$vigss=$_POST['igss'];
$vnac=$_POST['nacimiento'];
$vlugar=$_POST['lugar'];
$vdirec=$_POST['direccion'];
$vlicencia=$_POST['licencia'];
$vtel1=$_POST['tel1'];
$vtel1=$_POST['tel1'];


 $con = mysqli_connect('localhost','root','','mancuerna');

$query= "INSERT INTO empleado (cui, primernom, segnom, primape, segape, sex, email, igss, estadocivil, nacimiento, lugarnac, direccion, licencia, telefono_idtelefono) 
	VALUES('$vdpi','$vnom1','$vnom2','$vap1','$vap2','vsex','$vemail','$vcivil','$vigss','$vnac','$vlugar','$vdirec','$vlicencia','1')";



mysqli_query($con,$query);

 ?>
<script language="javascript">window.location="portalRhh.php";</script>