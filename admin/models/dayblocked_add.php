<?php 

  if(isset($_POST)){
		session_start();
		require_once	('../cn/db.php');
				
		$fecha = $_POST['fecha'];
		$horaInicio = $_POST['horainicio'];
		$horaFin = $_POST['horafin'];

    $cantidad = $horaFin - $horaInicio;
    
		$sql="INSERT INTO tabla_horasBloqueadas (id, fecha, horaInicio, horaFin, cantidad, fechaRegistro) VALUES (null, '$fecha', '$horaInicio', '$horaFin', $cantidad, CURDATE());";
    // var_dump($sql);
		// die();
		$resultado = mysqli_query($db,$sql);
		
		if($resultado){
			$_SESSION['completado2'] = "Se añadió la fecha de forma exitosa";	
			header("Location: ../portal.php");
		} else{
			$_SESSION['fallo2'] = "Error al añadir la fecha; por favor volver a intentar";		
			header("Location: ../portal.php");
		}			
	}
	
?>