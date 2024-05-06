<?php 
	require_once ('redireccion.php'); 
	require_once ('helpers.php'); 
?>
<?php  include '../layout/header_admin.php' ?>	

<div class="portal-main">
  <div class="box-header container-wrap space-between items-center">
		<div class="container-wrap items-center">
			<img src="../assets/icons/logo.svg" class="img-logo" alt="Logo D'Tinto & Bife">	
			<h2 class="titulo">D'Tinto & Bife - Gestión de Datos  <br> <span class="name-user"><?= $_SESSION['session_dtinto']  ?></span></h2>
		</div>	
    <a href="cerrar.php" class="btn" title="Cerrar Sessión">Salir</a>
  </div>
	<div class="main_back container-wrap">
		<?php include 'aside.php' ?>

		<section class="w90 container-portal" id="portal">				
			<div class="center">
				<div class="box-title">
					<h3 class="title">Listado de Reservas</h3>
					<hr>
				</div>			
				<?php if(isset($_SESSION['completado'])): ?>
					<div class="alert-success" id="alert">
						<?=$_SESSION['completado']?>					
						<img src="../assets/icons/times.svg" alt=""> 
					</div>
				<?php elseif(isset($_SESSION['fallo'])): ?>
					<div class="alert-danger" id="alert">
						<?=$_SESSION['fallo']?>
						<img src="../assets/icons/times.svg" alt=""> 				
					</div>
				<?php endif; ?>			
				
				<div class="box-content-admin">
					<div class="tabs-content-admin">
						<input type="radio" name="grupos" id="sanisidro" checked>
            <input type="radio" name="grupos" id="miraflores">
						<div class="tabs-nav">
							<label for="sanisidro" class="sanisidro">Sede San Isidro</label>
							<label for="miraflores" class="miraflores">Sede Miraflores</label>
						</div>
						<section>
							<div class="content content-1">															
								<div class="box-container">				
									<?php 
										$datos = selectalldatos($db, 'tabla_reservas', 1,'fecha');
										if(!empty($datos) && mysqli_num_rows($datos) >= 1):
											while($dato = mysqli_fetch_assoc($datos)):		
									?>
										<div class="box-items container-wrap items-center mg-bt10 
											<?=$dato['estado'] == 2 ? "success" :"" ?>
											<?=$dato['estado'] == 3 ? "cancel" :"" ?>
										">
											<div class="item">								
												<p>Cliente: <span class="bold"> <?=$dato['nombre']?></span></p>
												<p>Email: <span class="bold"> <?=$dato['email']?></span></p>
												<p>Teléfono: <span class="bold"> <?=$dato['telefono']?></span></p>
											</div>									
											<div class="item">
												<p>Fecha: <span class="bold"> <?=$dato['fecha']?></span></p>
												<p>Hora: <span class="bold"> <?=$dato['hora']?> hrs.</span></p>
												<p>Cant. Personas: <span class="bold"> <?=$dato['cantidad']?></span></p>
											</div>
											<div class="item">
												<span>Comentario:</span>
												<p class="comentario"> <?=($dato['comentario']) ? $dato['comentario'] : "<span class='colorLight'>Sin comentarios</span>" ?></p>
											</div>
											<div class="item al-ct">
												<span>Estado:</span>
												<?php if($dato['estado'] == 1):?>
													<p class="estado">Pendiente</p>
												<?php elseif($dato['estado'] == 2):?>
													<p class="estado">Confirmado</p>
												<?php else : ?>
													<p class="estado">Cancelado</p>
												<?php endif; ?>	
											</div>
											<div class="item container-wrap justify-end">
												<?php if($dato['estado'] == 1):?>
													<a href="models/confirmar-reserva.php?id=<?=$dato['id']?>" class="btn2 " title="Confirmar reserva"> 
														<img src="../assets/icons/check.svg" alt="Icono Check">
													</a>
													<a href="models/cancelar-reserva.php?id=<?=$dato['id']?>" class="btn2 " title="Cancelar reserva"> 
														<img src="../assets/icons/cancel.svg" alt="Icono Check">
													</a>								
												<?php elseif ($dato['estado'] == 2):?>																	
													<a href="models/cancelar-reserva.php?id=<?=$dato['id']?>" class="btn2 " title="Cancelar reserva"> 
														<img src="../assets/icons/cancel.svg" alt="Icono Check">
													</a>
												<?php else : ?>
													<div></div>
												<?php endif; ?>	
											</div>
										</div>					
									<?php endwhile;
										else: ?>
											<div class="container-wrap align-items-center mg-bt20">
												<h2 class="sinpost">No hay reservaciones para mostrar</h2>
											</div>
									<?php endif; ?>			
								</div>					
							</div>							
							
							<div class="content content-2">															
								<div class="box-container">				
									<?php 
										$datos = selectalldatos($db, 'tabla_reservas', 2,'fecha');
										if(!empty($datos) && mysqli_num_rows($datos) >= 1):
											while($dato = mysqli_fetch_assoc($datos)):		
									?>
										<div class="box-items container-wrap items-center mg-bt10 
											<?=$dato['estado'] == 2 ? "success" :"" ?>
											<?=$dato['estado'] == 3 ? "cancel" :"" ?>
										">
											<div class="item">								
												<p>Cliente: <span class="bold"> <?=$dato['nombre']?></span></p>
												<p>Email: <span class="bold"> <?=$dato['email']?></span></p>
												<p>Teléfono: <span class="bold"> <?=$dato['telefono']?></span></p>
											</div>									
											<div class="item">
												<p>Fecha: <span class="bold"> <?=$dato['fecha']?></span></p>
												<p>Hora: <span class="bold"> <?=$dato['hora']?> hrs.</span></p>
												<p>Cant. Personas: <span class="bold"> <?=$dato['cantidad']?></span></p>
											</div>
											<div class="item">
												<span>Comentario:</span>
												<p class="comentario"> <?=($dato['comentario']) ? $dato['comentario'] : "<span class='colorLight'>Sin comentarios</span>" ?></p>
											</div>
											<div class="item al-ct">
												<span>Estado:</span>
												<?php if($dato['estado'] == 1):?>
													<p class="estado">Pendiente</p>
												<?php elseif($dato['estado'] == 2):?>
													<p class="estado">Confirmado</p>
												<?php else : ?>
													<p class="estado">Cancelado</p>
												<?php endif; ?>	
											</div>
											<div class="item container-wrap justify-end">
												<?php if($dato['estado'] == 1):?>
													<a href="models/confirmar-reserva.php?id=<?=$dato['id']?>" class="btn2 " title="Confirmar reserva"> 
														<img src="../assets/icons/check.svg" alt="Icono Check">
													</a>
													<a href="models/cancelar-reserva.php?id=<?=$dato['id']?>" class="btn2 " title="Cancelar reserva"> 
														<img src="../assets/icons/cancel.svg" alt="Icono Check">
													</a>								
												<?php elseif ($dato['estado'] == 2):?>																	
													<a href="models/cancelar-reserva.php?id=<?=$dato['id']?>" class="btn2 " title="Cancelar reserva"> 
														<img src="../assets/icons/cancel.svg" alt="Icono Check">
													</a>
												<?php else : ?>
													<div></div>
												<?php endif; ?>	
											</div>
										</div>					
									<?php endwhile;
										else: ?>
											<div class="container-wrap align-items-center mg-bt20">
												<h2 class="sinpost">No hay reservaciones para mostrar</h2>
											</div>
									<?php endif; ?>			
								</div>						
							</div>							
						</section>
					</div>
				</div>	
			</div>
			<?php borrarErrores(); ?>	
		</section>
	</div>
</div>

<?php  include '../layout/footer_admin.php' ?>


