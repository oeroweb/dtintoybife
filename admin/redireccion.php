<?php 
	session_start();

	// iniciar la sesion
	if(!isset($_SESSION)){
		session_start();
	}
	
	if(!isset($_SESSION['session_dtinto'])){
		header("Location:index.php");
	}	

?>