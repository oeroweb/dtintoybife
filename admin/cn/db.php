<?php 	
define('DB_HOST', 'localhost');		
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','dtinto');

$db= mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);

mysqli_query($db, "SET NAMES 'utf8'");
	
?>
