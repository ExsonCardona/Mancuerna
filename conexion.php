<?php 

define('DB_SERVER', 'localhost');
define('DB_NAME', 'mancuerna');
define('DB_USER', 'root');
define('DB_PASS', '');

try {
  $mbd = new PDO('mysql:host=localhost;dbname=mancuerna', 'root', '',
      array(PDO::ATTR_PERSISTENT => true));

  } catch (Exception $e) {
  die("No se pudo conectar: " . $e->getMessage());
}

$conexion = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die ("Problemas al conectar");
mysql_select_db(DB_NAME, $conexion);
if (!$conexion){
echo 'error de conexion ';
}
else{
//echo 'coneccion';
}

$mysqli = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}


?>