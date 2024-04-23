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
	
		$sql="INSERT INTO tabla_reservas (id, sede, nombre, email, telefono, dia, fecha, hora, cantidad, comentario, estado) VALUES (null, '$local', '$nombre', '$email', '$telefono', '$day', '$date', '$hora', '$cantidad', $comentario', 1);";
				
		$resultado = mysqli_query($db,$sql);
					
		if($resultado){
			$_SESSION['completado'] = "El registro se creo de forma exitosa";	
			header("Location: ../../../../reservar.php");
		} else{
			$_SESSION['fallo'] = "Error al eliminar el registro; por favor volver a intentar";		
			header("Location: ../../../../reservar.php");
		}
	}
	
?>
			