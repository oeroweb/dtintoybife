<?php 	
	define('DB_HOST', 'localhost');		
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','dblogremos');
	define('DB_PUERTO',3308); 

	$db= mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
	mysqli_query($db, "SET NAMES 'utf8'");
	
?>
