<?php session_start(); ?>
<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Oscar Rojas">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../assets/img/logo.ico" type="image/ico">
	   
	<title>OEROWEB - Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/oerostyles.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/css/all.min.css">	

	<!-- SCRIPT -->
	<script src="../assets/js/jquery.js"></script>
	
</head>

<body class="login">	
	<div class="container-wrap">	
		<div class="w100 box-imagen container-wrap justify-content-center ">
			<div class="w50 container-wrap align-items-center">
				<img src="../assets/img/logo.png" alt="Logo Logremos 21">			
			</div>
		</div>
		<div class="w100 box-login container-wrap align-items-center justify-content-center">
			<div class="Box-form-login w30">		
				<h2 class="titulo al-ct">ADMNISTRACIÓN</h2>
				<hr>			
				<?php if(!isset($_SESSION['session_dtinto'])) :?>	
				<form action="models/login.php" method="post" id="form" autocomplete="off">		
					<?php if(isset($_SESSION['error_login'])) :?>
						<div class="alerta-error"> 
							<?=$_SESSION['error_login'];?>
						</div> 
					<?php endif; ?>

					<div class="w100 mg-bt20">
						<div class="inputEmail">
							<input type="text" name="email" class="input w100" id="email" placeholder="correo@correo.com" onkeydown="validaemail()" required>
							<span id="validaemail"></span>
						</div>	
						<div class="inputBox">
							<input type="password" name="password" id="password" class="input w100" placeholder="contraseña" required>
							<div id="toggle" onclick="showHide();">
								<span id="span1"><i class="far fa-eye"></i></span>
								<span class="hidden" id="span2"><i class="far fa-eye-slash"></i></span>
							</div>
						</div>
					</div>
					<hr>
					<div class="w100 container-wrap justify-content-center">
						<button type="submit" class="btn">INGRESAR</button>	
						<a href="../index.php" class="btn"><i class="far fa-arrow-alt-circle-left"></i> Regresar </a>				
					</div>			
				</form>
				<?php else: ?>
					<?php 					
						echo "<h2>Bienvenido " .$_SESSION['session_dtinto'] ." al Area Administrativa</h2>";						
						echo "<img src='../assets/img/loading-13.gif' class='w30 mg-auto pd5' >";				
						header("Refresh:3; url=administrator.php");
					?>				
				<?php endif; ?>
			</div>
		</div>	
	</div>	
	<script type="text/javascript"> 				
				
		function validaemail(){
			var form = document.getElementById("form");
			// var email = document.getElementById("email").value;
			var email = document.getElementById("email").value;
			var validaemail = document.getElementById("validaemail");
			var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

			if(email.match(pattern)){
				form.classList.add("valido");
				form.classList.remove("invalido");
				validaemail.innerHTML = "es un correo valido!";
				validaemail.style.color = "#45590F";
			}else{
				form.classList.remove("valido");
				form.classList.add("invalido");
				validaemail.innerHTML = "no es un correo valido!";
				validaemail.style.color = "#ff0000";
			}
			if(email == ""){
				form.classList.remove("valido");
				form.classList.remove("invalido");
				validaemail.innerHTML = "";
				validaemail.style.color = "#ff0000";
			}
		}

		const password = document.getElementById('password');
		const span1 = document.querySelector('#span1');
		const span2 = document.querySelector('#span2');	
								
		function showHide(){
			if(password.type == 'password'){
				password.setAttribute('type','text');			
				span1.style.display = "none";
				span2.style.display = "block";
			}else{
				password.setAttribute('type','password');
				span1.style.display = "block";
				span2.style.display = "none";
			}
		}
					
	</script>