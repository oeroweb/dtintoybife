<?php 
	session_start();
	require_once	('../cn/db.php');

	$id = $_GET['id'];
	
	$sql = "UPDATE postredes set estado = 0 WHERE id = $id";
	$resultado = mysqli_query($db, $sql);

	if($resultado){
		$_SESSION['completado'] = "El registro se elimino de forma exitosa"; 
		header("Location: ../blog_list.php");
	} else{
		$_SESSION['fallo'] = "Error al eliminar el registro; por favor volver a intentar";
		header("Location: ../blog_list.php");
	}
?>
