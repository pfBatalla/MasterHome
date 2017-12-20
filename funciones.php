<?php

function conectar($ip, $user, $pass, $bd) {
	$encendida = mysqli_connect($ip, $user, $pass, $bd);

	return $encendida;
}

function registrarse(){		
	$usuario = $_SESSION['nombre'];
	$password = $_SESSION['contrasenya'];
	$encendida = conectar('localhost', 'root' , '', 'masterhome');
	mysqli_set_charset($encendida, 'UTF8');
	$consulta= 'SELECT Usuario FROM usuarios WHERE Usuario = "'.$_SESSION['nombre']. '"';
		$comprueba=  mysqli_query($encendida, $consulta);
		$noEsta = true;
		while ($linea= mysqli_fetch_row($comprueba)) {
			
		if (($linea[0] == $_SESSION['nombre'])) {
			$noEsta = false;	
		}
	}
	if(!$noEsta){
		echo "<font color= 'red'><h1>El usuario ya existe</h1></font>";
		echo "<br><a href= 'registro.php'>Volver</a>";
	}else{
		$inserta = 'INSERT INTO `usuarios` (`Usuario`,`Password`) VALUES ("'.$usuario.'","'.sha1($password).'")';
		mysqli_query($encendida, $inserta);
		?>
		<script>
		    alert("Datos introducidos correctamente");
		</script>
		<?php
		header('Location: login.php');
	}
}

function ValidaLogin(){
	$encendida= conectar('localhost', 'root' , '', 'MASTER_HOME');
	mysqli_set_charset($encendida, 'UTF8');
	$consulta= 'SELECT usuario FROM usuarios WHERE usuario = "'.$_POST['usuario']. '"';
	$resultado=  mysqli_query($encendida, $consulta);
	$validado= true;
	var_dump($consulta);
	$password = $_POST['contra'];
	while ($linea= mysqli_fetch_row($resultado)) {
		
		if (($linea[0] == 0) || ($linea[1] != (sha1($password)))) {
			$validado = false;
		}
	}

	return $validado;
}




?>