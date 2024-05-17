<footer class="footer_area">
	<div class="container-footer">						
		<div class="item-footer">				
			<div class=" aniview" data-av-animation="fadeInUp">
				<h2>Local San Isidro</h2>						
				<ul class="list-footer">
					<li><a><img src="assets/icons/map-white.svg" alt="icono de ubicación">  Av. Conquiistadores 605, San isidro</a></li>	
					<li><a href="mailto:detintoybife@gmail.com"><img src="assets/icons/email.svg" alt="escribir un correo"> detintoybife@gmail.com</a> </li>					
					<li><a href="https://api.whatsapp.com/send?phone=51948250458"><img src="assets/icons/whatsapp-white.svg" alt="ingresar a whatsapp"> 948 250 458</a> </li>												
				</ul>									
			</div>
		</div>				
		<div class="item-footer">		
			<div class=" aniview" data-av-animation="fadeInUp">
				<h2>Local Miraflores</h2>	
				<div class="container-wrap">										
					<ul class="list-footer">
						<li><a ><img src="assets/icons/map-white.svg" alt="icono de ubicación"> Av. Republica de Panamá 6472, Miraflores</a></li>	
						<li><a href="mailto:miraflores@dtintoybife.com"><img src="assets/icons/email.svg" alt="escribir un correo"> miraflores@dtintoybife.com</a> </li>					
						<li><a href="https://api.whatsapp.com/send?phone=51975671756"><img src="assets/icons/whatsapp-white.svg" alt="ingresar a whatsapp"> 975 671 756</a></li>
					</ul>						
				</div>
			</div>
		</div>	
		<div class="item-footer">		
			<div class=" aniview" data-av-animation="fadeInUp">
				<h2>Carta y Reserva</h2>	
				<div class="container-wrap">										
					<ul class="list-footer">
						<li><a href="assets/doc/Carta_2023.pdf"><img src="assets/icons/book-white.svg" alt="escribir un correo"> Carta principal</a></li>	
						<li><a href="assets/doc/CARTA_BEBIDAS-MIRAFLORES.pdf"><img src="assets/icons/bookmark.svg" alt="escribir un correo"> Carta de vinos</a> </li>					
						<li><a href="reservar.php"><img src="assets/icons/user-white.svg" alt="escribir un correo"> Reservas</a></li>												
					</ul>						
				</div>
			</div>
		</div>	
		<div class="item-footer">		
			<div class=" aniview" data-av-animation="fadeInUp">
				<h2>Subscribete</h2>
				<form action="" class="footer-form">
					<input type="text" placeholder="Escribe tu correo electrónico">
					<a type="submit" href="" class="btn btn-verde">Enviar</a>
				</form>
				<div class="box-redes">
					<a href="https://www.facebook.com/detintoybife?mibextid=LQQJ4d" target="_blank" class="item-redes"> 
						<img src="assets/icons/facebook-black.svg" alt="ingresar a facebook">
					</a>
					<!-- <a href="" class="item-redes hidden"> 
						<img src="assets/icons/twiter-black.svg" alt="ingresar a twitter">
					</a> -->
					<a href="https://api.whatsapp.com/send?phone=51948250458&text=Necesito%20ayuda%20para%20realizar%20una%20reserva%20para%20el%20día%20hoy%20Gracias." target="_blank" class="item-redes"> 
						<img src="assets/icons/whatsapp.svg" alt="ingresar a whatsapp">
					</a>
					<a href="https://www.instagram.com/dtintoybife?igsh=NWR2OWkwdzhpeXI0" target="_blank" class="item-redes"> 
						<img src="assets/icons/instragram-black.svg" alt="ingresar a instagram">
					</a>
				</div>
				
			</div>
		</div>	
	</div>		
</footer>	 

<!-- <span class="ir-arriba" title="Subir"><i class="fa fa-chevron-up"></i></span>	 -->
<!--================End Footer Area =================-->
<script type="text/javascript">
	const currentLocation = location.href;
	const menuItem = document.querySelectorAll(".nav-link");
	const menuLenght = menuItem.length
	for (let i = 0; i < menuLenght; i++) {
		if (menuItem[i].href === currentLocation) {
				// menuItem[i].className = "active"
				menuItem[i].classList.add("active");
		}
	}	
</script>

<script src="assets/js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/dtintoquery.js"></script>
<script src="assets/js/jquery.aniview.js"></script>
