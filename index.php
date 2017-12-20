<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="ICONS/iconMH.png">
        <title>Inicio- MasterHome</title>
	</head>
    <?php
	session_start();
	require('header.php');
	echo "<header>";
			cabecera();
	echo "</header>";
	echo "<br>";
	echo "<body>";
	?>
        <section id="contenido">
			<div id="contenidoTexto">
				<ul>
						<li> &nbsp;&nbsp;&nbsp;&nbsp;Bienvenido a <strong><big> Master Home </big></strong>, una página web, diseñada por estudiantes<br>
								del ciclo formativo de <strong><em>"Diseño de aplicaciones WEB,del Instituto IES Miralcamp."</em></strong>
						</li>
						<br><br>
						<li> &nbsp;&nbsp;&nbsp;&nbsp;Es una WEB, pensada y diseñada para la facilitación de la distribución de las<br>
								tareas domésticas, además de eso tambien contiene un apartado de <a id="enlaceReceta" href="#">recetas</a>. Una WEB sencilla<br>
								de utilizar, cuyo funcionamiento no queda más lejos de el uso de una ruleta,como sistema de repartición de tareas.<br>
								Estas tareas repartidas aleatoriamente se mostraran posteriomente en un calendario a modo de recordatorio, del cual se<br>podrán ajustar las horas a realizar ciertas tareas.
						</li>
						<br><br>
						<li> &nbsp;&nbsp;&nbsp;&nbsp;Para poder hacer uso de esta aplicación WEB, solo deberás de registrárte en <a href="registroDatosInicio.php">este enlace</a><br>
								y introducir a tus familiares o compañeros de piso para poder empezar a organizar <br>
								las tareas domésticas.
						</li>					
					</ul>
			</div>
			</div>
			<div id="ContenidoImagen">
				<img src="img/fondoInicio.jpg" alt="Imagen fondo" id="imagen">
				<div class="clearfix"></div>
			</div>			
		</section>
		
		<div class="clearfix"></div>
		
		<?php
		include('footer.php');
			pie();
		?>
	</body>
</html>
