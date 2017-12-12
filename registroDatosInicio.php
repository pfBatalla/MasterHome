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
        if(!isset($_POST['siguiente'])){
        ?>
            <p id=bienvenidoRegistro>Bienvenido al sistema de registro para la aplicación <b>MasterHome</b>.</p>
            <div id="FormularioDatosInicio" align="center">
                <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="POST">
                    <legend><h1><font color="grey">Datos de Inicio :</font></h1></legend>
                    <br><br>
                    <table align="center">
                        <tr>
                            <td width="300px"><p align="center">Usuario: <font color="red">*</font></p></td>
                        </tr>
                        <tr>
                            <td width="300px"><p align="center"><input type="text" name="nombreUsuario" value="" required size="30"></p></td>
                        </tr>
                        <tr>
                            <td  width="300px"><p align="center">Contraseña: <font color="red">*</font><br> <small>La contraseña debe contener 8 carácteres entre: <br>[A-Z, a - z y 0 - 9] repetibles</small></p></td>
                        </tr>
                        <tr>
                            <td width="300px"><p align="center"><input  type="password" name="contrasenya" value="" required size="30"  minlength="8" maxlength="40" pattern="[A-Za-z0-9]+"></p></td>
                        </tr>
                        <tr>
                            <td  width="300px"><p align="center">Repite la contraseña: <font color="red">*</font></p></td>
                        </tr>
                        <tr>
                            <td width="300px"><p align="center"><input type="password" name="Repitecontrasenya" value="" required size="30"></p></td>
                        </tr>
                        <tr>
                            <td width="300px"></td>
                        </tr>
                        <tr>
                            <td> <p align="center"><br><input type="submit" id="siguiente" name="siguiente" value="Siguiente"></p></td>
                        </tr>
                </table>
                </form>
            </div>
        <?php
        }elseif($_POST['contrasenya'] != $_POST['Repitecontrasenya']){
            ?>
            <div id="FormularioDatosInicio" align="center">
            <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="POST">
                <legend><h4>Datos de Inicio :</h4></legend>
                <br>
                <table align="center">
                    <tr>
                        <td width="300px"><p align="center">Usuario: <font color="red">*</font></p></td>
                    </tr>
                    <tr>
                        <td width="300px"><p align="center"><input type="text" name="nombreUsuario" value="<?php echo $_POST['nombreUsuario']; ?>" required size="30"></p></td>
                    </tr>
                    <tr>
                        <td  width="300px"><p align="center">Contraseña: <font color="red">*</font><br> <small>La contraseña debe contener 8 carácteres entre: <br>[A-Z, a - z y 0 - 9] repetibles</small></p></td>
                    </tr>
                    <tr>
                        <td width="300px"><p align="center"><input  type="password" name="contrasenya" value="<?php echo $_POST['contrasenya']; ?>" required size="30"  minlength="8" maxlength="40" pattern="[A-Za-z0-9]+"></p></td>
                    </tr>
                    <tr>
                        <td  width="300px"><p align="center">Repite la contraseña: <font color="red">*</font></p></td>
                    </tr>
                    <tr>
                        <td width="300px"><p align="center"><input type="password" name="Repitecontrasenya" value="" required size="30" focused></p></td>
                    </tr>
                    <tr>
                        <td width="300px"><p align="center"><font color='red'> <small>Las contraseñas deben coincidir</small></font></p></td>
                    </tr>
                    <tr>
                        <td width="300px"></td>
                        <td width="10px"></td>
                        <td width="10px"></td>
                    </tr>
                    <tr>
                        <td> <p align="center"><br><input type="submit" id="siguiente" name="siguiente" value="Siguiente"></p></td>
                    </tr>
            </table>
            </form>
        </div>
        <?php 
        }else{
            header('Location: registroFamiliares.php');
            $_SESSION['nombre'] = $_POST['nombreUsuario'];
            $_SESSION['contrasenya'] = $_POST['contrasenya'];
        }
    
        
        ?>
    </body>
<html>