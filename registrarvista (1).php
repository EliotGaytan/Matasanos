<?php


$dbcon = new mysqli("localhost", "root", "", "matasanos") or die("No se pudo connectar");

if(isset($_POST["submit"]))
{
	$sql = "INSERT INTO usuario(Password,Nombre,Apellidos,Edad,Sexo,Correo,Telefono) VALUES
    ('".$_POST["Contra"]."','".$_POST["Nombre"]."','".$_POST["Apellidos"]."','".$_POST["Edad"]."','".$_POST["Sexo"]."','".$_POST["Correo"]."','".$_POST["Telefono"]."')";
    mysqli_query($dbcon,$sql);
    header("Location: After_login.php" );
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/doctor-en-medicina (1).png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="estilos.css">


</head>

<body>
    <div class="header">
        <div class="sign-ligin-btns">
            <ul>

                <li>
                    <a href="index.html"><input type="submit" value="Regresar" class="button"></a>
                </li>       
                
            </ul>
        </div>
    </div>

    <form class="formulario" method="post" enctype="multipart/form-data" >

        <h1>Registrate</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre"  id="Nombre" name="Nombre">

            </div>

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Apellidos" id="Apellidos" name="Apellidos">

            </div>

            <div class="input-contenedor">
                <i class="fas fa-hourglass-half icon"></i>
                <input type="text" placeholder="Edad" id="Edad" name="Edad">

            </div>

            <div class="radio">
                <i class="fas fa-mars icon"></i>
                <input type="radio" name="Sexo" id="Sexo" value="M">
                <label for="Masculino">Masculino</label>
            </div>

            <div class="radio">
                <i class="fas fa-venus icon"></i>
                <input type="radio" name="Sexo" id="Sexo" value="F">
                <label for="Femenino">Femenino</label>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-phone-volume icon"></i>
                <input type="text" placeholder="Telefono" id="Telefono" name="Telefono">

            </div>

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo Electronico" id="Correo" name="Correo">

            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" id="Contra" name="Contra">

            </div>
            <input id="submit" name="submit" type="submit" value="Registrate" class="button" >
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.html"> Iniciar Sesion</a></p>
        </div>
    </form>

</body>

</html>