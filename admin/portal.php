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
					<h3>Configuraciones Generales</h3>
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
									<div class="box-week container-wrap align-items-center mg-bt20">
										<?php 
											$datos = obtenerdatos($db, 'tabla_descansoSemanal', 1);
											if(!empty($datos) && mysqli_num_rows($datos) >= 1):
												while($dato = mysqli_fetch_assoc($datos)):							
												$dia_seleccionado = $dato['dia'];							
										?>				
											<h2 class="title">Día de descanso Semanal</h2>
											<p class="w100 text">Selecciona otro día para modificar el día de descanso semanal.</p>
											<form class="w100 container-wrap" action="models/week_update.php" method="post">
												<input type="hidden" value="1" name="sede">
												<div class="box-field">
													<input type="radio" name="semana" value="0" <?php if($dia_seleccionado == 0){ echo 'checked';} ?> />
													<label for="domingo">Domingo</label>
												</div>
												<div class="box-field">
													<input type="radio" name="semana" value="1" <?php if($dia_seleccionado == 1){ echo 'checked';} ?> />
													<label for="lunes">Lunes</label>
												</div>
												<div class="box-field">
													<input type="radio" name="semana" value="2" <?php if($dia_seleccionado == 2){ echo 'checked';} ?> />
													<label for="martes">Martes</label>
												</div>
												<div class="box-field">
													<input type="radio" name="semana" value="3" <?php if($dia_seleccionado == 3){ echo 'checked';} ?> />
													<label for="Miercoles">Miercoles</label>
												</div>
												<div class="box-field">
													<input type="radio" name="semana" value="4" <?php if($dia_seleccionado == 4){ echo 'checked';} ?>/>
													<label for="Jueves">Jueves</label>
												</div>
												<div class="box-field">
													<input type="radio" name="semana" value="5" <?php if($dia_seleccionado == 5){ echo 'checked';} ?> />
													<label for="Viernes">Viernes</label>
												</div>
												<div class="box-field mg-bt20">
													<input type="radio" name="semana" value="6" <?php if($dia_seleccionado == 6){ echo 'checked';} ?> />
													<label for="Sabado">Sabado</label>
												</div>
												<div class="box-field mg-bt20">
													<input type="radio" name="semana" value="8" <?php if($dia_seleccionado == 6){ echo 'checked';} ?> />
													<label for="Sabado">Sin Descanso</label>
												</div>
												<div class="w100">
													<button type="submit" class="btn btn-verde">Cambiar Día</button>	
												</div>
											</form>						
										<?php endwhile;						
										endif; ?>			
									</div>
									<div class="box-blockedDays">
										<h2 class="title">Días Bloqueados</h2>										
										<div class="box-container-days">
											<div class="colum-left">
											<p class="w100 text">Listado de días bloqueados</p>	
												<?php 
													$datos = selectalldatos($db, 'tabla_horasbloqueadas', 1, 'id');
													if(!empty($datos) && mysqli_num_rows($datos) >= 1):
														while($dato = mysqli_fetch_assoc($datos)):																	
												?>
													<div class="box-day w100">
														<p><?=$dato['fecha']?></p>
														<a href="models/dayblocked_delete.php?id=<?=$dato['id']?>" class="btn2 " title="Borrar fecha"> 
															<img src="../assets/icons/trash.svg" alt="Icono tachito">
														</a>
													</div>
												<?php endwhile;						
													endif; ?>		
											</div>
											<div class="colum-right">
												<p class="w100 mg-bt20">Ingresa una fecha para bloquear las reservas</p>						
												<form class="w100 container-wrap" action="models/dayblocked_add.php" method="post">
													<input type="hidden" value="1" name="sede">
													<div class="box-field w60 mg-bt20">
														<label for="domingo">Fecha</label>
														<input type="date" name="fecha" required/>
													</div>
													<!-- <div class="box-field w60 mg-bt20">
														<label for="domingo">Hora de Inicio</label>
														<input type="time" name="horainicio" />
													</div>
													<div class="box-field w60 mg-bt20">
														<label for="domingo">Hora de Termino</label>
														<input type="time" name="horafin" />
													</div>								 -->
													<div class="w100">
														<button type="submit" class="btn btn-verde">Bloquear Día</button>	
													</div>
												</form>					
											</div>
										</div>
									</div>			
								</div>							
							</div>							
							
							<div class="content content-2">															
								<div class="box-container">				
									<div class="box-week container-wrap align-items-center mg-bt20">
										<?php 
											$datos = obtenerdatos($db, 'tabla_descansoSemanal', 2);
											if(!empty($datos) && mysqli_num_rows($datos) >= 1):
												while($dato = mysqli_fetch_assoc($datos)):							
												$dia_seleccionado = $dato['dia'];							
										?>				
											<h2 class="title">Día de descanso Semanal</h2>
											<p class="w100 text">Selecciona otro día para modificar el día de descanso semanal.</p>
											<form class="w100 container-wrap" action="models/week_update.php" method="post">
											<input type="hidden" value="2" name="sede">
												<div class="box-field">
													<input type="radio" name="semana" value="0" <?php if($dia_seleccionado == 0){ echo 'checked';} ?> />
													<label for="domingo">Domingo</label>
												</div>
												<div class="box-field">
													<input type="radio" name="semana" value="1" <?php if($dia_seleccionado == 1){ echo 'checked';} ?> />
													<label for="lunes">Lunes</label>
												</div>
												<div class="box-field">
													<input type="radio" name="semana" value="2" <?php if($dia_seleccionado == 2){ echo 'checked';} ?> />
													<label for="martes">Martes</label>
												</div>
												<div class="box-field">
													<input type="radio" name="semana" value="3" <?php if($dia_seleccionado == 3){ echo 'checked';} ?> />
													<label for="Miercoles">Miercoles</label>
												</div>
												<div class="box-field">
													<input type="radio" name="semana" value="4" <?php if($dia_seleccionado == 4){ echo 'checked';} ?>/>
													<label for="Jueves">Jueves</label>
												</div>
												<div class="box-field">
													<input type="radio" name="semana" value="5" <?php if($dia_seleccionado == 5){ echo 'checked';} ?> />
													<label for="Viernes">Viernes</label>
												</div>
												<div class="box-field mg-bt20">
													<input type="radio" name="semana" value="6" <?php if($dia_seleccionado == 6){ echo 'checked';} ?> />
													<label for="Sabado">Sabado</label>
												</div>
												<div class="box-field mg-bt20">
													<input type="radio" name="semana" value="8" <?php if($dia_seleccionado == 6){ echo 'checked';} ?> />
													<label for="Sabado">Sin Descanso</label>
												</div>
												<div class="w100">
													<button type="submit" class="btn btn-verde">Cambiar Día</button>	
												</div>
											</form>						
										<?php endwhile;						
										endif; ?>			
									</div>
									<div class="box-blockedDays">
										<h2 class="title">Días Bloqueados</h2>
										
										<div class="box-container-days">
											<div class="colum-left">
											<p class="w100 text">Listado de días bloqueados</p>	
												<?php 
													$datos = selectalldatos($db, 'tabla_horasbloqueadas', 2, 'id');
													if(!empty($datos) && mysqli_num_rows($datos) >= 1):
														while($dato = mysqli_fetch_assoc($datos)):																	
												?>
													<div class="box-day w100">
														<p><?=$dato['fecha']?></p>
														<a href="models/dayblocked_delete.php?id=<?=$dato['id']?>" class="btn2 " title="Borrar fecha"> 
															<img src="../assets/icons/trash.svg" alt="Icono tachito">
														</a>
													</div>
												<?php endwhile;						
													endif; ?>		
											</div>
											<div class="colum-right">
												<p class="w100 mg-bt20">Ingresa una fecha para bloquear las reservas</p>						
												<form class="w100 container-wrap" action="models/dayblocked_add.php" method="post">
													<input type="hidden" value="2" name="sede">
													<div class="box-field w60 mg-bt20">
														<label for="domingo">Fecha</label>
														<input type="date" name="fecha" required/>
													</div>
													<!-- <div class="box-field w60 mg-bt20">
														<label for="domingo">Hora de Inicio</label>
														<input type="time" name="horainicio" />
													</div>
													<div class="box-field w60 mg-bt20">
														<label for="domingo">Hora de Termino</label>
														<input type="time" name="horafin" />
													</div>								 -->
													<div class="w100">
														<button type="submit" class="btn btn-verde">Bloquear Día</button>	
													</div>
												</form>					
											</div>
										</div>
									</div>			
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


