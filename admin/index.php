<?php session_start(); ?>
<?php  include "../layout/header_admin.php" ?>	
	<div class="login minheight100 container-wrap">			
			<div class="w100 box-login container-wrap items-center justify-center">
				<img src="../assets/icons/logo.svg" class="img-logo" alt="Logo D'Tinto & Bife">			
				<div class="box-formulario-login w30">		
					<hr>			
					<?php if(!isset($_SESSION['session_dtinto'])) :?>	
					<form action="models/login.php" method="post" class="form" id="form" autocomplete="off">		
						<?php if(isset($_SESSION['error_login'])) :?>
							<div class="alerta-error"> 
								<?=$_SESSION['error_login'];?>
							</div> 
						<?php endif; ?>

						<div class="w100 mg-bt20">
							<div class="inputEmail">
								<input type="text" name="email" class="w100" id="email" placeholder="correo@dtintobife.com" onkeydown="validaemail()" required>
								<span id="validaemail"></span>
							</div>	
							<div class="inputBox">
								<input type="password" name="password" id="password" class="w100" placeholder="contraseña" required onkeydown="showHide();">								
							</div>
						</div>
						
						<div class="w100 box-buttons container-wrap justify-center">
							<button type="submit" class="btn btn-verde">Ingresar</button>	
						</div>			
					</form>
					<?php else: ?>
						<?php 					
							echo "<h2 class='container-wrap items-center'>Bienvenido " .$_SESSION['session_dtinto'] ."</h2>";						
							echo "<img src='../assets/img/loading.gif' class='w30 mg-auto' >";				
							header("Refresh:3; url=portal.php");
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
				validaemail.innerHTML = "Correo valido!";
				validaemail.style.color = "#45590F";
			}else{
				form.classList.remove("valido");
				form.classList.add("invalido");
				validaemail.innerHTML = "Correo invalido!";
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
			}else{
				password.setAttribute('type','password');				
			}
		}
					
	</script>