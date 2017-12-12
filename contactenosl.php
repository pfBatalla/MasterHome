<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="img/iconMH.png">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/contacto.css">
	<title>Contactenos- MasterHome</title>
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
<br>
	<div id="formulario">
		<legend><h1>Contacte con nosotros</h1></legend>
		<form name="contactenos" method="POST" action="contactenos.php">
			<table width="500px">
				<tr>
					<td>
						<input type="text" name="nombre" maxlength="50" size="20" placeholder="Nombre ...">
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="apellido" maxlength="50" size="20" placeholder="Apellido ...">
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="correo" maxlength="80" size="30" placeholder="Correo electrónico ...">
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="tlfn" maxlength="30" size="10" placeholder="Teléfono...">
					</td>
				</tr>
				<tr>
					<td>
						<textarea name="mensaje" maxlength="1000" cols="40" rows="5" placeholder="Escriba su mensaje aquí ... "></textarea>
					</td>
				</tr>
			</table>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</div>

</body>
</html>
