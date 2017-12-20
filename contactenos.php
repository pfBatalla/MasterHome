<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="ICONS/iconMH.png">
	<link rel="stylesheet" type="text/css" href="CSS/estilosRegistros.css">
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
	
	<div id="formularioContacto">
	<h1 ><font color="grey">Contacte con nosotros</font></h1></legend>
		<form name="contactenos" method="POST" action="contactenos.php">
			<table id="tablaContacto">
				<tr>
					<td width="300px" align= "center">
						<input type="text" name="nombre" maxlength="50" size="20" placeholder="Nombre ...">
					</td>
					<td>
						<input type="text" name="apellido" maxlength="50" size="20" placeholder="Apellido ...">
					</td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="correo" maxlength="80" size="30" placeholder="Correo electrónico ...">
					</td>
					<td>
						<input type="text" name="tlfn" maxlength="9" size="10" placeholder="Teléfono...">
					</td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
				<tr>
					<td width="300px"></td>
				</tr>
			</table>
			<br>
			<input type="text" name="asunto" maxlength="30" size="50" placeholder="Asunto...">
			<br><br>
			<textarea name="mensaje" maxlength="1000" cols="40" rows="5" placeholder="Escriba su mensaje aquí ... " style="resize:none"></textarea>
			<br><br>	
			<input type="submit" id="siguiente" name="enviar" value="Enviar">
		</form>
	</div>

	<?php
		include('footer.php');
		pie();
	?>
</body>
</html>
