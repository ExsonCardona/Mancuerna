<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("conexion.php");

	$username=$_POST['usuario'];
	$pass=$_POST['contra'];


	$sql=mysqli_query($mysql,"SELECT * FROM login WHERE user='$username'");
	if($f2=mysqli_fetch_assoc($sql)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='registrar.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			
		}
	}else{
		
		echo '<script>alert("Este usuario no existe, debe registrarse")</script> ';
		

	}

?>