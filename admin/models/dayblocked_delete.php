<?php 
	session_start();
	require_once	('../cn/db.php');

	$id = $_GET['id'];
	
	$sql = "DELETE FROM tabla_horasBloqueadas WHERE id = $id";
	$resultado = mysqli_query($db, $sql);

	if($resultado){
		$_SESSION['completado2'] = "El registro se elimino de forma exitosa"; 
		header("Location: ../portal.php");
	} else{
		$_SESSION['fallo2'] = "Error al eliminar el registro; por favor volver a intentar";
		header("Location: ../portal.php");
	}
?>
