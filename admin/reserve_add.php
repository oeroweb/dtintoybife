<?php 
	require_once ('redireccion.php'); 

	if(!isset($_POST)){
		header("Location:index.php");
	}
?>
<!doctype html>
<html lang="es">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Oscar Rojas">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	 
	<title>Logremos 21  | Administración</title>
	<link rel="icon" href="../assets/img/logo.ico" type="image/ico">	
	<!-- main css -->	
	<link rel="shortcut icon" href="../assets/img/logo.ico">
  <link rel="stylesheet" type="text/css" href="../assets/css/logremosStyles.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/css/all.min.css">	  
	<!-- SCRIPT -->	
	<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
	<script src="../assets/js/jquery.js"></script> 
</head>
<body>	
		<?php include 'aside.php' ?>
		<div class="center pd10">
			<div class="box2 w80 mg-auto pd10">		
			<h2>Añadir Nuevo Post</h2>			
			<div class="container-wrap pd20">				
				<form action='models/post_add.php' class="w100" method='POST'>					
					<div class="box-input">
						<label for='' class="w20 al-rg">Iframe </label>
						<textarea class="w80" name="parrafo"  rows="10" ></textarea>						
					</div>					
					<hr>
					<input type="submit" value="Añadir" class="btn btn-azul">
					<a class="btn btn-azul" href="javascript:history.back()">Cancelar</a>
				</form>				
			</div>					
			<!-- </div> -->
		</div>
		<!-- center -->	
</div>
<!-- fin principal -->
<script>
	// CKEDITOR.replace( 'parrafo' ); 
</script>
