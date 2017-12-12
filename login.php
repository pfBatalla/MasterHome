<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="ICONS/iconMH.png">
        <link rel="stylesheet" type="text/css" href="CSS/estilosRegistros.css">
    </head>
    <?php
        session_start();
        require('header.php');
        echo "<header>";
                cabecera();
        echo "</header>";
        echo "<br>";
        echo "<body>";
	if ((!isset($_POST['enviar']))) {
		?>
		<div id="loguearse">
		<h1><font color="grey">Inicia Sesión</font></h1>
		<table id="inicioSesion">
			<form action="' . $_SERVER['PHP_SELF'] . '" method="POST">
				<tr>
					<td width="300px" align= "center"><label>Usuario: </label></td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
			
				<tr>
					<td width="300px" align= "center"><input type="text" placeholder="Usuario" name="usuario" class="texto" style="background-color: rgba(82, 210, 241, 0.295)" required></td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
					<td width="300px" align= "center"><label>Contraseña: </label></td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
					<td width="300px" align= "center"><input type="password" name="contra" class="texto" style="background-color: rgba(82, 210, 241, 0.295)" required></td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
				<tr>
					<td width="300px" align= "center"><input type="submit" id="siguiente" name="enviar" value="Enviar" ></td>
				</tr>
				<tr>
					<td width="300px" align= "center"><small>Si no tienes ninguna cuenta en MasterHome,<br>registrate con un solo <a href="registroDatosInicio.php">click</a></small></td>
				</tr>
			</form>
		</table>
	</div>
		
		
		<?php
	}else {
		if((isset($_POST['enviar']))) {
			echo '<div id="mngerror"> ERROR: No existe ningun usuario con ese login/password en la BD.</div>';
		}else{
			session_start();
			
					$_SESSION['usuario'] = $_POST['usuario'];
					$_SESSION['contra'] = $_POST['contra'];
					header("Location: tareas.html");
					var_dump($_SESSION['usuario']);

		}
		
	}
?>
</body>
</html>