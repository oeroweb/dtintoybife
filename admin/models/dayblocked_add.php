<?php 

  if(isset($_POST)){
		session_start();
		require_once	('../cn/db.php');
				
		$sede = $_POST['sede'];
		$fecha = $_POST['fecha'];
		$horaInicio = $_POST['horainicio'];
		$horaFin = $_POST['horafin'];

    $cantidad = $horaFin - $horaInicio;
    
		$sql="INSERT INTO tabla_horasBloqueadas (id, sede, fecha, horaInicio, horaFin, cantidad, fechaRegistro) VALUES (null, $sede, '$fecha', '$horaInicio', '$horaFin', $cantidad, CURDATE());";
   
		$resultado = mysqli_query($db,$sql);
		
		if($resultado){
			$_SESSION['completado'] = "Se añadió la fecha de forma exitosa";	
			header("Location: ../portal.php");
		} else{
			$_SESSION['fallo'] = "Error al añadir la fecha; por favor volver a intentar";		
			header("Location: ../portal.php");
		}			
	}
	
?>