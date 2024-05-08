	<?php  include "layout/header.php" ?>
	<?php  require_once "admin/helpers.php" ?>
	
	<!-- <?php // $isDuplicate = ""; ?> -->
	<section class="bg-body"></section>
	<section class="navbarSlider">
		<header class="header" id="header">				
			<nav class="navbar container-wrap items-center justify-center mg-auto" id="navbar">      
				<div class="box-navbar">
					<div class="box-logo">
						<a href="index.php#top">
							<img src="assets/icons/logo.svg" class="img-logo" alt="Logo D Tinto & Bife">
						</a>
					</div>
					<div class="box-content">
						<div class="box-content-top container-wrap space-between">
							<div class="box-empty"></div>
							<div class="box-redes container-wrap">
								<a href="https://www.instagram.com/dtintoybife?igsh=NWR2OWkwdzhpeXI0" target="_blank">
									<img src="assets/icons/instagram.svg" class="icon-redes" alt="instagram">
								</a>
								<a href="https://www.facebook.com/detintoybife?mibextid=LQQJ4d" target="_blank">
									<img src="assets/icons/facebook.svg" class="icon-redes" alt="facebook">
								</a>
								<a href="" class="hidden">
									<img src="assets/icons/twitter.svg" class="icon-redes" alt="twitter">
								</a>
							</div>
						</div>
						<div class="navbar-list container-wrap space-between">
							<div class="container-wrap">
								<a href="index.php#nosotros" class="nav-link">NOSOTROS</a>     
								<a href="index.php#lacarta" class="nav-link">LA CARTA</a>
								<a href="index.php#reservas" class="nav-link">RESERVAS</a>
							</div>
							<div class="container-wrap">
								<a href="#contacto" class="nav-link">CONTACTO</a>
							</div>
						</div>
					</div>					
				</div>				
			</nav>			
			<button id="toggleButton" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</button>
		</header>
	</section>

  <section class="reserva_section">
    <div class="center">
      <div class="box-reserva-form" id="calendario">
        <h2 class="bold title">Reservar Ahora</h2>
				<div class="alert" id="alert"></div>
				<div class="alert" id="resultado"></div>
        <form action="" method="POST" class="form-reserva" id="formulario">
          <div class="colum-left">
            <div class="calendar-container" id="calendar-container">
							<input type="hidden" id="id">
							<input type="hidden" id="selectedDate">
							<input type="hidden" id="selectedDay">
              <div class="calendar-header" id="calendar-header" >                
                <a href="#calendario" id="prev-month"><img src="assets/icons/triangle-left.svg" alt="" srcset=""> </a>
                <h2 class="title-month" id="month-year"></h2>
                <a href="#calendario" id="next-month"><img src="assets/icons/triangle-right.svg" alt="" srcset=""> </a>
              </div>
              <table class="calendar" id="calendar">
                <thead>
                  <tr>
                    <th>Do</th>
                    <th>Lu</th>
                    <th>Ma</th>
                    <th>Mi</th>
                    <th>Ju</th>
                    <th>Vi</th>
                    <th>Sa</th>
                  </tr>
                </thead>
                <tbody class="calendar-body" id="calendar-body">
                </tbody>
              </table>
            </div>
          </div>
          <div class="colum-right container-wrap">
            <div class="box-field">
              <select name="local" id="local" placeholder="Local" autofocus="autofocus" required>
                <option value="2">Miraflores - Av. Republica de Panamá 6472</option>
                <option value="1">San isidro - Av. Conquiistadores 605</option>
              </select>
            </div>
            <div class="box-field">
              <input type="text" placeholder="Nombre" id="nombre" required>
            </div>
            <div class="box-field">
              <input type="time" name="hora" id="hora" placeholder="Hora" required>              
            </div>
            <div class="box-field">
              <input type="email" placeholder="Correo electrónico" id="email" required>
            </div>
            <div class="box-field">
              <select name="cantidad" placeholder="Local" id="cantidad" required>
                <option>Cantidad de personas</option>
                <option value="1">1 personas</option>
                <option value="2">2 personas</option>
                <option value="3">3 personas</option>
                <option value="4">4 personas</option>
                <option value="5">5 personas</option>
                <option value="6">6 personas</option>
                <option value="7">7 personas</option>
                <option value="8">8 personas</option>
                <option value="9">9 personas</option>
              </select>
            </div>
            <div class="box-field">
              <input type="tel" placeholder="Número de contacto" id="telefono" required>
            </div>
						<p> Para reservas de 10 a más personas, por favor comunícate con nosotros via 
						<a href="https://api.whatsapp.com/send?phone=51975671756&text=Necesito%20ayuda%20para%20realizar%20una%20reserva%20para%20el%20día%20hoy%20Gracias." target="_blank">Whatsapp.</a></p>
            <div class="box-desc">
              <label for="">Comentario adicional</label>
              <textarea placeholder="Ingresar comentario" rows="6" id="comentario"></textarea>
            </div>
            <div class="w100 container-wrap justify-end">
              <button type="submit" class="btn">Reservar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

	<div class="btnWhatsapp">
		<div class="popup-what" id="popup-what">
			<div class="box1 container-wrap">
				<div class="box-ico ">
					<img src="assets/icons/whatsapp-white.svg" alt="ingresar a whatsapp">
				</div>
				<div class="box-text w80">
					<span class="bold">¿Necesitas realizar un reserva?</span>
				</div>
			</div>
			<div class="box2">
				<a href="https://api.whatsapp.com/send?phone=51975671756&text=Necesito%20ayuda%20para%20realizar%20una%20reserva%20para%20el%20día%20hoy%20Gracias." target="_blank"> 
					<div class="container-wrap">
						<!-- <i class="fa fa-whatsapp w10 green"></i>  -->
						<span class="w80"> D'Tinto & Bife <br> <span class="gris">Escríbenos</span> </span>
						<img src="assets/icons/whatsapp-white.svg" alt="ingresar a whatsapp">
					</div>				
				</a>
			</div>
		</div>
		<span class="ico-whatsapp" id="ico-whatsapp">
			<img src="assets/icons/whatsapp-white.svg" alt="ingresar a whatsapp">	
		</span>
	</div>
  <?php  include "layout/footer.php" ?>
	

  <div class="modal hidden" id="modalReserva">
    <div class="container-modal">
      <div class="btn-closed bold" onclick="cerrarModal();"><a href="">X</a></div>
      <div class="box-image">
        <img src="assets/icons/book.svg" alt="Icono de Book">
      </div>
				<?php 
					$datos = selectFinishReserve($db, 'tabla_reservas');
					if(!empty($datos) && mysqli_num_rows($datos) >= 1):
						while($dato = mysqli_fetch_assoc($datos)):
				?>	
				<div class="box-content">
					<h3>¡Felicitaciones <span class="bold"><?=$dato['nombre']?>!</span> </h3>					
					<p>Tu reserva ha sido confirmada con <span class="bold">éxito. </span> ¡Estamos emocionados de recibirte pronto!</p>
				</div>
				<hr>
				<div class="box-icons">
					<div class="items-icon">
						<img src="assets/icons/calendar.svg" alt="Icono de Calendario">
						<p><?=$dato['fecha']?></p>
					</div>
					<div class="items-icon">
						<img src="assets/icons/user.svg" alt="Icono de Persona">
						<p><?=$dato['cantidad']?> personas</p>
					</div>
					<div class="items-icon">
						<img src="assets/icons/clock.svg" alt="Icono de Reloj">
						<p><?=$dato['hora'] >= "13:00" ? $dato['hora']." p.m.": $dato['hora']." a.m."?></p>
					</div>
					<div class="items-icon">
						<img src="assets/icons/map.svg" alt="Icono de Ubicación">
						<p>Sede, <?=$dato['sede'] == 1 ? "San isidro" : "Miraflores" ?></p>
					</div>
				</div>
				<div class="box-footer">
					<a class="btn btn-verde" onclick="cerrarModal();">Entendido</a>
					<a href="models/updates/eventos-public.php?id=<?=$dato['id']?>" class="btn btn-verde2" title="Editar">							
					Editar</a>										
				</div>
			<?php endwhile; endif; ?>
			<div class="w100 al-ct">
				<p>* Tiempo máximo de espera es de 15 minutos.</p>
			</div>
    </div>
  </div>

  <div class="modal hidden" id="modalReservaDuplicate">
    <div class="container-modal">
      <div class="btn-closed bold" onclick="cerrarModal2();"><a href="">X</a></div>
      <div class="box-image">
        <img src="assets/icons/book.svg" alt="Icono de Book">
      </div>
				<?php 
					$datos = selectFinishReserve($db, 'tabla_reservas');
					if(!empty($datos) && mysqli_num_rows($datos) >= 1):
						while($dato = mysqli_fetch_assoc($datos)):
				?>	
				<div class="box-content">
					<h3>¡Hola <span class="bold"><?=$dato['nombre']?>!</span> </h3>					
					<p>Hemos notado que ya tienes una reserva para el dia de hoy. ¿Deseas <span class="bold">remplazar tu reserva </span> o  <span class="bold">agregar una nueva?</span></p>					
				</div>
				<hr>
				<div class="box-icons">
					<div class="items-icon">
						<img src="assets/icons/calendar.svg" alt="Icono de Calendario">
						<p><?=$dato['fecha']?></p>
					</div>
					<div class="items-icon">
						<img src="assets/icons/user.svg" alt="Icono de Persona">
						<p><?=$dato['cantidad']?> personas</p>
					</div>
					<div class="items-icon">
						<img src="assets/icons/clock.svg" alt="Icono de Reloj">
						<p><?=$dato['hora'] >= "13:00" ? $dato['hora']." p.m.": $dato['hora']." a.m."?></p>
					</div>
					<div class="items-icon">
						<img src="assets/icons/map.svg" alt="Icono de Ubicación">
						<p>Sede, <?=$dato['sede'] == 1 ? "San isidro" : "Miraflores" ?></p>
					</div>
				</div>
				<div class="box-footer">
					<!-- <a class="btn btn-verde" onclick="cerrarModal2();">Entendido</a> -->
					<a href="models/updates/eventos-public.php?id=<?=$dato['id']?>" class="btn btn-verde" title="Editar">	Crear nueva reserva</a>						
					<a href="models/updates/eventos-public.php?id=<?=$dato['id']?>" class="btn btn-verde2" title="Editar">							
					Remplazar reserva</a>										
				</div>
			<?php endwhile; endif; ?>			
    </div>
  </div>

  <script src="assets/js/calendar-mr.js"></script>
	<script>
		function limpiarModal(){
			$("#formulario")[0].reset();
		}

		function cerrarModal(){
			$('body').removeClass("overHidden");
			$("#modalReserva").addClass("hidden");
			$("#modalReserva").removeClass("mostrar");
			limpiarModal();
		}
		function mostrarModal(){
			$("#modalReserva").addClass("mostrar");
			$("#modalReserva").removeClass("hidden");
			$('body').addClass("overHidden");
		}

		function cerrarModal2(){
			$('body').removeClass("overHidden");
			$("#modalReservaDuplicate").addClass("hidden");
			$("#modalReservaDuplicate").removeClass("mostrar");

		}
		function mostrarModal2(){
			$("#modalReservaDuplicate").addClass("mostrar");
			$("#modalReservaDuplicate").removeClass("hidden");
			$('body').addClass("overHidden");
		}

		function subirScreen(){
			$('body, html').animate({
				scrollTop: '0px'
			}, 100);
		}

		$(document).ready(function() {
			$('#formulario').submit(function(e) {
				e.preventDefault();

				const id = $('#id').val();
				const date = $('#selectedDate').val();
				const day = $('#selectedDay').val();
				const local = $('#local').val();
				const nombre = $('#nombre').val();
				const hora = $('#hora').val();
				const email = $('#email').val();
				const cantidad = $('#cantidad').val();
				const telefono = $('#telefono').val();
				const comentario = $('#comentario').val();

				if([date, day].includes('')){
					$('#alert').html('<p class="alert-danger">Debe seleccionar una fecha</p>');
					$("#alert").fadeOut(4000, function(){
						$(this).html("");
						$(this).fadeIn(500);
					});		
					return;
				}
				if([local, nombre, hora, email, cantidad, telefono].includes('')){
					$('#alert').html('<p class="alert-danger">Todos los campos son necesarios</p>');
					$("#alert").fadeOut(4000, function(){
						$(this).html("");
						$(this).fadeIn(500);
					});		
					return;
				}
				const datos = {
					id: id,
					date: date,
					day: day,
					local: local,
					nombre: nombre,
					hora: hora,
					email: email,
					cantidad: cantidad,
					telefono: telefono,
					comentario: comentario
				};

				$.post('admin/models/reserve_add.php', datos, function(response){
					console.log(response);
					// if("reserva_duplicada"){
					// 	console.log('if');
					// 	mostrarModal2();
					// } else {
						// console.log('else');
						// }					
					mostrarModal();
												
					subirScreen();
				})
			});

			$("#local").change(function(){
				const selectedValue = $(this).val();
				if(selectedValue =='1'){
					location.href ="reservar.php";
				}		
			})

		});

	</script>
</body>
</html>