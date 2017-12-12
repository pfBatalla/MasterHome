<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
</head>
<?php
function cabecera(){
    ?>
<div id="slogan">
    <div id="fila">
        <img id="logo" src="IMG/logoMH.png">
        <h1>Master Home</h1>
    </div>
        <p>Organizando tu casa</p>
        <div class="clearfix"></div>
</div>
<ul>
<li><a href="login.php">Entrar</a></li>
<li><a href="registroDatosInicio.php">Registro</a></li>
</ul>
<nav id="menu">
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="tareas.php">Tareas</a></li>
        <li><a href="miembros.php">Miembros</a></li>
        <li><a href="contactenos.php">Contacto</a></li>
        <li><a href="recetas.php">Recetas</a></li>
        <li><a href="iniDaw.html">Nosotros</a></li>
        <div class="clearfix"></div>
    </ul>
</nav>
<?php
}
?>