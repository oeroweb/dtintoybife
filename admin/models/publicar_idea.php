<?php 
	session_start();
	require_once	('../cn/db.php');	

	$id = $_GET['id'];
	
	$sql = "UPDATE idea set estado = 1 WHERE id = $id";
	$resultado = mysqli_query($db, $sql);

	if($resultado){
		$_SESSION['completado'] = "Se activo la publicación con exitosa";	
		header("Location: ../administrator.php");
	} else{
		$_SESSION['fallo'] = "Error al activar; por favor volver a intentar";		
		header("Location: ../administrator.php");
	}
?>
