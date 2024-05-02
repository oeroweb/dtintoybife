<?php 
	include('cn/db.php');

	function borrarErrores(){
		$borrado = false;		

		if(isset($_SESSION['completado'])){
			$_SESSION['completado'] = null;
			$borrado = true;
		}
		if(isset($_SESSION['completado2'])){
			$_SESSION['completado2'] = null;
			$borrado = true;
		}

		if(isset($_SESSION['fallo'])){
			$_SESSION['fallo'] = null;
			$borrado = true;
		}	
		if(isset($_SESSION['fallo2'])){
			$_SESSION['fallo2'] = null;
			$borrado = true;
		}	

		return $borrado;
	}
	
	function obtenerdatos($conexion, $tabla){
		$sql = "SELECT * FROM $tabla";

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
		$sql = "SELECT * FROM $tabla ORDER by fecha DESC";

		$datos = mysqli_query($conexion, $sql);
		if($datos && mysqli_num_rows($datos) >=1){
			$resultado = $datos;
		}else{
			$resultado = '';
		}
		return $resultado;
	}
	
	// obtener todos
	function selectFinishReserve($conexion, $tabla){
		$sql = "SELECT * FROM $tabla ORDER by id DESC limit 1";

		$datos = mysqli_query($conexion, $sql);
		if($datos && mysqli_num_rows($datos) >=1){
			$resultado = $datos;
		}else{
			$resultado = '';
		}
		return $resultado;
	}
	
?>