
<?php

session_start();
	require("conex.php");

	$username=$_POST['usuario'];
	$pass=$_POST['pass'];

	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and cargo='Admin'");
	if($f2=mysqli_fetch_assoc($sql)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='portalAdmin.php'</script>";
		}
	}
	else{

	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and cargo='Bodega'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='portalBodega.php'</script>";
		}
	}
}

	$sql27=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username' and cargo='Recursos'");
	if($f2=mysqli_fetch_assoc($sql27)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='portalRhh.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("Este usuario no existe, debe registrarse")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>