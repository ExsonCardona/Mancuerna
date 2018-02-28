<?php
/* By http://php-estudios.blogspot.com */

/* PARTE 1: AL INICIO SE EXTRAEN TODAS LAS FILAS */
//Necesitamos establecer una conexión con la base de datos.
error_reporting(E_ALL ^ E_DEPRECATED);
$mysql_usuario = "root";
$mysql_password = "";
$mysql_host = "localhost";
$mysql_database = "mancuerna";

//Datos de conexión
$conexion = mysql_connect($mysql_host, $mysql_usuario, $mysql_password, true);

//Seleccionar la base datos y la conexión y capturar posibles errores con die
mysql_select_db($mysql_database, $conexion) || die('No pudo conectarse: '.mysql_error());

//Preparar la consulta para extraer todos los clientes
$consulta = "SELECT c.codigo, c.nombre, c.empelado_cui, e.primernom, h.nombre, h.sexo from conyugue c inner join empleado e on c.empelado_cui=e.cui inner join hijos h on h.empelado_cui=e.cui";

//Ejecutar la consulta
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());

//Extraer todas la filas y almacenarlas en una tabla
$table = "<table width='50%''  border='2' cellspacing='0' cellpadding='2'>\n";
  

$table .= "<tr ><td>Codigo</td><td valign='middle'>Empleado</td><td>Conyuge</td><td>Hijos</td><td>Sexo</td><td></td></tr>\n";
while($fila = mysql_fetch_assoc($resultado)){
$table .= "<tr>
    
      <td  valign='middle'>".$fila['codigo']."</td>
      <td  valign='middle'>".$fila['primernom']."</td>
      <td  valign='middle'>".$fila['nombre']."</td>
      <td  valign='middle'>".$fila['nombre']."</td>
      <td  valign='middle'>".$fila['sexo']."</td>
     <td height='40' valign='top' >
       <form method='post' action=''> <input type='hidden' name='codigo' value='"
      .$fila["codigo"]."'>
      <input class='btn btn-warning' type='submit' value='Eliminar'>
      </form></td>
   </tr>\n";
    }
$table .= "</table>\n"; 


/* PARTE 2: SI SE ENVÍA EL FORMULARIO CAPTURAR LOS DATOS PARA ELIMINAR EL CLIENTE */

if (isset($_POST["codigo"]))
{
//Se almacena en una variable el id del registro a eliminar
$id_estadistica = $_POST["codigo"];

//Preparar la consulta
$consulta = "DELETE FROM conyugue WHERE id=$id_estadistica";

//Ejecutar la consulta
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());

//redirigir nuevamente a la página para ver el resultado
header("location: portalRhh.php");
}
  
?>