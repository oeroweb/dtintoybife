<?php 	
	define('DB_HOST', '127.0.0.1');		
	define('DB_USER','oerowe29_usoeAdmin_201');
	define('DB_PASS','Adm-oe$201@2020$');
	define('DB_NAME','oerowe29_oedb2020'); 
	define('DB_PUERTO',3306); 

	$db = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME,DB_PUERTO);
	mysqli_query($db, "SET NAMES 'utf8'");

	if (!$db) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}

  echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
  echo "Información del host: " . mysqli_get_host_info($db) . PHP_EOL;
	mysqli_close($db);
	
?>
