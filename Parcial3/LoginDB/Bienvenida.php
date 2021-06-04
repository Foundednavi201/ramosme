<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenido !!!</h1>
    <br>
    <br>

    <?php
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("location:login.php");
        }
    ?>
    <?php
        echo "<h1>Sesión iniciada como:  " . $_SESSION["usuario"] . "</h1><br><br>";
    ?>
    <form action="CerrarSesion.php">
        <input type="submit" value="Cerrar sesión">
    </form>
    <!--<p><a href="CerrarSesion.php">Cerrar Sesión</a></p>-->
</body>
</html>