<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['contraseña']=sha1($contrasena);
$conexion=mysqli_connect("localhost","root","I18100219","ramosme");

$consulta="SELECT * FROM Usuarios WHERE Nombre='$usuario' and Pssw='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas)
{
    header("location:Bienvenida.php");
}
else
{
    ?>
    <?php
    include("index.php");
    ?>
        <h1 class="bad">ERROR EN LA AUTENTIFICACIÓN</h1>
        <style>
            .bad
            {
                color: black;
                margin-top: 10px;
                background-color: lightgreen;
                text-align: center;
            }
        </style>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);