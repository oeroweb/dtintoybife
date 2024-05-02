<?php 
	session_start();
	require_once	('../cn/db.php');	

	$id = $_GET['id'];
	
	$sql = "UPDATE tabla_reservas set estado = 2 WHERE id = $id";
	$resultado = mysqli_query($db, $sql);

	if($resultado){
		$_SESSION['completado'] = "Se confirmo la reserva de forma exitosa";	
		header("Location: ../reserve.php");
	} else{
		$_SESSION['fallo'] = "Error al confirmar la reserva; por favor volver a intentar";		
		header("Location: ../reserve.php");
	}
?>
