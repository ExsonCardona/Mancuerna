
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("conexion.php");

	$username=$_POST['usuario'];
	$pass=$_POST['pass'];

	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username'");
	if($f2=mysqli_fetch_assoc($sql)){
		if($pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo "<script>location='portal.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("Este usuario no existe, debe registrarse")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>