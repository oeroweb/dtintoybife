<?php 

  if(isset($_POST)){
		session_start();
		require_once	('../cn/db.php');
		
		$sede = $_POST['sede'];				
		$day = $_POST['semana'];		
		
		$sql= "UPDATE tabla_descansoSemanal SET dia='$day' WHERE sede = $sede;";

		$resultado = mysqli_query($db,$sql);
			
		if($resultado){
			$_SESSION['completado'] = "Se cambio el dia de forma exitosa";	
			header("Location: ../portal.php");
		} else{
			$_SESSION['fallo'] = "Error al cambiar de dia; por favor volver a intentar";		
			header("Location: ../portal.php");
		}						
	}
?>
			