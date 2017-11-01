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
     // $vlugar=$_POST['lugar'];
      $vdirec=$_POST['direccion'];
      $vlicencia=$_POST['licencia'];
      $vtel1=$_POST['tel1'];
                  
  if (isset($_POST['Registrar'])) {

      require ('conex.php');

      

      try {  
        $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $mbd->beginTransaction();
        $mbd->exec("INSERT INTO empleado (cui, primernom, segnom, primape, segape, sex, email, igss, estadocivil, nacimiento, direccion, licencia,telefono) 
                                   VALUES('$vdpi','$vnom1','$vnom2','$vap1','$vap2','vsex','$vemail', '$vigss', '$vcivil','$vnac','$vdirec','$vtelefono','$vlicencia')");

        $mbd->commit();
        echo '<script>alert("Perfil almacenado")</script> ';
          echo "<script>location.href='portalRhh.php'</script>";
       
       } catch (Exception $e) {
        $mbd->rollBack();
        echo "Fallo: " . $e->getMessage();
      }          
  } 

  elseif (isset($_POST['Cancelar'])) {
    header("location: portalRhh.php");
  }

     
?>