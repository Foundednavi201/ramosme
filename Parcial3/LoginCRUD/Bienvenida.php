<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estiloBienvenida.css">
    <title>Bienvenida</title>
</head>
<body>
    <form action="BDCRUD.php" class="Bienvenida" method="post">
        <h1>Bienvenido !!!</h1>
        <br>
        <br>
        <?php
            session_start();
            if(!isset($_SESSION["usuario"])){
                header("location:index.php");
            }
        ?>
    
        <?php
            echo "<h1>Sesión iniciada como:  " . $_SESSION["usuario"] . "</h1><br><br>";
        ?>

        <input type="submit" value="Continuar" class="btnContinuar">
    </form>

</body>
</html>