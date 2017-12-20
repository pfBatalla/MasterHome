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
    ?>
    <script>
    alert("Para finalizar el registro porfavor,\nverifique que estan todos los datos\nintroducidos correctamente");</script>
    
    <div id=mostrarDatos>
    <h2> Verificación de datos </h2>
    <br>
        <table border = 1px>
            <tr>
                <td>Usuario: <?php echo $_SESSION['nombre'] ;?> </td>
            </tr>
            <tr>
                <td>Contraseña: <?php  
                        $contra = $_SESSION['contrasenya'];
                        for( $i=0;  $i < strlen($contra); $i=$i + 1){
                            echo '*';
                        }?>
                </td>
            </tr>
            <tr>
                <td>Nombre de la familia: <?php echo $_SESSION['tablaFamilia'];?></td>
            </tr>
        </table>
    </div>
    </body>
<!include("funciones.php");
            registrarse();>


<?php
include('footer.php');
pie();
?>
</html>

