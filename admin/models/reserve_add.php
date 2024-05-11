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

		$sql="INSERT INTO tabla_reservas (id, sede, nombre, email, telefono, dia, fecha, hora, cantidad, comentario, estado) VALUES (null, $local, '$nombre', '$email', '$telefono', '$day', '$date', '$hora', $cantidad, '$comentario', 1);";
		
		$resultado = mysqli_query($db,$sql);
		
		if(!mysqli_affected_rows($db)>0){
			echo 'Error';
			die('Reserva fallida'. mysqli_query($db));
		} 
		echo 'reserva_añadida';
		// $sql2 = "SELECT email, fecha FROM tabla_reservas where email='$email' and fecha='$date'";
		// $resultado2 = mysqli_query($db,$sql2);

		// if($resultado2){
		// 	echo 'reserva_duplicada';
		// } else {
		// }

		$body = <<<EOD
		<html>
			<head>
				<title>Tenemos nueva reserva</title>
			</head>
			<body>
				<h1>$nombre, envió una reserva</h1>
				<ul style="margin:10px 0;line-height: 1.8; list-style: none;">
					<li>Nombre : '. $nombre .'</li>
					<li>Teléfono : ' . $telefono .', - Correo: '. $email.' </li>
					<li>Fecha : ' . $date .', - Hora : '. $hora.'</li>					
					<li>Cantidad: '. $cantidad.' de personas.</li>			
					<li>Comentario: '. $comentario.' .</li>			
					<li>Haz click <a href="https://dtintoybife.com/admin/" style="color:#1c75bc; font-weight: 700;">aquí</a>  para ingresar</li>					
				</ul>	
			</body>
		</html>
		EOD;

		function enviarCorreo($para, $asunto, $body) {
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <jerek@dtintoybife.com>' . "\r\n";

			if(mail($para, $asunto, $body, $headers)) {
				echo "Correo enviado con éxito a $para";
			} else {
				echo "Error al enviar el correo";
			}
		}

		if($local == 1){
			enviarCorreo('jerek@dtintoybife.com', 'Tenemos nueva reserva', $body);
		} else {
			enviarCorreo('miraflores@dtintoybife.com', 'Tenemos nueva reserva', $body);
		}
	}
	
?>
			