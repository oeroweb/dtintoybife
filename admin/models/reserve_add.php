<?php 

  if(isset($_POST)){
		session_start();
		require_once	('../cn/db.php');
				
		$date = $_POST['date'];
		$day = $_POST['day'];
		$local = $_POST['local'];
		$nombre = $_POST['nombre'];
		$hora = $_POST['hora'];
		$email = $_POST['email'];
		$cantidad = $_POST['cantidad'];
		$telefono = $_POST['telefono'];
		$comentario = $_POST['comentario'];

		$sql2 = "SELECT email, fecha FROM tabla_reservas where email='$email' and fecha='$date'";
		$resultado2 = mysqli_query($db,$sql2);

		if($resultado2){
			echo 'reserva_duplicada';
		} else {
			$sql="INSERT INTO tabla_reservas (id, sede, nombre, email, telefono, dia, fecha, hora, cantidad, comentario, estado) VALUES (null, $local, '$nombre', '$email', '$telefono', '$day', '$date', '$hora', $cantidad, '$comentario', 1);";
			
			$resultado = mysqli_query($db,$sql);
			
			if(!mysqli_affected_rows($db)>0){
				echo 'Error';
				die('Reserva fallida'. mysqli_query($db));
			} 
			echo 'reserva_añadida';
		}	
	}
	
?>
			