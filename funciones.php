<?php

function conectar($ip, $user, $pass, $bd) {
	$encendida = mysqli_connect($ip, $user, $pass, $bd);

	return $encendida;
}

function registrarse(){
		
	if(($_POST['usuario'] == "") || ($_POST['contra'] == "")){
		echo "<font color= 'red'>Por favor rellene todos los campos</font>";
		}else{
			$usuario = $_SESSION['usuario'];
			$password = $_SESSION['contra'];
			$encendida = conectar('localhost', 'root' , '', 'MASTER_HOME');
			mysqli_set_charset($encendida, 'UTF8');
			$consulta= 'SELECT usuario FROM usuarios WHERE usuario = "'.$_SESSION['usuario']. '"';
				$comprueba=  mysqli_query($encendida, $consulta);
				$noEsta = true;
				while ($linea= mysqli_fetch_row($comprueba)) {
					
				if (($linea[0] == $_SESSION['usuario'])) {
					$noEsta = false;	
				}
			}
			if(!$noEsta){
				echo "<font color= 'red'><h1>El usuario ya existe</h1></font>";
				echo "<br><a href= 'registro.php'>Volver</a>";
			}else{
				$inserta = 'INSERT INTO `usuarios` (`usuario`,`password`) VALUES ("'.$usuario.'","'.sha1($password).'")';
				mysqli_query($encendida, $inserta);
				echo "<h1>USUARIO REGISTRADO</h1>";
				echo "<br><a href= 'login.php'>Loguearse </a>";	
		}
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