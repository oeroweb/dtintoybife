<?php 
	
	if(isset($_POST)){	
		
		if(!isset($_SESSION)){
			session_start();			
		}

		if(isset($_SESSION['error_login'])){
			session_unset($_SESSION['error_login']);
		}
		// recoger datos del formulario
		$email = trim($_POST['email']); 
		$password = $_POST['password'];
		$correo = 'cajera@dtintobife.com';		
		$correo2 = 'admin@dtintobife.com';		
		
		//credenciales
		if(isset($email) && $email == $correo || $email == $correo2){	
			if(isset($password) && $password == 'cajera@2024' || $password == 'admin@2024'){
				$_SESSION['error_login'] = "Los datos son Correctos..";
				if($email == $correo){
					$_SESSION['session_dtinto'] = 'Cajera';
				}else{
					$_SESSION['session_dtinto'] = 'Admin';
				}
				header("Refresh:2; url=../portal.php"); 				
			}else{
				$_SESSION['error_login'] = "La clave ingresada es incorrecto!";
				header("Location:../index.php");  
			}		
		}else{				
			$_SESSION['error_login'] = "El correo ingresado es incorrecto!";
			header("Location:../index.php");    
		}		
		header("Location:../index.php"); 
			
	}
?>