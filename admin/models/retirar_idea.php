<?php 
	session_start();
	require_once	('../cn/db.php');	

	$id = $_GET['id'];
	
	$sql = "UPDATE idea set estado = 0 WHERE id = $id";
	$resultado = mysqli_query($db, $sql);

	if($resultado){
		$_SESSION['completado'] = "Se quitó la publicación con exitosa";		
		header("Location: ../administrator.php");
	} else{
		$_SESSION['fallo'] = "Error al retirar la publicación; por favor volver a intentar";		
		header("Location: ../administrator.php");
	}
?>