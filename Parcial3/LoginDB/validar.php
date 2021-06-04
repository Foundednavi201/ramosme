<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['contraseña']=sha1($contrasena);
$conexion=mysqli_connect("localhost","root","I18100219","ramosmed");

$consulta="SELECT * FROM USUARIOS WHERE Usuario='$usuario' and Pssw='$contrasena'";
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
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);