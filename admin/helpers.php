<?php 
	include('cn/db.php');

	function mostrarError($errores, $campo){
		$alerta = '';
		if(isset($errores[$campo]) && !empty($campo)){
			$alerta = "<div class='alerta alerta-error'>" .$errores[$campo]."</div>";			
		}
		return $alerta;
	}

	function borrarErrores(){
		$borrado = false;		

		if(isset($_SESSION['completado'])){
			$_SESSION['completado'] = null;
			$borrado = true;
		}

		if(isset($_SESSION['fallo'])){
			$_SESSION['fallo'] = null;
			$borrado = true;
		}	

		return $borrado;
	}
	
	function obtenerdatos($conexion, $tabla, $id){
		$sql = "SELECT * FROM $tabla where id = $id";

		$datos = mysqli_query($conexion, $sql);
		if($datos && mysqli_num_rows($datos) >=1){
			$resultado = $datos;
		}else{
			$resultado = '';
		}
		return $resultado;
	}
	
	// OBTENER DATOS ACTIVO por id
	function obtenerdatosactivo($conexion, $tabla, $id){
		$sql = "SELECT * FROM $tabla where id = $id and estado_id = 1";

		$datos = mysqli_query($conexion, $sql);
		if($datos && mysqli_num_rows($datos) >=1){
			$resultado = $datos;
		}else{
			$resultado = '';
		}
		return $resultado;
	}
	
	// OBTENER DATOS ESTADO 1
	function selectactivedatos($conexion, $tabla){
		$sql = "SELECT * FROM $tabla where estado_id = 1";

		$datos = mysqli_query($conexion, $sql);
		if($datos && mysqli_num_rows($datos) >=1){
			$resultado = $datos;
		}else{
			$resultado = '';
		}
		return $resultado;
	}

	// obtener todos
	function selectalldatos($conexion, $tabla){
		$sql = "SELECT * FROM $tabla";

		$datos = mysqli_query($conexion, $sql);
		if($datos && mysqli_num_rows($datos) >=1){
			$resultado = $datos;
		}else{
			$resultado = '';
		}
		return $resultado;
	}


	function todos_Webmail($conexion){		
		$sql = "SELECT * FROM oedb_webmail WHERE estado = 1 ORDER by id LIMIT 6 ";

		$webmail = mysqli_query($conexion, $sql);
		if($webmail && mysqli_num_rows($webmail) >=1){
			$resultado = $webmail;
		}
		return $resultado;
	}
	
?>