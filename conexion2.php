<?php
  	$db_host = '188.121.43.95';
	$db_user = 'exson';
	$db_password = 'Mancuerna*01';
	$db_name = 'mancuerna';
	$db = @mysqli_connect ($db_host, $db_user, $db_password, $db_name) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());

?>