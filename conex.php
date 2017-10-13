<?php
		$mysqli = new mysqli('188.121.43.95', 'exson','Mancuerna*01', 'mancuerna');
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else	
	
?>