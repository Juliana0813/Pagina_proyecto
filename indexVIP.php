<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario Registro JULBANK®</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="POST" >

        <h2>Formulario de registro JULBANK®</h2>
        <p>INFORMACIÓN PERSONAL</p>

        <div class="input-wrapper">
            <input type="text" name="nombre" placeholder="Nombre Completo">
            <img class="input-icon" src="images/user.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="number" name="documento" placeholder="Documento de identificación">
            <img class="input-icon" src="images/id-card.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="number" name="celular" placeholder="Número de celular">
            <img class="input-icon" src="images/smartphone.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="email" name="correo" placeholder="Correo electrónico">
            <img class="input-icon" src="images/arroba.png" alt="">
        </div>     
        <div class="input-wrapper">
            <input type="text" name="direccion" placeholder="Direción de correspondencia">
            <img class="input-icon" src="images/location.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="fecha_nacimiento" placeholder="Fecha de nacimiento (dd/mm/aaaa)">
            <img class="input-icon" src="images/calendar.png" alt="">
        </div> 
        <div class="input-wrapper">
            <input type="text" name="fecha_expedicion" placeholder="Fecha de expedición (dd/mm/aaaa)">
            <img class="input-icon" src="images/calendar-tool-for-time-organization.png" alt="">
        </div>    
        <div class="input-wrapper">
            <input type="password" name="contrasena" placeholder="Contraseña">
            <img class="input-icon" src="images/lock.png" alt="">
        </div>
        <input class="boton" type="submit" name="registro" value="Finalizar registro">
    </form>
    
    <?php
        include("registrar.php");
    ?>

</body>
</html>