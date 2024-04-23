<?php 
	require_once ('redireccion.php'); 
	require_once ('helpers.php'); 
?>
<!doctype html>
<html lang="es">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Oscar Rojas">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	 
	<title>DTinto & Bife | Admin</title>
	<link rel="icon" href="../assets/img/logo.ico" type="image/ico">	
	<!-- main css -->	
	<link rel="shortcut icon" href="../assets/img/logo.ico">
  <link rel="stylesheet" type="text/css" href="../assets/css/oerostyles.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/css/all.min.css">	  
	<!-- SCRIPT -->	
	<script src="../assets/js/jquery.js"></script> 
</head>
<body>	
		<?php include 'aside.php' ?>

		<section class="w90" id="blogger">
				
			<div class="center">
				<div class="botones container-wrap space-between">
					<a href="../index.php" class="btn btn-azul"> <i class="fas fa-arrow-left"></i> Ir a la página principal</a>
					<div class="">
						<!-- <a href="models/listar_ideas.php" class="btn btn-azul"><i class="fas fa-download"></i> Listar Ideas </a>						 -->
						<a href="models/listar_ideas.php" class="btn btn-azul"><i class="far fa-file-excel"></i> Listar Ideas </a>						
					</div>
				</div>
					<?php if(isset($_SESSION['completado'])): ?>
						<div class="alerta-exito2" id="alert">
							<?=$_SESSION['completado']?>					
							<i class='fas fa-times'></i>  
						</div>
					<?php elseif(isset($_SESSION['fallo'])): ?>
						<div class="alerta-error2" id="alert">
							<?=$_SESSION['fallo']?>						
							<i class='fas fa-times'></i>
						</div>
					<?php endif; ?> 
				<div class="box pd20">				
					<?php 
						$ideas = todosIdeasAll($db);
						if(!empty($ideas) && mysqli_num_rows($ideas) >= 1):
							while($idea = mysqli_fetch_assoc($ideas)):		
					?>				
						<div class="box-item container-wrap align-items-center mg-bt20">
							<div class="box-datos w70">
								<p class=" pd10">#<?=$idea['id'].'  - '?><?=$idea['fechacreacion']?></p>
								<p class="titulo_area pd10"><?=$idea['area']?></p>
								<p class="parrafo_idea pd10"><?=$idea['idea']?></p>
								<p class="correo pd10"><?=$idea['email']?></p>
							</div>									
							<div class="w10 pd20">
								<?php if($idea['estado'] == 0) :?>
								<p class="estado ">Pendiente</p>
								<?php else : ?>
									<p class="estado ">Publicado</p>
								<?php endif; ?>	
							</div>
							<div class="w20 pd20">

								<?php if($idea['estado'] == 0) :?>
									<p class="estado ">Publicar</p>					
									<a href="models/publicar_idea.php?id=<?=$idea['id']?>" class="btn btn-plomo" title="Publicar"><i class="fas fa-check"></i></a>
								<?php else : ?>
									<p class="estado ">Quitar</p>
									<a href="models/retirar_idea.php?id=<?=$idea['id']?>" class="btn btn-azul" title="Quitar Publicación"><i class="fas fa-times"></i></a>
									<?php endif; ?>	

								<a href="models/idea_delete.php?id=<?=$idea['id']?>" class=" btn btn-rojo" title="Borrar"> <i class="fas fa-trash-alt"></i></a>
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
			<!-- center -->
			<?php borrarErrores(); ?>	
		</section>
	</div>
<script src="../assets/js/dtintoquery.js"></script>
