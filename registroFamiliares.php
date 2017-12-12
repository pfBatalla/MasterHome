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
        if((!isset($_POST['introduceNombres'])) && (!isset($_POST['finalizar']))){
    ?>
            <div id="Formulario2" align="center">
            <form id="miembros" action="<?php $_SERVER['PHP_SELF'] ?>"  method="POST">
                <legend><h4>Familiares :</h4></legend>
                <br>
                    <table align="center" >
                        <tr>
                            <td width="300px"><p align="right">Cuantas personas viven en la casa: <font color="red">*</font></p></td>
                            <td width="10px"></td>
                            <td width="300px"><input type="radio" name="miembros" value="1" checked>2 miembros<br>
                                <input type="radio" name="miembros" value="2">3 miembros<br>
                                <input type="radio" name="miembros" value="3">4 miembros<br>
                                <input type="radio" name="miembros" value="4"><input type="text" name="numeroIntroducido" value="" placeholder="Introduce un número" size="17"></td>
                        </tr>
                        <tr>
                            <td width="300px"></td>
                            <td width="10px"></td>
                            <td width="10px"></td>
                        </tr>
                        <tr>
                            <td width="300px"></td>
                            <td><input type="submit" name="introduceNombres" value="Introducir datos" id="siguiente"></td>
                            <td width="10px"></td>
                    </tr>
                    </table>
            </form>
            </div>
        <?php
        }else if( (isset($_POST['introduceNombres'])) && (!isset($_POST['finalizar'])) ){
        ?>
                <div id="Formulario2IntroduceDatos" align="center">
                <form id="miembros" action="<?php $_SERVER['PHP_SELF'] ?>"  method="POST">
        <?php
                    switch ($_POST['miembros']) {
                        case '1':
                        $cantidad = 2;
                            ?>
                            <legend><h4>Familiares :</h4></legend>
                            
                            <?php
                                for($i = 1; $i<=$cantidad; $i++){
                                ?>
                                <br>
                                <legend><h5>Integrante <?php echo $i;?></h5></legend>
                                <table align="center">
                                <tr>
                                    <td width="200px"><p align="center">Nombre : <font color="red">*</font></p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="text" name="nombreMiembro<?php echo $i;?>" value="" required size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Primer apellido : <font color="red">*</font></p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="text" name="primerApellidoMiembro<?php echo $i;?>" value="" required size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Segundo apellido : </p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="text" name="segundoApellidoMiembro<?php echo $i;?>" value="" size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Correo : <font color="red">*</font></p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="email" name="correoMiembro<?php echo $i;?>" value="" required placeholder="ejemplo@gmail.com" size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Sexo : </p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><select id="seleccione">
                                                        <option disable>Seleccione uno.</option>
                                                        <option name="sexoMiembro<?php echo $i;?>" value="Hombre">Hombre</option>
                                                        <option name="sexoMiembro<?php echo $i;?>" value="Mujer">Mujer</option>
                                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Estado laboral :</p></td>
                                    </tr>
                                <tr>
                                    <td width="200px"><select id="seleccione">
                                                        <option disable>Seleccione uno.</option> 
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Trabajando (Horario diurno)">Trabajando (Horario diurno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Trabajando (Horario nocturno)">Trabajando (Horario nocturno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Estudiando (Horario diurno)">Estudiando (Horario diurno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Estudiando (Horario nocturno)">Estudiando (Horario nocturno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="En casa">En casa</option> 
                                </tr>
                            </table>
                        
                                <?php    
                                }
                                ?>
                                <br>
                                    <p id="botonFormulario"><input type="submit" name="finalizar" value="Finalizar" id="siguiente"></p>
                                </form>
                                </div>
                                
                                <?php
                            break;
                        case '2':
                        $cantidad = 3;
                            ?>
                            <legend><h4>Familiares :</h4></legend>
                            <?php
                            for($i = 1; $i<=$cantidad; $i++){
                                ?>
                                <br>
                                <legend><h5>Integrante <?php echo $i;?></h5></legend>
                                <table align="center">
                                <tr>
                                    <td width="200px"><p align="center">Nombre : <font color="red">*</font></p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="text" name="nombreMiembro<?php echo $i;?>" value="" required size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Primer apellido : <font color="red">*</font></p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="text" name="primerApellidoMiembro<?php echo $i;?>" value="" required size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Segundo apellido : </p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="text" name="segundoApellidoMiembro<?php echo $i;?>" value="" size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Correo : <font color="red">*</font></p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="email" name="correoMiembro<?php echo $i;?>" value="" required placeholder="ejemplo@gmail.com" size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Sexo : </p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><select id="seleccione">
                                                        <option disable>Seleccione uno.</option>
                                                        <option name="sexoMiembro<?php echo $i;?>" value="Hombre">Hombre</option>
                                                        <option name="sexoMiembro<?php echo $i;?>" value="Mujer">Mujer</option>
                                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Estado laboral :</p></td>
                                    </tr>
                                <tr>
                                    <td width="200px"><select id="seleccione">
                                                        <option disable>Seleccione uno.</option> 
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Trabajando (Horario diurno)">Trabajando (Horario diurno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Trabajando (Horario nocturno)">Trabajando (Horario nocturno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Estudiando (Horario diurno)">Estudiando (Horario diurno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Estudiando (Horario nocturno)">Estudiando (Horario nocturno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="En casa">En casa</option> 
                                </tr>
                            </table>
                        
                                <?php    
                                }
                                ?>
                                <br>
                                    <p id="botonFormulario"><input type="submit" name="finalizar" value="Finalizar" id="siguiente"></p>
                                </form>
                                </div>
                                
                                <?php
                        break;
                        case '3':
                        $cantidad = 4;
                            ?>
                            <legend><h4>Familiares :</h4></legend>
                            <?php
                            for($i = 1; $i<=$cantidad; $i++){
                                ?>
                                <br>
                                <legend><h5>Integrante <?php echo $i;?></h5></legend>
                                <table align="center">
                                    <tr>
                                        <td width="200px"><p align="center">Nombre : <font color="red">*</font></p></td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><input type="text" name="nombreMiembro<?php echo $i;?>" value="" required size="30"></td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><p align="center">Primer apellido : <font color="red">*</font></p></td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><input type="text" name="primerApellidoMiembro<?php echo $i;?>" value="" required size="30"></td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><p align="center">Segundo apellido : </p></td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><input type="text" name="segundoApellidoMiembro<?php echo $i;?>" value="" size="30"></td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><p align="center">Correo : <font color="red">*</font></p></td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><input type="email" name="correoMiembro<?php echo $i;?>" value="" required placeholder="ejemplo@gmail.com" size="30"></td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><p align="center">Sexo : </p></td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><select id="seleccione">
                                                            <option disable>Seleccione uno.</option>
                                                            <option name="sexoMiembro<?php echo $i;?>" value="Hombre">Hombre</option>
                                                            <option name="sexoMiembro<?php echo $i;?>" value="Mujer">Mujer</option>
                                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><p align="center">Estado laboral :</p></td>
                                        </tr>
                                    <tr>
                                        <td width="200px"><select id="seleccione">
                                                            <option disable>Seleccione uno.</option> 
                                                            <option name="trabajaMiembro<?php echo $i;?>" value="Trabajando (Horario diurno)">Trabajando (Horario diurno)</option>
                                                            <option name="trabajaMiembro<?php echo $i;?>" value="Trabajando (Horario nocturno)">Trabajando (Horario nocturno)</option>
                                                            <option name="trabajaMiembro<?php echo $i;?>" value="Estudiando (Horario diurno)">Estudiando (Horario diurno)</option>
                                                            <option name="trabajaMiembro<?php echo $i;?>" value="Estudiando (Horario nocturno)">Estudiando (Horario nocturno)</option>
                                                            <option name="trabajaMiembro<?php echo $i;?>" value="En casa">En casa</option> 
                                    </tr>
                                </table>
                        
                                <?php    
                                }
                                ?>
                                <br>
                                    <p id="botonFormulario"><input type="submit" name="finalizar" value="Finalizar" id="siguiente"></p>
                                </form>
                                </div>
                                
                                <?php
                        break;
                        case '4':
                            $cantidad = $_POST['numeroIntroducido'];
                            ?>
                            <legend><h4>Familiares :</h4></legend>
                            <?php
                            for($i = 1; $i<=$cantidad; $i++){
                                ?>
                                <br>
                                <legend><h5>Integrante <?php echo $i;?></h5></legend>
                                <table align="center">
                                <tr>
                                    <td width="200px"><p align="center">Nombre : <font color="red">*</font></p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="text" name="nombreMiembro<?php echo $i;?>" value="" required size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Primer apellido : <font color="red">*</font></p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="text" name="primerApellidoMiembro<?php echo $i;?>" value="" required size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Segundo apellido : </p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="text" name="segundoApellidoMiembro<?php echo $i;?>" value="" size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Correo : <font color="red">*</font></p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><input type="email" name="correoMiembro<?php echo $i;?>" value="" required placeholder="ejemplo@gmail.com" size="30"></td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Sexo : </p></td>
                                </tr>
                                <tr>
                                    <td width="200px"><select id="seleccione">
                                                        <option disable>Seleccione uno.</option>
                                                        <option name="sexoMiembro<?php echo $i;?>" value="Hombre">Hombre</option>
                                                        <option name="sexoMiembro<?php echo $i;?>" value="Mujer">Mujer</option>
                                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200px"><p align="center">Estado laboral :</p></td>
                                    </tr>
                                <tr>
                                    <td width="200px"><select id="seleccione">
                                                        <option disable>Seleccione uno.</option> 
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Trabajando (Horario diurno)">Trabajando (Horario diurno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Trabajando (Horario nocturno)">Trabajando (Horario nocturno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Estudiando (Horario diurno)">Estudiando (Horario diurno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="Estudiando (Horario nocturno)">Estudiando (Horario nocturno)</option>
                                                        <option name="trabajaMiembro<?php echo $i;?>" value="En casa">En casa</option> 
                                </tr>
                            </table>
                        
                                <?php    
                                }
                                ?>
                                <br>
                                    <p id="botonFormulario"><input type="submit" name="finalizar" value="Finalizar" id="siguiente"></p>
                                </form>
                                </div>
                                
                                <?php
                        break;
                        default:
                            # code...
                            break;
                    }
                }else{
                    echo "HOLAAAA";
                }
        ?>
        
        </body>
</html>