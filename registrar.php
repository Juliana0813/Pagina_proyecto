<?php

include("conexion.php");

if(isset($_POST['registro'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['documento']) >= 1 &&
        strlen($_POST['celular']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['fecha_nacimiento']) >= 1 &&
        strlen($_POST['fecha_expedicion']) >= 1 &&
        strlen($_POST['contrasena']) >= 1
        ){
            $name = trim($_POST['nombre']);
            $documento = trim($_POST['documento']);
            $celular = trim($_POST['celular']);
            $correo = trim($_POST['correo']);
            $direccion = trim($_POST['direccion']);
            $fecha_nacimiento = trim($_POST['fecha_nacimiento']);
            $fecha_expedicion = trim($_POST['fecha_expedicion']);
            $contrasena = trim($_POST['contrasena']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO informacion_personal_usuario
            (nombre, documento, celular, correo, direccion, fecha_nacimiento, 
            fecha_expedicion, contrasena, fecha)
                VALUES('$name', '$documento', '$celular', '$correo','$direccion', 
                '$fecha_nacimiento', '$fecha_expedicion', '$contrasena', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
                if($resultado) {
                ?>
                <div class="exitoso">Te has registrado satisfactoriamente!</div>
                <?php
                } else {
                ?>
                <div class="error">Ha ocurrido un error</div>
                <?php
                }
        }else {
            ?>
            <div class="error">Error! Debe diligenciar todos los campos</div>
            <?php
        } 
        
    }

?>